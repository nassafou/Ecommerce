<?php

/* EcommerceBundle:Default/produits/layout:produits.html.twig */
class __TwigTemplate_0a861d4b06b2b2b5180dfe26f8032dd2a713cf8fac135be4bece3a1da9f5a3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "   <div class=\"container\">
\t
    <div class=\"row\">
\t 
       <div class=\"span3\">
        ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 11)->display($context);
        // line 12
        echo "\t\t";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 13
            echo "\t\t";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurConnecte.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 13)->display($context);
            // line 14
            echo "\t    ";
        } else {
            // line 15
            echo "\t\t";
            $this->loadTemplate("::modulesUsed/utilisateur.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 15)->display($context);
            // line 16
            echo "\t   ";
        }
        // line 17
        echo "\t   ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 18
        echo "\t\t
\t   </div>
\t\t
        <div class=\"span9\">
          ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 23
            echo "            <ul class=\"thumbnails\">
               ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 25
                echo "                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                            <p>";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo "€</p>
                            <a class=\"btn btn-primary\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
\t\t\t\t\t\t\t";
                // line 32
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 33
                    echo "                            <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
\t\t\t\t\t\t   ";
                }
                // line 35
                echo "                        </div>
                    </div>
                </li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </ul>

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>
          ";
        } else {
            // line 53
            echo "\t\t     Aucun produit 
\t\t  ";
        }
        // line 55
        echo "        </div>
    </div>
</div>
\t


";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/produits/layout:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 55,  127 => 53,  111 => 39,  102 => 35,  96 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  77 => 27,  73 => 25,  69 => 24,  66 => 23,  64 => 22,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  46 => 14,  43 => 13,  40 => 12,  38 => 11,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*    <div class="container">*/
/* 	*/
/*     <div class="row">*/
/* 	 */
/*        <div class="span3">*/
/*         {% include "::modulesUsed/navigation.html.twig" %}*/
/* 		{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 		{% include 'UtilisateursBundle:Default:modulesUsed/utilisateurConnecte.html.twig'%}*/
/* 	    {% else %}*/
/* 		{% include "::modulesUsed/utilisateur.html.twig"%}*/
/* 	   {% endif %}*/
/* 	   {% render(controller('EcommerceBundle:Panier:menu')) %}*/
/* 		*/
/* 	   </div>*/
/* 		*/
/*         <div class="span9">*/
/*           {% if produits|length != 0 %}*/
/*             <ul class="thumbnails">*/
/*                {% for produit in produits %}*/
/*                 <li class="span3">*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ produit.image.path  }}" alt="DevAndClick" width="300" height="300">*/
/*                         <div class="caption">*/
/*                             <h4>{{ produit.nom }}</h4>*/
/*                             <p>{{ produit.prix|tva(produit.tva.multiplicate) }}€</p>*/
/*                             <a class="btn btn-primary" href="{{ path('presentation', {'id' : produit.id } ) }}">Plus d'infos</a>*/
/* 							{% if panier[produit.id] is not defined %}*/
/*                             <a class="btn btn-success" href="{{ path('ajouter', {'id' : produit.id }) }}">Ajouter au panier</a>*/
/* 						   {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/* 			{% endfor %}*/
/*             </ul>*/
/* */
/*             <div class="pagination">*/
/*                 <ul>*/
/*                     <li class="disabled"><span>Précédent</span></li>*/
/*                     <li class="disabled"><span>1</span></li>*/
/*                     <li><a href="#">2</a></li>*/
/*                     <li><a href="#">3</a></li>*/
/*                     <li><a href="#">4</a></li>*/
/*                     <li><a href="#">5</a></li>*/
/*                     <li><a href="#">Suivant</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*           {% else %}*/
/* 		     Aucun produit */
/* 		  {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* 	*/
/* */
/* */
/* {% endblock %}*/
