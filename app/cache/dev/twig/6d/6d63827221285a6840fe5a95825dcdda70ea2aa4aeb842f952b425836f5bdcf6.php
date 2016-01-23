<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_cc4828915e87b4b13d19fc3319bf7fc440c722482f205024ba0f8454c6c282c1 extends Twig_Template
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
        // line 2
        echo "


<div class=\"row\">
        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Inscription</h4>
                        <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                         ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <div>
                             <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 23,  45 => 21,  39 => 20,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Connexion</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         <h4>Pas encore inscrit ?</h4>*/
/*                         <em>*/
/*                             nous vous invitons à vous inscrire<br />*/
/*                             afin de passer votre commande et de manger équilibré.*/
/*                         </em>*/
/*                     </div>*/
/*                     */
/*                     <div class="span4 offset2">*/
/*                         <h4>Inscription</h4>*/
/*                         <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*                          {{ form_widget(form) }}*/
/*                             <div>*/
/*                              <input class="btn btn-primary" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
