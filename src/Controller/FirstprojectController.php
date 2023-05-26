<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstprojectController extends AbstractController
{
    #[Route('/first/{slug}', name: 'app_firstproject')]
    public function index(ArticleRepository $ArticleRepository, Article $article): Response
    {
        return $this->render('firstproject/index.html.twig', [
            'Article' => $ArticleRepository->findAll(),
            'currentPage' => $article,
        ]);
    }
}
