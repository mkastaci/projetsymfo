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

/* MarasSofrasi.html.twig */
class __TwigTemplate_5e122978e47223c3265b6608a18250bd5601af5926c6369e801827f66556ecf5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MarasSofrasi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MarasSofrasi.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta
        http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <!-- La balise base permet de définir l'url de la racine du site ce qui permet d'utiliser des urls relatives pour toutes les ressources -->
        <base
        href=\"http://127.0.0.1:8000/\" target=\"_self\"/>

        <!-- bootstrap -->
        ";
        // line 13
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/bootstrap");
        echo "
        <style>
            .row {
                margin: 0;
            }
        </style>
        <!-- Flexslider -->
        ";
        // line 20
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/flexslider");
        echo "
        <!-- fontfamily -->
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\">
        <link
        href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
        <!-- fontawesome -->
        <script src=\"https://kit.fontawesome.com/a9d92835b6.js\" crossorigin=\"anonymous\"></script>

        <!-- reset css -->
        ";
        // line 29
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/reset");
        echo "
        <title>MarasSofrasi -
            ";
        // line 31
        $this->displayBlock('title', $context, $blocks);
        // line 32
        echo "        </title>
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "    </head>
    <body>
        <header>
            <section id=\"header\" class=\"flexslider homeslider\">
                <ul class=\"slides\">
                    <li>
                        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/resto_home.jpg"), "html", null, true);
        echo "\"/>
                        <h1>Maraş Sofrasi
                            <br>
                            <span>Plat specialité turque</span>
                        </h1>
                    </li>
                    <li>
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/plat.png"), "html", null, true);
        echo "\"/>
                    </li>
                    <li>
                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/borek.JPG"), "html", null, true);
        echo "\"/>
                    </li>
                </ul>
            </section>

            <nav class=\"menu\">
                <div>
                    <p>MS</p>
                    <ul>
                        <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maras_home");
        echo "\">home</a></li>
                        <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maras_home") . "#nosplat"), "html", null, true);
        echo "\">nos plats</a></li>
                        <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maras_home") . "#equipe"), "html", null, true);
        echo "\">équipe</a></li>
                        <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maras_home") . "#contact"), "html", null, true);
        echo "\">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        </main>

        <footer>
            <p class=\"footerp\">
                2019
                <span>Maras Sofrasi</span>
                by
                <span>Mkastaci</span>
            </p>
        </footer>

        ";
        // line 81
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/jquery");
        echo "
        ";
        // line 82
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/bootstrap");
        echo "
        ";
        // line 83
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/flexslider");
        echo "

        ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
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

    // line 33
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

    // line 69
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

    // line 85
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
        return "MarasSofrasi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 85,  231 => 69,  213 => 33,  195 => 31,  183 => 86,  181 => 85,  176 => 83,  172 => 82,  168 => 81,  155 => 70,  153 => 69,  143 => 62,  139 => 61,  135 => 60,  131 => 59,  119 => 50,  113 => 47,  103 => 40,  95 => 34,  93 => 33,  90 => 32,  88 => 31,  83 => 29,  71 => 20,  61 => 13,  47 => 1,);
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
        <!-- La balise base permet de définir l'url de la racine du site ce qui permet d'utiliser des urls relatives pour toutes les ressources -->
        <base
        href=\"http://127.0.0.1:8000/\" target=\"_self\"/>

        <!-- bootstrap -->
        {{ encore_entry_link_tags('css/bootstrap') }}
        <style>
            .row {
                margin: 0;
            }
        </style>
        <!-- Flexslider -->
        {{ encore_entry_link_tags('css/flexslider') }}
        <!-- fontfamily -->
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\">
        <link
        href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
        <!-- fontawesome -->
        <script src=\"https://kit.fontawesome.com/a9d92835b6.js\" crossorigin=\"anonymous\"></script>

        <!-- reset css -->
        {{ encore_entry_link_tags('css/reset') }}
        <title>MarasSofrasi -
            {% block title %}{% endblock %}
        </title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <section id=\"header\" class=\"flexslider homeslider\">
                <ul class=\"slides\">
                    <li>
                        <img src=\"{{ asset('image/resto_home.jpg') }}\"/>
                        <h1>Maraş Sofrasi
                            <br>
                            <span>Plat specialité turque</span>
                        </h1>
                    </li>
                    <li>
                        <img src=\"{{ asset('image/plat.png') }}\"/>
                    </li>
                    <li>
                        <img src=\"{{ asset('image/borek.JPG') }}\"/>
                    </li>
                </ul>
            </section>

            <nav class=\"menu\">
                <div>
                    <p>MS</p>
                    <ul>
                        <li><a href=\"{{ path('maras_home') }}\">home</a></li>
                        <li><a href=\"{{ path('maras_home') ~ '#nosplat' }}\">nos plats</a></li>
                        <li><a href=\"{{ path('maras_home') ~ '#equipe' }}\">équipe</a></li>
                        <li><a href=\"{{ path('maras_home') ~ '#contact' }}\">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            {% block body %}{% endblock %}
        </main>

        <footer>
            <p class=\"footerp\">
                2019
                <span>Maras Sofrasi</span>
                by
                <span>Mkastaci</span>
            </p>
        </footer>

        {{ encore_entry_script_tags('js/jquery') }}
        {{ encore_entry_script_tags('js/bootstrap') }}
        {{ encore_entry_script_tags('js/flexslider') }}

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "MarasSofrasi.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/MarasSofrasi.html.twig");
    }
}
