<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Type;
use App\Entity\Plats;
use App\Entity\Projet;
use App\Repository\TypeRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ManagerRegistry as DoctrineManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\ManagerRegistry;

class Projetfixtures extends Fixture 
{
    public function load(ObjectManager $manager)
    {


        $faker = Factory::create();

        $projet = new Projet();
        $projet->setTitle('MarasSofrasi');
        $projet->setImg('resto_home.jpg');
        $projet->setDescription('petit projet fait en 1 jours pour un restaurant que j\'ai inventer');
        $projet->setPage('maras_home');

        $manager->persist($projet);
        $manager->flush();

        $type = new Type();
        $type->setName('viande');
        $manager->persist($type);
        $manager->flush();
        $plat = new Plats();
            $plat->setName($faker->jobTitle());
            $plat->setImg('borek.JPG');
            $plat->setDescription($faker->paragraph());
            $plat->setPrice(random_int(1,60));
            $plat->addTypeid($type);
            $manager->persist($plat);
            $manager->flush();

        $type = new Type();
        $type->setName('legume');
        $manager->persist($type);
        $manager->flush();
        for($i = 0 ; $i < 2; $i++){
            $plat = new Plats();
            $plat->setName($faker->jobTitle());
            $plat->setImg('borek.JPG');
            $plat->setDescription($faker->paragraph());
            $plat->setPrice(random_int(1,60));
            $plat->addTypeid($type);
            $manager->persist($plat);
            $manager->flush();
        }

        $type = new Type();
        $type->setName('fromage');
        $manager->persist($type);
        $manager->flush();
        $plat = new Plats();
            $plat->setName($faker->jobTitle());
            $plat->setImg('borek.JPG');
            $plat->setDescription($faker->paragraph());
            $plat->setPrice(random_int(1,60));
            $plat->addTypeid($type);
            $manager->persist($plat);
            $manager->flush();

        $type = new Type();
        $type->setName('glace');
        $manager->persist($type);
        $manager->flush();
        $plat = new Plats();
            $plat->setName($faker->jobTitle());
            $plat->setImg('borek.JPG');
            $plat->setDescription($faker->paragraph());
            $plat->setPrice(random_int(1,60));
            $plat->addTypeid($type);
            $manager->persist($plat);
            $manager->flush();

    
        

    }

    public function typerequest(TypeRepository $repotype){
        $type = $repotype->find(random_int(1,4));
        return $type;

    }
}
