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

/* base.html.twig */
class __TwigTemplate_174f0564b35eb6ad5f22d9a6bf6eaedf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </head>
    ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "

        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        <!-- Footer -->
    ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 116
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "KScouting ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/card.css"), "html", null, true);
        echo "\">




        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "        <script>new fullpage('#fullpage', {
                autoScrolling: true,
                navigation: true,
            });
        </script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "
        <header id=\"header\">      <div >
            <nav>
                <ul>
                    <li ><a href=\"/\">Accueil</a></li>
                    <li><a href=\"/#a-propos\" >A propos</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Joueurs");
        echo "\"> Joueurs</a></li>
                    <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Agents");
        echo "\"> Agents</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Clubs");
        echo "\">Club</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Offres");
        echo "\">Offre</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_nous");
        echo "\">Nous Contacter</a></li>
                    <H1 class=\"logo\">K-Scouting</H1>
                    <!--<li><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/K-Scouting.jpeg"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\"></li>!-->
                </ul>
               
            </nav>

        </div>
        </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "


        <!-- <footer id=\"footer\" >
             <div class=\"footer-section\">
                 <ul >
                     <section>
                         <ul>
                             <li>
                                 <h3>Adresse</h3>
                                 <span>29 rue de La Huguenotte<br />
                                             17000 La Rochelle<br />
                                             France</span>
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
                             <section>
                                 <p> Tous droits réservés © 2023 - Scouting de football</p>
                             </section>
                         </ul>
                     </section>
                 </ul>
             </div>
         </footer>-->
        <footer id=\"footer\">
            <div class=\"footer-section\">
                <h3>Adresse</h3>
                <span>29 rue de La Huguenotte<br />
\t\t\t\t\t\t\t\t\t\t\t17000 La Rochelle<br />
\t\t\t\t\t\t\t\t\t\t\tFrance</span>
                <h3>Email</h3>
                <a href=\"#\">KScouting@outlook.fr</a>
                <!-- Première partie du footer -->
            </div>
            <div class=\"footer-section\">
                <h3>Téléphone</h3>
                <span>06 63 23 85 52</span>
                <!-- Deuxième partie du footer -->
            </div>
            <div class=\"footer-section\">
                <ul>
                <li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
                <li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon brands fa-linkedin-in\"><span class=\"label\">LinkedIn</span></a></li>
                </ul>
                <!-- Troisième partie du footer -->
            </div>
        </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  251 => 49,  241 => 48,  223 => 46,  205 => 36,  200 => 34,  196 => 33,  192 => 32,  188 => 31,  184 => 30,  176 => 24,  166 => 23,  150 => 15,  140 => 14,  123 => 7,  113 => 6,  94 => 5,  82 => 116,  80 => 48,  77 => 47,  75 => 46,  71 => 44,  69 => 23,  66 => 22,  64 => 14,  61 => 13,  59 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}KScouting {% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/card.css') }}\">




        {% endblock %}

        {% block javascripts %}
        <script>new fullpage('#fullpage', {
                autoScrolling: true,
                navigation: true,
            });
        </script>

        {% endblock %}
    </head>
    {% block header %}

        <header id=\"header\">      <div >
            <nav>
                <ul>
                    <li ><a href=\"/\">Accueil</a></li>
                    <li><a href=\"/#a-propos\" >A propos</a></li>
                    <li><a href=\"{{ path('app_Joueurs') }}\"> Joueurs</a></li>
                    <li><a href=\"{{ path('app_Agents') }}\"> Agents</a></li>
                    <li><a href=\"{{ path('app_Clubs') }}\">Club</a></li>
                    <li><a href=\"{{ path('app_Offres') }}\">Offre</a></li>
                    <li><a href=\"{{ path('app_contact_nous') }}\">Nous Contacter</a></li>
                    <H1 class=\"logo\">K-Scouting</H1>
                    <!--<li><img src=\"{{ asset('images/K-Scouting.jpeg') }}\" alt=\"Logo\" class=\"logo\"></li>!-->
                </ul>
               
            </nav>

        </div>
        </header>
    {% endblock %}


        {% block body %}{% endblock %}
        <!-- Footer -->
    {% block footer %}



        <!-- <footer id=\"footer\" >
             <div class=\"footer-section\">
                 <ul >
                     <section>
                         <ul>
                             <li>
                                 <h3>Adresse</h3>
                                 <span>29 rue de La Huguenotte<br />
                                             17000 La Rochelle<br />
                                             France</span>
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
                             <section>
                                 <p> Tous droits réservés © 2023 - Scouting de football</p>
                             </section>
                         </ul>
                     </section>
                 </ul>
             </div>
         </footer>-->
        <footer id=\"footer\">
            <div class=\"footer-section\">
                <h3>Adresse</h3>
                <span>29 rue de La Huguenotte<br />
\t\t\t\t\t\t\t\t\t\t\t17000 La Rochelle<br />
\t\t\t\t\t\t\t\t\t\t\tFrance</span>
                <h3>Email</h3>
                <a href=\"#\">KScouting@outlook.fr</a>
                <!-- Première partie du footer -->
            </div>
            <div class=\"footer-section\">
                <h3>Téléphone</h3>
                <span>06 63 23 85 52</span>
                <!-- Deuxième partie du footer -->
            </div>
            <div class=\"footer-section\">
                <ul>
                <li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
                <li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon brands fa-linkedin-in\"><span class=\"label\">LinkedIn</span></a></li>
                </ul>
                <!-- Troisième partie du footer -->
            </div>
        </footer>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "/media/Qi/rkichou/KScouting/templates/base.html.twig");
    }
}
