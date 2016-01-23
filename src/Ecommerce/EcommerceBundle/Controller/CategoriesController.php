<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Controller\ProduitsController;

class CategoriesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/menu.html.twig', array('categories' => $categories));
    }
    
    public function rechercheAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->find();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/menu.html.twig', array('categories' => $categories));
    }
}
