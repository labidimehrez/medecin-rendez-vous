<?php
/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */
namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Swift_Message;

class ExceptionListener implements EventSubscriberInterface
{
    private $mailer;
    private $templating;
    private $dontCare = array(
//        'Symfony\Component\HttpKernel\Exception\NotFoundHttpException',
//        'Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException',
    );

    /**
     * @param GetResponseForExceptionEvent $event
     * @return void
     */
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        // pas de mail d'erreur pour certaines exceptions
        if (in_array(get_class($event->getException()), $this->dontCare)) {
            return;
        }
        //remote client IP
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        if ($ip == '::1') {
            $ip='127.0.0.1';
        }
            
       
        // contenu du mail
        $body = $this->templating->render('mails/error.html.twig', array(
            'exception' => $event->getException(),'ip'=>$ip
        ));

        $message = Swift_Message::newInstance()
            ->setFrom('contact.rendezvousmedecin@gmail.com')
            ->setTo('contact.rendezvousmedecin@gmail.com')
             ->setSubject("Error ".$event->getException())
            ->setBody($body, 'text/html');

        $this->mailer->send($message);
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            'kernel.exception' => 'onKernelException'
        );
    }

    /**
     * @param Swift_Mailer $mailer
     * @return void
     */
    public function setMailer(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param TwigEngine $templating
     * @return void
     */
    public function setTemplating(TwigEngine $templating)
    {
        $this->templating = $templating;
    }
}
