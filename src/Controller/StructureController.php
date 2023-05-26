<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StructureController extends AbstractController
{
    #[Route('/structure/{slug}', name: 'app_structure')]
    public function index(ArticleRepository $ArticleRepository, Article $article): Response
    {
        return $this->render('structure/index.html.twig', [
            'Article' => $ArticleRepository->findAll(),
            'currentPage' => $article,
        ]);
    }
}
