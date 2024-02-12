<?php

namespace App\Repository;

use App\Entity\GoodAdress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GoodAdress>
 *
 * @method GoodAdress|null find($id, $lockMode = null, $lockVersion = null)
 * @method GoodAdress|null findOneBy(array $criteria, array $orderBy = null)
 * @method GoodAdress[]    findAll()
 * @method GoodAdress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoodAdressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GoodAdress::class);
    }

//    /**
//     * @return GoodAdress[] Returns an array of GoodAdress objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GoodAdress
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
