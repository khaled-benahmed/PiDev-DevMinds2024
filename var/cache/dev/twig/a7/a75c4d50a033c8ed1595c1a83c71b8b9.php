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

/* planning_crud/view.html.twig */
class __TwigTemplate_6d2d09a0de8ed2335de161996ff72df5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'tache' => [$this, 'block_tache'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planning_crud/view.html.twig", 1);
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

        echo "NutriFit | Planning";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 6
        echo "        <head><style>
                .card{
                    border: none;
                    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
                    overflow:hidden;
                    border-radius:20px;
                    min-height:450px;
                    box-shadow: 0 0 12px 0 rgba(0,0,0,0.2);

                    @media (max-width: 768px) {
                        min-height:350px;
                    }

                    @media (max-width: 420px) {
                        min-height:300px;
                    }

                    &.card-has-bg{
                        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
                        background-size:120%;
                        background-repeat:no-repeat;
                        background-position: center center;
                        &:before {
                            content: '';
                            position: absolute;
                            top: 0;
                            right: 0;
                            bottom: 0;
                            left: 0;
                            background: inherit;
                            -webkit-filter: grayscale(1);
                            -moz-filter: grayscale(100%);
                            -o-filter: grayscale(100%);
                            filter: grayscale(100%);}

                        &:hover {
                            transform: scale(0.98);
                            box-shadow: 0 0 5px -2px rgba(0,0,0,0.3);
                            background-size:130%;
                            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);

                            .card-img-overlay {
                                transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
                                background: rgb(255, 33, 33);
                                background: linear-gradient(0deg, rgba(206, 128, 128, 0.5) 0%, rgb(98, 34, 34) 150%);
                            }
                        }
                    }
                    .card-footer{
                        background: none;
                        border-top: none;
                        .media{
                            img{
                                border:solid 3px rgba(255,255,255,0.3);
                            }
                        }
                    }
                    .card-title{font-weight:800}
                    .card-meta{color:rgba(0,0,0,0.3);
                        text-transform:uppercase;
                        font-weight:500;
                        letter-spacing:2px;}
                    .card-body{
                        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);


                    }
                    &:hover {
                        .card-body{
                            margin-top:30px;
                            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
                        }
                        cursor: pointer;
                        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
                    }
                    .card-img-overlay {
                        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
                        background: rgb(255, 33, 33);
                        background: linear-gradient(0deg, rgba(206, 128, 128, 0.5) 0%, rgb(98, 34, 34) 300%);
                    }
                }
                @media (max-width: 767px){

                }</style>
            <title></title></head>
        <!--? Hero Start -->
        <div class=\"slider-area2\">
            <div class=\"slider-height2 d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"hero-cap hero-cap2 text-center pt-70\">
                                <h2>Planning</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!--? Date Tabs Start -->
        <section class=\"date-tabs section-padding30\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"section-tittle text-center mb-100\">
                            <span>Votre Planning</span>
                        </div>
                    </div>
                </div>
                <!-- Heading & Nav Button -->
                <div class=\"row justify-content-center mb-10\">
                    <div class=\"col-lg-11\">
                        <div class=\"properties__button\">
                            <!--Nav Button  -->
                            <nav>
                                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                                    <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Lundi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Mardi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-contact-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Mercredi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-last-tab\" data-toggle=\"tab\" href=\"#nav-last\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Jeudi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-Sports\" data-toggle=\"tab\" href=\"#nav-nav-Sport\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Vendredi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-six\" data-toggle=\"tab\" href=\"#nav-nav-six\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Samedi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-seven\" data-toggle=\"tab\" href=\"#nav-nav-seven\" role=\"tab\" aria-controls=\"nav-seven\" aria-selected=\"false\">Dimanche</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-11\">
                        <!-- Nav Card -->
                        <div class=\"tab-content\" id=\"nav-tabContent\">
                            ";
        // line 143
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 144
            echo "                            <div class=\"tab-pane fade\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 149, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 150
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 150) == "Lundi")) {
                    // line 151
                    echo "                                            <div class=\"single-box\">
                                                <div class=\"single-caption text-center\">
                                                    <div class=\"caption\">
                                                        <h2>";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 154), "html", null, true);
                    echo "</h2>
                                                        <h3>";
                    // line 155
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 155), "H:i"), "html", null, true);
                    echo "</h3>
                                                        <div class=\"container\">
                                                            <div class=\"row\">
                                                                ";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 158));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 159
                        echo "                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 159)), "html", null, true);
                        echo ");\">
                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                <div class=\"card-body\">
                                                                                    <small class=\"card-meta mb-2\">";
                        // line 163
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 163), "html", null, true);
                        echo "</small>
                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 164
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 164), "html", null, true);
                        echo "</a></h4>
                                                                                    <small><i class=\"far fa-clock\"></i> ";
                        // line 165
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 165), "html", null, true);
                        echo " min</small>
                                                                                </div>
                                                                                <div class=\"card-footer\">
                                                                                    <div class=\"media\">
                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                        <div class=\"media-body\">
                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                            <small>Director of UI/UX</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
                }
                // line 184
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 191
            echo "                                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 196, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 197
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 197) == "Mardi")) {
                    // line 198
                    echo "                                                <div class=\"single-box\">
                                                    <div class=\"single-caption text-center\">
                                                        <div class=\"caption\">
                                                            <h2>";
                    // line 201
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 201), "html", null, true);
                    echo "</h2>
                                                            <h3>";
                    // line 202
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 202), "H:i"), "html", null, true);
                    echo "</h3>
                                                            <div class=\"container\">
                                                                <div class=\"row\">
                                                                    ";
                    // line 205
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 205));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 206
                        echo "                                                                        <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 206)), "html", null, true);
                        echo ");\">
                                                                                <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                <div class=\"card-img-overlay d-flex flex-column\">
                                                                                    <div class=\"card-body\">
                                                                                        <small class=\"card-meta mb-2\">";
                        // line 210
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 210), "html", null, true);
                        echo "</small>
                                                                                        <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 211
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 211), "html", null, true);
                        echo "</a></h4>
                                                                                        <small><i class=\"far fa-clock\"></i> ";
                        // line 212
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 212), "html", null, true);
                        echo " min</small>
                                                                                    </div>
                                                                                    <div class=\"card-footer\">
                                                                                        <div class=\"media\">
                                                                                            <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                            <div class=\"media-body\">
                                                                                                <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                <small>Director of UI/UX</small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div></div>
                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
                }
                // line 231
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 238
            echo "                                    <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 243, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 244
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 244) == "Mercredi")) {
                    // line 245
                    echo "                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>";
                    // line 248
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 248), "html", null, true);
                    echo "</h2>
                                                                        <h3>";
                    // line 249
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 249), "H:i"), "html", null, true);
                    echo "</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                ";
                    // line 252
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 252));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 253
                        echo "                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 253)), "html", null, true);
                        echo ");\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">";
                        // line 257
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 257), "html", null, true);
                        echo "</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 258
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 258), "html", null, true);
                        echo "</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> ";
                        // line 259
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 259), "html", null, true);
                        echo " min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div></div>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 273
                    echo "                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                }
                // line 279
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 286
            echo "                                    <div class=\"tab-pane fade\" id=\"nav-last\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    ";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 291, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 292
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 292) == "Jeudi")) {
                    // line 293
                    echo "                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>";
                    // line 296
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 296), "html", null, true);
                    echo "</h2>
                                                                        <h3>";
                    // line 297
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 297), "H:i"), "html", null, true);
                    echo "</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                ";
                    // line 300
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 300));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 301
                        echo "                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 301)), "html", null, true);
                        echo ");\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">";
                        // line 305
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 305), "html", null, true);
                        echo "</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 306
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 306), "html", null, true);
                        echo "</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> ";
                        // line 307
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 307), "html", null, true);
                        echo " min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 322
                    echo "                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                }
                // line 328
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 329
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 335
            echo "                                    <div class=\"tab-pane fade\" id=\"nav-nav-Sport\" role=\"tabpanel\" aria-labelledby=\"nav-last-tab\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 340, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 341
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 341) == "Vendredi")) {
                    // line 342
                    echo "                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>";
                    // line 345
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 345), "html", null, true);
                    echo "</h2>
                                                                        <h3>";
                    // line 346
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 346), "H:i"), "html", null, true);
                    echo "</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                ";
                    // line 349
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 349));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 350
                        echo "                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 350)), "html", null, true);
                        echo ");\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">";
                        // line 354
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 354), "html", null, true);
                        echo "</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 355
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 355), "html", null, true);
                        echo "</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> ";
                        // line 356
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 356), "html", null, true);
                        echo " min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div></div>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 370
                    echo "                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                }
                // line 376
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 383
            echo "                                    <div class=\"tab-pane fade\" id=\"nav-nav-six\" role=\"tabpanel\" aria-labelledby=\"nav-Sports\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    ";
            // line 388
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 388, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 389
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 389) == "Samedi")) {
                    // line 390
                    echo "                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>";
                    // line 393
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 393), "html", null, true);
                    echo "</h2>
                                                                        <h3>";
                    // line 394
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 394), "H:i"), "html", null, true);
                    echo "</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                ";
                    // line 397
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 397));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 398
                        echo "                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 398)), "html", null, true);
                        echo ");\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">";
                        // line 402
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 402), "html", null, true);
                        echo "</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 403
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 403), "html", null, true);
                        echo "</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> ";
                        // line 404
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 404), "html", null, true);
                        echo " min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div></div>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 418
                    echo "                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                }
                // line 424
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 431
            echo "                                    <div class=\"tab-pane fade\" id=\"nav-nav-seven\" role=\"tabpanel\" aria-labelledby=\"nav-six\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    ";
            // line 436
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 436, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 437
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 437) == "Dimanche")) {
                    // line 438
                    echo "                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>";
                    // line 441
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 441), "html", null, true);
                    echo "</h2>
                                                                        <h3>";
                    // line 442
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 442), "H:i"), "html", null, true);
                    echo "</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                ";
                    // line 445
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 445));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 446
                        echo "                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 446)), "html", null, true);
                        echo ");\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">";
                        // line 450
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 450), "html", null, true);
                        echo "</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 451
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 451), "html", null, true);
                        echo "</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> ";
                        // line 452
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 452), "html", null, true);
                        echo " min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div></div>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 466
                    echo "                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                }
                // line 472
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 473
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "planning_crud/view.html.twig";
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
        return array (  863 => 478,  853 => 473,  847 => 472,  839 => 466,  819 => 452,  815 => 451,  811 => 450,  803 => 446,  799 => 445,  793 => 442,  789 => 441,  784 => 438,  781 => 437,  777 => 436,  770 => 431,  763 => 425,  757 => 424,  749 => 418,  729 => 404,  725 => 403,  721 => 402,  713 => 398,  709 => 397,  703 => 394,  699 => 393,  694 => 390,  691 => 389,  687 => 388,  680 => 383,  673 => 377,  667 => 376,  659 => 370,  639 => 356,  635 => 355,  631 => 354,  623 => 350,  619 => 349,  613 => 346,  609 => 345,  604 => 342,  601 => 341,  597 => 340,  590 => 335,  583 => 329,  577 => 328,  569 => 322,  548 => 307,  544 => 306,  540 => 305,  532 => 301,  528 => 300,  522 => 297,  518 => 296,  513 => 293,  510 => 292,  506 => 291,  499 => 286,  492 => 280,  486 => 279,  478 => 273,  458 => 259,  454 => 258,  450 => 257,  442 => 253,  438 => 252,  432 => 249,  428 => 248,  423 => 245,  420 => 244,  416 => 243,  409 => 238,  402 => 232,  396 => 231,  389 => 226,  369 => 212,  365 => 211,  361 => 210,  353 => 206,  349 => 205,  343 => 202,  339 => 201,  334 => 198,  331 => 197,  327 => 196,  320 => 191,  313 => 185,  307 => 184,  300 => 179,  280 => 165,  276 => 164,  272 => 163,  264 => 159,  260 => 158,  254 => 155,  250 => 154,  245 => 151,  242 => 150,  238 => 149,  231 => 144,  226 => 143,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}NutriFit | Planning{% endblock %}

    {% block tache %}
        <head><style>
                .card{
                    border: none;
                    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
                    overflow:hidden;
                    border-radius:20px;
                    min-height:450px;
                    box-shadow: 0 0 12px 0 rgba(0,0,0,0.2);

                    @media (max-width: 768px) {
                        min-height:350px;
                    }

                    @media (max-width: 420px) {
                        min-height:300px;
                    }

                    &.card-has-bg{
                        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
                        background-size:120%;
                        background-repeat:no-repeat;
                        background-position: center center;
                        &:before {
                            content: '';
                            position: absolute;
                            top: 0;
                            right: 0;
                            bottom: 0;
                            left: 0;
                            background: inherit;
                            -webkit-filter: grayscale(1);
                            -moz-filter: grayscale(100%);
                            -o-filter: grayscale(100%);
                            filter: grayscale(100%);}

                        &:hover {
                            transform: scale(0.98);
                            box-shadow: 0 0 5px -2px rgba(0,0,0,0.3);
                            background-size:130%;
                            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);

                            .card-img-overlay {
                                transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
                                background: rgb(255, 33, 33);
                                background: linear-gradient(0deg, rgba(206, 128, 128, 0.5) 0%, rgb(98, 34, 34) 150%);
                            }
                        }
                    }
                    .card-footer{
                        background: none;
                        border-top: none;
                        .media{
                            img{
                                border:solid 3px rgba(255,255,255,0.3);
                            }
                        }
                    }
                    .card-title{font-weight:800}
                    .card-meta{color:rgba(0,0,0,0.3);
                        text-transform:uppercase;
                        font-weight:500;
                        letter-spacing:2px;}
                    .card-body{
                        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);


                    }
                    &:hover {
                        .card-body{
                            margin-top:30px;
                            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
                        }
                        cursor: pointer;
                        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
                    }
                    .card-img-overlay {
                        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
                        background: rgb(255, 33, 33);
                        background: linear-gradient(0deg, rgba(206, 128, 128, 0.5) 0%, rgb(98, 34, 34) 300%);
                    }
                }
                @media (max-width: 767px){

                }</style>
            <title></title></head>
        <!--? Hero Start -->
        <div class=\"slider-area2\">
            <div class=\"slider-height2 d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"hero-cap hero-cap2 text-center pt-70\">
                                <h2>Planning</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!--? Date Tabs Start -->
        <section class=\"date-tabs section-padding30\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"section-tittle text-center mb-100\">
                            <span>Votre Planning</span>
                        </div>
                    </div>
                </div>
                <!-- Heading & Nav Button -->
                <div class=\"row justify-content-center mb-10\">
                    <div class=\"col-lg-11\">
                        <div class=\"properties__button\">
                            <!--Nav Button  -->
                            <nav>
                                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                                    <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Lundi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Mardi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-contact-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Mercredi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-last-tab\" data-toggle=\"tab\" href=\"#nav-last\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Jeudi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-Sports\" data-toggle=\"tab\" href=\"#nav-nav-Sport\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Vendredi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-six\" data-toggle=\"tab\" href=\"#nav-nav-six\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Samedi</a>
                                    <a class=\"nav-item nav-link\" id=\"nav-seven\" data-toggle=\"tab\" href=\"#nav-nav-seven\" role=\"tab\" aria-controls=\"nav-seven\" aria-selected=\"false\">Dimanche</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-11\">
                        <!-- Nav Card -->
                        <div class=\"tab-content\" id=\"nav-tabContent\">
                            {# Lundi #}
                            {% for planning in plannings %}
                            <div class=\"tab-pane fade\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            {% for planning in plannings %}
                                            {% if planning.jourPlanning == \"Lundi\" %}
                                            <div class=\"single-box\">
                                                <div class=\"single-caption text-center\">
                                                    <div class=\"caption\">
                                                        <h2>{{ planning.titre }}</h2>
                                                        <h3>{{ planning.startTime|date('H:i') }}</h3>
                                                        <div class=\"container\">
                                                            <div class=\"row\">
                                                                {% for activite in planning.activities %}
                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url({{ asset(activite.imageActivite) }});\">
                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                <div class=\"card-body\">
                                                                                    <small class=\"card-meta mb-2\">{{ activite.nomActivite}}</small>
                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">{{activite.descriptionActivite  }}</a></h4>
                                                                                    <small><i class=\"far fa-clock\"></i> {{ activite.dureeActivite}} min</small>
                                                                                </div>
                                                                                <div class=\"card-footer\">
                                                                                    <div class=\"media\">
                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                        <div class=\"media-body\">
                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                            <small>Director of UI/UX</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                {% endfor %}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {% endif %}
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {# Mardi #}
                                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                {% for planning in plannings %}
                                                {% if planning.jourPlanning == \"Mardi\" %}
                                                <div class=\"single-box\">
                                                    <div class=\"single-caption text-center\">
                                                        <div class=\"caption\">
                                                            <h2>{{ planning.titre }}</h2>
                                                            <h3>{{ planning.startTime|date('H:i') }}</h3>
                                                            <div class=\"container\">
                                                                <div class=\"row\">
                                                                    {% for activite in planning.activities %}
                                                                        <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url({{ asset(activite.imageActivite) }});\">
                                                                                <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                <div class=\"card-img-overlay d-flex flex-column\">
                                                                                    <div class=\"card-body\">
                                                                                        <small class=\"card-meta mb-2\">{{ activite.nomActivite}}</small>
                                                                                        <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">{{activite.descriptionActivite  }}</a></h4>
                                                                                        <small><i class=\"far fa-clock\"></i> {{ activite.dureeActivite}} min</small>
                                                                                    </div>
                                                                                    <div class=\"card-footer\">
                                                                                        <div class=\"media\">
                                                                                            <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                            <div class=\"media-body\">
                                                                                                <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                <small>Director of UI/UX</small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div></div>
                                                                    {% endfor %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {# Mercredi #}
                                    <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    {% for planning in plannings %}
                                                        {% if planning.jourPlanning == \"Mercredi\" %}
                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>{{ planning.titre }}</h2>
                                                                        <h3>{{ planning.startTime|date('H:i') }}</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                {% for activite in planning.activities %}
                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url({{ asset(activite.imageActivite) }});\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">{{ activite.nomActivite}}</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">{{activite.descriptionActivite  }}</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> {{ activite.dureeActivite}} min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div></div>
                                                                                {% endfor %}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {# Jeudi #}
                                    <div class=\"tab-pane fade\" id=\"nav-last\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    {% for planning in plannings %}
                                                        {% if planning.jourPlanning == \"Jeudi\" %}
                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>{{ planning.titre }}</h2>
                                                                        <h3>{{ planning.startTime|date('H:i') }}</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                {% for activite in planning.activities %}
                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url({{ asset(activite.imageActivite) }});\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">{{ activite.nomActivite}}</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">{{activite.descriptionActivite  }}</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> {{ activite.dureeActivite}} min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                {% endfor %}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {# Vendredi #}
                                    <div class=\"tab-pane fade\" id=\"nav-nav-Sport\" role=\"tabpanel\" aria-labelledby=\"nav-last-tab\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    {% for planning in plannings %}
                                                        {% if planning.jourPlanning == \"Vendredi\" %}
                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>{{ planning.titre }}</h2>
                                                                        <h3>{{ planning.startTime|date('H:i') }}</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                {% for activite in planning.activities %}
                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url({{ asset(activite.imageActivite) }});\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">{{ activite.nomActivite}}</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">{{activite.descriptionActivite  }}</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> {{ activite.dureeActivite}} min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div></div>
                                                                                {% endfor %}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {# Samedi #}
                                    <div class=\"tab-pane fade\" id=\"nav-nav-six\" role=\"tabpanel\" aria-labelledby=\"nav-Sports\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    {% for planning in plannings %}
                                                        {% if planning.jourPlanning == \"Samedi\" %}
                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>{{ planning.titre }}</h2>
                                                                        <h3>{{ planning.startTime|date('H:i') }}</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                {% for activite in planning.activities %}
                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url({{ asset(activite.imageActivite) }});\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">{{ activite.nomActivite}}</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">{{activite.descriptionActivite  }}</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> {{ activite.dureeActivite}} min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div></div>
                                                                                {% endfor %}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {# Dimanche #}
                                    <div class=\"tab-pane fade\" id=\"nav-nav-seven\" role=\"tabpanel\" aria-labelledby=\"nav-six\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"tab-wrapper\">
                                                    <!-- single -->
                                                    {% for planning in plannings %}
                                                        {% if planning.jourPlanning == \"Dimanche\" %}
                                                            <div class=\"single-box\">
                                                                <div class=\"single-caption text-center\">
                                                                    <div class=\"caption\">
                                                                        <h2>{{ planning.titre }}</h2>
                                                                        <h3>{{ planning.startTime|date('H:i') }}</h3>
                                                                        <div class=\"container\">
                                                                            <div class=\"row\">
                                                                                {% for activite in planning.activities %}
                                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url({{ asset(activite.imageActivite) }});\">
                                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                                <div class=\"card-body\">
                                                                                                    <small class=\"card-meta mb-2\">{{ activite.nomActivite}}</small>
                                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">{{activite.descriptionActivite  }}</a></h4>
                                                                                                    <small><i class=\"far fa-clock\"></i> {{ activite.dureeActivite}} min</small>
                                                                                                </div>
                                                                                                <div class=\"card-footer\">
                                                                                                    <div class=\"media\">
                                                                                                        <img class=\"mr-3 rounded-circle\" src=\"https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80\" alt=\"Generic placeholder image\" style=\"max-width:50px\">
                                                                                                        <div class=\"media-body\">
                                                                                                            <h6 class=\"my-0 text-dark d-block\">Oz Coruhlu</h6>
                                                                                                            <small>Director of UI/UX</small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div></div>
                                                                                {% endfor %}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {% endfor %}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    {% endblock %}
", "planning_crud/view.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\planning_crud\\view.html.twig");
    }
}
