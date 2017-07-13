<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackBundle\Entity\ModePaiment;
use BackBundle\Form\ModePaimentType;

class ModepaimentController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $mode = new ModePaiment();
        $form = $this->createForm(ModePaimentType::class, $mode);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $mode = $form->getData();
                $em->persist($mode);
                $em->flush();  // ;
                $this->addFlash('success', $this->get('translator')->trans('modal.successajout.corps'));
            }
        }
        return $this->render('BackBundle:Default/ModePaiment:add.html.twig', array('form' => $form->createView()));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $mode = $em->getRepository('BackBundle:ModePaiment')->find($id);
        if (!$mode) {
            throw $this->createNotFoundException('no ModePaiment found');
        }
        $form = $this->createForm(ModePaimentType::class, $mode);
        $request = $this->getRequest();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $mode = $form->getData();
                $em->persist($mode);
                $em->flush();  // ;
                $this->addFlash('success', $this->get('translator')->trans('modal.successmodification.corps'));
            }
        }
        return $this->render('BackBundle:Default/ModePaiment:update.html.twig', array('form' => $form->createView()));
    }
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modes = $em->getRepository('BackBundle:ModePaiment')->findAll();
        return $this->render('BackBundle:Default/ModePaiment:show.html.twig', array('modes' => $modes));
    }

    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $mode = $em->getRepository('BackBundle:ModePaiment')->find($id);
        if (!$mode) {
            throw $this->createNotFoundException('no ModePaiment found');
        }
        $em->remove($mode);
        $em->flush();
        $this->addFlash('delete',
            $this->get('translator')->trans('modal.successdelete.corps')
        );
        return $this->redirect($this->generateUrl('show_modepaiment'));
    }
}
