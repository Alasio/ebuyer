<?php

namespace App\DataFixtures;

use App\Entity\StockBin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StockBinFixture extends Fixture
{
    public function __construct()
    {

    }

    public function load(ObjectManager $manager)
    {
        for ($x = 'A'; $x < 'G'; $x++) {
            for ($n = 1; $n < 11; $n++) {
                $manager->persist($this->getStockBin($x, $n));
            }
        }

        $manager->flush();
    }

    private function getStockBin($col, $row)
    {
        switch ($col) {
            case ('A'):
                $pickLocation = $row;
                $closestPackLocation = 1;
                break;
            case ("B"):
            case ("C"):
                $pickLocation = 21 - $row;
                $closestPackLocation = 2;
                break;
            case ("D"):
            case ("E"):
                $pickLocation = 20 + $row;
                $closestPackLocation = 3;
                break;
            case ("F"):
                $pickLocation = 41 - $row;
                $closestPackLocation = 3;
                break;
            default:
                $closestPackLocation = null;
        }

        return new StockBin(
            $col.$row,
            $pickLocation,
            $closestPackLocation
        );
    }
}
