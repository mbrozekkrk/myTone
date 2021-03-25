<?php

namespace App\Repository;

use App\Entity\Offert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Offert|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offert|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offert[]    findAll()
 * @method Offert[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffertRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offert::class);
    }

    // /**
    //  * @return Offert[] Returns an array of Offert objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Offert
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
