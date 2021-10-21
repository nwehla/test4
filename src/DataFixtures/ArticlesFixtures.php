<?php

namespace App\DataFixtures;

use App\Entity\Articles;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
 use Faker;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // J'utlise fixtures avec FAKER
      $faker = Faker\Factory::create('fr_FR');

      
       
          $articles = new Articles();
          
          $articles->setTitre($faker->sentence())
                  ->setContenu($faker->sentence())
                   ->setImages("bonjour")
                    ->setResume($faker->sentence())
                  ->setDate(new \DateTime());
          $manager->persist($articles);
      
   $manager->flush();
  }
       

}
