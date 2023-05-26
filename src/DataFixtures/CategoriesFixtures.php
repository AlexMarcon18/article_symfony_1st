<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $category = new Categories();
         $category-> setName('config');
         $category-> setName('first');
         $category-> setName('structure');
         $category-> setName('sbd');
         $category-> setName('biblio');




        $manager->persist($category);

         $manager->flush();
    }
}
