<?php

/* physique/index.html.twig */
class __TwigTemplate_98e4a0eb76838414367cdc69119a17da697ea8fc1112f830b61922c0ec32b675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "physique/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/index.html.twig"));

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
        .sidebar
            {
                background-color: teal;
                width: 100%;
                top: 0;
                left: 0;
                padding:1%;
            }
        #formulaire
        {
            margin-left:65%;
        }
        h1
        {
            margin-top:1%;
            margin-left:1%;
            font-weight:bold;
            font-size:2rem;
        }
        table{
                margin-top:1%;
            }

        a
            {
                color:black;
                text-decoration: none;
            }
        a:hover
        {
            color:black;
            text-decoration:none;
        }
        .accueil
        {
            color:white;
            font-size:1.7rem;
        }
         .accueil:hover
        {
            color:white;
        }
        #ouvrir
        {
            /*border:solid white 1px;*/
            margin-left:30%;
            font-size:1.2rem;
            color:white;
            padding:1%;
        }
         #ouvrir:hover
        {
            color:white;
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
            color:black;
        }
        #modifier{
            color:black;
        }
        #ajouter
        {
            margin-left:93.5%;
        }
</style>

    ";
        // line 83
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "

";
        // line 106
        echo "    <h1>Listes</h1>
    <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_new", array("type" => 1));
        echo "\" class=\"btn btn-primary\" id=\"ajouter\">Ajouter</a>";
        // line 108
        echo "    
    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Sigle</th>
                <th scope=\"col\">Raison sociale</th>
                <th scope=\"col\">Date de naissance</th>
                <th scope=\"col\">Telephone</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Pays</th>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">Tuteur</th>
                <th scope=\"col\">Prénom du tuteur</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physiques"] ?? $this->getContext($context, "physiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["physique"]) {
            // line 128
            echo "            <tr>
                <th scope=\"row\"><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "id", array()), "html", null, true);
            echo "</a></th>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "sigle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "raisonSociale", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 134
            if ($this->getAttribute($context["physique"], "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["physique"], "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "pays", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "tuteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenomTuteur", array()), "html", null, true);
            echo "</td>
                <td>
                            <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size:23px;color:blue\"></i></a>
                            <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 84
        echo "    <div class=\"sidebar\">
        <div class=\"form-row\">
            <div class=\"col-md-2\">
                <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
            </div>
            <div class=\"col-md-8\">
                <form class=\"form-inline my-2 my-lg-0\" id=\"formulaire\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" id=\"search\">
                    <button class=\"btn btn-outline-success my-6 my-sm-6\" id=\"bouton_search\">Rechercher</button>
                </form>
            </div>
            <div class=\"col-md-2\">
                <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
            </div>
        </div>
    </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        // line 151
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
        ";
        // line 154
        echo "  ";
        // line 155
        echo "    ";
        // line 158
        echo "\$(document).ready(function(){
    \$(\"#bouton_search\").click(function(ev){
        ev.preventDefault();
        alert(2);

    });
})

    ";
        // line 184
        echo "</script>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "physique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 184,  314 => 158,  312 => 155,  310 => 154,  305 => 151,  294 => 150,  277 => 96,  265 => 87,  260 => 84,  251 => 83,  239 => 147,  229 => 143,  225 => 142,  220 => 140,  216 => 139,  212 => 138,  208 => 137,  204 => 136,  200 => 135,  194 => 134,  190 => 133,  186 => 132,  182 => 131,  178 => 130,  172 => 129,  169 => 128,  165 => 127,  144 => 108,  141 => 107,  138 => 106,  134 => 103,  132 => 83,  51 => 4,  42 => 3,  11 => 1,);
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
        .sidebar
            {
                background-color: teal;
                width: 100%;
                top: 0;
                left: 0;
                padding:1%;
            }
        #formulaire
        {
            margin-left:65%;
        }
        h1
        {
            margin-top:1%;
            margin-left:1%;
            font-weight:bold;
            font-size:2rem;
        }
        table{
                margin-top:1%;
            }

        a
            {
                color:black;
                text-decoration: none;
            }
        a:hover
        {
            color:black;
            text-decoration:none;
        }
        .accueil
        {
            color:white;
            font-size:1.7rem;
        }
         .accueil:hover
        {
            color:white;
        }
        #ouvrir
        {
            /*border:solid white 1px;*/
            margin-left:30%;
            font-size:1.2rem;
            color:white;
            padding:1%;
        }
         #ouvrir:hover
        {
            color:white;
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
            color:black;
        }
        #modifier{
            color:black;
        }
        #ajouter
        {
            margin-left:93.5%;
        }
</style>

    {% block sidebar %}
    <div class=\"sidebar\">
        <div class=\"form-row\">
            <div class=\"col-md-2\">
                <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
            </div>
            <div class=\"col-md-8\">
                <form class=\"form-inline my-2 my-lg-0\" id=\"formulaire\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" id=\"search\">
                    <button class=\"btn btn-outline-success my-6 my-sm-6\" id=\"bouton_search\">Rechercher</button>
                </form>
            </div>
            <div class=\"col-md-2\">
                <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
            </div>
        </div>
    </div>


    {% endblock %}


{#<div class=\"form-row\">#}
    <h1>Listes</h1>
    <a href=\"{{ path('physique_new', {'type':1}) }}\" class=\"btn btn-primary\" id=\"ajouter\">Ajouter</a>{#</div>#}
    
    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Sigle</th>
                <th scope=\"col\">Raison sociale</th>
                <th scope=\"col\">Date de naissance</th>
                <th scope=\"col\">Telephone</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Pays</th>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">Tuteur</th>
                <th scope=\"col\">Prénom du tuteur</th>
            </tr>
        </thead>
        <tbody>
        {% for physique in physiques %}
            <tr>
                <th scope=\"row\"><a href=\"{{ path('physique_show', { 'id': physique.id }) }}\">{{ physique.id }}</a></th>
                <td>{{ physique.nom }}</td>
                <td>{{ physique.prenom }}</td>
                <td>{{ physique.sigle }}</td>
                <td>{{ physique.raisonSociale }}</td>
                <td>{% if physique.datnais %}{{ physique.datnais|date('Y-m-d') }}{% endif %}</td>
                <td>{{ physique.telephone }}</td>
                <td>{{ physique.email }}</td>
                <td>{{ physique.pays }}</td>
                <td>{{ physique.ville }}</td>
                <td>{{ physique.tuteur }}</td>
                <td>{{ physique.prenomTuteur }}</td>
                <td>
                            <a href=\"{{ path('physique_show', { 'id': physique.id }) }}\"><i class=\"fa fa-eye\" style=\"font-size:23px;color:blue\"></i></a>
                            <a href=\"{{ path('physique_edit', { 'id': physique.id }) }}\"><i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
{% block javascripts %} 
{{parent() }}
<script> 
        {# let rechercher= \$(\"#se)arch\").val; #}
  {# alert(5) #}
    {# function myFonction(){
    var x = document.getElementById(\"bouton_search\");
    x.disabled=true; #}
\$(document).ready(function(){
    \$(\"#bouton_search\").click(function(ev){
        ev.preventDefault();
        alert(2);

    });
})

    {# let rechercher= \$(\"#search\").val;
    console.log(rechercher); 
    const data = { username: 'example' };

    fetch('https://example.com/profile', {
    method: 'POST', // or 'PUT'
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
    console.log('Success:', data);
    })
    .catch((error) => {
    console.error('Error:', error);
    }); #}
</script>   
{% endblock %}", "physique/index.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\index.html.twig");
    }
}
