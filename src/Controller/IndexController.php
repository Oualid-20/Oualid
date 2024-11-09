<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return new Response(content: "Hello World !");
    }
    
    #[Route('/contact/{name}', name: 'app_contact')]
    public function contact(string $name = "Anonymous"): Response
    {
        return new Response(content: "La page contact  $name");
    }

    #[Route('/adress/{num}', name: 'app_adress', requirements:['num' => '\d+'])]
    public function adress(string $num="Pas de num"): Response
    {
        return new Response(content: "La page Adress $num");
    }
}
