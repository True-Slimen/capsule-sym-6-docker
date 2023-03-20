<?php

use App\Entity\Country;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AfricaFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        //$continentList = ["Afrique", "Amérique", "Asie", "Europe", "Océanie"];

        $africa = new Continent();
        $africa->setName('Afrique');
        $manager->persist($africa);

        $africaList = ["Afrique", "Amérique", "Asie", "Europe", "Océanie"];

        foreach ($africaList as &$value) {
            $africaCountry = new Country();
            $africaCountry->setName($value);
            $africaCountry->setContinent($africa);
            $manager->persist($africaCountry);
        }

        $manager->flush();
    }
}