<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/config/{slug}', name: 'app_about')]
    public function index(ArticleRepository $ArticleRepository, Article $article): Response
    {
        return $this->render('config/index.html.twig', [
            'Article' => $ArticleRepository->findAll(),
            'currentPage' => $article,

        ]);
    }
}