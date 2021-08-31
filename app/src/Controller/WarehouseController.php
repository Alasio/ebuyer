<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\StockBin;
use App\Repository\ProductRepository;
use App\Repository\StockBinRepository;
use Symfony\Component\HttpFoundation\Response;

class WarehouseController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('warehouse/index.html.twig', [
            'controller_name' => 'WarehouseController',
        ]);
    }

    public function showProductInBin(AjaxController $ajaxController)
    {
        /** @var StockBinRepository $stockBinRepository */
        $stockBinRepository = $this->getDoctrine()->getRepository(StockBin::class);
        /** @var StockBin $stockBin */
        $stockBin = $stockBinRepository->findOneBy(['name' => $ajaxController->getPost('name')]);

        /** @var ProductRepository $productRepository */
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        /** @var Product $product */
        $product = $productRepository->findOneBy(['stockBin' => $stockBin]);

        return $ajaxController->renderHTML('warehouse/productModal/item.twig', ['product' => $product]);
    }
}
