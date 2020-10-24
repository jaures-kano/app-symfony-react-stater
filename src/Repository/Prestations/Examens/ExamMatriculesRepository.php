<?php

namespace App\Repository\Prestations\Examens;

use App\Entity\Prestations\Examens\ExamMatricules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExamMatricules|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExamMatricules|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExamMatricules[]    findAll()
 * @method ExamMatricules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamMatriculesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExamMatricules::class);
    }

    // /**
    //  * @return ExamMatricules[] Returns an array of ExamMatricules objects
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
    public function findOneBySomeField($value): ?ExamMatricules
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
