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
                margin-left:55%;
            }
        h1
            {
                margin-top:1%;
                margin-left:1%;
                font-weight:bold;
                font-size:2rem;
            }
        table
            {
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
                margin-left:20%;
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
        .index:hover
            {
                color:black;
            }   
        #liste
            {
                color:black;
            }
        #modifier
            {
                color:black;
            }
        #ajouter
            {
                margin-left:89%;
            }
        #bouton_search
            {
                margin-left:97%;
            }
        .tab
            {
                width:10%;
                margin-left:4%;
                margin-top:3%;
            }
        h1
            {
                margin-left:4.5%;
                margin-top:2%;
            }
        #search
            {
                margin-left:%;
            }
</style>

    ";
        // line 106
        $this->displayBlock('sidebar', $context, $blocks);
        // line 125
        echo "
            ";
        // line 127
        echo "            <div class=\"modal fade\" id=\"modalResult\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Recherche</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <form id=\"formulaire\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Search\" id=\"search\">
                            </form>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-primary\"id=\"valider\">Valider</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
            ";
        // line 149
        echo "             <div class=\"modal fade\" id=\"modalNotif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Vous aviez une notification</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
";
        // line 165
        echo "    
    <h1>Listes</h1>
    ";
        // line 172
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_new", array("slug" => 1));
        echo "\" class=\"btn btn-primary\" id=\"ajouter\">Ajouter</a>";
        // line 173
        echo "    <div>
    <table class=\"table table-striped table-hover table-bordered\" id=\"tab\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sigle</th>
                <th>Raison sociale</th>
                <th>Date de naissance</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Tuteur</th>
                <th>Prénom du tuteur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id=\"body\">
        ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physiques"] ?? $this->getContext($context, "physiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["physique"]) {
            // line 194
            echo "            <tr>
                <th><a href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "id", array()), "html", null, true);
            echo "</a></th>
                <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "sigle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "raisonSociale", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 200
            if ($this->getAttribute($context["physique"], "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["physique"], "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "pays", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "tuteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenomTuteur", array()), "html", null, true);
            echo "</td>
                <td>
                            <a href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size:23px;color:blue\"></i></a>
                            ";
            // line 209
            if ((null === $this->getAttribute($context["physique"], "nom", array()))) {
                // line 210
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute($context["physique"], "id", array()), "slug" => 2)), "html", null, true);
                echo "\"><i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i></a>
                            ";
            } else {
                // line 212
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute($context["physique"], "id", array()), "slug" => 1)), "html", null, true);
                echo "\"><i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i></a>
                            ";
            }
            // line 214
            echo "                             ";
            // line 217
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 107
        echo "    <div class=\"sidebar\">
        <div class=\"form-row\">
            <div class=\"col-md-2\">
                <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
            </div>
            <div class=\"col-md-6\">
                <button type=\"button\" class=\"btn btn-outline-success my-6 my-sm-6\" id=\"bouton_search\" data-toggle=\"modal\"><i class=\"fa fa-search\"></i></button>
            </div>
            <div class=\"col-md-2\">
                <button type=\"button\" class=\"btn btn-outline-success my-6 my-sm-6\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i></button>
            </div>
            <div class=\"col-md-2\">
                <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
            </div>
        </div>
    </div>
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        // line 226
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script> 
     
\$(document).ready(function(){
    \$('#tab').DataTable({searching:false});
    \$(\"#bouton_search\").click(function(ev){
        ev.preventDefault();
        \$('#search').val(\"\")
        \$('#modalResult').modal('show')
        \$(\"#valider\").click(function(ev){
        ev.preventDefault();
        let rechercher= \$(\"#search\").val();
        const data = { 
            search: rechercher 
        };
        const url = Routing.generate('physique_search');
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        .then(response => response.text())
        .then(data => {
            \$('#body').html(data)
            //\$('#modal_body').html(data)
            //\$('#modalResult').modal('show')
            //console.log('Success:', data);  
        })
            \$('#modalResult').modal('hide')
        })
        /*.catch((error) => {
            console.error('Error:', error);
        }); */

    });
})

\$(document).ready(function(){
    
    \$(\"#notification\").click(function(ev){
        ev.preventDefault();
        \$('#modalNotif').modal('show')
    });
})

</script>   
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
        return array (  384 => 226,  373 => 225,  357 => 119,  345 => 110,  340 => 107,  331 => 106,  318 => 220,  310 => 217,  308 => 214,  302 => 212,  296 => 210,  294 => 209,  290 => 208,  285 => 206,  281 => 205,  277 => 204,  273 => 203,  269 => 202,  265 => 201,  259 => 200,  255 => 199,  251 => 198,  247 => 197,  243 => 196,  237 => 195,  234 => 194,  230 => 193,  208 => 173,  204 => 172,  200 => 165,  183 => 149,  160 => 127,  157 => 125,  155 => 106,  51 => 4,  42 => 3,  11 => 1,);
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
                margin-left:55%;
            }
        h1
            {
                margin-top:1%;
                margin-left:1%;
                font-weight:bold;
                font-size:2rem;
            }
        table
            {
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
                margin-left:20%;
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
        .index:hover
            {
                color:black;
            }   
        #liste
            {
                color:black;
            }
        #modifier
            {
                color:black;
            }
        #ajouter
            {
                margin-left:89%;
            }
        #bouton_search
            {
                margin-left:97%;
            }
        .tab
            {
                width:10%;
                margin-left:4%;
                margin-top:3%;
            }
        h1
            {
                margin-left:4.5%;
                margin-top:2%;
            }
        #search
            {
                margin-left:%;
            }
</style>

    {% block sidebar %}
    <div class=\"sidebar\">
        <div class=\"form-row\">
            <div class=\"col-md-2\">
                <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
            </div>
            <div class=\"col-md-6\">
                <button type=\"button\" class=\"btn btn-outline-success my-6 my-sm-6\" id=\"bouton_search\" data-toggle=\"modal\"><i class=\"fa fa-search\"></i></button>
            </div>
            <div class=\"col-md-2\">
                <button type=\"button\" class=\"btn btn-outline-success my-6 my-sm-6\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i></button>
            </div>
            <div class=\"col-md-2\">
                <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
            </div>
        </div>
    </div>
    
    {% endblock %}

            {# modal #}
            <div class=\"modal fade\" id=\"modalResult\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Recherche</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <form id=\"formulaire\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Search\" id=\"search\">
                            </form>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-primary\"id=\"valider\">Valider</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
            {# modal notification#}
             <div class=\"modal fade\" id=\"modalNotif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Vous aviez une notification</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
{#<div class=\"form-row\">#}
    
    <h1>Listes</h1>
    {# {% for message in app.flashes('notice') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %} #}
    <a href=\"{{ path('physique_new', {'slug':1}) }}\" class=\"btn btn-primary\" id=\"ajouter\">Ajouter</a>{#</div>#}
    <div>
    <table class=\"table table-striped table-hover table-bordered\" id=\"tab\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sigle</th>
                <th>Raison sociale</th>
                <th>Date de naissance</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Tuteur</th>
                <th>Prénom du tuteur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id=\"body\">
        {% for physique in physiques %}
            <tr>
                <th><a href=\"{{ path('physique_show', { 'id': physique.id }) }}\">{{ physique.id }}</a></th>
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
                            {% if physique.nom is null %}
                            <a href=\"{{ path('physique_edit', { 'id': physique.id, 'slug':2 }) }}\"><i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i></a>
                            {% else %}
                            <a href=\"{{ path('physique_edit', { 'id': physique.id, 'slug':1 }) }}\"><i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i></a>
                            {% endif %}
                             {# {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                            <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
                            {{ form_end(delete_form) }} #}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
{% endblock %}

{% block javascripts %} 
{{parent() }}

<script> 
     
\$(document).ready(function(){
    \$('#tab').DataTable({searching:false});
    \$(\"#bouton_search\").click(function(ev){
        ev.preventDefault();
        \$('#search').val(\"\")
        \$('#modalResult').modal('show')
        \$(\"#valider\").click(function(ev){
        ev.preventDefault();
        let rechercher= \$(\"#search\").val();
        const data = { 
            search: rechercher 
        };
        const url = Routing.generate('physique_search');
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        .then(response => response.text())
        .then(data => {
            \$('#body').html(data)
            //\$('#modal_body').html(data)
            //\$('#modalResult').modal('show')
            //console.log('Success:', data);  
        })
            \$('#modalResult').modal('hide')
        })
        /*.catch((error) => {
            console.error('Error:', error);
        }); */

    });
})

\$(document).ready(function(){
    
    \$(\"#notification\").click(function(ev){
        ev.preventDefault();
        \$('#modalNotif').modal('show')
    });
})

</script>   
{% endblock %}", "physique/index.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\index.html.twig");
    }
}
