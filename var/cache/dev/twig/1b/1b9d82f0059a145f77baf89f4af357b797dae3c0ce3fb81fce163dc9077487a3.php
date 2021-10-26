<?php

/* piece/new.html.twig */
class __TwigTemplate_dcf90fb0765530137c746752c2f684a5ce020e699d177026e83883630ac5477b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/new.html.twig"));

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
        echo "    <style>
       ";
        // line 13
        echo "
    </style>
    <div class=\"container\">
            <h1>Pièces</h1>
            <hr></hr>
                <div class=\"col\">
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_new")));
        echo "
                        ";
        // line 21
        echo "                        <div class=\"form-group\">
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePiece", array()), 'row', array("label" => "Type Piece"));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <div id=\"refPiece\">
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "refPiece", array()), 'row', array("label" => "N° Pièce"));
        echo "
                            </div>
                        </div>                
                        <div class=\"form-group\">
                            <div id=\"datexpiration\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datexpiration", array()), 'row', array("label" => "Date d'expiration"));
        echo "
                           </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"datdeclaration\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datdeclaration", array()), 'row', array("label" => "Date de déclaration"));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"datedelivrance\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datedelivrance", array()), 'row', array("label" => "Date de délivrance"));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"emetteur\">
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emetteur", array()), 'row', array("label" => "Emetteur"));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"paysEmission\">
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysEmission", array()), 'row', array("label" => "Pays d'émission"));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"physique\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), 'row', array("label" => "Nom", "attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                            <div id=\"fichier\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichier", array()), 'row', array("label" => "Fichier", "attr" => array("class" => "form-control")));
        echo "
                            </div>
                        <input type=\"submit\" class=\"btn btn-outline-info\" value=\"Enregister\" />
                    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function(){
            \$('#piecebundle_piece_typePiece').on('change',function(e)
            {
                e.preventDefault();
                var typePiece = \$(this).val();
                console.log(typePiece);
                if (typePiece =='Photo')
                {
                    document.getElementById('datexpiration').style.display= \"none\";
                    document.getElementById('datedelivrance').style.display= \"none\";
                    document.getElementById('datdeclaration').style.display= \"none\";
                    document.getElementById('refPiece').style.display= \"none\";
                    document.getElementById('emetteur').style.display= \"none\";
                    document.getElementById('paysEmission').style.display= \"none\";
                    document.getElementById('physique').style.display= \"none\";
                }
                else if(typePiece =='Carte d\\'identité' || typePiece=='Passeport')
                {
                    document.getElementById('refPiece').style.display= \"block\";
                    document.getElementById('emetteur').style.display= \"block\";
                     document.getElementById('paysEmission').style.display= \"block\";
                    document.getElementById('physique').style.display= \"block\";
                    document.getElementById('datedelivrance').style.display= \"none\";
                    document.getElementById('datdeclaration').style.display= \"none\";
                    document.getElementById('datexpiration').style.display= \"block\";
                }
                else if(typePiece=='Attestation de résidence') {
                     document.getElementById('refPiece').style.display= \"block\";
                    document.getElementById('emetteur').style.display= \"block\";
                     document.getElementById('paysEmission').style.display= \"block\";
                    document.getElementById('physique').style.display= \"block\";
                    document.getElementById('datedelivrance').style.display= \"block\";
                    document.getElementById('datdeclaration').style.display= \"none\";
                    document.getElementById('datexpiration').style.display= \"none\";

                }
                else
                {
                     document.getElementById('refPiece').style.display= \"block\";
                    document.getElementById('emetteur').style.display= \"block\";
                     document.getElementById('paysEmission').style.display= \"block\";
                    document.getElementById('physique').style.display= \"block\";
                    document.getElementById('datedelivrance').style.display= \"none\";
                    document.getElementById('datdeclaration').style.display= \"block\";
                    document.getElementById('datexpiration').style.display= \"none\";
                }
            })
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "piece/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 69,  150 => 68,  136 => 63,  130 => 60,  123 => 56,  115 => 51,  107 => 46,  99 => 41,  91 => 36,  83 => 31,  75 => 26,  68 => 22,  65 => 21,  61 => 19,  53 => 13,  50 => 4,  41 => 3,  11 => 1,);
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
       {# #datedelivrance
       {
           display:none;
       }
       #datdeclaration
       {
           display:none;
       } #}

    </style>
    <div class=\"container\">
            <h1>Pièces</h1>
            <hr></hr>
                <div class=\"col\">
                    {{ form_start(form,{'action': path('piece_new')}) }}
                        {# {{ form_widget(form) }} #}
                        <div class=\"form-group\">
                            {{ form_row(form.typePiece, { 'label': 'Type Piece'})}}
                        </div>
                        <div class=\"form-group\">
                            <div id=\"refPiece\">
                                {{ form_row(form.refPiece, { 'label': 'N° Pièce'})}}
                            </div>
                        </div>                
                        <div class=\"form-group\">
                            <div id=\"datexpiration\">
                                {{ form_row(form.datexpiration, { 'label': 'Date d\\'expiration'})}}
                           </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"datdeclaration\">
                                {{ form_row(form.datdeclaration, { 'label': 'Date de déclaration'})}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"datedelivrance\">
                                {{ form_row(form.datedelivrance, { 'label': 'Date de délivrance'})}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"emetteur\">
                                {{ form_row(form.emetteur, { 'label': 'Emetteur'})}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"paysEmission\">
                                {{ form_row(form.paysEmission, { 'label': 'Pays d\\'émission'})}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"physique\">
                                {{ form_row(form.physique, { 'label': 'Nom', 'attr': {'class': 'form-control'} } )}}
                            </div>
                        </div>
                            <div id=\"fichier\">
                                {{ form_row(form.fichier, { 'label': 'Fichier', 'attr': {'class': 'form-control'} } )}}
                            </div>
                        <input type=\"submit\" class=\"btn btn-outline-info\" value=\"Enregister\" />
                    {{ form_end(form) }}
                </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function(){
            \$('#piecebundle_piece_typePiece').on('change',function(e)
            {
                e.preventDefault();
                var typePiece = \$(this).val();
                console.log(typePiece);
                if (typePiece =='Photo')
                {
                    document.getElementById('datexpiration').style.display= \"none\";
                    document.getElementById('datedelivrance').style.display= \"none\";
                    document.getElementById('datdeclaration').style.display= \"none\";
                    document.getElementById('refPiece').style.display= \"none\";
                    document.getElementById('emetteur').style.display= \"none\";
                    document.getElementById('paysEmission').style.display= \"none\";
                    document.getElementById('physique').style.display= \"none\";
                }
                else if(typePiece =='Carte d\\'identité' || typePiece=='Passeport')
                {
                    document.getElementById('refPiece').style.display= \"block\";
                    document.getElementById('emetteur').style.display= \"block\";
                     document.getElementById('paysEmission').style.display= \"block\";
                    document.getElementById('physique').style.display= \"block\";
                    document.getElementById('datedelivrance').style.display= \"none\";
                    document.getElementById('datdeclaration').style.display= \"none\";
                    document.getElementById('datexpiration').style.display= \"block\";
                }
                else if(typePiece=='Attestation de résidence') {
                     document.getElementById('refPiece').style.display= \"block\";
                    document.getElementById('emetteur').style.display= \"block\";
                     document.getElementById('paysEmission').style.display= \"block\";
                    document.getElementById('physique').style.display= \"block\";
                    document.getElementById('datedelivrance').style.display= \"block\";
                    document.getElementById('datdeclaration').style.display= \"none\";
                    document.getElementById('datexpiration').style.display= \"none\";

                }
                else
                {
                     document.getElementById('refPiece').style.display= \"block\";
                    document.getElementById('emetteur').style.display= \"block\";
                     document.getElementById('paysEmission').style.display= \"block\";
                    document.getElementById('physique').style.display= \"block\";
                    document.getElementById('datedelivrance').style.display= \"none\";
                    document.getElementById('datdeclaration').style.display= \"block\";
                    document.getElementById('datexpiration').style.display= \"none\";
                }
            })
        })
    </script>
{% endblock %}
", "piece/new.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\piece\\new.html.twig");
    }
}
