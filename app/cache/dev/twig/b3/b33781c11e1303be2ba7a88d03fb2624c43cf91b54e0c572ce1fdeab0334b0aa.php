<?php

/* EcommerceBundle:Default/produits/layout:presentation.html.twig */
class __TwigTemplate_ca0c0b9fcddf35f8061fdb8eac45653611fd9e396281ef5fde285e5bb631bd9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default/produits/layout:presentation.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
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
    public function block_titre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"container\">
\t\t<div class=\"row\">
            
\t\t\t<div class=\"span3\">
        ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default/produits/layout:presentation.html.twig", 11)->display($context);
        // line 12
        echo "\t\t";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 13
        echo "\t   </div>
\t\t\t
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span5\">
\t\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<h5>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<h4>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo "€</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 28
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()), array(), "array", true, true)) {
            // line 29
            echo "\t\t\t\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
            echo "\" method=\"get\">
\t\t\t\t\t
\t\t\t\t\t\t\t<select name=\"qte\" class=\"span1\">
\t\t\t\t\t\t\t  ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 33
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t    <button class=\"btn btn-primary\">Ajouter au panier</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t   ";
        } else {
            // line 42
            echo "                  <a href=\"";
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\" class=\"btn btn-primary\">Produit déja dans le panier</a>
\t\t\t\t  ";
        }
        // line 44
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
\t


";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/produits/layout:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  122 => 42,  113 => 35,  102 => 33,  98 => 32,  91 => 29,  89 => 28,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  64 => 18,  57 => 13,  54 => 12,  52 => 11,  46 => 7,  43 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block titre %}{{ produit.nom }}{% endblock %}*/
/* {% block description%}{{ produit.description }} {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="container">*/
/* 		<div class="row">*/
/*             */
/* 			<div class="span3">*/
/*         {% include '::modulesUsed/navigation.html.twig' %}*/
/* 		{% render(controller('EcommerceBundle:Panier:menu')) %}*/
/* 	   </div>*/
/* 			*/
/* 			<div class="span9">*/
/* 				<div class="row">*/
/* 					<div class="span5">*/
/* 						<img src="{{ produit.image.path }}" alt="DevAndClick" width="470" height="310">*/
/* 					</div>*/
/* */
/* 					<div class="span4">*/
/* 						*/
/* 						<h4>{{ produit.nom }}</h4>*/
/* 						<h5>{{ produit.categorie.nom }}</h5>*/
/* 						<p>{{ produit.description }}</p>*/
/* 						<h4>{{ produit.prix|tva(produit.tva.multiplicate) }}€</h4>*/
/* 						*/
/* 						{% if panier[produit.id] is not defined %}*/
/* 						<form action="{{path('ajouter', {'id' : produit.id } )}}" method="get">*/
/* 					*/
/* 							<select name="qte" class="span1">*/
/* 							  {% for i in 1..10 %}*/
/* 								<option value="{{ i }}">{{ i }}</option>*/
/* 						  {% endfor %}*/
/* 							</select>*/
/* */
/* 							<div>*/
/* 							    <button class="btn btn-primary">Ajouter au panier</button>*/
/* 							</div>*/
/* 						</form>*/
/* 				   {% else %}*/
/*                   <a href="{{ path('panier') }}" class="btn btn-primary">Produit déja dans le panier</a>*/
/* 				  {% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* */
/* */
/* {% endblock %}*/
