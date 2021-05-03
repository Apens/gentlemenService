<?php

namespace App\Repository;

use App\Entity\Faucet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Faucet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Faucet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Faucet[]    findAll()
 * @method Faucet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaucetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Faucet::class);
    }

    // /**
    //  * @return Faucet[] Returns an array of Faucet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Faucet
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
