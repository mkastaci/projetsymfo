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

/* portfolio.html.twig */
class __TwigTemplate_189366acda266623a1ce33ef005c52b8ddb9c5ce783e436d7e564263dc2f388c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta
        http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <!-- La balise base permet de définir l'url de la racine du site
                ce qui permet d'utiliser des urls relatives pour toutes les ressources -->
        <base
        href=\"http://127.0.0.1:8000/\" target=\"_self\"/>

        <!-- bootstrap -->
        ";
        // line 14
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/bootstrap");
        echo "
        <style>
            .row {
                margin: 0;
            }
        </style>
        <!-- fontfamily -->
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
        <!-- fontawesome -->
        <script src=\"https://kit.fontawesome.com/a9d92835b6.js\" crossorigin=\"anonymous\"></script>

        <!-- reset css -->
        ";
        // line 27
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/reset");
        echo "
        <title>Portfolio -
            ";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        // line 30
        echo "        </title>
        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    </head>
    <body>
        <header>
            <nav id=\"navbar\">
                <ul>
                    <li>
                        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">home</a>
                    </li>
                    <li>
                        <a href=\"#intro\">hello</a>
                    </li>
                    <li>
                        <a href=\"#bio\">who am i</a>
                    </li>
                    <li>
                        <a href=\"#work\">what i do</a>
                    </li>
                    <li>
                        <a href=\"#contact\">say hi</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">inscription</a>
                    </li>
                    ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) {
            // line 56
            echo "                        <li>
                            <a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
                        </li>
                    ";
        } else {
            // line 60
            echo "                        <li>
                            <a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a>
                        </li>
                    ";
        }
        // line 64
        echo "                </ul>
            </nav>
            <div id=\"titrep\">
                <h1 class=\"titre_acceuil\">Mikail Kastaci</h1>
                <p>Portfolio en cours de développement</p>
            </div>
        </header>

        <main>
            ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        </main>

        <footer>
            <div class=\"footercontact\">
                <p>Contact</p>
                <p>mail : mikailkastaci@gmail.com</p>
                <p>téléphone : 07.83.97.58.47</p>
            </div>
        </footer>

        ";
        // line 84
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/jquery");
        echo "
        ";
        // line 85
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/bootstrap");
        echo "

        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 87,  225 => 73,  207 => 31,  189 => 29,  177 => 88,  175 => 87,  170 => 85,  166 => 84,  154 => 74,  152 => 73,  141 => 64,  135 => 61,  132 => 60,  126 => 57,  123 => 56,  121 => 55,  116 => 53,  98 => 38,  90 => 32,  88 => 31,  85 => 30,  83 => 29,  78 => 27,  62 => 14,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta
        http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <!-- La balise base permet de définir l'url de la racine du site
                ce qui permet d'utiliser des urls relatives pour toutes les ressources -->
        <base
        href=\"http://127.0.0.1:8000/\" target=\"_self\"/>

        <!-- bootstrap -->
        {{ encore_entry_link_tags('css/bootstrap') }}
        <style>
            .row {
                margin: 0;
            }
        </style>
        <!-- fontfamily -->
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
        <!-- fontawesome -->
        <script src=\"https://kit.fontawesome.com/a9d92835b6.js\" crossorigin=\"anonymous\"></script>

        <!-- reset css -->
        {{ encore_entry_link_tags('css/reset') }}
        <title>Portfolio -
            {% block title %}{% endblock %}
        </title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <nav id=\"navbar\">
                <ul>
                    <li>
                        <a href=\"{{ path('main') }}\">home</a>
                    </li>
                    <li>
                        <a href=\"#intro\">hello</a>
                    </li>
                    <li>
                        <a href=\"#bio\">who am i</a>
                    </li>
                    <li>
                        <a href=\"#work\">what i do</a>
                    </li>
                    <li>
                        <a href=\"#contact\">say hi</a>
                    </li>
                    <li>
                        <a href=\"{{ path('inscription') }}\">inscription</a>
                    </li>
                    {% if app.user %}
                        <li>
                            <a href=\"{{ path('security_logout') }}\">Déconnexion</a>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"{{ path('security_login') }}\">Connexion</a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
            <div id=\"titrep\">
                <h1 class=\"titre_acceuil\">Mikail Kastaci</h1>
                <p>Portfolio en cours de développement</p>
            </div>
        </header>

        <main>
            {% block body %}{% endblock %}
        </main>

        <footer>
            <div class=\"footercontact\">
                <p>Contact</p>
                <p>mail : mikailkastaci@gmail.com</p>
                <p>téléphone : 07.83.97.58.47</p>
            </div>
        </footer>

        {{ encore_entry_script_tags('js/jquery') }}
        {{ encore_entry_script_tags('js/bootstrap') }}

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "portfolio.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/portfolio.html.twig");
    }
}
