<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\StockBin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @param int $numOfProducts
     * @return Product[]
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findRandomProducts(int $numOfProducts = 5)
    {
        // Symfony does not handle random natively, so we need to sort this ourselves
        $productIDs = $this->getRandomProductIDs($numOfProducts);

        return $this->createQueryBuilder('p')
            ->join(StockBin::class, 's')
            ->andWhere("p.id IN (:ids)")
            ->setParameter('ids', $productIDs)
            ->orderBy('s.pick_from', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @param int $numberOfIDs
     * @return array
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getRandomProductIDs(int $numberOfIDs = 5): array
    {
        // First, lets get the min ID from the database
        $minID = $this->createQueryBuilder('p')
            ->select('MIN(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // And now the max
        $maxID = $this->createQueryBuilder('p')
            ->select('MAX(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Set these up as a range array
        $range = range($minID, $maxID);

        // Shuffle these randomly
        shuffle($range);

        // Now take the first $numOfProducts
        return array_slice($range, 0, $numberOfIDs);
    }
}
