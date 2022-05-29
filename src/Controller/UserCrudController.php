<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;


#[Route('/user/crud')]
class UserCrudController extends AbstractController
{
    #[Route('/', name: 'app_user_crud_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user_crud/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/pdf', name: 'app_user_crud_pdf', methods: ['GET'])]
    public function pdf(UserRepository $userRepository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($pdfOptions);
        
        $users = $userRepository->findAll();

        $html = $this->renderView('user_crud/pdf.html.twig', [
            'users' => $users,
        ]);

        //Cargamos el html en pdf y seleccionamos el tamaño 

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("mypdf.pdf", [
            "Attachment" =>true
        ]);
        
    }

    #[Route('/new', name: 'app_user_crud_new', methods: ['GET', 'POST'])]
    public function new(UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user_crud/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_crud_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user_crud/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user_crud/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_crud_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('app_user_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
