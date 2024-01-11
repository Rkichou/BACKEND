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

/* default_l/contact_nous.html.twig */
class __TwigTemplate_c7afab5f9de7233e5f0187ba7dcbca33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/contact_nous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_l/contact_nous.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default_l/contact_nous.html.twig", 1);
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
        echo "    <!-- Wrapper -->
    <div id=\"wrapper\">

        <!-- Contact -->
        <section id=\"three\" class=\"wrapper style1 fade-up\">
            <div class=\"inner\">
                <h2>Contactez-nous !</h2>
                <p>N'hésitez pas à nous contacter si vous avez des questions ou si vous êtes intéressé à travailler avec nous. Vous pouvez nous envoyer un message en utilisant le formulaire de contact ci-dessous, ou en nous envoyant un e-mail directement à l'adresse contact@entreprise-scouting-football.com . Nous ferons de notre mieux pour vous répondre dans les plus brefs délais.\"</p>
                <div class=\"split style1\">
                    <section>
                        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'widget');
        echo "
                        <button type=\"submit\">Envoyez</button>
                        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
                    </section>
                    <section>
                        <ul class=\"contact\">
                            <li>
                                <h3>Adresse</h3>
                                <span>29 rue de la Huguenotte <br />
\t\t\t\t\t\t\t\t\t\t\t17000 La Rochelle<br />
\t\t\t\t\t\t\t\t\t\t\tFrance</span>
                            </li>
                            <li>
                                <h3>Email</h3>
                                <a href=\"#\">KScouting@outlook.fr</a>
                            </li>
                            <li>
                                <h3>Téléphone</h3>
                                <span>06 63 23 85 52</span>
                            </li>
                            <li>
                                <h3>Réseaux sociaux</h3>
                                <ul class=\"icons\">
                                    <li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                                    <li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
                                    <li><a href=\"#\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
                                    <li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                                    <li><a href=\"#\" class=\"icon brands fa-linkedin-in\"><span class=\"label\">LinkedIn</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </section>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "    <footer id=\"footer\" class=\"wrapper style1-alt\">
        <div class=\"inner\">
            <ul class=\"main\">
                <section>
    <p> Tous droits réservés © 2023 - Scouting de football</p>
    </section>

            </ul>  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default_l/contact_nous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 55,  136 => 54,  90 => 17,  85 => 15,  81 => 14,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <!-- Wrapper -->
    <div id=\"wrapper\">

        <!-- Contact -->
        <section id=\"three\" class=\"wrapper style1 fade-up\">
            <div class=\"inner\">
                <h2>Contactez-nous !</h2>
                <p>N'hésitez pas à nous contacter si vous avez des questions ou si vous êtes intéressé à travailler avec nous. Vous pouvez nous envoyer un message en utilisant le formulaire de contact ci-dessous, ou en nous envoyant un e-mail directement à l'adresse contact@entreprise-scouting-football.com . Nous ferons de notre mieux pour vous répondre dans les plus brefs délais.\"</p>
                <div class=\"split style1\">
                    <section>
                        {{ form_start(form) }}
                        {{ form_widget(form) }}
                        <button type=\"submit\">Envoyez</button>
                        {{ form_end(form) }}
                    </section>
                    <section>
                        <ul class=\"contact\">
                            <li>
                                <h3>Adresse</h3>
                                <span>29 rue de la Huguenotte <br />
\t\t\t\t\t\t\t\t\t\t\t17000 La Rochelle<br />
\t\t\t\t\t\t\t\t\t\t\tFrance</span>
                            </li>
                            <li>
                                <h3>Email</h3>
                                <a href=\"#\">KScouting@outlook.fr</a>
                            </li>
                            <li>
                                <h3>Téléphone</h3>
                                <span>06 63 23 85 52</span>
                            </li>
                            <li>
                                <h3>Réseaux sociaux</h3>
                                <ul class=\"icons\">
                                    <li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                                    <li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
                                    <li><a href=\"#\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
                                    <li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                                    <li><a href=\"#\" class=\"icon brands fa-linkedin-in\"><span class=\"label\">LinkedIn</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </section>

    </div>
{% endblock %}

{% block footer %}
    <footer id=\"footer\" class=\"wrapper style1-alt\">
        <div class=\"inner\">
            <ul class=\"main\">
                <section>
    <p> Tous droits réservés © 2023 - Scouting de football</p>
    </section>

            </ul>  </div>
{% endblock %}", "default_l/contact_nous.html.twig", "/media/Qi/rkichou/KScouting/templates/default_l/contact_nous.html.twig");
    }
}
