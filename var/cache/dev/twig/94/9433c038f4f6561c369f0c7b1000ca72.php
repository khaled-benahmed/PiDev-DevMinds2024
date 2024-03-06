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

/* sponsor_back/index.html.twig */
class __TwigTemplate_048a10a393e6b1b14e8a383cd660a254 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "sponsor_back/index.html.twig", 1);
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

        echo "Sponsor index";
        
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
        echo "    <h1>Sponsor index</h1>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <form class=\"d-flex\">
                <input type=\"text\" id=\"searchInput\" class=\"form-control me-2\" placeholder=\"Search...\"> <!-- affichina el input ta3 el recherche houni  -->
            </form>
        </div>
    </div>

    <table class=\"table\" id=\"sponsorTable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>NomSponsor</th>
                <th>Donnation</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "nomSponsor", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "donnation", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "image", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_back_new");
        echo "\">Create new</a>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        // Your code here
        \$('#searchInput').on('input', function() {
            // Get the search string
            var searchString = \$(this).val();
            console.log(searchString)
            
            // Send AJAX request with the search string
            \$.ajax({
                type: 'GET',
                url: '";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_back_index");
        echo "',
                data: { search: searchString }, // Include the search string in the data
                success: function(response) {
                    // Update table content with filtered/sorted data
                    updateTable(response.sponsors);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
// Function to update table content
function updateTable(sponsors) {
    var tableBody = \$('#sponsorTable tbody');
    tableBody.empty(); // Clear existing table rows

    // Add new rows based on filtered/sorted sponsors
    sponsors.forEach(function(sponsor) {
        var row = '<tr>' +
            '<td>' + sponsor.id + '</td>' +
            '<td>' + sponsor.nomSponsor + '</td>' +
            '<td>' + sponsor.donnation + '</td>' +
            '<td>' + sponsor.image + '</td>' +
            '<td>' +
            '<a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_back_show", ["id" => "SPONSOR_ID"]);
        echo "\" >show</a>' +
            ' '+
            '<a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_back_edit", ["id" => "SPONSOR_ID"]);
        echo "\" >edit</a>' +
            '</td>' +
            '</tr>';

        // Replace placeholder 'SPONSOR_ID' with actual reclamation ID
        row = row.replace(/SPONSOR_ID/g, sponsor.id);

        tableBody.append(row);
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
        return "sponsor_back/index.html.twig";
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
        return array (  211 => 85,  206 => 83,  178 => 58,  162 => 45,  157 => 42,  148 => 38,  139 => 34,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Sponsor index{% endblock %}

{% block body %}
    <h1>Sponsor index</h1>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <form class=\"d-flex\">
                <input type=\"text\" id=\"searchInput\" class=\"form-control me-2\" placeholder=\"Search...\"> <!-- affichina el input ta3 el recherche houni  -->
            </form>
        </div>
    </div>

    <table class=\"table\" id=\"sponsorTable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>NomSponsor</th>
                <th>Donnation</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for sponsor in sponsors %}
            <tr>
                <td>{{ sponsor.id }}</td>
                <td>{{ sponsor.nomSponsor }}</td>
                <td>{{ sponsor.donnation }}</td>
                <td>{{ sponsor.image }}</td>
                <td>
                    <a href=\"{{ path('app_sponsor_back_show', {'id': sponsor.id}) }}\">show</a>
                    <a href=\"{{ path('app_sponsor_back_edit', {'id': sponsor.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_sponsor_back_new') }}\">Create new</a>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        // Your code here
        \$('#searchInput').on('input', function() {
            // Get the search string
            var searchString = \$(this).val();
            console.log(searchString)
            
            // Send AJAX request with the search string
            \$.ajax({
                type: 'GET',
                url: '{{ path('app_sponsor_back_index') }}',
                data: { search: searchString }, // Include the search string in the data
                success: function(response) {
                    // Update table content with filtered/sorted data
                    updateTable(response.sponsors);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
// Function to update table content
function updateTable(sponsors) {
    var tableBody = \$('#sponsorTable tbody');
    tableBody.empty(); // Clear existing table rows

    // Add new rows based on filtered/sorted sponsors
    sponsors.forEach(function(sponsor) {
        var row = '<tr>' +
            '<td>' + sponsor.id + '</td>' +
            '<td>' + sponsor.nomSponsor + '</td>' +
            '<td>' + sponsor.donnation + '</td>' +
            '<td>' + sponsor.image + '</td>' +
            '<td>' +
            '<a href=\"{{ path('app_sponsor_back_show', {'id': 'SPONSOR_ID'}) }}\" >show</a>' +
            ' '+
            '<a href=\"{{ path('app_sponsor_back_edit', {'id': 'SPONSOR_ID'}) }}\" >edit</a>' +
            '</td>' +
            '</tr>';

        // Replace placeholder 'SPONSOR_ID' with actual reclamation ID
        row = row.replace(/SPONSOR_ID/g, sponsor.id);

        tableBody.append(row);
    });
}

</script>
{% endblock %}
", "sponsor_back/index.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\sponsor_back\\index.html.twig");
    }
}
