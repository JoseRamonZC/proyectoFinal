<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Form\PostsType;
use App\Repository\PostsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/posts/crud')]
class PostsCrudController extends AbstractController
{
    #[Route('/', name: 'app_posts_crud_index', methods: ['GET'])]
    public function index(PostsRepository $postsRepository): Response
    {
        return $this->render('posts_crud/index.html.twig', [
            'posts' => $postsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_posts_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PostsRepository $postsRepository): Response
    {
        $post = new Posts();
        $form = $this->createForm(PostsType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $postsRepository->add($post);

            return $this->redirectToRoute('app_posts_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('posts_crud/new.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_posts_crud_show', methods: ['GET'])]
    public function show(Posts $post): Response
    {
        return $this->render('posts_crud/show.html.twig', [
            'post' => $post,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_posts_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Posts $post, PostsRepository $postsRepository): Response
    {
        $form = $this->createForm(PostsType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $postsRepository->add($post);

            return $this->redirectToRoute('app_posts_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('posts_crud/edit.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_posts_crud_delete', methods: ['POST'])]
    public function delete(Request $request, Posts $post, PostsRepository $postsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$post->getId(), $request->request->get('_token'))) {
            $postsRepository->remove($post);
        }

        return $this->redirectToRoute('app_posts_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
