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

/* base2.html.twig */
class __TwigTemplate_a2da68ace4ebce6f95a7fc689c419416 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        // line 43
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
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/logo/"), "html", null, true);
        echo " \" alt=\"NutriFit\" />
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
                    <li class=>
                        <a class=\"js-arrow\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                            <i class=\"fas fa-home\"></i>Home</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-user\"></i>Utilisateurs</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Utilisateur</a>
                            </li>
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
        // line 90
        echo "{path('app_activite_crud_new')}}\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 93
        echo "{path('app_activite_crud_index')}}\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 96
        echo "{path('app_planning_crud_new')}}\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 99
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
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/logo/"), "html", null, true);
        echo " \" height=\"90\" width=\"100\"  alt=\"NutriFit\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"\">
                        <a class=\"js-arrow\" href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                            <i class=\"fas fa-home\"></i>Home</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-user\"></i>Utilisateurs</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Utilisateur</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Utilisateurs</a>
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
        echo "{path('app_activite_crud_new')}}\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 187
        echo "{path('app_activite_crud_index')}}\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 190
        echo "{path('app_planning_crud_new')}}\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 193
        echo "{path('app_planning_crud_index')}}\">Afficher Planning</a>
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
                            <div class=\"noti-wrap\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        <div class=\"mess__title\">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=Michelle Moreno />

                                            </div>
                                            <div class=\"content\">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class=\"time\">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\"  alt=\"Diane Myers\" />

                                            </div>
                                            <div class=\"content\">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class=\"time\">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__footer\">
                                            <a href=\"#\">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"email-dropdown js-dropdown\">
                                        <div class=\"email__title\">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\"  alt=\"Cynthia Harvey\" />

                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-05.jpg"), "html", null, true);
        echo "\"  alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\"  alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class=\"email__footer\">
                                            <a href=\"#\">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-notifications\"></i>
                                    <span class=\"quantity\">3</span>
                                    <div class=\"notifi-dropdown js-dropdown\">
                                        <div class=\"notifi__title\">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c1 img-cir img-40\">
                                                <i class=\"zmdi zmdi-email-open\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a email notification</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c2 img-cir img-40\">
                                                <i class=\"zmdi zmdi-account-box\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>Your account has been blocked</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c3 img-cir img-40\">
                                                <i class=\"zmdi zmdi-file-text\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a new file</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__footer\">
                                            <a href=\"#\">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"account-wrap\">
                                <div class=\"account-item clearfix js-item-menu\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-01.jpg"), "html", null, true);
        echo "\"  alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-01.jpg"), "html", null, true);
        echo "\"  alt=\"John Doe\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">john doe</a>
                                                </h5>
                                                <span class=\"email\">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__body\">
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-account\"></i>Account</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__footer\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-power\"></i>Logout</a>
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
        // line 460
        $this->displayBlock('body', $context, $blocks);
        // line 463
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
        // line 481
        $this->displayBlock('javascripts', $context, $blocks);
        // line 512
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">


        <!-- Vendor CSS-->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Calendar -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 460
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 461
        echo "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 481
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 482
        echo "    <!-- Jquery JS-->
    <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Bootstrap JS-->
    <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Vendor JS-->
    <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/wow.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\" ></script>


    <!-- Main JS-->
    <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/main.js"), "html", null, true);
        echo "\" ></script>


    <!-- Calendar -->
    <!--<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>-->


    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base2.html.twig";
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
        return array (  798 => 502,  791 => 498,  787 => 497,  783 => 496,  779 => 495,  775 => 494,  771 => 493,  767 => 492,  763 => 491,  759 => 490,  755 => 489,  750 => 487,  746 => 486,  741 => 484,  737 => 483,  734 => 482,  724 => 481,  713 => 461,  703 => 460,  686 => 36,  680 => 33,  676 => 32,  672 => 31,  668 => 30,  664 => 29,  660 => 28,  656 => 27,  649 => 23,  643 => 20,  639 => 19,  635 => 18,  631 => 17,  628 => 16,  618 => 15,  599 => 12,  587 => 512,  585 => 481,  565 => 463,  563 => 460,  510 => 410,  498 => 401,  440 => 346,  428 => 337,  415 => 327,  389 => 304,  375 => 293,  324 => 245,  317 => 241,  311 => 238,  304 => 234,  298 => 231,  291 => 227,  255 => 193,  250 => 190,  245 => 187,  240 => 184,  217 => 164,  207 => 157,  203 => 156,  144 => 99,  139 => 96,  134 => 93,  129 => 90,  106 => 70,  89 => 56,  85 => 55,  71 => 43,  69 => 15,  64 => 13,  60 => 12,  47 => 1,);
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
        <link href=\"{{ asset('./BackOffice/vendor/font-awesome-4.7/css/font-awesome.min.css')}}\" rel=\"stylesheet\" media=\"all\">
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
                        <img src=\"{{ asset('./BackOffice/images/logo/') }} \" alt=\"NutriFit\" />
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
                    <li class=>
                        <a class=\"js-arrow\" href=\"{{path('app_home')}}\">
                            <i class=\"fas fa-home\"></i>Home</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-user\"></i>Utilisateurs</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Utilisateur</a>
                            </li>
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
            <a href=\"{{path('app_home')}}\">
                <img src=\"{{ asset('./BackOffice/images/logo/') }} \" height=\"90\" width=\"100\"  alt=\"NutriFit\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"\">
                        <a class=\"js-arrow\" href=\"{{path('app_home')}}\">
                            <i class=\"fas fa-home\"></i>Home</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-user\"></i>Utilisateurs</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Utilisateur</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-table\"></i>Planning</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
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
                                <a href=\"{#  #}{path('app_planning_crud_index')}}\">Afficher Planning</a>
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
                            <div class=\"noti-wrap\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        <div class=\"mess__title\">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-06.jpg')}}\" alt=Michelle Moreno />

                                            </div>
                                            <div class=\"content\">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class=\"time\">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-04.jpg') }}\"  alt=\"Diane Myers\" />

                                            </div>
                                            <div class=\"content\">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class=\"time\">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__footer\">
                                            <a href=\"#\">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"email-dropdown js-dropdown\">
                                        <div class=\"email__title\">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-06.jpg') }}\"  alt=\"Cynthia Harvey\" />

                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-05.jpg') }}\"  alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-04.jpg') }}\"  alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class=\"email__footer\">
                                            <a href=\"#\">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-notifications\"></i>
                                    <span class=\"quantity\">3</span>
                                    <div class=\"notifi-dropdown js-dropdown\">
                                        <div class=\"notifi__title\">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c1 img-cir img-40\">
                                                <i class=\"zmdi zmdi-email-open\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a email notification</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c2 img-cir img-40\">
                                                <i class=\"zmdi zmdi-account-box\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>Your account has been blocked</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c3 img-cir img-40\">
                                                <i class=\"zmdi zmdi-file-text\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a new file</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__footer\">
                                            <a href=\"#\">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"account-wrap\">
                                <div class=\"account-item clearfix js-item-menu\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('./BackOffice/images/icon/avatar-01.jpg') }}\"  alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('./BackOffice/images/icon/avatar-01.jpg') }}\"  alt=\"John Doe\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">john doe</a>
                                                </h5>
                                                <span class=\"email\">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__body\">
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-account\"></i>Account</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__footer\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-power\"></i>Logout</a>
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


    <!-- Calendar -->
    <!--<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>-->


    </script>

{% endblock %}

</html>
", "base2.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\base2.html.twig");
    }
}
