<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Categories;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categories();
        $categorie1->setNom('legumes');
        $categorie1->setImage($this->getReference('media3'));
        
        $manager->persist($categorie1);
        

        $categorie2 = new Categories();
        $categorie2->setNom('fruits');
        $categorie2->setImage($this->getReference('media9'));
        
        $manager->persist($categorie2);
        
        
      
         $manager->flush();
         
        
       $this->addReference('categorie1', $categorie1);
       $this->addReference('categorie2', $categorie2);
        
        
        
    }
    
    
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}