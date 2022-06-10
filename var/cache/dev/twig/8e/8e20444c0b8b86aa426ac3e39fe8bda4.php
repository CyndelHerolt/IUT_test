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
class __TwigTemplate_9fb1fb2fae4166716251cf3d8e7c66b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
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
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>IUT de Troyes</title>


    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "</head>

<body>

<header>
    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("iut_test_technique");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/IUT.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
    <div class=\"networks\">
        <div>
            <a href=\"https://www.facebook.com/IUT10/\" target=\"_blank\"><i class=\"fa-brands fa-facebook-f fa-lg\"></i></a>
            <a href=\"https://twitter.com/IutTroyes\" target=\"_blank\"><i class=\"fa-brands fa-twitter fa-lg\"></i></a>
            <a href=\"https://www.instagram.com/iuttroyes/\" target=\"_blank\"><i class=\"fa-brands fa-instagram fa-lg\"></i></a>
            <a href=\"https://www.youtube.com/channel/UCNGH4rCDYJ_XAyXw6j4v9lg\" target=\"_blank\"><i class=\"fa-brands fa-youtube fa-lg\"></i></a>
            <a href=\"https://www.linkedin.com/company/iut-de-troyes/?originalSubdomain=fr\" target=\"_blank\"><i class=\"fa-brands fa-linkedin-in fa-lg\"></i></a>
            <a href=\"https://www.flickr.com/photos/138201145@N07/\" target=\"_blank\"><i class=\"fa-brands fa-flickr fa-lg\"></i></a>
        </div>
        <nav>
            <ul class=\"extralinks\">
                <a href=\"https://intranetv3.iut-troyes.univ-reims.fr/\" target=\"_blank\" class=\"menuitem\"><li>Intranet</li></a>
                <a href=\"https://ebureau.univ-reims.fr/\" target=\"_blank\" class=\"menuitem\"><li>Bureau Virtuel</li></a>
                <a href=\"https://roundcube.univ-reims.fr/\" target=\"_blank\" class=\"menuitem\"><li>Messagerie</li></a>
                <a href=\"http://annuaires.univ-reims.fr/\" target=\"_blank\" class=\"menuitem\"><li>Annuaire</li></a>
                <a href=\"https://www.iut-troyes.univ-reims.fr/biblioth%C3%A8que-link.html\" target=\"_blank\" class=\"menuitem\"><li>Bibliothèque</li></a>
            </ul>
        </nav>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarScroll\" aria-controls=\"navbarScroll\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarScroll\">
                <div class=\"flexnav\">
                    <ul class=\"navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("iut_test_technique");
        echo "\">Accueil</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                L'IUT
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Actualités</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">L'IUT en chiffres</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("iut_dept");
        echo "\">Départements</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Organigramme</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Revue de presse</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Rapport d'activité</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Nous trouver</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Formations
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Domaines d'étude</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Modalités de formation</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">VAE/VAPP</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Passeport vers l'étranger</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Passeport vers l'université</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                International
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Relations internationales</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Etudier à l'étranger</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Stages à l'étranger</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Travailler à l'étranger</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Universités partenaires</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Etudiants étrangers</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">TOEIC</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Entreprises
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Formation aux entreprises</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Service emploi</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Stages en entreprise</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Taxe d'apprentissage</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Faire un don à l'IUT</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Recherche
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">CRESTIC automatique</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">CRESTIC images</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">ITHEMM</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Vie étudiante
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Information et orientation</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Démarches en lign</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Le service santé</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Enquêtes</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Les services du Crous</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Bibliothèque</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Sports</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Associations</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"#\">Candidatures</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"#\">
                                Evènements
                            </a>
                        </li>
                    </ul>
                </div>
                <form class=\"d-flex\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-warning\" type=\"submit\">Explorer</button>
                </form>
            </div>
        </div>
    </nav>
</header>


";
        // line 151
        $this->displayBlock('body', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('footer', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('scripts', $context, $blocks);
        // line 218
        echo "
</body>
</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
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
        echo "        <script src=\"https://kit.fontawesome.com/c610cfb1f1.js\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 152
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 156
        echo "    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-2\">
                    <a href=\"\"><img src=\"https://www.iut-troyes.univ-reims.fr/assets/img/URCA_ultimate2.png\" alt=\"logo URCA\"></a>
                    <ul class=\"liens\">
                        <li><a href=\"\">Mentions légales</a></li>
                        <li><a href=\"\">Liens utiles</a></li>
                        <li><a href=\"\">FAQ</a></li>
                        <li><a href=\"\">Plan du site</a></li>
                        <li><a href=\"\">Accessibilité</a></li>
                    </ul>
                </div>
                <div class=\"col-2\">
                    <ul>
                        <li class=\"footer_title\">L'IUT de Troyes</li>
                        <li><a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("iut_dept");
        echo "\">Départements</a></li>
                        <li><a href=\"\">Formations</a></li>
                        <li><a href=\"\">Entreprises</a></li>
                        <li><a href=\"\">Vie étudiante</a></li>
                        <li><a href=\"\">Evènements</a></li>
                    </ul>
                </div>
                <div class=\"col-2\">
                    <ul>
                        <li class=\"footer_title\">Outils</li>
                        <li><a href=\"https://intranetv3.iut-troyes.univ-reims.fr/\" target=\"_blank\">Intranet</a></li>
                        <li><a href=\"https://ebureau.univ-reims.fr/\" target=\"_blank\">Bureau virtuel</a></li>
                        <li><a href=\"https://roundcube.univ-reims.fr/\" target=\"_blank\">Messagerie</a></li>
                        <li><a href=\"http://annuaires.univ-reims.fr/\" target=\"_blank\">Annuaire</a></li>
                        <li><a href=\"https://www.iut-troyes.univ-reims.fr/biblioth%C3%A8que-link.html\" target=\"_blank\">Bibliothèque</a></li>
                    </ul>
                </div>
                <div class=\"col-2\">
                    <ul>
                        <li class=\"footer_title\"><a href=\"\">Contactez-nous</a></li>
                        <li><a href=\"https://www.facebook.com/IUT10/\" target=\"_blank\"><i class=\"fa-brands fa-facebook-f fa-lg\"></i></a>
                            <a href=\"https://twitter.com/IutTroyes\" target=\"_blank\"><i class=\"fa-brands fa-twitter fa-lg\"></i></a>
                            <a href=\"https://www.instagram.com/iuttroyes/\" target=\"_blank\"><i class=\"fa-brands fa-instagram fa-lg\"></i></a>
                            <a href=\"https://www.youtube.com/channel/UCNGH4rCDYJ_XAyXw6j4v9lg\" target=\"_blank\"><i class=\"fa-brands fa-youtube fa-lg\"></i></a>
                            <a href=\"https://www.linkedin.com/company/iut-de-troyes/?originalSubdomain=fr\" target=\"_blank\"><i class=\"fa-brands fa-linkedin-in fa-lg\"></i></a>
                            <a href=\"https://www.flickr.com/photos/138201145@N07/\" target=\"_blank\"><i class=\"fa-brands fa-flickr fa-lg\"></i></a></li>
                        <li>9 rue de Québec <br>
                            CS 90396 <br>
                            1000 Troyes <br>
                        </li>
                        <li>03 25 42 46 46</li>
                    </ul>
                </div>
                <div class=\"col-3\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2655.7800270777334!2d4.0787552!3d48.268607599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee990d103f3b05%3A0x3673a756c4366029!2sLogements%2C%209%20Rue%20Quebec%2C%2010430%20Rosi%C3%A8res-pr%C3%A9s-Troyes!5e0!3m2!1sfr!2sfr!4v1654352856967!5m2!1sfr!2sfr\"  style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </div>
            </div>
        </div>
    </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 214
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 215
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 215,  384 => 214,  333 => 172,  315 => 156,  305 => 155,  295 => 152,  285 => 151,  274 => 15,  264 => 14,  252 => 11,  249 => 10,  239 => 9,  224 => 218,  222 => 214,  219 => 213,  217 => 155,  214 => 154,  212 => 151,  118 => 60,  106 => 51,  72 => 22,  65 => 17,  63 => 14,  60 => 13,  58 => 9,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>IUT de Troyes</title>


    {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset ('style.css') }}\">
    {% endblock %}

    {% block javascripts %}
        <script src=\"https://kit.fontawesome.com/c610cfb1f1.js\" crossorigin=\"anonymous\"></script>
    {% endblock %}
</head>

<body>

<header>
    <a href=\"{{ path ('iut_test_technique') }}\"><img src=\"{{ asset ('images/IUT.png') }}\" alt=\"Logo\"></a>
    <div class=\"networks\">
        <div>
            <a href=\"https://www.facebook.com/IUT10/\" target=\"_blank\"><i class=\"fa-brands fa-facebook-f fa-lg\"></i></a>
            <a href=\"https://twitter.com/IutTroyes\" target=\"_blank\"><i class=\"fa-brands fa-twitter fa-lg\"></i></a>
            <a href=\"https://www.instagram.com/iuttroyes/\" target=\"_blank\"><i class=\"fa-brands fa-instagram fa-lg\"></i></a>
            <a href=\"https://www.youtube.com/channel/UCNGH4rCDYJ_XAyXw6j4v9lg\" target=\"_blank\"><i class=\"fa-brands fa-youtube fa-lg\"></i></a>
            <a href=\"https://www.linkedin.com/company/iut-de-troyes/?originalSubdomain=fr\" target=\"_blank\"><i class=\"fa-brands fa-linkedin-in fa-lg\"></i></a>
            <a href=\"https://www.flickr.com/photos/138201145@N07/\" target=\"_blank\"><i class=\"fa-brands fa-flickr fa-lg\"></i></a>
        </div>
        <nav>
            <ul class=\"extralinks\">
                <a href=\"https://intranetv3.iut-troyes.univ-reims.fr/\" target=\"_blank\" class=\"menuitem\"><li>Intranet</li></a>
                <a href=\"https://ebureau.univ-reims.fr/\" target=\"_blank\" class=\"menuitem\"><li>Bureau Virtuel</li></a>
                <a href=\"https://roundcube.univ-reims.fr/\" target=\"_blank\" class=\"menuitem\"><li>Messagerie</li></a>
                <a href=\"http://annuaires.univ-reims.fr/\" target=\"_blank\" class=\"menuitem\"><li>Annuaire</li></a>
                <a href=\"https://www.iut-troyes.univ-reims.fr/biblioth%C3%A8que-link.html\" target=\"_blank\" class=\"menuitem\"><li>Bibliothèque</li></a>
            </ul>
        </nav>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarScroll\" aria-controls=\"navbarScroll\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarScroll\">
                <div class=\"flexnav\">
                    <ul class=\"navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"{{ path ('iut_test_technique') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                L'IUT
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Actualités</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">L'IUT en chiffres</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path ('iut_dept') }}\">Départements</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Organigramme</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Revue de presse</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Rapport d'activité</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Nous trouver</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Formations
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Domaines d'étude</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Modalités de formation</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">VAE/VAPP</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Passeport vers l'étranger</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Passeport vers l'université</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                International
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Relations internationales</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Etudier à l'étranger</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Stages à l'étranger</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Travailler à l'étranger</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Universités partenaires</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Etudiants étrangers</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">TOEIC</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Entreprises
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Formation aux entreprises</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Service emploi</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Stages en entreprise</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Taxe d'apprentissage</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Faire un don à l'IUT</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Recherche
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">CRESTIC automatique</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">CRESTIC images</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">ITHEMM</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarScrollingDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Vie étudiante
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Information et orientation</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Démarches en lign</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Le service santé</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Enquêtes</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Les services du Crous</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Bibliothèque</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Sports</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Associations</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"#\">Candidatures</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"#\">
                                Evènements
                            </a>
                        </li>
                    </ul>
                </div>
                <form class=\"d-flex\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-warning\" type=\"submit\">Explorer</button>
                </form>
            </div>
        </div>
    </nav>
</header>


{% block body %}
    {# Le contenu de chaque page sera ici #}
{% endblock %}

{% block footer %}
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-2\">
                    <a href=\"\"><img src=\"https://www.iut-troyes.univ-reims.fr/assets/img/URCA_ultimate2.png\" alt=\"logo URCA\"></a>
                    <ul class=\"liens\">
                        <li><a href=\"\">Mentions légales</a></li>
                        <li><a href=\"\">Liens utiles</a></li>
                        <li><a href=\"\">FAQ</a></li>
                        <li><a href=\"\">Plan du site</a></li>
                        <li><a href=\"\">Accessibilité</a></li>
                    </ul>
                </div>
                <div class=\"col-2\">
                    <ul>
                        <li class=\"footer_title\">L'IUT de Troyes</li>
                        <li><a href=\"{{ path ('iut_dept') }}\">Départements</a></li>
                        <li><a href=\"\">Formations</a></li>
                        <li><a href=\"\">Entreprises</a></li>
                        <li><a href=\"\">Vie étudiante</a></li>
                        <li><a href=\"\">Evènements</a></li>
                    </ul>
                </div>
                <div class=\"col-2\">
                    <ul>
                        <li class=\"footer_title\">Outils</li>
                        <li><a href=\"https://intranetv3.iut-troyes.univ-reims.fr/\" target=\"_blank\">Intranet</a></li>
                        <li><a href=\"https://ebureau.univ-reims.fr/\" target=\"_blank\">Bureau virtuel</a></li>
                        <li><a href=\"https://roundcube.univ-reims.fr/\" target=\"_blank\">Messagerie</a></li>
                        <li><a href=\"http://annuaires.univ-reims.fr/\" target=\"_blank\">Annuaire</a></li>
                        <li><a href=\"https://www.iut-troyes.univ-reims.fr/biblioth%C3%A8que-link.html\" target=\"_blank\">Bibliothèque</a></li>
                    </ul>
                </div>
                <div class=\"col-2\">
                    <ul>
                        <li class=\"footer_title\"><a href=\"\">Contactez-nous</a></li>
                        <li><a href=\"https://www.facebook.com/IUT10/\" target=\"_blank\"><i class=\"fa-brands fa-facebook-f fa-lg\"></i></a>
                            <a href=\"https://twitter.com/IutTroyes\" target=\"_blank\"><i class=\"fa-brands fa-twitter fa-lg\"></i></a>
                            <a href=\"https://www.instagram.com/iuttroyes/\" target=\"_blank\"><i class=\"fa-brands fa-instagram fa-lg\"></i></a>
                            <a href=\"https://www.youtube.com/channel/UCNGH4rCDYJ_XAyXw6j4v9lg\" target=\"_blank\"><i class=\"fa-brands fa-youtube fa-lg\"></i></a>
                            <a href=\"https://www.linkedin.com/company/iut-de-troyes/?originalSubdomain=fr\" target=\"_blank\"><i class=\"fa-brands fa-linkedin-in fa-lg\"></i></a>
                            <a href=\"https://www.flickr.com/photos/138201145@N07/\" target=\"_blank\"><i class=\"fa-brands fa-flickr fa-lg\"></i></a></li>
                        <li>9 rue de Québec <br>
                            CS 90396 <br>
                            1000 Troyes <br>
                        </li>
                        <li>03 25 42 46 46</li>
                    </ul>
                </div>
                <div class=\"col-3\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2655.7800270777334!2d4.0787552!3d48.268607599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee990d103f3b05%3A0x3673a756c4366029!2sLogements%2C%209%20Rue%20Quebec%2C%2010430%20Rosi%C3%A8res-pr%C3%A9s-Troyes!5e0!3m2!1sfr!2sfr!4v1654352856967!5m2!1sfr!2sfr\"  style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </div>
            </div>
        </div>
    </footer>

{% endblock %}

{% block scripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
{% endblock %}

</body>
</html>


", "base.html.twig", "C:\\MAMP\\localweb\\symfonyInit\\IUT_test\\templates\\base.html.twig");
    }
}
