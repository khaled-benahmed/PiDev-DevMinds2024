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

/* abonnement/ReadAbonnementBack.html.twig */
class __TwigTemplate_4c8ef9d7b9be426ab1ae5bf12ff499a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/ReadAbonnementBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/ReadAbonnementBack.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "abonnement/ReadAbonnementBack.html.twig", 1);
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

        echo "Liste des abonnements";
        
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
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success \">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <h1 style=\"text-align: left;\" >Liste des abonnements</h1>
    <br>



    <br>
    <table class=\"table\" style=\"text-align: center;\">
        <thead>
        <tr style=\"text-align: center; vertical-align: middle;\">
            <th>ID</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Description</th>

            <th>Date début</th>
            <th>Date fin</th>
            <th>categorie</th>

            <th>Editer</th>
        </tr>
        </thead>
        <tbody id=\"search-results\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Abonnements"]) || array_key_exists("Abonnements", $context) ? $context["Abonnements"] : (function () { throw new RuntimeError('Variable "Abonnements" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 36
            echo "            <tr style=\"text-align: center; vertical-align: middle;\">
                <td>
                    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getId", [], "method", false, false, false, 38), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getNomA", [], "method", false, false, false, 41), "html", null, true);
            echo "
                </td>

                <td>
                    ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["a"], "getDescriptionA", [], "method", false, false, false, 45);
            echo "
                </td>
                <td>
                    ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getPrixA", [], "method", false, false, false, 48), "html", null, true);
            echo " TND
                </td>
                <td>
                    ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getDateDebutA", [], "method", false, false, false, 51), "d/m/Y"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getDateFinA", [], "method", false, false, false, 54), "d/m/Y"), "html", null, true);
            echo "
                </td>
               <td>
                    ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "categorieAbonnements", [], "any", false, false, false, 57), "getNomCategorie", [], "method", false, false, false, 57), "html", null, true);
            echo "
                </td>


                <td>
                    <div style=\"text-align: center;\">
                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Update_Abonnement", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-warning mt-2\" type=\"submit\" >Modifier</a>
                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Delete_Abonnement", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"btn btn-danger mt-2\" type=\"submit\" onclick=\"return confirm('Etes vous sure ?')\">Supprimer</a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "            <tr>
                <td colspan=\"4\" style=\"text-align: center;\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
        <tbody id=\"search\"></tbody>
    </table>

    <div style=\"text-align: center;\">
        <br>
        <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Create_Abonnement");
        echo "\" class=\"btn btn-primary mt-2\" type=\"submit\" style=\"text-align: center;\">Ajouter un abonnement</a>
        <br>
        <br>
        <br>
    </div>
    <script>
        \$(function () {
            \$('#search-form').submit(function (e) {
                e.preventDefault();

                \$.ajax({
                    url: \$(this).attr('action'),
                    data: \$(this).serialize(),
                    success: function (data) {
                        \$('#search-results').html(data);
                    }
                });
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
        return "abonnement/ReadAbonnementBack.html.twig";
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
        return array (  218 => 79,  210 => 73,  201 => 69,  191 => 64,  187 => 63,  178 => 57,  172 => 54,  166 => 51,  160 => 48,  154 => 45,  147 => 41,  141 => 38,  137 => 36,  132 => 35,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Liste des abonnements{% endblock %}

{% block body %}

    {% for message in app.flashes('notice') %}
        <div class=\"alert alert-success \">
            {{ message }}
        </div>
    {% endfor %}

    <h1 style=\"text-align: left;\" >Liste des abonnements</h1>
    <br>



    <br>
    <table class=\"table\" style=\"text-align: center;\">
        <thead>
        <tr style=\"text-align: center; vertical-align: middle;\">
            <th>ID</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Description</th>

            <th>Date début</th>
            <th>Date fin</th>
            <th>categorie</th>

            <th>Editer</th>
        </tr>
        </thead>
        <tbody id=\"search-results\">
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
                        <a href=\"{{path('Update_Abonnement',{'id':a.id})}}\" class=\"btn btn-warning mt-2\" type=\"submit\" >Modifier</a>
                        <a href=\"{{path('Delete_Abonnement',{'id':a.id})}}\" class=\"btn btn-danger mt-2\" type=\"submit\" onclick=\"return confirm('Etes vous sure ?')\">Supprimer</a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\" style=\"text-align: center;\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        <tbody id=\"search\"></tbody>
    </table>

    <div style=\"text-align: center;\">
        <br>
        <a href=\"{{path('Create_Abonnement')}}\" class=\"btn btn-primary mt-2\" type=\"submit\" style=\"text-align: center;\">Ajouter un abonnement</a>
        <br>
        <br>
        <br>
    </div>
    <script>
        \$(function () {
            \$('#search-form').submit(function (e) {
                e.preventDefault();

                \$.ajax({
                    url: \$(this).attr('action'),
                    data: \$(this).serialize(),
                    success: function (data) {
                        \$('#search-results').html(data);
                    }
                });
            });
        });
    </script>
{% endblock %}", "abonnement/ReadAbonnementBack.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\abonnement\\ReadAbonnementBack.html.twig");
    }
}
