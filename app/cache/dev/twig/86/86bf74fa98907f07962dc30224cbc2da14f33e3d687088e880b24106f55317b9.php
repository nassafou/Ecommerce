<?php

/* EcommerceBundle:Default/recherche/layout:categorieProduits.html.twig */
class __TwigTemplate_54cd12c4a9caa6fac80bc141e612c7a1610cd6f9e25301b3f93663b8dc5f37f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default/recherche/layout:categorieProduits.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "   <div class=\"container\">
\t
    <div class=\"row\">
\t 
       <div class=\"span3\">
        ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default/recherche/layout:categorieProduits.html.twig", 9)->display($context);
        // line 10
        echo "\t\t";
        $this->loadTemplate("::modulesUsed/utilisateur.html.twig", "EcommerceBundle:Default/recherche/layout:categorieProduits.html.twig", 10)->display($context);
        // line 11
        echo "\t   </div>
\t\t
        <div class=\"span9\">

            <ul class=\"thumbnails\">
               ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 17
            echo "                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h4>
                            <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</p>
                            <a class=\"btn btn-primary\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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

        </div>
    </div>
</div>
\t


";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/recherche/layout:categorieProduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  75 => 24,  71 => 23,  67 => 22,  63 => 21,  58 => 19,  54 => 17,  50 => 16,  43 => 11,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*    <div class="container">*/
/* 	*/
/*     <div class="row">*/
/* 	 */
/*        <div class="span3">*/
/*         {% include "::modulesUsed/navigation.html.twig" %}*/
/* 		{% include "::modulesUsed/utilisateur.html.twig"%}*/
/* 	   </div>*/
/* 		*/
/*         <div class="span9">*/
/* */
/*             <ul class="thumbnails">*/
/*                {% for produit in produits %}*/
/*                 <li class="span3">*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ produit.image.path }}" alt="DevAndClick" width="300" height="300">*/
/*                         <div class="caption">*/
/*                             <h4>{{ produit.nom }}</h4>*/
/*                             <p>{{ produit.prix }} €</p>*/
/*                             <a class="btn btn-primary" href="{{ path('presentation', { 'id' : produit.id }) }}">Plus d'infos</a>*/
/*                             <a class="btn btn-success" href="{{ path('panier') }}">Ajouter au panier</a>*/
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
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* 	*/
/* */
/* */
/* {% endblock %}*/
