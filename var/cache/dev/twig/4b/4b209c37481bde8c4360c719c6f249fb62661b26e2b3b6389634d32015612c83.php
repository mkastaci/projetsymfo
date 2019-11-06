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

/* cv/index.html.twig */
class __TwigTemplate_45e57fbfc655a81aea6dcd88c2d832ff118ea9e2d3c97378ad95c9b44ec80a87 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basecv.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $this->parent = $this->loadTemplate("basecv.html.twig", "cv/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <!-- css -->
    ";
        // line 5
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/cvstyle");
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
    <main>
        <div id=\"cvbody\" class=\"row\">
            <div id=\"gauche\" class=\"col-md-4\">
                <div>
                    <h3>QUALITÉ</h3>
                    <p>Autonome</p>
                    <p>Ambitieux</p>
                    <p>Volontaire</p>
                    <p>Sociable</p>
                </div>

                <div>
                    <h3>HOBBIES</h3>
                    <p>
                        <i class=\"fas fa-wrench\"></i>Mécanique</p>
                    <p class=\"description_formation\">1 Mois de stage dans un garage
                        <br>
                        j’aime travaillez, crée avec mes mains</p>
                    <p></p>
                    <p>
                        <i class=\"fas fa-running\"></i>Sport</p>
                    <p class=\"description_formation\">2 ans de karaté et 3 ans de musculation</p>
                    <p></p>
                    <p>
                        <i class=\"fas fa-car-alt\"></i>Voyage</p>
                    <p class=\"description_formation\">Turquie(2 ans), Allemagne, Espagne,<br>
                        Bulgarie, Croatie, Roumanie, Serbie</p>
                    <p></p>
                </div>

                <div>
                    <h3>COMPETENCES</h3>
                    <p>HTML5/CSS3 ★ ★ ★ ✩ ✩</p>
                    <p>BootStrap ★ ★ ★ ★ ✩</p>
                    <p>PHP/MVC ★ ★ ★ ✩ ✩</p>
                    <p>BDD-Mysql-sql ★ ★ ★ ✩ ✩</p>
                    <p>Lumen ★ ✩ ✩ ✩ ✩</p>
                    <p>Javascript ★ ★ ★ ✩ ✩</p>
                    <p>Jquery ★ ★ ✩ ✩ ✩</p>
                    <p>Wordpress ★ ✩ ✩ ✩ ✩</p>
                    <p>Langage c ★ ★ ✩ ✩ ✩</p>
                    <p>Anglais/lecture ★ ★ ★ ★ ✩</p>
                    <p>Turque ★ ★ ★ ★ ★</p>
                    <p>Français ★ ★ ★ ★ ★</p>
                </div>

                <div>
                    <h3>LINKEDIN</h3>
                    <a class=\"d-block mx-auto  mx-md-0 d-md-inline\" href=\"https://www.linkedin.com/in/mikail-kastaci-a138a4177/\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/qrcodelinkedin.png"), "html", null, true);
        echo "\" alt=\"code qr LINKEDIN\"></a>
                </div>

                <div>
                    <h3>Portfolio</h3>
                    <a class=\"d-block mx-auto mx-md-0 d-md-inline\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/portfolio.png"), "html", null, true);
        echo "\" alt=\"raccourci vers mon portfolio\"></a>
                </div>

            </div>

            <div
                id=\"droite\" class=\"col-md-8\">
                ";
        // line 72
        echo "                <section>
                    <h3>FORMATION</h3>
                    <div class=\"formation row\">
                        <section class=\"date_formation col-md-1\">
                            <p>2019 2019</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_formation\">O’clock – Formation en Téléprésentiel – Labellisée Grande École du Numérique</p>
                            <p class=\"lieu_formation\">Formation Développeur Web et Web Mobile</p>
                            <p class=\"description_formation\">3 mois de Socle&nbsp;: HTML5/CSS3/PHP/JavaScript/Mysql-sql</p>
                        </section>
                    </div>
                    <div class=\"formation row\">
                        <section class=\"date_formation col-md-1\">
                            <p>2018 2019</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_formation\">École 42 – Paris</p>
                            <p class=\"lieu_formation\">Développeur informatique</p>
                            <p class=\"description_formation\">6 mois ou j’ai fait que du langage c en autodidacte avec seulement quelques petite vidéos de 5 min a 10 min maximum
                                Et exclusivement des projet individuel ou en duo</p>
                        </section>
                    </div>
                    <div class=\"formation row\">
                        <section class=\"date_formation col-md-1\">
                            <p>2016 2018</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_formation\">Lycée Edmond Michelet - Arpajon</p>
                            <p class=\"lieu_formation\">BTS S.N.I.R</p>
                            <p class=\"description_formation\">ystème numérique informatique option réseaux
                                Programmation, html, css, langage c, QT, mise en place et installation de matériel réseaux
                                
                                - stage de 1 mois dans une entreprise dans la section technique ou j’avais fait un petit site vitrine de 3 pages</p>
                        </section>
                    </div>
                    <div class=\"formation row\">
                        <section class=\"date_formation col-md-1\">
                            <p>2015 2016</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_formation\">Lycée Rosa Parks - Montgeron</p>
                            <p class=\"lieu_formation\">BAC général technologique S.T.I.2.D</p>
                            <p class=\"description_formation\">Spécialité S.I.N (système informatique numérique)
                                programmation, code, programmation embarqué (langage c sur Arduino)</p>
                        </section>
                    </div>
                </section>
                ";
        // line 121
        echo "                <section>
                    <h3>EXPERIENCES PRO</h3>
                    <div class=\"emploie row\">
                        <section class=\"date_emploie col-md-1\">
                            <p>2018 2018</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_emploie\">Intérimaire</p>
                            <p class=\"lieu_emploie\">Human-Recrute, Savigny-le-temple</p>
                            <p class=\"description_emploie\">manutentionnaire, préparateur de commande</p>
                        </section>
                    </div>
                    <div class=\"emploie row\">
                        <section class=\"date_emploie col-md-1\">
                            <p>2016 2017</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_emploie\">Employé Polyvalent</p>
                            <p class=\"lieu_emploie\">Dominos pizza, Vigneux sur seine</p>
                            <p class=\"description_emploie\">cuisinier, caissier, ménage, gestion de la clientèle, livraison</p>
                        </section>
                    </div>
                    <div class=\"emploie row\">
                        <section class=\"date_emploie col-md-1\">
                            <p>2015 2016</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_emploie\">Chauffeur VTC</p>
                            <p class=\"lieu_emploie\">Heetch, Paris</p>
                            <p class=\"description_emploie\">Conducteur, sens de l’organisation, autonomie</p>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 161
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
        return "cv/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 161,  216 => 121,  166 => 72,  154 => 64,  146 => 59,  95 => 10,  85 => 9,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basecv.html.twig' %}

{% block stylesheets %}
    <!-- css -->
    {{ encore_entry_link_tags('css/cvstyle') }}
{% endblock %}


{% block body %}

    <main>
        <div id=\"cvbody\" class=\"row\">
            <div id=\"gauche\" class=\"col-md-4\">
                <div>
                    <h3>QUALITÉ</h3>
                    <p>Autonome</p>
                    <p>Ambitieux</p>
                    <p>Volontaire</p>
                    <p>Sociable</p>
                </div>

                <div>
                    <h3>HOBBIES</h3>
                    <p>
                        <i class=\"fas fa-wrench\"></i>Mécanique</p>
                    <p class=\"description_formation\">1 Mois de stage dans un garage
                        <br>
                        j’aime travaillez, crée avec mes mains</p>
                    <p></p>
                    <p>
                        <i class=\"fas fa-running\"></i>Sport</p>
                    <p class=\"description_formation\">2 ans de karaté et 3 ans de musculation</p>
                    <p></p>
                    <p>
                        <i class=\"fas fa-car-alt\"></i>Voyage</p>
                    <p class=\"description_formation\">Turquie(2 ans), Allemagne, Espagne,<br>
                        Bulgarie, Croatie, Roumanie, Serbie</p>
                    <p></p>
                </div>

                <div>
                    <h3>COMPETENCES</h3>
                    <p>HTML5/CSS3 ★ ★ ★ ✩ ✩</p>
                    <p>BootStrap ★ ★ ★ ★ ✩</p>
                    <p>PHP/MVC ★ ★ ★ ✩ ✩</p>
                    <p>BDD-Mysql-sql ★ ★ ★ ✩ ✩</p>
                    <p>Lumen ★ ✩ ✩ ✩ ✩</p>
                    <p>Javascript ★ ★ ★ ✩ ✩</p>
                    <p>Jquery ★ ★ ✩ ✩ ✩</p>
                    <p>Wordpress ★ ✩ ✩ ✩ ✩</p>
                    <p>Langage c ★ ★ ✩ ✩ ✩</p>
                    <p>Anglais/lecture ★ ★ ★ ★ ✩</p>
                    <p>Turque ★ ★ ★ ★ ★</p>
                    <p>Français ★ ★ ★ ★ ★</p>
                </div>

                <div>
                    <h3>LINKEDIN</h3>
                    <a class=\"d-block mx-auto  mx-md-0 d-md-inline\" href=\"https://www.linkedin.com/in/mikail-kastaci-a138a4177/\"><img src=\"{{ asset('image/qrcodelinkedin.png') }}\" alt=\"code qr LINKEDIN\"></a>
                </div>

                <div>
                    <h3>Portfolio</h3>
                    <a class=\"d-block mx-auto mx-md-0 d-md-inline\" href=\"{{ path('main') }}\"><img src=\"{{ asset('image/portfolio.png') }}\" alt=\"raccourci vers mon portfolio\"></a>
                </div>

            </div>

            <div
                id=\"droite\" class=\"col-md-8\">
                {#<!-- ------------Partie formation--------------- -->#}
                <section>
                    <h3>FORMATION</h3>
                    <div class=\"formation row\">
                        <section class=\"date_formation col-md-1\">
                            <p>2019 2019</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_formation\">O’clock – Formation en Téléprésentiel – Labellisée Grande École du Numérique</p>
                            <p class=\"lieu_formation\">Formation Développeur Web et Web Mobile</p>
                            <p class=\"description_formation\">3 mois de Socle&nbsp;: HTML5/CSS3/PHP/JavaScript/Mysql-sql</p>
                        </section>
                    </div>
                    <div class=\"formation row\">
                        <section class=\"date_formation col-md-1\">
                            <p>2018 2019</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_formation\">École 42 – Paris</p>
                            <p class=\"lieu_formation\">Développeur informatique</p>
                            <p class=\"description_formation\">6 mois ou j’ai fait que du langage c en autodidacte avec seulement quelques petite vidéos de 5 min a 10 min maximum
                                Et exclusivement des projet individuel ou en duo</p>
                        </section>
                    </div>
                    <div class=\"formation row\">
                        <section class=\"date_formation col-md-1\">
                            <p>2016 2018</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_formation\">Lycée Edmond Michelet - Arpajon</p>
                            <p class=\"lieu_formation\">BTS S.N.I.R</p>
                            <p class=\"description_formation\">ystème numérique informatique option réseaux
                                Programmation, html, css, langage c, QT, mise en place et installation de matériel réseaux
                                
                                - stage de 1 mois dans une entreprise dans la section technique ou j’avais fait un petit site vitrine de 3 pages</p>
                        </section>
                    </div>
                    <div class=\"formation row\">
                        <section class=\"date_formation col-md-1\">
                            <p>2015 2016</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_formation\">Lycée Rosa Parks - Montgeron</p>
                            <p class=\"lieu_formation\">BAC général technologique S.T.I.2.D</p>
                            <p class=\"description_formation\">Spécialité S.I.N (système informatique numérique)
                                programmation, code, programmation embarqué (langage c sur Arduino)</p>
                        </section>
                    </div>
                </section>
                {# ------------Partie Experience Pro--------------- -->#}
                <section>
                    <h3>EXPERIENCES PRO</h3>
                    <div class=\"emploie row\">
                        <section class=\"date_emploie col-md-1\">
                            <p>2018 2018</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_emploie\">Intérimaire</p>
                            <p class=\"lieu_emploie\">Human-Recrute, Savigny-le-temple</p>
                            <p class=\"description_emploie\">manutentionnaire, préparateur de commande</p>
                        </section>
                    </div>
                    <div class=\"emploie row\">
                        <section class=\"date_emploie col-md-1\">
                            <p>2016 2017</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_emploie\">Employé Polyvalent</p>
                            <p class=\"lieu_emploie\">Dominos pizza, Vigneux sur seine</p>
                            <p class=\"description_emploie\">cuisinier, caissier, ménage, gestion de la clientèle, livraison</p>
                        </section>
                    </div>
                    <div class=\"emploie row\">
                        <section class=\"date_emploie col-md-1\">
                            <p>2015 2016</p>
                        </section>
                        <section class=\"col-md-11\">
                            <p class=\"nom_emploie\">Chauffeur VTC</p>
                            <p class=\"lieu_emploie\">Heetch, Paris</p>
                            <p class=\"description_emploie\">Conducteur, sens de l’organisation, autonomie</p>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </main>

{% endblock %}


{% block javascripts %}{% endblock %}
", "cv/index.html.twig", "/Users/mikail/Desktop/web/Portfolio_symfo/templates/cv/index.html.twig");
    }
}
