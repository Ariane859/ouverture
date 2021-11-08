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
        * {
            /*font-family: Georgia, Times, 'Times New Roman', serif;*/
            font-family: 'Times New Roman';
        }
            body
            {
                
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
                text-decoration:none;
                font-size:1.7rem;
                
            }
            .accueil:hover
            {
                color:white;
                text-decoration:none;
               
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
                color:white;
                text-decoration:none;
                margin-left:75%;
                font-size:1.2rem;
                color:white;
               
            }
            #ouvrir:hover
                {
                    color:white;
                    text-decoration:none;
                    
                }
            #index
            {
                color: white;
                margin-top:2%;
                margin-left:74%;
                
            }
            h2
            {
                margin-left:10%;
                
            }
            .piece
            {
                margin-top:5%;
                
            }
            .foot
            {
               
               
            }
            ";
        // line 99
        echo "            #supprimer
            {
                margin-left:2%;
               
            }
            ";
        // line 112
        echo "            ";
        // line 115
        echo "            ";
        // line 118
        echo "            #ajout
            {
                margin-left:97%;
               
            }
            #information
            {
                
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
            #ajout:hover
            {
                color:white;
            }
            #notification
            {
               margin-left:10%;
            }
    </style>

    ";
        // line 149
        $this->displayBlock('sidebar', $context, $blocks);
        // line 168
        echo "
            <a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_index");
        echo "\"class=\"btn btn-primary\" id=\"index\">Liste</a>
<div class=\"container\">
            ";
        // line 172
        echo "            <div class=\"modal1 fade\" id=\"modalNotif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\" id=\"body_notif\">
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
             </div>
        </div>

    <h2 id=\"information\">Informations personnelles</h2>
    <div class=\"formulaire\">
        ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
            ";
        // line 192
        if ($this->getAttribute(($context["edit_form"] ?? null), "nom", array(), "any", true, true)) {
            // line 193
            echo "                <div id=\"editform_mineur\">
                ";
            // line 194
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mineur", array()), 'row');
            echo "
                </div>
            ";
        }
        // line 197
        echo "        ";
        // line 202
        echo "            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 204
        if ($this->getAttribute(($context["edit_form"] ?? null), "nom", array(), "any", true, true)) {
            // line 205
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", array()), 'row');
            echo "
                    ";
        }
        // line 207
        echo "                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 209
        if ($this->getAttribute(($context["edit_form"] ?? null), "prenom", array(), "any", true, true)) {
            // line 210
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prenom", array()), 'row');
            echo "
                    ";
        }
        // line 212
        echo "                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 216
        if ($this->getAttribute(($context["edit_form"] ?? null), "sigle", array(), "any", true, true)) {
            // line 217
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sigle", array()), 'row');
            echo "
                    ";
        }
        // line 219
        echo "                </div>
                    <div class=\"form-group col-md-6\">
                    ";
        // line 221
        if ($this->getAttribute(($context["edit_form"] ?? null), "raisonSociale", array(), "any", true, true)) {
            // line 222
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "raisonSociale", array()), 'row');
            echo "
                    ";
        }
        // line 224
        echo "                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "datnais", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "telephone", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pays", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ville", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <div id=\"tuteur\">
                        ";
        // line 248
        if ($this->getAttribute(($context["edit_form"] ?? null), "tuteur", array(), "any", true, true)) {
            // line 249
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tuteur", array()), 'row');
            echo "
                        ";
        }
        // line 251
        echo "                    </div>
                </div>
                <div class=\"form-group col-md-6\">
                    <div id=\"prenom_tuteur\">
                        ";
        // line 255
        if ($this->getAttribute(($context["edit_form"] ?? null), "prenomTuteur", array(), "any", true, true)) {
            // line 256
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prenomTuteur", array()), 'row');
            echo "
                        ";
        }
        // line 258
        echo "                    </div>
                </div>
            </div>
            <div class=\"row foot\">
                <input type=\"submit\" class=\"btn btn-primary\" id=\"valider\" value=\"Valider\" />
        ";
        // line 263
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
        ";
        // line 264
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
        ";
        // line 266
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo " 
            </div>
    </div>
    <div class=\"piece\">
    ";
        // line 271
        echo "    <h2>Pièces jointes</h2>
    <a data-target=\"";
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_new");
        echo "\" data-tooltip=\"voir\" id=\"ajout\" ";
        echo " class=\"tooltipped modal-trigger\" href=\"#myModal\">";
        echo " <i class=\"fa fa-plus-square\" style=\"font-size:36px\"></i> </a>
    ";
        // line 273
        if ( !(null === ($context["pieces"] ?? $this->getContext($context, "pieces")))) {
            // line 274
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
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pieces"] ?? $this->getContext($context, "pieces")));
            foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
                // line 292
                echo "                <tr>
                    <td><a href=\"";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_show", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
                echo "\" style=\"color:black;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "id", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 294
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typePiece", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 295
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "refPiece", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 296
                if ($this->getAttribute($context["piece"], "datexpiration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datexpiration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 297
                if ($this->getAttribute($context["piece"], "datdeclaration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datdeclaration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 298
                if ($this->getAttribute($context["piece"], "datedelivrance", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datedelivrance", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 299
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "emetteur", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 300
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "paysEmission", array()), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["piece"], "fichier", array()))), "html", null, true);
                echo "\" style=\"color:skyblue\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "fichier", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 302
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "physique", array()), "html", null, true);
                echo "</td>
                    <td>
                        <ul>
                            ";
                // line 308
                echo "                                <a data-target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-info tooltipped modal-trigger1 ajout1\" id=\"\" data-toggle=\"modal\" href=\"#myModal1\">Modifier</a>
                            ";
                // line 310
                echo "                            ";
                // line 311
                echo "                                ";
                // line 312
                echo "                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_delete", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
                echo "\" onsubmit=\"return confirm('Voulez vous vraiment supprimer?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 314
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
                echo "\">
                                  
                                    <button class=\"btn btn-info\" style=\"padding-left:9%; width:99.9%;margin-top:3%\">Supprimer</button>
                                </form>
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "            </tbody> 
        </table>
        ";
        } else {
            // line 325
            echo "            <p>Aucune pièce trouvé!</p>
        ";
        }
        // line 327
        echo "    
     ";
        // line 329
        echo "     <div class=\"modal fade modal1\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
              <div class=\"modal-header\">
                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                 <span aria-hidden=\"true\">&times;</span>
                 </button>
             </div>
             <div class=\"modal-body\" id=\"body-edit1\">
             </div>
             <div class=\"modal-footer\">
                 <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
             </div>
         </div>
      </div>
 </div>

            <div class=\"modal fade modal2\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                         <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\" id=\"body-new\">
                            ";
        // line 356
        echo "                             ";
        // line 357
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 150
        echo "        <div class=\"sidebar\">
        <div class=\"row cl\">
        <div class=\"col-md-2\">
            <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        </div>
        <div class=\"col-md-4\">
    <a data-target=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_showMessage", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()))), "html", null, true);
        echo "\" data-tooltip=\"voir\" class=\"tooltipped modal-trigger btn btn-outline-light my-6 my-sm-6\" href=\"#modalNotif\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"position: absolute;
top: -10px;padding: 5px 10px;border-radius: 50%;background:red;color: white;\" id=\"notific\">";
        // line 157
        echo twig_escape_filter($this->env, ($context["comptesNotifs"] ?? $this->getContext($context, "comptesNotifs")), "html", null, true);
        echo "</span></a>
            ";
        // line 160
        echo "        </div>
        <div class=\"col-md-6\">
            <a href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
        </div>
    </div>
        </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 367
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        // line 368
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script> 
     
\$(document).ready(function(){

    \$(\".ajout1\").click(function(){
        //ev.preventDefault();
        //On initialise les modales materialize
        //\$('.modal1').modal();
        //On récupère l'url depuis la propriété \"Data-target\" de la balise html a
        const url = \$(this).attr('data-target');
        const absUrl = \"http://localhost/ouverture/web/app_dev.php/piece/\"+url+\"/edit\"
        console.log(absUrl);
        
         \$.ajax(
        {
            type: 'get', 
            url: absUrl,
            success: function (data) { 
               //console.log(data)
               \$('#body-edit1').html(data)
               \$('#myModal1').modal('show')

            },
            error: function (errorMessage) { 
            }
        }); 

        })
        })

        \$(document).ready(function(){
    \$(\".modal-trigger\").click(function(){
        
        \$('.modal2').modal();
        
        url = \$(this).attr('data-target');
        \$.get(url, function (data) {
           
            \$('#body-new').html(data);

            \$('#myModal').modal('open');
        });

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
        return array (  610 => 368,  599 => 367,  583 => 162,  579 => 160,  575 => 157,  571 => 156,  565 => 153,  560 => 150,  551 => 149,  532 => 357,  530 => 356,  502 => 329,  499 => 327,  495 => 325,  490 => 322,  476 => 314,  470 => 312,  468 => 311,  466 => 310,  461 => 308,  455 => 302,  449 => 301,  445 => 300,  441 => 299,  435 => 298,  429 => 297,  423 => 296,  419 => 295,  415 => 294,  409 => 293,  406 => 292,  402 => 291,  383 => 274,  381 => 273,  375 => 272,  372 => 271,  365 => 266,  360 => 264,  356 => 263,  349 => 258,  343 => 256,  341 => 255,  335 => 251,  329 => 249,  327 => 248,  318 => 242,  312 => 239,  305 => 235,  298 => 231,  292 => 228,  286 => 224,  280 => 222,  278 => 221,  274 => 219,  268 => 217,  266 => 216,  260 => 212,  254 => 210,  252 => 209,  248 => 207,  242 => 205,  240 => 204,  236 => 202,  234 => 197,  228 => 194,  225 => 193,  223 => 192,  219 => 191,  198 => 172,  193 => 169,  190 => 168,  188 => 149,  155 => 118,  153 => 115,  151 => 112,  144 => 99,  51 => 4,  42 => 3,  11 => 1,);
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
        * {
            /*font-family: Georgia, Times, 'Times New Roman', serif;*/
            font-family: 'Times New Roman';
        }
            body
            {
                
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
                text-decoration:none;
                font-size:1.7rem;
                
            }
            .accueil:hover
            {
                color:white;
                text-decoration:none;
               
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
                color:white;
                text-decoration:none;
                margin-left:75%;
                font-size:1.2rem;
                color:white;
               
            }
            #ouvrir:hover
                {
                    color:white;
                    text-decoration:none;
                    
                }
            #index
            {
                color: white;
                margin-top:2%;
                margin-left:74%;
                
            }
            h2
            {
                margin-left:10%;
                
            }
            .piece
            {
                margin-top:5%;
                
            }
            .foot
            {
               
               
            }
            {# .valider
            {
                margin-right:90%;
            } #}
            #supprimer
            {
                margin-left:2%;
               
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
                margin-left:97%;
               
            }
            #information
            {
                
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
            #ajout:hover
            {
                color:white;
            }
            #notification
            {
               margin-left:10%;
            }
    </style>

    {% block sidebar %}
        <div class=\"sidebar\">
        <div class=\"row cl\">
        <div class=\"col-md-2\">
            <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
        </div>
        <div class=\"col-md-4\">
    <a data-target=\"{{ path('physique_showMessage', { 'id': physique.id }) }}\" data-tooltip=\"voir\" class=\"tooltipped modal-trigger btn btn-outline-light my-6 my-sm-6\" href=\"#modalNotif\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"position: absolute;
top: -10px;padding: 5px 10px;border-radius: 50%;background:red;color: white;\" id=\"notific\">{{ comptesNotifs }}</span></a>
            {# <button type=\"button\" class=\"btn btn-outline-light my-6 my-sm-6\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"position: absolute;
            top: -10px;padding: 5px 10px;border-radius: 50%;background:red;color: white;\" ></span></button> #}
        </div>
        <div class=\"col-md-6\">
            <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
        </div>
    </div>
        </div>
        </div>
    {% endblock %}

            <a href=\"{{ path('physique_index') }}\"class=\"btn btn-primary\" id=\"index\">Liste</a>
<div class=\"container\">
            {# modal notification#}
            <div class=\"modal1 fade\" id=\"modalNotif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\" id=\"body_notif\">
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
             </div>
        </div>

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
        {{ form_end(edit_form) }}
        {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
        {{ form_end(delete_form) }} 
            </div>
    </div>
    <div class=\"piece\">
    {# data-toggle=\"modal\" #}
    <h2>Pièces jointes</h2>
    <a data-target=\"{{ path('piece_new') }}\" data-tooltip=\"voir\" id=\"ajout\" {#data-toggle=\"modal\"#} class=\"tooltipped modal-trigger\" href=\"#myModal\">{# <i class=\"fa fa-plus\" style=\"font-size:26px\" aria-hidden=\"true\"></i>#} <i class=\"fa fa-plus-square\" style=\"font-size:36px\"></i> </a>
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
                            {# <li>
                                <a href=\"{{ path('piece_show', { 'id': piece.id }) }}\">show</a>
                            </li> #}
                                <a data-target=\"{{ piece.id}}\" class=\"btn btn-info tooltipped modal-trigger1 ajout1\" id=\"\" data-toggle=\"modal\" href=\"#myModal1\">Modifier</a>
                            {# <a data-key=\"{{piece.id}}\" class=\"btn btn-info modification\" style=\"color:white;\">Modifier</a> #}
                            {# href=\"{{ path('piece_edit', { 'id': piece.id }) }}\" #}
                                {# {% include 'physique/delete.html.twig' %} #}
                                <form method=\"post\" action=\"{{ path('piece_delete', {'id': piece.id}) }}\" onsubmit=\"return confirm('Voulez vous vraiment supprimer?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ piece.id) }}\">
                                  
                                    <button class=\"btn btn-info\" style=\"padding-left:9%; width:99.9%;margin-top:3%\">Supprimer</button>
                                </form>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody> 
        </table>
        {% else %}
            <p>Aucune pièce trouvé!</p>
        {% endif %}
    
     {# modal #}
     <div class=\"modal fade modal1\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
              <div class=\"modal-header\">
                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                 <span aria-hidden=\"true\">&times;</span>
                 </button>
             </div>
             <div class=\"modal-body\" id=\"body-edit1\">
             </div>
             <div class=\"modal-footer\">
                 <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
             </div>
         </div>
      </div>
 </div>

            <div class=\"modal fade modal2\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                         <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\" id=\"body-new\">
                            {# {{render(controller('PieceBundle:Controller:PieceController::newAction'))}} #}
                             {# {% include 'piece/new.html.twig' %} #}
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
{% endblock %}    
{% block javascripts %} 
{{parent() }}

<script> 
     
\$(document).ready(function(){

    \$(\".ajout1\").click(function(){
        //ev.preventDefault();
        //On initialise les modales materialize
        //\$('.modal1').modal();
        //On récupère l'url depuis la propriété \"Data-target\" de la balise html a
        const url = \$(this).attr('data-target');
        const absUrl = \"http://localhost/ouverture/web/app_dev.php/piece/\"+url+\"/edit\"
        console.log(absUrl);
        
         \$.ajax(
        {
            type: 'get', 
            url: absUrl,
            success: function (data) { 
               //console.log(data)
               \$('#body-edit1').html(data)
               \$('#myModal1').modal('show')

            },
            error: function (errorMessage) { 
            }
        }); 

        })
        })

        \$(document).ready(function(){
    \$(\".modal-trigger\").click(function(){
        
        \$('.modal2').modal();
        
        url = \$(this).attr('data-target');
        \$.get(url, function (data) {
           
            \$('#body-new').html(data);

            \$('#myModal').modal('open');
        });

        })
    });
</script>   
{% endblock %}



", "physique/edit.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\edit.html.twig");
    }
}
