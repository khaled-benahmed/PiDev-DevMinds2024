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

/* offres_back/index.html.twig */
class __TwigTemplate_7bf9e15494c039132d4101563703408c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offres_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offres_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "offres_back/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offres index";
        
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
        echo "    <h1>Offres index</h1>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres_pdf");
        echo "\" class=\"btn btn-success\">Pdf</a>
        </div>
    </div>
    <br><br>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Tags</th>
                <th>Prix</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "tags", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offres_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offres_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>


    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offres_back_new");
        echo "\">Create new</a>
    <br><br><br><br><br>
    
    <div class=\"container\">
        <div class=\"offre-index\" style=\"width: 1000px;\">
            <canvas id=\"offreChart\" width=\"200\" height=\"50\"></canvas>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {

        var countGreaterThan1000 = ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["countGreaterThan1000"]) || array_key_exists("countGreaterThan1000", $context) ? $context["countGreaterThan1000"] : (function () { throw new RuntimeError('Variable "countGreaterThan1000" does not exist.', 57, $this->source); })()), "html", null, true);
        echo ";
        var countLessThanOrEqual1000 = ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["countLessThanOrEqual1000"]) || array_key_exists("countLessThanOrEqual1000", $context) ? $context["countLessThanOrEqual1000"] : (function () { throw new RuntimeError('Variable "countLessThanOrEqual1000" does not exist.', 58, $this->source); })()), "html", null, true);
        echo ";
        renderChart(countGreaterThan1000,countLessThanOrEqual1000);
    });

    function renderChart(countGreaterThan1000,countLessThanOrEqual1000) {
    var ctx = document.getElementById('offreChart').getContext('2d');
    var colors = ['#ff6384', '#36a2eb']; // Define colors for each segment

    var chartData = {
        labels: ['Price > 1000', 'Price <= 1000'], // Labels for each segment
        datasets: [{
            data: [countGreaterThan1000, countLessThanOrEqual1000],
            backgroundColor: colors,
            borderWidth: 1
        }]
    };

    var myChart = new Chart(ctx, {
        type: 'pie',
        data: chartData,
        options: {
            responsive: true,
            legend: {
                position: 'right'
            }
        }
    });
}

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
        return "offres_back/index.html.twig";
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
        return array (  183 => 58,  179 => 57,  164 => 45,  158 => 41,  149 => 37,  140 => 33,  136 => 32,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  116 => 26,  111 => 25,  93 => 10,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}


{% block title %}Offres index{% endblock %}

{% block body %}
    <h1>Offres index</h1>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <a href=\"{{ path('offres_pdf') }}\" class=\"btn btn-success\">Pdf</a>
        </div>
    </div>
    <br><br>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Tags</th>
                <th>Prix</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for offre in offres %}
            <tr>
                <td>{{ offre.id }}</td>
                <td>{{ offre.description }}</td>
                <td>{{ offre.tags }}</td>
                <td>{{ offre.prix }}</td>
                <td>
                    <a href=\"{{ path('app_offres_back_show', {'id': offre.id}) }}\">show</a>
                    <a href=\"{{ path('app_offres_back_edit', {'id': offre.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


    <a href=\"{{ path('app_offres_back_new') }}\">Create new</a>
    <br><br><br><br><br>
    
    <div class=\"container\">
        <div class=\"offre-index\" style=\"width: 1000px;\">
            <canvas id=\"offreChart\" width=\"200\" height=\"50\"></canvas>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {

        var countGreaterThan1000 = {{ countGreaterThan1000 }};
        var countLessThanOrEqual1000 = {{ countLessThanOrEqual1000 }};
        renderChart(countGreaterThan1000,countLessThanOrEqual1000);
    });

    function renderChart(countGreaterThan1000,countLessThanOrEqual1000) {
    var ctx = document.getElementById('offreChart').getContext('2d');
    var colors = ['#ff6384', '#36a2eb']; // Define colors for each segment

    var chartData = {
        labels: ['Price > 1000', 'Price <= 1000'], // Labels for each segment
        datasets: [{
            data: [countGreaterThan1000, countLessThanOrEqual1000],
            backgroundColor: colors,
            borderWidth: 1
        }]
    };

    var myChart = new Chart(ctx, {
        type: 'pie',
        data: chartData,
        options: {
            responsive: true,
            legend: {
                position: 'right'
            }
        }
    });
}

</script>
{% endblock %}
", "offres_back/index.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\offres_back\\index.html.twig");
    }
}
