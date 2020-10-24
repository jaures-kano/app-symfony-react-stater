<?php

namespace App\Repository\Prestations\Examens;

use App\Entity\Prestations\Examens\ExamFactures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExamFactures|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExamFactures|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExamFactures[]    findAll()
 * @method ExamFactures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamFacturesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExamFactures::class);
    }

    // /**
    //  * @return ExamFactures[] Returns an array of ExamFactures objects
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
    public function findOneBySomeField($value): ?ExamFactures
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
