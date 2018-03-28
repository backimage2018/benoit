<?php

namespace App\Repository;

use App\Entity\Entrepot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Entrepot|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entrepot|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entrepot[]    findAll()
 * @method Entrepot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntrepotRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Entrepot::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('e')
            ->where('e.something = :value')->setParameter('value', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
