<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a7ea5dd096525b08c8590b70fcfabf1aca12be6a8a86dfab324d29ab2c0c6b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Not yet Register ?</h4>
                        <em>
                            we invite you to sign up<br />
                            to place your order and eat balanced.
                        </em>
                        <br /><br />
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">Register</a>

                    </div>

                    <div class=\"span4 offset2\">
                        <h4>Connexion</h4>
                        <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                            <label for=\"username\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

                            <label for=\"password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            <br/>
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>
                    </div>
                    <div class=\"span10\">
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Lost your Password ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  95 => 37,  89 => 34,  84 => 32,  80 => 31,  75 => 29,  71 => 28,  62 => 22,  47 => 9,  41 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }
}
