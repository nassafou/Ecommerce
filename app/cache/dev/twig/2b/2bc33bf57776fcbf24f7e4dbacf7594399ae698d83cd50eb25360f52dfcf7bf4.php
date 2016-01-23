<?php

/* :modulesUsed:navigation.html.twig */
class __TwigTemplate_a5c33e105ba1ffb8bf1be83165b1e4323959b9fe3467f15e4383bd6cd442764a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            
            <li class=\"nav-header\">Nos produits </li>
        
               ";
        // line 7
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        echo " 
            
        
            
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":modulesUsed:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
/* */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             */
/*             <li class="nav-header">Nos produits </li>*/
/*         */
/*                {% render(controller('EcommerceBundle:Categories:menu'))%} */
/*             */
/*         */
/*             */
/*         </ul>*/
/*     </div>*/
/* */
