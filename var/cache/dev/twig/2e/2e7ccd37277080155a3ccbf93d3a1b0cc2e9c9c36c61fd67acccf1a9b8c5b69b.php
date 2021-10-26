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
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .sidebar
            {
                background-color: teal;
                width: 100%;
                top: 0;
                left: 0;
                padding:1%;
                position:relative;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            a
            {
                color: white;
                text-decoration: none;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            a:hover
            {
                color:white;
                text-decoration:none;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .accueil
            {
                color:white;
                text-decoration:none;
                font-size:1.7rem;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .accueil:hover
            {
                color:white;
                text-decoration:none;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .formulaire 
            {
                color: black;
                margin-top:1%;
                margin-left:11%;
                width:80%;
                border:solid white 1px;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            #ouvrir
            {
                color:white;
                text-decoration:none;
                margin-left:80%;
                font-size:1.2rem;
                color:white;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            #ouvrir:hover
                {
                    color:white;
                    text-decoration:none;
                    font-family: Georgia, Times, 'Times New Roman', serif;
                }
            #index
            {
                color: white;
                margin-top:2%;
                margin-left:94%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            h2
            {
                margin-left:10%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .piece
            {
                margin-top:5%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .foot
            {
               
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            ";
        // line 95
        echo "            #supprimer
            {
                margin-left:1%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            ";
        // line 108
        echo "            ";
        // line 111
        echo "            ";
        // line 114
        echo "            #ajout
            {
                margin-left:82%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            #information
            {
                font-family:  Georgia, Times, 'Times New Roman', serif;
            }
            tr
            {
                font-size:95%;
            }
            #valider
            {
                margin-left:80%;
            }
            #table 
            {
                margin-left:3%;
            }
    </style>

    ";
        // line 137
        $this->displayBlock('sidebar', $context, $blocks);
        // line 143
        echo "
            <a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_index");
        echo "\"class=\"btn btn-primary\" id=\"index\">Liste</a>
<div class=\"container\">
    <h2 id=\"information\">Informations personnelles</h2>
    <div class=\"formulaire\">
        ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
            ";
        // line 149
        if ($this->getAttribute(($context["edit_form"] ?? null), "nom", array(), "any", true, true)) {
            // line 150
            echo "                <div id=\"editform_mineur\">
                ";
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mineur", array()), 'row');
            echo "
                </div>
            ";
        }
        // line 154
        echo "        ";
        // line 159
        echo "            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 161
        if ($this->getAttribute(($context["edit_form"] ?? null), "nom", array(), "any", true, true)) {
            // line 162
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", array()), 'row');
            echo "
                    ";
        }
        // line 164
        echo "                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 166
        if ($this->getAttribute(($context["edit_form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 167
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prenom", array()), 'row');
            echo "
                    ";
        }
        // line 169
        echo "                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 173
        if ($this->getAttribute(($context["edit_form"] ?? null), "sigle", array(), "any", true, true)) {
            // line 174
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sigle", array()), 'row');
            echo "
                    ";
        }
        // line 176
        echo "                </div>
                    <div class=\"form-group col-md-6\">
                    ";
        // line 178
        if ($this->getAttribute(($context["edit_form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 179
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "raisonSociale", array()), 'row');
            echo "
                    ";
        }
        // line 181
        echo "                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "datnais", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "telephone", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pays", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ville", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <div id=\"tuteur\">
                        ";
        // line 205
        if ($this->getAttribute(($context["edit_form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 206
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tuteur", array()), 'row');
            echo "
                        ";
        }
        // line 208
        echo "                    </div>
                </div>
                <div class=\"form-group col-md-6\">
                    <div id=\"prenom_tuteur\">
                        ";
        // line 212
        if ($this->getAttribute(($context["edit_form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 213
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prenomTuteur", array()), 'row');
            echo "
                        ";
        }
        // line 215
        echo "                    </div>
                </div>
            </div>
            <div class=\"row foot\">
                <input type=\"submit\" class=\"btn btn-primary\" id=\"valider\" value=\"Valider\" />
                ";
        // line 220
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger supp\" id=\"supprimer\">
               ";
        // line 222
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </div>
        ";
        // line 224
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
    <div class=\"piece\">
    ";
        // line 228
        echo "    <h2>Pièces jointes</h2>
        ";
        // line 229
        if ( !(null === ($context["pieces"] ?? $this->getContext($context, "pieces")))) {
            // line 230
            echo "                <table class=\"table table-striped table-hover table-sm table-responsive-lg thead-light\" id=\"table\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Type Pièce</th>
                    <th>N° Pièce</th>
                    <th>Date Expiration</th>
                    <th>Date Déclaration</th>
                    <th>Date Délivrance</th>
                    <th>Emetteur</th>
                    <th>Pays d'émission</th>
                    <th>Fichier</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pieces"] ?? $this->getContext($context, "pieces")));
            foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
                // line 248
                echo "                <tr>
                    <td><a href=\"";
                // line 249
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_show", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
                echo "\" style=\"color:black;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "id", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 250
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typePiece", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 251
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "refPiece", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 252
                if ($this->getAttribute($context["piece"], "datexpiration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datexpiration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 253
                if ($this->getAttribute($context["piece"], "datdeclaration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datdeclaration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 254
                if ($this->getAttribute($context["piece"], "datedelivrance", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datedelivrance", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "emetteur", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "paysEmission", array()), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 257
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["piece"], "fichier", array()))), "html", null, true);
                echo "\" style=\"color:skyblue\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "fichier", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "physique", array()), "html", null, true);
                echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
                // line 262
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_show", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 265
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_edit", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "            </tbody> 
        </table>
        ";
        } else {
            // line 274
            echo "            <p>Aucune pièce trouvé!</p>
        ";
        }
        // line 276
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_new");
        echo "\" id=\"ajout\" data-toggle=\"modal\" class=\"btn btn-primary\">Ajouter</a>
     ";
        // line 278
        echo "            <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                         <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\" id=\"body-edit\">
                            ";
        // line 288
        echo "                             ";
        $this->loadTemplate("piece/new.html.twig", "physique/edit.html.twig", 288)->display($context);
        // line 289
        echo "                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>       
";
        // line 298
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 138
        echo "        <div class=\"sidebar\">
            <a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
            <a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 298
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        // line 299
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script> 
     
\$(document).ready(function(){

    \$(\"#ajout\").click(function(ev){
        ev.preventDefault();
        \$('#type').val(\"\")
        \$('#myModal').modal('show')

        })
    });
</script>   
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
        return array (  532 => 299,  521 => 298,  508 => 140,  504 => 139,  501 => 138,  492 => 137,  482 => 298,  471 => 289,  468 => 288,  457 => 278,  452 => 276,  448 => 274,  443 => 271,  431 => 265,  425 => 262,  418 => 258,  412 => 257,  408 => 256,  404 => 255,  398 => 254,  392 => 253,  386 => 252,  382 => 251,  378 => 250,  372 => 249,  369 => 248,  365 => 247,  346 => 230,  344 => 229,  341 => 228,  335 => 224,  330 => 222,  325 => 220,  318 => 215,  312 => 213,  310 => 212,  304 => 208,  298 => 206,  296 => 205,  287 => 199,  281 => 196,  274 => 192,  267 => 188,  261 => 185,  255 => 181,  249 => 179,  247 => 178,  243 => 176,  237 => 174,  235 => 173,  229 => 169,  223 => 167,  221 => 166,  217 => 164,  211 => 162,  209 => 161,  205 => 159,  203 => 154,  197 => 151,  194 => 150,  192 => 149,  188 => 148,  181 => 144,  178 => 143,  176 => 137,  151 => 114,  149 => 111,  147 => 108,  140 => 95,  51 => 4,  42 => 3,  11 => 1,);
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
            .sidebar
            {
                background-color: teal;
                width: 100%;
                top: 0;
                left: 0;
                padding:1%;
                position:relative;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            a
            {
                color: white;
                text-decoration: none;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            a:hover
            {
                color:white;
                text-decoration:none;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .accueil
            {
                color:white;
                text-decoration:none;
                font-size:1.7rem;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .accueil:hover
            {
                color:white;
                text-decoration:none;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .formulaire 
            {
                color: black;
                margin-top:1%;
                margin-left:11%;
                width:80%;
                border:solid white 1px;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            #ouvrir
            {
                color:white;
                text-decoration:none;
                margin-left:80%;
                font-size:1.2rem;
                color:white;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            #ouvrir:hover
                {
                    color:white;
                    text-decoration:none;
                    font-family: Georgia, Times, 'Times New Roman', serif;
                }
            #index
            {
                color: white;
                margin-top:2%;
                margin-left:94%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            h2
            {
                margin-left:10%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .piece
            {
                margin-top:5%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            .foot
            {
               
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            {# .valider
            {
                margin-right:90%;
            } #}
            #supprimer
            {
                margin-left:1%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            {# #physiquebundle_physique_tuteur
            {
                cursor: no-drop;
            }
            #physiquebundle_physique_prenomTuteur
            {
                cursor: no-drop;
            } #}
            {# #editform_mineur {
                display:none;
            }  #}
            {# #prenom_tuteur {
                display:none;
            } #}
            #ajout
            {
                margin-left:82%;
                font-family: Georgia, Times, 'Times New Roman', serif;
            }
            #information
            {
                font-family:  Georgia, Times, 'Times New Roman', serif;
            }
            tr
            {
                font-size:95%;
            }
            #valider
            {
                margin-left:80%;
            }
            #table 
            {
                margin-left:3%;
            }
    </style>

    {% block sidebar %}
        <div class=\"sidebar\">
            <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
            <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
        </div>
    {% endblock %}

            <a href=\"{{ path('physique_index') }}\"class=\"btn btn-primary\" id=\"index\">Liste</a>
<div class=\"container\">
    <h2 id=\"information\">Informations personnelles</h2>
    <div class=\"formulaire\">
        {{ form_start(edit_form) }}
            {% if edit_form.nom is defined %}
                <div id=\"editform_mineur\">
                {{ form_row(edit_form.mineur)}}
                </div>
            {% endif %}
        {# <div class=\"form-group col-md-6\">
                <div id=\"editform_mineur\">
                    {{ form_row(edit_form.mineur)}}
                </div>
            </div> #}
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
            <div class=\"row foot\">
                <input type=\"submit\" class=\"btn btn-primary\" id=\"valider\" value=\"Valider\" />
                {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger supp\" id=\"supprimer\">
               {{ form_end(delete_form) }}
            </div>
        {{ form_end(edit_form) }}
    </div>
    <div class=\"piece\">
    {# data-toggle=\"modal\" #}
    <h2>Pièces jointes</h2>
        {% if pieces is not null %}
                <table class=\"table table-striped table-hover table-sm table-responsive-lg thead-light\" id=\"table\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Type Pièce</th>
                    <th>N° Pièce</th>
                    <th>Date Expiration</th>
                    <th>Date Déclaration</th>
                    <th>Date Délivrance</th>
                    <th>Emetteur</th>
                    <th>Pays d'émission</th>
                    <th>Fichier</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for piece in pieces %}
                <tr>
                    <td><a href=\"{{ path('piece_show', { 'id': piece.id }) }}\" style=\"color:black;\">{{ piece.id }}</a></td>
                    <td>{{ piece.typePiece }}</td>
                    <td>{{ piece.refPiece }}</td>
                    <td>{% if piece.datexpiration %}{{ piece.datexpiration|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{% if piece.datdeclaration %}{{ piece.datdeclaration|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{% if piece.datedelivrance %}{{ piece.datedelivrance|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{{ piece.emetteur }}</td>
                    <td>{{ piece.paysEmission }}</td>
                    <td><a href=\"{{ asset('uploads/brochures/' ~ piece.fichier) }}\" style=\"color:skyblue\">{{ piece.fichier }}</a></td>
                    <td>{{ piece.physique }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('piece_show', { 'id': piece.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('piece_edit', { 'id': piece.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody> 
        </table>
        {% else %}
            <p>Aucune pièce trouvé!</p>
        {% endif %}
    <a href=\"{{ path('piece_new') }}\" id=\"ajout\" data-toggle=\"modal\" class=\"btn btn-primary\">Ajouter</a>
     {# modal #}
            <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                         <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\" id=\"body-edit\">
                            {# {{render(controller('PieceBundle:Controller:PieceController::newAction'))}} #}
                             {% include 'piece/new.html.twig' %}
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>       
{% block javascripts %} 
{{parent() }}

<script> 
     
\$(document).ready(function(){

    \$(\"#ajout\").click(function(ev){
        ev.preventDefault();
        \$('#type').val(\"\")
        \$('#myModal').modal('show')

        })
    });
</script>   
{% endblock %}
{% endblock %}

", "physique/edit.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\edit.html.twig");
    }
}
