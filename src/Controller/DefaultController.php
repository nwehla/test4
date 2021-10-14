<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
        /**
         *  @route("/salut", name="index_salut")
         */
        public function bonjour()
        {
            return new Response("bonjour tout le monde");

        
    }
    /**
     * @route("/name/{id}", name="index_eleve")
     */
    public function choixeleve($id){
        return new Response("bonjour mr eleve $id");
    }
    /**
     * @route("/nom/{id}/{age}", name="default" )
     */
    public function eleve($id,$age):Response
    {
        return $this->render("default/index.html.twig", array(
            'id' => $id,
            'age' => $age,
        ));
    }
   
    //redirection return $this->redirecToRoute("DefaultController");
    

    /**
     * @route("/redir/{id}",name="index-redir")
     */
    public function redirecto($id)
    {
        return $this->redirectToRoute('home');
    }
    
  
}
