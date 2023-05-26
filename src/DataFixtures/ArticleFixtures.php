<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $article = new Article();
         $article-> setName('auteur');
         $article-> setName('titre');
         $article-> setName('content');
         $article-> setName('date');


        $manager->persist($article);

        $manager->flush();
    }
}
