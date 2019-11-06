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
class __TwigTemplate_5c19911ee9682091e7c86abc37c600b3a2078b8111b607074331b32ac6e1945b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("portfolio.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <div id=\"intro\">
        <p class=\"titreintro titrepartie\">intro</p>
        <section class=\"texteintro\">
            <p>Je m'appelle Mikail Kastaci j'ai 21 ans je suis actuelement en formation a l'école Oclock</p>
            <h1>Pourquoi Développeur web ?
            </h1>
            <p>comme la plupart des personnes dans ce milieu, j'ai baigné dans l'informatique, depuis tout petit j'ai
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
                <a href=\"#\" class=\"buttoncv\">
                    <i class=\"far fa-address-card\"></i>Curriculum vitae</a>
            </section>
        </section>
    </div>


    <div id=\"bio\">
        <p class=\"titrebio titrepartie\">BIO</p>
        <section>
            <img data-aos=\"fade-right\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/looking.jpg"), "html", null, true);
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
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 133
            echo "                <article data-aos=\"fade-up\" class=\"projet col-10 mb-3 mx-auto  mx-md-0 col-md-4\">
                    <picture class=\"img\">
                        <div class=\"descriptionwork\">
                            <p>
                                <span>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 137), "html", null, true);
            echo "</span><br>";
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 137), 0, 35) . "..."), "html", null, true);
            echo "<br><br>
                                <a href=\"\">READMORE</a>
                            </p>
                        </div>
                        <img src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/" . twig_get_attribute($this->env, $this->source, $context["projet"], "img", [], "any", false, false, false, 141))), "html", null, true);
            echo "\" alt=\"image projet\"/>
                    </picture>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        </section>
    </div>


    <div id=\"chat\">
        <p class=\"titrechat titrepartie\">Chat</p>

        <section class=\"chatbox\">

            <div
                id=\"messages\"><!-- les messages du tchat -->
            </div>

            <div id=\"formchat\">
                <form method=\"POST\" action=\"\" autocomplete=\"off\" class=\"chatform row\">
                    <input type=\"text\" name=\"chatpseudo\" id=\"chatpseudo\" placeholder=\"pseudo\">
                    <textarea class=\"chatmessage col-10 col-md-11 chat_input_aera\" name=\"message\" placeholder=\"Entrez un message...\"></textarea>
                    <button type=\"submit\" name=\"submit\" id=\"envoi\" class=\"col-2 col-md-1\">
                        <i class=\"far fa-paper-plane\"></i>
                    </button>
                    <p class=\"info_form\">pseudo :seulement lettre et nombres
                        <br>
                        message caractère autoriser : . ( ) : = ;
                                            & # é ç è ' \" - _ @ ? ! ,
                    </p>
                </form>
            </div>

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
                ";
        // line 233
        echo "                <button type=\"button\" class=\"delete_message close\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                ";
        // line 237
        echo "            </p>
        </div>
    </template>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 243
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 244
        echo "    <!-- aos -->
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  363 => 244,  356 => 243,  346 => 237,  341 => 233,  252 => 145,  242 => 141,  233 => 137,  227 => 133,  223 => 132,  140 => 52,  101 => 15,  94 => 14,  85 => 10,  79 => 6,  72 => 5,  62 => 3,  55 => 2,  38 => 1,);
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
            <p>comme la plupart des personnes dans ce milieu, j'ai baigné dans l'informatique, depuis tout petit j'ai
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
                <a href=\"#\" class=\"buttoncv\">
                    <i class=\"far fa-address-card\"></i>Curriculum vitae</a>
            </section>
        </section>
    </div>


    <div id=\"bio\">
        <p class=\"titrebio titrepartie\">BIO</p>
        <section>
            <img data-aos=\"fade-right\" src=\"{{ asset('build/images/looking.jpg') }}\" alt=\"imagebio\">
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
                                <a href=\"\">READMORE</a>
                            </p>
                        </div>
                        <img src=\"{{ asset('build/images/' ~ projet.img) }}\" alt=\"image projet\"/>
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

            <div id=\"formchat\">
                <form method=\"POST\" action=\"\" autocomplete=\"off\" class=\"chatform row\">
                    <input type=\"text\" name=\"chatpseudo\" id=\"chatpseudo\" placeholder=\"pseudo\">
                    <textarea class=\"chatmessage col-10 col-md-11 chat_input_aera\" name=\"message\" placeholder=\"Entrez un message...\"></textarea>
                    <button type=\"submit\" name=\"submit\" id=\"envoi\" class=\"col-2 col-md-1\">
                        <i class=\"far fa-paper-plane\"></i>
                    </button>
                    <p class=\"info_form\">pseudo :seulement lettre et nombres
                        <br>
                        message caractère autoriser : . ( ) : = ;
                                            & # é ç è ' \" - _ @ ? ! ,
                    </p>
                </form>
            </div>

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
                {# si le mec est connecter alors #}
                <button type=\"button\" class=\"delete_message close\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                {# fin si #}
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


{% endblock %}
", "main/index.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/main/index.html.twig");
    }
}
