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
                margin-left:69%;
                font-size:1.2rem;
                color:white;
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
               margin-left:55%;
            }
        #tab
            {
                /*margin-top:3%;*/
                margin:auto:
                
            }
        tr
            {
                font-size:90%;
                text-align:center;
            }
        td {
            text-align:center;
        }
        #notification:hover
        {
            background:white;
        }
        #notification
        {
            margin-left:10%;
        }
</style>

    ";
        // line 84
        $this->displayBlock('sidebar', $context, $blocks);
        // line 106
        echo "    ";
        // line 107
        echo "    
    
    <div class=\"container\">
            ";
        // line 111
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
        <div class=\"row\">
      
            <h1>Listes</h1>
                ";
        // line 151
        echo "              ";
        // line 152
        echo "              <div class=\"modal1 fade\" id=\"modalNotif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-sm\" role=\"document\">
                  <div class=\"modal-content\">
                      <div class=\"modal-header\">
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
            <div class=\"col-lg-12\">
            ";
        // line 170
        echo "                <table class=\"table table-hover  table-responsive-lg\" id=\"tab\">
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
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physiques"] ?? $this->getContext($context, "physiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["physique"]) {
            // line 191
            echo "                        <tr>
                            <th><a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "id", array()), "html", null, true);
            echo "</a></th>
                            <td>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "sigle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "raisonSociale", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 197
            if ($this->getAttribute($context["physique"], "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["physique"], "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "telephone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "pays", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "ville", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "tuteur", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenomTuteur", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-info\" style=\"color:white\">Voir</a>
                                ";
            // line 207
            echo "                                ";
            if ((null === $this->getAttribute($context["physique"], "nom", array()))) {
                // line 208
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute($context["physique"], "id", array()), "slug" => 2)), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"margin-top:1%;color:white\">Edit</a>
                                    ";
                // line 210
                echo "                                ";
            } else {
                // line 211
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute($context["physique"], "id", array()), "slug" => 1)), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"margin-top:1%;color:white\">Edit</a>
                                    ";
                // line 213
                echo "                                ";
            }
            // line 214
            echo "                                ";
            // line 220
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 85
        echo "    <div class=\"sidebar\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
            </div>
            <div class=\"col-md-4\">
                <a data-target=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_recuperation");
        echo "\" data-tooltip=\"voir\" class=\"tooltipped modal-trigger btn btn-outline-light my-6 my-sm-6\" href=\"#myModal\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"position: absolute;
                top: -10px;padding: 5px 10px;border-radius: 50%;background:red;color: white;\" id=\"notific\">";
        // line 92
        echo twig_escape_filter($this->env, ($context["comptes"] ?? $this->getContext($context, "comptes")), "html", null, true);
        echo "</span></a>
                ";
        // line 95
        echo "            </div>
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

    // line 230
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 

    ";
        // line 232
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
                \$(\"#tab\").dataTable().fnDestroy()
                \$('#body').html(data);
                \$('#tab').DataTable({searching:false}); 
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
        \$(\"#notification\").click(function(){

            \$('.modal1').modal();
            url = \$(this).attr('data-target');
            
            \$.get(url, function (data) {

            //on injecte le html dans la modale
            \$('#body_notif').html(data);
            //on ouvre la modale
            \$('#modalNotif').modal('show');
            });
        })
    });


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
        return array (  382 => 232,  370 => 230,  351 => 97,  347 => 95,  343 => 92,  339 => 91,  333 => 88,  328 => 85,  319 => 84,  304 => 223,  296 => 220,  294 => 214,  291 => 213,  286 => 211,  283 => 210,  278 => 208,  275 => 207,  271 => 205,  266 => 203,  262 => 202,  258 => 201,  254 => 200,  250 => 199,  246 => 198,  240 => 197,  236 => 196,  232 => 195,  228 => 194,  224 => 193,  218 => 192,  215 => 191,  211 => 190,  189 => 170,  170 => 152,  168 => 151,  142 => 111,  137 => 107,  135 => 106,  133 => 84,  51 => 4,  42 => 3,  11 => 1,);
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
                margin-left:69%;
                font-size:1.2rem;
                color:white;
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
               margin-left:55%;
            }
        #tab
            {
                /*margin-top:3%;*/
                margin:auto:
                
            }
        tr
            {
                font-size:90%;
                text-align:center;
            }
        td {
            text-align:center;
        }
        #notification:hover
        {
            background:white;
        }
        #notification
        {
            margin-left:10%;
        }
</style>

    {% block sidebar %}
    <div class=\"sidebar\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
            </div>
            <div class=\"col-md-4\">
                <a data-target=\"{{ path('physique_recuperation') }}\" data-tooltip=\"voir\" class=\"tooltipped modal-trigger btn btn-outline-light my-6 my-sm-6\" href=\"#myModal\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"position: absolute;
                top: -10px;padding: 5px 10px;border-radius: 50%;background:red;color: white;\" id=\"notific\">{{ comptes }}</span></a>
                {# <button type=\"button\" class=\"btn btn-outline-light my-6 my-sm-6\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"position: absolute;
                top: -10px;padding: 5px 10px;border-radius: 50%;background:red;color: white;\" id=\"noific\"></span></button> #}
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
    {# modal notification#}
    
    
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
        <div class=\"row\">
      
            <h1>Listes</h1>
                {# <div class=\"modal1 fade\" id=\"modalNotif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-sm\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
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
            </div> #}
              {# modal notification#}
              <div class=\"modal1 fade\" id=\"modalNotif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-sm\" role=\"document\">
                  <div class=\"modal-content\">
                      <div class=\"modal-header\">
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
            <div class=\"col-lg-12\">
            {# <a href=\"{{ path('physique_new', {'slug':1}) }}\" class=\"btn btn-primary\" id=\"ajouter\">Ajouter</a></div> #}
                <table class=\"table table-hover  table-responsive-lg\" id=\"tab\">
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
                                {# <form method=\"post\" action=\"{{ path('piece_delete', {'id': physique.id}) }}\" onsubmit=\"return confirm('Voulez vous vraiment supprimer?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ physique.id) }}\">
                                  
                                    <button class=\"btn btn-danger\" style=\"padding-left:9%; width:99.9%;margin-top:3%\">Supprimer</button>
                                </form> #}
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
                \$(\"#tab\").dataTable().fnDestroy()
                \$('#body').html(data);
                \$('#tab').DataTable({searching:false}); 
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
        \$(\"#notification\").click(function(){

            \$('.modal1').modal();
            url = \$(this).attr('data-target');
            
            \$.get(url, function (data) {

            //on injecte le html dans la modale
            \$('#body_notif').html(data);
            //on ouvre la modale
            \$('#modalNotif').modal('show');
            });
        })
    });


    </script>   
{% endblock %}", "physique/index.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\index.html.twig");
    }
}
