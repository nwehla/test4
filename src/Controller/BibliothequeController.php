<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("biblio")
 */
class BibliothequeController extends AbstractController
{
    /**
     * @Route("/", name="bibliotheque")
     */
    public function index(): Response
    {
        return $this->render('bibliotheque/index.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
    /**
     * @Route("/livre", name="bibi_livre")
     */
    public function lire(): Response
    {
        return $this->render('bibliotheque/livre.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
    /**
     * @Route("/contacter", name="bibi_contact")
     */
    public function contacter(): Response
    {
        return $this->render('bibliotheque/contact.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
    /**
     * @Route("/apropos", name="bibi_apropos")
     */
    public function apropos(): Response
    {
        return $this->render('bibliotheque/apropos.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
    /**
     * @Route("/connexion", name="bibi_connexion")
     */
    public function connecter(): Response
    {
        return $this->render('bibliotheque/connexion.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
    /**
     * @Route("/documentation", name="bibi_documentation")
     */
    public function documenter(): Response
    {
        return $this->render('bibliotheque/document.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
    /**
     * @Route("/location", name="bibi_location")
     */
    public function louer(): Response
    {
        return $this->render('bibliotheque/location.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
    /**
     * @Route("/user", name="bibi_user")
     */
    public function user(): Response
    {
        return $this->render('bibliotheque/user.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
    /**
     * @Route("/admin", name="bibi_admin")
     */
    public function admin(): Response
    {
        return $this->render('bibliotheque/admin.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }
}
