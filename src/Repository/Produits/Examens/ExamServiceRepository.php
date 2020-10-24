<?php

namespace App\Repository\Produits\Examens;

use App\Entity\Produits\Examens\ExamService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExamService|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExamService|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExamService[]    findAll()
 * @method ExamService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExamService::class);
    }

    // /**
    //  * @return ExamService[] Returns an array of ExamService objects
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
    public function findOneBySomeField($value): ?ExamService
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
