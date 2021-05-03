<?php

namespace App\Repository;

use App\Entity\BathroomSink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BathroomSink|null find($id, $lockMode = null, $lockVersion = null)
 * @method BathroomSink|null findOneBy(array $criteria, array $orderBy = null)
 * @method BathroomSink[]    findAll()
 * @method BathroomSink[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BathroomSinkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BathroomSink::class);
    }

    // /**
    //  * @return BathroomSink[] Returns an array of BathroomSink objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BathroomSink
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
