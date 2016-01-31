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
        $media1->setAlt('pomme');
        $media1->setPath('http://image.shutterstock.com/display_pic_with_logo/353191/124592107/stock-photo-red-apple-with-leaf-124592107.jpg');

        $manager->persist($media1);
        //$manager->flush();
        
        
        $media2 = new Media();
        $media2->setAlt('oignon');
        $media2->setPath('http://image.shutterstock.com/display_pic_with_logo/999701/123228298/stock-photo-ripe-onion-on-a-white-background-123228298.jpg');

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
        $media5->setPath('http://images.all-free-download.com/images/graphiclarge/grape_hd_picture_5_167243.jpg');

        $manager->persist($media5);
        //$manager->flush();
        
        $media6 = new Media();
        $media6->setAlt('poivron');
        $media6->setPath('http://image.shutterstock.com/display_pic_with_logo/683470/99858464/stock-photo-bell-pepper-mix-on-white-background-99858464.jpg');

        $manager->persist($media6);
        //$manager->flush();
        
        
        $media7 = new Media();
        $media7->setAlt('tomate');
        $media7->setPath('http://image.shutterstock.com/display_pic_with_logo/359716/129610550/stock-photo-tomato-with-drops-isolated-129610550.jpg');

        $manager->persist($media7);
        
        
        $media8 = new Media();
        $media8->setAlt('aubergine');
        $media8->setPath('http://image.shutterstock.com/display_pic_with_logo/676765/151789964/stock-photo-eggplant-or-aubergine-vegetable-on-white-background-151789964.jpg');

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