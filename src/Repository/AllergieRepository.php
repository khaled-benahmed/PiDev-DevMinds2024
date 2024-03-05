<?php

namespace App\Repository;

use App\Entity\Allergie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Allergie>
 *
 * @method Allergie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Allergie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Allergie[]    findAll()
 * @method Allergie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllergieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Allergie::class);
    }

//    /**
//     * @return Allergie[] Returns an array of Allergie objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Allergie
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
