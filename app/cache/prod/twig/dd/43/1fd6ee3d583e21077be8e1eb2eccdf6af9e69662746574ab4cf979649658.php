<?php

/* UtilisateursBundle:Default:layout/facturePDF.html.twig */
class __TwigTemplate_dd431fd6ee3d583e21077be8e1eb2eccdf6af9e69662746574ab4cf979649658 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Invoice</title>
    <link href=\"./css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<h1>MabonZanet</h1>
<table id=\"enTete\">
    <tr>
        <td colspan=\"1\"></td>
        <td colspan=\"1\"><h1>Invoice</h1></td>
        <td colspan=\"1\"></td>
    </tr>
    <tr>
        <td width=\"80\">Page</td>
        <td width=\"100\">Date</td>
        <td width=\"120\">Reference</td>
    </tr>
    <tr>
        <td class=\"color\">[[page_nb]]</td>
        <td class=\"color\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
        <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "reference", array()), "html", null, true);
        echo "</td>
    </tr>
</table>
<ul id=\"coordonnes\">
    <li>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
    <li>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
    <li>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</li>
</ul>
<table id=\"entity\">
    <tr>
        <td width=\"280\">DESIGNATION</td>
        <td width=\"105\">QUANTITY</td>
        <td width=\"100\">P.U - HT</td>
        <td width=\"105\">AMOUNT HT</td>
        <td width=\"105\">AMOUNT VAT EXCL</td>
    </tr>
    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 41
            echo "        <tr>
            <td class=\"color\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
            <td class=\"color\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
            <td class=\"color\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " R</td>
            <td class=\"color\">";
            // line 45
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " R</td>
            <td class=\"color\">";
            // line 46
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixTTC", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " R</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</table>
<table id=\"total\">
    <tr>
        <td width=\"110\">TOTAL HT :</td>
        <td width=\"100\" class=\"color\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "prixHT", array()), "html", null, true);
        echo " R</td>
    </tr>
    ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 56
            echo "        <tr>
            <td width=\"110\">VAT <span class=\"color min\">";
            // line 57
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</span> :</td>
            <td width=\"100\" class=\"color\">";
            // line 58
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " R</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    <tr>
        <td width=\"110\">TOT Vat Excl :</td>
        <td width=\"100\" class=\"color\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " R</td>
    </tr>
</table>
<div id=\"footer\">
    <span class=\"color strong\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : null), "html", null, true);
        echo "</span>
    <br />
    ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : null), "html", null, true);
        echo "
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  155 => 67,  148 => 63,  144 => 61,  135 => 58,  131 => 57,  128 => 56,  124 => 55,  119 => 53,  113 => 49,  104 => 46,  100 => 45,  96 => 44,  92 => 43,  88 => 42,  85 => 41,  81 => 40,  64 => 30,  60 => 29,  54 => 28,  47 => 24,  43 => 23,  19 => 1,);
    }
}
