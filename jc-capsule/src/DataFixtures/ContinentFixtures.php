<?php

use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class ContinentFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
       $continentList = ["Afrique", "Amérique", "Asie", "Europe", "Océanie"];

        foreach ($continentList as &$value) {
            $continent = new Continent();
            $continent->setName($value);
            $manager->persist($continent);
        }
    
        $manager->flush();
    }
}
    





