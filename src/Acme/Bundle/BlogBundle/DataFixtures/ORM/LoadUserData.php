<?php 

// src/Acme\Bundle\BlogBundle/DataFixtures/ORM/LoadUserData.php

namespace Acme\Bundle\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\Bundle\BlogBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setSalt('pclt1nkvb6s440s04okw0gw4c00ocw8');
        $userAdmin->setPassword('$2y$13$pclt1nkvb6s440s04okw0eZ8/aYX1NZED7gdGAZjyS78jp3RgVAP6');
        $userAdmin->setEmail('admin.mail@mail.com');
        $userAdmin->setLastname('Machin');
        $userAdmin->setFirstname('Toto');
        $userAdmin->setEnabled('1');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}