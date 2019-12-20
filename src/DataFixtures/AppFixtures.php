<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Stage;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $stage = new Stage();
         $stage->setTitre("Creation d'une appli mobile");
         $stage->setDescription("Creation d'une appli mobile Android avec Android Studio");
         $stage->setEmail("recrutement@entrepise.fr");
         $manager->persist($stage);

        $manager->flush();
    }
}
