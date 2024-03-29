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

/* profile/edit.html.twig */
class __TwigTemplate_eee12ed55d07b59ead2b50616c690fe0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "profile/edit.html.twig", 1);
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
        <h1>Edit Profile</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Email:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">First Name:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "firstname", [], "any", false, false, false, 20), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Last Name:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "lastname", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "lastname", [], "any", false, false, false, 27), 'errors');
        echo "
                    </div>
                </div>             
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">City:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "city", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "city", [], "any", false, false, false, 34), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">CIN:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "cin", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "cin", [], "any", false, false, false, 41), 'errors');
        echo "
                    </div>
                </div>
               <!-- <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Is Verified:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "isVerified", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "isVerified", [], "any", false, false, false, 48), 'errors');
        echo "
                    </div>
                </div>-->
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Image:</label>
                    <div class=\"col-sm-9\">
                         ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control-file"]]);
        echo "
                         ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "image", [], "any", false, false, false, 55), 'errors');
        echo "
                         ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56), "image", [], "any", false, false, false, 56)) {
            // line 57
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57), "image", [], "any", false, false, false, 57))), "html", null, true);
            echo "\" alt=\"Current Image\" class=\"mt-2\" style=\"max-width: 200px;\">
                        ";
        }
        // line 59
        echo "                     </div>
                </div>


                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Speciality:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "speciality", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "speciality", [], "any", false, false, false, 67), 'errors');
        echo "
                    </div>
                </div>
                 <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Birthday:</label>
                    <div class=\"col-sm-9\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "birthday", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        echo "
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "birthday", [], "any", false, false, false, 74), 'errors');
        echo "
                    </div>
                </div>
         
               <div class=\"form-group row\">
    <div class=\"col-sm-9 offset-sm-3\">
        <button type=\"submit\" class=\"btn btn-primary\">Save</button>
        <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_show");
        echo "\" class=\"btn btn-info ml-2\">Cancel</a>
    </div>
</div>

                ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
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
        return "profile/edit.html.twig";
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
        return array (  218 => 85,  211 => 81,  201 => 74,  197 => 73,  188 => 67,  184 => 66,  175 => 59,  169 => 57,  167 => 56,  163 => 55,  159 => 54,  150 => 48,  146 => 47,  137 => 41,  133 => 40,  124 => 34,  120 => 33,  111 => 27,  107 => 26,  98 => 20,  94 => 19,  85 => 13,  81 => 12,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
    <div class=\"container mt-5\">
        <h1>Edit Profile</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Email:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.email) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">First Name:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.firstname) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Last Name:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.lastname, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.lastname) }}
                    </div>
                </div>             
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">City:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.city, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.city) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">CIN:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.cin, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.cin) }}
                    </div>
                </div>
               <!-- <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Is Verified:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.isVerified, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.isVerified) }}
                    </div>
                </div>-->
                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Image:</label>
                    <div class=\"col-sm-9\">
                         {{ form_row(form.image, {'attr': {'class': 'form-control-file'}}) }}
                         {{ form_errors(form.image) }}
                         {% if form.vars.value.image %}
                            <img src=\"{{ asset('uploads/' ~ form.vars.value.image) }}\" alt=\"Current Image\" class=\"mt-2\" style=\"max-width: 200px;\">
                        {% endif %}
                     </div>
                </div>


                <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Speciality:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.speciality, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.speciality) }}
                    </div>
                </div>
                 <div class=\"form-group row\">
                    <label class=\"col-sm-3 col-form-label font-weight-bold\">Birthday:</label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.birthday, {'attr': {'class': 'form-control datepicker'}}) }}
                        {{ form_errors(form.birthday) }}
                    </div>
                </div>
         
               <div class=\"form-group row\">
    <div class=\"col-sm-9 offset-sm-3\">
        <button type=\"submit\" class=\"btn btn-primary\">Save</button>
        <a href=\"{{ path('profile_show') }}\" class=\"btn btn-info ml-2\">Cancel</a>
    </div>
</div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "profile/edit.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\profile\\edit.html.twig");
    }
}
