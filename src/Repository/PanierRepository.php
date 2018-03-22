<?php

namespace App\Repository;

use App\Entity\Panier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Panier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Panier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Panier[]    findAll()
 * @method Panier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanierRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Panier::class);
    }

   
//     public function findBySomething($value)
//     {
//         return $this->createQueryBuilder('p')
         
//             ->where('p.user = :value') 
//             ->setParameter('value', $value)
//             ->getQuery()
//             ->getResult()
//         ;
//     }
    
    public function recherchepanier($value,$value2)
    {
        $qb = $this->createQueryBuilder('p')
        ->Where('p.Product = :valeur AND p.user = :valeur2 ')
        ->setParameter('valeur', $value)
        ->setParameter('valeur2',$value2)
        ->getQuery();
        
        return ($qb->execute());
        
    }
}
