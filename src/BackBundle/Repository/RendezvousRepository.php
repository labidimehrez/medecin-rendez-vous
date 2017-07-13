<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\Repository;

use Doctrine\ORM\EntityRepository;

class RendezvousRepository extends EntityRepository
{
    public function getRDV($medecinId)
    {
        return $this->getEntityManager()
            ->createQuery('  SELECT t   FROM BackBundle:Rendezvous t JOIN t.medecins s  WHERE s.id=:id and t.isValidated IS NOT NULL ')
            ->setParameter('id', $medecinId)
            ->getResult();
    }
}
