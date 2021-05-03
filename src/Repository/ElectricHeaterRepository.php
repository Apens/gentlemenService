<?php

namespace App\Repository;

use App\Entity\ElectricHeater;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ElectricHeater|null find($id, $lockMode = null, $lockVersion = null)
 * @method ElectricHeater|null findOneBy(array $criteria, array $orderBy = null)
 * @method ElectricHeater[]    findAll()
 * @method ElectricHeater[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElectricHeaterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ElectricHeater::class);
    }

    // /**
    //  * @return ElectricHeater[] Returns an array of ElectricHeater objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ElectricHeater
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
