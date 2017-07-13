<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BackBundle\Entity\Rendezvous;
use DateInterval;
use DateTime;

class LoadingFixturesRendezVous implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $now = new DateTime('NOW');
        $d = intval($now->format('d'));
        $m = intval($now->format('m'));
        $y = intval($now->format('Y'));



        $rdv1 = new Rendezvous();
        $rdv1->setAnnee($y);
        $rdv1->setMois($m);
        $rdv1->setJour($d);
        $rdv1->setHeure('09');
        $rdv1->setMinute('30');
        $rdv1->setDuree('60');
        $rdv1->setType("NOUVELLE CONSULTATION");

        $manager->persist($rdv1);


        $rdv2 = new Rendezvous();
        $rdv2->setAnnee($y);
        $rdv2->setMois($m);
        $rdv2->setJour($d);
        $rdv2->setHeure('9');
        $rdv2->setMinute('30');
        $rdv2->setDuree('90');
        $rdv2->setType("RENOUVELLEMENT TRAITEMENT");

        $manager->persist($rdv2);

        $manager->flush();
    }
}
