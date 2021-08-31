<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Repository\StockBinRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProductFixture extends Fixture implements DependentFixtureInterface
{
    private \Faker\Generator $faker;
    private StockBinRepository $stockBinRepository;

    /**
     * Construct
     */
    public function __construct(StockBinRepository $stockBinRepository)
    {
        $this->faker = Factory::create();
        $this->stockBinRepository = $stockBinRepository;
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($x = 'A'; $x < 'G'; $x++) {
            for ($n = 1; $n < 11; $n++) {
                $manager->persist($this->getProduct($x.$n));
            }
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            StockBinFixture::class
        ];
    }

    /**
     * @param $i
     * @return Product
     */
    private function getProduct($binName): Product
    {
        return new Product(
            $this->faker->sentence(3),
            $this->faker->sentence(10),
            $this->faker->randomFloat(2, 0, 999.99),
            $this->faker->numberBetween(0, 99),
            $this->stockBinRepository->findOneBy(['name' => $binName])
        );
    }
}
