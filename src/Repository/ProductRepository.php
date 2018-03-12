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
    }
    
    ?>
