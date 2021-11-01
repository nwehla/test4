<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;


use App\Entity\Categorie;
use App\Form\CategorieType;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(CategorieRepository $CategorieRepository): Response
    { 
        $cat=$CategorieRepository->findAll();
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
            'cat'=>$cat,
            
        ]);
    }
        /**
         *@Route("/{id}",name="cat_affiche")
         */
        public function afficheCategorie( CategorieRepository $CategorieRepository  , Categorie $Categorie ,Request $Request,EntityManagerInterFace $Manager):Response
        {
            return $this->render("Categorie/affiche.php",[
                "id"=>$Categorie->getId(),
                "cat"=>$Categorie,
            ]);
        }
    }

