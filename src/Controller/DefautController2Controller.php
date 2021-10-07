<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefautController2Controller extends AbstractController
{
    /**
     * @Route("/defaut/controller2", name="defaut_controller2")
     */
    public function index(): Response
    {
        return $this->render('defaut_controller2/index.html.twig', [
            'controller_name' => 'DefautController2Controller',
        ]);
    }
}
