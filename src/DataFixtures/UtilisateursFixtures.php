<?php

namespace App\DataFixtures;
use App\Entity\Utilisateurs;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UtilisateursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i<20 ; $i++ ) 
      { 
          $utilisateurs = new Utilisateurs();
           $rol=array('locataires','propriétaires','gestionnaires','administrateurs');
          shuffle($rol);
          
          $utilisateurs->setNom("UtilisateurNom N°$i ")
                  ->setPrenom("UtilisateurPrenom N° $i ")   
                  ->setPhoto("PhotoUtilisateur N° $i ")  
                  ->setDatedenaissance( new DateTime())    
                  ->setLogin("login N° $i ")    
                  ->setAdresse("adresse utilisateurN° $i ")    
                  ->setEmail("adresse mail@N°$i ")    
                  ->setMotdepasse("motdepasseN° $i ") 
                  ->setRole($rol[0]); 
                   
          $manager->persist($utilisateurs);
      }
   $manager->flush();
  }   
    
}
