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

/* activite_crud/index.html.twig */
class __TwigTemplate_d258add4666b24420eb7c6e7da565145 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite_crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "activite_crud/index.html.twig", 1);
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"map-data m-b-40\">
        <h3 class=\"title-3 m-b-30\">
            <i class=\"fas fa-table\"></i>Gestion Activités</h3>

        <div class=\"table-responsive m-b-40\">
            <div class=\"table-data__tool\">
                <div class=\"table-data__tool-left\">
                    <div class=\"rs-select2--light rs-select2--md\">
                        <select class=\"js-select2\" name=\"property\">
                            <option selected=\"selected\">Trier Par</option>
                            <option value=\"\">Nom</option>
                            <option value=\"\">Durée</option>
                            <option value=\"\">Difficulté</option>
                        </select>
                        <div class=\"dropDownSelect2\"></div>
                    </div>
                    <button class=\"au-btn-filter\"><i class=\"zmdi zmdi-filter-list\"></i>filters</button>
                </div>
                <div class=\"table-data__tool-right\">
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_crud_new");
        echo "\">
                        <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                            <i class=\"zmdi zmdi-plus\"></i>
                            Ajouter Activité
                        </button>
                        &nbsp;
                    </a>
                </div>
            </div>
        </div>

        <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Rechercher Activité&hellip;\">
        <br>
        <table class=\"table table-borderless table-data3\">
            <thead>
            <tr>
                <td style=\"color: white;\"><strong style=\"margin-left:30px\">Nom</strong></td>
                <td style=\"color: white;\"><strong style=\"margin-left:27px\">Durée</strong></td>
                <td style=\"color: white;\"><strong style=\"margin-left:25px\">Difficulté</strong></td>
                <td style=\"color: white;\"></td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 49
            echo "                <tr>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dureeActivite", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "difficulteActivite", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Export\">
                                <i class=\"zmdi zmdi-collection-pdf\"></i>
                            </button>
                            &nbsp;
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Afficher\">
                                <i class=\"zmdi zmdi-eye\"></i>
                            </button>
                        </a>
                        &nbsp;&nbsp;
                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Modifier\">
                                <i class=\"zmdi zmdi-edit\"></i>
                            </button>
                        </a>
                        ";
            // line 72
            echo twig_include($this->env, $context, "activite_crud/delete_form.html.twig");
            echo "
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 76
            echo "                <tr>
                    <td colspan=\"8\">Pas d'activité.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </tbody>

        </table>
        <div class=\"card-footer\">
            <br>
            <div class=\"pagination\">
                ";
        // line 86
        twig_get_attribute($this->env, $this->source, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 86, $this->source); })()), "setPageRange", [10], "method", false, false, false, 86);
        // line 87
        echo "                ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 87, $this->source); })()), "pagination.html.twig");
        echo "
            </div>
        </div>
    </div>


    <script>
        function filterTable() {
            const filter = document.getElementById('searchInput').value.toUpperCase();
            const rows = document.querySelectorAll('table tr');
            for (let i = 1; i < rows.length; i++) {
                const cols = rows[i].querySelectorAll('td');
                let visible = false;
                for (let j = 0; j < cols.length; j++) {
                    const cell = cols[j];
                    if (cell.innerText.toUpperCase().indexOf(filter) > -1) {
                        visible = true;
                        break;
                    }
                }
                rows[i].style.display = visible ? '' : 'none';
            }
        }
        document.getElementById('searchInput').addEventListener('keyup', filterTable);
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
        return "activite_crud/index.html.twig";
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
        return array (  232 => 87,  230 => 86,  222 => 80,  213 => 76,  196 => 72,  188 => 67,  179 => 61,  169 => 54,  164 => 52,  160 => 51,  156 => 50,  153 => 49,  135 => 48,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}NutriFit | Activité{% endblock %}

{% block body %}
    <div class=\"map-data m-b-40\">
        <h3 class=\"title-3 m-b-30\">
            <i class=\"fas fa-table\"></i>Gestion Activités</h3>

        <div class=\"table-responsive m-b-40\">
            <div class=\"table-data__tool\">
                <div class=\"table-data__tool-left\">
                    <div class=\"rs-select2--light rs-select2--md\">
                        <select class=\"js-select2\" name=\"property\">
                            <option selected=\"selected\">Trier Par</option>
                            <option value=\"\">Nom</option>
                            <option value=\"\">Durée</option>
                            <option value=\"\">Difficulté</option>
                        </select>
                        <div class=\"dropDownSelect2\"></div>
                    </div>
                    <button class=\"au-btn-filter\"><i class=\"zmdi zmdi-filter-list\"></i>filters</button>
                </div>
                <div class=\"table-data__tool-right\">
                    <a href=\"{{ path('app_activite_crud_new') }}\">
                        <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                            <i class=\"zmdi zmdi-plus\"></i>
                            Ajouter Activité
                        </button>
                        &nbsp;
                    </a>
                </div>
            </div>
        </div>

        <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Rechercher Activité&hellip;\">
        <br>
        <table class=\"table table-borderless table-data3\">
            <thead>
            <tr>
                <td style=\"color: white;\"><strong style=\"margin-left:30px\">Nom</strong></td>
                <td style=\"color: white;\"><strong style=\"margin-left:27px\">Durée</strong></td>
                <td style=\"color: white;\"><strong style=\"margin-left:25px\">Difficulté</strong></td>
                <td style=\"color: white;\"></td>
            </tr>
            </thead>
            <tbody>
            {% for activite in activites %}
                <tr>
                    <td>{{ activite.nomActivite }}</td>
                    <td>{{ activite.dureeActivite }}</td>
                    <td>{{ activite.difficulteActivite }}</td>
                    <td>
                        <a href=\"{{ path('app_activite_pdf', {'id': activite.id}) }}\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Export\">
                                <i class=\"zmdi zmdi-collection-pdf\"></i>
                            </button>
                            &nbsp;
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"{{ path('app_activite_crud_show', {'id': activite.id}) }}\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Afficher\">
                                <i class=\"zmdi zmdi-eye\"></i>
                            </button>
                        </a>
                        &nbsp;&nbsp;
                        <a href=\"{{ path('app_activite_crud_edit', {'id': activite.id}) }}\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Modifier\">
                                <i class=\"zmdi zmdi-edit\"></i>
                            </button>
                        </a>
                        {{ include('activite_crud/delete_form.html.twig') }}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">Pas d'activité.</td>
                </tr>
            {% endfor %}
            </tbody>

        </table>
        <div class=\"card-footer\">
            <br>
            <div class=\"pagination\">
                {% do activites.setPageRange(10) %}
                {{knp_pagination_render(activites, 'pagination.html.twig')}}
            </div>
        </div>
    </div>


    <script>
        function filterTable() {
            const filter = document.getElementById('searchInput').value.toUpperCase();
            const rows = document.querySelectorAll('table tr');
            for (let i = 1; i < rows.length; i++) {
                const cols = rows[i].querySelectorAll('td');
                let visible = false;
                for (let j = 0; j < cols.length; j++) {
                    const cell = cols[j];
                    if (cell.innerText.toUpperCase().indexOf(filter) > -1) {
                        visible = true;
                        break;
                    }
                }
                rows[i].style.display = visible ? '' : 'none';
            }
        }
        document.getElementById('searchInput').addEventListener('keyup', filterTable);
    </script>


{% endblock %}
", "activite_crud/index.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024\\templates\\activite_crud\\index.html.twig");
    }
}
