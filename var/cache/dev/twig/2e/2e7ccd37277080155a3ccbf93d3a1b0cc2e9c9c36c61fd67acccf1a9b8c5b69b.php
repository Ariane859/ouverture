<?php

/* physique/edit.html.twig */
class __TwigTemplate_7ab1a95031fc07c441bc273d94efe3dcdc798a71f3c78b1ecd0fd679437e1a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "physique/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/edit.html.twig"));

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
        echo "
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
                    position:relative;
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
            .formulaire 
            {
                color: black;
                margin-top:1%;
                margin-left:11%;
                width:80%;
                border:solid white 1px;
            }
            #ouvrir
            {
                margin-left:80%;
                font-size:1.2rem;
            }
            #index
            {
                color: white;
                margin-top:2%;
                margin-left:94%;
            }
            ";
        // line 61
        echo "            ";
        // line 67
        echo "    </style>

    ";
        // line 69
        $this->displayBlock('sidebar', $context, $blocks);
        // line 75
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_index");
        echo "\"class=\"btn btn-primary\" id=\"index\">Liste</a>
    <h2>Informations personnelles</h2>
    <div class=\"formulaire\">
        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

            ";
        // line 80
        if ($this->getAttribute(($context["edit_form"] ?? null), "nom", array(), "any", true, true)) {
            // line 81
            echo "                <div id=\"editform_mineur\">
                ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mineur", array()), 'row');
            echo "
                </div>
            ";
        }
        // line 85
        echo "        ";
        // line 90
        echo "            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 92
        if ($this->getAttribute(($context["edit_form"] ?? null), "nom", array(), "any", true, true)) {
            // line 93
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", array()), 'row');
            echo "
                    ";
        }
        // line 95
        echo "                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 97
        if ($this->getAttribute(($context["edit_form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 98
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prenom", array()), 'row');
            echo "
                    ";
        }
        // line 100
        echo "                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 104
        if ($this->getAttribute(($context["edit_form"] ?? null), "sigle", array(), "any", true, true)) {
            // line 105
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sigle", array()), 'row');
            echo "
                    ";
        }
        // line 107
        echo "                </div>
                    <div class=\"form-group col-md-6\">
                    ";
        // line 109
        if ($this->getAttribute(($context["edit_form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 110
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "raisonSociale", array()), 'row');
            echo "
                    ";
        }
        // line 112
        echo "                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "datnais", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "telephone", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pays", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ville", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <div id=\"tuteur\">
                        ";
        // line 136
        if ($this->getAttribute(($context["edit_form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 137
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tuteur", array()), 'row');
            echo "
                        ";
        }
        // line 139
        echo "                    </div>
                </div>
                <div class=\"form-group col-md-6\">
                    <div id=\"prenom_tuteur\">
                        ";
        // line 143
        if ($this->getAttribute(($context["edit_form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 144
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prenomTuteur", array()), 'row');
            echo "
                        ";
        }
        // line 146
        echo "                    </div>
                </div>
            </div>
            <div class=\"footer\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\" />
        ";
        // line 151
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

            ";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
             <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
            ";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
    <h2>Pièces jointes</h2>
    <a href=\"\" id=\"ajout\" data-toggle=\"modal\" class=\"btn btn-primary\">Ajouter</a>
     ";
        // line 161
        echo "            <div class=\"modal fade\" id=\"modalResult\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <form id=\"formulaire\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Search\" id=\"type\">
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
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 70
        echo "        <div class=\"sidebar\">
            <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
            <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        // line 178
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script> 
     
\$(document).ready(function(){

    \$(\"#ajout\").click(function(ev){
        ev.preventDefault();
        \$('#type').val(\"\")
        \$('#modalResult').modal('show')

        })
    });


</script>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "physique/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 178,  330 => 177,  317 => 72,  313 => 71,  310 => 70,  301 => 69,  291 => 177,  273 => 161,  265 => 155,  260 => 153,  255 => 151,  248 => 146,  242 => 144,  240 => 143,  234 => 139,  228 => 137,  226 => 136,  217 => 130,  211 => 127,  204 => 123,  197 => 119,  191 => 116,  185 => 112,  179 => 110,  177 => 109,  173 => 107,  167 => 105,  165 => 104,  159 => 100,  153 => 98,  151 => 97,  147 => 95,  141 => 93,  139 => 92,  135 => 90,  133 => 85,  127 => 82,  124 => 81,  122 => 80,  117 => 78,  110 => 75,  108 => 69,  104 => 67,  102 => 61,  51 => 4,  42 => 3,  11 => 1,);
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
                    position:relative;
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
            .formulaire 
            {
                color: black;
                margin-top:1%;
                margin-left:11%;
                width:80%;
                border:solid white 1px;
            }
            #ouvrir
            {
                margin-left:80%;
                font-size:1.2rem;
            }
            #index
            {
                color: white;
                margin-top:2%;
                margin-left:94%;
            }
            {# #physiquebundle_physique_tuteur
            {
                cursor: no-drop;
            }
            #physiquebundle_physique_prenomTuteur
            {
                cursor: no-drop;
            } #}
            {# #tuteur {
                display:none;
            }
            #prenom_tuteur {
                display:none;
            } #}
    </style>

    {% block sidebar %}
        <div class=\"sidebar\">
            <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
            <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
        </div>
    {% endblock %}
            <a href=\"{{ path('physique_index') }}\"class=\"btn btn-primary\" id=\"index\">Liste</a>
    <h2>Informations personnelles</h2>
    <div class=\"formulaire\">
        {{ form_start(edit_form) }}

            {% if edit_form.nom is defined %}
                <div id=\"editform_mineur\">
                {{ form_row(edit_form.mineur)}}
                </div>
            {% endif %}
        {# <div class=\"form-group col-md-6\">
                <div id=\"editform_mineur\">
                    {{ form_row(edit_form.mineur)}}
                </div>
            </div> #}
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    {% if edit_form.nom is defined %}
                    {{form_row(edit_form.nom)}}
                    {% endif %}
                </div>
                <div class=\"form-group col-md-6\">
                    {% if edit_form.prenom is defined %}
                    {{form_row(edit_form.prenom)}}
                    {% endif %}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    {% if edit_form.sigle is defined %}
                    {{form_row(edit_form.sigle)}}
                    {% endif %}
                </div>
                    <div class=\"form-group col-md-6\">
                    {% if edit_form.raisonSociale is defined %}
                    {{form_row(edit_form.raisonSociale)}}
                    {% endif %}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    {{ form_row(edit_form.datnais)}}
                </div>
                <div class=\"form-group col-md-6\">
                    {{ form_row(edit_form.telephone)}}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_row(edit_form.email)}}
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    {{ form_row(edit_form.pays)}}
                </div>
                <div class=\"form-group col-md-6\">
                    {{ form_row(edit_form.ville)}}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <div id=\"tuteur\">
                        {% if edit_form.tuteur is defined %}
                            {{form_row(edit_form.tuteur)}}
                        {% endif %}
                    </div>
                </div>
                <div class=\"form-group col-md-6\">
                    <div id=\"prenom_tuteur\">
                        {% if edit_form.prenomTuteur is defined %}
                            {{form_row(edit_form.prenomTuteur)}}
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"footer\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\" />
        {{ form_end(edit_form) }}

            {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
             <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </div>
    </div>
    <h2>Pièces jointes</h2>
    <a href=\"\" id=\"ajout\" data-toggle=\"modal\" class=\"btn btn-primary\">Ajouter</a>
     {# modal #}
            <div class=\"modal fade\" id=\"modalResult\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <form id=\"formulaire\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Search\" id=\"type\">
                            </form>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-primary\"id=\"valider\">Valider</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
            
            {% block javascripts %} 
{{parent() }}

<script> 
     
\$(document).ready(function(){

    \$(\"#ajout\").click(function(ev){
        ev.preventDefault();
        \$('#type').val(\"\")
        \$('#modalResult').modal('show')

        })
    });


</script>   
{% endblock %}
{% endblock %}

", "physique/edit.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\edit.html.twig");
    }
}
