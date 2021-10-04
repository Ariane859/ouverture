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
        echo "        ";
        // line 67
        echo "</style>
";
        // line 68
        $this->displayBlock('sidebar', $context, $blocks);
        // line 74
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_index");
        echo "\"class=\"btn btn-primary\" id=\"index\">Liste</a>
<div class=\"formulaire\">
    ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "typeCompte", array()), 'row');
        echo "
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 80
        if ($this->getAttribute(($context["edit_form"] ?? null), "nom", array(), "any", true, true)) {
            // line 81
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", array()), 'row');
            echo "
        ";
        }
        // line 83
        echo "        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 85
        if ($this->getAttribute(($context["edit_form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 86
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prenom", array()), 'row');
            echo "
        ";
        }
        // line 88
        echo "        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 92
        if ($this->getAttribute(($context["edit_form"] ?? null), "sigle", array(), "any", true, true)) {
            // line 93
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sigle", array()), 'row');
            echo "
        ";
        }
        // line 95
        echo "        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 97
        if ($this->getAttribute(($context["edit_form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 98
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "raisonSociale", array()), 'row');
            echo "
        ";
        }
        // line 100
        echo "        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "datnais", array()), 'row');
        echo "
        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "telephone", array()), 'row');
        echo "
        </div>
        </div>
        <div class=\"form-group\">
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pays", array()), 'row');
        echo "
        </div>
        <div class=\"form-group col-md-6\">
        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ville", array()), 'row');
        echo "
        </div>
        </div>
        <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
        <div id=\"tuteur\">
        ";
        // line 124
        if ($this->getAttribute(($context["edit_form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 125
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tuteur", array()), 'row');
            echo "
        ";
        }
        // line 127
        echo "        </div>
        </div>
        <div class=\"form-group col-md-6\">
        <div id=\"prenom_tuteur\">
        ";
        // line 131
        if ($this->getAttribute(($context["edit_form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 132
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prenomTuteur", array()), 'row');
            echo "
        ";
        }
        // line 134
        echo "        </div>
        </div>
        </div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\" />
        ";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
        ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    ";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 69
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
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
        return array (  277 => 71,  273 => 70,  270 => 69,  261 => 68,  248 => 141,  244 => 140,  239 => 138,  233 => 134,  227 => 132,  225 => 131,  219 => 127,  213 => 125,  211 => 124,  202 => 118,  196 => 115,  189 => 111,  182 => 107,  176 => 104,  170 => 100,  164 => 98,  162 => 97,  158 => 95,  152 => 93,  150 => 92,  144 => 88,  138 => 86,  136 => 85,  132 => 83,  126 => 81,  124 => 80,  118 => 77,  114 => 76,  108 => 74,  106 => 68,  103 => 67,  101 => 61,  50 => 4,  41 => 3,  11 => 1,);
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
<div class=\"formulaire\">
    {{ form_start(edit_form) }}
        {{form_row(edit_form.typeCompte)}}
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
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\" />
        {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
        {{ form_end(delete_form) }}
    {{ form_end(edit_form) }}
    </div>
{% endblock %}



", "physique/edit.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\edit.html.twig");
    }
}
