<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */
namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SecurityUserBundle\Entity\Specialite;

class LoadingFixturesSpecialite implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $specialite1 = new Specialite();
        $specialite1->setNomSpecialite('Addictologie');
        $manager->persist($specialite1);

        $specialite2 = new Specialite();
        $specialite2->setNomSpecialite('Algologie');
        $manager->persist($specialite2);

        $specialite3 = new Specialite();
        $specialite3->setNomSpecialite('Anatomie et cytologie pathologiques');
        $manager->persist($specialite3);

        $specialite4 = new Specialite();
        $specialite4->setNomSpecialite('Anesthésiologie-réanimation chirurgicale');
        $manager->persist($specialite4);

        $specialite5 = new Specialite();
        $specialite5->setNomSpecialite('Cardiologie');
        $manager->persist($specialite5);

        $specialite6 = new Specialite();
        $specialite6->setNomSpecialite('Chirurgie');
        $manager->persist($specialite6);

        $specialite7 = new Specialite();
        $specialite7->setNomSpecialite('Coronarographie');
        $manager->persist($specialite7);

        $specialite8 = new Specialite();
        $specialite8->setNomSpecialite('Chirurgie viscérale');
        $manager->persist($specialite8);

        $specialite9 = new Specialite();
        $specialite9->setNomSpecialite('Chirurgie urologique');
        $manager->persist($specialite9);

        $specialite10 = new Specialite();
        $specialite10->setNomSpecialite('Chirurgie vasculaire');
        $manager->persist($specialite10);

        $specialite11 = new Specialite();
        $specialite11->setNomSpecialite('Chirurgie infantile');
        $manager->persist($specialite11);

        $specialite12= new Specialite();
        $specialite12->setNomSpecialite('Andrologie');
        $manager->persist($specialite12);



        $manager->flush();
    }
}
