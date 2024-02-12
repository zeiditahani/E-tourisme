<?php

namespace App\Repository;

use App\Entity\Hiking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Hiking>
 *
 * @method Hiking|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hiking|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hiking[]    findAll()
 * @method Hiking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HikingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hiking::class);
    }

//    /**
//     * @return Hiking[] Returns an array of Hiking objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Hiking
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
