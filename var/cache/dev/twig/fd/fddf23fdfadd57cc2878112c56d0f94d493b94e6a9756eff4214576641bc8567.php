<?php

/* SiteBundle:Default:index.html.twig */
class __TwigTemplate_f3006c9c985636b0af8e61401dff06c6775a81c8bf87c2a51761a3fc5b17ea02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "SiteBundle:Default:index.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <style>
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
                padding: 2%;
                position:absolute;
            }
        .accueil
        {
            color:white;
            font-size:2rem;
        }
        .accueil:hover
        {
            color:white;
        }
        a
            {
                color: black;
                font-size:large;
                text-decoration: none;
            }
        a:hover
        {
            color:black;
            text-decoration:none;
        }
        h2
            {
                color: black;
                margin-top:10%;
                font-size:2.4rem;

            }
        .type
        {
            
            margin-top:8%;
            margin-left:19%;
            
        }
        .personne_morale
        {
            
            font-size:1.75rem;
            padding:4%;
            margin-top:29%;
        }
        .personne_physique
        {
            margin-left: 4%;
            font-size:1.75rem;
            padding:4%;
            margin-top:29%;

        }
    </style>
    
";
        // line 70
        $this->displayBlock('sidebar', $context, $blocks);
        // line 75
        echo "    <center><h2>Choisir le type de compte que vous voulez créer</h2></center>
    <div class=\"type\">
        <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_new");
        echo "\"><i class=\"fa fa-user\" style=\"font-size:385px\"></i></a>
         <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("morale_new");
        echo "\"><i class=\"fa fa-building-o\" style=\"font-size:385px;margin-left: 18%\"></i></a>

    </div>
           
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 71
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 72,  151 => 71,  142 => 70,  127 => 78,  123 => 77,  119 => 75,  117 => 70,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

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
                padding: 2%;
                position:absolute;
            }
        .accueil
        {
            color:white;
            font-size:2rem;
        }
        .accueil:hover
        {
            color:white;
        }
        a
            {
                color: black;
                font-size:large;
                text-decoration: none;
            }
        a:hover
        {
            color:black;
            text-decoration:none;
        }
        h2
            {
                color: black;
                margin-top:10%;
                font-size:2.4rem;

            }
        .type
        {
            
            margin-top:8%;
            margin-left:19%;
            
        }
        .personne_morale
        {
            
            font-size:1.75rem;
            padding:4%;
            margin-top:29%;
        }
        .personne_physique
        {
            margin-left: 4%;
            font-size:1.75rem;
            padding:4%;
            margin-top:29%;

        }
    </style>
    
{% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
    </div>
{% endblock %}
    <center><h2>Choisir le type de compte que vous voulez créer</h2></center>
    <div class=\"type\">
        <a href=\"{{path('physique_new')}}\"><i class=\"fa fa-user\" style=\"font-size:385px\"></i></a>
         <a href=\"{{path('morale_new')}}\"><i class=\"fa fa-building-o\" style=\"font-size:385px;margin-left: 18%\"></i></a>

    </div>
           
{% endblock %}
", "SiteBundle:Default:index.html.twig", "C:\\laragon\\www\\ouverture\\src\\SiteBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
