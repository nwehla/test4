<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;


use App\Entity\Utilisateurs;
use App\Form\UtilisateurType;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\UtilisateursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/utilisateur")
 */
class UtilisateurController extends AbstractController
{
    /**
     * @Route("/", name="utilisateur")
     */
    public function index(): Response
    {$repo=$this->getDoctrine()->getRepository(Utilisateurs::class);
        $utilisateurs=$repo->findAll();

        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
            "utilisateur"=>$utilisateurs,
        ]);
    }
    /**
     *@Route("/{id}",name="uti_affiche")
    */
        public function afficheUtilisateur( UtilisateursRepository $UtilisateursRepository  , Utilisateurs $Utilisateurs ,Request $Request,EntityManagerInterFace $Manager):Response
        {
            return $this->render("utilisateur/affiche.html.twig",[
                "id"=>$Utilisateurs->getId(),
                "uti"=>$Utilisateurs,
            ]);
        }
}
