<?php
namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\component\DependencyInjection\ContainerAwareInterface;
use Symfony\component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface, FixtureInterface
{
    
    /**
     * @var ContainerInterface
     */
    private $container;
    
    
    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        
        $utilisateur1 = new Utilisateurs();
        
        $utilisateur1->setUsername('Youssouf');
        $utilisateur1->setEmail('ntyoussouf@gmail.com');
        $utilisateur1->setEnabled(1);
        $utilisateur1->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('Pa$$w0rd1', $utilisateur1->getSalt()));
        $manager->persist($utilisateur1);
        
        $utilisateur2 = new Utilisateurs();
        $utilisateur2->setUsername('Gino');
        $utilisateur2->setEmail('nassafou@hotmail.com');
        $utilisateur2->setEnabled(1);
        $utilisateur2->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur2)->encodePassword('123456', $utilisateur2->getSalt()));
        $manager->persist($utilisateur2);
        
        $utilisateur3 = new Utilisateurs();
        $utilisateur3->setUsername('Danny');
        $utilisateur3->setEmail('youfslair@hotmail.com');
        $utilisateur3->setEnabled(1);
        $utilisateur3->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur3)->encodePassword('Yatakafils1', $utilisateur3->getSalt()));
        $manager->persist($utilisateur3);
        
        $utilisateur4 = new Utilisateurs();
        $utilisateur4->setUsername('Doli');
        $utilisateur4->setEmail('doli@gmail.com');
        $utilisateur4->setEnabled(1);
        $utilisateur4->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur4)->encodePassword('Pa$$w0rd1', $utilisateur4->getSalt()));
        $manager->persist($utilisateur4);
        
        
        $this->addReference('utilisateurs1', $utilisateur1);
        $this->addReference('utilisateurs2', $utilisateur2);
        $this->addReference('utilisateurs3', $utilisateur3);
        $this->addReference('utilisateurs4', $utilisateur4);
                
    }
    
    
    public function getOrder()
    {
        return 5; // the order in which fixtures will be loaded
    }
}