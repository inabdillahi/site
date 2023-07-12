<?php

namespace App\Repository;

use App\Entity\Tableimage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tableimage>
 *
 * @method Tableimage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tableimage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tableimage[]    findAll()
 * @method Tableimage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TableimageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tableimage::class);
    }

//    /**
//     * @return Tableimage[] Returns an array of Tableimage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tableimage
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
