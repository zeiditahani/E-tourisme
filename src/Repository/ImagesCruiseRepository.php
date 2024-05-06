<?php

namespace App\Repository;

use App\Entity\ImagesCruise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImagesCruise>
 *
 * @method ImagesCruise|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImagesCruise|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImagesCruise[]    findAll()
 * @method ImagesCruise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImagesCruiseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImagesCruise::class);
    }

//    /**
//     * @return ImagesCruise[] Returns an array of ImagesCruise objects
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

//    public function findOneBySomeField($value): ?ImagesCruise
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
