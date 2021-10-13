<?php
namespace App\Controller;

use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/view")
*/
class ViewController extends AbstractController
{
     /**
     * @Route("/", name="index_vue")
     */
    public function laVue():Response
    {
        $tab=[5,41,10];
        return $this->render('View/vue.html.twig', [
            // J'affiche Mon tableau
            'cours_name' => 'COMPOSANTE VUE',
            'tableau' => $tab,
            ]);
            }

            /**
             * @Route("/valery", name="index_valery")
             */
            public function leNom():Response{
              return $this->render('View/vue.html.twig', [
                  "nomval"=>"nwehla",
                  "prenomval"=>"valery",
              ]); 
            }
              
              //liste des stagiaires de la classe
              /**
               * @Route("/stagiaire",name="index_stagiaire")
               */
              
              public function eleve(): Response{
              
                $tab=["nabi","moaz","modou","ange"];
              
              
                return $this->render("view/eleve.html.twig",[
                  "nom"=>$tab,
                  
                ]);
              } 
          /**
           *@Route("/tabcalcul",name="index_tableau")
           */
          public function tabcal():Response
          {
            return $this->render("view/calcul.html.twig",[
              
            ]);
          }
          /**
           *@Route("/condition",name="index_condition")
           */
          public function condition():Response
          {
            return $this->render("view/condition.html.twig",[
              
            ]);
          }
          /**
           *@Route("/boucle",name="index_boucle")
           */
          public function boucle():Response
          {
            return $this->render("view/boucle.html.twig",[
              
            ]);
          }
            }
