<?php

/* :default:index.html.twig */
class __TwigTemplate_bfb263b4dfefb0c6ebcdcc00136f8cd72ed7d865e47752d51437f5977b1ee4b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 25);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                padding: 1%;
                position:absolute;
            }
        a
            {
                color: white;
                font-size:1.7rem;
                text-decoration: none;
            }
        a:hover
        {
            color:white;
            text-decoration:none;
        }
                h1
            {
                color: teal;
                margin-top:12%;
                font-size:300%;
            }
        .compte 
        {
            color: black;
            border: solid teal 1px;
            margin-top:9%;
            margin-left:37%;
            background-color: teal;
            border-radius:15px;
            padding-left:5%;
            padding-top:1%;
            padding-right:2%;
            padding-bottom:1%;
            width:25%;
            

        }
    </style>
    
";
        // line 77
        $this->displayBlock('sidebar', $context, $blocks);
        // line 82
        echo "            <center><h1> Bienvenue sur notre plateforme ! </h1></center>
        <div class=\"compte\">
            <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\">Ouvrir un compte</a>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 78
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\">Accueil</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 79,  129 => 78,  120 => 77,  107 => 84,  103 => 82,  101 => 77,  41 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<DOCTYPE html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Accueil{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{asset(\"/css/style.css\")}}\">
        {% endblock %}   
    </head>
    <body>
        {% block body %}
            {% block sidebar %}
                <div class=\"sidebar\">
                    <a href=\"/\">Accueil</a>
                <div>
            {% endblock %}
            <center><div class=\"bienvenue\">
                <h1> Bienvenue sur notre plateforme ! </h1>
            </div></center>
            <div class=\"compte\">
            <a href=\"/physique\">Ouvrir un compte</a>
            </div>
        {% endblock %}
    </body>
</html>#}
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
                padding: 1%;
                position:absolute;
            }
        a
            {
                color: white;
                font-size:1.7rem;
                text-decoration: none;
            }
        a:hover
        {
            color:white;
            text-decoration:none;
        }
                h1
            {
                color: teal;
                margin-top:12%;
                font-size:300%;
            }
        .compte 
        {
            color: black;
            border: solid teal 1px;
            margin-top:9%;
            margin-left:37%;
            background-color: teal;
            border-radius:15px;
            padding-left:5%;
            padding-top:1%;
            padding-right:2%;
            padding-bottom:1%;
            width:25%;
            

        }
    </style>
    
{% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\">Accueil</a>
    </div>
{% endblock %}
            <center><h1> Bienvenue sur notre plateforme ! </h1></center>
        <div class=\"compte\">
            <a href=\"{{ path('path_choix')}}\">Ouvrir un compte</a>
        </div>
{% endblock %}
", ":default:index.html.twig", "C:\\laragon\\www\\ouverture\\app/Resources\\views/default/index.html.twig");
    }
}
