<?php

/* UtilisateursBundle:Default:layout/facture.html.twig */
class __TwigTemplate_35380fe27e2f29a69a4c20b3cb69830bd0c2badc31b1b751e8da5f8650e53eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");
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
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 8
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 9
        echo "                ";
        $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig")->display($context);
        // line 10
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 11
        echo "            </div>
            <div class=\"span9\">

                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "                    <div class=\"alert alert-errors\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                <h2>Cart and Checkout</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>Reference</th>
                            <th>Date</th>
                            <th>Price TTC</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 38
            echo "                            <tr>
                                <td colspan=\"4\"><center>No bills currently.</center></td>
                            </tr>
                        ";
        }
        // line 42
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 43
            echo "                            <tr>
                                <td>Ref : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " R</td>
                                <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturesPDF", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-refresh\"></i></a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  119 => 43,  114 => 42,  108 => 38,  106 => 37,  91 => 24,  82 => 21,  79 => 20,  74 => 19,  65 => 16,  62 => 15,  58 => 14,  53 => 11,  50 => 10,  47 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
