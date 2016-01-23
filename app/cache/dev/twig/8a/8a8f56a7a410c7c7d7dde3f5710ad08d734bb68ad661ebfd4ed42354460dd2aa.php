<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_c86f345005655109241f4ae67e73db8982f5b406628025eaf5698f24d7f96571 extends Twig_Template
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
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Récupération du mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                            Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
                                                           ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                                               <div>
                                      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
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
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 21,  43 => 19,  37 => 18,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Mot de passe perdu</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         <h4>Récupération du mot de passe ?</h4>*/
/*                         <em>*/
/*                             Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />*/
/*                             Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.*/
/*                         </em>*/
/*                     </div>*/
/*                     */
/*                     <div class="span4 offset2">*/
/*                         <form action="{{ path('fos_user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_resetting_reset">*/
/*                                                            {{ form_widget(form) }}*/
/*                                                                <div>*/
/*                                       <input class="btn btn-primary" type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*                                           </div>*/
/*                               </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
