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
/**
 *@Route("/categorie")
 */

class CategorieController extends AbstractController
{
    /**
     * @Route("/", name="categorie")
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
         *@Route("/formulaire",name="fomulaire_affiche")
         */
        public function formulaire( Request $request,EntityManagerInterFace $manager):Response
        {
            $form=$this->createForm(CategorieType::class);
            $form->handleRequest($request);
            if($form->isSubmitted()&&$form->isValid()){
                $categories=$form->getData();
                $manager->persist($categories);
                $manager->flush();
                $this->addFlash('success', 'Profil ajouté !');
    
                return $this->redirectToRoute("categorie");
    
            }
            return $this->render('categorie/formulaire.html.twig', [
                
                'form'=>$form->createView(),
                
            ]);
        }
        /**
         *@Route("/{id}",name="cat_affiche")
         */
        public function afficheCategorie( CategorieRepository $CategorieRepository  , Categorie $Categorie ,Request $Request,EntityManagerInterFace $Manager):Response
        {
            return $this->render("Categorie/affiche.html.twig",[
                "id"=>$Categorie->getId(),
                "cat"=>$Categorie,
            ]);
        }
        
    }

