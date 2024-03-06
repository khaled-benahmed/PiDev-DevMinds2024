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

/* planning_crud/show.html.twig */
class __TwigTemplate_51db24169982f48794372c49ad022120 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "planning_crud/show.html.twig", 1);
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

        echo "NutriFit | Planning | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 3, $this->source); })()), "jourPlanning", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <table class=\"table\">
        <tbody>
        <tr>
            <td><strong>Titre</strong></td>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong>Jour</strong></td>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 16, $this->source); })()), "jourPlanning", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong>Date</strong></td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 20, $this->source); })()), "datePlanning", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <!-- Mise à jour du nom de la propriété en fonction de votre entité Planning -->
            <td><strong>Heure Début</strong></td>
            <!-- Utilisation du filtre 'date' pour formater l'heure -->
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 26, $this->source); })()), "startTime", [], "any", false, false, false, 26), "H:i"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <!-- Mise à jour du nom de la propriété en fonction de votre entité Planning -->
            <td><strong>Heure fin</strong></td>
            <!-- Utilisation du filtre 'date' pour formater l'heure -->
            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 32, $this->source); })()), "endTime", [], "any", false, false, false, 32), "H:i"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong>Statut</strong></td>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
    <div align=\"center\" class=\"card-footer\">
        <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><a style=\"color:#fff;\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_index");
        echo "\">Retour à la Liste</a></button>
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
        return "planning_crud/show.html.twig";
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
        return array (  143 => 41,  135 => 36,  128 => 32,  119 => 26,  110 => 20,  103 => 16,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}NutriFit | Planning | {{planning.jourPlanning}}{% endblock %}


{% block body %}

    <table class=\"table\">
        <tbody>
        <tr>
            <td><strong>Titre</strong></td>
            <td>{{ planning.titre }}</td>
        </tr>
        <tr>
            <td><strong>Jour</strong></td>
            <td>{{ planning.jourPlanning }}</td>
        </tr>
        <tr>
            <td><strong>Date</strong></td>
            <td>{{ planning.datePlanning|date('Y-m-d') }}</td>
        </tr>
        <tr>
            <!-- Mise à jour du nom de la propriété en fonction de votre entité Planning -->
            <td><strong>Heure Début</strong></td>
            <!-- Utilisation du filtre 'date' pour formater l'heure -->
            <td>{{ planning.startTime|date('H:i') }}</td>
        </tr>
        <tr>
            <!-- Mise à jour du nom de la propriété en fonction de votre entité Planning -->
            <td><strong>Heure fin</strong></td>
            <!-- Utilisation du filtre 'date' pour formater l'heure -->
            <td>{{ planning.endTime|date('H:i') }}</td>
        </tr>
        <tr>
            <td><strong>Statut</strong></td>
            <td>{{ planning.status }}</td>
        </tr>
        </tbody>
    </table>
    <div align=\"center\" class=\"card-footer\">
        <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><a style=\"color:#fff;\" href=\"{{ path('app_planning_crud_index') }}\">Retour à la Liste</a></button>
    </div>

{% endblock %}



", "planning_crud/show.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\planning_crud\\show.html.twig");
    }
}
