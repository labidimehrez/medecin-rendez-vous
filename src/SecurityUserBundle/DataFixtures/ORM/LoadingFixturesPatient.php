<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */
namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SecurityUserBundle\Entity\Patient;

class LoadingFixturesPatient implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        /* Compte medecin */
        $user1 = new Patient();
        $user1->setUsername('houssem');
       // $user1->setNom('houssem');

       // $user1->setTarif('50');
        //  $user1->setAdresse('paris');
        $user1->setEmail('houssem@esprit.tn');
        $user1->setEmailCanonical('houssem@esprit.tn');
        $user1->setPassword('esprit2016');
        $user1->setPlainPassword('esprit2016');
        $user1->setEnabled(true);
       // $user1->setRoles(array('ROLE_MEDECIN' => 'ROLE_MEDECIN'));
        $user1->setLastLogin(new \DateTime());
        $user1->setLocked(false);
        $user1->setTelephone(95112990);
        $manager->persist($user1);

        /* Compte medecin */
        $user2 = new Patient();
      //  $user2->setNom('khaled');
        $user2->setUsername('khaled');
      //  $user2->setAdresse('ariana');
        // $user2->setTarif('40');
        $user2->setEmail('khaled@esprit.tn');
        $user2->setEmailCanonical('khaled@esprit.tn');
        $user2->setPassword('esprit2016');
        $user2->setPlainPassword('esprit2016');
        $user2->setEnabled(true);
        //$user2->setRoles(array('ROLE_MEDECIN' => 'ROLE_MEDECIN'));
        $user2->setLastLogin(new \DateTime());
        $user2->setLocked(false);
        $user2->setTelephone(57112991);
        $manager->persist($user2);

        $manager->flush();
    }
}
