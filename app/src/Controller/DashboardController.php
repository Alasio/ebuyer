<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    public function index(): Response
    {
        return $this->renderHTML('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
