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
class __TwigTemplate_45e98a1aca604a8d214a506417a43870 extends Template
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
        echo "{ asset('./BackOffice/images/icon/LogoBlack.ico')}}\" />-->

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
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
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <img src=\"";
        // line 54
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
        // line 68
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
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_crud_new");
        echo "\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_crud_index");
        echo "\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_new");
        echo "\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_index");
        echo "\">Afficher Plannings</a>
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
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
            <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logonutrifit.PNG"), "html", null, true);
        echo "\" />
        </a>
    </div>
    <div class=\"menu-sidebar__content js-scrollbar1\">
        <nav class=\"navbar-sidebar\">
            <ul class=\"list-unstyled navbar__list\">
                <li class=\"active\">
                    <a class=\"js-arrow\" href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <i class=\"fas fa-home\"></i>Home
                    </a>
                </li>
                ";
        // line 163
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 164
            echo "                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-user\"></i>Utilisateurs
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"";
            // line 170
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
            echo "\">Afficher Utilisateurs</a>
                        </li>
                    </ul>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"";
            // line 175
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_statistics");
            echo "\">Statistiques</a>
                        </li>
                    </ul>
                </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-table\"></i>Planning</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"";
            // line 184
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_crud_new");
            echo "\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 187
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_crud_index");
            echo "\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 190
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_new");
            echo "\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 193
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_index");
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
                    <li class=\"active\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-newspaper\"></i>contenu</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"";
            // line 227
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_new");
            echo "\">Ajouter Plat </a>

                            </li>
                                <li>
                                    <a href=\"";
            // line 231
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_index");
            echo "\">Afficher Plat</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 234
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_new");
            echo "\">Ajouter blog </a>

                            </li>
                            <li>
                                <a href=\"";
            // line 238
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index");
            echo "\">Afficher blog</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 241
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allergie_new");
            echo "\">Ajouter Allergie </a>

                            </li>
                            <li>
                                <a href=\"";
            // line 245
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allergie_index");
            echo "\">Afficher Allergie </a>

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
        // line 265
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
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "user", [], "any", false, false, false, 293), "image", [], "any", false, false, false, 293))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "user", [], "any", false, false, false, 293), "image", [], "any", false, false, false, 293), "html", null, true);
        echo "\" />
      
            <!-- Afficher une image par défaut ou un texte alternatif si l'utilisateur n'a pas d'image -->
            <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default-image.png"), "html", null, true);
        echo "\" alt=\"Default Image\" />
    
    </div>
    <div class=\"content\">
        <a class=\"js-acc-btn\" href=\"#\">";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "user", [], "any", false, false, false, 300), "firstname", [], "any", false, false, false, 300), "html", null, true);
        echo "</a>
    </div>

                <div class=\"account-dropdown js-dropdown\">
                    <div class=\"info clearfix\">
                <div class=\"image\">
                        <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "image", [], "any", false, false, false, 306))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "image", [], "any", false, false, false, 306), "html", null, true);
        echo "\" />
                </div>
                <div class=\"content\">
                    <h5 class=\"name\">
                        <a href=\"#\">";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "user", [], "any", false, false, false, 310), "firstname", [], "any", false, false, false, 310), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "user", [], "any", false, false, false, 310), "lastname", [], "any", false, false, false, 310), "html", null, true);
        echo "</a>
                    </h5>
                    <span class=\"email\">";
        // line 312
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "user", [], "any", false, false, false, 312), "email", [], "any", false, false, false, 312), "html", null, true);
        echo "</span>
                </div>
            </div>

            <div class=\"account-dropdown__body\">
    <div class=\"account-dropdown__item\">
        <a href=\"";
        // line 318
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">
<i class=\"bi bi-person text-primary\"></i> Profile
        </a>
    </div>
    
    
</div>
<div class=\"account-dropdown__footer\">
    <a href=\"";
        // line 326
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
        // line 354
        $this->displayBlock('body', $context, $blocks);
        // line 357
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
        // line 375
        $this->displayBlock('javascripts', $context, $blocks);
        // line 406
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




    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 354
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 355
        echo "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 375
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 376
        echo "    <!-- Jquery JS-->
    <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Bootstrap JS-->
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Vendor JS-->
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/wow.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\" ></script>


    <!-- Main JS-->
    <script src=\"";
        // line 396
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
        return array (  715 => 396,  708 => 392,  704 => 391,  700 => 390,  696 => 389,  692 => 388,  688 => 387,  684 => 386,  680 => 385,  676 => 384,  672 => 383,  667 => 381,  663 => 380,  658 => 378,  654 => 377,  651 => 376,  641 => 375,  630 => 355,  620 => 354,  604 => 35,  598 => 32,  594 => 31,  590 => 30,  586 => 29,  582 => 28,  578 => 27,  574 => 26,  567 => 22,  561 => 19,  557 => 18,  553 => 17,  550 => 16,  540 => 15,  521 => 12,  509 => 406,  507 => 375,  487 => 357,  485 => 354,  454 => 326,  443 => 318,  434 => 312,  428 => 310,  419 => 306,  410 => 300,  403 => 296,  395 => 293,  365 => 265,  342 => 245,  335 => 241,  329 => 238,  322 => 234,  316 => 231,  309 => 227,  272 => 193,  266 => 190,  260 => 187,  254 => 184,  242 => 175,  234 => 170,  226 => 164,  224 => 163,  217 => 159,  207 => 152,  203 => 151,  143 => 94,  137 => 91,  131 => 88,  125 => 85,  105 => 68,  88 => 54,  84 => 53,  70 => 41,  68 => 15,  64 => 13,  60 => 12,  47 => 1,);
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
    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"{#  #}{ asset('./BackOffice/images/icon/LogoBlack.ico')}}\" />-->

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
                                <a href=\"{{path('app_activite_crud_new')}}\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"{{path('app_activite_crud_index')}}\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"{{path('app_planning_crud_new')}}\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"{{path('app_planning_crud_index')}}\">Afficher Plannings</a>
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
                            <i class=\"fas fa-table\"></i>Planning</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"{{path('app_activite_crud_new')}}\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"{{path('app_activite_crud_index')}}\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"{{path('app_planning_crud_new')}}\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"{{path('app_planning_crud_index')}}\">Afficher Planning</a>
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
                    <li class=\"active\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-newspaper\"></i>contenu</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"{{path('app_plat_new')}}\">Ajouter Plat </a>

                            </li>
                                <li>
                                    <a href=\"{{path('app_plat_index')}}\">Afficher Plat</a>
                                </li>
                                <li>
                                    <a href=\"{{path('app_blog_new')}}\">Ajouter blog </a>

                            </li>
                            <li>
                                <a href=\"{{path('app_blog_index')}}\">Afficher blog</a>
                            </li>
                            <li>
                                <a href=\"{{path('app_allergie_new')}}\">Ajouter Allergie </a>

                            </li>
                            <li>
                                <a href=\"{{path('app_allergie_index')}}\">Afficher Allergie </a>

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
", "baseBack.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\baseBack.html.twig");
    }
}
