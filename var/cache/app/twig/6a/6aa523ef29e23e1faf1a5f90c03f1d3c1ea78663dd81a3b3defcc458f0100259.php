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
class __TwigTemplate_1a75446bbdfe93ed1d6def36433dd83566eee4fea7995914624661e9f3a2c8d4 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <!-- La balise base permet de définir l'url de la racine du site
        ce qui permet d'utiliser des urls relatives pour toutes les ressources -->
        <base href=\"http://127.0.0.1:8000/\" target=\"_self\" />
        
        <!-- bootstrap -->
        ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/bootstrap");
        echo "
        <style>
            .row{
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
        // line 25
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/reset");
        echo "
        <title>Portfolio - ";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
        <header>
            <nav id=\"navbar\">
                <ul>
                    <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">home</a></li>
                    <li><a href=\"#intro\">hello</a></li>
                    <li><a href=\"#bio\">who am i</a></li>
                    <li><a href=\"#work\">what i do</a></li>
                    <li><a href=\"#contact\">say hi</a></li>
                    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
            echo "\">Déconnexion</a></li>
                    ";
        }
        // line 40
        echo "  
                    <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Connexion</a></li> 
                </ul>
            </nav>
            <div id=\"titrep\">
                <h1 class=\"titre_acceuil\">Mikail Kastaci</h1>
                <p>Portfolio en cours de développement</p>
            </div>
        </header>

        <main>
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        </main>

        <footer>
        <div class=\"footercontact\">
            <p>Contact</p>
            <p>mail : mikailkastaci@gmail.com</p>
            <p>téléphone : 07.83.97.58.47</p>
        </div>
        </footer>
        
        ";
        // line 62
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/jquery");
        echo "
        ";
        // line 63
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/bootstrap");
        echo "

        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  199 => 66,  192 => 65,  180 => 51,  168 => 27,  156 => 26,  147 => 69,  145 => 65,  140 => 63,  136 => 62,  124 => 52,  122 => 51,  109 => 41,  106 => 40,  100 => 39,  98 => 38,  90 => 33,  83 => 28,  81 => 27,  77 => 26,  73 => 25,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <!-- La balise base permet de définir l'url de la racine du site
        ce qui permet d'utiliser des urls relatives pour toutes les ressources -->
        <base href=\"http://127.0.0.1:8000/\" target=\"_self\" />
        
        <!-- bootstrap -->
        {{ encore_entry_link_tags('css/bootstrap') }}
        <style>
            .row{
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
        <title>Portfolio - {% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <nav id=\"navbar\">
                <ul>
                    <li><a href=\"{{ path('main') }}\">home</a></li>
                    <li><a href=\"#intro\">hello</a></li>
                    <li><a href=\"#bio\">who am i</a></li>
                    <li><a href=\"#work\">what i do</a></li>
                    <li><a href=\"#contact\">say hi</a></li>
                    {% if app.user %}
                    <li><a href=\"{{ path('main') }}\">Déconnexion</a></li>
                    {% endif %}  
                    <li><a href=\"{{ path('main') }}\">Connexion</a></li> 
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

        {% block javascripts %}

        
        {% endblock %}
    </body>
</html>
", "portfolio.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/portfolio.html.twig");
    }
}
