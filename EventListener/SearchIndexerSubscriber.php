<?php
namespace App\EventListener;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use App\Entity\Product;


class SearchIndexerSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return array(
            'postPersist',
            'postUpdate',
        );
    }
    
    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->index($args);
    }
    
    public function postPersist(LifecycleEventArgs $args)
    {
        $this->index($args);
    }
    
    public function index(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        
        // perhaps you only want to act on some "Product" entity
        if ($entity instanceof Product) {
            $entityManager = $args->getEntityManager();
            // ... do something with the Product
        }
    }
}

?>