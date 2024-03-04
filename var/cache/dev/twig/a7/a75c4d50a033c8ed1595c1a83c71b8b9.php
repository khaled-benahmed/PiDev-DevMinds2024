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
                            <div class=\"text-center mt-4\">
                                <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_route_name");
        echo "\" class=\"btn btn-primary\">Afficher mon calendrier</a>
                            </div>
                            <!-- Nav Card -->
                            <div class=\"tab-content\" id=\"nav-tabContent\">
                                ";
        // line 152
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 153
            echo "                                <div class=\"tab-pane fade\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 158, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 159
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 159) == "Lundi")) {
                    // line 160
                    echo "                                                        <div class=\"single-box\">
                                                            <div class=\"single-caption text-center\">
                                                                <div class=\"caption\">
                                                                    <h2>";
                    // line 163
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 163), "html", null, true);
                    echo "</h2>
                                                                    <h3>";
                    // line 164
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 164), "H:i"), "html", null, true);
                    echo "</h3>
                                                                    <div class=\"container\">
                                                                        <div class=\"row\">
                                                                            ";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 167));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 168
                        echo "                                                                                <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 168)), "html", null, true);
                        echo ");\">
                                                                                        <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                        <div class=\"card-img-overlay d-flex flex-column\">
                                                                                            <div class=\"card-body\">
                                                                                                <small class=\"card-meta mb-2\">";
                        // line 172
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 172), "html", null, true);
                        echo "</small>
                                                                                                <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 173
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 173), "html", null, true);
                        echo "</a></h4>
                                                                                                <small><i class=\"far fa-clock\"></i> ";
                        // line 174
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 174), "html", null, true);
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
                    // line 188
                    echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    ";
                }
                // line 193
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 200
            echo "                                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 205, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 206
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 206) == "Mardi")) {
                    // line 207
                    echo "                                                        <div class=\"single-box\">
                                                            <div class=\"single-caption text-center\">
                                                                <div class=\"caption\">
                                                                    <h2>";
                    // line 210
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 210), "html", null, true);
                    echo "</h2>
                                                                    <h3>";
                    // line 211
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 211), "H:i"), "html", null, true);
                    echo "</h3>
                                                                    <div class=\"container\">
                                                                        <div class=\"row\">
                                                                    ";
                    // line 214
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 214));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 215
                        echo "                                                                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 215)), "html", null, true);
                        echo ");\">
                                                                            <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                            <div class=\"card-img-overlay d-flex flex-column\">
                                                                                <div class=\"card-body\">
                                                                                    <small class=\"card-meta mb-2\">";
                        // line 219
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 219), "html", null, true);
                        echo "</small>
                                                                                    <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 220
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 220), "html", null, true);
                        echo "</a></h4>
                                                                                    <small><i class=\"far fa-clock\"></i> ";
                        // line 221
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 221), "html", null, true);
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
                    // line 235
                    echo "                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 240
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                                           </div>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 247
            echo "                                <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                ";
            // line 252
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 252, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 253
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 253) == "Mercredi")) {
                    // line 254
                    echo "                                                        <div class=\"single-box\">
                                                            <div class=\"single-caption text-center\">
                                                                <div class=\"caption\">
                                                                    <h2>";
                    // line 257
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 257), "html", null, true);
                    echo "</h2>
                                                                    <h3>";
                    // line 258
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 258), "H:i"), "html", null, true);
                    echo "</h3>
                                                                    <div class=\"container\">
                                                                        <div class=\"row\">
                                                                            ";
                    // line 261
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 261));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 262
                        echo "                                                                                <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 262)), "html", null, true);
                        echo ");\">
                                                                                        <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                        <div class=\"card-img-overlay d-flex flex-column\">
                                                                                            <div class=\"card-body\">
                                                                                                <small class=\"card-meta mb-2\">";
                        // line 266
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 266), "html", null, true);
                        echo "</small>
                                                                                                <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 267
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 267), "html", null, true);
                        echo "</a></h4>
                                                                                                <small><i class=\"far fa-clock\"></i> ";
                        // line 268
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 268), "html", null, true);
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
                    // line 282
                    echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 288
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "                                           </div>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 295
            echo "                                <div class=\"tab-pane fade\" id=\"nav-last\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                ";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 300, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 301
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 301) == "Jeudi")) {
                    // line 302
                    echo "                                                        <div class=\"single-box\">
                                                            <div class=\"single-caption text-center\">
                                                                <div class=\"caption\">
                                                                    <h2>";
                    // line 305
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 305), "html", null, true);
                    echo "</h2>
                                                                    <h3>";
                    // line 306
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 306), "H:i"), "html", null, true);
                    echo "</h3>
                                                                    <div class=\"container\">
                                                                        <div class=\"row\">
                                                                            ";
                    // line 309
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 309));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 310
                        echo "                                                                                <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 310)), "html", null, true);
                        echo ");\">
                                                                                        <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                        <div class=\"card-img-overlay d-flex flex-column\">
                                                                                            <div class=\"card-body\">
                                                                                                <small class=\"card-meta mb-2\">";
                        // line 314
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 314), "html", null, true);
                        echo "</small>
                                                                                                <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 315
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 315), "html", null, true);
                        echo "</a></h4>
                                                                                                <small><i class=\"far fa-clock\"></i> ";
                        // line 316
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 316), "html", null, true);
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
                    // line 331
                    echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 337
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "                                           </div>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 344
            echo "                                <div class=\"tab-pane fade\" id=\"nav-nav-Sport\" role=\"tabpanel\" aria-labelledby=\"nav-last-tab\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                ";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 349, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 350
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 350) == "Vendredi")) {
                    // line 351
                    echo "                                                        <div class=\"single-box\">
                                                            <div class=\"single-caption text-center\">
                                                                <div class=\"caption\">
                                                                    <h2>";
                    // line 354
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 354), "html", null, true);
                    echo "</h2>
                                                                    <h3>";
                    // line 355
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 355), "H:i"), "html", null, true);
                    echo "</h3>
                                                                    <div class=\"container\">
                                                                        <div class=\"row\">
                                                                            ";
                    // line 358
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 358));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 359
                        echo "                                                                                <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 359)), "html", null, true);
                        echo ");\">
                                                                                        <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                        <div class=\"card-img-overlay d-flex flex-column\">
                                                                                            <div class=\"card-body\">
                                                                                                <small class=\"card-meta mb-2\">";
                        // line 363
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 363), "html", null, true);
                        echo "</small>
                                                                                                <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 364
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 364), "html", null, true);
                        echo "</a></h4>
                                                                                                <small><i class=\"far fa-clock\"></i> ";
                        // line 365
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 365), "html", null, true);
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
                    // line 379
                    echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 385
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 386
            echo "                                           </div>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 392
            echo "                                <div class=\"tab-pane fade\" id=\"nav-nav-six\" role=\"tabpanel\" aria-labelledby=\"nav-Sports\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 397, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 398
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 398) == "Samedi")) {
                    // line 399
                    echo "                                                        <div class=\"single-box\">
                                                            <div class=\"single-caption text-center\">
                                                                <div class=\"caption\">
                                                                    <h2>";
                    // line 402
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 402), "html", null, true);
                    echo "</h2>
                                                                    <h3>";
                    // line 403
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 403), "H:i"), "html", null, true);
                    echo "</h3>
                                                                    <div class=\"container\">
                                                                        <div class=\"row\">
                                                                            ";
                    // line 406
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 406));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 407
                        echo "                                                                                <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 407)), "html", null, true);
                        echo ");\">
                                                                                        <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                        <div class=\"card-img-overlay d-flex flex-column\">
                                                                                            <div class=\"card-body\">
                                                                                                <small class=\"card-meta mb-2\">";
                        // line 411
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 411), "html", null, true);
                        echo "</small>
                                                                                                <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 412
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 412), "html", null, true);
                        echo "</a></h4>
                                                                                                <small><i class=\"far fa-clock\"></i> ";
                        // line 413
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 413), "html", null, true);
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
                    // line 427
                    echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 433
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            echo "                                           </div>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 440
            echo "                                <div class=\"tab-pane fade\" id=\"nav-nav-seven\" role=\"tabpanel\" aria-labelledby=\"nav-six\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"tab-wrapper\">
                                                <!-- single -->
                                                ";
            // line 445
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 445, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 446
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 446) == "Dimanche")) {
                    // line 447
                    echo "                                                        <div class=\"single-box\">
                                                            <div class=\"single-caption text-center\">
                                                                <div class=\"caption\">
                                                                    <h2>";
                    // line 450
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 450), "html", null, true);
                    echo "</h2>
                                                                    <h3>";
                    // line 451
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 451), "H:i"), "html", null, true);
                    echo "</h3>
                                                                    <div class=\"container\">
                                                                        <div class=\"row\">
                                                                            ";
                    // line 454
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 454));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 455
                        echo "                                                                                <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 455)), "html", null, true);
                        echo ");\">
                                                                                        <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                        <div class=\"card-img-overlay d-flex flex-column\">
                                                                                            <div class=\"card-body\">
                                                                                                <small class=\"card-meta mb-2\">";
                        // line 459
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 459), "html", null, true);
                        echo "</small>
                                                                                                <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 460
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 460), "html", null, true);
                        echo "</a></h4>
                                                                                                <small><i class=\"far fa-clock\"></i> ";
                        // line 461
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 461), "html", null, true);
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
                    // line 475
                    echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 481
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 482
            echo "                                           </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
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
        return array (  875 => 487,  865 => 482,  859 => 481,  851 => 475,  831 => 461,  827 => 460,  823 => 459,  815 => 455,  811 => 454,  805 => 451,  801 => 450,  796 => 447,  793 => 446,  789 => 445,  782 => 440,  775 => 434,  769 => 433,  761 => 427,  741 => 413,  737 => 412,  733 => 411,  725 => 407,  721 => 406,  715 => 403,  711 => 402,  706 => 399,  703 => 398,  699 => 397,  692 => 392,  685 => 386,  679 => 385,  671 => 379,  651 => 365,  647 => 364,  643 => 363,  635 => 359,  631 => 358,  625 => 355,  621 => 354,  616 => 351,  613 => 350,  609 => 349,  602 => 344,  595 => 338,  589 => 337,  581 => 331,  560 => 316,  556 => 315,  552 => 314,  544 => 310,  540 => 309,  534 => 306,  530 => 305,  525 => 302,  522 => 301,  518 => 300,  511 => 295,  504 => 289,  498 => 288,  490 => 282,  470 => 268,  466 => 267,  462 => 266,  454 => 262,  450 => 261,  444 => 258,  440 => 257,  435 => 254,  432 => 253,  428 => 252,  421 => 247,  414 => 241,  408 => 240,  401 => 235,  381 => 221,  377 => 220,  373 => 219,  365 => 215,  361 => 214,  355 => 211,  351 => 210,  346 => 207,  343 => 206,  339 => 205,  332 => 200,  325 => 194,  319 => 193,  312 => 188,  292 => 174,  288 => 173,  284 => 172,  276 => 168,  272 => 167,  266 => 164,  262 => 163,  257 => 160,  254 => 159,  250 => 158,  243 => 153,  238 => 152,  231 => 147,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% extends 'base.html.twig' %}

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
                            <div class=\"text-center mt-4\">
                                <a href=\"{{ path('calendar_route_name') }}\" class=\"btn btn-primary\">Afficher mon calendrier</a>
                            </div>
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
