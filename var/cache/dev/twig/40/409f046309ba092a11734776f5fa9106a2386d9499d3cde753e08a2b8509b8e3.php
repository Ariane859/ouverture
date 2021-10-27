<?php

/* piece/show.html.twig */
class __TwigTemplate_1673d0326788c2e002e618c954b7e540b4518b3a89e265ae5b02890dc6f2e5fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <style>
        body
        {
            font-family: Georgia, 'Times New Roman', Times, serif;
            /*margin-top:30px;*/
        }
     ";
        // line 18
        echo "    h1
    {
        color:teal;
        font-weight:bold;
        }
    </style>
    <h1>Piece n° : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "id", array()), "html", null, true);
        echo "</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Type Pièce:</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "typePiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>N° Pièce:</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "refPiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expire le:</th>
                <td>";
        // line 37
        if ($this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datexpiration", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datexpiration", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Déclaré le:</th>
                <td>";
        // line 41
        if ($this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datdeclaration", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datdeclaration", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Délivré(e) le:</th>
                <td>";
        // line 45
        if ($this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datedelivrance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datedelivrance", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Emetteur:</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "emetteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu:</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "paysEmission", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Nom:</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "physique", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Fichier:</th>
                <td><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "fichier", array()))), "html", null, true);
        echo "\" style=\"color:skyblue\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "fichier", array()), "html", null, true);
        echo "</a></td>
            </tr>
        </tbody>
    </table>
        ";
        // line 70
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "piece/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 70,  135 => 61,  128 => 57,  121 => 53,  114 => 49,  105 => 45,  96 => 41,  87 => 37,  80 => 33,  73 => 29,  65 => 24,  57 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <style>
        body
        {
            font-family: Georgia, 'Times New Roman', Times, serif;
            /*margin-top:30px;*/
        }
     {# .formulaire 
    {
        color: black;
        margin-top:5%;
        margin-left:11%;
        width:80%;
        border:solid white 1px;
    } #}
    h1
    {
        color:teal;
        font-weight:bold;
        }
    </style>
    <h1>Piece n° : {{ piece.id }}</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Type Pièce:</th>
                <td>{{ piece.typePiece }}</td>
            </tr>
            <tr>
                <th>N° Pièce:</th>
                <td>{{ piece.refPiece }}</td>
            </tr>
            <tr>
                <th>Expire le:</th>
                <td>{% if piece.datexpiration %}{{ piece.datexpiration|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Déclaré le:</th>
                <td>{% if piece.datdeclaration %}{{ piece.datdeclaration|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Délivré(e) le:</th>
                <td>{% if piece.datedelivrance %}{{ piece.datedelivrance|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Emetteur:</th>
                <td>{{ piece.emetteur }}</td>
            </tr>
            <tr>
                <th>Lieu:</th>
                <td>{{ piece.paysEmission }}</td>
            </tr>
             <tr>
                <th>Nom:</th>
                <td>{{ piece.physique }}</td>
            </tr>
             <tr>
                <th>Fichier:</th>
                <td><a href=\"{{ asset('uploads/brochures/' ~ piece.fichier) }}\" style=\"color:skyblue\">{{ piece.fichier }}</a></td>
            </tr>
        </tbody>
    </table>
        {# <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li> #}

{% endblock %}
", "piece/show.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\piece\\show.html.twig");
    }
}
