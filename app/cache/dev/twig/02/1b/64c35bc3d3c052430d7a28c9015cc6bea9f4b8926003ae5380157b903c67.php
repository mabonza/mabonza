<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_021b64c35bc3d3c052430d7a28c9015cc6bea9f4b8926003ae5380157b903c67 extends Twig_Template
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
        <li class=\"nav-header\">Our Products</li>

        ";
        // line 5
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        // line 6
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  25 => 5,  19 => 1,);
    }
}
