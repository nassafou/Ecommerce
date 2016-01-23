<?php

/* EcommerceBundle:Default/panier/modulesUsed:panier.html.twig */
class __TwigTemplate_c726e09bba555531bf2b57e228c07c4b8075d544da5be5487933b216f5ce67d3 extends Twig_Template
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
        echo "<div class=\"well\">
        <ul class=\"nav nav-list\">
            
             <li class=\"nav-header\">Panier</li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">
            ";
        // line 6
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 0)) {
            // line 7
            echo "                Aucun article dans le panier
            ";
        } elseif ((        // line 8
(isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 1)) {
            // line 9
            echo "                1 article dans votre panier
            ";
        } else {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " articles  dans votre panier
                
            ";
        }
        // line 14
        echo "                
            
        </a>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/panier/modulesUsed:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  40 => 11,  36 => 9,  34 => 8,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             */
/*              <li class="nav-header">Panier</li>*/
/*         <a href="{{ path('panier') }}">*/
/*             {% if articles == 0 %}*/
/*                 Aucun article dans le panier*/
/*             {% elseif articles == 1 %}*/
/*                 1 article dans votre panier*/
/*             {% else  %}*/
/*                 {{ articles }} articles  dans votre panier*/
/*                 */
/*             {% endif %}*/
/*                 */
/*             */
/*         </a>*/
/*         </ul>*/
/*     </div>*/
/* */
