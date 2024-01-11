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

/* default_l/Offres.html.twig */
class __TwigTemplate_92d149c07bb8849b49557c07aa55a254 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/Offres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/Offres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default_l/Offres.html.twig", 1);
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
        echo "    <div >
        <section>
            <div >
                <h1 style=\"color: #261c3e;font-family: 'Bitstream Charter', sans-serif;\">Nos Joueurs</h1>
                <p>Nous sommes fiers de présenter notre équipe de joueurs de football talentueux. Nos joueurs sont des athlètes passionnés et dévoués qui ont travaillé dur pour perfectionner leurs compétences sur le terrain.</p>
                <p>Nous avons une équipe de joueurs expérimentés et émergents, chacun apportant sa propre expertise et son style de jeu unique. Nous sommes convaincus que nos joueurs sont parmi les meilleurs et qu'ils sont prêts à relever tous les défis qui se présentent à eux sur le terrain. Découvrez nos joueurs et apprenez à connaître leur histoire, leur parcours et leur passion pour le football</p>
            </div>
        </section>

        <div class=\"offer-grid\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Offres"]) || array_key_exists("Offres", $context) ? $context["Offres"] : (function () { throw new RuntimeError('Variable "Offres" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 15
            echo "                <div class=\"offer-card\">
                    <div class=\"offer-player\">
                        <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "joueur", [], "any", false, false, false, 17), "photo", [], "any", false, false, false, 17), "html", null, true);
            echo "\" alt=\"Photo de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "joueur", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "joueur", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"offer-details\">
                        <p>Offre de transfert :</p>
                        <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "joueur", [], "any", false, false, false, 21), "getClubActuel", [], "method", false, false, false, 21), "html", null, true);
            echo "  -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "club", [], "any", false, false, false, 21), "html", null, true);
            echo " </p>
                        <p>Montant de l'offre : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "montant", [], "any", false, false, false, 22), "html", null, true);
            echo " €</p>
                        <p>Date de l'offre : ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "joueur", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
            echo " </p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default_l/Offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  109 => 23,  105 => 22,  99 => 21,  88 => 17,  84 => 15,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div >
        <section>
            <div >
                <h1 style=\"color: #261c3e;font-family: 'Bitstream Charter', sans-serif;\">Nos Joueurs</h1>
                <p>Nous sommes fiers de présenter notre équipe de joueurs de football talentueux. Nos joueurs sont des athlètes passionnés et dévoués qui ont travaillé dur pour perfectionner leurs compétences sur le terrain.</p>
                <p>Nous avons une équipe de joueurs expérimentés et émergents, chacun apportant sa propre expertise et son style de jeu unique. Nous sommes convaincus que nos joueurs sont parmi les meilleurs et qu'ils sont prêts à relever tous les défis qui se présentent à eux sur le terrain. Découvrez nos joueurs et apprenez à connaître leur histoire, leur parcours et leur passion pour le football</p>
            </div>
        </section>

        <div class=\"offer-grid\">
            {% for offre in Offres %}
                <div class=\"offer-card\">
                    <div class=\"offer-player\">
                        <img src=\"{{ offre.joueur.photo }}\" alt=\"Photo de {{ offre.joueur.nom }} {{ offre.joueur.prenom }}\">
                    </div>
                    <div class=\"offer-details\">
                        <p>Offre de transfert :</p>
                        <p>{{ offre.joueur.getClubActuel() }}  -> {{ offre.club }} </p>
                        <p>Montant de l'offre : {{ offre.montant }} €</p>
                        <p>Date de l'offre : {{ offre.joueur.nom }} </p>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "default_l/Offres.html.twig", "/media/Qi/rkichou/KScouting/templates/default_l/Offres.html.twig");
    }
}
