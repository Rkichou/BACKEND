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

/* default_l/Joueurs.html.twig */
class __TwigTemplate_804198557a80bf38fb0fc0fe02eb71e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/Joueurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/Joueurs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default_l/Joueurs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div >
        <section >
            <div >
                <h1 style=\"color: #261c3e;font-family: 'Bitstream Charter', sans-serif;\">Nos Joueurs</h1>
                <p>Nous sommes fiers de présenter notre équipe de joueurs de football talentueux. Nos joueurs sont des athlètes passionnés et dévoués qui ont travaillé dur pour perfectionner leurs compétences sur le terrain.</p>
                <p>Nous avons une équipe de joueurs expérimentés et émergents, chacun apportant sa propre expertise et son style de jeu unique. Nous sommes convaincus que nos joueurs sont parmi les meilleurs et qu'ils sont prêts à relever tous les défis qui se présentent à eux sur le terrain. Découvrez nos joueurs et apprenez à connaître leur histoire, leur parcours et leur passion pour le football</p>
            </div>
        </section>

        <div class=\"photo-grid\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Joueurs"]) || array_key_exists("Joueurs", $context) ? $context["Joueurs"] : (function () { throw new RuntimeError('Variable "Joueurs" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 16
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_un_Joueur", ["id" => twig_get_attribute($this->env, $this->source, $context["joueur"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"photo-card\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "photo", [], "any", false, false, false, 17), "html", null, true);
            echo "\" alt=\"Photo de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default_l/Joueurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  89 => 17,  84 => 16,  80 => 15,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <div >
        <section >
            <div >
                <h1 style=\"color: #261c3e;font-family: 'Bitstream Charter', sans-serif;\">Nos Joueurs</h1>
                <p>Nous sommes fiers de présenter notre équipe de joueurs de football talentueux. Nos joueurs sont des athlètes passionnés et dévoués qui ont travaillé dur pour perfectionner leurs compétences sur le terrain.</p>
                <p>Nous avons une équipe de joueurs expérimentés et émergents, chacun apportant sa propre expertise et son style de jeu unique. Nous sommes convaincus que nos joueurs sont parmi les meilleurs et qu'ils sont prêts à relever tous les défis qui se présentent à eux sur le terrain. Découvrez nos joueurs et apprenez à connaître leur histoire, leur parcours et leur passion pour le football</p>
            </div>
        </section>

        <div class=\"photo-grid\">
            {% for joueur in Joueurs %}
                <a href=\"{{ path('app_un_Joueur',{id:joueur.id}) }}\" class=\"photo-card\">
                    <img src=\"{{ joueur.photo }}\" alt=\"Photo de {{ joueur.nom }} {{ joueur.prenom }}\">
                </a>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "default_l/Joueurs.html.twig", "/media/Qi/rkichou/KScouting/templates/default_l/Joueurs.html.twig");
    }
}
