<?php

namespace App\Controller;

use App\Entity\Modele;
use App\Repository\ModeleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ModeleController extends AbstractController
{
    #[Route('/modele', name: 'modele_index', methods: ['GET'])]
    public function index(ModeleRepository $repo): Response
    {
        return $this->render('modele/index.html.twig', [
            'modeles' => $repo->findAll()
        ]);
    }

    #[Route('/modele/{id}', name: 'modele_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Modele $modele): Response
    {
        return $this->render('modele/show.html.twig', [
            'modele' => $modele
        ]);
    }

    #[Route('/modele/create', name: 'modele_create', methods: ['GET', 'POST'])]
    public function create(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/modele/{id}/edit', name: 'modele_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/modele/{id}/delete', name: 'modele_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response
    {
        dd(__METHOD__);
    }
}
