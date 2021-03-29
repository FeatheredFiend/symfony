<?php

namespace App\Repository;

use App\Entity\JobApplicant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JobApplicant|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobApplicant|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobApplicant[]    findAll()
 * @method JobApplicant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobApplicantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobApplicant::class);
    }

    // /**
    //  * @return JobApplicant[] Returns an array of JobApplicant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JobApplicant
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
