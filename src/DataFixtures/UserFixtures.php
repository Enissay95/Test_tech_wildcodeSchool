<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    const Argonautes = [
            'Eleftheria',
            'Gennadios',
            'Lysimachos',
        ];
    public function load(ObjectManager $manager): void
    {

        
        // $product = new Product();
        // $manager->persist($product);

        foreach (self::Argonautes as $key => $ArgonautesName) {
        $user = new User();
        $user->setName($ArgonautesName);
        $manager->persist($user);
        }
        $manager->flush();
    }
}
