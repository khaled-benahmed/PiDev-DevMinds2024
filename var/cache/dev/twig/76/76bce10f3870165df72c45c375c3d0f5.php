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

/* activite_crud/form.html.twig */
class __TwigTemplate_686b5723fffa49bb505a4ea66fc73137 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite_crud/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite_crud/form.html.twig"));

        // line 1
        echo "
<div class=\"card-body card-block\">
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nomActivite", [], "any", false, false, false, 6), 'label', ["label" => "Nom :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nomActivite", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 10
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nomActivite", [], "any", false, false, false, 10), 'errors'))) {
            // line 11
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nomActivite", [], "any", false, false, false, 11), 'errors');
            echo "</small>
            ";
        }
        // line 13
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "dureeActivite", [], "any", false, false, false, 17), 'label', ["label" => "Durée :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "dureeActivite", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 21
        if (twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dureeActivite", [], "any", false, false, false, 21), 'errors'))) {
            // line 22
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "dureeActivite", [], "any", false, false, false, 22), 'errors');
            echo "</small>
            ";
        }
        // line 24
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "difficulteActivite", [], "any", false, false, false, 28), 'label', ["label" => "Difficulté :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "difficulteActivite", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 32
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "difficulteActivite", [], "any", false, false, false, 32), 'errors'))) {
            // line 33
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "difficulteActivite", [], "any", false, false, false, 33), 'errors');
            echo "</small>
            ";
        }
        // line 35
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "imageActivite", [], "any", false, false, false, 39), 'label', ["label" => "Image :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "imageActivite", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "
            ";
        // line 43
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "imageActivite", [], "any", false, false, false, 43), 'errors'))) {
            // line 44
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "imageActivite", [], "any", false, false, false, 44), 'errors');
            echo "</small>
            ";
        }
        // line 46
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "descriptionActivite", [], "any", false, false, false, 50), 'label', ["label" => "Description :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "descriptionActivite", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 54
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "descriptionActivite", [], "any", false, false, false, 54), 'errors'))) {
            // line 55
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "descriptionActivite", [], "any", false, false, false, 55), 'errors');
            echo "</small>
            ";
        }
        // line 57
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "URLResources", [], "any", false, false, false, 61), 'label', ["label" => "URL des Ressources :"]);
        echo "
        </div>
        <div class=\"col-12 col-md-9\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "URLResources", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez l'URL des ressources associées"]]);
        echo "
            ";
        // line 65
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "URLResources", [], "any", false, false, false, 65), 'errors'))) {
            // line 66
            echo "                <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "URLResources", [], "any", false, false, false, 66), 'errors');
            echo "</small>
            ";
        }
        // line 68
        echo "        </div>
    </div>

</div>
<div align=\"center\" class=\"card-footer\">
    <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><i class=\"zmdi zmdi-plus\"></i>";
        // line 73
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 73, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
    <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><a style=\"color:white;\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_crud_index");
        echo "\">Consulter Liste</a></button>
</div>
";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
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
        return "activite_crud/form.html.twig";
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
        return array (  207 => 76,  202 => 74,  198 => 73,  191 => 68,  185 => 66,  183 => 65,  179 => 64,  173 => 61,  167 => 57,  161 => 55,  159 => 54,  155 => 53,  149 => 50,  143 => 46,  137 => 44,  135 => 43,  131 => 42,  125 => 39,  119 => 35,  113 => 33,  111 => 32,  107 => 31,  101 => 28,  95 => 24,  89 => 22,  87 => 21,  83 => 20,  77 => 17,  71 => 13,  65 => 11,  63 => 10,  59 => 9,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"card-body card-block\">
    {{ form_start(form,{'attr':{'novalidate':'novalidate'}},{'attr':{'class':'form-horizontal'}}) }}
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.nomActivite,\"Nom :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.nomActivite,{'attr':{'class':'form-control'}})}}
            {% if form_errors(form.nomActivite) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.nomActivite) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.dureeActivite,\"Durée :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.dureeActivite,{'attr':{'class':'form-control'}})}}
            {% if form_errors(form.dureeActivite) is empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.dureeActivite) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.difficulteActivite,\"Difficulté :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.difficulteActivite,{'attr':{'class':'form-control'}})}}
            {% if form_errors(form.difficulteActivite) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.difficulteActivite) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.imageActivite,\"Image :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.imageActivite,{'attr':{'class':'form-input'}})}}
            {% if form_errors(form.imageActivite) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.imageActivite) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.descriptionActivite,\"Description :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.descriptionActivite,{'attr':{'class':'form-control'}})}}
            {% if form_errors(form.descriptionActivite) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.descriptionActivite) }}</small>
            {% endif %}
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col col-md-3\">
            {{ form_label(form.URLResources,\"URL des Ressources :\") }}
        </div>
        <div class=\"col-12 col-md-9\">
            {{ form_widget(form.URLResources, {'attr': {'class': 'form-control', 'placeholder': 'Entrez l\\'URL des ressources associées'}}) }}
            {% if form_errors(form.URLResources) is not empty %}
                <small class=\"form-text text-muted\">{{ form_errors(form.URLResources) }}</small>
            {% endif %}
        </div>
    </div>

</div>
<div align=\"center\" class=\"card-footer\">
    <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><i class=\"zmdi zmdi-plus\"></i>{{ button_label|default('Ajouter') }}</button>
    <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\"><a style=\"color:white;\" href=\"{{ path('app_activite_crud_index') }}\">Consulter Liste</a></button>
</div>
{{ form_end(form) }}
</div>







", "activite_crud/form.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\activite_crud\\form.html.twig");
    }
}
