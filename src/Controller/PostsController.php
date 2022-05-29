<?php

namespace App\Controller;

use App\Entity\Comentarios;
use App\Entity\Posts;
use App\Form\ComentarioType;
use App\Form\PostsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

class PostsController extends AbstractController
{

    //Registramos un post y le cambiamos el nombre a uno aleatoria para que no haya ningún fallo en la BBDD

    #[Route('/registrar-post', name: 'RegistrarPost')]
    public function index(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $post = new Posts();
        $form = $this->createForm(PostsType::class, $post);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) { 
            echo "<script>alert('Post creado!');</script>";
                $brochureFile = $form['foto']->getData();
                if ($brochureFile) {
                    $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
    
                    // Movemos las fotos a la carpeta creada el /public
                    try {
                        $brochureFile->move(
                            $this->getParameter('fotos_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                       throw new Exception('Ha ocurrido un error');
                       
                    }
                    $post->setFoto($newFilename);
                }
                $user = $this->getUser();
                $post->setUser($user);
                $em = $doctrine->getManager();
                $em->persist($post); 
                $em->flush();
                return $this->redirect('/');
        }
        return $this->render('posts/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    //Al entrar a ver un post, saldrán los comentarios de los usuarios y al realizar un comentarios saldrá un mensaje de exito

    #[Route('/verPost/{id}', name: 'verPost')]
    public function verPosts($id,  ManagerRegistry $doctrine, PaginatorInterface $paginator, Request $request){
        $routeParams = $request->attributes->get('_route_params');
        $idPost = $routeParams["id"];

        $em = $doctrine->getManager();
        $comentario = new Comentarios();
        $post = $em->getRepository(Posts::class)->find($id);
        $queryComentarios = $em->getRepository(Comentarios::class)->BuscarComentariosDeUNPost($idPost);

        $form = $this->createForm(ComentarioType::class, $comentario);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            echo "<script>alert('Comentario agregado!');</script>";
            $user = $this->getUser();
            $comentario->setPosts($post);
            $comentario->setUser($user);
            $em->persist($comentario);
            $em->flush();
            // $this->addFlash('Exito', Comentarios::COMENTARIO_AGREGADO_EXITOSAMENTE);
            return $this->redirectToRoute('verPost',['id'=>$post->getId()]);
        }
        $pagination = $paginator->paginate(
            $queryComentarios, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            20 /*limit per page*/
        );
        return $this->render('posts/verPost.html.twig',['post'=>$post, 'form'=>$form->createView(), 'comentarios'=>$pagination]);
    }

    //Buscamos los posts de un usuario

    #[Route('/misPosts', name: 'misPosts')]
    public function misPosts(ManagerRegistry $doctrine){
        $em = $doctrine->getManager();
        $user = $this->getUser();
        $posts = $em->getRepository(Posts::class)->findBy(['user'=>$user]);
        return $this->render('posts/misPosts.html.twig', ['post'=>$posts]);
    }
}
