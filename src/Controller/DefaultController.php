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
         *  @route("/salut", name="default")
         */
        public function bonjour()
        {
            return new Response("bonjour tout le monde");

        
    }
    /**
     * @route("/choixeleve/{id}", name="default")
     */
    public function choixeleve($id){
        return new Response("bonjour mr eleve $id");
    }
    /**
     * @route("/nom/{id}", name="default" )
     */
    public function eleve($id):Response
    {
        return $this->render("default/index.html.twig", array(
            'id' => $id,
            'age' => $id,
        ));
    }
   
    //redirection return $this->redirecToRoute("DefaultController");
    

    /**
     * @route("/redir",name="index-redir")
     */
    public function redirecto()
    {
        return $this->redirectToRoute('home');
    }
  
}
