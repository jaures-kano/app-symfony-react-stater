<?php

namespace App\Repository\Prestations\Examens;

use App\Entity\Prestations\Examens\ExamCommandes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExamCommandes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExamCommandes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExamCommandes[]    findAll()
 * @method ExamCommandes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamCommandesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExamCommandes::class);
    }

    // /**
    //  * @return ExamCommandes[] Returns an array of ExamCommandes objects
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
    public function findOneBySomeField($value): ?ExamCommandes
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
