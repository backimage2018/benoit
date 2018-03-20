<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProductRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Product::class);
    

    }
    /**
     * @param $price
     * @return Product[]
     */
    public function customdeletedproduct(): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
        ->andWhere('p.deleted IS NULL')
        ->getQuery();
        
        return $qb->execute();
}

public function customcorbeilleproduct(): array
{
    // automatically knows to select Products
    // the "p" is an alias you'll use in the rest of the query
    $qb = $this->createQueryBuilder('p')
    ->andWhere('p.deleted IS NOT NULL')
    ->getQuery();
    
    return $qb->execute();
}
public function productnew(): array
{
    $qb = $this->createQueryBuilder('p')
    ->andWhere('p.new = "oui"')
    ->getQuery();
    return $qb->execute();
}

public function findByAlllimit()
{
    $qb = $this->createQueryBuilder('p')
    ->orderBy('p.id', 'ASC')
    ->setMaxResults(5)
    ->getQuery();
    return $qb->execute();
    ;
}
public function search($value)
{
    $qb = $this->createQueryBuilder('p')
    ->Where('p.nom like :valeur')
    ->setParameter('valeur', $value)
    ->getQuery();
    
    return ($qb->execute());
    
}
public function produitPanier($value)
{
    $qb = $this->createQueryBuilder('p')
    ->select('p.nom','p.prix')
    ->Where('p.id =:valeur')
    ->setParameter('valeur', $value)
    ->getQuery();
    return $qb->execute();
    
}
 }
    
    ?>
