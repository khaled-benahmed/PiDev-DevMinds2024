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

/* baseBack.html.twig */
class __TwigTemplate_1a78d342fe72949f9eaec07b9b6cbf5e extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/LogoBlack.ico"), "html", null, true);
        echo "\" />-->

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "
    <style> </style>
</head>


<body class=\"animsition\">
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/logo.PNG/"), "html", null, true);
        echo " \" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"active\">
                        <a class=\"js-arrow\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                            <i class=\"fas fa-home\"></i>Home</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-user\"></i>Utilisateurs</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Afficher Utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-table\"></i>Planning</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 86
        echo "{path('app_activite_crud_new')}}\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 89
        echo "{path('app_activite_crud_index')}}\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 92
        echo "{path('app_planning_crud_new')}}\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 95
        echo "{path('app_planning_crud_index')}}\">Afficher Plannings</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-plus\"></i>Abonnements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Abonnement</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Abonnements</a>
                            </li>
                            <li>
                                <a href=\"#\">Ajouter Pack</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Packs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>Offres</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Offres</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Offres</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-exclamation\"></i>Réclamations</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"/reclamation\">Afficher Réclamations</a>
                            </li>
                            <li>
                                <a href=\"/reponse\">Afficher Réponse</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class=\"menu-sidebar d-none d-lg-block\">
    <div class=\"logo\">
        <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
            <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logonutrifit.PNG"), "html", null, true);
        echo "\" />
        </a>
    </div>
    <div class=\"menu-sidebar__content js-scrollbar1\">
        <nav class=\"navbar-sidebar\">
            <ul class=\"list-unstyled navbar__list\">
                <li class=\"active\">
                    <a class=\"js-arrow\" href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <i class=\"fas fa-home\"></i>Home
                    </a>
                </li>
                ";
        // line 164
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 165
            echo "                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-user\"></i>Utilisateurs
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"";
            // line 171
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
            echo "\">Afficher Utilisateurs</a>
                        </li>
                    </ul>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"";
            // line 176
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_statistics");
            echo "\">Statistiques</a>
                        </li>
                    </ul>
                </li>
                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-table\"></i>Planning
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"";
            // line 186
            echo "\">Ajouter Activité</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 189
            echo "\">Afficher Activités</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 192
            echo "\">Ajouter Planning</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 195
            echo "\">Afficher Planning</a>
                        </li>
                    </ul>
                </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-plus\"></i>Abonnements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Abonnement</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Abonnements</a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>Offres</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Offre</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Offres</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-newspaper\"></i>contenu</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Nutrition Plan</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Nutrition Plans</a>
                            </li>
                            <li>
                                <a href=\"#\">Ajouter Coaching Plans </a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Coaching Plans</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-exclamation\"></i>Réclamations</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"/reclamation\">Afficher Réclamations</a>
                            </li>
                            <li>
                                <a href=\"/reponse\">Afficher Réponses</a>
                            </li>
                        </ul>
                    </li>
                  ";
        }
        // line 256
        echo "
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">
                            
                            </div>
                           <div class=\"account-wrap\">
                <div class=\"account-item clearfix js-item-menu\">

    <div class=\"image\">
      
            <img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284), "image", [], "any", false, false, false, 284))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284), "image", [], "any", false, false, false, 284), "html", null, true);
        echo "\" />
      
            <!-- Afficher une image par défaut ou un texte alternatif si l'utilisateur n'a pas d'image -->
            <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default-image.png"), "html", null, true);
        echo "\" alt=\"Default Image\" />
    
    </div>
    <div class=\"content\">
        <a class=\"js-acc-btn\" href=\"#\">";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "user", [], "any", false, false, false, 291), "firstname", [], "any", false, false, false, 291), "html", null, true);
        echo "</a>
    </div>

                <div class=\"account-dropdown js-dropdown\">
                    <div class=\"info clearfix\">
                <div class=\"image\">   
                        <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "user", [], "any", false, false, false, 297), "image", [], "any", false, false, false, 297))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "user", [], "any", false, false, false, 297), "image", [], "any", false, false, false, 297), "html", null, true);
        echo "\" />
                </div>
                <div class=\"content\">
                    <h5 class=\"name\">
                        <a href=\"#\">";
        // line 301
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "user", [], "any", false, false, false, 301), "firstname", [], "any", false, false, false, 301), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "user", [], "any", false, false, false, 301), "lastname", [], "any", false, false, false, 301), "html", null, true);
        echo "</a>
                    </h5>
                    <span class=\"email\">";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "user", [], "any", false, false, false, 303), "email", [], "any", false, false, false, 303), "html", null, true);
        echo "</span>
                </div>
            </div>

            <div class=\"account-dropdown__body\">
    <div class=\"account-dropdown__item\">
        <a href=\"";
        // line 309
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">
<i class=\"bi bi-person text-primary\"></i> Profile
        </a>
    </div>
    
    
</div>
<div class=\"account-dropdown__footer\">
    <a href=\"";
        // line 317
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
        <i class=\"bi bi-power\"></i> Logout
    </a>
</div>

        </div>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>


<!-- MAIN CONTENT-->
<div class=\"page-wrapper\">
    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <br>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- START WHITE BACKGROUND-->
                    <div class=\"map-data m-b-40\">
                        ";
        // line 345
        $this->displayBlock('body', $context, $blocks);
        // line 348
        echo "                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                   <!-- <div class=\"copyright\">
                        <p>Copyright © 2024 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>




</body>
";
        // line 366
        $this->displayBlock('javascripts', $context, $blocks);
        // line 397
        echo "
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "NutriFit Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <!-- Fontfaces CSS-->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/font-face.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">


        <!-- Vendor CSS-->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Calendar -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 345
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 346
        echo "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 366
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 367
        echo "    <!-- Jquery JS-->
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Bootstrap JS-->
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Vendor JS-->
    <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/wow.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\" ></script>


    <!-- Main JS-->
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/main.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"https://kit.fontawesome.com/a781c8964e.js\" crossorigin=\"anonymous\"></script>


    <!-- Calendar -->
    <!--<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>-->



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseBack.html.twig";
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
        return array (  681 => 387,  674 => 383,  670 => 382,  666 => 381,  662 => 380,  658 => 379,  654 => 378,  650 => 377,  646 => 376,  642 => 375,  638 => 374,  633 => 372,  629 => 371,  624 => 369,  620 => 368,  617 => 367,  607 => 366,  596 => 346,  586 => 345,  569 => 35,  563 => 32,  559 => 31,  555 => 30,  551 => 29,  547 => 28,  543 => 27,  539 => 26,  532 => 22,  526 => 19,  522 => 18,  518 => 17,  515 => 16,  505 => 15,  486 => 12,  474 => 397,  472 => 366,  452 => 348,  450 => 345,  419 => 317,  408 => 309,  399 => 303,  393 => 301,  384 => 297,  375 => 291,  368 => 287,  360 => 284,  330 => 256,  267 => 195,  262 => 192,  257 => 189,  252 => 186,  239 => 176,  231 => 171,  223 => 165,  221 => 164,  214 => 160,  204 => 153,  200 => 152,  141 => 95,  136 => 92,  131 => 89,  126 => 86,  106 => 69,  89 => 55,  85 => 54,  71 => 42,  69 => 15,  64 => 13,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>{% block title %}NutriFit Dashboard{% endblock %}</title>
    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('./BackOffice/images/icon/LogoBlack.ico')}}\" />-->

    {% block stylesheets %}
        <!-- Fontfaces CSS-->
        <link href=\"{{ asset('./BackOffice/css/font-face.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css')}}\" rel=\"stylesheet\" media=\"all\">


        <!-- Vendor CSS-->
        <link href=\"{{ asset('./BackOffice/vendor/animsition/animsition.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/wow/animate.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/css-hamburgers/hamburgers.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/slick/slick.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/select2/select2.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"{{ asset('./BackOffice/css/theme.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Calendar -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


    {% endblock %}

    <style> </style>
</head>


<body class=\"animsition\">
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"{{path('app_home')}}\">
                        <img src=\"{{ asset('./BackOffice/images/logo.PNG/') }} \" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"active\">
                        <a class=\"js-arrow\" href=\"{{path('app_home')}}\">
                            <i class=\"fas fa-home\"></i>Home</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-user\"></i>Utilisateurs</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Afficher Utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-table\"></i>Planning</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{#  #}{path('app_activite_crud_new')}}\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"{#  #}{path('app_activite_crud_index')}}\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"{#  #}{path('app_planning_crud_new')}}\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"{#  #}{path('app_planning_crud_index')}}\">Afficher Plannings</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-plus\"></i>Abonnements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Abonnement</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Abonnements</a>
                            </li>
                            <li>
                                <a href=\"#\">Ajouter Pack</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Packs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>Offres</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Offres</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Offres</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-exclamation\"></i>Réclamations</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"/reclamation\">Afficher Réclamations</a>
                            </li>
                            <li>
                                <a href=\"/reponse\">Afficher Réponse</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class=\"menu-sidebar d-none d-lg-block\">
    <div class=\"logo\">
        <a href=\"{{ path('app_home') }}\">
            <img src=\"{{ asset('uploads/logonutrifit.PNG') }}\" />
        </a>
    </div>
    <div class=\"menu-sidebar__content js-scrollbar1\">
        <nav class=\"navbar-sidebar\">
            <ul class=\"list-unstyled navbar__list\">
                <li class=\"active\">
                    <a class=\"js-arrow\" href=\"{{ path('app_home') }}\">
                        <i class=\"fas fa-home\"></i>Home
                    </a>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-user\"></i>Utilisateurs
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"{{ path('admin_users_list') }}\">Afficher Utilisateurs</a>
                        </li>
                    </ul>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"{{ path('admin_users_statistics') }}\">Statistiques</a>
                        </li>
                    </ul>
                </li>
                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-table\"></i>Planning
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"{# path('app_activite_crud_new') }#}\">Ajouter Activité</a>
                        </li>
                        <li>
                            <a href=\"{# path('app_activite_crud_index') }#}\">Afficher Activités</a>
                        </li>
                        <li>
                            <a href=\"{# path('app_planning_crud_new') }#}\">Ajouter Planning</a>
                        </li>
                        <li>
                            <a href=\"{# path('app_planning_crud_index') }#}\">Afficher Planning</a>
                        </li>
                    </ul>
                </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-plus\"></i>Abonnements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Abonnement</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Abonnements</a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>Offres</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Offre</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Offres</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-newspaper\"></i>contenu</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Nutrition Plan</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Nutrition Plans</a>
                            </li>
                            <li>
                                <a href=\"#\">Ajouter Coaching Plans </a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Coaching Plans</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-exclamation\"></i>Réclamations</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"/reclamation\">Afficher Réclamations</a>
                            </li>
                            <li>
                                <a href=\"/reponse\">Afficher Réponses</a>
                            </li>
                        </ul>
                    </li>
                  {% endif %}

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">
                            
                            </div>
                           <div class=\"account-wrap\">
                <div class=\"account-item clearfix js-item-menu\">

    <div class=\"image\">
      
            <img src=\"{{ asset('uploads/' ~ app.user.image) }}\" alt=\"{{ app.user.image }}\" />
      
            <!-- Afficher une image par défaut ou un texte alternatif si l'utilisateur n'a pas d'image -->
            <img src=\"{{ asset('uploads/default-image.png') }}\" alt=\"Default Image\" />
    
    </div>
    <div class=\"content\">
        <a class=\"js-acc-btn\" href=\"#\">{{ app.user.firstname }}</a>
    </div>

                <div class=\"account-dropdown js-dropdown\">
                    <div class=\"info clearfix\">
                <div class=\"image\">   
                        <img src=\"{{ asset('uploads/' ~ app.user.image) }}\" alt=\"{{ app.user.image }}\" />
                </div>
                <div class=\"content\">
                    <h5 class=\"name\">
                        <a href=\"#\">{{ app.user.firstname}}{{ app.user.lastname}}</a>
                    </h5>
                    <span class=\"email\">{{ app.user.email }}</span>
                </div>
            </div>

            <div class=\"account-dropdown__body\">
    <div class=\"account-dropdown__item\">
        <a href=\"{{ path('profile') }}\">
<i class=\"bi bi-person text-primary\"></i> Profile
        </a>
    </div>
    
    
</div>
<div class=\"account-dropdown__footer\">
    <a href=\"{{ path('app_logout') }}\">
        <i class=\"bi bi-power\"></i> Logout
    </a>
</div>

        </div>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>


<!-- MAIN CONTENT-->
<div class=\"page-wrapper\">
    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <br>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- START WHITE BACKGROUND-->
                    <div class=\"map-data m-b-40\">
                        {% block body %}

                        {% endblock %}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                   <!-- <div class=\"copyright\">
                        <p>Copyright © 2024 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>




</body>
{% block javascripts %}
    <!-- Jquery JS-->
    <script src=\"{{ asset('./BackOffice/vendor/jquery-3.2.1.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/jquery-3.2.1.min.js')}}\" ></script>
    <!-- Bootstrap JS-->
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/popper.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/bootstrap.min.js')}}\" ></script>
    <!-- Vendor JS-->
    <script src=\"{{ asset('./BackOffice/vendor/slick/slick.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/wow/wow.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/animsition/animsition.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/counter-up/jquery.waypoints.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/counter-up/jquery.counterup.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/circle-progress/circle-progress.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/chartjs/Chart.bundle.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/select2/select2.min.js')}}\" ></script>


    <!-- Main JS-->
    <script src=\"{{ asset('./BackOffice/js/main.js')}}\" ></script>
    <script src=\"https://kit.fontawesome.com/a781c8964e.js\" crossorigin=\"anonymous\"></script>


    <!-- Calendar -->
    <!--<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>-->



{% endblock %}

</html>
", "baseBack.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\baseBack.html.twig");
    }
}
