<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;


use App\Entity\Location;
use App\Form\LocationType;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\LocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
     * @Route("/location")
     */
    
class LocationController extends AbstractController
{
    /**
     * @Route("/", name="location")
     */
    public function index(LocationRepository $locationRepository): Response

    {
        $loca=$locationRepository->findAll();

        return $this->render('location/index.html.twig', [
            'loc' => $loca,
        ]);
    }
    /**
     * @Route("/formulaire",name="ajouter_location_form")
     */
    public function formuler(Request $request,EntityManagerInterface $manager):Response
    {
        $form = $this->createForm(LocationType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $locations = $form->getData();
            $manager->persist($locations);
            $manager->flush();
            return $this->redirectToRoute("location");

        }
        return $this->render("location/form.html.twig",[
            "form"=>$form->createView(),
            
            
        ]);

    }
}
