<?php

namespace App\Repository;

use App\Entity\Lego;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lego>
 */
class LegoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lego::class);
    }

    
    //    /**
    //     * @return Lego[] Returns an array of Lego objects
    //     */
    public function findByCategory($value): \Doctrine\Common\Collections\Collection
    {
        $legos = $this->createQueryBuilder('l')
            ->andWhere('l.collection = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        return new \Doctrine\Common\Collections\ArrayCollection($legos);
    }

    //    public function findOneBySomeField($value): ?Lego
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
