<?php

/* physique/new.html.twig */
class __TwigTemplate_705963378db49c18e8562f67ed7416fcbb7fff839fe57fc3c35088655ade1191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "physique/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/new.html.twig"));

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
                /*margin-top:30px;*/
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
                margin-left:80%;
                font-size:1.2rem;
            }
        #mineur
            {
                display:none;
            }
        #tuteur 
            {
                display:none;
            }
        #prenom_tuteur 
            {
                display:none;
            }
         ";
        // line 59
        echo "    
        #grad1 {
       
            margin-top:3%;
        }
        .card {
            margin-top:10%;
            width:100%;
            z-index: 0;
            position: relative;
        }
        #form {
            text-align: center;
            position: relative;
            margin-top: 35px
        }
       
        #form fieldset .form-card {
            background: white;
            box-shadow: 0 2px 3px 2px rgba(0, 0, 0, 0.2);
            padding: 12px 15px 12px 15px;
            width: 95%;
            margin: 0 2% 20px 3%;
            text-align: left;
            position: relative
        }

        #form fieldset {
            background: white;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 95%;
            margin-left:1%;
            margin-top:15%;
            padding-bottom: 20px;
            position: relative
        }

         #form fieldset:not(:first-of-type) {
            display: none
        }

        #form input {
            margin-bottom: 13px;
            margin-top: 2px;
        }
        #enregistrer
        {
            margin-left:85%;
        }
        .fit-image {
            width: 100%;
            object-fit: cover
        }
</style>
    
<h1></h1>
        
";
        // line 117
        $this->displayBlock('sidebar', $context, $blocks);
        // line 123
        echo "    <div class=\"container\" id=\"grad1\">
            ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "form")));
        echo " 
                <fieldset>
                    <div class=\"form-card\">
                        ";
        // line 127
        if ($this->getAttribute(($context["form"] ?? null), "nom", array(), "any", true, true)) {
            // line 128
            echo "                            <div id=\"mineur\">
                                ";
            // line 129
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mineur", array()), 'row');
            echo "
                            </div>
                        ";
        }
        // line 132
        echo "                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 134
        if ($this->getAttribute(($context["form"] ?? null), "nom", array(), "any", true, true)) {
            // line 135
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
                                ";
        }
        // line 137
        echo "                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 139
        if ($this->getAttribute(($context["form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 140
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
            echo "
                                ";
        }
        // line 142
        echo "                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">    
                                ";
        // line 146
        if ($this->getAttribute(($context["form"] ?? null), "sigle", array(), "any", true, true)) {
            echo "   
                                    ";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sigle", array()), 'row');
            echo "
                                ";
        }
        // line 149
        echo "                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 151
        if ($this->getAttribute(($context["form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 152
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonSociale", array()), 'row');
            echo "
                                ";
        }
        // line 154
        echo "                            </div>
                        </div>                                
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datnais", array()), 'row');
        echo "
                                <p id=\"reponse\"></p>
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <div id=\"tuteur\">
                                    ";
        // line 179
        if ($this->getAttribute(($context["form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 180
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tuteur", array()), 'row');
            echo "
                                    ";
        }
        // line 182
        echo "                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                <div id=\"prenom_tuteur\">
                                    ";
        // line 186
        if ($this->getAttribute(($context["form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 187
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomTuteur", array()), 'row');
            echo "
                                    ";
        }
        // line 189
        echo "                                </div>
                            </div>
                        </div> 
                    </div>                                                     
                      <input type=\"submit\" class=\"btn btn-outline-success next action-button\" id=\"enregistrer\" value=\"Enregister\">
                </fieldset>
                 <fieldset>
                    <div class=\"form-card form-card-message\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-3\"> <img src=\"https://img.icons8.com/color/96/000000/ok--v2.png\" class=\"fit-image\"> </div>
                            </div> <br><br>
                            <div class=\"row justify-content-center\">
                                <div class=\"col-7 text-center\">
                                    <h5>Enregistré avec succès!</h5>                            
                                 </div>
                            </div>
                    </div>                                                                                  
                </fieldset>
            ";
        // line 207
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo " 
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 118
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 212
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            \$(document).ready(function(){
                \$(\"#enregistrer\").click(function(e)
                {
                    e.preventDefault();
                   var current_fs=\$(this).parent();
                   var next_fs = \$(this).parent().next();
                    var nom= \$(\"#physiquebundle_physique_nom\").val();
                    var prenom= \$(\"#physiquebundle_physique_prenom\").val();
                    var sigle=\$(\"#physiquebundle_physique_sigle\").val();
                    var raisonSociale=\$(\"#physiquebundle_physique_raisonSociale\").val();
                    var datnais= \$(\"#physiquebundle_physique_datnais\").val();
                    var telephone=\$(\"#physiquebundle_physique_telephone\").val();
                    var email= \$(\"#physiquebundle_physique_email\").val();
                    var pays= \$(\"#physiquebundle_physique_pays\").val();
                    var ville= \$(\"#physiquebundle_physique_ville\").val();
                    var tuteur= \$(\"#physiquebundle_physique_tuteur\").val();
                    var prenomTuteur= \$(\"#physiquebundle_physique_prenomTuteur\").val();
                    if(nom==\"\" || prenom==\"\" || sigle==\"\" || raisonSociale==\"\" || datnais==\"\" || telephone==\"\" || email==\"\" || pays==\"\" ||
                        ville==\"\")
                        {
                            alert('Veuillez remplir tous les champs');
                        }
                    else 
                    {
                            
                    \$.ajax(
                        {
                            method:'post',
                            url:'physique_new',
                            data: {
                                physiquebundle_physique_nom:nom,
                                physiquebundle_physique_prenom:prenom,
                                physiquebundle_physique_sigle:sigle,
                                physiquebundle_physique_raisonSociale:raisonSociale,
                                physiquebundle_physique_datnais:datnais,
                                physiquebundle_physique_telephone:telephone,
                                physiquebundle_physique_email:email,
                                physiquebundle_physique_pays:pays,
                                physiquebundle_physique_ville:ville,
                                physiquebundle_physique_tuteur:tuteur,
                                physiquebundle_physique_prenomTuteur:prenomTuteur

                            },
                            success: function(data){
                                //console.log(data);
                                if(data.code == 400){
                                    console.log(data)
                                    alert('Cet utilisateur existe déjà')
                                }
                                else
                                {
                                    console.log(data)
                                    next_fs.show();
                                    current_fs.animate({opacity: 0}, {
                                    step: function(now) {
                                    
                                    opacity = 1 - now;

                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    next_fs.css({'opacity': opacity});
                                    },
                                    duration: 1000
                                });
                                }
                            }
                        })
                    }
                });
            });
    
        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "physique/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 212,  359 => 211,  346 => 120,  342 => 119,  339 => 118,  330 => 117,  317 => 207,  297 => 189,  291 => 187,  289 => 186,  283 => 182,  277 => 180,  275 => 179,  266 => 173,  260 => 170,  253 => 166,  246 => 162,  239 => 158,  233 => 154,  227 => 152,  225 => 151,  221 => 149,  216 => 147,  212 => 146,  206 => 142,  200 => 140,  198 => 139,  194 => 137,  188 => 135,  186 => 134,  182 => 132,  176 => 129,  173 => 128,  171 => 127,  165 => 124,  162 => 123,  160 => 117,  100 => 59,  51 => 4,  42 => 3,  11 => 1,);
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
                margin-left:80%;
                font-size:1.2rem;
            }
        #mineur
            {
                display:none;
            }
        #tuteur 
            {
                display:none;
            }
        #prenom_tuteur 
            {
                display:none;
            }
         {# .formulaire 
        {
            color: black;
            margin-top:5%;
            margin-left:11%;
            width:80%;
            border:solid white 1px;
        } #}
    
        #grad1 {
       
            margin-top:3%;
        }
        .card {
            margin-top:10%;
            width:100%;
            z-index: 0;
            position: relative;
        }
        #form {
            text-align: center;
            position: relative;
            margin-top: 35px
        }
       
        #form fieldset .form-card {
            background: white;
            box-shadow: 0 2px 3px 2px rgba(0, 0, 0, 0.2);
            padding: 12px 15px 12px 15px;
            width: 95%;
            margin: 0 2% 20px 3%;
            text-align: left;
            position: relative
        }

        #form fieldset {
            background: white;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 95%;
            margin-left:1%;
            margin-top:15%;
            padding-bottom: 20px;
            position: relative
        }

         #form fieldset:not(:first-of-type) {
            display: none
        }

        #form input {
            margin-bottom: 13px;
            margin-top: 2px;
        }
        #enregistrer
        {
            margin-left:85%;
        }
        .fit-image {
            width: 100%;
            object-fit: cover
        }
</style>
    
<h1></h1>
        
{% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
        <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
{% endblock %}
    <div class=\"container\" id=\"grad1\">
            {{ form_start(form,{'attr':{'id':\"form\"}}) }} 
                <fieldset>
                    <div class=\"form-card\">
                        {% if form.nom is defined %}
                            <div id=\"mineur\">
                                {{ form_row(form.mineur)}}
                            </div>
                        {% endif %}
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                {% if form.nom is defined %}
                                    {{form_row(form.nom)}}
                                {% endif %}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {% if form.prenom is defined %}
                                    {{form_row(form.prenom)}}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">    
                                {% if form.sigle is defined %}   
                                    {{form_row(form.sigle)}}
                                {% endif %}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {% if form.raisonSociale is defined %}
                                    {{form_row(form.raisonSociale)}}
                                {% endif %}
                            </div>
                        </div>                                
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.datnais)}}
                                <p id=\"reponse\"></p>
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.telephone)}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(form.email)}}
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.pays)}}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.ville)}}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <div id=\"tuteur\">
                                    {% if form.tuteur is defined %}
                                        {{form_row(form.tuteur)}}
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                <div id=\"prenom_tuteur\">
                                    {% if form.prenomTuteur is defined %}
                                        {{form_row(form.prenomTuteur)}}
                                    {% endif %}
                                </div>
                            </div>
                        </div> 
                    </div>                                                     
                      <input type=\"submit\" class=\"btn btn-outline-success next action-button\" id=\"enregistrer\" value=\"Enregister\">
                </fieldset>
                 <fieldset>
                    <div class=\"form-card form-card-message\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-3\"> <img src=\"https://img.icons8.com/color/96/000000/ok--v2.png\" class=\"fit-image\"> </div>
                            </div> <br><br>
                            <div class=\"row justify-content-center\">
                                <div class=\"col-7 text-center\">
                                    <h5>Enregistré avec succès!</h5>                            
                                 </div>
                            </div>
                    </div>                                                                                  
                </fieldset>
            {{ form_end(form) }} 
    </div>
{% endblock %}

{% block javascripts %}
    {{parent() }}
        <script>
            \$(document).ready(function(){
                \$(\"#enregistrer\").click(function(e)
                {
                    e.preventDefault();
                   var current_fs=\$(this).parent();
                   var next_fs = \$(this).parent().next();
                    var nom= \$(\"#physiquebundle_physique_nom\").val();
                    var prenom= \$(\"#physiquebundle_physique_prenom\").val();
                    var sigle=\$(\"#physiquebundle_physique_sigle\").val();
                    var raisonSociale=\$(\"#physiquebundle_physique_raisonSociale\").val();
                    var datnais= \$(\"#physiquebundle_physique_datnais\").val();
                    var telephone=\$(\"#physiquebundle_physique_telephone\").val();
                    var email= \$(\"#physiquebundle_physique_email\").val();
                    var pays= \$(\"#physiquebundle_physique_pays\").val();
                    var ville= \$(\"#physiquebundle_physique_ville\").val();
                    var tuteur= \$(\"#physiquebundle_physique_tuteur\").val();
                    var prenomTuteur= \$(\"#physiquebundle_physique_prenomTuteur\").val();
                    if(nom==\"\" || prenom==\"\" || sigle==\"\" || raisonSociale==\"\" || datnais==\"\" || telephone==\"\" || email==\"\" || pays==\"\" ||
                        ville==\"\")
                        {
                            alert('Veuillez remplir tous les champs');
                        }
                    else 
                    {
                            
                    \$.ajax(
                        {
                            method:'post',
                            url:'physique_new',
                            data: {
                                physiquebundle_physique_nom:nom,
                                physiquebundle_physique_prenom:prenom,
                                physiquebundle_physique_sigle:sigle,
                                physiquebundle_physique_raisonSociale:raisonSociale,
                                physiquebundle_physique_datnais:datnais,
                                physiquebundle_physique_telephone:telephone,
                                physiquebundle_physique_email:email,
                                physiquebundle_physique_pays:pays,
                                physiquebundle_physique_ville:ville,
                                physiquebundle_physique_tuteur:tuteur,
                                physiquebundle_physique_prenomTuteur:prenomTuteur

                            },
                            success: function(data){
                                //console.log(data);
                                if(data.code == 400){
                                    console.log(data)
                                    alert('Cet utilisateur existe déjà')
                                }
                                else
                                {
                                    console.log(data)
                                    next_fs.show();
                                    current_fs.animate({opacity: 0}, {
                                    step: function(now) {
                                    
                                    opacity = 1 - now;

                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    next_fs.css({'opacity': opacity});
                                    },
                                    duration: 1000
                                });
                                }
                            }
                        })
                    }
                });
            });
    
        </script>
{% endblock %}
", "physique/new.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\new.html.twig");
    }
}
