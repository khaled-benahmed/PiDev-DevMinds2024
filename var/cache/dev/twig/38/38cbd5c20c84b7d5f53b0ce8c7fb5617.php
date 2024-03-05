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

/* admin/statistics.html.twig */
class __TwigTemplate_049977e0b92581b0ab5830b43a8475d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "admin/statistics.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <canvas id=\"verificationChart\" width=\"300\" height=\"200\"></canvas>
    <canvas id=\"roleChart\" width=\"300\" height=\"200\"></canvas>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Récupérer les données des statistiques de vérification
            let verificationLabels = [];
            let verificationData = [];
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verificationStatistics"]) || array_key_exists("verificationStatistics", $context) ? $context["verificationStatistics"] : (function () { throw new RuntimeError('Variable "verificationStatistics" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 14
            echo "                verificationLabels.push(\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["stat"], "isVerified", [], "any", false, false, false, 14)) ? ("Vérifié") : ("Non vérifié"));
            echo "\");
                verificationData.push(\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 15), "html", null, true);
            echo "\");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
            // Créer un tableau de données pour le graphique de vérification
            let verificationChartData = {
                labels: verificationLabels,
                datasets: [{
                    label: 'Nombre d\\'utilisateurs ',
                    data: verificationData,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)', // Couleur de barre plus foncée
                    borderColor: 'rgba(255, 99, 132, 1)', // Bordure de barre plus foncée
                    borderWidth: 1
                }]
            };

            // Créer le contexte du graphique de vérification
            let verificationCtx = document.getElementById('verificationChart').getContext('2d');

            // Créer le graphique de vérification
            let verificationChart = new Chart(verificationCtx, {
                type: 'bar',
                data: verificationChartData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1 // Ajuster l'échelle du graphique
                            }
                        }
                    }
                }
            });

            // Récupérer les données des statistiques de rôles
            let roleLabels = [];
            let roleData = [];
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roleStatistics"]) || array_key_exists("roleStatistics", $context) ? $context["roleStatistics"] : (function () { throw new RuntimeError('Variable "roleStatistics" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 53
            echo "                roleLabels.push(\"";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["stat"], "roles", [], "any", false, false, false, 53), ", "), "html", null, true);
            echo "\");
                roleData.push(\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 54), "html", null, true);
            echo "\");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
            // Créer un tableau de données pour le graphique des rôles
            let roleChartData = {
                labels: roleLabels,
                datasets: [{
                    label: 'Nombre d\\'utilisateurs par rôle',
                    data: roleData,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Couleur de barre plus foncée
                    borderColor: 'rgba(54, 162, 235, 1)', // Bordure de barre plus foncée
                    borderWidth: 1
                }]
            };

            // Créer le contexte du graphique des rôles
            let roleCtx = document.getElementById('roleChart').getContext('2d');

            // Créer le graphique des rôles
            let roleChart = new Chart(roleCtx, {
                type: 'bar',
                data: roleChartData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1 // Ajuster l'échelle du graphique
                            }
                        }
                    }
                }
            });
        });
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
        return "admin/statistics.html.twig";
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
        return array (  150 => 56,  142 => 54,  137 => 53,  133 => 52,  96 => 17,  88 => 15,  83 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseBack.html.twig\" %}

{% block body %}
    <canvas id=\"verificationChart\" width=\"300\" height=\"200\"></canvas>
    <canvas id=\"roleChart\" width=\"300\" height=\"200\"></canvas>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Récupérer les données des statistiques de vérification
            let verificationLabels = [];
            let verificationData = [];
            {% for stat in verificationStatistics %}
                verificationLabels.push(\"{{ stat.isVerified ? 'Vérifié' : 'Non vérifié' }}\");
                verificationData.push(\"{{ stat.count }}\");
            {% endfor %}

            // Créer un tableau de données pour le graphique de vérification
            let verificationChartData = {
                labels: verificationLabels,
                datasets: [{
                    label: 'Nombre d\\'utilisateurs ',
                    data: verificationData,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)', // Couleur de barre plus foncée
                    borderColor: 'rgba(255, 99, 132, 1)', // Bordure de barre plus foncée
                    borderWidth: 1
                }]
            };

            // Créer le contexte du graphique de vérification
            let verificationCtx = document.getElementById('verificationChart').getContext('2d');

            // Créer le graphique de vérification
            let verificationChart = new Chart(verificationCtx, {
                type: 'bar',
                data: verificationChartData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1 // Ajuster l'échelle du graphique
                            }
                        }
                    }
                }
            });

            // Récupérer les données des statistiques de rôles
            let roleLabels = [];
            let roleData = [];
            {% for stat in roleStatistics %}
                roleLabels.push(\"{{ stat.roles|join(', ') }}\");
                roleData.push(\"{{ stat.count }}\");
            {% endfor %}

            // Créer un tableau de données pour le graphique des rôles
            let roleChartData = {
                labels: roleLabels,
                datasets: [{
                    label: 'Nombre d\\'utilisateurs par rôle',
                    data: roleData,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Couleur de barre plus foncée
                    borderColor: 'rgba(54, 162, 235, 1)', // Bordure de barre plus foncée
                    borderWidth: 1
                }]
            };

            // Créer le contexte du graphique des rôles
            let roleCtx = document.getElementById('roleChart').getContext('2d');

            // Créer le graphique des rôles
            let roleChart = new Chart(roleCtx, {
                type: 'bar',
                data: roleChartData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1 // Ajuster l'échelle du graphique
                            }
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}
", "admin/statistics.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\admin\\statistics.html.twig");
    }
}
