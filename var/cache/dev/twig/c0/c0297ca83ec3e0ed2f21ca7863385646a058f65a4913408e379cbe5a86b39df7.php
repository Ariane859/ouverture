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
        .formulaire 
        {
            color: black;
            margin-top:5%;
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
            margin-left:94%;
        }
        .index:hover{
            color:black;
        }
        ";
        // line 63
        echo "        #mineur
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
        // line 77
        echo "        ";
        // line 125
        echo "</style>
    
<h1></h1>
        
";
        // line 129
        $this->displayBlock('sidebar', $context, $blocks);
        // line 135
        echo "    ";
        // line 146
        echo "
        <div class=\"formulaire\">
            ";
        // line 149
        echo "            ";
        // line 150
        echo "             ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 156
        echo "                    ";
        if ($this->getAttribute(($context["form"] ?? null), "nom", array(), "any", true, true)) {
            // line 157
            echo "                        <div id=\"mineur\">
                            ";
            // line 158
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mineur", array()), 'row');
            echo "
                        </div>
                    ";
        }
        // line 161
        echo "                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6\">
                            ";
        // line 163
        if ($this->getAttribute(($context["form"] ?? null), "nom", array(), "any", true, true)) {
            // line 164
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
                            ";
        }
        // line 166
        echo "                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 168
        if ($this->getAttribute(($context["form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 169
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
            echo "
                            ";
        }
        // line 171
        echo "                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6\">
                            ";
        // line 175
        if ($this->getAttribute(($context["form"] ?? null), "sigle", array(), "any", true, true)) {
            // line 176
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sigle", array()), 'row');
            echo "
                            ";
        }
        // line 178
        echo "                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 180
        if ($this->getAttribute(($context["form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 181
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonSociale", array()), 'row');
            echo "
                            ";
        }
        // line 183
        echo "                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6\">
                            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datnais", array()), 'row');
        echo "
                            <p id=\"reponse\"></p>
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6\">
                            ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6\">
                            <div id=\"tuteur\">
                                ";
        // line 208
        if ($this->getAttribute(($context["form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 209
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tuteur", array()), 'row');
            echo "
                                ";
        }
        // line 211
        echo "                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <div id=\"prenom_tuteur\">
                                ";
        // line 215
        if ($this->getAttribute(($context["form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 216
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomTuteur", array()), 'row');
            echo "
                                ";
        }
        // line 218
        echo "                            </div>
                        </div>
                    </div> 
                    ";
        // line 222
        echo "                ";
        // line 223
        echo "            ";
        // line 224
        echo "
            ";
        // line 252
        echo "            <button type=\"submit\" class=\"btn btn-success\" id=\"enregistrer\">Enregistrer</button>
            ";
        // line 253
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 130
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
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
        return array (  308 => 132,  304 => 131,  301 => 130,  292 => 129,  279 => 253,  276 => 252,  273 => 224,  271 => 223,  269 => 222,  264 => 218,  258 => 216,  256 => 215,  250 => 211,  244 => 209,  242 => 208,  233 => 202,  227 => 199,  220 => 195,  213 => 191,  206 => 187,  200 => 183,  194 => 181,  192 => 180,  188 => 178,  182 => 176,  180 => 175,  174 => 171,  168 => 169,  166 => 168,  162 => 166,  156 => 164,  154 => 163,  150 => 161,  144 => 158,  141 => 157,  138 => 156,  133 => 150,  131 => 149,  127 => 146,  125 => 135,  123 => 129,  117 => 125,  115 => 77,  103 => 63,  50 => 4,  41 => 3,  11 => 1,);
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
        .formulaire 
        {
            color: black;
            margin-top:5%;
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
            margin-left:94%;
        }
        .index:hover{
            color:black;
        }
        {# #physiquebundle_physique_tuteur
        {
            cursor: no-drop;
        }
        #physiquebundle_physique_prenomTuteur
        {
            cursor: no-drop;
        } #}
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
        {# #contain
        {
            margin-top:8%;
        } #}
        {# .stepwizard-step p {
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
        } #}
</style>
    
<h1></h1>
        
{% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
        <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
{% endblock %}
    {# <div class=\"container\" id=\"contain\">
        <div class=\"stepwizard\">
            <div class=\"stepwizard-row setup-panel\">
                <div class=\"stepwizard-step col-xs-3\"> 
                    <a href=\"#step-1\" type=\"button\" class=\"btn btn-success btn-circle\">1</a>
                </div>
                <div class=\"stepwizard-step col-xs-3\"> 
                    <a href=\"#step-2\" type=\"button\" class=\"btn btn-success btn-circle\" disabled=\"disabled\">2</a>
                </div>
            </div>
        </div> #}

        <div class=\"formulaire\">
            {# <a href=\"{{ path('physique_index') }}\"class=\"btn btn-primary\" id=\"index\">Liste</a> #}
            {# {{ form_start(form,{'attr':{'role':\"form\"}}) }} #}
             {{ form_start(form) }}
            {# <div class=\"panel panel-primary setup-content\" id=\"step-1\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Informations personnelles</h3>
                </div>
                <div class=\"panel-body\"> #}
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
                    {# <button class=\"btn btn-primary nextBtn pull-right\" type=\"button\">Suivant</button> #}
                {# </div> #}
            {# </div> #}

            {# <div class=\"panel panel-primary setup-content\" id=\"step-2\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Pièces à joindre</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                {{form_row(form.typePiece)}}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{form_row(form.refPiece)}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(form.datexpiration)}}
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.paysEmission)}}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.emetteur)}}
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success pull-right\" id=\"enregistrer\">Enregistrer</button>
                    </div>
            </div> #}
            <button type=\"submit\" class=\"btn btn-success\" id=\"enregistrer\">Enregistrer</button>
            {{ form_end(form) }}
        </div>
{% endblock %}

{# {% block javascripts %}
    
    <script>
        {# \$(document).ready(function()
        {
            var navListItems = \$('div.setup-panel div a'),
            allWells = \$('.setup-content'),
            allNextBtn = \$('.nextBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var \$target = \$(\$(this).attr('href')),
                    \$item = \$(this);

                if (!\$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    \$item.addClass('btn-success');
                    allWells.hide();
                    \$target.show();
                    \$target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = \$(this).closest(\".setup-content\"),
                    curStepBtn = curStep.attr(\"id\"),
                    nextStepWizard = \$('div.setup-panel div a[href=\"#' + curStepBtn + '\"]').parent().next().children(\"a\"),
                    curInputs = curStep.find(\"input[type='text'],input[type='url']\"),
                    isValid = true;

                \$(\".form-group\").removeClass(\"has-error\");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        \$(curInputs[i]).closest(\".form-group\").addClass(\"has-error\");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            \$('div.setup-panel div a.btn-success').trigger('click');});
        }
        ) 
    </script>
{% endblock %} #}", "physique/new.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\new.html.twig");
    }
}
