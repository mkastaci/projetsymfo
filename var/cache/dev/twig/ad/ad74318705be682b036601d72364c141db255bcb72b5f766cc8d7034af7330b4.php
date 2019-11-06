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

/* main/projet.html.twig */
class __TwigTemplate_cbe5be1cdf326f1e3194d1a9675df978653a44b9be6ff9a8e77491c47fca3cc1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/projet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/projet.html.twig"));

        $this->parent = $this->loadTemplate("portfolio.html.twig", "main/projet.html.twig", 1);
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/projet");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <section class='selectproject row'>
        <picture class=\"row col-12 mb-3 mb-lg-0 col-lg-6\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 15, $this->source); })()), "img", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" alt=\"image du projet\">
        </picture>
        <article class=\"description col-12 col-lg-6\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
            <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
        </article>
        <a class=\"linkprojet btn btn-primary\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 21, $this->source); })()), "page", [], "any", false, false, false, 21));
        echo "\" role=\"button\">Go</a>
    </section>


    <section class=\"sectioncommentaire\">
        <h1>laisse un commentaire</h1>


        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "            <div id=\"formcommentaire\">
                <section class=\"containercommentaire\">
                    ";
            // line 32
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["class" => "commentaire-form"]]);
            echo "


                    <div class=\"commentaire-name\">
                        <label for=\"commentaire_commentaire\" class=\"commentairelabel\">comentaire</label>
                        ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "commentaire", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "name", "placeholder" => "comment!!"], "label" => false]);
            echo "
                        <p class=\"info_form\">caractère autoriser : . ( ) : = ; &amp; # é ç è ' \" - _ @ ? ! ,</p>
                    </div>

                    <div class=\"commentaire-button row\">
                        <button type=\"submit\" class=\"sendbutton col-12 col-md-5 \">Send</button>
                        <button type=\"reset\" class=\"col-12 mt-2 col-md-5 mt-md-0\">reset</button>
                    </div>
                    ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
            echo "
                </section>
            </div>
        ";
        } else {
            // line 49
            echo "            <p class=\"infoconnexion\">Pour mettre un commentaire connecter vous
                <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">LA</a>
            </p>
        ";
        }
        // line 53
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 53, $this->source); })()), "commentaires", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 54
            echo "            <section class=\"commentaire\">
                <p class=\"info_commentaire\">
                    <span class=\"prenom\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "pseudo", [], "any", false, false, false, 56), "html", null, true);
            echo "</span>
                    <br>
                    <a class=\"email\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, ("mailto:" . twig_get_attribute($this->env, $this->source, $context["commentaire"], "email", [], "any", false, false, false, 58)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "email", [], "any", false, false, false, 58), "html", null, true);
            echo "</a>
                </p>
                <p class=\"textecommentaire\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "commentaire", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
                ";
            // line 61
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["commentaire"], "photo", [], "any", false, false, false, 61))) {
                // line 62
                echo "                    <div class=\"img-commentaire\">
                        <img src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imageprofile/" . twig_get_attribute($this->env, $this->source, $context["commentaire"], "photo", [], "any", false, false, false, 63))), "html", null, true);
                echo "\" alt=\"\">
                    </div>
                ";
            } else {
                // line 66
                echo "                    <div class=\"img-commentaire\">
                        <img src=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imageprofile/noprofil.png"), "html", null, true);
                echo "\" alt=\"\">
                    </div>
                ";
            }
            // line 70
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 71
                echo "                    <button type=\"button\" class=\"delete_com close\" aria-label=\"Close\" data-comid=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 71), "html", null, true);
                echo ">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                ";
            }
            // line 75
            echo "            </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "
    ";
        // line 85
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/projet");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 85,  277 => 84,  267 => 83,  254 => 77,  247 => 75,  239 => 71,  236 => 70,  230 => 67,  227 => 66,  221 => 63,  218 => 62,  216 => 61,  212 => 60,  205 => 58,  200 => 56,  196 => 54,  191 => 53,  185 => 50,  182 => 49,  175 => 45,  164 => 37,  156 => 32,  152 => 30,  150 => 29,  139 => 21,  134 => 19,  130 => 18,  124 => 15,  119 => 12,  109 => 11,  97 => 7,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'portfolio.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block stylesheets %}
    <!-- css -->
    {{ encore_entry_link_tags('css/projet') }}
{% endblock %}


{% block body %}

    <section class='selectproject row'>
        <picture class=\"row col-12 mb-3 mb-lg-0 col-lg-6\">
            <img src=\"{{ asset('image/' ~ projet.img) }}\" alt=\"image du projet\">
        </picture>
        <article class=\"description col-12 col-lg-6\">
            <h1>{{ projet.title }}</h1>
            <p>{{ projet.description }}</p>
        </article>
        <a class=\"linkprojet btn btn-primary\" href=\"{{ path(projet.page) }}\" role=\"button\">Go</a>
    </section>


    <section class=\"sectioncommentaire\">
        <h1>laisse un commentaire</h1>


        {% if app.user %}
            <div id=\"formcommentaire\">
                <section class=\"containercommentaire\">
                    {{ form_start(form, {'attr': {'class':'commentaire-form'}}) }}


                    <div class=\"commentaire-name\">
                        <label for=\"commentaire_commentaire\" class=\"commentairelabel\">comentaire</label>
                        {{ form_row(form.commentaire, {'attr': {'class':'name', 'placeholder':'comment!!'}, 'label':false}) }}
                        <p class=\"info_form\">caractère autoriser : . ( ) : = ; &amp; # é ç è ' \" - _ @ ? ! ,</p>
                    </div>

                    <div class=\"commentaire-button row\">
                        <button type=\"submit\" class=\"sendbutton col-12 col-md-5 \">Send</button>
                        <button type=\"reset\" class=\"col-12 mt-2 col-md-5 mt-md-0\">reset</button>
                    </div>
                    {{ form_end(form) }}
                </section>
            </div>
        {% else %}
            <p class=\"infoconnexion\">Pour mettre un commentaire connecter vous
                <a href=\"{{ path('security_login') }}\">LA</a>
            </p>
        {% endif %}
        {% for commentaire in projet.commentaires %}
            <section class=\"commentaire\">
                <p class=\"info_commentaire\">
                    <span class=\"prenom\">{{ commentaire.pseudo }}</span>
                    <br>
                    <a class=\"email\" href=\"{{ 'mailto:' ~ commentaire.email }}\">{{ commentaire.email }}</a>
                </p>
                <p class=\"textecommentaire\">{{ commentaire.commentaire }}</p>
                {% if commentaire.photo is not empty %}
                    <div class=\"img-commentaire\">
                        <img src=\"{{ asset('imageprofile/' ~ commentaire.photo) }}\" alt=\"\">
                    </div>
                {% else %}
                    <div class=\"img-commentaire\">
                        <img src=\"{{ asset('imageprofile/noprofil.png') }}\" alt=\"\">
                    </div>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                    <button type=\"button\" class=\"delete_com close\" aria-label=\"Close\" data-comid={{ commentaire.id }}>
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                {% endif %}
            </section>
        {% endfor %}
    </section>


{% endblock %}


{% block javascripts %}

    {{ encore_entry_script_tags('js/projet') }}

{% endblock %}
", "main/projet.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/main/projet.html.twig");
    }
}
