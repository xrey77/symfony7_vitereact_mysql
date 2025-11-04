<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    // #[Route('/app/{reactRouting}', name: 'app_react_entry', defaults: ['reactRouting' => null], requirements: ['reactRouting' => '.*'])]    
    public function index(): Response
    {
        // return $this->render('base.html.twig');
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
