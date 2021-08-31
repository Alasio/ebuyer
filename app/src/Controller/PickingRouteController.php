<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;

class PickingRouteController extends AbstractController
{

    /**
     * @return Response
     */
    public function index(): Response
    {
        /** @var ProductRepository $productsRepository */
        $productsRepository = $this->getDoctrine()->getRepository(Product::class);

        $products = $productsRepository->findRandomProducts();

        // For some reason, the array is backwards, so lets reverse it:
        $products = array_reverse($products);

        return $this->renderHTML('picking_route/index.html.twig', ['products' => $products]);
    }
}
