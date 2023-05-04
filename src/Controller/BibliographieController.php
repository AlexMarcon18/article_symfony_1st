<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BibliographieController extends AbstractController
{
    #[Route('/bibliographie', name: 'app_bibliographie')]
    public function index(): Response
    {
        return $this->render('bibliographie/index.html.twig', [
            'controller_name' => 'BibliographieController',
        ]);
    }
}
