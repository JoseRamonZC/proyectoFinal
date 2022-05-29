<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Entity\Comentarios;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    public function index(ManagerRegistry $doctrine, Request $request, PaginatorInterface $paginator): Response
    {
        //Buscamos todos los post de los usuarios en la BBDD para ponerlos en el dashboard
            $user = $this->getUser();
            $em = $doctrine->getManager();
            $query = $em->getRepository(Posts::class)->BuscarTodosLosPosts();
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1), /*page number*/
                5 /*limit per page*/
            );
            return $this->render('dashboard/index.html.twig', [
                'pagination' => $pagination
            ]);

    }
}