<?php

/* physique/show.html.twig */
class __TwigTemplate_cf65c4f2c52322e934ef48c36808deffdd810bfeca2a395caf0a04093e758dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "physique/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/show.html.twig"));

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
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            table{
                margin-top:2%;
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
            border:solid blue 0px;
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
        #liste{
            color:white;
            margin-top:10%;
            margin-left:85%;
        }
        #supprimer
        {
            margin-left:92%;
        }
        #modifier{
            margin-top:5%;
            color:white;
            margin-left:93%; 
        }
        .fiche
        {
            border:solid rgb(210, 220, 200) 0.5px;
            width:70%;
            margin-left:16%;
            margin-top:4%;
        }
        .row
        { 
            margin-left:9%;
            margin-top:2%;
        }
        .prenom
        {
            margin-left:0%;
        }
        strong
        {
            font-size:110%;
        }
        p
        {
            font-size:101%;
           
        }
        h1
        {
            font-size:170%;
            margin-left:16%;
            border:solid skyblue 1px;
            width:70%;
            height:15%;
            padding:1%;
           
        }
        .information
        {
             margin-top:8%;
             font-size:170%;
        }
        .pièces{
            margin-top:3%;
            font-size:170%;
        }
        center{
            margin-top:2%;
        }
        .actions{
            margin-left:0%
        }
        .mod
        {
            margin-left:62%;
            
        }
        .sup
        {
            margin-top:0.30%;
            margin-right:0%;
        }
</style>
    ";
        // line 125
        $this->displayBlock('sidebar', $context, $blocks);
        // line 132
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 133
            echo "        <h1 class=\"information\">Informations personnelles</h1>
            <div class=\"fiche\">
            <div class=\"row\">
                <div class=\"col-md-6\"><p><strong>Nom:</strong>    ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    ";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    ";
            // line 140
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    ";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Email:</strong>    ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Pays:</strong>    ";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Ville:</strong>    ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    ";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "tuteur", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenomTuteur", array()), "html", null, true);
            echo "</p></div>
            </div>
    
";
        } else {
            // line 156
            echo "        <h1 class=\"information\">Informations personnelles</h1>
         <div class=\"fiche\">
            <div class=\"row\">
                <div class=\"col-md-6\"><p><strong>Nom:</strong>    ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    ";
            // line 163
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Email:</strong>    ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Pays:</strong>    ";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Ville:</strong>    ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "tuteur", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    ";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenomTuteur", array()), "html", null, true);
            echo "</p></div>
            </div>
            </div>
";
        }
        // line 179
        echo "
        <h1 class=\"pièces\">Pièces jointes</h1>
            <center> Aucune pièces jointes trouvées</center>
        <div class=\"row actions\">
        <div class=\"col-md-1 mod\">
        ";
        // line 184
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 185
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 2)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        ";
        } else {
            // line 187
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 1)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        ";
        }
        // line 189
        echo "        </div>
        <div class=\"col-md-1 sup\">
        ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
        ";
        // line 193
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 126
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "physique/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 128,  341 => 127,  338 => 126,  329 => 125,  315 => 193,  310 => 191,  306 => 189,  300 => 187,  294 => 185,  292 => 184,  285 => 179,  278 => 175,  274 => 174,  268 => 171,  264 => 170,  258 => 167,  254 => 166,  246 => 163,  242 => 162,  236 => 159,  231 => 156,  224 => 152,  220 => 151,  214 => 148,  210 => 147,  204 => 144,  200 => 143,  192 => 140,  188 => 139,  182 => 136,  177 => 133,  175 => 132,  173 => 125,  50 => 4,  41 => 3,  11 => 1,);
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
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            table{
                margin-top:2%;
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
            border:solid blue 0px;
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
        #liste{
            color:white;
            margin-top:10%;
            margin-left:85%;
        }
        #supprimer
        {
            margin-left:92%;
        }
        #modifier{
            margin-top:5%;
            color:white;
            margin-left:93%; 
        }
        .fiche
        {
            border:solid rgb(210, 220, 200) 0.5px;
            width:70%;
            margin-left:16%;
            margin-top:4%;
        }
        .row
        { 
            margin-left:9%;
            margin-top:2%;
        }
        .prenom
        {
            margin-left:0%;
        }
        strong
        {
            font-size:110%;
        }
        p
        {
            font-size:101%;
           
        }
        h1
        {
            font-size:170%;
            margin-left:16%;
            border:solid skyblue 1px;
            width:70%;
            height:15%;
            padding:1%;
           
        }
        .information
        {
             margin-top:8%;
             font-size:170%;
        }
        .pièces{
            margin-top:3%;
            font-size:170%;
        }
        center{
            margin-top:2%;
        }
        .actions{
            margin-left:0%
        }
        .mod
        {
            margin-left:62%;
            
        }
        .sup
        {
            margin-top:0.30%;
            margin-right:0%;
        }
</style>
    {% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
        <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
{% endblock %}
{# <a href=\"{{ path('physique_index') }}\" class=\"btn btn-primary\" id=\"liste\">Retourner à la liste</a> #}
{% if physique.nom is null %}
        <h1 class=\"information\">Informations personnelles</h1>
            <div class=\"fiche\">
            <div class=\"row\">
                <div class=\"col-md-6\"><p><strong>Nom:</strong>    {{ physique.nom }}</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    {{ physique.prenom }}</p></div>
                <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    {% if physique.datnais %}{{ physique.datnais|date('Y-m-d') }}{% endif %}</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    {{  physique.telephone }}</p></div>
                <div class=\"col-md-6 \"><p><strong>Email:</strong>    {{ physique.email }}</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Pays:</strong>    {{  physique.pays }}</p></div>
                <div class=\"col-md-6 \"><p><strong>Ville:</strong>    {{ physique.ville }}</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    {{  physique.tuteur }}</p></div>
                <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    {{ physique.prenomTuteur }}</p></div>
            </div>
    
{% else %}
        <h1 class=\"information\">Informations personnelles</h1>
         <div class=\"fiche\">
            <div class=\"row\">
                <div class=\"col-md-6\"><p><strong>Nom:</strong>    {{ physique.nom }}</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    {{ physique.prenom }}</p></div>
                <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    {% if physique.datnais %}{{ physique.datnais|date('Y-m-d') }}{% endif %}</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    {{  physique.telephone }}</p></div>
                <div class=\"col-md-6 \"><p><strong>Email:</strong>    {{ physique.email }}</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Pays:</strong>    {{  physique.pays }}</p></div>
                <div class=\"col-md-6 \"><p><strong>Ville:</strong>    {{ physique.ville }}</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    {{  physique.tuteur }}</p></div>
                <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    {{ physique.prenomTuteur }}</p></div>
            </div>
            </div>
{% endif %}

        <h1 class=\"pièces\">Pièces jointes</h1>
            <center> Aucune pièces jointes trouvées</center>
        <div class=\"row actions\">
        <div class=\"col-md-1 mod\">
        {% if physique.nom is null %}
            <a href=\"{{ path('physique_edit', { 'id': physique.id ,'slug':2})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        {% else %}
            <a href=\"{{ path('physique_edit', { 'id': physique.id ,'slug':1})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        {% endif %}
        </div>
        <div class=\"col-md-1 sup\">
        {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
        </div>
        </div>
{% endblock %}
", "physique/show.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\show.html.twig");
    }
}
