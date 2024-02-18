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

/* admin/listUsers.html.twig */
class __TwigTemplate_6e5e154c1460a2af2e2a86c00d7280cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listUsers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listUsers.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "admin/listUsers.html.twig", 1);
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

        echo "Liste des utilisateurs";
        
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <main class=\"col-lg-9\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title\">Liste des utilisateurs</h1>
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Cin</th>
                                    <th>Rôles</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "                                    <tr>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 34
                echo "                                                ";
                $context["badge_color"] = ((($context["role"] == "ROLE_ADMIN")) ? ("danger") : ((((($context["role"] == "ROLE_COACH") || ($context["role"] == "ROLE_NUTRITIONIST"))) ? ("warning") : ("success"))));
                // line 35
                echo "                                                <span class=\"badge bg-";
                echo twig_escape_filter($this->env, (isset($context["badge_color"]) || array_key_exists("badge_color", $context) ? $context["badge_color"] : (function () { throw new RuntimeError('Variable "badge_color" does not exist.', 35, $this->source); })()), "html", null, true);
                echo "\">
                                                    ";
                // line 36
                $context["role_name"] = ((($context["role"] == "ROLE_ADMIN")) ? ("Administrateur") : (((($context["role"] == "ROLE_COACH")) ? ("Coach") : (((($context["role"] == "ROLE_NUTRITIONIST")) ? ("Nutritionniste") : ("Membre"))))));
                // line 37
                echo "                                                    ";
                echo twig_escape_filter($this->env, (isset($context["role_name"]) || array_key_exists("role_name", $context) ? $context["role_name"] : (function () { throw new RuntimeError('Variable "role_name" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "
                                                </span>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                        </td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-success\">Modifier</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
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
        return "admin/listUsers.html.twig";
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
        return array (  172 => 46,  161 => 40,  151 => 37,  149 => 36,  144 => 35,  141 => 34,  137 => 33,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  113 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseBack.html.twig\" %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <main class=\"col-lg-9\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title\">Liste des utilisateurs</h1>
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Cin</th>
                                    <th>Rôles</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.firstname }}</td>
                                        <td>{{ user.lastname }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>{{ user.cin }}</td>
                                        <td>
                                            {% for role in user.roles %}
                                                {% set badge_color = role == \"ROLE_ADMIN\" ? \"danger\" : (role == \"ROLE_COACH\" or role == \"ROLE_NUTRITIONIST\" ? \"warning\" : \"success\") %}
                                                <span class=\"badge bg-{{ badge_color }}\">
                                                    {% set role_name = role == \"ROLE_ADMIN\" ? \"Administrateur\" : (role == \"ROLE_COACH\" ? \"Coach\" : (role == \"ROLE_NUTRITIONIST\" ? \"Nutritionniste\" : \"Membre\")) %}
                                                    {{ role_name }}
                                                </span>
                                            {% endfor %}
                                        </td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-success\">Modifier</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
{% endblock %}", "admin/listUsers.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\admin\\listUsers.html.twig");
    }
}
