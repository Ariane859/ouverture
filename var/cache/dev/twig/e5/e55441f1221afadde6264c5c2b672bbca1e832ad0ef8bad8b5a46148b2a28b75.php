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
            margin-left:80%;
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
        ";
        // line 65
        echo "        .fiche
        {
            border:solid rgb(192,192,192)0.5px;
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
            height:15%;
            padding:1%;
           
        }
        .information
        {
            margin-top:8%;
            font-size:170%;
            border:solid skyblue 1px;
            width:70%;
        }
        .pièces{
            margin-top:3%;
            font-size:170%;
            margin-left:;
            border:solid skyblue 1px;
            width:59%;
            
        }
        center{
            margin-top:2%;
        }
      
        ";
        // line 127
        echo "        #table
        {
            width:80%;
            margin:25px 40px 75px 80px;

        }
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
</style>
    ";
        // line 146
        $this->displayBlock('sidebar', $context, $blocks);
        // line 153
        echo "<div class=\"container\"

<div class=\"row\">
";
        // line 156
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 157
            echo "        <h1 class=\"information\">Informations personnelles</h1>
            <div class=\"fiche\">
            <div class=\"row\">
                <div class=\"col-md-6\"><p><strong>Nom:</strong>    ";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    ";
            // line 164
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Email:</strong>    ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Pays:</strong>    ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Ville:</strong>    ";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    ";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "tuteur", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    ";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenomTuteur", array()), "html", null, true);
            echo "</p></div>
            </div>
            </div>
    
";
        } else {
            // line 181
            echo "        <h1 class=\"information\">Informations personnelles</h1>
         <div class=\"fiche\">
            <div class=\"row\">
                <div class=\"col-md-6\"><p><strong>Nom:</strong>    ";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    ";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    ";
            // line 188
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    ";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Email:</strong>    ";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Pays:</strong>    ";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Ville:</strong>    ";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "tuteur", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenomTuteur", array()), "html", null, true);
            echo "</p></div>
            </div>
            </div>
";
        }
        // line 204
        echo "</div>
<div class=\"row\">
        <h1 class=\"pièces\">Pièces jointes</h1>
            ";
        // line 207
        if ( !(null === ($context["pieces"] ?? $this->getContext($context, "pieces")))) {
            // line 208
            echo "             <table class=\"table table-striped table-hover table-responsive-lg table-sm thead-light\" id=\"table\">
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
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pieces"] ?? $this->getContext($context, "pieces")));
            foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
                // line 225
                echo "            <tr>
                <td>";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typePiece", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "refPiece", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 228
                if ($this->getAttribute($context["piece"], "datexpiration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datexpiration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 229
                if ($this->getAttribute($context["piece"], "datdeclaration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datdeclaration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 230
                if ($this->getAttribute($context["piece"], "datedelivrance", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datedelivrance", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "emetteur", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "paysEmission", array()), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 233
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["piece"], "fichier", array()))), "html", null, true);
                echo "\" style=\"color:skyblue\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "fichier", array()), "html", null, true);
                echo "</a></td>
                 <td>";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "physique", array()), "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        <li>
                            <a data-key=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "id", array()), "html", null, true);
                echo "\"  class=\"btn btn-info view\" style=\"color:white;\">Voir</a>
                            ";
                // line 240
                echo "                            ";
                // line 241
                echo "                        </li>
                        ";
                // line 247
                echo "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "        </tbody> 
    </table>
     ";
        } else {
            // line 254
            echo "        <p>Aucune pièce trouvé!</p>
     ";
        }
        // line 256
        echo "    </div>
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
              ";
        // line 270
        echo "          </div>
          <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
          </div>
      </div>
   </div>
</div>
        <div class=\"row actions\">
        <div class=\"col-2 mod\">
        ";
        // line 279
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 280
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 2)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        ";
        } else {
            // line 282
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 1)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        ";
        }
        // line 284
        echo "        </div>
        <div class=\"col-2 sup\">
        ";
        // line 286
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
        ";
        // line 288
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 147
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 293
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 294
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            \$(document).ready(function(e)
            {
                \$(\".view\").click(function(ev){
                    ev.preventDefault();
                    //alert(1)
                    let id = \$(this).attr(\"data-key\")
                    let data = {
                        id: id
                    }
                    console.log(data)
                    const url = Routing.generate('piece_show');
                    \$.ajax(url, 
                    {
                        dataType: 'text', // type of response data
                        //timeout: 500,     // timeout milliseconds
                        data: data,
                        success: function (data) {   // success callback function
                           // \$('p').html(\"cool\");
                           //alert(544544)
                           console.log(data)
                           \$('#body_show').html(data)
                           \$('#modalShow').modal('show')

                        },
                        error: function (errorMessage) { // error callback 
                            //\$('p').append('Error: ' + errorMessage);
                        }
                    });
                   
                    /*fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data),
                        })
                        .then(response => response.json())
                        .then(data => {
                            //\$('#body').html(data)
                            //\$('#modal_body').html(data)
                            //\$('#modalResult').modal('show')
                            //console.log('Success:', data);  
                            console.log(data)
                        })*/
                    //\$('#modalShow').modal('show')
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
        return array (  504 => 294,  495 => 293,  482 => 149,  478 => 148,  475 => 147,  466 => 146,  451 => 288,  446 => 286,  442 => 284,  436 => 282,  430 => 280,  428 => 279,  417 => 270,  404 => 256,  400 => 254,  395 => 251,  386 => 247,  383 => 241,  381 => 240,  377 => 238,  370 => 234,  364 => 233,  360 => 232,  356 => 231,  350 => 230,  344 => 229,  338 => 228,  334 => 227,  330 => 226,  327 => 225,  323 => 224,  305 => 208,  303 => 207,  298 => 204,  291 => 200,  287 => 199,  281 => 196,  277 => 195,  271 => 192,  267 => 191,  259 => 188,  255 => 187,  249 => 184,  244 => 181,  236 => 176,  232 => 175,  226 => 172,  222 => 171,  216 => 168,  212 => 167,  204 => 164,  200 => 163,  194 => 160,  189 => 157,  187 => 156,  182 => 153,  180 => 146,  159 => 127,  105 => 65,  51 => 4,  42 => 3,  11 => 1,);
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
            margin-left:80%;
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
            height:15%;
            padding:1%;
           
        }
        .information
        {
            margin-top:8%;
            font-size:170%;
            border:solid skyblue 1px;
            width:70%;
        }
        .pièces{
            margin-top:3%;
            font-size:170%;
            margin-left:;
            border:solid skyblue 1px;
            width:59%;
            
        }
        center{
            margin-top:2%;
        }
      
        {# .mod
        {
            margin-left:52%;
            
        }
        .sup
        {
            margin-top:0.30%;
            margin-right:30%;
        } #}
        #table
        {
            width:80%;
            margin:25px 40px 75px 80px;

        }
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
</style>
    {% block sidebar %}
    <div class=\"sidebar\">
        <a href=\"{{path('path_home')}}\" class=\"accueil\">Accueil</a>
        <a href=\"{{ path('path_choix')}}\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
{% endblock %}
{# <a href=\"{{ path('physique_index') }}\" class=\"btn btn-primary\" id=\"liste\">Retourner à la liste</a> #}
<div class=\"container\"

<div class=\"row\">
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
</div>
<div class=\"row\">
        <h1 class=\"pièces\">Pièces jointes</h1>
            {% if pieces is not null %}
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
                            {# onclick=\"afficher({{piece.id}})\" #}
                            {# href=\"{{ path('piece_show', { 'id': piece.id }) }}\" #}
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
              {# {% for piece in pieces %}
              {% include 'piece/show.html.twig' %}
              {% endfor %} #}
          </div>
          <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
          </div>
      </div>
   </div>
</div>
        <div class=\"row actions\">
        <div class=\"col-2 mod\">
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
                    //alert(1)
                    let id = \$(this).attr(\"data-key\")
                    let data = {
                        id: id
                    }
                    console.log(data)
                    const url = Routing.generate('piece_show');
                    \$.ajax(url, 
                    {
                        dataType: 'text', // type of response data
                        //timeout: 500,     // timeout milliseconds
                        data: data,
                        success: function (data) {   // success callback function
                           // \$('p').html(\"cool\");
                           //alert(544544)
                           console.log(data)
                           \$('#body_show').html(data)
                           \$('#modalShow').modal('show')

                        },
                        error: function (errorMessage) { // error callback 
                            //\$('p').append('Error: ' + errorMessage);
                        }
                    });
                   
                    /*fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data),
                        })
                        .then(response => response.json())
                        .then(data => {
                            //\$('#body').html(data)
                            //\$('#modal_body').html(data)
                            //\$('#modalResult').modal('show')
                            //console.log('Success:', data);  
                            console.log(data)
                        })*/
                    //\$('#modalShow').modal('show')
                })


            })
        </script>
{% endblock %}", "physique/show.html.twig", "C:\\laragon\\www\\ouverture\\app\\Resources\\views\\physique\\show.html.twig");
    }
}
