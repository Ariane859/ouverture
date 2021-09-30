<?php

/* physique/result.html.twig */
class __TwigTemplate_c7898aee22b5f2665449fccf3388bbcfeba3f68ae8cd21b0742d2a5891804f4a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "physique/result.html.twig"));

        // line 1
        echo "<div class=\"table-responsive\">
    <table class=\"table table-striped table-hover table-bordered\" id=\"tableau\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Sigle</th>
                <th scope=\"col\">Raison sociale</th>
                <th scope=\"col\">Date de naissance</th>
                <th scope=\"col\">Telephone</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Pays</th>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">Tuteur</th>
                <th scope=\"col\">Prénom du tuteur</th>
            </tr>
        </thead>
        <tbody id=\"body\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physiques"] ?? $this->getContext($context, "physiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["physique"]) {
            // line 21
            echo "            <tr>
                <th scope=\"row\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "id", array()), "html", null, true);
            echo "</a></th>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "sigle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "raisonSociale", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["physique"], "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["physique"], "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "pays", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "tuteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["physique"], "prenomTuteur", array()), "html", null, true);
            echo "</td>
                <td>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_show", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size:23px;color:blue\"></i></a>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute($context["physique"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "physique/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  110 => 36,  106 => 35,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  59 => 23,  53 => 22,  50 => 21,  46 => 20,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"table-responsive\">
    <table class=\"table table-striped table-hover table-bordered\" id=\"tableau\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Sigle</th>
                <th scope=\"col\">Raison sociale</th>
                <th scope=\"col\">Date de naissance</th>
                <th scope=\"col\">Telephone</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Pays</th>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">Tuteur</th>
                <th scope=\"col\">Prénom du tuteur</th>
            </tr>
        </thead>
        <tbody id=\"body\">
        {% for physique in physiques %}
            <tr>
                <th scope=\"row\"><a href=\"{{ path('physique_show', { 'id': physique.id }) }}\">{{ physique.id }}</a></th>
                <td>{{ physique.nom }}</td>
                <td>{{ physique.prenom }}</td>
                <td>{{ physique.sigle }}</td>
                <td>{{ physique.raisonSociale }}</td>
                <td>{% if physique.datnais %}{{ physique.datnais|date('Y-m-d') }}{% endif %}</td>
                <td>{{ physique.telephone }}</td>
                <td>{{ physique.email }}</td>
                <td>{{ physique.pays }}</td>
                <td>{{ physique.ville }}</td>
                <td>{{ physique.tuteur }}</td>
                <td>{{ physique.prenomTuteur }}</td>
                <td>
                            <a href=\"{{ path('physique_show', { 'id': physique.id }) }}\"><i class=\"fa fa-eye\" style=\"font-size:23px;color:blue\"></i></a>
                            <a href=\"{{ path('physique_edit', { 'id': physique.id }) }}\"><i class=\"fa fa-edit\" style=\"font-size:24px;color:blue\"></i></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>", "physique/result.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\result.html.twig");
    }
}
