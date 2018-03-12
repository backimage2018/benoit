<?php

namespace App\Eventlistener;

use Doctrine\ORM\Event\PreFlushEventArgs;

class doctrinelistener
 {
    public function preFlush(PreFlushEventArgs $event) {
        $em = $event->getEntityManager();
        foreach ($em->getUnitOfWork()->getScheduledEntityDeletions() as $object) {    
            if (method_exists($object, "getdeleted")) {
                if ($object->getdeleted() instanceof \Datetime) {
                    continue;
                } else {
                    $object->setdeleted(new \DateTime());
                    $em->merge($object);
                    $em->persist($object);
                }
            }
        }
    }
 }



?>