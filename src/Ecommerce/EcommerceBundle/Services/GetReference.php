<?php

namespace Ecommerce\EcommerceBundle\Services;

use Symfony\component\Security\Core\securityContextInterface;

//use Symfony\Component\DependencyInjection\ContainerInterface;
//use Symfony\Component\HttpFoundation\Session\Session;
//use Symfony\Component\HttpFoundation\RedirectResponse;
//use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class GetReference
{
    
    
    public function __construct($securityContext, $entityManager)
    {
        //on initialise
        $this->securityContext = $securityContext;
        $this->em = $entityManager;    
    }
    
    
    public function reference()
    {
      $reference = $this->em->getRepository('EcommerceBundle:Commandes')->findBy(array('valider' => 1), array('id' => 'DESC'),1,1);
      if(!reference)// s'il y  a pas de factures il retourne 1
      return 1;
    else
    // recupérré la dernière commande de la référence incrémenté de 1
    return $reference->getReference() +1;

    
        
        
     
       if(!is_Object($this->securityContext->getToken()->getUser()))
          {
            $this->session->getFlashBag()->add('notification','Vous devez vous identifier' );
            $event->setResponse(new RedirectResponse($this->router->generate('fos_user_security_login')));
    
           }
    }
}
    

