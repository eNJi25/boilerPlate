<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Repository\MarqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MarqueController extends AbstractController
{
    #[Route('/marque', name: 'marque_index', methods: ['GET'])]
    public function index(MarqueRepository $repo): Response
    {
        return $this->render('marque/index.html.twig', [
            'marques' =>$repo->findAll()
        ]);
    }

    #[Route('/marque/{id}', name: 'marque_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Marque $marque): Response
    {
        return $this->render('marque/show.html.twig', [
            'marque' => $marque
        ]);
    }

    #[Route('/marque/create', name: 'marque_create', methods: ['GET', 'POST'])]
    public function create(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/marque/{id}/edit', name: 'marque_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/marque/{id}/delete', name: 'marque_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response
    {
        dd(__METHOD__);
    }
}
