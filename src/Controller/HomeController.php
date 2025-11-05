<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{

    #[Route('/{reactRouting}', name: 'app_home', defaults: ['reactRouting' => null], requirements: ['reactRouting' => '.*'], priority: -1)]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
