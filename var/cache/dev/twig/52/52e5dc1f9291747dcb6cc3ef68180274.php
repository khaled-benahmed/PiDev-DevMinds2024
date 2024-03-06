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

/* planning_crud/form.html.twig */
class __TwigTemplate_1d7b1bd7c9e83bcf471d9292e5b497ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/form.html.twig"));

        // line 1
        echo "<div class=\"card-body card-block\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <!-- Titre Field -->
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "users", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Utilisateurs :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "users", [], "any", false, false, false, 9), 'widget');
        echo "
            ";
        // line 10
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "users", [], "any", false, false, false, 10), 'errors'))) {
            // line 11
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "users", [], "any", false, false, false, 11), 'errors');
            echo "</small>
            ";
        }
        // line 13
        echo "        </div>
    </div>

    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Titre", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Titre :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            <div class=\"input-group\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "Titre", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            ";
        // line 24
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Titre", [], "any", false, false, false, 24), 'errors'))) {
            // line 25
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Titre", [], "any", false, false, false, 25), 'errors');
            echo "</small>
            ";
        }
        // line 27
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "datePlanning", [], "any", false, false, false, 31), 'label', ["label" => "Date :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "datePlanning", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 35
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "datePlanning", [], "any", false, false, false, 35), 'errors'))) {
            // line 36
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "datePlanning", [], "any", false, false, false, 36), 'errors');
            echo "</small>
            ";
        }
        // line 38
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "jourPlanning", [], "any", false, false, false, 42), 'label', ["label" => "Jour :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "jourPlanning", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 46
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "jourPlanning", [], "any", false, false, false, 46), 'errors'))) {
            // line 47
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "jourPlanning", [], "any", false, false, false, 47), 'errors');
            echo "</small>
            ";
        }
        // line 49
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "activities", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Activités :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "activities", [], "any", false, false, false, 56), 'widget');
        echo "
            ";
        // line 57
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "activities", [], "any", false, false, false, 57), 'errors'))) {
            // line 58
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "activities", [], "any", false, false, false, 58), 'errors');
            echo "</small>
            ";
        }
        // line 60
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "startTime", [], "any", false, false, false, 64), 'label', ["label" => "Heure Début :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "startTime", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 68
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "startTime", [], "any", false, false, false, 68), 'errors'))) {
            // line 69
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "startTime", [], "any", false, false, false, 69), 'errors');
            echo "</small>
            ";
        }
        // line 71
        echo "        </div>
    </div>

    <!-- End Time Field -->
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "endTime", [], "any", false, false, false, 77), 'label', ["label" => "Heure Fin :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "endTime", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 81
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "endTime", [], "any", false, false, false, 81), 'errors'))) {
            // line 82
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "endTime", [], "any", false, false, false, 82), 'errors');
            echo "</small>
            ";
        }
        // line 84
        echo "        </div>
    </div>

    <!-- Champ Statut Field -->
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "status", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Statut du Planning :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "status", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 94
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "status", [], "any", false, false, false, 94), 'errors'))) {
            // line 95
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "status", [], "any", false, false, false, 95), 'errors');
            echo "</small>
            ";
        }
        // line 97
        echo "        </div>
    </div>
    <div align=\"center\" class=\"card-footer\">
        <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><i class=\"zmdi zmdi-plus\"></i>";
        // line 100
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 100, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
        <button class=\"au-xbtn au-btn-icon au-btn--green au-btn--small\"><a style=\"color:white;\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_index");
        echo "\">Consulter Liste</a></button>
    </div>
    ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "planning_crud/form.html.twig";
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
        return array (  260 => 103,  255 => 101,  251 => 100,  246 => 97,  240 => 95,  238 => 94,  234 => 93,  228 => 90,  220 => 84,  214 => 82,  212 => 81,  208 => 80,  202 => 77,  194 => 71,  188 => 69,  186 => 68,  182 => 67,  176 => 64,  170 => 60,  164 => 58,  162 => 57,  158 => 56,  152 => 53,  146 => 49,  140 => 47,  138 => 46,  134 => 45,  128 => 42,  122 => 38,  116 => 36,  114 => 35,  110 => 34,  104 => 31,  98 => 27,  92 => 25,  90 => 24,  85 => 22,  78 => 18,  71 => 13,  65 => 11,  63 => 10,  59 => 9,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-body card-block\">
    {{ form_start(form,{'attr':{'novalidate':'novalidate'}},{'attr':{'class':'form-horizontal'}}) }}
    <!-- Titre Field -->
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.users, \"Utilisateurs :\", {'label_attr': {'class': 'form-control-label'}}) }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.users) }}
            {% if form_errors(form.users) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.users) }}</small>
            {% endif %}
        </div>
    </div>

    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.Titre, \"Titre :\", {'label_attr': {'class': 'form-control-label'}}) }}
        </div>
        <div class=\"col-12 col-md-9\">
            <div class=\"input-group\">
                {{ form_widget(form.Titre, {'attr': {'class': 'form-control'}}) }}
            </div>
            {% if form_errors(form.Titre) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.Titre) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.datePlanning,\"Date :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.datePlanning, {'attr':{'class':'form-control'}})}}
            {% if form_errors(form.datePlanning) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.datePlanning) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.jourPlanning,\"Jour :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.jourPlanning,{'attr':{'class':'form-control'}})}}
            {% if form_errors(form.jourPlanning) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.jourPlanning) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.activities, \"Activités :\", {'label_attr': {'class': 'form-control-label'}}) }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.activities, ) }}
            {% if form_errors(form.activities) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.activities) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.startTime, \"Heure Début :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.startTime, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.startTime) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.startTime) }}</small>
            {% endif %}
        </div>
    </div>

    <!-- End Time Field -->
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.endTime, \"Heure Fin :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.endTime, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.endTime) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.endTime) }}</small>
            {% endif %}
        </div>
    </div>

    <!-- Champ Statut Field -->
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.status, \"Statut du Planning :\", {'label_attr': {'class': 'form-control-label'}}) }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.status, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.status) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.status) }}</small>
            {% endif %}
        </div>
    </div>
    <div align=\"center\" class=\"card-footer\">
        <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><i class=\"zmdi zmdi-plus\"></i>{{ button_label|default('Ajouter') }}</button>
        <button class=\"au-xbtn au-btn-icon au-btn--green au-btn--small\"><a style=\"color:white;\" href=\"{{ path('app_planning_crud_index') }}\">Consulter Liste</a></button>
    </div>
    {{ form_end(form) }}
</div>

", "planning_crud/form.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\planning_crud\\form.html.twig");
    }
}
