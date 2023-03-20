<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BackOfficeController extends AbstractController
{

    #[Route('/dashboard')]
    public function home(): Response
    {
        $title = "Accueil dashboard";

        return $this->render('backOffice/home.html.twig', [
            'title' => $title
        ]);
    }

    #[Route('/dashboard/profil')]
    public function profil(): Response
    {
        $title = "Dash profil";

        return $this->render('backOffice/profil.html.twig', [
            'title' => $title
        ]);
    }

    #[Route('/dashboard/manage')]
    public function manage(): Response
    {
        $title = "Dash Manage";
        
        return $this->render('backOffice/manage.html.twig', [
            'title' => $title
        ]);
    }
}