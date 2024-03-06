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

                h3, h2,a,span{color: white;

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

    <!--? Hero Start -->->
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
        // line 144
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "getPlannings", [], "method", false, false, false, 144));
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 145
            echo "                            <div class=\"tab-pane fade\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "getPlannings", [], "method", false, false, false, 150));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 151
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 151) == "Lundi")) {
                    // line 152
                    echo "                                                                                                     <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 155
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 155), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 156
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 156), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 159
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 159));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 160
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 160)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 164
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 164), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 165
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 165), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 166
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 166), "html", null, true);
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
                    // line 180
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 186
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            ";
            // line 193
            echo "                            <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 198, $this->source); })()), "getPlannings", [], "method", false, false, false, 198));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 199
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 199) == "Mardi")) {
                    // line 200
                    echo "                                                                                                   <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 203), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 204
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 204), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 207
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 207));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 208
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 208)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 212
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 212), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 213
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 213), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 214
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 214), "html", null, true);
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
                    // line 228
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 234
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 241
            echo "                            <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 246, $this->source); })()), "getPlannings", [], "method", false, false, false, 246));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 247
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 247) == "Mercredi")) {
                    // line 248
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 251
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 251), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 252
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 252), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 255
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 255));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 256
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 256)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 260
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 260), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 261
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 261), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 262
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 262), "html", null, true);
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
                    // line 276
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 282
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 289
            echo "                            <div class=\"tab-pane fade\" id=\"nav-last\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 294, $this->source); })()), "getPlannings", [], "method", false, false, false, 294));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 295
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 295) == "Jeudi")) {
                    // line 296
                    echo "                                                                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 299
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 299), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 300
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 300), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 303
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 303));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 304
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 304)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 308
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 308), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 309
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 309), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 310
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 310), "html", null, true);
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
                    // line 324
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 330
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 337
            echo "                            <div class=\"tab-pane fade\" id=\"nav-nav-Sport\" role=\"tabpanel\" aria-labelledby=\"nav-last-tab\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 342, $this->source); })()), "getPlannings", [], "method", false, false, false, 342));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 343
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 343) == "Vendredi")) {
                    // line 344
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 347
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 347), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 348
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 348), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 351
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 351));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 352
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 352)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 356
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 356), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 357
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 357), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 358
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 358), "html", null, true);
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
                    // line 372
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 378
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 385
            echo "                            <div class=\"tab-pane fade\" id=\"nav-nav-six\" role=\"tabpanel\" aria-labelledby=\"nav-Sports\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 390, $this->source); })()), "getPlannings", [], "method", false, false, false, 390));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 391
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 391) == "Samedi")) {
                    // line 392
                    echo "                                                                                                     <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <h2>";
                    // line 395
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 395), "html", null, true);
                    echo "</h2>
                                                                <h3>";
                    // line 396
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 396), "H:i"), "html", null, true);
                    echo "</h3>
                                                                <div class=\"container\">
                                                                    <div class=\"row\">
                                                                        ";
                    // line 399
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["planning"], "activities", [], "any", false, false, false, 399));
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 400
                        echo "                                                                            <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 400)), "html", null, true);
                        echo ");\">
                                                                                    <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                                                                                    <div class=\"card-img-overlay d-flex flex-column\">
                                                                                        <div class=\"card-body\">
                                                                                            <small class=\"card-meta mb-2\">";
                        // line 404
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 404), "html", null, true);
                        echo "</small>
                                                                                            <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
                        // line 405
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 405), "html", null, true);
                        echo "</a></h4>
                                                                                            <small><i class=\"far fa-clock\"></i> ";
                        // line 406
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 406), "html", null, true);
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
                    // line 420
                    echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 426
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 427
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 433
            echo "                            <div class=\"tab-pane fade\" id=\"nav-nav-seven\" role=\"tabpanel\" aria-labelledby=\"nav-six\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            ";
            // line 438
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 438, $this->source); })()), "getPlannings", [], "method", false, false, false, 438));
            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                // line 439
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 439) == "Dimanche")) {
                    // line 440
                    echo "                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <span>";
                    // line 443
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "heurePlanning", [], "any", false, false, false, 443), "html", null, true);
                    echo ":00</span>
                                                                <h3><a href=\"";
                    // line 444
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_crud_show_front", ["id" => twig_get_attribute($this->env, $this->source, $context["planning"], "cours", [], "any", false, false, false, 444)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["planning"], "cours", [], "any", false, false, false, 444), "nomCours", [], "any", false, false, false, 444), "html", null, true);
                    echo "</a></h3>
                                                                <p><span>par</span> Coach ";
                    // line 445
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["planning"], "cours", [], "any", false, false, false, 445), "nomCoach", [], "any", false, false, false, 445), "html", null, true);
                    echo " </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 450
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 451
            echo "                                       </div>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "
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
        return array (  825 => 456,  815 => 451,  809 => 450,  801 => 445,  795 => 444,  791 => 443,  786 => 440,  783 => 439,  779 => 438,  772 => 433,  765 => 427,  759 => 426,  751 => 420,  731 => 406,  727 => 405,  723 => 404,  715 => 400,  711 => 399,  705 => 396,  701 => 395,  696 => 392,  693 => 391,  689 => 390,  682 => 385,  675 => 379,  669 => 378,  661 => 372,  641 => 358,  637 => 357,  633 => 356,  625 => 352,  621 => 351,  615 => 348,  611 => 347,  606 => 344,  603 => 343,  599 => 342,  592 => 337,  585 => 331,  579 => 330,  571 => 324,  551 => 310,  547 => 309,  543 => 308,  535 => 304,  531 => 303,  525 => 300,  521 => 299,  516 => 296,  513 => 295,  509 => 294,  502 => 289,  495 => 283,  489 => 282,  481 => 276,  461 => 262,  457 => 261,  453 => 260,  445 => 256,  441 => 255,  435 => 252,  431 => 251,  426 => 248,  423 => 247,  419 => 246,  412 => 241,  405 => 235,  399 => 234,  391 => 228,  371 => 214,  367 => 213,  363 => 212,  355 => 208,  351 => 207,  345 => 204,  341 => 203,  336 => 200,  333 => 199,  329 => 198,  322 => 193,  315 => 187,  309 => 186,  301 => 180,  281 => 166,  277 => 165,  273 => 164,  265 => 160,  261 => 159,  255 => 156,  251 => 155,  246 => 152,  243 => 151,  239 => 150,  232 => 145,  227 => 144,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

                h3, h2,a,span{color: white;

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

    <!--? Hero Start -->->
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
                            {% for planning in user.getPlannings() %}
                            <div class=\"tab-pane fade\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            {% for planning in user.getPlannings() %}
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
                                            {% for planning in user.getPlannings() %}
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
                                            {% for planning in user.getPlannings() %}
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
                                            {% for planning in user.getPlannings() %}
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

                            {# Vendredi #}
                            <div class=\"tab-pane fade\" id=\"nav-nav-Sport\" role=\"tabpanel\" aria-labelledby=\"nav-last-tab\">       
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"tab-wrapper\">
                                            <!-- single -->
                                            {% for planning in user.getPlannings() %}
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
                                            {% for planning in user.getPlannings() %}
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
                                            {% for planning in user.getPlannings() %}
                                                {% if planning.jourPlanning == \"Dimanche\" %}
                                                    <div class=\"single-box\">
                                                        <div class=\"single-caption text-center\">
                                                            <div class=\"caption\">
                                                                <span>{{planning.heurePlanning}}:00</span>
                                                                <h3><a href=\"{{ path('app_cours_crud_show_front', {'id': planning.cours}) }}\">{{planning.cours.nomCours}}</a></h3>
                                                                <p><span>par</span> Coach {{planning.cours.nomCoach}} </p>
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
        </section>
{% endblock %}", "planning_crud/view.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\planning_crud\\view.html.twig");
    }
}
