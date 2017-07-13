<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackBundle\Entity\Rendezvous;
use BackBundle\Form\RendezvousType;

class RendezvousController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $rdv = new Rendezvous();
        $form = $this->createForm(RendezvousType::class, $rdv);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $rdv = $form->getData();
                $em->persist($rdv);
                $em->flush();  // ;
                $this->addFlash('success', $this->get('translator')->trans('modal.successajout.corps'));
            }
        }
        return $this->render('BackBundle:Default/Rendezvous:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('BackBundle:Rendezvous')->find($id);
        if (!$rdv) {
            throw $this->createNotFoundException('no Rendezvous found');
        }
        $form = $this->createForm(RendezvousType::class, $rdv);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $rdv = $form->getData();
                $em->persist($rdv);
                $em->flush();  // ;
                $this->addFlash('success', $this->get('translator')->trans('modal.successmodification.corps'));
            }
        }
        return $this->render('BackBundle:Default/Rendezvous:update.html.twig', array('form' => $form->createView()));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rdvs = $em->getRepository('BackBundle:Rendezvous')->findAll();
        return $this->render('BackBundle:Default/Rendezvous:show.html.twig', array('rdvs' => $rdvs));
    }

    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('BackBundle:Rendezvous')->find($id);
        if (!$rdv) {
            throw $this->createNotFoundException('no Rendezvous found');
        }
        $em->remove($rdv);
        $em->flush();
        $this->addFlash('delete', $this->get('translator')->trans('modal.successdelete.corps')
        );
        return $this->redirect($this->generateUrl('show_modepaiment'));
    }

    public function creerRDVAction(Request $request, $date, $type, $medecinId)
    {
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('SecurityUserBundle:Medecin')->find($medecinId);
        if (!$medecin) {
            throw $this->createNotFoundException('no Medecin found');
        }

        $result = [];
        if ($request->isXmlHttpRequest()) {
            $rdv = new Rendezvous();
            if ($medecin) {
                $rdv->addMedecin($medecin);
                $rdv->setMedecins($medecin);
            }
            $rdv->setType($type);
            if ($this->getUser()) {
                $rdv->setPatients($this->getUser());
            }
            $arrayResult = $this->get('rendez.vous.validator')->convertDateToRDVComponent($date);
            $jour = $arrayResult["jour"];
            $mois = $arrayResult["mois"];
            $annee = $arrayResult["annee"];
            $heure = $arrayResult["heure"];
            $minute = $arrayResult["minute"];


            $rdv->setMinute($minute);
            $rdv->setHeure($heure);
            $rdv->setJour($jour);
            $rdv->setMois($mois);
            $rdv->setAnnee($annee);

            $em->persist($rdv);

            $rdvAutorised = $this->get('rendez.vous.validator')->priseRDVAutorised($rdv, $medecin);
            $dateValid = $this->get('rendez.vous.validator')->dateValid($rdv);
            if (!$dateValid) {
                $result[] = "<p class='alert'>" . $this->get('translator')->trans('rdv.dateinvalid') . "</p>";
            } else {
                if ($rdvAutorised == true) {
                    $em->flush();
                    $result[] = "<p>" . $this->get('translator')->trans('rdv.success') . "</p>";
                    $result[] = "<p>" . $this->get('translator')->trans('rdv.success') . "</p>";
                } else {
                    $result[] = "<p class='alert'>" . $this->get('translator')->trans('rdv.echec') . "</p>";
                }
            }
        }
        return new Response(json_encode($result));
    }
}
