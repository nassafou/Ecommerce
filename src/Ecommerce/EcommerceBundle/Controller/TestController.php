<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TestController extends Controller
{
    public function ajoutAction()
    {
        //pour acceder a la base crée l' entity manager
        
        $em= $this->getDoctrine()->getManager();
        
        
       /* 
        $produit = new Produits();
        $produit->setNom('Tomate');
         $produit->setCategorie('Légume');
          $produit->setDescription('Tomate ronde');
           $produit->setPrix('0.99');
            $produit->setDisponible('1');
             $produit->setTva('19.6');
              $produit->setImage('http://www.google.fr/imgres?imgurl=http%3A%2F%2Fcuantas-calorias.org%2Fwp-content%2Fuploads%2F2015%2F01%2Fcuantas-calorias-tiene-un-tomate.jpg&imgrefurl=http%3A%2F%2Fxn--tlephones-b4a.fr%2Ftag-tomate.html&h=891&w=1000&tbnid=izIJ5bJ83K7tBM%3A&docid=icvf2h-vT3EHzM&ei=3wwmVp-aFYSoa5CfgqgP&tbm=isch&iact=rc&uact=3&dur=840&page=1&start=0&ndsp=26&ved=0CDYQrQMwAGoVChMI34Wsz-HQyAIVBNQaCh2QjwD1');
        
        // persist pour mettre préenrégistrer les données envoyées
        $em->persist($produit);
        // flush pour valider les données
        
        //$em->flush();
        
        
        //pour acceder a la base crée l' entity manager
        
        //$em= $this->getDoctrine()->getManager();
        
        
        
        $produit = new Produits();
        $produit->setNom('Tomate');
         $produit->setCategorie('Légume');
          $produit->setDescription('Tomate allongée');
           $produit->setPrix('0.97');
            $produit->setDisponible('1');
             $produit->setTva('19.6');
              $produit->setImage('http://www.google.fr/imgres?imgurl=http%3A%2F%2Fcuantas-calorias.org%2Fwp-content%2Fuploads%2F2015%2F01%2Fcuantas-calorias-tiene-un-tomate.jpg&imgrefurl=http%3A%2F%2Fxn--tlephones-b4a.fr%2Ftag-tomate.html&h=891&w=1000&tbnid=izIJ5bJ83K7tBM%3A&docid=icvf2h-vT3EHzM&ei=3wwmVp-aFYSoa5CfgqgP&tbm=isch&iact=rc&uact=3&dur=840&page=1&start=0&ndsp=26&ved=0CDYQrQMwAGoVChMI34Wsz-HQyAIVBNQaCh2QjwD1');
        
        // persist pour mettre préenrégistrer les données envoyées
        $em->persist($produit);
        // flush pour valider les données
        
        $em->flush();
        */
       
       $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        
        
       // die('ici c est pointe');
        return $this->render('EcommerceBundle:Default:test.html.twig', array('produits' => $produits));
    }
    

    
    
}
