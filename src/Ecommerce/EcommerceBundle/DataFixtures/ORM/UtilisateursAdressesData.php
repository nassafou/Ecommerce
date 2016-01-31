<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
       
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateurs1'));
        $adresse1->setNom('NTCHIRIFOU');
        $adresse1->setPrenom('Youssouf');
        $adresse1->setTelephone('0652547791');
        $adresse1->setAdresse('23 Avenue du docteur Arnold Netter');
        $adresse1->setCp('75012');
        $adresse1->setPays('FRANCE');
        $adresse1->setVille('Paris');
        $adresse1->setComplement('Face à l\'hopitale');
        

        $manager->persist($adresse1);
        //$manager->flush();
        
        
        
        $adresse2 = new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateurs2'));
        $adresse2->setNom('Afahounko');
        $adresse2->setPrenom('Gino');
        $adresse2->setTelephone('0652547792');
        $adresse2->setAdresse('18 rue de marnes ');
        $adresse2->setCp('92410');
        $adresse2->setPays('FRANCE');
        $adresse2->setVille('sevres');
        $adresse2->setComplement('pres du spar');
        

        $manager->persist($adresse2);
        //$manager->flush();
 
        
        
        $manager->flush();
            
        
        //$this->addReference('adresse1', $adresse1);
        //$this->addReference('adresse2', $adresse2);
        
        
        
        
        
        
    }
    
    
    public function getOrder()
    {
        return 6; // the order in which fixtures will be loaded
    }
}