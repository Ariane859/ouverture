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
                font-family:  'Times New Roman';
                 /*font-family: Georgia, Times, 'Times New Roman', serif;*/
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
                position:relative;
            }
        a
            {
                color:white;
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
            margin-left:75%;
            font-size:1.2rem;
            color:white;
        }
        #index
        {
            color: white;
            margin-left:94%;
        }
        #ouvrir:hover{
            color:white;
        }
        #liste{
            color:white;
            margin-top:10%;
            margin-left:85%;
        }
        .row
        { 
            margin-left:5%;
        }
        .container
        {
            font-size:1rem;
        }
        h2
        {
           /* height:15%;
            padding:1%;
            border:solid skyblue 1px;
            /*width:70%;*/
        }
        ";
        // line 81
        echo "        .fiche
        {
            border:solid rgb(192,192,192)0.5px;
            margin-right:16%;
            margin-top:4%;
            width:98%;
            height:58%;
            padding:2%;
            background-color:white;
        }
       

        .cl
        { 
            margin-left:1%;
            margin-top:0%;
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
        ";
        // line 121
        echo "        .information
        {
            margin-top:8%;
           
        }
        #piece{
            margin-top:4%;
            
        }
        center{
            margin-top:2%;
        }
        #notification
            {
               margin-left:9%;
            }
      
        
        ";
        // line 144
        echo "        ";
        // line 150
        echo "        li
        {
            display:inline-block;
        }
        tr
            {
                font-size:95%;
                text-align:center;
            }
        td {
            text-align:center;
        }

        .actions
        {
            margin-left:80%;
        }
        .sup
        {   
            margin-left:25%
        }
</style>

    ";
        // line 173
        $this->displayBlock('sidebar', $context, $blocks);
        // line 191
        echo "
";
        // line 193
        echo "<div class=\"container\">

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

    <div class=\"row \">
    ";
        // line 213
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 214
            echo "            <div class=\"col-12\">
                <div class=\"information\"><h2>Informations personnelles</h2></div>
                <hr></hr>
                <div class=\"fiche\">
                    <div class=\"row\">
                        <div class=\"col-md-6\"><p><strong>Sigle:</strong>    ";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "sigle", array()), "html", null, true);
            echo "</p></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 prenom\"><p><strong>Raison sociale:</strong>    ";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "raisonSociale", array()), "html", null, true);
            echo "</p></div>
                        <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    ";
            // line 223
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</p></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    ";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</p></div>
                        <div class=\"col-md-6 \"><p><strong>Email:</strong>    ";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</p></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 \"><p><strong>Pays:</strong>    ";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</p></div>
                        <div class=\"col-md-6 \"><p><strong>Ville:</strong>    ";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</p></div>
                    </div>
                </div>
            </div>
    ";
        } else {
            // line 236
            echo "        <div class=\"col-12\">
            <div class=\"information\"><h2>Informations personnelles</h2></div>
            <hr></hr>
            <div class=\"fiche\">
                <div class=\"row\">
                    <div class=\"col-md-6\"><p><strong>Nom:</strong>    ";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</p></div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    ";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</p></div>
                    <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    ";
            // line 245
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</p></div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    ";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</p></div>
                    <div class=\"col-md-6 \"><p><strong>Email:</strong>    ";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</p></div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 \"><p><strong>Pays:</strong>    ";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</p></div>
                    <div class=\"col-md-6 \"><p><strong>Ville:</strong>    ";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</p></div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    ";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "tuteur", array()), "html", null, true);
            echo "</p></div>
                    <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    ";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenomTuteur", array()), "html", null, true);
            echo "</p></div>
                </div>
            </div>
        </div>
    ";
        }
        // line 262
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-12\">
                <div id=\"piece\"><h2>Pièces jointes</h2></div>
                <hr></hr>
                ";
        // line 268
        if ( !(null === ($context["pieces"] ?? $this->getContext($context, "pieces")))) {
            // line 269
            echo "                <div id=\"tableau\">
                    <table class=\"table table-striped table-hover table-responsive-lg table-sm thead-light\" id=\"table\">
                        <thead>
                            <tr>
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
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pieces"] ?? $this->getContext($context, "pieces")));
            foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
                // line 287
                echo "                            <tr>
                                <td>";
                // line 288
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 289
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typePiece", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 290
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "refPiece", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 291
                if ($this->getAttribute($context["piece"], "datexpiration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datexpiration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                                <td>";
                // line 292
                if ($this->getAttribute($context["piece"], "datdeclaration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datdeclaration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                                <td>";
                // line 293
                if ($this->getAttribute($context["piece"], "datedelivrance", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datedelivrance", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                                <td>";
                // line 294
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "emetteur", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 295
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "paysEmission", array()), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 296
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["piece"], "fichier", array()))), "html", null, true);
                echo "\" style=\"color:skyblue\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "fichier", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 297
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "physique", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a data-key=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "id", array()), "html", null, true);
                echo "\"  class=\"btn btn-info view\" style=\"color:white;\">Voir</a>
                                        </li>
                                        ";
                // line 308
                echo "                                    </ul>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                        </tbody> 
                    </table>
        
                ";
        } else {
            // line 316
            echo "                    <p>Aucune pièce trouvé!</p>
                ";
        }
        // line 318
        echo "                </div>
        </div>
    </div>

    <!-- modal-->
    <div class=\"modal fade\" id=\"modalShow\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\" id=\"body_show\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
    </div>
        <div class=\"row actions\">
            <div class=\"col-2\">
                ";
        // line 341
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 342
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 2)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
                ";
        } else {
            // line 344
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 1)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
                ";
        }
        // line 346
        echo "            </div>
            <div class=\"col-2 sup\">
                ";
        // line 348
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
                ";
        // line 350
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 174
        echo "        <div class=\"sidebar\">
            <div class=\"row cl\">
                <div class=\"col-md-2\">
                    <a href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
                </div>
                <div class=\"col-md-4\">
                <a data-target=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_showMessage", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()))), "html", null, true);
        echo "\" data-tooltip=\"voir\" class=\"tooltipped modal-trigger btn btn-outline-light my-6 my-sm-6\" href=\"#modalNotif\" id=\"notification\" data-toggle=\"modal\"><i class=\"fa fa-bell\"></i><span class=\"badge\" style=\"position: absolute;
                top: -10px;padding: 5px 10px;border-radius: 50%;background:red;color: white;\" id=\"notific\">";
        // line 181
        echo twig_escape_filter($this->env, ($context["comptesNotifs"] ?? $this->getContext($context, "comptesNotifs")), "html", null, true);
        echo "</span></a>
                    ";
        // line 184
        echo "                </div>
                <div class=\"col-md-6\">
                    <a href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 356
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 357
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            \$(document).ready(function(e)
            {
                \$(\".view\").click(function(ev){
                    ev.preventDefault();
                    let id = \$(this).attr(\"data-key\")
                    let data = {
                        id: id
                    }
                    console.log(data)
                    const url = Routing.generate('piece_show');
                    \$.ajax(url, 
                    {
                        dataType: 'text', 
                        data: data,
                        success: function (data) { 
                          
                           console.log(data)
                           \$('#body_show').html(data)
                           \$('#modalShow').modal('show')

                        },
                        error: function (errorMessage) { 
                        }
                    });
                })
            })

        </script>
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
        return array (  562 => 357,  553 => 356,  538 => 186,  534 => 184,  530 => 181,  526 => 180,  520 => 177,  515 => 174,  506 => 173,  492 => 350,  487 => 348,  483 => 346,  477 => 344,  471 => 342,  469 => 341,  444 => 318,  440 => 316,  434 => 312,  425 => 308,  420 => 301,  413 => 297,  407 => 296,  403 => 295,  399 => 294,  393 => 293,  387 => 292,  381 => 291,  377 => 290,  373 => 289,  369 => 288,  366 => 287,  362 => 286,  343 => 269,  341 => 268,  333 => 262,  325 => 257,  321 => 256,  315 => 253,  311 => 252,  305 => 249,  301 => 248,  293 => 245,  289 => 244,  283 => 241,  276 => 236,  268 => 231,  264 => 230,  258 => 227,  254 => 226,  246 => 223,  242 => 222,  236 => 219,  229 => 214,  227 => 213,  205 => 193,  202 => 191,  200 => 173,  175 => 150,  173 => 144,  153 => 121,  121 => 81,  51 => 4,  42 => 3,  11 => 1,);
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
                font-family:  'Times New Roman';
                 /*font-family: Georgia, Times, 'Times New Roman', serif;*/
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
                position:relative;
            }
        a
            {
                color:white;
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
            margin-left:75%;
            font-size:1.2rem;
            color:white;
        }
        #index
        {
            color: white;
            margin-left:94%;
        }
        #ouvrir:hover{
            color:white;
        }
        #liste{
            color:white;
            margin-top:10%;
            margin-left:85%;
        }
        .row
        { 
            margin-left:5%;
        }
        .container
        {
            font-size:1rem;
        }
        h2
        {
           /* height:15%;
            padding:1%;
            border:solid skyblue 1px;
            /*width:70%;*/
        }
        {# #supprimer
        {
            margin-left:92%;
        }
        #modifier{
            margin-top:5%;
            color:white;
            margin-left:93%; 
        } #}
        .fiche
        {
            border:solid rgb(192,192,192)0.5px;
            margin-right:16%;
            margin-top:4%;
            width:98%;
            height:58%;
            padding:2%;
            background-color:white;
        }
       

        .cl
        { 
            margin-left:1%;
            margin-top:0%;
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
        {# h2
        {
            /*font-size:170%;
            margin-left:16%;
            height:15%;
            padding:1%;
            border:solid skyblue 1px;
            width:70%;*/
           
        } #}
        .information
        {
            margin-top:8%;
           
        }
        #piece{
            margin-top:4%;
            
        }
        center{
            margin-top:2%;
        }
        #notification
            {
               margin-left:9%;
            }
      
        
        {#.sup
        {
            margin-top:0.30%;
            margin-right:30%;
        } #}
        {# #table
        {
            width:50%;
            margin:25px 40px 75px 80px;

        } #}
        li
        {
            display:inline-block;
        }
        tr
            {
                font-size:95%;
                text-align:center;
            }
        td {
            text-align:center;
        }

        .actions
        {
            margin-left:80%;
        }
        .sup
        {   
            margin-left:25%
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
                    top: -10px;padding: 5px 10px;border-radius: 50%;background:red;color: white;\" id=\"notific\"></span></button> #}
                </div>
                <div class=\"col-md-6\">
                    <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
                </div>
            </div>
        </div>
    {% endblock %}

{# <a href=\"{{ path('physique_index') }}\" class=\"btn btn-primary\" id=\"liste\">Retourner à la liste</a> #}
<div class=\"container\">

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

    <div class=\"row \">
    {% if physique.nom is null %}
            <div class=\"col-12\">
                <div class=\"information\"><h2>Informations personnelles</h2></div>
                <hr></hr>
                <div class=\"fiche\">
                    <div class=\"row\">
                        <div class=\"col-md-6\"><p><strong>Sigle:</strong>    {{ physique.sigle }}</p></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 prenom\"><p><strong>Raison sociale:</strong>    {{ physique.raisonSociale }}</p></div>
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
                </div>
            </div>
    {% else %}
        <div class=\"col-12\">
            <div class=\"information\"><h2>Informations personnelles</h2></div>
            <hr></hr>
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
        </div>
    {% endif %}
    </div>

    <div class=\"row\">
        <div class=\"col-12\">
                <div id=\"piece\"><h2>Pièces jointes</h2></div>
                <hr></hr>
                {% if pieces is not null %}
                <div id=\"tableau\">
                    <table class=\"table table-striped table-hover table-responsive-lg table-sm thead-light\" id=\"table\">
                        <thead>
                            <tr>
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
                                <td>{{ piece.id }}</td>
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
                                            <a data-key=\"{{piece.id}}\"  class=\"btn btn-info view\" style=\"color:white;\">Voir</a>
                                        </li>
                                        {# <li> 
                                            {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                                                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
                                            {{ form_end(delete_form) }}
                                        </li> #}
                                    </ul>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody> 
                    </table>
        
                {% else %}
                    <p>Aucune pièce trouvé!</p>
                {% endif %}
                </div>
        </div>
    </div>

    <!-- modal-->
    <div class=\"modal fade\" id=\"modalShow\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\" id=\"body_show\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
    </div>
        <div class=\"row actions\">
            <div class=\"col-2\">
                {% if physique.nom is null %}
                    <a href=\"{{ path('physique_edit', { 'id': physique.id ,'slug':2})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
                {% else %}
                    <a href=\"{{ path('physique_edit', { 'id': physique.id ,'slug':1})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
                {% endif %}
            </div>
            <div class=\"col-2 sup\">
                {{ form_start(delete_form,{'attr':{'onSubmit':\"return confirm('Voulez vous vraiment supprimer?');\"}}) }}
                        <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
                {{ form_end(delete_form) }}
            </div>
        </div>
{% endblock %}


{% block javascripts %}
    {{ parent()}}
        <script>
            \$(document).ready(function(e)
            {
                \$(\".view\").click(function(ev){
                    ev.preventDefault();
                    let id = \$(this).attr(\"data-key\")
                    let data = {
                        id: id
                    }
                    console.log(data)
                    const url = Routing.generate('piece_show');
                    \$.ajax(url, 
                    {
                        dataType: 'text', 
                        data: data,
                        success: function (data) { 
                          
                           console.log(data)
                           \$('#body_show').html(data)
                           \$('#modalShow').modal('show')

                        },
                        error: function (errorMessage) { 
                        }
                    });
                })
            })

        </script>
{% endblock %}", "physique/show.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\show.html.twig");
    }
}
