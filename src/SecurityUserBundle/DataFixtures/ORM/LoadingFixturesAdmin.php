<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */
namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SecurityUserBundle\Entity\Medecin;

class LoadingFixturesAdmin implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        /* Compte admin */
        $user1 = new Medecin();
        $user1->setUsername('admin');
        $user1->setNom('admin');
 
        $user1->setEmail('admin@esprit.tn');
        $user1->setEmailCanonical('admin@esprit.tn');
        $user1->setPassword('admin');
        $user1->setPlainPassword('admin');
        $user1->setEnabled(true);
        $user1->setRoles(array('ROLE_ADMIN' => 'ROLE_ADMIN'));
        $user1->setLastLogin(new \DateTime());
        $user1->setLocked(false);
        $user1->setTelephone(198);
        $manager->persist($user1);

     

        $manager->flush();
    }
}
