<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_e75e9fa9b48c67d06bf7bb48a333105beca37d5c2e35ef81455ebd541b1aa04a extends Twig_Template
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
        
        
        <div class=\"span3\">
        ";
        // line 8
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
        <div class=\"span9\">
            <h2>Mes informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Modifier mon mot de passe</h4>
                        <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
                                             ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                  <div>
                         <input  class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
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
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  45 => 18,  39 => 17,  29 => 9,  27 => 8,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <div class="row">*/
/*         */
/*         */
/*         <div class="span3">*/
/*         {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig'%}*/
/*         </div>*/
/*         <div class="span9">*/
/*             <h2>Mes informations</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     */
/*                     <div class="span4">*/
/*                         <h4>Modifier mon mot de passe</h4>*/
/*                         <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/*                                              {{ form_widget(form) }}*/
/*                                   <div>*/
/*                          <input  class="btn btn-primary" type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*                         </div>*/
/*                    </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
