<?php
namespace App\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Entity\Product;

class SearchIndexer
{
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        
        // only act on some "Product" entity
        if (!$entity instanceof Product) {
            return;
        }
        
        $em = $args->getEntityManager();
       
        $Product=New Product();
        $Product->getDeleted(1);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        

    }
}

?>