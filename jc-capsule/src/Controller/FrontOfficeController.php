<?php

namespace App\Controller;

use App\Entity\Caps;
use Symfony\Component\Asset\Package;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

class FrontOfficeController extends AbstractController
{

    #[Route('/accueil')]
    #[Route('/')]
    public function home(EntityManagerInterface $entityManager): Response
    {
        $title = "Accueil";

        $capsRepository = $entityManager->getRepository(Caps::class);
        $caps = $capsRepository->findAll();

        return $this->render('frontOffice/home.html.twig', [
            'title' => $title,
            'caps' => $caps
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