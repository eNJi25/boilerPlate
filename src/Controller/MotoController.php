<?php

namespace App\Controller;

use App\Entity\Moto;
use App\Repository\MotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MotoController extends AbstractController
{
    #[Route('/moto', name: 'moto_index', methods: ['GET'])]
    public function index(MotoRepository $repo): Response
    {
        return $this->render('moto/index.html.twig', [
            'motos' => $repo->findAll()
        ]);
    }

    #[Route('/moto/{id}', name: 'moto_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Moto $moto): Response
    {
        return $this->render('moto/show.html.twig', [
            'moto' => $moto
        ]);
    }

    #[Route('/moto/create', name: 'moto_create', methods: ['GET', 'POST'])]
    public function create(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/moto/{id}/edit', name: 'moto_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/moto/{id}/delete', name: 'moto_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response
    {
        dd(__METHOD__);
    }
}
