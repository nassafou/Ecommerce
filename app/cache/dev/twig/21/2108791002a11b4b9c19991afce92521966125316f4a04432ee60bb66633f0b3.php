<?php

/* EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig */
class __TwigTemplate_5019074d606c1a445073f167d9514595b8bc4bd56a25c6cf4f9ee934d1e2274e extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "
     
     <button type=\"submit\" class=\"btn\">Rechercher</button>
     ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
 </form>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/recherche/modulesUsed:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  25 => 3,  19 => 1,);
    }
}
/* <form action="{{ path('rechercheProduits') }}" method="POST" class="navbar-form form-search pull-right">*/
/*     */
/*     {{ form_widget(form.recherche )}}*/
/*      */
/*      <button type="submit" class="btn">Rechercher</button>*/
/*      {{ form_widget(form) }}*/
/*  </form>*/
