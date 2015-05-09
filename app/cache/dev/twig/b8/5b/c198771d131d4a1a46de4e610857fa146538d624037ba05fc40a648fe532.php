<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_b85bc198771d131d4a1a46de4e610857fa146538d624037ba05fc40a648fe532 extends Twig_Template
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
        // line 2
        $context["totalHT"] = 0;
        // line 3
        $context["totalTTC"] = 0;
        // line 4
        $context["refTva"] = array();
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 6
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 14
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 15
        echo "            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 16
        echo "        </div>
        
        <div class=\"span9\">
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "                <div class=\"alert alert-success\">
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
            <h2>shopping cart</h2>
           <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>References</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total HT</th>
                        </tr>
                    </thead>
                    <tbody>

                    ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 38
            echo "                        <tr>
                            <td colspan=\"4\"><center>No items in your cart</center></td>
                        </tr>
                    ";
        }
        // line 42
        echo "
                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 44
            echo "                        <tr>
                            <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                        ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                    </select>&nbsp;
                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " R</td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " R</td>
                            </form>
                        </tr>
                        ";
            // line 59
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 60
            echo "                        ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 61
            echo "                        ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())))));
            // line 62
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </tbody>
                </table>
            ";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 67
            echo "                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total :</dt><dd>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " R</dd>

                    ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 71
                echo "                        <dt>Vat ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt><dd>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo " R</dd>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
                    <dt>Excl Vat :</dt><dd>";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " R</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">checkout</a>
            ";
        }
        // line 79
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continue shopping</a>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 79,  221 => 77,  215 => 74,  212 => 73,  201 => 71,  197 => 70,  192 => 68,  189 => 67,  187 => 66,  183 => 64,  176 => 62,  173 => 61,  170 => 60,  168 => 59,  162 => 56,  158 => 55,  153 => 53,  150 => 52,  135 => 50,  131 => 49,  125 => 46,  121 => 45,  118 => 44,  114 => 43,  111 => 42,  105 => 38,  103 => 37,  88 => 24,  79 => 21,  76 => 20,  72 => 19,  67 => 16,  64 => 15,  62 => 14,  56 => 10,  53 => 9,  49 => 1,  43 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 2,  11 => 1,);
    }
}
