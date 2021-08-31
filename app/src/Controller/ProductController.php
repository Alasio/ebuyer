<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();

        $this->addScript('assets/js/plugins/jquery.dataTables.min.js');

        return $this->renderHTML('product/index.html.twig', [
            'products' => $products
        ]);
    }
}
