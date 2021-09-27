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
</style>
    
<h1></h1>
        
";
        // line 58
        $this->displayBlock('sidebar', $context, $blocks);
        // line 64
        echo "<div class=\"formulaire\">
    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_index");
        echo "\"class=\"btn btn-primary\" id=\"index\">Liste</a>
    ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 67
        if ($this->getAttribute(($context["form"] ?? null), "typeCompte", array(), "any", true, true)) {
            // line 68
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeCompte", array()), 'row');
            echo "
        ";
        }
        // line 70
        echo "       <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 72
        if ($this->getAttribute(($context["form"] ?? null), "nom", array(), "any", true, true)) {
            // line 73
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
            echo "
        ";
        }
        // line 75
        echo "        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 77
        if ($this->getAttribute(($context["form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 78
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
            echo "
        ";
        }
        // line 80
        echo "        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 84
        if ($this->getAttribute(($context["form"] ?? null), "sigle", array(), "any", true, true)) {
            // line 85
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sigle", array()), 'row');
            echo "
        ";
        }
        // line 87
        echo "        </div>
        <div class=\"form-group col-md-6\">
         ";
        // line 89
        if ($this->getAttribute(($context["form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 90
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonSociale", array()), 'row');
            echo "
        ";
        }
        // line 92
        echo "        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datnais", array()), 'row');
        echo "
        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
        </div>
        </div>
        <div class=\"form-group\">
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
        echo "
        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
         ";
        // line 115
        if ($this->getAttribute(($context["form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 116
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tuteur", array()), 'row');
            echo "
        ";
        }
        // line 118
        echo "        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 120
        if ($this->getAttribute(($context["form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 121
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomTuteur", array()), 'row');
            echo "
        ";
        }
        // line 123
        echo "        </div>
        </div>
         
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"/>
        ";
        // line 127
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 59
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 61
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
        return array (  272 => 61,  268 => 60,  265 => 59,  256 => 58,  243 => 127,  237 => 123,  231 => 121,  229 => 120,  225 => 118,  219 => 116,  217 => 115,  209 => 110,  203 => 107,  196 => 103,  189 => 99,  183 => 96,  177 => 92,  171 => 90,  169 => 89,  165 => 87,  159 => 85,  157 => 84,  151 => 80,  145 => 78,  143 => 77,  139 => 75,  133 => 73,  131 => 72,  127 => 70,  121 => 68,  119 => 67,  115 => 66,  111 => 65,  108 => 64,  106 => 58,  50 => 4,  41 => 3,  11 => 1,);
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
         {% if form.tuteur is defined %}
        {{form_row(form.tuteur)}}
        {% endif %}
        </div>
        <div class=\"form-group col-md-6\">
        {% if form.prenomTuteur is defined %}
        {{form_row(form.prenomTuteur)}}
        {% endif %}
        </div>
        </div>
         
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"/>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "physique/new.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\new.html.twig");
    }
}
