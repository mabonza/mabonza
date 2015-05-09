<?php

/* PagesBundle:Administration:pages/layout/new.html.twig */
class __TwigTemplate_aa2c29a09dc45cebfa6be2736f035bcb8c01e2a66642be1f07d10b796a7f3295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout/layoutAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Pages creation</h2>
<div class=\"span9\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
    <br />
<div class=\"span12\">
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">
                Return
            </a>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Administration:pages/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
