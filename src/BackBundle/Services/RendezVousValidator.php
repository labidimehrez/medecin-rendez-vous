<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\Services;

use Doctrine\ORM\EntityManager;

class RendezVousValidator {

    private $em;
    private $repoRDV;

    public function __construct(EntityManager $em) {
        $this->em = $em;
        $this->repoRDV = $em->getRepository('BackBundle:Rendezvous');
    }

    public function convertDateToRDVComponent($datetime) {
        // $date exp: 11/01/2013 12:00 AM
        $arrayResult = [];

        $array = explode(" ", $datetime);
        $date = $array[0];

        $datearray = explode("-", $date);

        $jour = $datearray[0];
        $mois = $datearray[1];
        $annee = $datearray[2];

        $time = $array[1];
        $timearray = explode(":", $time);
        $heure = $timearray[0];
        $minute = $timearray[1];

        $arrayResult["jour"] = $jour;
        $arrayResult["mois"] = $mois;
        $arrayResult["annee"] = $annee;
        $arrayResult["heure"] = $heure;
        $arrayResult["minute"] = $minute;

        return $arrayResult;
    }

    public function dateValid($rdv) {
        $res = true;
        if (((int) $rdv->getHeure() < 9) || ((int) $rdv->getHeure() > 16)) {
            $res = false;
        }
        if (((int) $rdv->getMinute() > 0) && ((int) $rdv->getHeure() == 12)) {
            $res = false;
        }

        $date = $rdv->getJour() . '-' . $rdv->getMois() . '-' . $rdv->getAnnee();
        if ($this->isWeekend($date) == true) {
            $res = false;
        }
        return $res;
    }

    public function isWeekend($date) {
        $res = false;
        $weekDay = date('w', strtotime($date));
        if (($weekDay == 0 || $weekDay == 6)) {
            $res = true;
        }
        return $res;
    }

    public function priseRDVAutorised($rdv, $medecin) {
        $result = true;
        $listeRdvPourMedecin = $this->repoRDV->getRDV($medecin);
        foreach ($listeRdvPourMedecin as $RDV) {
            if ($RDV->getIsValidated() === true) {
                if (/* ($RDV->getMinute()== $rdv->getMinute())&& */($RDV->getHeure() == $rdv->getHeure()) && ($RDV->getJour() == $rdv->getJour()) && ($RDV->getMois() == $rdv->getMois()) && ($RDV->getAnnee() == $rdv->getAnnee())) {
                    $result = false;
                }
            }
        }
        return $result;
    }

}
