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

/* default_l/un_Joueur.html.twig */
class __TwigTemplate_30b30c1afbfc9c2c8436ffad95e06ccc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/un_Joueur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/un_Joueur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default_l/un_Joueur.html.twig", 1);
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
        echo "    <!-- Main -->
    <section id=\"main\" class=\"wrapper style1 exotic\">
        <div class=\"inner\">
            ";
        // line 7
        if ( !twig_test_empty((isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "                <div class=\"player-container\">
                    <div class=\"player-details\">
                        <h1>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 10, $this->source); })()), "prenom", [], "any", false, false, false, 10), "html", null, true);
            echo "</h1>
                        <p>Nationalité : ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 11, $this->source); })()), "nationalite", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
                        <p>Né le ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 12, $this->source); })()), "getDateDeNaissance", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
            echo "</p>
                        <p>Club Actuel : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 13, $this->source); })()), "getClubActuel", [], "method", false, false, false, 13), "html", null, true);
            echo "</p>
                        <p>Poste : ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 14, $this->source); })()), "poste", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
                        <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 15, $this->source); })()), "getDescription", [], "method", false, false, false, 15), "html", null, true);
            echo "</p>
                        <p>Agent de Joueur : <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_un_Agent", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 16, $this->source); })()), "agent", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">Lien vers l'agent</a></p>
                        <a href=\"https://www.footmercato.net/joueur/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), "html", null, true);
            echo "/statistique\">Statistique du joueur</a>
                    </div>
                    <div class=\"player-photo\">
                        <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 20, $this->source); })()), "photo", [], "any", false, false, false, 20)), "html", null, true);
            echo "\" alt=\"Photo de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_joueur"]) || array_key_exists("un_joueur", $context) ? $context["un_joueur"] : (function () { throw new RuntimeError('Variable "un_joueur" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                    </div>
                </div>
            ";
        }
        // line 24
        echo "        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default_l/un_Joueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  117 => 20,  109 => 17,  105 => 16,  101 => 15,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  79 => 10,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <!-- Main -->
    <section id=\"main\" class=\"wrapper style1 exotic\">
        <div class=\"inner\">
            {% if un_joueur is not empty %}
                <div class=\"player-container\">
                    <div class=\"player-details\">
                        <h1>{{ un_joueur.nom }} {{ un_joueur.prenom }}</h1>
                        <p>Nationalité : {{ un_joueur.nationalite }}</p>
                        <p>Né le {{ un_joueur.getDateDeNaissance|date('d/m/Y') }}</p>
                        <p>Club Actuel : {{ un_joueur.getClubActuel() }}</p>
                        <p>Poste : {{ un_joueur.poste }}</p>
                        <p>{{ un_joueur.getDescription() }}</p>
                        <p>Agent de Joueur : <a href=\"{{ path('app_un_Agent',{id:un_joueur.agent.id}) }}\">Lien vers l'agent</a></p>
                        <a href=\"https://www.footmercato.net/joueur/{{ un_joueur.nom }}-{{ un_joueur.prenom }}/statistique\">Statistique du joueur</a>
                    </div>
                    <div class=\"player-photo\">
                        <img src=\"{{ asset(un_joueur.photo) }}\" alt=\"Photo de {{ un_joueur.nom }} {{ un_joueur.prenom }}\">
                    </div>
                </div>
            {% endif %}
        </div>
    </section>
{% endblock %}
", "default_l/un_Joueur.html.twig", "/media/Qi/rkichou/KScouting/templates/default_l/un_Joueur.html.twig");
    }
}
