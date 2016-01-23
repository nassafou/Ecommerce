<?php

/* EcommerceBundle:Default/panier/layout:panier.html.twig */
class __TwigTemplate_602465ab0993c73a208d2c4eeeae88abe0c81cbe931c72163c1d3af071399be0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default/panier/layout:panier.html.twig", 1);
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
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 6
        $context["refTva"] = array();
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 9
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t  
\t  
  <div class=\"container\">
\t\t<div class=\"row\">
                
\t\t\t\t<div class=\"span3\">
        ";
        // line 23
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default/panier/layout:panier.html.twig", 23)->display($context);
        // line 24
        echo "\t          </div>
\t\t\t\t
\t\t\t\t<div class=\"span9\">
\t\t\t\t  
\t\t\t\t  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t  ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t  
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t  
                    <h2>Votre parnier</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
\t\t\t\t\t\t\t  ";
        // line 47
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t  <td colspan=\"4\"><center> Aucun article dans votre panier</center> </td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  ";
        }
        // line 54
        echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 58
            echo "                            <tr>
\t\t\t\t\t\t\t  <form action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\" >
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <select name=\"qte\" class=\"span1\" onchange=\"this.form.submit()\">
\t\t\t\t\t\t\t\t\t\t  ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t  <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo " >";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t\t\t\t\t\t</select>&nbsp;
                                    
                                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "€</td>
                                <td>";
            // line 71
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
\t\t\t\t\t\t\t  </form>
                            </tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 75
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 76
            echo "\t\t\t\t\t\t\t";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 77
            echo "                            ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())))));
            echo "                      
\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                        </tbody>
                    </table>
                </form>
                ";
        // line 82
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 83
            echo "                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo "€</dd>
                    
\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 88
                echo "                    <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt><dd>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo "€</dd>
\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    
                    <dt>Total:</dt>
                    <dd>";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo "€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
\t\t  ";
        }
        // line 97
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/panier/layout:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 97,  222 => 95,  216 => 92,  212 => 90,  201 => 88,  197 => 87,  192 => 85,  188 => 83,  186 => 82,  181 => 79,  172 => 77,  169 => 76,  167 => 75,  160 => 71,  156 => 70,  151 => 68,  147 => 66,  132 => 64,  128 => 63,  122 => 60,  118 => 59,  115 => 58,  111 => 57,  106 => 54,  98 => 48,  96 => 47,  81 => 34,  71 => 30,  68 => 29,  64 => 28,  58 => 24,  56 => 23,  48 => 17,  45 => 16,  41 => 1,  35 => 9,  31 => 7,  29 => 6,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% set totalHT = 0 %}*/
/* {% set totalTTC = 0 %}*/
/* */
/* {% set refTva = {} %}*/
/* {% for produit in produits %}*/
/* 	  */
/* 	  {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur): 0 })  %}*/
/* 	  */
/* 	  */
/* {% endfor %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* 	  */
/* 	  */
/*   <div class="container">*/
/* 		<div class="row">*/
/*                 */
/* 				<div class="span3">*/
/*         {% include '::modulesUsed/navigation.html.twig' %}*/
/* 	          </div>*/
/* 				*/
/* 				<div class="span9">*/
/* 				  */
/* 				  {% for  flashMessage in app.session.flashbag.get('success') %}*/
/* 						<div class="alert alert-success">*/
/* 							  {{ flashMessage }}*/
/* 						</div>*/
/* 				  */
/* 			{% endfor %}*/
/* 				  */
/*                     <h2>Votre parnier</h2>*/
/*                     <form>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Références</th>*/
/*                                 <th>Quantité</th>*/
/*                                 <th>Prix unitaire</th>*/
/*                                 <th>Total HT</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/* 							  {% if produits|length == 0 %}*/
/* 									*/
/* 									<tr>*/
/* 										  <td colspan="4"><center> Aucun article dans votre panier</center> </td>*/
/* 									</tr>*/
/* 									*/
/* 							  {% endif %}*/
/* 							  */
/* 							  */
/* 							  */
/* 							  {% for produit in produits %}*/
/*                             <tr>*/
/* 							  <form action="{{ path('ajouter', {'id' : produit.id  }) }}" method="get" >*/
/*                                 <td>{{ produit.nom }}</td>*/
/*                                 <td>*/
/*                                     <select name="qte" class="span1" onchange="this.form.submit()">*/
/* 										  {% for i in 1..10 %}*/
/* 										  <option value="{{ i }}" {% if i == panier[produit.id] %} selected="selected" {% endif %} >{{ i }}</option>*/
/* 									      {% endfor %}*/
/* 									</select>&nbsp;*/
/*                                     */
/*                                     <a href="{{ path('supprimer', { 'id' : produit.id }) }}"><i class="icon-trash"></i></a>*/
/*                                 </td>*/
/*                                 <td>{{ produit.prix }}€</td>*/
/*                                 <td>{{ produit.prix * panier[produit.id ] }} €</td>*/
/* 							  </form>*/
/*                             </tr>*/
/* 							*/
/* 							{% set totalHT  = totalHT + (produit.prix * panier[produit.id]) %}*/
/* 							{% set totalTTC = totalTTC + (produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}*/
/*                             {%  set refTva = refTva|merge({('%' ~ produit.tva.valeur ) : refTva['%' ~ produit.tva.valeur] + (produit.prix * panier[produit.id])| montantTva(produit.tva.multiplicate)}) %}                      */
/* 					  {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/*                 {% if produits|length != 0 %}*/
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>{{ totalHT }}€</dd>*/
/*                     */
/* 					{% for key,	tva in refTva  %}*/
/*                     <dt>TVA {{ key }} :</dt><dd>{{ tva }}€</dd>*/
/* 			  {% endfor %}*/
/*     */
/*                     <dt>Total:</dt>*/
/*                     <dd>{{ totalTTC }}€</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="{{ path('livraison') }}" class="btn btn-success pull-right">Valider mon panier</a>*/
/* 		  {% endif %}*/
/*                 <a href="{{ path('produits')}}" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* 		*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
