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

/* Abonnement/CreateAbonnement.html.twig */
class __TwigTemplate_a6502a92bf9ed6f13a809a597ee8eafe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Abonnement/CreateAbonnement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Abonnement/CreateAbonnement.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "Abonnement/CreateAbonnement.html.twig", 1);
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

        echo "Liste des abonnements";
        
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
        echo "<div class=\"col-sm-120 col-xl-60\">
    <div class=\"bg-light rounded h-100 p-4\">
        <h6 class=\"mb-4\">Abonnement</h6>
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Nom</label>
            <div class=\"col-sm-10\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom_a", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom_a", [], "any", false, false, false, 14), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Description</label>
            <div class=\"col-sm-10\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description_a", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description_a", [], "any", false, false, false, 22), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Prix (TND)</label>
            <div class=\"col-sm-10\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prix_a", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prix_a", [], "any", false, false, false, 29), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Date début</label>
            <div class=\"col-sm-10\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "date_debut_a", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "date_debut_a", [], "any", false, false, false, 36), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Date fin</label>
            <div class=\"col-sm-10\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "date_fin_a", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "date_fin_a", [], "any", false, false, false, 43), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Categorie</label>
            <div class=\"col-sm-10\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "categorieAbonnements", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "categorieAbonnements", [], "any", false, false, false, 51), 'errors');
        echo "
            </div>
        </div>

        <br>
        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Read_Back_Abonnement");
        echo "\" class=\"mt-2\" >Liste des abonnement</a>
        <br>
        <br>

        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
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
        return "Abonnement/CreateAbonnement.html.twig";
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
        return array (  186 => 60,  179 => 56,  171 => 51,  167 => 50,  157 => 43,  153 => 42,  144 => 36,  140 => 35,  131 => 29,  127 => 28,  118 => 22,  114 => 21,  104 => 14,  100 => 13,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Liste des abonnements{% endblock %}

{% block body %}
<div class=\"col-sm-120 col-xl-60\">
    <div class=\"bg-light rounded h-100 p-4\">
        <h6 class=\"mb-4\">Abonnement</h6>
        {{form_start(form,{'attr': {'novalidate': 'novalidate'}} )}}
        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Nom</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.nom_a,{ 'attr': {'class': 'form-control'} }) }}
                {{ form_errors(form.nom_a) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Description</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.description_a,{ 'attr': {'class': 'form-control'} }) }}
                {{ form_errors(form.description_a) }}
            </div>
        </div>
        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Prix (TND)</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.prix_a,{ 'attr': {'class': 'form-control'} }) }}
                {{ form_errors(form.prix_a) }}
            </div>
        </div>
        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Date début</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.date_debut_a,{ 'attr': {'class': 'form-control'} }) }}
                {{ form_errors(form.date_debut_a) }}
            </div>
        </div>
        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Date fin</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.date_fin_a,{ 'attr': {'class': 'form-control'} }) }}
                {{ form_errors(form.date_fin_a) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">Categorie</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.categorieAbonnements,{ 'attr': {'class': 'form-control'} }) }}
                {{ form_errors(form.categorieAbonnements) }}
            </div>
        </div>

        <br>
        <a href=\"{{path('Read_Back_Abonnement')}}\" class=\"mt-2\" >Liste des abonnement</a>
        <br>
        <br>

        {{form_end(form)}}
    </div>
</div>
{% endblock %}
", "Abonnement/CreateAbonnement.html.twig", "C:\\xampp\\htdocs\\PiDev-DevMinds2024\\templates\\abonnement\\CreateAbonnement.html.twig");
    }
}
