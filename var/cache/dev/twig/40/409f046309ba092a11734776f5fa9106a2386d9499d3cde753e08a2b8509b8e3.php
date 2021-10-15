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
        echo "    <h1>Piece</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typepiece</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "typePiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Refpiece</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "refPiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datexpiration</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datexpiration", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datexpiration", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datdeclaration</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datdeclaration", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datdeclaration", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datedelivrance</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datedelivrance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "datedelivrance", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Emetteur</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "emetteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Paysemission</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "paysEmission", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_edit", array("id" => $this->getAttribute(($context["piece"] ?? $this->getContext($context, "piece")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
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
        return array (  139 => 53,  134 => 51,  128 => 48,  122 => 45,  112 => 38,  105 => 34,  96 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Piece</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ piece.id }}</td>
            </tr>
            <tr>
                <th>Typepiece</th>
                <td>{{ piece.typePiece }}</td>
            </tr>
            <tr>
                <th>Refpiece</th>
                <td>{{ piece.refPiece }}</td>
            </tr>
            <tr>
                <th>Datexpiration</th>
                <td>{% if piece.datexpiration %}{{ piece.datexpiration|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datdeclaration</th>
                <td>{% if piece.datdeclaration %}{{ piece.datdeclaration|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datedelivrance</th>
                <td>{% if piece.datedelivrance %}{{ piece.datedelivrance|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Emetteur</th>
                <td>{{ piece.emetteur }}</td>
            </tr>
            <tr>
                <th>Paysemission</th>
                <td>{{ piece.paysEmission }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('piece_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('piece_edit', { 'id': piece.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "piece/show.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\piece\\show.html.twig");
    }
}
