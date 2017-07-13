<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SecurityUserBundle\Entity\Medecin;
use SecurityUserBundle\Form\MedecinType;

class MedecinController extends Controller
{
    public function indexAction()
    {
        return $this->render('SecurityUserBundle:Default:index.html.twig');
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $medecin= new Medecin();
        $form = $this->createForm(MedecinType::class, $medecin);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $medecin = $form->getData();
                $em->persist($medecin);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('modal.successajout.corps'));
            }
        }
        return $this->render('SecurityUserBundle:Default/Medecin:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('SecurityUserBundle:Medecin')->find($id);
        if (!$medecin) {
            throw $this->createNotFoundException('no Medecin found');
        }
        $form = $this->createForm(MedecinType::class, $medecin);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $medecin = $form->getData();
                $em->persist($medecin);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('modal.successmodification.corps'));
            }
        }
        return $this->render('SecurityUserBundle:Default/Medecin:update.html.twig', array('form' => $form->createView()));
    }
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $medecins = $em->getRepository('SecurityUserBundle:Medecin')->findAll();
        return $this->render('SecurityUserBundle:Default/Medecin:show.html.twig', array('medecins' => $medecins));
    }

    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('SecurityUserBundle:Medecin')->find($id);
        if (!$medecin) {
            throw $this->createNotFoundException('no Medecin found');
        }
        $em->remove($medecin);
        $em->flush();
        $this->addFlash('delete',
            $this->get('translator')->trans('modal.successdelete.corps')
        );
        return $this->redirect($this->generateUrl('show_medecin'));
    }
}
