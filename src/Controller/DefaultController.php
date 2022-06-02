<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{

        public function saludo()
        {
            return new Response(content: "Hola Mundo");
        }
        #[Route("/user")]
        public function user()
        {
            return new Response(content:"Soy Sergio");
        }
        #[Route("/usero")]
        public function usero():Response
        {
            return $this -> render("index.html.twig");
        }
        
}
