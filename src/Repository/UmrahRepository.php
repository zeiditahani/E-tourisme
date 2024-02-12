<?php

namespace App\Repository;

use App\Entity\Umrah;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Umrah>
 *
 * @method Umrah|null find($id, $lockMode = null, $lockVersion = null)
 * @method Umrah|null findOneBy(array $criteria, array $orderBy = null)
 * @method Umrah[]    findAll()
 * @method Umrah[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UmrahRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Umrah::class);
    }

//    /**
//     * @return Umrah[] Returns an array of Umrah objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Umrah
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
