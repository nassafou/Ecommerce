<?php


namespace Ecommerce\EcommerceBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Ecommerce\EcommerceBundle\ProduitsController;


class RechercheType extends AbstractType {
    
    #Attribut
    
    #Constante
   
    #Methode
    
    
    public function buildForm(FormBuilderInterface  $builder, array $options )
    {
       $builder->add('recherche', 'text', array('label' => false,'attr' => array('class' => 'input-medium search-query')));
        
    }
    
    public function getName()
    {
     
     return 'ecommerce_ecommercebundle_recherche'   ;
    }
    
}

