<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_f4b1575cbcbcf336197d2d43b88a2f3a1a4205a67c3de0575453973968fc588d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motscles' => array($this, 'block_motscles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
\t\t<meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motscles', $context, $blocks);
        echo "\" />
\t\t<meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        
         <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
\t     <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
\t     <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
\t     <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">DevAndClick</a>
            <div class=\"nav-collapse collapse\">
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 30
        echo "                
            </div>
        </div>
    </div>
</div> 
        
        
        
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "        
        
        
        <hr />

\t<footer id=\"footer\" class=\"vspace20\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4 offset1\">
\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t<ul class=\"nav nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 1));
        echo "\">CGV</a>
\t\t\t\t\t\t<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 2));
        echo "\">Mentions légales</a>
\t\t\t\t\t</ul>
\t\t\t\t</div> 

\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<h4>Notre entrepôt</h4>
\t\t\t\t\t<p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<h4>Nous contacter</h4>
\t\t\t\t\t<p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><i class=\"icon-print\"></i>&nbsp;Fax:  ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo " </p>
\t\t\t\t</div> 
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<p>&copy; Copyright ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - DevAndClick</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>\t
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "Site Estore!";
    }

    // line 6
    public function block_motscles($context, array $blocks = array())
    {
        echo " ";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo " ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 76,  192 => 38,  187 => 14,  181 => 7,  175 => 6,  169 => 5,  163 => 77,  161 => 76,  157 => 75,  153 => 74,  145 => 69,  136 => 63,  132 => 62,  124 => 57,  115 => 51,  111 => 50,  98 => 39,  96 => 38,  86 => 30,  84 => 29,  79 => 27,  63 => 15,  61 => 14,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}Site Estore!{% endblock %}</title>*/
/* 		<meta name="keywords" content="{% block motscles%} {% endblock %}" />*/
/* 		<meta name="description" content="{% block description%} {% endblock %}" />*/
/*         */
/*          <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/* 	     <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/* 	     <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/* 	     <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         */
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         */
/* <div class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="navbar-inner">*/
/*         <div class="container">*/
/*             <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="brand" href="{{ path('produits')}}">DevAndClick</a>*/
/*             <div class="nav-collapse collapse">*/
/* 				{% render(controller('EcommerceBundle:Produits:recherche')) %}*/
/*                 */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div> */
/*         */
/*         */
/*         */
/*         {% block body %}{% endblock %}*/
/*         */
/*         */
/*         */
/*         <hr />*/
/* */
/* 	<footer id="footer" class="vspace20">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="span4 offset1">*/
/* 					<h4>Informations</h4>*/
/* 					<ul class="nav nav-stacked">*/
/* 						<li><a href="{{ path('page', { 'id': 1 }) }}">CGV</a>*/
/* 						<li><a href="{{ path('page', { 'id': 2 }) }}">Mentions légales</a>*/
/* 					</ul>*/
/* 				</div> */
/* */
/* 				<div class="span4">*/
/* 					<h4>Notre entrepôt</h4>*/
/* 					<p><i class="icon-map-marker"></i>&nbsp;{{ adresse }}</p>*/
/* 				</div>*/
/* */
/* 				<div class="span2">*/
/* 					<h4>Nous contacter</h4>*/
/* 					<p><i class="icon-phone"></i>&nbsp;Tel: {{ telephone }}</p>*/
/* 					<p><i class="icon-print"></i>&nbsp;Fax:  {{ fax }} </p>*/
/* 				</div> */
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="span4">*/
/* 					<p>&copy; Copyright {{ "now"| date('Y') }} - DevAndClick</p>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</footer>	*/
/* 	<script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/* 	<script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*     {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
