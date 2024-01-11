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

/* default_l/clubs.html.twig */
class __TwigTemplate_99ce3a148239e26543b248b3d2c3889a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/clubs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/clubs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default_l/clubs.html.twig", 1);
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
    <section id=\"intro\">
        <ul>   <div class=\"inner\">
                <li>  <h1 style=\"color: #261c3e;font-family: 'Bitstream Charter', sans-serif;\">Club En Partenariat </h1>
                    <p >Nous sommes ravis de vous présenter notre sélection de clubs partenaires, avec qui nous partageons des valeurs communes dans le monde du football. Chez KScouting , nous sommes passionnés par le développement des talents de demain et nous croyons fermement que nos partenariats avec ces clubs prestigieux nous permettent de réaliser cette ambition.</p>
                    <p> Nous sommes engagés à travailler en étroite collaboration avec ces professionnels pour offrir les meilleures opportunités à nos joueurs et pour contribuer à la croissance du football à travers le monde. Découvrez ci-dessous notre liste de clubs partenaires et les avantages de travailler avec eux.</p>
                </li>
            </div> </ul>
    </section>

    <table border=\"1\">
        <thead>
        <tr>
            <th>Logo</th>
            <th>Nom</th>
            <th>Pays</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 25
            echo "            <tr>
                <td><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "logo", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"Photo de Bilel Brahimi\"></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "Pays", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default_l/clubs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  105 => 28,  101 => 27,  97 => 26,  94 => 25,  90 => 24,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <section id=\"intro\">
        <ul>   <div class=\"inner\">
                <li>  <h1 style=\"color: #261c3e;font-family: 'Bitstream Charter', sans-serif;\">Club En Partenariat </h1>
                    <p >Nous sommes ravis de vous présenter notre sélection de clubs partenaires, avec qui nous partageons des valeurs communes dans le monde du football. Chez KScouting , nous sommes passionnés par le développement des talents de demain et nous croyons fermement que nos partenariats avec ces clubs prestigieux nous permettent de réaliser cette ambition.</p>
                    <p> Nous sommes engagés à travailler en étroite collaboration avec ces professionnels pour offrir les meilleures opportunités à nos joueurs et pour contribuer à la croissance du football à travers le monde. Découvrez ci-dessous notre liste de clubs partenaires et les avantages de travailler avec eux.</p>
                </li>
            </div> </ul>
    </section>

    <table border=\"1\">
        <thead>
        <tr>
            <th>Logo</th>
            <th>Nom</th>
            <th>Pays</th>

        </tr>
        </thead>
        <tbody>
        {% for club in clubs %}
            <tr>
                <td><img src=\"{{ club.logo }}\" alt=\"Photo de Bilel Brahimi\"></td>
                <td>{{ club.nom }}</td>
                <td>{{ club.Pays }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

", "default_l/clubs.html.twig", "/media/Qi/rkichou/KScouting/templates/default_l/clubs.html.twig");
    }
}
