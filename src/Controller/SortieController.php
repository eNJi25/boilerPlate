<?php

namespace App\Controller;

use App\Entity\Sortie;
use App\Repository\SortieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SortieController extends AbstractController
{
    #[Route('/sortie', name: 'sortie_index', methods: ['GET'])]
    public function index(SortieRepository $repo): Response
    {
        return $this->render('sortie/index.html.twig', [
            'sorties' => $repo->findAll()
        ]);
    }

    #[Route('/sortie/{id}', name: 'sortie_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Sortie $sortie): Response
    {
        return $this->render('moto/show.html.twig', [
            'sortie' => $sortie
        ]);
    }

    #[Route('/sortie/create', name: 'sortie_create', methods: ['GET', 'POST'])]
    public function create(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/sortie/{id}/edit', name: 'sortie_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/sortie/{id}/delete', name: 'sortie_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response
    {
        dd(__METHOD__);
    }
}
