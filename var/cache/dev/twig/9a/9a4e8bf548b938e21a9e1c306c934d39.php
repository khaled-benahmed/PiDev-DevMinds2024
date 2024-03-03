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
        <div class=\"mb-3\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher...\">
        </div>
        <div class=\"overflow-x-auto\">
            <table id=\"userTable\" class=\"table-auto w-full border-collapse text-sm\">
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "                        <tr>
                            <td class=\"border px-3 py-2\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td class=\"border px-3 py-2\">
                               ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 36
                echo "                                    ";
                $context["badge_color"] = ((($context["role"] == "ROLE_ADMIN")) ? ("danger") : ((((($context["role"] == "ROLE_COACH") || ($context["role"] == "ROLE_NUTRITIONIST"))) ? ("warning") : ("success"))));
                // line 37
                echo "                                    <span class=\"badge bg-";
                echo twig_escape_filter($this->env, (isset($context["badge_color"]) || array_key_exists("badge_color", $context) ? $context["badge_color"] : (function () { throw new RuntimeError('Variable "badge_color" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "\">
                                        ";
                // line 38
                $context["role_name"] = ((($context["role"] == "ROLE_ADMIN")) ? ("Administrateur") : (((($context["role"] == "ROLE_COACH")) ? ("Coach") : (((($context["role"] == "ROLE_NUTRITIONIST")) ? ("Nutritionniste") : ("Membre"))))));
                // line 39
                echo "                                        ";
                echo twig_escape_filter($this->env, (isset($context["role_name"]) || array_key_exists("role_name", $context) ? $context["role_name"] : (function () { throw new RuntimeError('Variable "role_name" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "
                                    </span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </td>
                            <td class=\"border px-3 py-2\">
                                <input class=\"form-checkbox h-4 w-4 text-green-600 bg-green-500\" type=\"checkbox\" disabled ";
            // line 44
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 44)) ? ("checked") : (""));
            echo ">
                            </td>
                            <td class=\"border px-3 py-2\">
                                <input class=\"form-checkbox h-4 w-4 text-green-600 bg-green-500\" type=\"checkbox\" disabled ";
            // line 47
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 47)) ? ("checked") : (""));
            echo ">
                            </td>
                            <td class=\"border px-3 py-2\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-outline-info btn-sm\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" title=\"Afficher\"><i class=\"fas fa-eye\"></i></a>
                                    <form action=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55))), "html", null, true);
            echo "\">
                                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                                    </form>
                                    ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 58)) {
                // line 59
                echo "                                        <a class=\"btn btn-outline-success btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_user_unblock", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\" title=\"Débloquer\"><i class=\"fas fa-lock-open\"></i></a>
                                    ";
            } else {
                // line 61
                echo "                                        <a class=\"btn btn-outline-warning btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_block_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\" title=\"Bloquer\"><i class=\"fas fa-lock\"></i></a>
                                    ";
            }
            // line 63
            echo "                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tbody>
            </table>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            var table = \$('#userTable');
            var input = \$('#searchInput');

            input.on('keyup', function() {
                var searchText = \$(this).val().toLowerCase();
                \$('tbody tr').filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(searchText) > -1);
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
        return array (  222 => 67,  213 => 63,  207 => 61,  201 => 59,  199 => 58,  193 => 55,  188 => 53,  184 => 52,  180 => 51,  173 => 47,  167 => 44,  163 => 42,  153 => 39,  151 => 38,  146 => 37,  143 => 36,  139 => 35,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseBack.html.twig\" %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block body %}
    <div class=\"container mx-auto py-4\">
        <h1 class=\"text-xl font-semibold mb-2\">Liste des utilisateurs</h1>
        <div class=\"mb-3\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher...\">
        </div>
        <div class=\"overflow-x-auto\">
            <table id=\"userTable\" class=\"table-auto w-full border-collapse text-sm\">
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
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('admin_users_edit', {'id': user.id}) }}\" title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-outline-info btn-sm\" href=\"{{ path('admin_users_show', {'id': user.id}) }}\" title=\"Afficher\"><i class=\"fas fa-eye\"></i></a>
                                    <form action=\"{{ path('admin_users_delete', {'id': user.id}) }}\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                                    </form>
                                    {% if user.isBlocked %}
                                        <a class=\"btn btn-outline-success btn-sm\" href=\"{{ path('admin_users_user_unblock', {'id': user.id}) }}\" title=\"Débloquer\"><i class=\"fas fa-lock-open\"></i></a>
                                    {% else %}
                                        <a class=\"btn btn-outline-warning btn-sm\" href=\"{{ path('admin_users_block_user', {'id': user.id}) }}\" title=\"Bloquer\"><i class=\"fas fa-lock\"></i></a>
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            var table = \$('#userTable');
            var input = \$('#searchInput');

            input.on('keyup', function() {
                var searchText = \$(this).val().toLowerCase();
                \$('tbody tr').filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(searchText) > -1);
                });
            });
        });
    </script>
{% endblock %}
", "admin/listUsers.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\admin\\listUsers.html.twig");
    }
}
