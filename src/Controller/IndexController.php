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
    
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return new Response(content: "La page contact");
    }

    #[Route('/adress', name: 'app_adress')]
    public function adress(): Response
    {
        return new Response(content: "La page Adress");
    }
}
