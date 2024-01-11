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

/* default_l/index.html.twig */
class __TwigTemplate_e66f1e0e02ffc2a3404f906d2b687ad1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default_l/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div  class=\"div-B\">

    </div>


    <div  >
        <section >
            <div>
                <h1 >Bienvenu Chez KScouting</h1>
                <h2>Entreprise de Scouting de Football</h2>
                <p>By Kichou</p>

            </div>
        </section>
        <section id=\"a-propos\">
        <section >
            <div class=\"inner\">
                <h1>A propos - Notre entreprise de scouting de joueurs de football</h1>
                <p>Notre entreprise est une agence de scouting de joueurs de football qui se concentre sur la découverte de nouveaux talents dans le monde entier. Nous sommes passionnés par le football et nous croyons que chaque joueur mérite d'avoir la chance de réaliser son potentiel.</p>
                <p>Nous avons une équipe dévouée de recruteurs professionnels qui ont une expérience de plusieurs années dans le domaine du football. Nous travaillons avec des clubs de football, des agents, des entraîneurs et des joueurs pour identifier les meilleurs talents et les aider à réaliser leurs rêves de jouer au plus haut niveau.</p>
                <p>Nous sommes fiers de notre approche personnalisée et de notre engagement envers nos clients. Nous nous efforçons de comprendre les besoins de chaque joueur et de chaque club pour garantir des résultats optimaux.</p>
                <p>Nous sommes une entreprise dynamique et innovante qui s'engage à rester à la pointe des dernières tendances et technologies dans le domaine du football. Nous sommes impatients de travailler avec vous pour découvrir les stars du football de demain.</p>
            </div>
        </section>

        <section >
            <div >
                <h2>Nos services</h2>
                <ul>
                    <li>Identification des talents</li>
                    <li>Recherche de joueurs</li>
                    <li>Scoutisme vidéo</li>
                    <li>Analyse des performances</li>
                    <li>Conseils pour les clubs</li>
                </ul>
            </div>
            <div >
                <h2>Nos objectifs</h2>
                <ol>
                    <li>Devenir le leader mondial du scouting de football</li>
                    <li>Aider les clubs à recruter les meilleurs joueurs</li>
                    <li>Développer de nouvelles techniques de scouting</li>
                    <li>Contribuer à la croissance du football dans le monde entier</li>
                </ol>
            </div>
        </section></section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default_l/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


    <div  class=\"div-B\">

    </div>


    <div  >
        <section >
            <div>
                <h1 >Bienvenu Chez KScouting</h1>
                <h2>Entreprise de Scouting de Football</h2>
                <p>By Kichou</p>

            </div>
        </section>
        <section id=\"a-propos\">
        <section >
            <div class=\"inner\">
                <h1>A propos - Notre entreprise de scouting de joueurs de football</h1>
                <p>Notre entreprise est une agence de scouting de joueurs de football qui se concentre sur la découverte de nouveaux talents dans le monde entier. Nous sommes passionnés par le football et nous croyons que chaque joueur mérite d'avoir la chance de réaliser son potentiel.</p>
                <p>Nous avons une équipe dévouée de recruteurs professionnels qui ont une expérience de plusieurs années dans le domaine du football. Nous travaillons avec des clubs de football, des agents, des entraîneurs et des joueurs pour identifier les meilleurs talents et les aider à réaliser leurs rêves de jouer au plus haut niveau.</p>
                <p>Nous sommes fiers de notre approche personnalisée et de notre engagement envers nos clients. Nous nous efforçons de comprendre les besoins de chaque joueur et de chaque club pour garantir des résultats optimaux.</p>
                <p>Nous sommes une entreprise dynamique et innovante qui s'engage à rester à la pointe des dernières tendances et technologies dans le domaine du football. Nous sommes impatients de travailler avec vous pour découvrir les stars du football de demain.</p>
            </div>
        </section>

        <section >
            <div >
                <h2>Nos services</h2>
                <ul>
                    <li>Identification des talents</li>
                    <li>Recherche de joueurs</li>
                    <li>Scoutisme vidéo</li>
                    <li>Analyse des performances</li>
                    <li>Conseils pour les clubs</li>
                </ul>
            </div>
            <div >
                <h2>Nos objectifs</h2>
                <ol>
                    <li>Devenir le leader mondial du scouting de football</li>
                    <li>Aider les clubs à recruter les meilleurs joueurs</li>
                    <li>Développer de nouvelles techniques de scouting</li>
                    <li>Contribuer à la croissance du football dans le monde entier</li>
                </ol>
            </div>
        </section></section>
    </div>
{% endblock %}

", "default_l/index.html.twig", "/media/Qi/rkichou/KScouting/templates/default_l/index.html.twig");
    }
}
