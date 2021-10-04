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
            margin-left:88%;
            margin-top:1%;
           
        }
        #supprimer
        {
            margin-left:92%;
        }
        #modifier{
            margin-top:6%;
            color:white;
            margin-left:92%;
        }
</style>
    ";
        // line 66
        $this->displayBlock('sidebar', $context, $blocks);
        // line 72
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 73
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "type" => 2)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
    <table class=\"table table-hover table-sm\">
        <tbody>
             <tr>
                <th>Id:</th>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "html", null, true);
            echo "</td>
            </tr>
             <tr>
                <th>Type de Compte:</th>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "typeCompte", array()), "html", null, true);
            echo "</td>
            </tr>
           
             <tr>
                <th>Sigle:</th>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "sigle", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Raison sociale:</th>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "raisonSociale", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Date de naissance:</th>
                <td>";
            // line 95
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            </tr>
            <tr>
                <th>Telephone:</th>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Pays:</th>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Ville:</th>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</td>
            </tr>
            </tbody>
    </table>
        ";
        } else {
            // line 116
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "type" => 1)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
    <table class=\"table table-hover table-sm\">
        <tbody>
             <tr>
                <th>Id:</th>
                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "html", null, true);
            echo "</td>
            </tr>
             <tr>
                <th>Type de Compte:</th>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "typeCompte", array()), "html", null, true);
            echo "</td>
            </tr>
             <tr>
                <th>Nom:</th>
                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Prénom:</th>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</td>
            </tr>
             <tr>
                <th>Date de naissance:</th>
                <td>";
            // line 137
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            </tr>
            <tr>
                <th>Telephone:</th>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Pays:</th>
                <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Ville:</th>
                <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Tuteur:</th>
                <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "tuteur", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Prénom du tuteur</th>
                <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenomTuteur", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 164
        echo "        </tbody>
    </table>
         ";
        // line 166
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
    ";
        // line 168
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        <a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_index");
        echo "\" class=\"btn btn-primary\" id=\"liste\">Retourner à la liste</a>
         <a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_search");
        echo "\" class=\"btn btn-primary\">Rechercher</a> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 67
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 69
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
        return array (  326 => 69,  322 => 68,  319 => 67,  310 => 66,  298 => 170,  294 => 169,  290 => 168,  285 => 166,  281 => 164,  275 => 161,  268 => 157,  261 => 153,  254 => 149,  247 => 145,  240 => 141,  231 => 137,  224 => 133,  217 => 129,  210 => 125,  203 => 121,  194 => 116,  186 => 111,  179 => 107,  172 => 103,  165 => 99,  156 => 95,  149 => 91,  142 => 87,  134 => 82,  127 => 78,  118 => 73,  116 => 72,  114 => 66,  50 => 4,  41 => 3,  11 => 1,);
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
            margin-left:88%;
            margin-top:1%;
           
        }
        #supprimer
        {
            margin-left:92%;
        }
        #modifier{
            margin-top:6%;
            color:white;
            margin-left:92%;
        }
</style>
    {% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
        <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
{% endblock %}
{% if physique.nom is null %}
<a href=\"{{ path('physique_edit', { 'id': physique.id ,'type':2})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
    <table class=\"table table-hover table-sm\">
        <tbody>
             <tr>
                <th>Id:</th>
                <td>{{ physique.id }}</td>
            </tr>
             <tr>
                <th>Type de Compte:</th>
                <td>{{ physique.typeCompte }}</td>
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
    </table>
        {% else %}
        <a href=\"{{ path('physique_edit', { 'id': physique.id ,'type':1})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
    <table class=\"table table-hover table-sm\">
        <tbody>
             <tr>
                <th>Id:</th>
                <td>{{ physique.id }}</td>
            </tr>
             <tr>
                <th>Type de Compte:</th>
                <td>{{ physique.typeCompte }}</td>
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
        {% endif %}
        </tbody>
    </table>
         {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
    {{ form_end(delete_form) }}
        <a href=\"{{ path('physique_index') }}\" class=\"btn btn-primary\" id=\"liste\">Retourner à la liste</a>
         <a href=\"{{ path('physique_search') }}\" class=\"btn btn-primary\">Rechercher</a> 
{% endblock %}
", "physique/show.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\show.html.twig");
    }
}
