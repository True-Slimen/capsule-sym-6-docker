<?php

namespace App\DataFixtures;

use App\Entity\Country;
use App\Entity\Category;
use App\Entity\Producer;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Caps;


class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        //$continentList = ["Afrique", "Amérique", "Asie", "Europe", "Océanie"];

        $africa = new Continent();
        $africa->setName('Afrique');
        $manager->persist($africa);

        $africaList = [
            "Afrique du Sud",
            "Algérie",
            "Angola",
            "Bénin",
            "Botswana",
            "Burkina Faso",
            "Burundi",
            "Cameroun",
            "Cap-Vert",
            "République centrafricaine",
            "Comores",
            "République du Congo",
            "République démocratique du Congo",
            "Côte d’Ivoire",
            "Djibouti",
            "Égypte",
            "Érythrée",
            "Eswatini",
            "Éthiopie",
            "Gabon",
            "Gambie",
            "Ghana",
            "Guinée",
            "Guinée-Bissau",
            "Guinée équatoriale",
            "Kenya",
            "Lesotho",
            "Liberia",
            "Libye",
            "Madagascar",
            "Malawi",
            "Mali",
            "Maroc",
            "Maurice",
            "Mauritanie",
            "Mozambique",
            "Namibie",
            "Niger",
            "Nigeria",
            "Ouganda",
            "Rwanda",
            "São Tomé-et-Principe",
            "Sénégal",
            "Seychelles",
            "Sierra Leone",
            "Somalie",
            "Soudan",
            "Soudan du Sud",
            "Tanzanie",
            "Tchad",
            "Togo",
            "Tunisie",
            "Zambie",
            "Zimbabwe"
        ];

        foreach ($africaList as &$value) {
            $africaCountry = new Country();
            $africaCountry->setName($value);
            $africaCountry->setContinent($africa);
            $manager->persist($africaCountry);
        }


        $america = new Continent();
        $america->setName('Amérique');
        $manager->persist($america);

        $americaList = [
            "Argentine",
            "Bahamas",
            "Barbade",
            "Belize",
            "Bolivie",
            "Brésil",
            "Canada",
            "Chili",
            "Colombie",
            "Costa Rica",
            "Cuba",
            "Dominique",
            "El Salvador",
            "États-Unis d'Amérique",
            "Équateur",
            "Guadeloupe",
            "Guatemala",
            "Guyana",
            "Guyane",
            "Haiti",
            "Honduras",
            "Iles Malouines",
            "Jamaïque",
            "Martinique",
            "Mexique",
            "Nicaragua",
            "Panama",
            "Paraguay",
            "Porto Rico",
            "Pérou",
            "République Dominicaine",
            "Sainte-Lucie",
            "Suriname",
            "Trinité-et-Tobago",
            "Uruguay",
            "Venezuela",
        ];

        foreach ($americaList as &$value) {
            $americaCountry = new Country();
            $americaCountry->setName($value);
            $americaCountry->setContinent($america);
            $manager->persist($americaCountry);
        }

    
        $europe = new Continent();
        $europe->setName('Europe');
        $manager->persist($europe);

        $france = '';
        $pays_bas = '';

        $europeList = [
            "Albanie",
            "Allemagne",
            "Andorre",
            "Autriche",
            "Azerbaïdjan2",
            "Belgique",
            "Biélorussie",
            "Bosnie-Herzégovine",
            "Bulgarie",
            "Croatie",
            "Danemark",
            "Espagne",
            "Estonie",
            "Finlande",
            "France",
            "Grèce",
            "Hongrie",
            "Irlande",
            "Islande",
            "Italie",
            "Lettonie",
            "Liechtenstein",
            "Lituanie",
            "Luxembourg",
            "Macédoine du Nord",
            "Malte",
            "Moldavie",
            "Monaco",
            "Monténégro",
            "Norvège",
            "Pays-Bas",
            "Pologne",
            "Portugal",
            "République tchèque",
            "Roumanie",
            "Royaume-Uni",
            "Russie2",
            "Saint-Marin",
            "Serbie",
            "Slovaquie",
            "Slovénie",
            "Suède",
            "Suisse",
            "Ukraine",
            "Vatican"
        ];

        foreach ($europeList as &$value) {
            $europeCountry = new Country();
            $europeCountry->setName($value);
            $europeCountry->setContinent($europe);
            $manager->persist($europeCountry);
            if($value === 'France') {
                $france = $europeCountry;
            }else if($value === "Pays-Bas"){
                $pays_bas = $europeCountry;
            }
        }

        $asia = new Continent();
        $asia->setName('Asie');
        $manager->persist($asia);

        $asiaList = [
            "Afghanistan",
            "Arabie saoudite",
            "Arménie",
            "Azerbaïdjan",
            "Bahreïn",
            "Bangladesh",
            "Bhoutan",
            "Birmanie",
            "Brunei",
            "Cambodge",
            "Chine",
            "Chypre",
            "Corée du Nord",
            "Corée du Sud",
            "Émirats arabes unis",
            "Hong-Kong",
            "Géorgie",
            "Inde",
            "Indonésie",
            "Irak",
            "Iran",
            "Israël",
            "Japon",
            "Jordanie",
            "Kazakhstan",
            "Kirghizistan",
            "Koweït",
            "Kurdistan",
            "Laos",
            "Liban",
            "Malaisie",
            "Maldives",
            "Mongolie",
            "Népal",
            "Oman",
            "Ouzbékistan",
            "Pakistan",
            "Palestine",
            "Philippines",
            "Qatar",
            "Russie",
            "Singapour",
            "Sri Lanka",
            "Syrie",
            "Taïwan",
            "Tadjikistan",
            "Thaïlande",
            "Timor oriental",
            "Turkménistan",
            "Turquie",
            "Viêt Nam",
            "Yémen"
        ];

        foreach ($asiaList as &$value) {
            $asiaCountry = new Country();
            $asiaCountry->setName($value);
            $asiaCountry->setContinent($asia);
            $manager->persist($asiaCountry);
        }

        $oceania = new Continent();
        $oceania->setName('Océanie');
        $manager->persist($oceania);

        $oceaniaList = [
            "Australie",
            "Fidji",
            "Kiribati",
            "Îles Marshall",
            "États fédérés de Micronésie",
            "Nauru",
            "Nouvelle-Zélande",
            "Palaos",
            "Papouasie-Nouvelle-Guinée",
            "Îles Salomon",
            "Samoa",
            "Tonga",
            "Tuvalu",
            "Vanuatu",
        ];

        foreach ($oceaniaList as &$value) {
            $OceaniaCountry = new Country();
            $OceaniaCountry->setName($value);
            $OceaniaCountry->setContinent($oceania);
            $manager->persist($OceaniaCountry);
        }

        $categoryChampagne = new Category();
        $categoryChampagne->setName('champagne');
        $manager->persist($categoryChampagne);

        $categoryBeer = new Category();
        $categoryBeer->setName('beer');
        $manager->persist($categoryBeer);

        $producerHeineken = new Producer();
        $producerHeineken->setName('Heineken');
        $producerHeineken->setCategory($categoryBeer);
        $producerHeineken->setCountry($pays_bas);
        $manager->persist($producerHeineken);

        $producerMoet = new Producer();
        $producerMoet->setName('Moët et Chandon');
        $producerMoet->setCategory($categoryChampagne);
        $producerMoet->setCountry($france);
        $manager->persist($producerMoet);

        $caps = new Caps();
        $caps->setProducer($producerMoet);
        $caps->setColor('Dorée');
        $caps->setDraw('lorem ipsum dolor sit amet');
        $caps->setPicturePath('/ch1.png');
        $manager->persist($caps);

        $caps = new Caps();
        $caps->setProducer($producerHeineken);
        $caps->setColor('Verte');
        $caps->setDraw('lorem ipsum dolor sit amet');
        $caps->setPicturePath('/suzanne.jpeg');
        $manager->persist($caps);

        $manager->flush();
    }
}