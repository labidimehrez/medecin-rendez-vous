<?php
/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */
namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }
}
