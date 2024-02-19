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
        echo "    <div class=\"container mx-auto py-4\">
        <h1 class=\"text-xl font-semibold mb-2\">Liste des utilisateurs</h1>
        <div class=\"overflow-x-auto\">
            <table class=\"table-auto w-full border-collapse text-sm\">
                <thead>
                    <tr>
                        <th class=\"px-3 py-2 bg-gray-200\">ID</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Prénom</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Nom</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Email</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Cin</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Rôles</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Vérifié</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Bloqué</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "                        <tr>
                            <td class=\"border px-3 py-2\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">
                               ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 33
                echo "                                    ";
                $context["badge_color"] = ((($context["role"] == "ROLE_ADMIN")) ? ("danger") : ((((($context["role"] == "ROLE_COACH") || ($context["role"] == "ROLE_NUTRITIONIST"))) ? ("warning") : ("success"))));
                // line 34
                echo "                                    <span class=\"badge bg-";
                echo twig_escape_filter($this->env, (isset($context["badge_color"]) || array_key_exists("badge_color", $context) ? $context["badge_color"] : (function () { throw new RuntimeError('Variable "badge_color" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "\">
                                        ";
                // line 35
                $context["role_name"] = ((($context["role"] == "ROLE_ADMIN")) ? ("Administrateur") : (((($context["role"] == "ROLE_COACH")) ? ("Coach") : (((($context["role"] == "ROLE_NUTRITIONIST")) ? ("Nutritionniste") : ("Membre"))))));
                // line 36
                echo "                                        ";
                echo twig_escape_filter($this->env, (isset($context["role_name"]) || array_key_exists("role_name", $context) ? $context["role_name"] : (function () { throw new RuntimeError('Variable "role_name" does not exist.', 36, $this->source); })()), "html", null, true);
                echo "
                                    </span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                            </td>
                            <td class=\"border px-3 py-2\">
                                <input class=\"form-checkbox h-4 w-4 text-green-600 bg-green-500\" type=\"checkbox\" disabled ";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 41)) ? ("checked") : (""));
            echo ">
                            </td>
                             <td class=\"border px-3 py-2\">
                                <input class=\"form-checkbox h-4 w-4 text-green-600 bg-green-500\" type=\"checkbox\" disabled ";
            // line 44
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 44)) ? ("checked") : (""));
            echo ">
                            </td>
                            <td class=\"border px-3 py-2\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Actions
                                    </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        <a class=\"dropdown-item\" href=\"#\">Modifier</a>
                                        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 53)) {
                // line 54
                echo "                                            <a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_user_unblock", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\">Débloquer</a>
                                        ";
            } else {
                // line 56
                echo "                                           <a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_block_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">Bloquer</a>

                                        ";
            }
            // line 59
            echo "                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </tbody>
            </table>
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
        return array (  207 => 64,  197 => 59,  190 => 56,  184 => 54,  182 => 53,  170 => 44,  164 => 41,  160 => 39,  150 => 36,  148 => 35,  143 => 34,  140 => 33,  136 => 32,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  112 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseBack.html.twig\" %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block body %}
    <div class=\"container mx-auto py-4\">
        <h1 class=\"text-xl font-semibold mb-2\">Liste des utilisateurs</h1>
        <div class=\"overflow-x-auto\">
            <table class=\"table-auto w-full border-collapse text-sm\">
                <thead>
                    <tr>
                        <th class=\"px-3 py-2 bg-gray-200\">ID</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Prénom</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Nom</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Email</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Cin</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Rôles</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Vérifié</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Bloqué</th>
                        <th class=\"px-3 py-2 bg-gray-200\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                        <tr>
                            <td class=\"border px-3 py-2\">{{ user.id }}</td>
                            <td class=\"border px-3 py-2\">{{ user.firstname }}</td>
                            <td class=\"border px-3 py-2\">{{ user.lastname }}</td>
                            <td class=\"border px-3 py-2\">{{ user.email }}</td>
                            <td class=\"border px-3 py-2\">{{ user.cin }}</td>
                            <td class=\"border px-3 py-2\">
                               {% for role in user.roles %}
                                    {% set badge_color = role == \"ROLE_ADMIN\" ? \"danger\" : (role == \"ROLE_COACH\" or role == \"ROLE_NUTRITIONIST\" ? \"warning\" : \"success\") %}
                                    <span class=\"badge bg-{{ badge_color }}\">
                                        {% set role_name = role == \"ROLE_ADMIN\" ? \"Administrateur\" : (role == \"ROLE_COACH\" ? \"Coach\" : (role == \"ROLE_NUTRITIONIST\" ? \"Nutritionniste\" : \"Membre\")) %}
                                        {{ role_name }}
                                    </span>
                                {% endfor %}
                            </td>
                            <td class=\"border px-3 py-2\">
                                <input class=\"form-checkbox h-4 w-4 text-green-600 bg-green-500\" type=\"checkbox\" disabled {{ user.isVerified ? \"checked\" : \"\" }}>
                            </td>
                             <td class=\"border px-3 py-2\">
                                <input class=\"form-checkbox h-4 w-4 text-green-600 bg-green-500\" type=\"checkbox\" disabled {{ user.isBlocked ? \"checked\" : \"\" }}>
                            </td>
                            <td class=\"border px-3 py-2\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Actions
                                    </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        <a class=\"dropdown-item\" href=\"#\">Modifier</a>
                                        {% if user.isBlocked %}
                                            <a class=\"dropdown-item\" href=\"{{ path('admin_users_user_unblock', {'id': user.id}) }}\">Débloquer</a>
                                        {% else %}
                                           <a class=\"dropdown-item\" href=\"{{ path('admin_users_block_user', {'id': user.id}) }}\">Bloquer</a>

                                        {% endif %}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}


", "admin/listUsers.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\admin\\listUsers.html.twig");
    }
}
