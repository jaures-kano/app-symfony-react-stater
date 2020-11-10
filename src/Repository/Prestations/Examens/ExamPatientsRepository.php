<?php

namespace App\Repository\Prestations\Examens;

use App\Entity\Prestations\Examens\ExamPatients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExamPatients|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExamPatients|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExamPatients[]    findAll()
 * @method ExamPatients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamPatientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExamPatients::class);
    }

    // /**
    //  * @return ExamPatients[] Returns an array of ExamPatients objects
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
    public function findOneBySomeField($value): ?ExamPatients
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
