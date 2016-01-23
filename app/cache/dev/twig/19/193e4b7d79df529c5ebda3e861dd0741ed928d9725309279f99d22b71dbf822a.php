<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_68442af5554b000dd205cafd3d77974a586ba347e016f7bfefc359b58075c86c extends Twig_Template
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
                        <h4>Vous avez perdu votre mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, un email vous seras envoyé.<br />
                            Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                            <div>
                                 ";
        // line 19
        if (array_key_exists("invalid_username", $context)) {
            // line 20
            echo "                                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                                   ";
        }
        // line 22
        echo "                                <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                 <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                            </div>
                              <div>
                          <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
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
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 26,  49 => 22,  43 => 20,  41 => 19,  36 => 17,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Mot de passe perdu</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         <h4>Vous avez perdu votre mot de passe ?</h4>*/
/*                         <em>*/
/*                             Compléter le formulaire, un email vous seras envoyé.<br />*/
/*                             Il contiendra la procèdure à suivre pour récupérer votre mot de passe.*/
/*                         </em>*/
/*                     </div>*/
/*                     */
/*                     <div class="span4 offset2">*/
/*                         <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                             <div>*/
/*                                  {% if invalid_username is defined %}*/
/*                                 <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*                                    {% endif %}*/
/*                                 <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*                                  <input type="text" id="username" name="username" required="required" />*/
/*                             </div>*/
/*                               <div>*/
/*                           <input class="btn btn-primary" type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*                           </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
