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
            margin-top:8%;
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
        // line 62
        echo "        #tuteur {
            display:none;
        }
        #prenom_tuteur {
            display:none;
        }
</style>
    
<h1></h1>
        
";
        // line 72
        $this->displayBlock('sidebar', $context, $blocks);
        // line 78
        echo "<div class=\"formulaire\">
    <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_index");
        echo "\"class=\"btn btn-primary\" id=\"index\">Liste</a>
    ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 81
        if ($this->getAttribute(($context["form"] ?? null), "typeCompte", array(), "any", true, true)) {
            // line 82
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeCompte", array()), 'row');
            echo "
        ";
        }
        // line 84
        echo "       <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 86
        if ($this->getAttribute(($context["form"] ?? null), "nom", array(), "any", true, true)) {
            // line 87
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
        ";
        }
        // line 89
        echo "        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 91
        if ($this->getAttribute(($context["form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 92
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
            echo "
        ";
        }
        // line 94
        echo "        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 98
        if ($this->getAttribute(($context["form"] ?? null), "sigle", array(), "any", true, true)) {
            // line 99
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sigle", array()), 'row');
            echo "
        ";
        }
        // line 101
        echo "        </div>
        <div class=\"form-group col-md-6\">
         ";
        // line 103
        if ($this->getAttribute(($context["form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 104
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonSociale", array()), 'row');
            echo "
        ";
        }
        // line 106
        echo "        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datnais", array()), 'row');
        echo "
        <p id=\"reponse\"></p>
        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
        </div>
        </div>
        <div class=\"form-group\">
        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
        echo "
        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        <div id=\"tuteur\">
         ";
        // line 131
        if ($this->getAttribute(($context["form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 132
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tuteur", array()), 'row');
            echo "
        ";
        }
        // line 134
        echo "        </div>
        </div>
        <div class=\"form-group col-md-6\">
        <div id=\"prenom_tuteur\">
        ";
        // line 138
        if ($this->getAttribute(($context["form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 139
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomTuteur", array()), 'row');
            echo "
        ";
        }
        // line 141
        echo "        </div>
        </div>
        </div>
         
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"/>
        ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
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
        return "physique/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 75,  281 => 74,  278 => 73,  269 => 72,  256 => 146,  249 => 141,  243 => 139,  241 => 138,  235 => 134,  229 => 132,  227 => 131,  218 => 125,  212 => 122,  205 => 118,  198 => 114,  191 => 110,  185 => 106,  179 => 104,  177 => 103,  173 => 101,  167 => 99,  165 => 98,  159 => 94,  153 => 92,  151 => 91,  147 => 89,  141 => 87,  139 => 86,  135 => 84,  129 => 82,  127 => 81,  123 => 80,  119 => 79,  116 => 78,  114 => 72,  102 => 62,  50 => 4,  41 => 3,  11 => 1,);
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
            margin-top:8%;
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
        #tuteur {
            display:none;
        }
        #prenom_tuteur {
            display:none;
        }
</style>
    
<h1></h1>
        
{% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
        <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
{% endblock %}
<div class=\"formulaire\">
    <a href=\"{{ path('physique_index') }}\"class=\"btn btn-primary\" id=\"index\">Liste</a>
    {{ form_start(form) }}
    {% if form.typeCompte is defined %}
        {{form_row(form.typeCompte)}}
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
         
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"/>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "physique/new.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\new.html.twig");
    }
}
