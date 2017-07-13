<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SecurityUserBundle\Entity\RaisonVisite;
use SecurityUserBundle\Form\RaisonVisiteType;

class RaisonVisiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('SecurityUserBundle:Default:index.html.twig');
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $RaisonVisite = new RaisonVisite();
        $form = $this->createForm(RaisonVisiteType::class, $RaisonVisite);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $RaisonVisite = $form->getData();
                $em->persist($RaisonVisite);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('modal.successajout.corps'));
            }
        }
        return $this->render('SecurityUserBundle:Default/RaisonVisite:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $RaisonVisite = $em->getRepository('SecurityUserBundle:RaisonVisite')->find($id);
        if (!$RaisonVisite) {
            throw $this->createNotFoundException('no RaisonVisite found');
        }
        $form = $this->createForm(RaisonVisiteType::class, $RaisonVisite);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $RaisonVisite = $form->getData();
                $em->persist($RaisonVisite);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('modal.successmodification.corps'));
            }
        }
        return $this->render('SecurityUserBundle:Default/RaisonVisite:update.html.twig', array('form' => $form->createView()));
    }
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $RaisonVisites = $em->getRepository('SecurityUserBundle:RaisonVisite')->findAll();
        return $this->render('SecurityUserBundle:Default/RaisonVisite:show.html.twig', array('RaisonVisites' => $RaisonVisites));
    }

    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $RaisonVisite = $em->getRepository('SecurityUserBundle:RaisonVisite')->find($id);
        if (!$RaisonVisite) {
            throw $this->createNotFoundException('no RaisonVisite found');
        }
        $em->remove($RaisonVisite);
        $em->flush();
        $this->addFlash('delete',
            $this->get('translator')->trans('modal.successdelete.corps')
        );
        return $this->redirect($this->generateUrl('show_RaisonVisite'));
    }
}
