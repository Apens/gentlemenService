<?php

namespace App\Repository;

use App\Entity\SwitchBoard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SwitchBoard|null find($id, $lockMode = null, $lockVersion = null)
 * @method SwitchBoard|null findOneBy(array $criteria, array $orderBy = null)
 * @method SwitchBoard[]    findAll()
 * @method SwitchBoard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SwitchBoardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SwitchBoard::class);
    }

    // /**
    //  * @return SwitchBoard[] Returns an array of SwitchBoard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SwitchBoard
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
