<?php

namespace App\Repository;

use App\Entity\StockBin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StockBin|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockBin|null findOneBy(array $criteria, array $orderBy = null)
 * @method StockBin[]    findAll()
 * @method StockBin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockBinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockBin::class);
    }

    // /**
    //  * @return StockBin[] Returns an array of StockBin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StockBin
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
