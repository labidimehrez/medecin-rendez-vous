<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BackBundle\Entity\ModePaiment;

class LoadingFixturesModePaiment implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $mode1 = new ModePaiment();
        $mode1->setType('Bons d\'achat');
        $manager->persist($mode1);

        $mode2 = new ModePaiment();
        $mode2->setType('Paiement en espèce');
        $manager->persist($mode2);

        $mode3 = new ModePaiment();
        $mode3->setType('Achat sur facture');
        $manager->persist($mode3);

        $mode4 = new ModePaiment();
        $mode4->setType('PayPal');
        $manager->persist($mode4);

        $mode5 = new ModePaiment();
        $mode5->setType('Cartes de crédit');
        $manager->persist($mode5);


        $mode6 = new ModePaiment();
        $mode6->setType('Prélèvement automatique');
        $manager->persist($mode6);


        $manager->flush();
    }
}
