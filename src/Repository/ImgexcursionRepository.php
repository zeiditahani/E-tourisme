<?php

namespace App\Repository;

use App\Entity\Imgexcursion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Imgexcursion>
 *
 * @method Imgexcursion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Imgexcursion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Imgexcursion[]    findAll()
 * @method Imgexcursion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImgexcursionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Imgexcursion::class);
    }

//    /**
//     * @return Imgexcursion[] Returns an array of Imgexcursion objects
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

//    public function findOneBySomeField($value): ?Imgexcursion
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
