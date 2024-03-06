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

/* planning_crud/index.html.twig */
class __TwigTemplate_4b1719ca5565fca0f996687310c62c1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "planning_crud/index.html.twig", 1);
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

        echo "NutriFit | Planning ";
        
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
        echo "
        <div class=\"map-data m-b-40\">
            <h3 class=\"title-3 m-b-30\">
                <i class=\"fas fa-table\"></i>Gestion Plannings</h3>

            <div class=\"table-responsive m-b-40\">
                <div class=\"table-data__tool\">
                    <div class=\"table-data__tool-left\">
                        <div class=\"rs-select2--light rs-select2--md\">
                            <select class=\"js-select2\" name=\"property\">
                                <option selected=\"selected\">Trier Par</option>
                                <option value=\"\">Date</option>
                                <option value=\"\">Jour</option>
                                <option value=\"\">Heure Début</option>
                            </select>
                            <div class=\"dropDownSelect2\"></div>
                        </div>
                        <button class=\"au-btn-filter\"><i class=\"zmdi zmdi-filter-list\"></i>filters</button>
                    </div>
                    <div class=\"table-data__tool-right\">
                        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_new");
        echo "\">
                            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                <i class=\"zmdi zmdi-plus\"></i>
                                Ajouter Planning
                            </button>
                            &nbsp;
                        </a>
                        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar");
        echo "\">
                            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                Planning Calendrier
                            </button>
                            &nbsp;
                        </a>
                    </div>
                </div>
            </div>

            <table class=\"table table-borderless table-data3\">
                <thead>
                <tr>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Titre</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Date</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Jour</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Heure Début</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Heure Fin</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Statut</strong></td>

                    <td></td>
                </tr>
                </thead>
                <tbody>
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 57, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 58
            echo "                    <tr>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "titre", [], "any", false, false, false, 59), "html", null, true);
            echo "</td> <!-- Ajout de la valeur de titre ici -->
                        <td>";
            // line 60
            ((twig_get_attribute($this->env, $this->source, $context["planning"], "datePlanning", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "datePlanning", [], "any", false, false, false, 60), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "jourPlanning", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td> <div style=\"margin-left:40px;\">";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "startTime", [], "any", false, false, false, 62), "H:i"), "html", null, true);
            echo "</div> </td>
                        <td> <div style=\"margin-left:40px;\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planning"], "endTime", [], "any", false, false, false, 63), "H:i"), "html", null, true);
            echo "</div> </td>                    <td>
                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">
                                <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Afficher\">
                                    <i class=\"zmdi zmdi-eye\"></i>
                                </button>
                            </a>
                            &nbsp;&nbsp;
                            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">
                                <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Modifier\">
                                    <i class=\"zmdi zmdi-edit\"></i>
                                </button>
                            </a>
                            ";
            // line 75
            echo twig_include($this->env, $context, "planning_crud/delete_form.html.twig");
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
            // line 79
            echo "                    <tr>
                        <td colspan=\"8\">Pas de Planning.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
            </table>
            <div class=\"card-footer\">
                <br>
                <div class=\"pagination\">
                    ";
        // line 88
        twig_get_attribute($this->env, $this->source, (isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 88, $this->source); })()), "setPageRange", [10], "method", false, false, false, 88);
        // line 89
        echo "                    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 89, $this->source); })()), "pagination.html.twig");
        echo "
                </div>
            </div>
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
        return "planning_crud/index.html.twig";
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
        return array (  240 => 89,  238 => 88,  231 => 83,  222 => 79,  205 => 75,  197 => 70,  188 => 64,  184 => 63,  180 => 62,  176 => 61,  172 => 60,  168 => 59,  165 => 58,  147 => 57,  120 => 33,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

    {% block title %}NutriFit | Planning {% endblock %}

    {% block body %}

        <div class=\"map-data m-b-40\">
            <h3 class=\"title-3 m-b-30\">
                <i class=\"fas fa-table\"></i>Gestion Plannings</h3>

            <div class=\"table-responsive m-b-40\">
                <div class=\"table-data__tool\">
                    <div class=\"table-data__tool-left\">
                        <div class=\"rs-select2--light rs-select2--md\">
                            <select class=\"js-select2\" name=\"property\">
                                <option selected=\"selected\">Trier Par</option>
                                <option value=\"\">Date</option>
                                <option value=\"\">Jour</option>
                                <option value=\"\">Heure Début</option>
                            </select>
                            <div class=\"dropDownSelect2\"></div>
                        </div>
                        <button class=\"au-btn-filter\"><i class=\"zmdi zmdi-filter-list\"></i>filters</button>
                    </div>
                    <div class=\"table-data__tool-right\">
                        <a href=\"{{ path('app_planning_crud_new') }}\">
                            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                <i class=\"zmdi zmdi-plus\"></i>
                                Ajouter Planning
                            </button>
                            &nbsp;
                        </a>
                        <a href=\"{{ path('app_calendar') }}\">
                            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                Planning Calendrier
                            </button>
                            &nbsp;
                        </a>
                    </div>
                </div>
            </div>

            <table class=\"table table-borderless table-data3\">
                <thead>
                <tr>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Titre</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Date</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Jour</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Heure Début</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Heure Fin</strong></td>
                    <td style=\"color: white;\"><strong style=\"margin-left:30px\">Statut</strong></td>

                    <td></td>
                </tr>
                </thead>
                <tbody>
                {% for planning in plannings %}
                    <tr>
                        <td>{{ planning.titre }}</td> <!-- Ajout de la valeur de titre ici -->
                        <td>{{ planning.datePlanning ? planning.datePlanning|date('Y-m-d') : '' }}</td>
                        <td>{{ planning.jourPlanning }}</td>
                        <td> <div style=\"margin-left:40px;\">{{ planning.startTime|date('H:i') }}</div> </td>
                        <td> <div style=\"margin-left:40px;\">{{ planning.endTime|date('H:i') }}</div> </td>                    <td>
                            <a href=\"{{ path('app_planning_crud_show', {'id': planning.id}) }}\">
                                <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Afficher\">
                                    <i class=\"zmdi zmdi-eye\"></i>
                                </button>
                            </a>
                            &nbsp;&nbsp;
                            <a href=\"{{ path('app_planning_crud_edit', {'id': planning.id}) }}\">
                                <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Modifier\">
                                    <i class=\"zmdi zmdi-edit\"></i>
                                </button>
                            </a>
                            {{ include('planning_crud/delete_form.html.twig') }}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\">Pas de Planning.</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <div class=\"card-footer\">
                <br>
                <div class=\"pagination\">
                    {% do plannings.setPageRange(10) %}
                    {{knp_pagination_render(plannings, 'pagination.html.twig')}}
                </div>
            </div>
        </div>
        </div>

    {% endblock %}

", "planning_crud/index.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\planning_crud\\index.html.twig");
    }
}
