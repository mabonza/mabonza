<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_2b1bf62122b265dde42c3ae2672a470eb9839419ea2e0a2f96130678f9043c28 extends Twig_Template
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
        // line 6
        $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig")->display($context);
        // line 7
        echo "    </div>

    <div class=\"span9\">
        <h2>My information</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <h4>Edit My Information</h4>
                    <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                       <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
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
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  44 => 17,  38 => 16,  27 => 7,  25 => 6,  19 => 2,);
    }
}
