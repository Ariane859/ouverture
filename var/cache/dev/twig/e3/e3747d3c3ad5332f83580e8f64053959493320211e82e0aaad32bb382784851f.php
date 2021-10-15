<?php

/* :physique:new.html.twig */
class __TwigTemplate_e3873e3ab73e91b095573b43e41a19effc1dd864cd12f0028b3b8434013505cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":physique:new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":physique:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":physique:new.html.twig"));

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
        #tuteur {
            display:none;
        }
        #prenom_tuteur {
            display:none;
        }
         ";
        // line 57
        echo "        ";
        // line 66
        echo "        ";
        // line 74
        echo "        
         ";
        // line 132
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
        // line 190
        $this->displayBlock('sidebar', $context, $blocks);
        // line 196
        echo "    <div class=\"container\" id=\"grad1\">
            ";
        // line 197
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "form")));
        echo " 
                ";
        // line 199
        echo "                <fieldset>
                    <div class=\"form-card\">
                        ";
        // line 201
        if ($this->getAttribute(($context["form"] ?? null), "nom", array(), "any", true, true)) {
            // line 202
            echo "                            <div id=\"mineur\">
                                ";
            // line 203
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mineur", array()), 'row');
            echo "
                            </div>
                        ";
        }
        // line 206
        echo "                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 208
        if ($this->getAttribute(($context["form"] ?? null), "nom", array(), "any", true, true)) {
            // line 209
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
                                ";
        }
        // line 211
        echo "                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 213
        if ($this->getAttribute(($context["form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 214
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
            echo "
                                ";
        }
        // line 216
        echo "                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">    
                                ";
        // line 220
        if ($this->getAttribute(($context["form"] ?? null), "sigle", array(), "any", true, true)) {
            echo "   
                                    ";
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sigle", array()), 'row');
            echo "
                                ";
        }
        // line 223
        echo "                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 225
        if ($this->getAttribute(($context["form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 226
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonSociale", array()), 'row');
            echo "
                                ";
        }
        // line 228
        echo "                            </div>
                        </div>                                
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datnais", array()), 'row');
        echo "
                                <p id=\"reponse\"></p>
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <div id=\"tuteur\">
                                    ";
        // line 253
        if ($this->getAttribute(($context["form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 254
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tuteur", array()), 'row');
            echo "
                                    ";
        }
        // line 256
        echo "                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                <div id=\"prenom_tuteur\">
                                    ";
        // line 260
        if ($this->getAttribute(($context["form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 261
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomTuteur", array()), 'row');
            echo "
                                    ";
        }
        // line 263
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
        // line 281
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo " 
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 191
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 286
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 287
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
                                physiquebundle_physiquesi_prenom:prenom,
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
        return ":physique:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 287,  367 => 286,  354 => 193,  350 => 192,  347 => 191,  338 => 190,  324 => 281,  304 => 263,  298 => 261,  296 => 260,  290 => 256,  284 => 254,  282 => 253,  273 => 247,  267 => 244,  260 => 240,  253 => 236,  246 => 232,  240 => 228,  234 => 226,  232 => 225,  228 => 223,  223 => 221,  219 => 220,  213 => 216,  207 => 214,  205 => 213,  201 => 211,  195 => 209,  193 => 208,  189 => 206,  183 => 203,  180 => 202,  178 => 201,  174 => 199,  170 => 197,  167 => 196,  165 => 190,  105 => 132,  102 => 74,  100 => 66,  98 => 57,  51 => 4,  42 => 3,  11 => 1,);
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
        #tuteur {
            display:none;
        }
        #prenom_tuteur {
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
        {# #index
        {
            color: white;
            margin-left:94%;
            margin-top:5%;
        }
        .index:hover{
            color:black;
        } #}
        {# #physiquebundle_physique_tuteur
        {
            cursor: no-drop;
        }
        #physiquebundle_physique_prenomTuteur
        {
            cursor: no-drop;
        } #}
        
         {# #contain
        {
            margin-top:8%;
        }
        .stepwizard-step p {
            margin-top: 0px;
            color:#666;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }
        .stepwizard-step button[disabled] {
            /*opacity: 1 !important;
            filter: alpha(opacity=100) !important;*/
        }
        .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
            opacity:1 !important;
            color:#bbb;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content:\" \";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-index: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
        #step-2
        {
            margin-top:8%;
        }
       #pièce
        {
            margin-right:130%;
            margin-top:5%;
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
                {# <h1>Remplissez le formulaire suivant pour continuer l'ouverture du compte</h1> #}
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
                                physiquebundle_physiquesi_prenom:prenom,
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
", ":physique:new.html.twig", "C:\\laragon\\www\\ouverture\\app/Resources\\views/physique/new.html.twig");
    }
}
