<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setAlt('legume2');
        $media1->setPath('https://commons.wikimedia.org/wiki/File:L%C3%A9gumes_pour_ratatouille_au_march%C3%A9_d%27Apt.jpg');

        $manager->persist($media1);
        //$manager->flush();
        
        
        $media2 = new Media();
        $media2->setAlt('oignon');
        $media2->setPath('img/oignon.png');

        $manager->persist($media2);
        //$manager->flush();
        
        
        
        $media3 = new Media();
        $media3->setAlt('legume');
        $media3->setPath('https://commons.wikimedia.org/wiki/File:13-08-06-abu-dhabi-marina-mall-57.jpg');

        $manager->persist($media3);
        //$manager->flush();
        
        $media4 = new Media();
        $media4->setAlt('Piment');
        $media4->setPath('https://commons.wikimedia.org/wiki/File:Piments_lampions.jpg');

        $manager->persist($media4);
        //$manager->flush();
        
        $media5 = new Media();
        $media5->setAlt('raisin');
        $media5->setPath('https://commons.wikimedia.org/wiki/File:Vineyard_in_Montone.jpg');

        $manager->persist($media5);
        //$manager->flush();
        
        $media6 = new Media();
        $media6->setAlt('poivron');
        $media6->setPath('https://commons.wikimedia.org/wiki/File:Capsicum_annuum_fruits_IMGP0049.jpg');

        $manager->persist($media6);
        //$manager->flush();
        
        
        $media7 = new Media();
        $media7->setAlt('tomate');
        $media7->setPath('https://commons.wikimedia.org/wiki/File:Bright_red_tomato_and_cross_section02.jpg');

        $manager->persist($media7);
        
        
        $media8 = new Media();
        $media8->setAlt('aubergine');
        $media8->setPath('https://commons.wikimedia.org/wiki/File:Solanum_melongena_26_08_2012_(1).JPG');

        $manager->persist($media8);
        
        $media9 = new Media();
        $media9->setAlt('orange');
        $media9->setPath('http://images.all-free-download.com/images/graphiclarge/orange_191422.jpg');

        $manager->persist($media9);
        
        $manager->flush();
            
        
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
        $this->addReference('media9', $media9);
        
        
        
        
        
    }
    
    
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}