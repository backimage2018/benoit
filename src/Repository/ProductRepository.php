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

    
    //custom repo pour ressortir tous les artciles sauf les display non
    public function findAllNodisplay(){
        $qb = $this->createQueryBuilder('p')
        ->andWhere("p.display = 'oui'")
        ->Join('p.image', 'i')
        ->addSelect('i')
        ->getQuery();
        return $qb->execute();
    }
    
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
    ->Join('p.image', 'i')
    ->addSelect('i')
    ->where("p.new = 'new' AND p.display = 'oui'")
    ->setMaxResults(7)
    ->getQuery();
    return $qb->execute();
}

public function findByAlllimit()
{
    $qb = $this->createQueryBuilder('p')
    ->Join('p.image', 'i')
    ->addSelect('i')
    ->Where(" p.display = 'oui' ")
    ->orderBy('p.id', 'ASC')
    ->setMaxResults(5)
    ->getQuery();
    return $qb->execute();
    ;
}
public function search($value)
{
    $qb = $this->createQueryBuilder('p')
    ->Join('p.image', 'i')
    ->addSelect('i')
    ->Where("p.nom like :valeur AND p.display = 'oui' ")
    ->setParameter('valeur', $value)
    ->getQuery();
    
    return ($qb->execute());
    
}

public function categorie($value)
{
    $qb = $this->createQueryBuilder('p')
    ->Join('p.image', 'i')
    ->addSelect('i')
    ->Where('p.categorie like :valeur')
    ->andWhere("p.display = 'oui'")
    ->setParameter('valeur', $value)
   
    ->getQuery();
    
    return ($qb->execute());
    
}

public function categoriegenre($value)
{
    $qb = $this->createQueryBuilder('p')
    ->Join('p.image', 'i')
    ->addSelect('i')
    ->Where('p.sexe like :valeur OR p.sexe = :valeur2 ')
    ->andWhere("p.display = 'oui'")
    ->setParameter('valeur', $value)
    ->setParameter('valeur2','mixte')
    ->getQuery();
    
    return ($qb->execute());
    
}
public function categoriegenrevetement($value)
{
    $qb = $this->createQueryBuilder('p')
    ->Join('p.image', 'i')
    ->addSelect('i')
    ->Where('p.sexe = :valeur AND p.categorie = :valeur2 ')
    ->andWhere("p.display = 'oui'")
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
     ->Join('e.image', 'i')
     ->addSelect('i')
     ->where("e.display ='oui'")
     ->getQuery()
     ->getResult()
     ;
 }
 public function articlenoshow()
 {
     return $this->createQueryBuilder('e')
     ->where("e.display ='non'")
     ->getQuery()
     ->getResult()
     ;
 }
 public function stockproduit($value)
 {
 return  $this->createQueryBuilder('p')
 ->Join('p.image', 'i')
 ->addSelect('i')
 ->Join('p.stock', 's')
 ->addSelect('s')
 ->Where('p.id =:id')
 ->setParameter('id', $value)
 ->getQuery()
 ->getResult();
 }
}
    ?>
