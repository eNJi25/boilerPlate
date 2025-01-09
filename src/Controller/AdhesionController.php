<?php

namespace App\Controller;

use App\Entity\Adhesion;
use App\Repository\AdhesionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdhesionController extends AbstractController
{
    #[Route('/adhesion', name: 'adhesion_index', methods: ['GET'])]
    public function index(AdhesionRepository $repo): Response
    {
        return $this->render('adhesion/index.html.twig', [
            'adhesions' => $repo->findAll()
        ]);
    }

    #[Route('/adhesion/{id}', name: 'adhesion_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Adhesion $adhesion): Response
    {
        return $this->render('adhesion/show.html.twig', [
            'adhesion' => $adhesion
        ]);
    }

    #[Route('/adhesion/create', name: 'adhesion_create', methods: ['GET', 'POST'])]
    public function create(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/adhesion/{id}/edit', name: 'adhesion_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/adhesion/{id}/delete', name: 'adhesion_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response
    {
        dd(__METHOD__);
    }
}
