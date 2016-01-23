<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setNom('Poivron');
        $produit1->setDescription('Le poivron est un groupe de cultivars de l\'espece capcum annuum ');
        $produit1->setPrix('1.75');
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media3'));
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setTva($this->getReference('tva1'));
        
        
        
        $manager->persist($produit1);
        //$manager->flush();
        
         $produit2 = new Produits();
        $produit2->setNom('oignon');
        $produit2->setDescription('est une espèce de plante herbacée bisannuelle de la famille des Amaryllidaceae');
        $produit2->setPrix('4.33');
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media2'));
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setTva($this->getReference('tva1'));
        
        
        
        $manager->persist($produit2);
        
        
        
        $produit3 = new Produits();
        $produit3->setNom('piment');
        $produit3->setDescription('Le piment est generalement associé a la saveur du piquant');
        $produit3->setPrix('2.20');
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media4'));
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setTva($this->getReference('tva1'));
        
        
        
        $manager->persist($produit3);
        
        $produit4 = new Produits();
        $produit4->setNom('Tomates');
        $produit4->setDescription('La tomate est une espece de plantes herbacées de la famille des Solanacées, originaire du nord-ouest de l\'amerique du Sud');
        $produit4->setPrix('3.75');
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media7'));
        $produit4->setCategorie($this->getReference('categorie1'));
        $produit4->setTva($this->getReference('tva1'));
        
        
        
        $manager->persist($produit4);
        
        
        $produit5 = new Produits();
        $produit5->setNom('Raisin');
        $produit5->setDescription('Le raisin est le fruit de la vigne, le raisin de la vigne cultivée vitis vénifera est un des fruits les plus cultivé au monde');
        $produit5->setPrix('0.79');
        $produit5->setDisponible('0');
        $produit5->setImage($this->getReference('media5'));
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setTva($this->getReference('tva2'));
        
        
        
        $manager->persist($produit5);
        
        
        $produit6 = new Produits();
        $produit6->setNom('Aubergine');
        $produit6->setDescription('l\' Aubergine est une plante potagère annuelle de la famille des Solanacées, cultivée pour son fruit comsommé comme légume ');
        $produit6->setPrix('2.9');
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media8'));
        $produit6->setCategorie($this->getReference('categorie1'));
        $produit6->setTva($this->getReference('tva1'));
        
        
        
        $manager->persist($produit6);
        
        
        
        
        
        $manager->flush();
           
           //pas besoin de referencement car produit ne fait réference a aucune table 
        
       // $this->addReference('produit1', $produit1);
        //$this->addReference('produit2', $produit2);
        //$this->addReference('produit3', $produit3);
       // $this->addReference('produit4', $produit4);
        //$this->addReference('produit5', $produit5);
        //$this->addReference('produit6', $produit6);
        
        
    }
    
    
    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }
}