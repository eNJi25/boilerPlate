<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PagesController extends AbstractController
{
    #[Route('/contact', name: 'page_contact')]
    public function contact(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'titre' => 'Contact',
        ]);
    }

    #[Route('/cgu', name: 'page_cgu')]
    public function cgu(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'titre' => 'CGU',
        ]);
    }
}
