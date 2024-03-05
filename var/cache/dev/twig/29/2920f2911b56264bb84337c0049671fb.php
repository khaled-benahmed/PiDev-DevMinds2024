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

/* activite_crud/view.html.twig */
class __TwigTemplate_49af5f07d8e8cf63194009e3331f554e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite_crud/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite_crud/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite_crud/view.html.twig", 1);
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

        echo "NutriFit | Activité";
        
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
        echo "
    <head><style>body{
                /* Created with https://www.css-gradient.com */
                background: #161616;
            }
            h1{
                color:#fff;
            }
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

            }</style></head>
    <!--? Hero Start -->
    <div class=\"slider-area2\">
        <div class=\"slider-height2 d-flex align-items-center\">
            <div class=\"col-xl-12\">
                <div class=\"hero-cap hero-cap2 pt-70 text-center\">
                    <h2>Activités</h2>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8\">
                <div class=\"section-tittle text-center mb-100\">
                    <span>Notre Activités</span>
                    <h2>Séléctionnez l'activité pour plus de données</h2>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 127
            echo "                    <div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\"><div class=\"card text-dark card-has-bg click-col\" style=\"background-image:url(";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["activite"], "imageActivite", [], "any", false, false, false, 127)), "html", null, true);
            echo ");\">
                        <img class=\"card-img d-none\" src=\"https://source.unsplash.com/600x900/?tech,street\" alt=\"Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?\">
                        <div class=\"card-img-overlay d-flex flex-column\">
                            <div class=\"card-body\">
                                <small class=\"card-meta mb-2\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 131), "html", null, true);
            echo "</small>
                                <h4 class=\"card-title mt-0 \"><a class=\"text-dark\" href=\"https://creativemanner.com\">";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descriptionActivite", [], "any", false, false, false, 132), "html", null, true);
            echo "</a></h4>
                                <small><i class=\"far fa-clock\"></i> ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 133), "html", null, true);
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
        // line 147
        echo "            </div>
           </div >
        <br><br><br><br><br>
        <div class=\"pagination\">
            ";
        // line 151
        twig_get_attribute($this->env, $this->source, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 151, $this->source); })()), "setPageRange", [6], "method", false, false, false, 151);
        // line 152
        echo "            ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 152, $this->source); })()), "pagination.html.twig");
        echo "
            <br><br><br><br><br>
        </div>

    </div>

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
        return "activite_crud/view.html.twig";
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
        return array (  258 => 152,  256 => 151,  250 => 147,  230 => 133,  226 => 132,  222 => 131,  214 => 127,  210 => 126,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}NutriFit | Activité{% endblock %}

{% block tache %}

    <head><style>body{
                /* Created with https://www.css-gradient.com */
                background: #161616;
            }
            h1{
                color:#fff;
            }
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

            }</style></head>
    <!--? Hero Start -->
    <div class=\"slider-area2\">
        <div class=\"slider-height2 d-flex align-items-center\">
            <div class=\"col-xl-12\">
                <div class=\"hero-cap hero-cap2 pt-70 text-center\">
                    <h2>Activités</h2>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8\">
                <div class=\"section-tittle text-center mb-100\">
                    <span>Notre Activités</span>
                    <h2>Séléctionnez l'activité pour plus de données</h2>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                {% for activite in activites %}
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
           </div >
        <br><br><br><br><br>
        <div class=\"pagination\">
            {% do activites.setPageRange(6) %}
            {{knp_pagination_render(activites, 'pagination.html.twig')}}
            <br><br><br><br><br>
        </div>

    </div>

    </body>
{% endblock %}
", "activite_crud/view.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\activite_crud\\view.html.twig");
    }
}
