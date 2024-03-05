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

/* admin/editUser.html.twig */
class __TwigTemplate_c11c2d588bda509e37c29de823729c6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editUser.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "admin/editUser.html.twig", 1);
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
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Edit Profile</h3>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Email:</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">First Name:</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 23, $this->source); })()), "firstname", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 24, $this->source); })()), "firstname", [], "any", false, false, false, 24), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Last Name:</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 30, $this->source); })()), "lastname", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 31, $this->source); })()), "lastname", [], "any", false, false, false, 31), 'errors');
        echo "
                            </div>
                        </div>               
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">City:</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 37, $this->source); })()), "city", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 38, $this->source); })()), "city", [], "any", false, false, false, 38), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">CIN:</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 44, $this->source); })()), "cin", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 45, $this->source); })()), "cin", [], "any", false, false, false, 45), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Image:</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control-file"]]);
        echo "
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52), 'errors');
        echo "
                                ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "image", [], "any", false, false, false, 53)) {
            // line 54
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "image", [], "any", false, false, false, 54))), "html", null, true);
            echo "\" alt=\"Current Image\" class=\"mt-2\" style=\"max-width: 200px;\">
                                ";
        }
        // line 56
        echo "                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Speciality:</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 61, $this->source); })()), "speciality", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 62, $this->source); })()), "speciality", [], "any", false, false, false, 62), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Birthday:</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 68, $this->source); })()), "birthday", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control datepicker", "data-date-end-date" => "0d"]]);
        echo "

                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 70, $this->source); })()), "birthday", [], "any", false, false, false, 70), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group row\">
                             <label class=\"col-sm-3 col-form-label font-weight-bold\">Blocked:</label>
    <div class=\"col-sm-9\">
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 76, $this->source); })()), "isBlocked", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 77, $this->source); })()), "isBlocked", [], "any", false, false, false, 77), 'errors');
        echo "
    </div>
</div>
<div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label font-weight-bold\">Verified:</label>
    <div class=\"col-sm-9\">
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 83, $this->source); })()), "isVerified", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 84, $this->source); })()), "isVerified", [], "any", false, false, false, 84), 'errors');
        echo "
    </div>
</div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Roles:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 90, $this->source); })()), "roles", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 91, $this->source); })()), "roles", [], "any", false, false, false, 91), 'errors');
        echo "
                    </div>
                </div>


                        <!-- Autres champs du formulaire -->
                        <div class=\"form-group row\">
                            <div class=\"col-sm-9 offset-sm-3\">
                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                                
                                <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
        echo "\" class=\"btn btn-info\">Back to list</a>
                            </div>
                        </div>
                        ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
                    </div>
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
        return "admin/editUser.html.twig";
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
        return array (  249 => 104,  243 => 101,  230 => 91,  226 => 90,  217 => 84,  213 => 83,  204 => 77,  200 => 76,  191 => 70,  186 => 68,  177 => 62,  173 => 61,  166 => 56,  160 => 54,  158 => 53,  154 => 52,  150 => 51,  141 => 45,  137 => 44,  128 => 38,  124 => 37,  115 => 31,  111 => 30,  102 => 24,  98 => 23,  89 => 17,  85 => 16,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Edit Profile</h3>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(formUser, {'attr': {'class': 'form-horizontal'}}) }}
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Email:</label>
                            <div class=\"col-sm-9\">
                                {{ form_widget(formUser.email, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(formUser.email) }}
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">First Name:</label>
                            <div class=\"col-sm-9\">
                                {{ form_widget(formUser.firstname, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(formUser.firstname) }}
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Last Name:</label>
                            <div class=\"col-sm-9\">
                                {{ form_widget(formUser.lastname, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(formUser.lastname) }}
                            </div>
                        </div>               
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">City:</label>
                            <div class=\"col-sm-9\">
                                {{ form_widget(formUser.city, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(formUser.city) }}
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">CIN:</label>
                            <div class=\"col-sm-9\">
                                {{ form_widget(formUser.cin, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(formUser.cin) }}
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Image:</label>
                            <div class=\"col-sm-9\">
                                {{ form_row(formUser.image, {'attr': {'class': 'form-control-file'}}) }}
                                {{ form_errors(formUser.image) }}
                                {% if formUser.vars.value.image %}
                                    <img src=\"{{ asset('uploads/' ~ formUser.vars.value.image) }}\" alt=\"Current Image\" class=\"mt-2\" style=\"max-width: 200px;\">
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Speciality:</label>
                            <div class=\"col-sm-9\">
                                {{ form_widget(formUser.speciality, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(formUser.speciality) }}
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-3 col-form-label font-weight-bold\">Birthday:</label>
                            <div class=\"col-sm-9\">
                                {{ form_widget(formUser.birthday, {'attr': {'class': 'form-control datepicker', 'data-date-end-date': '0d'}}) }}

                                {{ form_errors(formUser.birthday) }}
                            </div>
                        </div>
                        <div class=\"form-group row\">
                             <label class=\"col-sm-3 col-form-label font-weight-bold\">Blocked:</label>
    <div class=\"col-sm-9\">
        {{ form_widget(formUser.isBlocked, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(formUser.isBlocked) }}
    </div>
</div>
<div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label font-weight-bold\">Verified:</label>
    <div class=\"col-sm-9\">
        {{ form_widget(formUser.isVerified, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(formUser.isVerified) }}
    </div>
</div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Roles:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(formUser.roles, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(formUser.roles) }}
                    </div>
                </div>


                        <!-- Autres champs du formulaire -->
                        <div class=\"form-group row\">
                            <div class=\"col-sm-9 offset-sm-3\">
                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                                
                                <a href=\"{{ path('admin_users_list') }}\" class=\"btn btn-info\">Back to list</a>
                            </div>
                        </div>
                        {{ form_end(formUser) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "admin/editUser.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\admin\\editUser.html.twig");
    }
}
