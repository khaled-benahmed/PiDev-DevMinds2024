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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>User</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>";
        // line 19
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "roles", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "roles", [], "any", false, false, false, 19)), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>

        <tr>
            <th>Username</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>NumTel</th>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "cin", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Date de Naissance</th>
            <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "birthday", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "birthday", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <!--<tr>
            ";
        // line 35
        $context["img"] = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35);
        // line 36
        echo "            <th>Image</th>
            <td><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "image", [], "any", false, false, false, 37))), "html", null, true);
        echo "\" height=\"200px;\" width=\"100px;\"></td>
        </tr>-->
        </tbody>
    </table>
    <button type=\"button\" class=\"btn btn-info\">
        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
        echo "\">back to list</a>
    </button>
    <!--";
        // line 44
        echo "-->
   
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
        return array (  136 => 44,  131 => 42,  123 => 37,  120 => 36,  118 => 35,  112 => 32,  105 => 28,  98 => 24,  90 => 19,  83 => 15,  76 => 11,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}


{% block body %}
    <h1>User</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ user.id }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ user.email }}</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
        </tr>

        <tr>
            <th>Username</th>
            <td>{{ user.username }}</td>
        </tr>
        <tr>
            <th>NumTel</th>
            <td>{{ user.cin }}</td>
        </tr>
        <tr>
            <th>Date de Naissance</th>
            <td>{{ user.birthday ? user.birthday|date('Y-m-d') : '' }}</td>
        </tr>
        <!--<tr>
            {% set img=user.image %}
            <th>Image</th>
            <td><img src=\"{{ asset('uploads/' ~ app.user.image) }}\" height=\"200px;\" width=\"100px;\"></td>
        </tr>-->
        </tbody>
    </table>
    <button type=\"button\" class=\"btn btn-info\">
        <a href=\"{{ path('admin_users_list') }}\">back to list</a>
    </button>
    <!--{# <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a> #}-->
   
{% endblock %}
", "admin/showUser.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\admin\\showUser.html.twig");
    }
}
