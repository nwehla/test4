<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/par","name=default")
     */
    public function base():Response{
        return $this->render("default/test.html.twig",[
            "controller_name"=>"DefaultController"
        ]);
    }
}

?>