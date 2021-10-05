<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    public function apropos()
    {
        return $this->render('apropos/apropos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    public function contact()
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/programme",name="index-programme")
     */

    public function programme()
    {
        return $this->render("programme/programme.html.twig", [
            'controller_name' => "HomeController",
        ]);
    }
    
    /**
     * @Route("/galerie",name="index-galerie")
     */

    public function galerie()
    {
        return $this->render("home/galerie.html.twig", [
            'controller_name' => "HomeController",
        ]);
    }
    

}
