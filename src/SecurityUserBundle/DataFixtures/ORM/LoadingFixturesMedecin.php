<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SecurityUserBundle\Entity\Medecin;

class LoadingFixturesMedecin implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        /* Compte medecin */
        $user1 = new Medecin();
        $user1->setUsername('rami');
        $user1->setNom('rami');

        $user1->setTarif('50');
        $user1->setAdresse('El ghazela  Ariana');
        $user1->setEmail('rami.dridi@esprit.tn');
        $user1->setEmailCanonical('rami.dridi@esprit.tn');
        $user1->setPassword('esprit2016');
        $user1->setPlainPassword('esprit2016');
        $user1->setEnabled(true);
        // $user1->setRoles(array('ROLE_MEDECIN' => 'ROLE_MEDECIN'));
        $user1->setLastLogin(new \DateTime());
        $user1->setLocked(false);
        $user1->setTelephone(25112990);
        $user1->setDescription("Qu'il traite une grippe ou prescrive un examen, le généraliste prend en charge ses patients dans leur globalité (habitudes, hygiène de vie, antécédents) et les suit le plus souvent sur une longue période. Médecin traitant, il assure la coordination avec ses confrères spécialistes.");
        $manager->persist($user1);

        /* Compte medecin */
        $user2 = new Medecin();
        $user2->setNom('ali');
        $user2->setUsername('ali');
        $user2->setAdresse('Montplaisir Tunis');
        $user2->setTarif('40');
        $user2->setEmail('ali@esprit.tn');
        $user2->setEmailCanonical('ali@esprit.tn');
        $user2->setPassword('esprit2016');
        $user2->setPlainPassword('esprit2016');
        $user2->setEnabled(true);
        //$user2->setRoles(array('ROLE_MEDECIN' => 'ROLE_MEDECIN'));
        $user2->setLastLogin(new \DateTime());
        $user2->setLocked(false);
        $user2->setTelephone(55112991);
        $user2->setDescription("Qu'il traite une grippe ou prescrive un examen, le généraliste prend en charge ses patients dans leur globalité (habitudes, hygiène de vie, antécédents) et les suit le plus souvent sur une longue période. Médecin traitant, il assure la coordination avec ses confrères spécialistes.");

        $manager->persist($user2);

        $manager->flush();
    }
}
