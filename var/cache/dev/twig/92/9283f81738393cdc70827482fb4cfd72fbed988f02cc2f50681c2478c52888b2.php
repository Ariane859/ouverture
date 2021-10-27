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
                font-family: 'Times New Roman'
            }
        .sidebar
            {
                background-color: teal;
                width: 100%;
                top: 0;
                left: 0;
                padding:1%;
            }
        h1
            {
                margin-top:1%;
                font-weight:bold;
                font-size:2.5rem;
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
                margin-left:68%;
                font-size:1.2rem;
                color:white;
                padding:1%;
            }
         #ouvrir:hover
            {
                color:white;
            }
        #ajouter
            {
                margin-left:99%;
            }
        #bouton_search
            {
                margin-left:45%;
            }
        #tab
            {
                /*margin-top:3%;*/
                margin:auto:
                
            }
        tr
            {
                font-size:100%;
                text-align:center;
            }
        td {
            text-align:center;
        }
        #notification:hover
        {
            background:skyblue;
        }
</style>

    ";
        // line 81
        $this->displayBlock('sidebar', $context, $blocks);
        // line 106
        echo "    <div class=\"container\">
            ";
        // line 108
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
        // line 130
        echo "             <div class=\"modal fade\" id=\"modalNotif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Vous aviez une notification</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\" id=\"body_notif\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
        <div class=\"row\">
            <h1>Listes</h1>
            <div class=\"col-lg-12\">
            <a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_new", array("slug" => 1));
        echo "\" class=\"btn btn-primary\" id=\"ajouter\">Ajouter</a>";
        // line 151
        echo "                <table class=\"table table-hover table-bordered table-responsive-lg\" id=\"tab\">
                    <thead class=\"thead-light\">
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
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physiques"] ?? $this->getContext($context, "physiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["physique"]) {
            // line 171
            echo "                        <tr>
                            <th><a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "id", array()), "html", null, true);
            echo "</a></th>
                            <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "sigle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "raisonSociale", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 177
            if ($this->getAttribute($context["physique"], "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["physique"], "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "telephone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "pays", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "ville", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "tuteur", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenomTuteur", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-info\" style=\"color:white\">Voir</a>
                                ";
            // line 187
            echo "                                ";
            if ((null === $this->getAttribute($context["physique"], "nom", array()))) {
                // line 188
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute($context["physique"], "id", array()), "slug" => 2)), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"margin-top:1%;color:white\">Edit</a>
                                    ";
                // line 190
                echo "                                ";
            } else {
                // line 191
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute($context["physique"], "id", array()), "slug" => 1)), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"margin-top:1%;color:white\">Edit</a>
                                    ";
                // line 193
                echo "                                ";
            }
            // line 194
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 82
        echo "    <div class=\"sidebar\">
        <div class=\"form-row\">
            <div class=\"col-md-2\">
                <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
            </div>
            <div class=\"col-md-4\">
                <button type=\"button\" class=\"btn btn-outline-light my-6 my-sm-6\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"  position: absolute;
                top: -10px;
                ";
        // line 91
        echo "                padding: 5px 10px;
                border-radius: 50%;
                background:skyblue;
                color: white;\">10</span></button>
            </div>
            <div class=\"col-md-4\">
                <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
            </div>
            <div class=\"col-md-2\">
                <button type=\"button\" class=\"btn btn-outline-light\" id=\"bouton_search\" data-toggle=\"modal\"><i class=\"fa fa-search\"></i></button>
            </div>
        </div>
    </div>
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 

    ";
        // line 206
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
            /*var notifications= new Array()
            var count=notifications.length()*/
            \$('#body_notif').html()
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
        return array (  371 => 206,  359 => 204,  340 => 97,  332 => 91,  324 => 85,  319 => 82,  310 => 81,  295 => 197,  287 => 194,  284 => 193,  279 => 191,  276 => 190,  271 => 188,  268 => 187,  264 => 185,  259 => 183,  255 => 182,  251 => 181,  247 => 180,  243 => 179,  239 => 178,  233 => 177,  229 => 176,  225 => 175,  221 => 174,  217 => 173,  211 => 172,  208 => 171,  204 => 170,  183 => 151,  180 => 150,  158 => 130,  135 => 108,  132 => 106,  130 => 81,  51 => 4,  42 => 3,  11 => 1,);
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
                font-family: 'Times New Roman'
            }
        .sidebar
            {
                background-color: teal;
                width: 100%;
                top: 0;
                left: 0;
                padding:1%;
            }
        h1
            {
                margin-top:1%;
                font-weight:bold;
                font-size:2.5rem;
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
                margin-left:68%;
                font-size:1.2rem;
                color:white;
                padding:1%;
            }
         #ouvrir:hover
            {
                color:white;
            }
        #ajouter
            {
                margin-left:99%;
            }
        #bouton_search
            {
                margin-left:45%;
            }
        #tab
            {
                /*margin-top:3%;*/
                margin:auto:
                
            }
        tr
            {
                font-size:100%;
                text-align:center;
            }
        td {
            text-align:center;
        }
        #notification:hover
        {
            background:skyblue;
        }
</style>

    {% block sidebar %}
    <div class=\"sidebar\">
        <div class=\"form-row\">
            <div class=\"col-md-2\">
                <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
            </div>
            <div class=\"col-md-4\">
                <button type=\"button\" class=\"btn btn-outline-light my-6 my-sm-6\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"  position: absolute;
                top: -10px;
                {# right: -10px; #}
                padding: 5px 10px;
                border-radius: 50%;
                background:skyblue;
                color: white;\">10</span></button>
            </div>
            <div class=\"col-md-4\">
                <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
            </div>
            <div class=\"col-md-2\">
                <button type=\"button\" class=\"btn btn-outline-light\" id=\"bouton_search\" data-toggle=\"modal\"><i class=\"fa fa-search\"></i></button>
            </div>
        </div>
    </div>
    
    {% endblock %}
    <div class=\"container\">
            {# modal recherche #}
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
                        <div class=\"modal-body\" id=\"body_notif\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
        <div class=\"row\">
            <h1>Listes</h1>
            <div class=\"col-lg-12\">
            <a href=\"{{ path('physique_new', {'slug':1}) }}\" class=\"btn btn-primary\" id=\"ajouter\">Ajouter</a>{#</div>#}
                <table class=\"table table-hover table-bordered table-responsive-lg\" id=\"tab\">
                    <thead class=\"thead-light\">
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
                                <a href=\"{{ path('physique_show', { 'id': physique.id }) }}\"class=\"btn btn-info\" style=\"color:white\">Voir</a>
                                {# <i class=\"fa fa-eye\" style=\"font-size:23px;color:blue\"></i> #}
                                {% if physique.nom is null %}
                                    <a href=\"{{ path('physique_edit', { 'id': physique.id, 'slug':2 }) }}\" class=\"btn btn-primary\" style=\"margin-top:1%;color:white\">Edit</a>
                                    {# <i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i> #}
                                {% else %}
                                    <a href=\"{{ path('physique_edit', { 'id': physique.id, 'slug':1 }) }}\" class=\"btn btn-primary\" style=\"margin-top:1%;color:white\">Edit</a>
                                    {# <i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i> #}
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
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
            /*var notifications= new Array()
            var count=notifications.length()*/
            \$('#body_notif').html()
            \$('#modalNotif').modal('show')
        });
    })

    </script>   
{% endblock %}", "physique/index.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\index.html.twig");
    }
}
