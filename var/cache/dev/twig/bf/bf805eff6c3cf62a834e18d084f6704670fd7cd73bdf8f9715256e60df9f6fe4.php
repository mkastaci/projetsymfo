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

/* basecv.html.twig */
class __TwigTemplate_6344175024310878c53850aaf8673d520ca63896456014f5d8fac95db22b5d1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basecv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basecv.html.twig"));

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
        <link
        href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
        <!-- fontawesome -->
        <script src=\"https://kit.fontawesome.com/a9d92835b6.js\" crossorigin=\"anonymous\"></script>

        <!-- reset css -->
        ";
        // line 28
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/reset");
        echo "
        <title>Kastaci mikail CV
            ";
        // line 30
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "        </title>
        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    </head>
    <body>
        <header>
            <h1 class=\"col-12 offset-md-4 col-md-6\">Kastaci Mikail</h1>
            <div class=\"headercontactbordure row\">
                <img class=\"headercontactimg col-6 offset-md-1 col-md-1 offset-lg-2 col-lg-1\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/image_cv.jpg"), "html", null, true);
        echo "\" alt=\"image profil cv\">
                <div class=\"headercontacttext col-6 col-md-8 offset-lg-1 col-lg-6\">
                    <h3>Contact</h3>
                    <p>
                        <i class=\"fas fa-mobile-alt\"></i>Tel : 07 83 97 58 47</p>
                    <p>
                        <i class=\"far fa-envelope\"></i>Mail : mikailkastaci@gmail.com</p>
                    <p>
                        <i class=\"fas fa-map-marker-alt\"></i>Adresse : 18 Rue Henri Martin</p>
                    <p>
                        <i class=\"far fa-building\"></i>Ville : Vigneux-Sur-Seine</p>
                    <p>
                        <i class=\"far fa-calendar-alt\"></i>Date de naissance : 17/11/1997</p>
                </div>
            </div>
        </header>

        <main>
            ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "        </main>

        <footer></footer>

        ";
        // line 61
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/jquery");
        echo "
        ";
        // line 62
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/bootstrap");
        echo "

        ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
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

    // line 32
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

    // line 56
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

    // line 64
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
        return "basecv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 64,  186 => 56,  168 => 32,  150 => 30,  138 => 65,  136 => 64,  131 => 62,  127 => 61,  121 => 57,  119 => 56,  98 => 38,  91 => 33,  89 => 32,  86 => 31,  84 => 30,  79 => 28,  62 => 14,  47 => 1,);
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
        <link
        href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
        <!-- fontawesome -->
        <script src=\"https://kit.fontawesome.com/a9d92835b6.js\" crossorigin=\"anonymous\"></script>

        <!-- reset css -->
        {{ encore_entry_link_tags('css/reset') }}
        <title>Kastaci mikail CV
            {% block title %}{% endblock %}
        </title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <h1 class=\"col-12 offset-md-4 col-md-6\">Kastaci Mikail</h1>
            <div class=\"headercontactbordure row\">
                <img class=\"headercontactimg col-6 offset-md-1 col-md-1 offset-lg-2 col-lg-1\" src=\"{{ asset('image/image_cv.jpg') }}\" alt=\"image profil cv\">
                <div class=\"headercontacttext col-6 col-md-8 offset-lg-1 col-lg-6\">
                    <h3>Contact</h3>
                    <p>
                        <i class=\"fas fa-mobile-alt\"></i>Tel : 07 83 97 58 47</p>
                    <p>
                        <i class=\"far fa-envelope\"></i>Mail : mikailkastaci@gmail.com</p>
                    <p>
                        <i class=\"fas fa-map-marker-alt\"></i>Adresse : 18 Rue Henri Martin</p>
                    <p>
                        <i class=\"far fa-building\"></i>Ville : Vigneux-Sur-Seine</p>
                    <p>
                        <i class=\"far fa-calendar-alt\"></i>Date de naissance : 17/11/1997</p>
                </div>
            </div>
        </header>

        <main>
            {% block body %}{% endblock %}
        </main>

        <footer></footer>

        {{ encore_entry_script_tags('js/jquery') }}
        {{ encore_entry_script_tags('js/bootstrap') }}

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "basecv.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/basecv.html.twig");
    }
}
