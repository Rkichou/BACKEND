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

/* default_l/un_Agent.html.twig */
class __TwigTemplate_d35bd3ba2579b212b515deaf96b2d36d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/un_Agent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/un_Agent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default_l/un_Agent.html.twig", 1);
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
    <section id=\"main\">

        <ul class=\"inner\">

            ";
        // line 9
        if ( !twig_test_empty((isset($context["un_Agent"]) || array_key_exists("un_Agent", $context) ? $context["un_Agent"] : (function () { throw new RuntimeError('Variable "un_Agent" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "                <ul>
                    <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["un_Agent"]) || array_key_exists("un_Agent", $context) ? $context["un_Agent"] : (function () { throw new RuntimeError('Variable "un_Agent" does not exist.', 11, $this->source); })()), "photo", [], "any", false, false, false, 11)), "html", null, true);
            echo "\" alt=\"Photo de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_Agent"]) || array_key_exists("un_Agent", $context) ? $context["un_Agent"] : (function () { throw new RuntimeError('Variable "un_Agent" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_Agent"]) || array_key_exists("un_Agent", $context) ? $context["un_Agent"] : (function () { throw new RuntimeError('Variable "un_Agent" does not exist.', 11, $this->source); })()), "prenom", [], "any", false, false, false, 11), "html", null, true);
            echo " \">
                    <h1>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_Agent"]) || array_key_exists("un_Agent", $context) ? $context["un_Agent"] : (function () { throw new RuntimeError('Variable "un_Agent" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_Agent"]) || array_key_exists("un_Agent", $context) ? $context["un_Agent"] : (function () { throw new RuntimeError('Variable "un_Agent" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), "html", null, true);
            echo "</h1>
                    <p>Email : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["un_Agent"]) || array_key_exists("un_Agent", $context) ? $context["un_Agent"] : (function () { throw new RuntimeError('Variable "un_Agent" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>

                </ul>

            ";
        }
        // line 18
        echo "        </ul>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default_l/un_Agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  94 => 13,  88 => 12,  80 => 11,  77 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <!-- Main -->
    <section id=\"main\">

        <ul class=\"inner\">

            {% if un_Agent is not  empty %}
                <ul>
                    <img src=\"{{ asset( un_Agent.photo ) }}\" alt=\"Photo de {{ un_Agent.nom }} {{ un_Agent.prenom }} \">
                    <h1>{{ un_Agent.nom }} {{ un_Agent.prenom }}</h1>
                    <p>Email : {{ un_Agent.email }}</p>

                </ul>

            {% endif %}
        </ul>
    </section>
{% endblock %}



", "default_l/un_Agent.html.twig", "/media/Qi/rkichou/KScouting/templates/default_l/un_Agent.html.twig");
    }
}
