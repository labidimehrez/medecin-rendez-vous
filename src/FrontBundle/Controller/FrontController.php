<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Swift_Message;

class FrontController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $specialites = $em->getRepository('SecurityUserBundle:Specialite')->findAll();
        $medecins = $em->getRepository('SecurityUserBundle:Medecin')->findAll();
        return $this->render('FrontBundle:Default:index.html.twig', array(
                    'specialites' => $specialites, 'medecins' => $medecins
        ));
    }

    public function prendreRDVlistingAction(Request $request) {
        try {
            $request = $this->getRequest();
            $specialite = $request->request->get('searchCategory');
            $location = $request->request->get('location');
            $em = $this->getDoctrine()->getManager();
            $specialite = $em->getRepository('SecurityUserBundle:Specialite')->find($specialite);
            $medecins = $em->getRepository('SecurityUserBundle:Medecin')->findBy(array('adresse' => $location, 'Specialite' => $specialite));
            $specialites = $em->getRepository('SecurityUserBundle:Specialite')->findAll();
            if ((!$location) || (!$specialite) || (!$medecins) || (!$specialites)) {
                throw $this->createNotFoundException('no Medecin found');
            }

            return $this->render('FrontBundle:Default:prendreRDVlisting.html.twig', array(
                        'specialites' => $specialites, 'medecins' => $medecins
            ));
        } catch (\Exception $e) {
            return $this->redirect($this->generateUrl('front_homepage'));
        }
    }

    public function choisirRDVAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('SecurityUserBundle:Medecin')->find($id);
        if (!$medecin) {
            throw $this->createNotFoundException('no Medecin found');
        }
        return $this->render('FrontBundle:Default:choisirRDV.html.twig', array('medecin' => $medecin));
    }

    public function jeprendsRDVAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('SecurityUserBundle:Medecin')->find($id);
        if (!$medecin) {
            throw $this->createNotFoundException('no Medecin found');
        }
        return $this->render('FrontBundle:Default:jeprendsRDV.html.twig', array('medecin' => $medecin));
    }

    public function validerAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('SecurityUserBundle:Medecin')->find($id);
        if (!$medecin) {
            throw $this->createNotFoundException('no Medecin found');
        }
        $currentPatient = $this->getUser();
        if (!$currentPatient) {
    
           // throw $this->createAccessDeniedException('Unable to access this page!');
        }
// $currentPatient = $em->getRepository('SecurityUserBundle:Patient')->find(1);
        $rdvs = $em->getRepository('BackBundle:Rendezvous')->findBy(
                array('isValidated' => false, 'patients' => $currentPatient)
        );
        foreach ($rdvs as $key => $obj) {
            if (!in_array($medecin, $obj->getMedecins()->toArray())) {
                unset($rdvs[$key]);
            }
        }
        $rdv = end($rdvs);

        return $this->render('FrontBundle:Default:confirmrdv.html.twig', array('medecin' => $medecin, 'rdv' => $rdv)
        );
    }

    public function confirmerRDVAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('BackBundle:Rendezvous')->find($id);
        if (!$rdv) {
            throw $this->createNotFoundException('no  rdv found');
        }
        $rdv->setIsValidated(true);
        $em->persist($rdv);
        $em->flush();
        $currentPatient = $this->getUser();

//          $body = $this->render('mails/confirmation.html.twig', array(
//            'rdv' => $rdv,
//        ));
//
//        $messagemail = \Swift_Message::newInstance()
//                ->setFrom("mehrez.labidi@esprit.tn")
//                //->setTo($currentPatient->getEmail())
//                ->setTo("mehrez.labidi@esprit.tn")
//                ->setSubject("confirmation du RDV")
//                ->setBody($body, 'text/html');
//
//        $this->get('mailer')->send($messagemail);
        $vue = 'mails/confirmation.html.twig';
        $data = array('rdv' => $rdv);
        $from = 'contact.rendezvousmedecin@gmail.com';
        $to = $currentPatient->getEmail();
       
        $subj = "confirmation du RDV";
        $this->get('app.mailer')->senMail($vue, $data, $from, $to, $subj);
        return $this->redirect($this->generateUrl('front_homepage'));
    }

    public function contactusAction(Request $request) {
        $form = $this->createFormBuilder()
                ->add('email', TextType::class, array('required' => true,
                    'attr' => array('placeholder' => 'Email', 'class' => 'form-control', 'maxlength' => '120', 'id' => 'contactForm_email'
            )))
                ->add('firstName', TextType::class, array('required' => true,
                    'attr' => array('placeholder' => 'Prénom', 'class' => 'form-control', 'maxlength' => '120', 'id' => 'contactForm_email'
            )))
                ->add('lastName', TextType::class, array('required' => true,
                    'attr' => array('placeholder' => 'Nom', 'class' => 'form-control', 'maxlength' => '120', 'id' => 'contactForm_email'
            )))
                ->add('phoneNumber', TextType::class, array('required' => true,
                    'attr' => array('placeholder' => 'Téléphone', 'class' => 'form-control', 'maxlength' => '120', 'id' => 'contactForm_email'
            )))
                ->add('message', TextType::class, array('required' => true,
                    'attr' => array('placeholder' => 'message', 'class' => 'form-control', 'maxlength' => '120', 'id' => 'contactForm_email'
            )))
                ->add('submit', SubmitType::class, array('label' => 'Envoyer',
                    'attr' => array('class' => 'btn btn-form btn-primary'
            )))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $email = $form["email"]->getData();
            $firstName = $form["firstName"]->getData();
            $lastName = $form["lastName"]->getData();
            $phoneNumber = $form["phoneNumber"]->getData();
            $message = $form["message"]->getData();
            // contenu du mail


            $vue = 'mails/contactus.html.twig';
            $data = array('message' => $message, 'phoneNumber' => $phoneNumber, 'lastName' => $lastName, 'firstName' => $firstName, 'email' => $email);
            $from = $email;
            $to = 'contact.rendezvousmedecin@gmail.com';
            $subj = "Contactez-nous Client";

            $this->get('app.mailer')->senMail($vue, $data, $from, $to, $subj);

            return $this->redirect($this->generateUrl('front_homepage'));
        }

        return $this->render('FrontBundle:Default:contactus.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function getRequest() {
        return $this->container->get('request_stack')->getCurrentRequest();
    }

}
