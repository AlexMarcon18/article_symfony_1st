<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuteurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $auteur = new Auteur();
        $auteur -> setname('nom');
        $auteur -> setname('prenom');
        $auteur -> setname('date');
        $auteur -> setname('contact');






        $manager->persist($product);

        $manager->flush();
    }
}
