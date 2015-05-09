<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_b32a580a47c5fe2f6725f1109c4367b3559e12fd61ce8cd88872de25c1898567 extends Twig_Template
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
    <li class=\"nav-header\">User Info</li>
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">My Information</a>
        </li>
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit My information</a>
        </li>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change My Password</a>
        </li>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("factures");
        echo "\">My Invoices</a>
        </li>

        <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  43 => 14,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }
}
