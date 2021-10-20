<?php

namespace App\Controller;
use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
