<?php

/* EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig */
class __TwigTemplate_951f414ee7aacd5e886d27b649a4a110dd21d676c557d714fbb06a90ca14b41a extends Twig_Template
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
        echo "Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "username", array()), "html", null, true);
        echo "
<br/>
Your order is validated.
You can access your invoice your client area.
<br /> <br />
The team Mabonzanet Thank You for your order.
<br />
Sincerely.";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
