<?php

namespace App\Controller;use App\Entity\Articles;
use App\Form\ArticlesType;
use App\Repository\ArticlesRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/articles")
 */

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article")
     */
    public function index(): Response
    
    {
        $repo=$this->getDoctrine()->getRepository(Articles::class);
        $articles=$repo->findAll();

        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            "articles"=>$articles,
        ]);
    }
     /**
     * @Route("/{id}", name="articles_affichage", methods={"GET"})
     */
    public function show(Articles $articles, ArticlesRepository $articlesRepository, Request $request, EntityManagerInterface $manager ): Response
    {
        return $this->render('articles/affichage.html.twig', [
            'id'=>$articles->getId(),
            'articles' => $articles,
        ]);
    }
     /**
     * @Route("/nouveau", name="nouveau_article")
     */
    public function nouveau(): Response
    {
        return $this->render('articles/nouveau.html.twig', [
            
        ]);
    }
}
