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
        echo "    <head><style>

            .lead{
                color:#aaa;
            }


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
        // line 149
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 150
            echo "                            <div class=\"tab-pane fade\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 155, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 156
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 156) == "Lundi")) {
                    // line 157
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 160
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 160), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 161
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 161), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 164));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 165
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 165)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 169
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 169), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 170
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 170), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 171
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 171), "html", null, true);
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
                    // line 185
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                ";
                }
                // line 190
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 197
            echo "                            <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 202, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 203
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 203) == "Mardi")) {
                    // line 204
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 207
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 207), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 208
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 208), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                ";
                    // line 211
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 211));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 212
                        echo "                                                                <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 212)), "html", null, true);
                        echo ");\">
                                                                        <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                        <div class=\"card-img-overlay d-flex flex-column\">
                                                                            <div class=\"card-body\">
                                                                                <small class=\"card-meta mb-2\">";
                        // line 216
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 216), "html", null, true);
                        echo "</small>
                                                                                <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 217
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 217), "html", null, true);
                        echo "</a></h4>
                                                                                <small><i class=\"far fa-clock\"></i> ";
                        // line 218
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 218), "html", null, true);
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
                    // line 232
                    echo "                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 237
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 244
            echo "                            <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 249, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 250
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 250) == "Mercredi")) {
                    // line 251
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 254
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 254), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 255
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 255), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 258
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 258));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 259
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 259)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 263
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 263), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 264
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 264), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 265
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 265), "html", null, true);
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
                    // line 279
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 285
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 292
            echo "                            <div class=\"tab-pane fade\" id=\"nav-last\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 297, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 298
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 298) == "Jeudi")) {
                    // line 299
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 302
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 302), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 303
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 303), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 306
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 306));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 307
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 307)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 311
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 311), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 312
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 312), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 313
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 313), "html", null, true);
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
                    // line 328
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 334
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 341
            echo "                            <div class=\"tab-pane fade\" id=\"nav-nav-Sport\" role=\"tabpanel\" aria-labelledby=\"nav-last-tab\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 346, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 347
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 347) == "Vendredi")) {
                    // line 348
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 351
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 351), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 352
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 352), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 355
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 355));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 356
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 356)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 360
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 360), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 361
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 361), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 362
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 362), "html", null, true);
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
                    // line 376
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 382
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 383
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 389
            echo "                            <div class=\"tab-pane fade\" id=\"nav-nav-six\" role=\"tabpanel\" aria-labelledby=\"nav-Sports\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 394, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 395
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 395) == "Samedi")) {
                    // line 396
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 399
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 399), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 400
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 400), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 403
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 403));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 404
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 404)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 408
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 408), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 409
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 409), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 410
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 410), "html", null, true);
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
                    // line 424
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 430
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 437
            echo "                            <div class=\"tab-pane fade\" id=\"nav-nav-seven\" role=\"tabpanel\" aria-labelledby=\"nav-six\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 442
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 442, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 443
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 443) == "Dimanche")) {
                    // line 444
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 447
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 447), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 448
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 448), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 451
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 451));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 452
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 452)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 456
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 456), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 457
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 457), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 458
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 458), "html", null, true);
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
                    // line 472
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 478
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 479
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 484
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
        return array (  869 => 484,  859 => 479,  853 => 478,  845 => 472,  825 => 458,  821 => 457,  817 => 456,  809 => 452,  805 => 451,  799 => 448,  795 => 447,  790 => 444,  787 => 443,  783 => 442,  776 => 437,  769 => 431,  763 => 430,  755 => 424,  735 => 410,  731 => 409,  727 => 408,  719 => 404,  715 => 403,  709 => 400,  705 => 399,  700 => 396,  697 => 395,  693 => 394,  686 => 389,  679 => 383,  673 => 382,  665 => 376,  645 => 362,  641 => 361,  637 => 360,  629 => 356,  625 => 355,  619 => 352,  615 => 351,  610 => 348,  607 => 347,  603 => 346,  596 => 341,  589 => 335,  583 => 334,  575 => 328,  554 => 313,  550 => 312,  546 => 311,  538 => 307,  534 => 306,  528 => 303,  524 => 302,  519 => 299,  516 => 298,  512 => 297,  505 => 292,  498 => 286,  492 => 285,  484 => 279,  464 => 265,  460 => 264,  456 => 263,  448 => 259,  444 => 258,  438 => 255,  434 => 254,  429 => 251,  426 => 250,  422 => 249,  415 => 244,  408 => 238,  402 => 237,  395 => 232,  375 => 218,  371 => 217,  367 => 216,  359 => 212,  355 => 211,  349 => 208,  345 => 207,  340 => 204,  337 => 203,  333 => 202,  326 => 197,  319 => 191,  313 => 190,  306 => 185,  286 => 171,  282 => 170,  278 => 169,  270 => 165,  266 => 164,  260 => 161,  256 => 160,  251 => 157,  248 => 156,  244 => 155,  237 => 150,  232 => 149,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}NutriFit | Planning{% endblock %}

{% block tache %}
    <head><style>

            .lead{
                color:#aaa;
            }


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
", "planning_crud/view.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024\\templates\\planning_crud\\view.html.twig");
    }
}
