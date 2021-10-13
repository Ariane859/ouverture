<?php

/* physique/show.html.twig */
class __TwigTemplate_cf65c4f2c52322e934ef48c36808deffdd810bfeca2a395caf0a04093e758dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "physique/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/show.html.twig"));

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
        echo "<style>
        body
            {
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            table{
                margin-top:2%;
            }
        .sidebar
            {
                background-color: teal;
                width: 100%;
                top: 0;
                left: 0;
                padding:1%;
                position:absolute;
            }
        a
            {
                color: white;
                text-decoration: none;
            }
        a:hover
        {
            color:white;
            text-decoration:none;
        }
        .accueil
        {
            color:white;
            font-size:1.7rem;
        }
        #ouvrir
        {
            border:solid blue 0px;
            margin-left:80%;
            font-size:1.2rem;
        }
        #index
        {
            color: white;
            margin-left:94%;
        }
        .index:hover{
            color:black;
        }
        #liste{
            color:white;
            margin-top:10%;
            margin-left:85%;
        }
        #supprimer
        {
            margin-left:92%;
        }
        #modifier{
            margin-top:6%;
            color:white;
            margin-left:93%; 
        }
        .fiche
        {
            border:solid rgb(198, 228, 238) 0.5px;
            width:50%;
            margin-left:7%;
        }
        .row{ margin-left:5%;}
</style>
    ";
        // line 72
        $this->displayBlock('sidebar', $context, $blocks);
        // line 79
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 80
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 2)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
<div class=\"\">
        <p><strong>Sigle:</strong>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "sigle", array()), "html", null, true);
            echo "</p>
    </div>
    ";
            // line 120
            echo "        ";
        } else {
            // line 121
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 1)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
    ";
            // line 167
            echo "    <div class=\"fiche\">
    <div class=\"row\">
        <div class=\"col-md-4\"><p><strong>Nom:</strong>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</p></div>
        <div class=\"col-md-4\"><p><strong>Prénom:</strong>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</p></div>
    </div>
    </div>
    ";
        }
        // line 174
        echo "    <a href=\"\" class=\"btn btn-primary\" id=\"pièces\">Pièces jointes<a>
        ";
        // line 175
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
        ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 73
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "physique/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 75,  190 => 74,  187 => 73,  178 => 72,  166 => 177,  161 => 175,  158 => 174,  151 => 170,  147 => 169,  143 => 167,  138 => 121,  135 => 120,  130 => 82,  124 => 80,  122 => 79,  120 => 72,  50 => 4,  41 => 3,  11 => 1,);
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
            }
            table{
                margin-top:2%;
            }
        .sidebar
            {
                background-color: teal;
                width: 100%;
                top: 0;
                left: 0;
                padding:1%;
                position:absolute;
            }
        a
            {
                color: white;
                text-decoration: none;
            }
        a:hover
        {
            color:white;
            text-decoration:none;
        }
        .accueil
        {
            color:white;
            font-size:1.7rem;
        }
        #ouvrir
        {
            border:solid blue 0px;
            margin-left:80%;
            font-size:1.2rem;
        }
        #index
        {
            color: white;
            margin-left:94%;
        }
        .index:hover{
            color:black;
        }
        #liste{
            color:white;
            margin-top:10%;
            margin-left:85%;
        }
        #supprimer
        {
            margin-left:92%;
        }
        #modifier{
            margin-top:6%;
            color:white;
            margin-left:93%; 
        }
        .fiche
        {
            border:solid rgb(198, 228, 238) 0.5px;
            width:50%;
            margin-left:7%;
        }
        .row{ margin-left:5%;}
</style>
    {% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
        <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
{% endblock %}
{# <a href=\"{{ path('physique_index') }}\" class=\"btn btn-primary\" id=\"liste\">Retourner à la liste</a> #}
{% if physique.nom is null %}
<a href=\"{{ path('physique_edit', { 'id': physique.id ,'slug':2})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
<div class=\"\">
        <p><strong>Sigle:</strong>{{ physique.sigle }}</p>
    </div>
    {# <table class=\"table table-hover table-sm\">
        <tbody>
             <tr>
                <th>Id:</th>
                <td>{{ physique.id }}</td>
            </tr>
             <tr>
                <th>Sigle:</th>
                <td>{{ physique.sigle }}</td>
            </tr>
            <tr>
                <th>Raison sociale:</th>
                <td>{{ physique.raisonSociale }}</td>
            </tr>
            <tr>
                <th>Date de naissance:</th>
                <td>{% if physique.datnais %}{{ physique.datnais|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Telephone:</th>
                <td>{{ physique.telephone }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ physique.email }}</td>
            </tr>
            <tr>
                <th>Pays:</th>
                <td>{{ physique.pays }}</td>
            </tr>
            <tr>
                <th>Ville:</th>
                <td>{{ physique.ville }}</td>
            </tr>
            </tbody>
    </table> #}
        {% else %}
        <a href=\"{{ path('physique_edit', { 'id': physique.id ,'slug':1})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
    {# <table class=\"table table-hover table-sm\">
        <tbody>
             <tr>
                <th>Id:</th>
                <td>{{ physique.id }}</td>
            </tr>
             <tr>
                <th>Nom:</th>
                <td>{{ physique.nom }}</td>
            </tr>
            <tr>
                <th>Prénom:</th>
                <td>{{ physique.prenom }}</td>
            </tr>
             <tr>
                <th>Date de naissance:</th>
                <td>{% if physique.datnais %}{{ physique.datnais|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Telephone:</th>
                <td>{{ physique.telephone }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ physique.email }}</td>
            </tr>
            <tr>
                <th>Pays:</th>
                <td>{{ physique.pays }}</td>
            </tr>
            <tr>
                <th>Ville:</th>
                <td>{{ physique.ville }}</td>
            </tr>
            <tr>
                <th>Tuteur:</th>
                <td>{{ physique.tuteur }}</td>
            </tr>
            <tr>
                <th>Prénom du tuteur</th>
                <td>{{ physique.prenomTuteur }}</td>
            </tr>
        
        </tbody>
    </table> #}
    <div class=\"fiche\">
    <div class=\"row\">
        <div class=\"col-md-4\"><p><strong>Nom:</strong>{{ physique.nom }}</p></div>
        <div class=\"col-md-4\"><p><strong>Prénom:</strong>{{ physique.prenom }}</p></div>
    </div>
    </div>
    {% endif %}
    <a href=\"\" class=\"btn btn-primary\" id=\"pièces\">Pièces jointes<a>
        {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
{% endblock %}
", "physique/show.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\show.html.twig");
    }
}
