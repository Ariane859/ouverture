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
        .actions{
            margin-left:0%
        }
        .mod
        {
            margin-left:52%;
            
        }
        .sup
        {
            margin-top:0.30%;
            margin-right:30%;
        }
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
    ";
        // line 148
        $this->displayBlock('sidebar', $context, $blocks);
        // line 155
        echo "<div class=\"container\"
<div class=\"row\">
";
        // line 157
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 158
            echo "        <h1 class=\"information\">Informations personnelles</h1>
            <div class=\"fiche\">
            <div class=\"row\">
                <div class=\"col-md-6\"><p><strong>Nom:</strong>    ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    ";
            // line 165
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Email:</strong>    ";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Pays:</strong>    ";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Ville:</strong>    ";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    ";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "tuteur", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    ";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenomTuteur", array()), "html", null, true);
            echo "</p></div>
            </div>
            </div>
    
";
        } else {
            // line 182
            echo "        <h1 class=\"information\">Informations personnelles</h1>
         <div class=\"fiche\">
            <div class=\"row\">
                <div class=\"col-md-6\"><p><strong>Nom:</strong>    ";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 prenom\"><p><strong>Prénom:</strong>    ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenom", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Date de naissance:</strong>    ";
            // line 189
            if ($this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "datnais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Telephone:</strong>    ";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "telephone", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Email:</strong>    ";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "email", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Pays:</strong>    ";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "pays", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Ville:</strong>    ";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "ville", array()), "html", null, true);
            echo "</p></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 \"><p><strong>Tuteur:</strong>    ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "tuteur", array()), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-6 \"><p><strong>Prénom du tuteur:</strong>    ";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "prenomTuteur", array()), "html", null, true);
            echo "</p></div>
            </div>
            </div>
";
        }
        // line 205
        echo "</div>
<div class=\"row\">
        <h1 class=\"pièces\">Pièces jointes</h1>
            ";
        // line 208
        if ( !(null === ($context["pieces"] ?? $this->getContext($context, "pieces")))) {
            // line 209
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
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pieces"] ?? $this->getContext($context, "pieces")));
            foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
                // line 226
                echo "            <tr>
                <td>";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typePiece", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "refPiece", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 229
                if ($this->getAttribute($context["piece"], "datexpiration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datexpiration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 230
                if ($this->getAttribute($context["piece"], "datdeclaration", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datdeclaration", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 231
                if ($this->getAttribute($context["piece"], "datedelivrance", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["piece"], "datedelivrance", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "emetteur", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "paysEmission", array()), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["piece"], "fichier", array()))), "html", null, true);
                echo "\" style=\"color:skyblue\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "fichier", array()), "html", null, true);
                echo "</a></td>
                 <td>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "physique", array()), "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        <li>
                            <a data-key=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "id", array()), "html", null, true);
                echo "\"  class=\"btn btn-info view\" style=\"color:white;\">Voir</a>
                            ";
                // line 241
                echo "                            ";
                // line 242
                echo "                        </li>
                        ";
                // line 248
                echo "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "        </tbody> 
    </table>
     ";
        } else {
            // line 255
            echo "        <p>Aucune pièce trouvé!</p>
     ";
        }
        // line 257
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
        // line 272
        echo "                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                 </div>
            </div>
        <div class=\"row actions\">
        <div class=\"col-md mod\">
        ";
        // line 281
        if ((null === $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "nom", array()))) {
            // line 282
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 2)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        ";
        } else {
            // line 284
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("physique_edit", array("id" => $this->getAttribute(($context["physique"] ?? $this->getContext($context, "physique")), "id", array()), "slug" => 1)), "html", null, true);
            echo "\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        ";
        }
        // line 286
        echo "        </div>
        <div class=\"col-md sup\">
        ";
        // line 288
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onSubmit" => "return confirm('Voulez vous vraiment supprimer?');")));
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" id=\"supprimer\" value=\"Supprimer\">
        ";
        // line 290
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 149
        echo "    <div class=\"sidebar\">
        <a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\" class=\"accueil\">Accueil</a>
        <a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_choix");
        echo "\" id=\"ouvrir\">Ouvrir un compte</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 295
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 296
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
        return array (  521 => 296,  512 => 295,  499 => 151,  495 => 150,  492 => 149,  483 => 148,  468 => 290,  463 => 288,  459 => 286,  453 => 284,  447 => 282,  445 => 281,  434 => 272,  420 => 257,  416 => 255,  411 => 252,  402 => 248,  399 => 242,  397 => 241,  393 => 239,  386 => 235,  380 => 234,  376 => 233,  372 => 232,  366 => 231,  360 => 230,  354 => 229,  350 => 228,  346 => 227,  343 => 226,  339 => 225,  321 => 209,  319 => 208,  314 => 205,  307 => 201,  303 => 200,  297 => 197,  293 => 196,  287 => 193,  283 => 192,  275 => 189,  271 => 188,  265 => 185,  260 => 182,  252 => 177,  248 => 176,  242 => 173,  238 => 172,  232 => 169,  228 => 168,  220 => 165,  216 => 164,  210 => 161,  205 => 158,  203 => 157,  199 => 155,  197 => 148,  51 => 4,  42 => 3,  11 => 1,);
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
        .actions{
            margin-left:0%
        }
        .mod
        {
            margin-left:52%;
            
        }
        .sup
        {
            margin-top:0.30%;
            margin-right:30%;
        }
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
        <div class=\"col-md mod\">
        {% if physique.nom is null %}
            <a href=\"{{ path('physique_edit', { 'id': physique.id ,'slug':2})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        {% else %}
            <a href=\"{{ path('physique_edit', { 'id': physique.id ,'slug':1})}}\" id=\"modifier\" class=\"btn btn-primary\">Modifier</a>
        {% endif %}
        </div>
        <div class=\"col-md sup\">
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
