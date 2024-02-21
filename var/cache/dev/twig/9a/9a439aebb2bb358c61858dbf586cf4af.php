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

/* pagination.html.twig */
class __TwigTemplate_b9de641e9e6ceaae777e9a65c510a793 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "    <nav>
        ";
            // line 3
            $context["classAlign"] = (( !array_key_exists("align", $context)) ? ("") : (((((isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 3, $this->source); })()) == "center")) ? (" justify-content-center") : (((((isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 3, $this->source); })()) == "right")) ? (" justify-content-end") : (""))))));
            // line 4
            echo "        ";
            $context["classSize"] = (( !array_key_exists("size", $context)) ? ("") : (((((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 4, $this->source); })()) == "large")) ? (" pagination-lg") : (((((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 4, $this->source); })()) == "small")) ? (" pagination-sm") : (""))))));
            // line 5
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, (isset($context["classAlign"]) || array_key_exists("classAlign", $context) ? $context["classAlign"] : (function () { throw new RuntimeError('Variable "classAlign" does not exist.', 5, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["classSize"]) || array_key_exists("classSize", $context) ? $context["classSize"] : (function () { throw new RuntimeError('Variable "classSize" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\">

            ";
            // line 7
            if (array_key_exists("previous", $context)) {
                // line 8
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 9, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 9, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 9, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 9, $this->source); })())])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 12
                echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 17, $this->source); })()) > 1)) {
                // line 18
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 19, $this->source); })()) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 21
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 21, $this->source); })()) == 3)) {
                    // line 22
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 23, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 23, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 23, $this->source); })()) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 25
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 25, $this->source); })()) != 2)) {
                    // line 26
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                }
                // line 30
                echo "            ";
            }
            // line 31
            echo "
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 33, $this->source); })()))) {
                    // line 34
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 35, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 35, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 35, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 38
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 39
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 42
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
            ";
            // line 45
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 45, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 45, $this->source); })()))) {
                // line 46
                echo "                ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 46, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 46, $this->source); })()) + 1))) {
                    // line 47
                    echo "                    ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 47, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 47, $this->source); })()) + 2))) {
                        // line 48
                        echo "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 52
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 53, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 53, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 53, $this->source); })()) => ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 53, $this->source); })()) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 53, $this->source); })()) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 56
                    echo "                ";
                }
                // line 57
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 58, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 58, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 58, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 58, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 61
            echo "
            ";
            // line 62
            if (array_key_exists("next", $context)) {
                // line 63
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 64, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 64, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 64, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 64, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 67
                echo "                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 71
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pagination.html.twig";
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
        return array (  220 => 71,  214 => 68,  211 => 67,  203 => 64,  200 => 63,  198 => 62,  195 => 61,  187 => 58,  184 => 57,  181 => 56,  173 => 53,  170 => 52,  164 => 48,  161 => 47,  158 => 46,  156 => 45,  153 => 44,  146 => 42,  140 => 39,  137 => 38,  129 => 35,  126 => 34,  123 => 33,  119 => 32,  116 => 31,  113 => 30,  107 => 26,  105 => 25,  100 => 23,  97 => 22,  95 => 21,  90 => 19,  87 => 18,  85 => 17,  82 => 16,  76 => 13,  73 => 12,  65 => 9,  62 => 8,  60 => 7,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageCount > 1 %}
    <nav>
        {% set classAlign = (align is not defined) ? '' : align=='center' ? ' justify-content-center' : (align=='right' ? ' justify-content-end' : '') %}
        {% set classSize = (size is not defined) ? '' : size=='large' ? ' pagination-lg' : (size=='small' ? ' pagination-sm' : '') %}
        <ul class=\"pagination{{ classAlign }}{{ classSize }}\">

            {% if previous is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</span>
                </li>
            {% endif %}

            {% if startPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
                </li>
                {% if startPage == 3 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
                    </li>
                {% elseif startPage != 2 %}
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                {% endif %}
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% else %}
                    <li class=\"page-item active\">
                        <span class=\"page-link\">{{ page }}</span>
                    </li>
                {% endif %}

            {% endfor %}

            {% if pageCount > endPage %}
                {% if pageCount > (endPage + 1) %}
                    {% if pageCount > (endPage + 2) %}
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    {% else %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>
                        </li>
                    {% endif %}
                {% endif %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
                </li>
            {% endif %}

            {% if next is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</a>
                </li>
            {% else %}
                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</span>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}", "pagination.html.twig", "C:\\Users\\Nour\\OneDrive\\Bureau\\PiDev-DevMinds2024-main (2)\\PiDev-DevMinds2024-main\\templates\\pagination.html.twig");
    }
}
