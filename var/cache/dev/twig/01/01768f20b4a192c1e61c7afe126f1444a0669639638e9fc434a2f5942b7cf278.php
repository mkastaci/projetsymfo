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

/* resto/index.html.twig */
class __TwigTemplate_954b210fd72038088b408252b64fa6f6ebe7ade35c488af87c7256f16dcc9808 extends \Twig\Template
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
        return "MarasSofrasi.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto/index.html.twig"));

        $this->parent = $this->loadTemplate("MarasSofrasi.html.twig", "resto/index.html.twig", 1);
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
        echo "    <!-- css -->
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/marashome");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

    <section id=\"nosplat\">
        <div class=\"container\">

            <section class=\"titre-plat\">
                <h2>Nos Plat</h2>
                <p>Regarder Nos Plat Specialité
                    <span>Turque</span>
                </p>
            </section>


            <section class=\"plat row\">
                <div class=\"platmenu col-3\">
                    <p>type de plat</p>
                    <ul>
                        <li>
                            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maras_home") . "#nosplat"), "html", null, true);
        echo "\" data-type=\"0\">tous les plat</a>
                        </li>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 31
            echo "                            <li>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, ((($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maras_home") . "?type=") . twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 32)) . "#nosplat"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                    </ul>
                </div>
                <div class=\"platimage row col-9\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 40
            echo "
                        <picture class=\"imgplat col-6 col-md-4\">
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maras_plat", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["plat"], "img", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" alt=\"\">
                                <div class=\"descimg\">
                                    <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "
                                        <br></p>
                                </div>
                            </a>
                        </picture>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
                </div>
            </section>
        </div>
    </section>

    <section id=\"equipe\">
        <div class=\"container\">

            <section class=\"titre-equipe\">
                <h2>Notre Equipe</h2>
                <p>Nos Cuisinier Et Serveur</p>
            </section>

            <section class=\"liste-equipe row\">
                <div class=\"profile col-12 mb-5 mb-md-0 col-md-4\">
                    <div class=\"profileimg\">
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/toriko.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"descimg\">
                            <p>cuisinier</p>
                        </div>
                    </div>
                    <h3>
                        Toriko
                    </h3>
                    <p>
                        Il est reconnu à travers le monde comme un membre des 4 grands rois bishoku-ya. Doté d'une force surhumaine et d'un odorat hors du commun, Son simple regard suffit à effrayer des bêtes féroces. Son but est de créer le menu parfait, qui serait composé de tous les meilleurs aliments existants dans le monde.
                    </p>
                    <div class=\"reseaux\">
                        <i class=\"fab fa-twitter\"></i>
                        <i class=\"fab fa-facebook-f\"></i>
                    </div>
                </div>

                <div class=\"profile col-12 mb-5 mb-md-0 col-md-4\">
                    <div class=\"profileimg\">
                        <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/sanji.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"descimg\">
                            <p>Serveur/Cuisinier</p>
                        </div>
                    </div>
                    <h3>
                        Sanji Vinsmoke
                    </h3>
                    <p>
                        Sanji est un cuisiner très doué de 21 ans, Il surpasse tous les cuistots qu’il a rencontrés excepté peut-être son mentor, Il éprouve un profond respect pour tout ce qui concerne l’art de la cuisine. Les ingrédients, les outils, la préparation, la cuisson… tout est sacré et quiconque bafoue cette sacralité s’attire les foudres de Sanji
                    </p>
                    <div class=\"reseaux\">
                        <i class=\"fab fa-twitter\"></i>
                        <i class=\"fab fa-facebook-f\"></i>
                    </div>
                </div>

                <div class=\"profile col-12 col-md-4\">
                    <div class=\"profileimg\">
                        <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/bob.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"descimg\">
                            <p>Serveur</p>
                        </div>
                    </div>
                    <h3>
                        Bob L'éponge
                    </h3>
                    <p>
                        Bob L'éponge est un cuisinier incroyable depuis tous petit il adore la cuisine, il est un expert du pâté de Krabs dont lui seul connais la recette parfaite,
                    </p>
                    <div class=\"reseaux\">
                        <i class=\"fab fa-twitter\"></i>
                        <i class=\"fab fa-facebook-f\"></i>
                    </div>
                </div>
            </section>

        </div>
    </section>

    <section id=\"contact\">
        <div class=\"container\">

            <section class=\"titre-contact\">
                <h2>Contact</h2>
                <p>Vous pouvez nous contacter on envoyer de nouvelle recette :)</p>
            </section>

            <section class=\"formcontact row\">

                <div class=\"form col-12 mb-4 mb-md-0 col-md-8\">
                    <form action=\"\" method=\"get\" class=\"form\">
                        <input type=\"text\" name=\"\" id=\"\" placeholder=\"Nom\">
                        <input type=\"mail\" name=\"\" id=\"\" placeholder=\"email\">
                        <textarea name=\"message\" id=\"message-contact\" cols=\"30\" rows=\"10\" placeholder=\"Ton Message\"></textarea>
                        <button class=\"mx-auto mx-md-0\" type=\"submit\">Send</button>
                    </form>
                </div>

                <div class=\"infocontact col-12 text-center text-md-left col-md-4\">
                    <h3>CONTACT DETAILS</h3>
                    <a href=\"mailto:\">aaa@gmail.com</a>
                    <p>07.83.97.58.47</p>
                    <p>18 rue louise
                        <br>
                        district de Shiganshina
                        <br>
                        Ile Paradis</p>
                </div>

            </section>

        </div>
    </section>

    <template id=\"platTemplate\">
        <picture class=\"imgplat col-6 col-md-4\">
            <a href=\"\">
                <img src=\"\" alt=\"\">
                <div class=\"descimg\">
                    <p></p>
                </div>
            </a>
        </picture>
    </template>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/marashome");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "resto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 178,  341 => 177,  263 => 107,  241 => 88,  219 => 69,  200 => 52,  187 => 45,  182 => 43,  178 => 42,  174 => 40,  170 => 39,  164 => 35,  151 => 32,  148 => 31,  144 => 30,  139 => 28,  119 => 10,  109 => 9,  97 => 7,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'MarasSofrasi.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block stylesheets %}
    <!-- css -->
    {{ encore_entry_link_tags('css/marashome') }}
{% endblock %}
{% block body %}


    <section id=\"nosplat\">
        <div class=\"container\">

            <section class=\"titre-plat\">
                <h2>Nos Plat</h2>
                <p>Regarder Nos Plat Specialité
                    <span>Turque</span>
                </p>
            </section>


            <section class=\"plat row\">
                <div class=\"platmenu col-3\">
                    <p>type de plat</p>
                    <ul>
                        <li>
                            <a href=\"{{ path('maras_home') ~ '#nosplat' }}\" data-type=\"0\">tous les plat</a>
                        </li>
                        {% for type in types %}
                            <li>
                                <a href=\"{{ path('maras_home') ~ '?type=' ~ type.id ~ '#nosplat' }}\" data-type=\"{{ type.id }}\">{{ type.name }}</a>
                            </li>
                        {% endfor %}

                    </ul>
                </div>
                <div class=\"platimage row col-9\">
                    {% for plat in plats %}

                        <picture class=\"imgplat col-6 col-md-4\">
                            <a href=\"{{ path('maras_plat', {'id' : plat.id}) }}\">
                                <img src=\"{{ asset('image/' ~ plat.img) }}\" alt=\"\">
                                <div class=\"descimg\">
                                    <p>{{ plat.name }}
                                        <br></p>
                                </div>
                            </a>
                        </picture>

                    {% endfor %}

                </div>
            </section>
        </div>
    </section>

    <section id=\"equipe\">
        <div class=\"container\">

            <section class=\"titre-equipe\">
                <h2>Notre Equipe</h2>
                <p>Nos Cuisinier Et Serveur</p>
            </section>

            <section class=\"liste-equipe row\">
                <div class=\"profile col-12 mb-5 mb-md-0 col-md-4\">
                    <div class=\"profileimg\">
                        <img src=\"{{ asset('image/toriko.jpg') }}\" alt=\"\">
                        <div class=\"descimg\">
                            <p>cuisinier</p>
                        </div>
                    </div>
                    <h3>
                        Toriko
                    </h3>
                    <p>
                        Il est reconnu à travers le monde comme un membre des 4 grands rois bishoku-ya. Doté d'une force surhumaine et d'un odorat hors du commun, Son simple regard suffit à effrayer des bêtes féroces. Son but est de créer le menu parfait, qui serait composé de tous les meilleurs aliments existants dans le monde.
                    </p>
                    <div class=\"reseaux\">
                        <i class=\"fab fa-twitter\"></i>
                        <i class=\"fab fa-facebook-f\"></i>
                    </div>
                </div>

                <div class=\"profile col-12 mb-5 mb-md-0 col-md-4\">
                    <div class=\"profileimg\">
                        <img src=\"{{ asset('image/sanji.png') }}\" alt=\"\">
                        <div class=\"descimg\">
                            <p>Serveur/Cuisinier</p>
                        </div>
                    </div>
                    <h3>
                        Sanji Vinsmoke
                    </h3>
                    <p>
                        Sanji est un cuisiner très doué de 21 ans, Il surpasse tous les cuistots qu’il a rencontrés excepté peut-être son mentor, Il éprouve un profond respect pour tout ce qui concerne l’art de la cuisine. Les ingrédients, les outils, la préparation, la cuisson… tout est sacré et quiconque bafoue cette sacralité s’attire les foudres de Sanji
                    </p>
                    <div class=\"reseaux\">
                        <i class=\"fab fa-twitter\"></i>
                        <i class=\"fab fa-facebook-f\"></i>
                    </div>
                </div>

                <div class=\"profile col-12 col-md-4\">
                    <div class=\"profileimg\">
                        <img src=\"{{ asset('image/bob.jpg') }}\" alt=\"\">
                        <div class=\"descimg\">
                            <p>Serveur</p>
                        </div>
                    </div>
                    <h3>
                        Bob L'éponge
                    </h3>
                    <p>
                        Bob L'éponge est un cuisinier incroyable depuis tous petit il adore la cuisine, il est un expert du pâté de Krabs dont lui seul connais la recette parfaite,
                    </p>
                    <div class=\"reseaux\">
                        <i class=\"fab fa-twitter\"></i>
                        <i class=\"fab fa-facebook-f\"></i>
                    </div>
                </div>
            </section>

        </div>
    </section>

    <section id=\"contact\">
        <div class=\"container\">

            <section class=\"titre-contact\">
                <h2>Contact</h2>
                <p>Vous pouvez nous contacter on envoyer de nouvelle recette :)</p>
            </section>

            <section class=\"formcontact row\">

                <div class=\"form col-12 mb-4 mb-md-0 col-md-8\">
                    <form action=\"\" method=\"get\" class=\"form\">
                        <input type=\"text\" name=\"\" id=\"\" placeholder=\"Nom\">
                        <input type=\"mail\" name=\"\" id=\"\" placeholder=\"email\">
                        <textarea name=\"message\" id=\"message-contact\" cols=\"30\" rows=\"10\" placeholder=\"Ton Message\"></textarea>
                        <button class=\"mx-auto mx-md-0\" type=\"submit\">Send</button>
                    </form>
                </div>

                <div class=\"infocontact col-12 text-center text-md-left col-md-4\">
                    <h3>CONTACT DETAILS</h3>
                    <a href=\"mailto:\">aaa@gmail.com</a>
                    <p>07.83.97.58.47</p>
                    <p>18 rue louise
                        <br>
                        district de Shiganshina
                        <br>
                        Ile Paradis</p>
                </div>

            </section>

        </div>
    </section>

    <template id=\"platTemplate\">
        <picture class=\"imgplat col-6 col-md-4\">
            <a href=\"\">
                <img src=\"\" alt=\"\">
                <div class=\"descimg\">
                    <p></p>
                </div>
            </a>
        </picture>
    </template>

{% endblock %}


{% block javascripts %}
    {{ encore_entry_script_tags('js/marashome') }}
{% endblock %}
", "resto/index.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/resto/index.html.twig");
    }
}
