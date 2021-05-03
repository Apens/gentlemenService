<?php

namespace App\Repository;

use App\Entity\Waterheater;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Waterheater|null find($id, $lockMode = null, $lockVersion = null)
 * @method Waterheater|null findOneBy(array $criteria, array $orderBy = null)
 * @method Waterheater[]    findAll()
 * @method Waterheater[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WaterheaterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Waterheater::class);
    }

    // /**
    //  * @return Waterheater[] Returns an array of Waterheater objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Waterheater
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
