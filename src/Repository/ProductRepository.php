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
    public function customdeletedproduct()
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
        ->andWhere('p.deleted IS NULL')
        ->getQuery();
        
        return $qb->execute();
}

public function customcorbeilleproduct()
{
    // automatically knows to select Products
    // the "p" is an alias you'll use in the rest of the query
    $qb = $this->createQueryBuilder('p')
    ->andWhere('p.deleted IS NOT NULL')
    ->getQuery();
    
    return $qb->execute();
}
public function productnew()
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

public function categorie($value)
{
    $qb = $this->createQueryBuilder('p')
    ->Where('p.categorie like :valeur')
    ->setParameter('valeur', $value)
   
    ->getQuery();
    
    return ($qb->execute());
    
}

public function categoriegenre($value)
{
    $qb = $this->createQueryBuilder('p')
    ->Where('p.sexe like :valeur OR p.sexe = :valeur2 ')
    ->setParameter('valeur', $value)
    ->setParameter('valeur2','mixte')
    ->getQuery();
    
    return ($qb->execute());
    
}
public function categoriegenrevetement($value)
{
    $qb = $this->createQueryBuilder('p')
    ->Where('p.sexe = :valeur AND p.categorie = :valeur2 ')
    ->setParameter('valeur', $value)
    ->setParameter('valeur2','clothing')
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
 
 public function articleenstock()
 {
     return $this->createQueryBuilder('e')
     ->where('e.stock IS NOT NULL')
     ->getQuery()
     ->getResult()
     ;
 }
 public function articlehorsstock()
 {
     return $this->createQueryBuilder('e')
     ->where('e.stock IS NULL')
     ->getQuery()
     ->getResult()
     ;
 }
 public function stockproduit($value)
 {
 return  $this->createQueryBuilder('p')
 ->Where('p.id =:id')
 ->setParameter('id', $value)
 ->getQuery()
 ->getResult();
 }
}
    ?>
