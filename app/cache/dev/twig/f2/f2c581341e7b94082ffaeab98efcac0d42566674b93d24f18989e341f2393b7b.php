<?php

/* EcommerceBundle:Default:test.html.twig */
class __TwigTemplate_0c6969760450722ad34b55d3c04c2eb74ae890c7036648f8f57cbe0d371bfcca extends Twig_Template
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
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 3
            echo " 
 <section>
  
  <ul>
    <li> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</li>
\t<li> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "</li>
\t<li> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "disponible", array()), "html", null, true);
            echo "</li>
\t<li> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorie", array()), "html", null, true);
            echo "</li>
\t<li> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</li>
\t<li> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "tva", array()), "html", null, true);
            echo "</li>
\t<li> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", array()), "html", null, true);
            echo "</li>
   
   
  </ul>
  
  
 </section>
 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% for produit in produits %}*/
/*  */
/*  <section>*/
/*   */
/*   <ul>*/
/*     <li> {{ produit.nom }}</li>*/
/* 	<li> {{ produit.description }}</li>*/
/* 	<li> {{ produit.disponible }}</li>*/
/* 	<li> {{ produit.categorie }}</li>*/
/* 	<li> {{ produit.prix }}</li>*/
/* 	<li> {{ produit.tva }}</li>*/
/* 	<li> {{ produit.image }}</li>*/
/*    */
/*    */
/*   </ul>*/
/*   */
/*   */
/*  </section>*/
/*  */
/*  {% endfor%}*/
