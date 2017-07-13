<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace MainBundle\Services;

use Symfony\Bundle\TwigBundle\TwigEngine;
use Swift_Message;

class Mailer {

    private $mailer;
    private $templating;

    public function senMail($vue, $data, $from, $to, $subj) {

        // contenu du mail
        $body = $this->templating->render($vue, $data);
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('contact.rendezvousmedecin@gmail.com') ///  a completer 
                ->setPassword('support.rendezvousmedecin@gmail.com'); ///  a completer 
        $message = Swift_Message::newInstance($transport)
                ->setFrom($from)
                ->setTo($to)->addCc($from)
                ->setSubject($subj)
                ->setBody($body, 'text/html');

        $this->mailer->send($message);
    }

    /**
     * @param Swift_Mailer $mailer
     * @return void
     */
    public function setMailer(\Swift_Mailer $mailer) {
        $this->mailer = $mailer;
    }

    /**
     * @param TwigEngine $templating
     * @return void
     */
    public function setTemplating(TwigEngine $templating) {
        $this->templating = $templating;
    }

}
