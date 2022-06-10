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

/* index.html.twig */
class __TwigTemplate_9927fdfcb84889981caae8996bfd08a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
    <div class=\"container accueil\">
        <section class=\"row  col-12\">
            <article class=\"col-7\">
                <p class=\"alaUne\">A la Une</p>
                <h1>Bachelor Universitaire de Technologie</h1>
                <h4>A partir de 2021, l'offre de formation des IUT évolue !</h4>
                <h6>Le D.U.T laisse sa place à un tout nouveau système de formation appelé <strong>B.U.T</strong></h6>
                <p>Un parcours intégré en 3 ans, sans sélection supplémentaire pour atteindre le grade <strong>licence</strong>. Le nouveau diplôme s’aligne sur les standards internationaux et facilite les échanges avec les universités étrangères.
                    Tout comme le DUT, cette formation est exclusive aux IUT et sélective à l’entrée. Les <strong>B.U.T</strong> sont définis par leurs 24 spécialités. Elles s’appuieront toujours sur des programmes nationaux avec des adaptations locales.</p>
                <button type=\"button\" class=\"btn btn-warning\">En savoir plus</button>

                <hr>

                <iframe width=\"100%\" height=\"350\" src=\"https://www.youtube.com/embed/b9rnrY7mIPs\" title=\"YouTube video player\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

                <hr>

                <div class=\"article_alternance\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alternance.jpg"), "html", null, true);
        echo "\" alt=\"Oups\">
                    <div>
                        <h2>Recrutez vos futurs alternants en B.U.T</h2>
                        <p>L’IUT de Troyes s’engage depuis 50 ans à offrir un enseignement de qualité, en adéquation avec les besoins du monde professionnel, avec notamment la mise en place du Bachelor Universitaire de Technologie.
                            <br><span>Bonne nouvelle, bénéficiez de la prime d'état de 8000€ pour tout contrat d'apprentissage signé désormais avant le 30 décembre 2022.</span></p>
                        <a href=\"https://bit.ly/3wDTIN9\" target=\"_blank\"><button type=\"button\" class=\"btn btn-warning\" style=\"width: 100%\">Télecharger la brochure</button></a>
                    </div>
                </div>

                <hr>

                <div class=\"events\">
                    <h3><i class=\"fa-solid fa-calendar-check\"></i> Evènements</h3>
                    <!-- lecture du tableau et itérations -->
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 38
            echo "                        <div class=\"eventsrow\">
                            <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "image", [], "any", false, false, false, 39), "html", null, true);
            echo "\" alt=\"miniature évènements\">
                            <div class=\"enventscolumn\">
                                <h4>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "titre", [], "any", false, false, false, 41), "html", null, true);
            echo "</h4>
                                <p><i class=\"fa-solid fa-calendar-days\"></i>  ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "date", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                                <button type=\"button\" class=\"btn btn-warning\">En savoir plus</button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </div>

            </article>

            <aside class=\"col-4\">

                    <h3><i class=\"fa-solid fa-newspaper\"></i> Actualités</h3>

                <hr>
                <!-- lecture du tableau et itérations -->
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 58
            echo "                    <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "titre", [], "any", false, false, false, 58), "html", null, true);
            echo "</h4>
                    <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "image", [], "any", false, false, false, 59), "html", null, true);
            echo "\" alt=\"oups\">
                    <p><i class=\"fa-solid fa-calendar-days\"></i>  ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "date", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
                    <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </aside>


        </section>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 63,  158 => 60,  154 => 59,  149 => 58,  145 => 57,  133 => 47,  122 => 42,  118 => 41,  113 => 39,  110 => 38,  106 => 37,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container accueil\">
        <section class=\"row  col-12\">
            <article class=\"col-7\">
                <p class=\"alaUne\">A la Une</p>
                <h1>Bachelor Universitaire de Technologie</h1>
                <h4>A partir de 2021, l'offre de formation des IUT évolue !</h4>
                <h6>Le D.U.T laisse sa place à un tout nouveau système de formation appelé <strong>B.U.T</strong></h6>
                <p>Un parcours intégré en 3 ans, sans sélection supplémentaire pour atteindre le grade <strong>licence</strong>. Le nouveau diplôme s’aligne sur les standards internationaux et facilite les échanges avec les universités étrangères.
                    Tout comme le DUT, cette formation est exclusive aux IUT et sélective à l’entrée. Les <strong>B.U.T</strong> sont définis par leurs 24 spécialités. Elles s’appuieront toujours sur des programmes nationaux avec des adaptations locales.</p>
                <button type=\"button\" class=\"btn btn-warning\">En savoir plus</button>

                <hr>

                <iframe width=\"100%\" height=\"350\" src=\"https://www.youtube.com/embed/b9rnrY7mIPs\" title=\"YouTube video player\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

                <hr>

                <div class=\"article_alternance\">
                    <img src=\"{{ asset ('images/alternance.jpg') }}\" alt=\"Oups\">
                    <div>
                        <h2>Recrutez vos futurs alternants en B.U.T</h2>
                        <p>L’IUT de Troyes s’engage depuis 50 ans à offrir un enseignement de qualité, en adéquation avec les besoins du monde professionnel, avec notamment la mise en place du Bachelor Universitaire de Technologie.
                            <br><span>Bonne nouvelle, bénéficiez de la prime d'état de 8000€ pour tout contrat d'apprentissage signé désormais avant le 30 décembre 2022.</span></p>
                        <a href=\"https://bit.ly/3wDTIN9\" target=\"_blank\"><button type=\"button\" class=\"btn btn-warning\" style=\"width: 100%\">Télecharger la brochure</button></a>
                    </div>
                </div>

                <hr>

                <div class=\"events\">
                    <h3><i class=\"fa-solid fa-calendar-check\"></i> Evènements</h3>
                    <!-- lecture du tableau et itérations -->
                    {% for key in events %}
                        <div class=\"eventsrow\">
                            <img src=\"{{ key.image }}\" alt=\"miniature évènements\">
                            <div class=\"enventscolumn\">
                                <h4>{{ key.titre }}</h4>
                                <p><i class=\"fa-solid fa-calendar-days\"></i>  {{ key.date }}</p>
                                <button type=\"button\" class=\"btn btn-warning\">En savoir plus</button>
                            </div>
                        </div>
                    {% endfor %}
                </div>

            </article>

            <aside class=\"col-4\">

                    <h3><i class=\"fa-solid fa-newspaper\"></i> Actualités</h3>

                <hr>
                <!-- lecture du tableau et itérations -->
                {% for key in news %}
                    <h4>{{ key.titre }}</h4>
                    <img src=\"{{ key.image }}\" alt=\"oups\">
                    <p><i class=\"fa-solid fa-calendar-days\"></i>  {{ key.date }}</p>
                    <hr>
                {% endfor %}
            </aside>


        </section>
    </div>


{% endblock %}

", "index.html.twig", "C:\\MAMP\\localweb\\symfonyInit\\IUT_test\\templates\\index.html.twig");
    }
}
