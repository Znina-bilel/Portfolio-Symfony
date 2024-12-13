<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'app_hello')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'name' => 'World', // Transmettez une valeur à la variable 'name'
        ]);
    }
    
    #[Route('/contact', name: 'contact')]
public function contact(): Response
{
    return $this->render('hello/contact.html.twig');
}

   #[Route('/projet', name: 'projet')]

    public function projets(): Response
{
    return $this->render('hello/projet.html.twig');
}
}
