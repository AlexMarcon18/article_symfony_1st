<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/config', name: 'app_about')]
    public function index(): Response
    {
        return $this->render('config/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}