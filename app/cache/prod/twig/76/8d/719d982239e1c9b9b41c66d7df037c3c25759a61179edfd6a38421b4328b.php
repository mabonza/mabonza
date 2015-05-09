<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_768d719d982239e1c9b9b41c66d7df037c3c25759a61179edfd6a38421b4328b extends Twig_Template
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
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\">Products</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("adminCategories");
        echo "\">Product Categories</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("adminUtilisateurs");
        echo "\">Customers</a>
            </li>
            <li>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("adminCommande");
        echo "\">Orders</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">Pages</a>
            </li>
        </ul>
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  49 => 20,  43 => 17,  32 => 9,  26 => 6,  19 => 1,);
    }
}
