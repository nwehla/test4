<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
  {

      
      for ($i=0; $i<20 ; $i++ ) 
      { 
          $cat = new Categorie();
          
          $cat->setTitre(" Titre de la categorie N°$i ")
                  ->setResume(" Resume de la categorie N° $i ") ;  
          
          $manager->persist($cat);
      }
   $manager->flush();
  }       

}
