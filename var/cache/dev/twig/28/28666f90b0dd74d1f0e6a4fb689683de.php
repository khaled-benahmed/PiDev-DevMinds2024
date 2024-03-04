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

/* Abonnement/ReadAbonnement.html.twig */
class __TwigTemplate_246b478574708fcb8da159c8f04f9aa0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Abonnement/ReadAbonnement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Abonnement/ReadAbonnement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Abonnement/ReadAbonnement.html.twig", 1);
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

        // line 4
        echo "    Reclamation Details
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"reclamation-details\">
                    <h1>Abonnements Details</h1>

                    <table class=\"table\">
                        <tbody>
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Abonnements"]) || array_key_exists("Abonnements", $context) ? $context["Abonnements"] : (function () { throw new RuntimeError('Variable "Abonnements" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 17
            echo "                            <tr style=\"text-align: center; vertical-align: middle;\">
                                <td>
                                    ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getId", [], "method", false, false, false, 19), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getNomA", [], "method", false, false, false, 22), "html", null, true);
            echo "
                                </td>

                                <td>
                                    ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["a"], "getDescriptionA", [], "method", false, false, false, 26);
            echo "
                                </td>
                                <td>
                                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getPrixA", [], "method", false, false, false, 29), "html", null, true);
            echo " TND
                                </td>
                                <td>
                                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getDateDebutA", [], "method", false, false, false, 32), "d/m/Y"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getDateFinA", [], "method", false, false, false, 35), "d/m/Y"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "categorieAbonnements", [], "any", false, false, false, 38), "getNomCategorie", [], "method", false, false, false, 38), "html", null, true);
            echo "
                                </td>


                                <td>
                                    <div style=\"text-align: center;\">
                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pay_Abonnement", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-danger mt-2\" type=\"submit\" onclick=\"return confirm('Etes vous sure ?')\">Acheter</a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "                            <tr>
                                <td colspan=\"4\" style=\"text-align: center;\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </tbody>
                    </table>

                    <div class=\"navigation\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"delete-form\">
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Abonnement/ReadAbonnement.html.twig";
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
        return array (  174 => 53,  165 => 49,  155 => 44,  146 => 38,  140 => 35,  134 => 32,  128 => 29,  122 => 26,  115 => 22,  109 => 19,  105 => 17,  100 => 16,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Reclamation Details
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"reclamation-details\">
                    <h1>Abonnements Details</h1>

                    <table class=\"table\">
                        <tbody>
                        {% for a in Abonnements %}
                            <tr style=\"text-align: center; vertical-align: middle;\">
                                <td>
                                    {{a.getId()}}
                                </td>
                                <td>
                                    {{a.getNomA()}}
                                </td>

                                <td>
                                    {{a.getDescriptionA()|raw}}
                                </td>
                                <td>
                                    {{a.getPrixA()}} TND
                                </td>
                                <td>
                                    {{a.getDateDebutA()|date(\"d/m/Y\")}}
                                </td>
                                <td>
                                    {{a.getDateFinA()|date(\"d/m/Y\")}}
                                </td>
                                <td>
                                    {{a.categorieAbonnements.getNomCategorie()}}
                                </td>


                                <td>
                                    <div style=\"text-align: center;\">
                                        <a href=\"{{path('pay_Abonnement',{'id':a.id})}}\" class=\"btn btn-danger mt-2\" type=\"submit\" onclick=\"return confirm('Etes vous sure ?')\">Acheter</a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\" style=\"text-align: center;\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                    <div class=\"navigation\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"delete-form\">
        </div>
    </div>
{% endblock %}", "Abonnement/ReadAbonnement.html.twig", "C:\\xampp\\htdocs\\PiDev-DevMinds2024\\templates\\abonnement\\ReadAbonnement.html.twig");
    }
}
