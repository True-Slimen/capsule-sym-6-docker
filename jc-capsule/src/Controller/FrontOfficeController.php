<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

class FrontOfficeController extends AbstractController
{

    #[Route('/accueil')]
    #[Route('/')]
    public function home(): Response
    {
        $title = "Accueil";

        return $this->render('frontOffice/home.html.twig', [
            'title' => $title
        ]);
    }

    #[Route('/capsules')]
    public function caps(): Response
    {
        $title = "Capsules";

        return $this->render('frontOffice/caps.html.twig', [
            'title' => $title
        ]);
    }

    #[Route('/contact')]
    public function contact(): Response
    {
        $title = "Contact";
        
        return $this->render('frontOffice/contact.html.twig', [
            'title' => $title
        ]);
    }
}