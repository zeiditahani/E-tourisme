<?php

namespace App\Repository;

use App\Entity\Imageshiking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Imageshiking>
 *
 * @method Imageshiking|null find($id, $lockMode = null, $lockVersion = null)
 * @method Imageshiking|null findOneBy(array $criteria, array $orderBy = null)
 * @method Imageshiking[]    findAll()
 * @method Imageshiking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageshikingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Imageshiking::class);
    }

//    /**
//     * @return Imageshiking[] Returns an array of Imageshiking objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Imageshiking
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
