<?php

/* physique/recherche.html.twig */
class __TwigTemplate_ea0ac169dfacdf535560c27c7a95cc0c73a48835036b128517248ece61be7676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/recherche.html.twig"));

        // line 35
        if ((twig_length_filter($this->env, ($context["physiques"] ?? $this->getContext($context, "physiques"))) == 0)) {
            // line 36
            echo "            <h4>Aucun résulat pour votre recherche.</h4>
           ";
        } else {
            // line 38
            echo "               <h3 class=\"mt-3\">Vos résulats de recherche :</h3>
               ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["physiques"] ?? $this->getContext($context, "physiques")));
            foreach ($context['_seq'] as $context["_key"] => $context["physique"]) {
                // line 40
                echo "                   <div class=\"mt-3 p-3 bg-light border rounded\">
                       <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
                echo "\">
                              <h6 class=\"text-dark\"><i class=\"bi bi-arrow-down-right-square-fill text-primary\"></i> ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "nom", array()), "html", null, true);
                echo "</h6>
                       </a>
                   </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "physique/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 46,  45 => 42,  41 => 41,  38 => 40,  34 => 39,  31 => 38,  27 => 36,  25 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends 'base.html.twig' %}
{% block content %}
<table class=\"table table-bordered table-striped\">
<tr>
<th> id </th>
<th> Nom </th>
<th> Prenom </th>
<th> Email </th>
<th> Raison sociale </th>
<th> Sigle </th>
<th> Telephone </th>
<th> Pays </th>
<th> Ville </th>
<th> Tuteur </th>
<th> Prénom du tuteur</th>
</tr>
<tr class=\"active\"> 
    <td> {{ physiques.nom }} </td> 
    <td> {{ physiques.prenom }} </td>
    <td> {{ physiques.email }} </td> 
    <td> {{ physiques.raisonSociale }} </td> 
    <td> {{ physiques.sigle }} </td> 
    <td> {{ physiques.telephone }} </td>
    <td> {{ physiques.pays }} </td>
    <td> {{ physiques.ville }} </td>
    <td> {{ physiques.tuteur }} </td>
    <td>{{ physiques.prenomTuteur }}</td>
    <td> <a href=\"{{ path('physique_edit') }}\" class=\"btn btn-primary\">Modifier</a> 
    </td> <td> <a href=\"{{ path('physique_delete',{'id': physique.id}) }}\" class=\"btn btn-danger\">Supprimer</a> 
    </td>  
</tr>
</table>
 
{% endblock %} #}
{% if physiques | length == 0 %}
            <h4>Aucun résulat pour votre recherche.</h4>
           {% else %}
               <h3 class=\"mt-3\">Vos résulats de recherche :</h3>
               {% for physique in physiques %}
                   <div class=\"mt-3 p-3 bg-light border rounded\">
                       <a href=\"{{ path('physique_show', {'id': physique.id}) }}\">
                              <h6 class=\"text-dark\"><i class=\"bi bi-arrow-down-right-square-fill text-primary\"></i> {{ physique.nom }}</h6>
                       </a>
                   </div>
              {% endfor %}
          {% endif %}", "physique/recherche.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\recherche.html.twig");
    }
}
