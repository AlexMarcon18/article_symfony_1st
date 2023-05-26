<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BibliographieController extends AbstractController
{
    #[Route('/bibliographie/{slug}', name: 'app_bibliographie')]
    public function index(ArticleRepository $ArticleRepository, Article $article): Response
    {
        return $this->render('bibliographie/index.html.twig', [
            'Article' => $ArticleRepository->findAll(),
            'currentPage' => $article,
        ]);
    }
}
