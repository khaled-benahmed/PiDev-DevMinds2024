<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

//    /**
//     * @return Reclamation[] Returns an array of Reclamation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reclamation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function searchReclamations($searchTerm)
{
    return $this->createQueryBuilder('r')
        ->where('r.NomUserReclamation LIKE :searchTerm')
        ->orWhere('r.textReclamation LIKE :searchTerm')
        ->orWhere('r.dateReclamation LIKE :searchTerm') 
        ->setParameter('searchTerm', '%' . $searchTerm . '%')
        ->getQuery()
        ->getResult();
}
public function getReclamationCountsByMonth()
{
    $reclamations = $this->createQueryBuilder('r')
        ->select('r.dateReclamation')
        ->getQuery()
        ->getResult();

    // Initialize an array to hold counts for each month
    $countsByMonth = array_fill(1, 12, 0);

    // Count reclamations for each month
    foreach ($reclamations as $reclamation) {
        $month = (int) $reclamation['dateReclamation']->format('m');
        $countsByMonth[$month]++;
    }

    return array_values($countsByMonth);
}
}
