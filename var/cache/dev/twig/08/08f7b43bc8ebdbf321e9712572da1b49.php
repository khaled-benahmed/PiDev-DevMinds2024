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
class __TwigTemplate_e1648882a0723ba0742fbc24e51aeba0 extends Template
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
            'body' => [$this, 'block_body'],
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
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\"> ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "\t\t<!-- slider stylesheet -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t\t<!-- bootstrap core css -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/bootstrap.css"), "html", null, true);
        echo "\">
\t\t<!-- fonts style -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\">
\t\t<!-- Custom styles for this template -->
\t\t<link
\t\thref=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t<!-- responsive style -->
\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t</head>
\t<body>
\t\t<div class=\"hero_area\">
\t\t\t<header class=\"header_section\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t<!-- Intégration de la barre de navigation -->
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg custom_nav-container\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tNutrifit
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t<!-- Les éléments de la barre de navigation -->
\t\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Coaches</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Nutritionists</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\">Complaint</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_index");
        echo "\">Sponsor</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offres_index");
        echo "\">Offres</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\tclass=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<!-- Les éléments spécifiques aux utilisateurs -->
\t\t\t\t\t\t\t\t";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\">Administration</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Coach dashboard</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_NUTRITIONIST")) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Nutritionist dashboard</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 87
            echo "{ path('profile_index') }}\">My profile</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 90
            echo "{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 94
            echo "{ path('app_register') }}\">Sign up</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 97
            echo "{ path('app_login') }}\">Sign in</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact Us</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</header>

\t\t\t";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "\t\t</div>

\t\t<!-- footer section -->
\t\t<footer class=\"container-fluid footer_section\">
\t\t\t<p>
\t\t\t\t&copy; 2024 All Rights Reserved.
\t\t\t</p>
\t\t</footer>
\t\t<!-- footer section -->
\t\t<!-- jQuery and Bootstrap Bundle (includes Popper) -->
\t\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  313 => 109,  300 => 11,  290 => 10,  272 => 9,  252 => 6,  237 => 121,  233 => 120,  221 => 110,  219 => 109,  211 => 103,  203 => 97,  198 => 94,  195 => 93,  190 => 90,  185 => 87,  182 => 86,  176 => 82,  173 => 81,  167 => 77,  164 => 76,  158 => 73,  155 => 72,  152 => 71,  150 => 70,  140 => 63,  134 => 60,  128 => 57,  116 => 48,  100 => 35,  88 => 26,  83 => 24,  74 => 18,  68 => 15,  64 => 13,  61 => 10,  59 => 9,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\"> {% block stylesheets %}{% endblock %}
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t\t<!-- slider stylesheet -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('./FrontOffice/css/owl.carousel.min.css') }}\">
\t\t<!-- bootstrap core css -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('./FrontOffice/css/bootstrap.css') }}\">
\t\t<!-- fonts style -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\">
\t\t<!-- Custom styles for this template -->
\t\t<link
\t\thref=\"{{ asset('./FrontOffice/css/style.css') }}\" rel=\"stylesheet\"/>
\t\t<!-- responsive style -->
\t\t<link href=\"{{ asset('./FrontOffice/css/responsive.css') }}\" rel=\"stylesheet\"/>
\t</head>
\t<body>
\t\t<div class=\"hero_area\">
\t\t\t<header class=\"header_section\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t<!-- Intégration de la barre de navigation -->
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg custom_nav-container\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('main') }}\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tNutrifit
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t<!-- Les éléments de la barre de navigation -->
\t\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('main') }}\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Coaches</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Nutritionists</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_reclamation_index') }}\">Complaint</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_sponsor_index') }}\">Sponsor</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_offres_index') }}\">Offres</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\tclass=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<!-- Les éléments spécifiques aux utilisateurs -->
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('admin_index') }}\">Administration</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_COACH') %}
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Coach dashboard</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_NUTRITIONIST') %}
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Nutritionist dashboard</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{# #}{ path('profile_index') }}\">My profile</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{# #}{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{# #}{ path('app_register') }}\">Sign up</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{# #}{ path('app_login') }}\">Sign in</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact Us</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</header>

\t\t\t{% block body %}{% endblock %}
\t\t</div>

\t\t<!-- footer section -->
\t\t<footer class=\"container-fluid footer_section\">
\t\t\t<p>
\t\t\t\t&copy; 2024 All Rights Reserved.
\t\t\t</p>
\t\t</footer>
\t\t<!-- footer section -->
\t\t<!-- jQuery and Bootstrap Bundle (includes Popper) -->
\t\t<script src=\"{{ asset('./FrontOffice/js/jquery-3.4.1.min.js') }}\"></script>
\t\t<script src=\"{{ asset('./FrontOffice/js/bootstrap.js') }}\"></script>

\t</body>
</html>
", "base.html.twig", "C:\\Users\\Nour\\OneDrive\\Bureau\\PiDev-DevMinds2024-main (2)\\PiDev-DevMinds2024-main\\templates\\base.html.twig");
    }
}
