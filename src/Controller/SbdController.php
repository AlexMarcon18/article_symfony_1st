<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SbdController extends AbstractController
{
    #[Route('/sbd/{slug}', name: 'app_sbd')]
    public function index(ArticleRepository $ArticleRepository, Article $article): Response
    {
        return $this->render('sbd/index.html.twig', [
            'Article' => $ArticleRepository->findAll(),
            'currentPage' => $article,
        ]);
    }
}
