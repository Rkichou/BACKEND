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

/* default_l/Agents.html.twig */
class __TwigTemplate_9196c5d4bb27c475642813b1bc7b7668 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/Agents.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/Agents.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default_l/Agents.html.twig", 1);
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
        echo "    <section >
        <ul>   <div class>
                <li>  <h1 style=\"color: #261c3e;font-family: 'Bitstream Charter', sans-serif;\">Nos Agents de Joueurs </h1>
                    <p >Nos agents sont des professionnels passionnés et dévoués, spécialisés dans la représentation de joueurs de football. Ils ont acquis une expérience considérable dans l'industrie du football, et travaillent chaque jour pour aider nos joueurs à atteindre leur plein potentiel sur et en dehors du terrain. </p>
                    <p> Avec leur expertise et leur réseau étendu, nos agents sont en mesure de fournir à nos joueurs les meilleures opportunités de carrière, en les aidant à trouver des clubs adaptés à leurs compétences et à leurs ambitions. Nous sommes fiers de notre équipe d'agents, qui s'engage à offrir un service de qualité supérieure à nos joueurs.</p>
                </li>
            </div> </ul>
    </section>
    <table border=\"1\">
        <thead>
        <tr>
            <th>photo</th>
            <th>Nom</th>
            <th>prenom</th>
            <th>email</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Agents"]) || array_key_exists("Agents", $context) ? $context["Agents"] : (function () { throw new RuntimeError('Variable "Agents" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Agent"]) {
            // line 23
            echo "            <tr>
                <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Agent"], "photo", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Agent"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Agent"], "prenom", [], "any", false, false, false, 24), "html", null, true);
            echo "\"></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Agent"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Agent"], "prenom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Agent"], "email", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default_l/Agents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  107 => 26,  103 => 25,  95 => 24,  92 => 23,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <section >
        <ul>   <div class>
                <li>  <h1 style=\"color: #261c3e;font-family: 'Bitstream Charter', sans-serif;\">Nos Agents de Joueurs </h1>
                    <p >Nos agents sont des professionnels passionnés et dévoués, spécialisés dans la représentation de joueurs de football. Ils ont acquis une expérience considérable dans l'industrie du football, et travaillent chaque jour pour aider nos joueurs à atteindre leur plein potentiel sur et en dehors du terrain. </p>
                    <p> Avec leur expertise et leur réseau étendu, nos agents sont en mesure de fournir à nos joueurs les meilleures opportunités de carrière, en les aidant à trouver des clubs adaptés à leurs compétences et à leurs ambitions. Nous sommes fiers de notre équipe d'agents, qui s'engage à offrir un service de qualité supérieure à nos joueurs.</p>
                </li>
            </div> </ul>
    </section>
    <table border=\"1\">
        <thead>
        <tr>
            <th>photo</th>
            <th>Nom</th>
            <th>prenom</th>
            <th>email</th>
        </tr>
        </thead>
        <tbody>
        {% for Agent in Agents %}
            <tr>
                <td><img src=\"{{ Agent.photo }}\" alt=\"{{ Agent.nom }} {{ Agent.prenom }}\"></td>
                <td>{{ Agent.nom }}</td>
                <td>{{ Agent.prenom }}</td>
                <td>{{ Agent.email }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}


", "default_l/Agents.html.twig", "/media/Qi/rkichou/KScouting/templates/default_l/Agents.html.twig");
    }
}
