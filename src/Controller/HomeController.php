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

    /**
     * @route("/contact","name=index_contact")
     */
    public function contacter()
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/programme",name="index-programme")
     */

    public function programme()
    {
        return $this->render("home/programme.html.twig", [
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
    /**
     * @route("/actualitees","name=index_actualitees")
     */
    public function actualitees(){
        return $this->render("home/actualitees.html.twig",[
            "controller_name"=>"index_actualitees",
        ]);
    }
}
