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

/* main/index.html.twig */
class __TwigTemplate_d6b1ac29c73f38ceaa090f37710495a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <body>
    <div class=\"hero_area\">

        <!-- slider section -->
        <section class=\" slider_section position-relative\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Nutririon
                                        </h2>
                                        <h1>
                                            Nutrifit
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                </ol>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- Us section -->

    <section class=\"us_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Why Choose Us
                </h2>
            </div>

            <div class=\"us_container \">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/u-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"detail-box\">
                                    <h5>
                                        QUALITY EQUIPMENT
                                    </h5>
                                    <p>
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/u-4.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"detail-box\">
                                    <h5>
                                        NUTRITION
                                    </h5>
                                    <p>
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/u-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            <div class=\"detail-box\">
                                <h5>
                                    HEALTHY DIET PLAN
                                </h5>
                                <p>
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"box\">
                            <div class=\"img-box\">
                                <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/u-3.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"detail-box\">
                                <h5>
                                    SPORT TRAINING
                                </h5>
                                <p>
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end us section -->


    <!-- heathy section -->

    <section class=\"heathy_section layout_padding\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-12 mx-auto\">
                    <div class=\"detail-box\">
                        <h2>
                            HEALTHY MIND, HEALTHY BODY
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        </p>
                        <div class=\"btn-box\">
                            <a href=\"\">
                                READ MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end heathy section -->

    <!-- trainer section -->

    <section class=\"trainer_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Our Gym Trainers
                </h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Smirth Jon
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/t1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Jean Doe
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/t2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Alex Den
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/t3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end trainer section -->
    <!-- Nutritionist section -->

    <section class=\"trainer_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Our Nutritionists
                </h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                DR.lola lili
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/nut1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Jean Doe
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/nut2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Alex Den
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/nut3.webp"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section -->

    <section class=\"contact_section \">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 px-0\">
                    <div class=\"img-box\">
                        <img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/contact-img.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6\">
                    <div class=\"form_container pr-0 pr-lg-5 mr-0 mr-lg-2\">
                        <div class=\"heading_container\">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action=\"\">
                            <div>
                                <input type=\"text\" placeholder=\"Name\" />
                            </div>
                            <div>
                                <input type=\"email\" placeholder=\"Email\" />
                            </div>
                            <div>
                                <input type=\"text\" placeholder=\"Phone Number\" />
                            </div>
                            <div>
                                <input type=\"text\" class=\"message-box\" placeholder=\"Message\" />
                            </div>
                            <div class=\"d-flex \">
                                <button>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->
    <!-- info section -->
    <section class=\"info_section layout_padding2\">
        <div class=\"container\">
            <div class=\"info_items\">
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-1\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                Tunisia
                            </p>
                        </div>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-2\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                +216 95 155 506
                            </p>
                        </div>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-3\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                Nutrifit@gmail.com
                            </p>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <footer class=\"container-fluid footer_section\">
            <p>
                &copy; 2024 All Rights Reserved.
            </p>
        </footer>
    </section>

    <!-- end info_section -->




    <script src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/index.html.twig";
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
        return array (  711 => 538,  707 => 537,  613 => 446,  594 => 430,  588 => 427,  582 => 424,  575 => 420,  558 => 406,  552 => 403,  546 => 400,  539 => 396,  522 => 382,  516 => 379,  510 => 376,  503 => 372,  472 => 344,  466 => 341,  460 => 338,  453 => 334,  437 => 321,  431 => 318,  425 => 315,  418 => 311,  402 => 298,  396 => 295,  390 => 292,  383 => 288,  314 => 222,  296 => 207,  278 => 192,  260 => 177,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
    <body>
    <div class=\"hero_area\">

        <!-- slider section -->
        <section class=\" slider_section position-relative\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Nutririon
                                        </h2>
                                        <h1>
                                            Nutrifit
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                </ol>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- Us section -->

    <section class=\"us_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Why Choose Us
                </h2>
            </div>

            <div class=\"us_container \">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"{{ asset('./FrontOffice/images/u-1.png') }}\" alt=\"\">
                                </div>
                                <div class=\"detail-box\">
                                    <h5>
                                        QUALITY EQUIPMENT
                                    </h5>
                                    <p>
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"{{ asset('./FrontOffice/images/u-4.png') }}\" alt=\"\">
                                </div>
                                <div class=\"detail-box\">
                                    <h5>
                                        NUTRITION
                                    </h5>
                                    <p>
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"{{ asset('./FrontOffice/images/u-2.png') }}\" alt=\"\">
                                </div>
                            <div class=\"detail-box\">
                                <h5>
                                    HEALTHY DIET PLAN
                                </h5>
                                <p>
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"box\">
                            <div class=\"img-box\">
                                <img src=\"{{ asset('./FrontOffice/images/u-3.png') }}\" alt=\"\">
                            </div>
                            <div class=\"detail-box\">
                                <h5>
                                    SPORT TRAINING
                                </h5>
                                <p>
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end us section -->


    <!-- heathy section -->

    <section class=\"heathy_section layout_padding\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-12 mx-auto\">
                    <div class=\"detail-box\">
                        <h2>
                            HEALTHY MIND, HEALTHY BODY
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        </p>
                        <div class=\"btn-box\">
                            <a href=\"\">
                                READ MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end heathy section -->

    <!-- trainer section -->

    <section class=\"trainer_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Our Gym Trainers
                </h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Smirth Jon
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/t1.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png') }}\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Jean Doe
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/t2.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png')}}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png')}}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png')}}\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Alex Den
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/t3.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png') }}\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end trainer section -->
    <!-- Nutritionist section -->

    <section class=\"trainer_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Our Nutritionists
                </h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                DR.lola lili
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/nut1.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png') }}\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Jean Doe
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/nut2.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png') }}\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Alex Den
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/nut3.webp') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png') }}\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section -->

    <section class=\"contact_section \">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 px-0\">
                    <div class=\"img-box\">
                        <img src=\"{{ asset('./FrontOffice/images/contact-img.jpg') }}\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6\">
                    <div class=\"form_container pr-0 pr-lg-5 mr-0 mr-lg-2\">
                        <div class=\"heading_container\">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action=\"\">
                            <div>
                                <input type=\"text\" placeholder=\"Name\" />
                            </div>
                            <div>
                                <input type=\"email\" placeholder=\"Email\" />
                            </div>
                            <div>
                                <input type=\"text\" placeholder=\"Phone Number\" />
                            </div>
                            <div>
                                <input type=\"text\" class=\"message-box\" placeholder=\"Message\" />
                            </div>
                            <div class=\"d-flex \">
                                <button>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->
    <!-- info section -->
    <section class=\"info_section layout_padding2\">
        <div class=\"container\">
            <div class=\"info_items\">
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-1\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                Tunisia
                            </p>
                        </div>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-2\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                +216 95 155 506
                            </p>
                        </div>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-3\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                Nutrifit@gmail.com
                            </p>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <footer class=\"container-fluid footer_section\">
            <p>
                &copy; 2024 All Rights Reserved.
            </p>
        </footer>
    </section>

    <!-- end info_section -->




    <script src=\"{{ asset('./FrontOffice/js/jquery-3.4.1.min.js') }}\"></script>
    <script src=\"{{ asset('./FrontOffice/js/bootstrap.js') }}\"></script>

    </body>

{% endblock %}
", "main/index.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\main\\index.html.twig");
    }
}
