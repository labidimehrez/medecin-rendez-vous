<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SecurityUserBundle\Entity\Specialite;
use SecurityUserBundle\Form\SpecialiteType;

class SpecialiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('SecurityUserBundle:Default:index.html.twig');
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $specialite = new Specialite();
        $form = $this->createForm(SpecialiteType::class, $specialite);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $specialite = $form->getData();
                $em->persist($specialite);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('modal.successajout.corps'));
            }
        }
        return $this->render('SecurityUserBundle:Default/Specialite:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $specialite = $em->getRepository('SecurityUserBundle:Specialite')->find($id);
        if (!$specialite) {
            throw $this->createNotFoundException('no Specialite found');
        }
        $form = $this->createForm(SpecialiteType::class, $specialite);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $specialite = $form->getData();
                $em->persist($specialite);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('modal.successmodification.corps'));
            }
        }
        return $this->render('SecurityUserBundle:Default/Specialite:update.html.twig', array('form' => $form->createView()));
    }
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $specialites = $em->getRepository('SecurityUserBundle:Specialite')->findAll();
        return $this->render('SecurityUserBundle:Default/Specialite:show.html.twig', array('specialites' => $specialites));
    }

    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $specialite = $em->getRepository('SecurityUserBundle:Specialite')->find($id);
        if (!$specialite) {
            throw $this->createNotFoundException('no Specialite found');
        }
        $em->remove($specialite);
        $em->flush();
        $this->addFlash('delete',
            $this->get('translator')->trans('modal.successdelete.corps')
        );
        return $this->redirect($this->generateUrl('show_specialite'));
    }
}
