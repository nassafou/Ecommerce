<?php

/* UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig */
class __TwigTemplate_cc4a61be6086dbb74cf05c58400022ef8be0af4e4be3918a3be53af928150668 extends Twig_Template
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
        echo "<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer informations</a>
            </li>
            <li>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer de mot de passe</a>
            </li>
            <li>
                <a href=\"#\">Mes factures</a>
            </li>
            <li>
                <a href=\"#\">Mes adresses</a>
            </li>
            <li>
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a>
            </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/modulesUsed:utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_profile_edit') }}">Editer informations</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_change_password') }}">Changer de mot de passe</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#">Mes factures</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#">Mes adresses</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_security_logout') }}">Deconnexion</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
