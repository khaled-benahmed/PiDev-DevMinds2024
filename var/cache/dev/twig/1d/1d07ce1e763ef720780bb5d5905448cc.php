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

/* planning_crud/_form.html.twig */
class __TwigTemplate_c515aa708acf1034d3f6d9f5fcec8b8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning_crud/_form.html.twig"));

        // line 1
        echo "    <div class=\"card-body card-block\">
        ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <!-- Titre Field -->
        <div class=\"row form-group\">
            <div class=\"col col-md-3\">
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "Titre", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Titre :"]);
        echo "
            </div>
            <div class=\"col-12 col-md-9\">
                <div class=\"input-group\">
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "Titre", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                ";
        // line 12
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "Titre", [], "any", false, false, false, 12), 'errors'))) {
            // line 13
            echo "                    <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "Titre", [], "any", false, false, false, 13), 'errors');
            echo "</small>
                ";
        }
        // line 15
        echo "            </div>
        </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "datePlanning", [], "any", false, false, false, 19), 'label', ["label" => "Date :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "datePlanning", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 23
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "datePlanning", [], "any", false, false, false, 23), 'errors'))) {
            // line 24
            echo "                        <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "datePlanning", [], "any", false, false, false, 24), 'errors');
            echo "</small>
                    ";
        }
        // line 26
        echo "                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "jourPlanning", [], "any", false, false, false, 30), 'label', ["label" => "Jour :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "jourPlanning", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 34
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "jourPlanning", [], "any", false, false, false, 34), 'errors'))) {
            // line 35
            echo "                        <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "jourPlanning", [], "any", false, false, false, 35), 'errors');
            echo "</small>
                    ";
        }
        // line 37
        echo "                </div>
            </div>
        <div class=\"row form-group\">
            <div class=\"col col-md-3\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "activities", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Activités :"]);
        echo "
            </div>
            <div class=\"col-12 col-md-9\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "activities", [], "any", false, false, false, 44), 'widget');
        echo "
                ";
        // line 45
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "activities", [], "any", false, false, false, 45), 'errors'))) {
            // line 46
            echo "                    <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "activities", [], "any", false, false, false, 46), 'errors');
            echo "</small>
                ";
        }
        // line 48
        echo "            </div>
        </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "startTime", [], "any", false, false, false, 52), 'label', ["label" => "Heure Début :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "startTime", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 56
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "startTime", [], "any", false, false, false, 56), 'errors'))) {
            // line 57
            echo "                        <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "startTime", [], "any", false, false, false, 57), 'errors');
            echo "</small>
                    ";
        }
        // line 59
        echo "                </div>
            </div>

            <!-- End Time Field -->
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "endTime", [], "any", false, false, false, 65), 'label', ["label" => "Heure Fin :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "endTime", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 69
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "endTime", [], "any", false, false, false, 69), 'errors'))) {
            // line 70
            echo "                        <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "endTime", [], "any", false, false, false, 70), 'errors');
            echo "</small>
                    ";
        }
        // line 72
        echo "                </div>
            </div>

        <!-- Champ Statut Field -->
        <div class=\"row form-group\">
            <div class=\"col col-md-3\">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "status", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Statut du Planning :"]);
        echo "
            </div>
            <div class=\"col-12 col-md-9\">
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 82
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "status", [], "any", false, false, false, 82), 'errors'))) {
            // line 83
            echo "                    <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83), 'errors');
            echo "</small>
                ";
        }
        // line 85
        echo "            </div>
        </div>
            <div align=\"center\" class=\"card-footer\">
                <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><i class=\"zmdi zmdi-plus\"></i>";
        // line 88
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 88, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                <button class=\"au-xbtn au-btn-icon au-btn--green au-btn--small\"><a style=\"color:white;\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_crud_index");
        echo "\">Consulter Liste</a></button>
            </div>
        ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
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
        return "planning_crud/_form.html.twig";
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
        return array (  235 => 91,  230 => 89,  226 => 88,  221 => 85,  215 => 83,  213 => 82,  209 => 81,  203 => 78,  195 => 72,  189 => 70,  187 => 69,  183 => 68,  177 => 65,  169 => 59,  163 => 57,  161 => 56,  157 => 55,  151 => 52,  145 => 48,  139 => 46,  137 => 45,  133 => 44,  127 => 41,  121 => 37,  115 => 35,  113 => 34,  109 => 33,  103 => 30,  97 => 26,  91 => 24,  89 => 23,  85 => 22,  79 => 19,  73 => 15,  67 => 13,  65 => 12,  60 => 10,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"card-body card-block\">
        {{ form_start(form,{'attr':{'novalidate':'novalidate'}},{'attr':{'class':'form-horizontal'}}) }}
        <!-- Titre Field -->
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

", "planning_crud/_form.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024\\templates\\planning_crud\\_form.html.twig");
    }
}
