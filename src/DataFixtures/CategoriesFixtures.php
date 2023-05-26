<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $category = new categories();
         $category-> setName('categories');

         $manager->persist($category);

         $manager->flush();
    }
}
