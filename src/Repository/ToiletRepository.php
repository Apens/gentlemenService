<?php

namespace App\Repository;

use App\Entity\Toilet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Toilet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Toilet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Toilet[]    findAll()
 * @method Toilet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToiletRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Toilet::class);
    }

    // /**
    //  * @return Toilet[] Returns an array of Toilet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Toilet
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
