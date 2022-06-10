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

/* departements.html.twig */
class __TwigTemplate_5e60ea3305ef2b6d2a13425ec9b3123c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departements.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departements.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departements.html.twig", 1);
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
    <nav class=\"breadcrumbnav\" aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("iut_test_technique");
        echo "\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">L'IUT</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Départements</li>
        </ol>
    </nav>

    <div class=\"container\">
        <div class=\"row col-12 deptstitle\">
            <h1>Départements</h1>
            <h4>L’IUT de Troyes compte aujourd’hui 6 départements et 1 service de formation continue et alternance.</h4>
        </div>
    </div>

    <section class=\"container col-12 depts\">


        <!-- lecture du tableau et itérations -->
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depts"]) || array_key_exists("depts", $context) ? $context["depts"] : (function () { throw new RuntimeError('Variable "depts" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 25
            echo "
            <div class=\"card col-3\">
                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "logo", [], "any", false, false, false, 27), "html", null, true);
            echo "\" alt=\"Oups\" style=\"border-bottom: solid ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "couleur", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
                <div class=\"card-body\">
                    <h5 class=\"card-text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo " | <strong style=\"color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "couleur", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "sigle", [], "any", false, false, false, 29), "html", null, true);
            echo "</strong></h5>
                    <p class=\"card-text\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "presentation", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                    <button type=\"button\" class=\"btn btn-warning\">Découvrir</button>
                    <hr>
                    <div class=\"card-text deptsinfos\">
                        <p>Responsable : <strong>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "responsable", [], "any", false, false, false, 34), "html", null, true);
            echo "</strong></p>
                        <p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "mail_responsable", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                        <p>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "tel_responsable", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "departements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  131 => 36,  127 => 35,  123 => 34,  116 => 30,  108 => 29,  101 => 27,  97 => 25,  93 => 24,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <nav class=\"breadcrumbnav\" aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path ('iut_test_technique') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">L'IUT</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Départements</li>
        </ol>
    </nav>

    <div class=\"container\">
        <div class=\"row col-12 deptstitle\">
            <h1>Départements</h1>
            <h4>L’IUT de Troyes compte aujourd’hui 6 départements et 1 service de formation continue et alternance.</h4>
        </div>
    </div>

    <section class=\"container col-12 depts\">


        <!-- lecture du tableau et itérations -->
        {% for key in depts %}

            <div class=\"card col-3\">
                <img src=\"{{ key.logo }}\" alt=\"Oups\" style=\"border-bottom: solid {{ key.couleur }}\">
                <div class=\"card-body\">
                    <h5 class=\"card-text\">{{ key.nom }} | <strong style=\"color: {{ key.couleur }}\">{{ key.sigle }}</strong></h5>
                    <p class=\"card-text\">{{ key.presentation }}</p>
                    <button type=\"button\" class=\"btn btn-warning\">Découvrir</button>
                    <hr>
                    <div class=\"card-text deptsinfos\">
                        <p>Responsable : <strong>{{ key.responsable }}</strong></p>
                        <p>{{ key.mail_responsable }}</p>
                        <p>{{ key.tel_responsable }}</p>
                    </div>
                </div>
            </div>

        {% endfor %}

    </section>

{% endblock %}", "departements.html.twig", "C:\\MAMP\\localweb\\symfonyInit\\IUT_test\\templates\\departements.html.twig");
    }
}
