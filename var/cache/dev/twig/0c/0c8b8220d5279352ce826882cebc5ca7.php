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

/* admin/showUser.html.twig */
class __TwigTemplate_de05afcfcb16e2921e288720a7c46e9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showUser.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "admin/showUser.html.twig", 1);
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
        echo "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "firstname", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "lastname", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">ID</th>
                            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">First name</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "firstname", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Last name</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "lastname", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Email</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Roles</th>
                            <td>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "roles", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 30
            echo "                                    ";
            $context["badge_color"] = ((($context["role"] == "ROLE_ADMIN")) ? ("danger") : ((((($context["role"] == "ROLE_COACH") || ($context["role"] == "ROLE_NUTRITIONIST"))) ? ("warning") : ("success"))));
            // line 31
            echo "                                    <span class=\"badge bg-";
            echo twig_escape_filter($this->env, (isset($context["badge_color"]) || array_key_exists("badge_color", $context) ? $context["badge_color"] : (function () { throw new RuntimeError('Variable "badge_color" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\">
                                        ";
            // line 32
            $context["role_name"] = ((($context["role"] == "ROLE_ADMIN")) ? ("Administrateur") : (((($context["role"] == "ROLE_COACH")) ? ("Coach") : (((($context["role"] == "ROLE_NUTRITIONIST")) ? ("Nutritionniste") : ("Membre"))))));
            // line 33
            echo "                                        ";
            echo twig_escape_filter($this->env, (isset($context["role_name"]) || array_key_exists("role_name", $context) ? $context["role_name"] : (function () { throw new RuntimeError('Variable "role_name" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "
                                    </span>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Username</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "username", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">C.I.N</th>
                            <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "cin", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Date de Naissance</th>
                            <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "birthday", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "birthday", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Image</th>
                            <td><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"User Image\"></td>
                        </tr>
                    </tbody>
                </table>
                <div class=\"text-center\">
                    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
        echo "\" class=\"btn btn-info\">Back to list</a>
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>
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
        return "admin/showUser.html.twig";
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
        return array (  175 => 58,  171 => 57,  163 => 52,  156 => 48,  149 => 44,  142 => 40,  136 => 36,  126 => 33,  124 => 32,  119 => 31,  116 => 30,  112 => 29,  104 => 24,  97 => 20,  90 => 16,  83 => 12,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">{{ user.firstname }} {{ user.lastname }}</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">ID</th>
                            <td>{{ user.id }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">First name</th>
                            <td>{{ user.firstname }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Last name</th>
                            <td>{{ user.lastname }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Email</th>
                            <td>{{ user.email }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Roles</th>
                            <td>
                                {% for role in user.roles %}
                                    {% set badge_color = role == \"ROLE_ADMIN\" ? \"danger\" : (role == \"ROLE_COACH\" or role == \"ROLE_NUTRITIONIST\" ? \"warning\" : \"success\") %}
                                    <span class=\"badge bg-{{ badge_color }}\">
                                        {% set role_name = role == \"ROLE_ADMIN\" ? \"Administrateur\" : (role == \"ROLE_COACH\" ? \"Coach\" : (role == \"ROLE_NUTRITIONIST\" ? \"Nutritionniste\" : \"Membre\")) %}
                                        {{ role_name }}
                                    </span>
                                {% endfor %}
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Username</th>
                            <td>{{ user.username }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">C.I.N</th>
                            <td>{{ user.cin }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Date de Naissance</th>
                            <td>{{ user.birthday ? user.birthday|date('Y-m-d') : '' }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Image</th>
                            <td><img src=\"{{ asset('uploads/' ~ user.image) }}\" class=\"img-fluid\" alt=\"User Image\"></td>
                        </tr>
                    </tbody>
                </table>
                <div class=\"text-center\">
                    <a href=\"{{ path('admin_users_list') }}\" class=\"btn btn-info\">Back to list</a>
                    <a href=\"{{ path('admin_users_edit', {'id': user.id}) }}\" class=\"btn btn-primary\">Edit</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/showUser.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\admin\\showUser.html.twig");
    }
}
