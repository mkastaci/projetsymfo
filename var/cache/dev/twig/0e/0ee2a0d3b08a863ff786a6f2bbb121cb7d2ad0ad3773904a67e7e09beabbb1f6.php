<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_7b7a2d1727ec74d01d17dfad0bcab2cd41470bf53606ed992d87d0bd6ba26939 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "portfolio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("portfolio.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <!-- aos -->
    <link
    href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <!-- css -->
    ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/style");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <div id=\"intro\">
        <p class=\"titreintro titrepartie\">intro</p>
        <section class=\"texteintro\">
            <p>Je m'appelle Mikail Kastaci j'ai 21 ans je suis actuelement en formation a l'école Oclock</p>
            <h1>Pourquoi Développeur web ?
            </h1>
            <p class=\"jetest\">comme la plupart des personnes dans ce milieu, j'ai baigné dans l'informatique, depuis tout petit j'ai
                toujours été passionner par l'informatique et tous ce qui était lié, je passais la plupart de mes journées
                coller à mon PC à jouer à des jeux vidéo, ce qui m'a fait choisir le chemin de l'informatique et de la
                programmation, j'ai d'abord effectué un bac S.T.I.2.D spécialiser S.I.N (système d'information numérique) ou
                j'ai appris les bases du langage c, j'ai tous de suite accrochée développée des programmes, développée des
                chose soit même... j'ai ensuite effectué un BTS SNIR (système numérique option informatique et réseaux) ou
                j'ai développé mes connaissances en langage c, appris de nouveau langage tel que html/php/sql, un peu de c++
                et quelque notion de base en programmation orienter objet, après mon BTS je suis allé à l'école 42 ou j'ai
                effectué 1 mois de test où l'on a vu que du langage c, après avoir été accepter j'ai effectué 5 mois environ
                dans cette école,mais au bout de 5 mois je me suis rendu compte que rester des heures à sortir du langage c
                ce n'était vraiment pas pour moi ....., je me suis rendu compte que je préférais vraiment le développement
                web car c'est plus variée ce n'est jamais les mêmes choses, de 0 on crée un site entier avec plusieurs
                langages different, c'est pour ça que j'ai arrêté d'y aller pour apprendre le développement web en
                autodidacte chez moi, j'ai ensuite effectué la formation de l'école Oclock \"Développeur web\" à distance en
                télépresentiel pour pouvoir développer mes connaissances en web, lors de cette formation, on a vu les bases
                du web : HTML/CSS/JAVASCRIPT/PHP/SQL l'on a aussi vu différentes notions diverses telles que bootstrap, les
                méthodes de travail en groupe, etc...
            </p>
            <section class=\"buttonintro\">
                <a href=\"https://www.linkedin.com/in/mikail-kastaci-a138a4177/\" class=\"buttonlinkedin\">
                    <i class=\"fab fa-linkedin\"></i>Linkedin</a>
                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\" class=\"buttoncv\">
                    <i class=\"far fa-address-card\"></i>Curriculum vitae</a>
            </section>
        </section>
    </div>


    <div id=\"bio\">
        <p class=\"titrebio titrepartie\">BIO</p>
        <section>
            <img data-aos=\"fade-right\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/looking.jpg"), "html", null, true);
        echo "\" alt=\"imagebio\">
            <p>Mes compétences</p>
            <div class=\"row\">
                <div class=\"col-10 mx-auto  mx-md-0 col-md-6\">
                    <table class=\"competence table-striped\">
                        <thead>
                            <tr>
                                <th>ENVIRONEMENT</th>
                                <th>NOTE</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Linuxr</td>
                                <td>&#9733; &#9733; &#9733; &#9733; &#10025;</td>
                            </tr>
                            <tr>
                                <td>MacOS</td>
                                <td>&#9733; &#9733; &#9733; &#9733; &#10025;</td>
                            </tr>
                            <tr>
                                <td>Windows</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"picture col-10 mb-3 mx-auto  mx-md-0 col-md-6\">
                    <table class=\"competence table-striped\">
                        <thead>
                            <tr>
                                <th>LANGUAGE</th>
                                <th>NOTE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HTML</td>
                                <td>&#9733; &#9733; &#9733; &#9733; &#10025;</td>
                            </tr>
                            <tr>
                                <td>CSS</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                            <tr>
                                <td>PHP</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                            <tr>
                                <td>JavaScript</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                            <tr>
                                <td>SQL</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                            <tr>
                                <td>langage c</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


    <div id=\"localisation\">
        <p class=\"titrelocalisation titrepartie\">Ou me trouver</p>
        <iframe class=\"googlemap\" data-aos=\"fade-left\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.1536333245676!2d2.4344951158494035!3d48.70254441962102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67551c1f81d0d%3A0x8c30d98c349d8443!2s18+Rue+Henri+Martin%2C+91270+Vigneux-sur-Seine!5e0!3m2!1sfr!2sfr!4v1564773585204!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    </div>


    <div id=\"work\">
        <p class=\"titrework titrepartie\">Projets</p>

        <section class=\"liste_projet row\">
            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 134
            echo "                <article data-aos=\"fade-up\" class=\"projet col-10 mb-3 mx-auto  mx-md-0 col-md-4\">
                    <picture class=\"img\">
                        <div class=\"descriptionwork\">
                            <p>
                                <span>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 138), "html", null, true);
            echo "</span><br>";
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 138), 0, 35) . "..."), "html", null, true);
            echo "<br><br>
                                <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 139)]), "html", null, true);
            echo "\">READMORE</a>
                            </p>
                        </div>
                        <img src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["projet"], "img", [], "any", false, false, false, 142))), "html", null, true);
            echo "\" alt=\"image projet\"/>
                    </picture>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "        </section>
    </div>


    <div id=\"chat\">
        <p class=\"titrechat titrepartie\">Chat</p>

        <section class=\"chatbox\">

            <div
                id=\"messages\"><!-- les messages du tchat -->
            </div>
            ";
        // line 158
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158)) {
            // line 159
            echo "                <div id=\"formchat\">
                    ";
            // line 160
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formmessage"]) || array_key_exists("formmessage", $context) ? $context["formmessage"] : (function () { throw new RuntimeError('Variable "formmessage" does not exist.', 160, $this->source); })()), 'form_start', ["attr" => ["class" => "chatform row"]]);
            echo "


                    ";
            // line 163
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmessage"]) || array_key_exists("formmessage", $context) ? $context["formmessage"] : (function () { throw new RuntimeError('Variable "formmessage" does not exist.', 163, $this->source); })()), "message", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => "chatmessage col-10 col-md-11 chat_input_aera", "placeholder" => "Entrez un message..."], "label" => false]);
            echo "

                    <button type=\"submit\" name=\"submit\" id=\"envoi\" class=\"col-2 col-md-1\">
                        <i class=\"far fa-paper-plane\"></i>
                    </button>
                    <p class=\"info_form\">
                        message caractère autoriser : . ( ) : = ; & # é ç è ' \" - _ @ ? ! ,
                    </p>

                    ";
            // line 172
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formmessage"]) || array_key_exists("formmessage", $context) ? $context["formmessage"] : (function () { throw new RuntimeError('Variable "formmessage" does not exist.', 172, $this->source); })()), 'form_end');
            echo "
                </div>
            ";
        } else {
            // line 175
            echo "                <p class=\"infoconnexion\">
                    pour envoyez un message connectez vous
                    <a href=\"";
            // line 177
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">ici</a>
                </p>
            ";
        }
        // line 180
        echo "        </section>

    </div>


    <div id=\"contact\">
        <p class=\"titrecontact titrepartie\">Contact</p>
        <div class=\"containercontact\">
            <section class=\"contactleft\">
                <form action=\"\" method=\"POST\" class=\"contact-form\" autocomplete=\"off\">

                    <div class=\"contact-gender\">
                        <label for=\"genderhuman\">Human</label>
                        <input type=\"radio\" name=\"gender\" id=\"genderhuman\" value=\"human\">
                        <label for=\"genderhuman\">Not sure</label>
                        <input type=\"radio\" name=\"gender\" id=\"genderunknow\" value=\"unknow\">
                        <label for=\"genderhuman\">Robot</label>
                        <input type=\"radio\" name=\"gender\" id=\"genderrobot\" value=\"robot\" checked=\"\">
                    </div>

                    <div class=\"contact-subject\">

                        <select name=\"subject\" id=\"subject\">
                            <option value=\"Work\">Work</option>
                            <option value=\"Bio\">Bio</option>
                            <option value=\"Intro\">Intro</option>
                        </select>
                    </div>

                    <div class=\"contact-email\">

                        <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Your email\">
                    </div>

                    <div class=\"contact-message\">

                        <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" placeholder=\"Your message\"></textarea>
                    </div>

                    <div class=\"contact-button\">
                        <button type=\"submit\" class=\"sendbutton col-12 col-md-5 \">Send</button>
                        <button type=\"reset\" class=\"col-12 mt-2 col-md-5 mt-md-0\">reset</button>
                    </div>

                </form>
            </section>
            <section class=\"contactright\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident eveniet
                            perferendis hic ea quos dignissimos distinctio, similique quidem eaque rem maxime modi facilis vitae facere
                            ducimus earum tempora repellat tempore?</section>
        </div>
    </div>


    <template id=\"messageTemplate\">
        <div class=\"messageperso\">
            <span class=\"pseudo\"></span>
            <p>
                <span class=\"msg\"></span>
                <span class=\"msg_date\"></span>
                ";
        // line 239
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 240
            echo "
                    <button type=\"button\" class=\"delete_message close\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                ";
        }
        // line 245
        echo "            </p>
        </div>
    </template>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 251
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 252
        echo "    <!-- aos -->
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>

    ";
        // line 258
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/chat");
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 258,  426 => 252,  416 => 251,  403 => 245,  396 => 240,  394 => 239,  333 => 180,  327 => 177,  323 => 175,  317 => 172,  305 => 163,  299 => 160,  296 => 159,  294 => 158,  280 => 146,  270 => 142,  264 => 139,  258 => 138,  252 => 134,  248 => 133,  165 => 53,  152 => 43,  122 => 15,  112 => 14,  100 => 10,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'portfolio.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block stylesheets %}
    <!-- aos -->
    <link
    href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <!-- css -->
    {{ encore_entry_link_tags('css/style') }}
{% endblock %}


{% block body %}

    <div id=\"intro\">
        <p class=\"titreintro titrepartie\">intro</p>
        <section class=\"texteintro\">
            <p>Je m'appelle Mikail Kastaci j'ai 21 ans je suis actuelement en formation a l'école Oclock</p>
            <h1>Pourquoi Développeur web ?
            </h1>
            <p class=\"jetest\">comme la plupart des personnes dans ce milieu, j'ai baigné dans l'informatique, depuis tout petit j'ai
                toujours été passionner par l'informatique et tous ce qui était lié, je passais la plupart de mes journées
                coller à mon PC à jouer à des jeux vidéo, ce qui m'a fait choisir le chemin de l'informatique et de la
                programmation, j'ai d'abord effectué un bac S.T.I.2.D spécialiser S.I.N (système d'information numérique) ou
                j'ai appris les bases du langage c, j'ai tous de suite accrochée développée des programmes, développée des
                chose soit même... j'ai ensuite effectué un BTS SNIR (système numérique option informatique et réseaux) ou
                j'ai développé mes connaissances en langage c, appris de nouveau langage tel que html/php/sql, un peu de c++
                et quelque notion de base en programmation orienter objet, après mon BTS je suis allé à l'école 42 ou j'ai
                effectué 1 mois de test où l'on a vu que du langage c, après avoir été accepter j'ai effectué 5 mois environ
                dans cette école,mais au bout de 5 mois je me suis rendu compte que rester des heures à sortir du langage c
                ce n'était vraiment pas pour moi ....., je me suis rendu compte que je préférais vraiment le développement
                web car c'est plus variée ce n'est jamais les mêmes choses, de 0 on crée un site entier avec plusieurs
                langages different, c'est pour ça que j'ai arrêté d'y aller pour apprendre le développement web en
                autodidacte chez moi, j'ai ensuite effectué la formation de l'école Oclock \"Développeur web\" à distance en
                télépresentiel pour pouvoir développer mes connaissances en web, lors de cette formation, on a vu les bases
                du web : HTML/CSS/JAVASCRIPT/PHP/SQL l'on a aussi vu différentes notions diverses telles que bootstrap, les
                méthodes de travail en groupe, etc...
            </p>
            <section class=\"buttonintro\">
                <a href=\"https://www.linkedin.com/in/mikail-kastaci-a138a4177/\" class=\"buttonlinkedin\">
                    <i class=\"fab fa-linkedin\"></i>Linkedin</a>
                <a href=\"{{ path('cv') }}\" class=\"buttoncv\">
                    <i class=\"far fa-address-card\"></i>Curriculum vitae</a>
            </section>
        </section>
    </div>


    <div id=\"bio\">
        <p class=\"titrebio titrepartie\">BIO</p>
        <section>
            <img data-aos=\"fade-right\" src=\"{{ asset('image/looking.jpg') }}\" alt=\"imagebio\">
            <p>Mes compétences</p>
            <div class=\"row\">
                <div class=\"col-10 mx-auto  mx-md-0 col-md-6\">
                    <table class=\"competence table-striped\">
                        <thead>
                            <tr>
                                <th>ENVIRONEMENT</th>
                                <th>NOTE</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Linuxr</td>
                                <td>&#9733; &#9733; &#9733; &#9733; &#10025;</td>
                            </tr>
                            <tr>
                                <td>MacOS</td>
                                <td>&#9733; &#9733; &#9733; &#9733; &#10025;</td>
                            </tr>
                            <tr>
                                <td>Windows</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"picture col-10 mb-3 mx-auto  mx-md-0 col-md-6\">
                    <table class=\"competence table-striped\">
                        <thead>
                            <tr>
                                <th>LANGUAGE</th>
                                <th>NOTE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HTML</td>
                                <td>&#9733; &#9733; &#9733; &#9733; &#10025;</td>
                            </tr>
                            <tr>
                                <td>CSS</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                            <tr>
                                <td>PHP</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                            <tr>
                                <td>JavaScript</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                            <tr>
                                <td>SQL</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                            <tr>
                                <td>langage c</td>
                                <td>&#9733; &#9733; &#9733; &#10025; &#10025;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


    <div id=\"localisation\">
        <p class=\"titrelocalisation titrepartie\">Ou me trouver</p>
        <iframe class=\"googlemap\" data-aos=\"fade-left\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.1536333245676!2d2.4344951158494035!3d48.70254441962102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67551c1f81d0d%3A0x8c30d98c349d8443!2s18+Rue+Henri+Martin%2C+91270+Vigneux-sur-Seine!5e0!3m2!1sfr!2sfr!4v1564773585204!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    </div>


    <div id=\"work\">
        <p class=\"titrework titrepartie\">Projets</p>

        <section class=\"liste_projet row\">
            {% for projet in projets %}
                <article data-aos=\"fade-up\" class=\"projet col-10 mb-3 mx-auto  mx-md-0 col-md-4\">
                    <picture class=\"img\">
                        <div class=\"descriptionwork\">
                            <p>
                                <span>{{ projet.title }}</span><br>{{ projet.description|slice(0, 35) ~ '...' }}<br><br>
                                <a href=\"{{ path('projet', {'id' : projet.id}) }}\">READMORE</a>
                            </p>
                        </div>
                        <img src=\"{{ asset('image/' ~ projet.img) }}\" alt=\"image projet\"/>
                    </picture>
                </article>
            {% endfor %}
        </section>
    </div>


    <div id=\"chat\">
        <p class=\"titrechat titrepartie\">Chat</p>

        <section class=\"chatbox\">

            <div
                id=\"messages\"><!-- les messages du tchat -->
            </div>
            {% if app.user %}
                <div id=\"formchat\">
                    {{ form_start(formmessage, {'attr': {'class':'chatform row'}}) }}


                    {{ form_widget(formmessage.message, {'attr': {'class':'chatmessage col-10 col-md-11 chat_input_aera', 'placeholder':'Entrez un message...'}, 'label':false}) }}

                    <button type=\"submit\" name=\"submit\" id=\"envoi\" class=\"col-2 col-md-1\">
                        <i class=\"far fa-paper-plane\"></i>
                    </button>
                    <p class=\"info_form\">
                        message caractère autoriser : . ( ) : = ; & # é ç è ' \" - _ @ ? ! ,
                    </p>

                    {{ form_end(formmessage) }}
                </div>
            {% else %}
                <p class=\"infoconnexion\">
                    pour envoyez un message connectez vous
                    <a href=\"{{ path('security_login') }}\">ici</a>
                </p>
            {% endif %}
        </section>

    </div>


    <div id=\"contact\">
        <p class=\"titrecontact titrepartie\">Contact</p>
        <div class=\"containercontact\">
            <section class=\"contactleft\">
                <form action=\"\" method=\"POST\" class=\"contact-form\" autocomplete=\"off\">

                    <div class=\"contact-gender\">
                        <label for=\"genderhuman\">Human</label>
                        <input type=\"radio\" name=\"gender\" id=\"genderhuman\" value=\"human\">
                        <label for=\"genderhuman\">Not sure</label>
                        <input type=\"radio\" name=\"gender\" id=\"genderunknow\" value=\"unknow\">
                        <label for=\"genderhuman\">Robot</label>
                        <input type=\"radio\" name=\"gender\" id=\"genderrobot\" value=\"robot\" checked=\"\">
                    </div>

                    <div class=\"contact-subject\">

                        <select name=\"subject\" id=\"subject\">
                            <option value=\"Work\">Work</option>
                            <option value=\"Bio\">Bio</option>
                            <option value=\"Intro\">Intro</option>
                        </select>
                    </div>

                    <div class=\"contact-email\">

                        <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Your email\">
                    </div>

                    <div class=\"contact-message\">

                        <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" placeholder=\"Your message\"></textarea>
                    </div>

                    <div class=\"contact-button\">
                        <button type=\"submit\" class=\"sendbutton col-12 col-md-5 \">Send</button>
                        <button type=\"reset\" class=\"col-12 mt-2 col-md-5 mt-md-0\">reset</button>
                    </div>

                </form>
            </section>
            <section class=\"contactright\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident eveniet
                            perferendis hic ea quos dignissimos distinctio, similique quidem eaque rem maxime modi facilis vitae facere
                            ducimus earum tempora repellat tempore?</section>
        </div>
    </div>


    <template id=\"messageTemplate\">
        <div class=\"messageperso\">
            <span class=\"pseudo\"></span>
            <p>
                <span class=\"msg\"></span>
                <span class=\"msg_date\"></span>
                {% if is_granted('ROLE_ADMIN') %}

                    <button type=\"button\" class=\"delete_message close\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                {% endif %}
            </p>
        </div>
    </template>
{% endblock %}


{% block javascripts %}
    <!-- aos -->
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>

    {{ encore_entry_script_tags('js/chat') }}


{% endblock %}
", "main/index.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/main/index.html.twig");
    }
}
