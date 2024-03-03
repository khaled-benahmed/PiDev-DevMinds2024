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

/* activite_crud/pdfExport.html.twig */
class __TwigTemplate_908b947c4e55bcc7d25de6947f575e99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite_crud/pdfExport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite_crud/pdfExport.html.twig"));

        // line 1
        echo "<head>
\t<style>
\t\t/**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
\t\t@page {
\t\t\tmargin: 0;
\t\t}
\t\t/** Define now the real margins of every page in the PDF **/
\t\tbody {
\t\t\tmargin: 3.5cm 1cm 2cm;
\t\t}
\t\t/** Define the header rules **/
\t\theader {
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\tright: 0;
\t\t\theight: 3cm;
\t\t}
\t\t/** Define the footer rules **/
\t\tfooter {
\t\t\tposition: fixed;
\t\t\tbottom: 0;
\t\t\tleft: 0;
\t\t\tright: 0;
\t\t\theight: 2cm;
\t\t}
\t</style>
</head>
<body>
\t<!-- Define header and footer blocks before your content -->
\t<header>
\t\t<div class=\"intro_price\" style=\"color: red;font-size: 5px;margin-left: 10px;margin-top: 10px\">
\t\t\t<b>EnergyBox</b>
\t\t</div>
\t\t<div style=\"font-size: 5px;margin-left: 10px\">
\t\t\tAdresse : Esprit Technopole Ghazela Ariana</div>
\t\t<div style=\"font-size: 5px;margin-left: 10px\">
\t\t\tNuméro : +216 50 01 23</div>
\t\t<div style=\"font-size: 5px;margin-left: 10px\">
\t\t\tE-mail : EnergyBox@gmail.com</div>

\t\t<hr class=\"cmDEY eufYP cDHZq\" style=\"color: dimgray;width: 750px;\">
\t</header>

\t<footer></footer>
\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "\t\t<section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/LogoGymBlack.png"), "html", null, true);
        echo "\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png);\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"cat-cap\">
\t\t\t\t\t<div class=\"about-caption\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<div class=\"section-tittle section-tittle3 mb-35\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t<span>Veuillez pratique cet activité</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"mb-65 pera-bottom\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 60, $this->source); })()), "nomActivite", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<p>Durée :
\t\t\t\t\t\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 62, $this->source); })()), "dureeActivite", [], "any", false, false, false, 62), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<p>Tenue :
\t\t\t\t\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 64, $this->source); })()), "tenueActivite", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activite_crud/pdfExport.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  137 => 64,  132 => 62,  127 => 60,  113 => 50,  94 => 49,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
\t<style>
\t\t/**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
\t\t@page {
\t\t\tmargin: 0;
\t\t}
\t\t/** Define now the real margins of every page in the PDF **/
\t\tbody {
\t\t\tmargin: 3.5cm 1cm 2cm;
\t\t}
\t\t/** Define the header rules **/
\t\theader {
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\tright: 0;
\t\t\theight: 3cm;
\t\t}
\t\t/** Define the footer rules **/
\t\tfooter {
\t\t\tposition: fixed;
\t\t\tbottom: 0;
\t\t\tleft: 0;
\t\t\tright: 0;
\t\t\theight: 2cm;
\t\t}
\t</style>
</head>
<body>
\t<!-- Define header and footer blocks before your content -->
\t<header>
\t\t<div class=\"intro_price\" style=\"color: red;font-size: 5px;margin-left: 10px;margin-top: 10px\">
\t\t\t<b>EnergyBox</b>
\t\t</div>
\t\t<div style=\"font-size: 5px;margin-left: 10px\">
\t\t\tAdresse : Esprit Technopole Ghazela Ariana</div>
\t\t<div style=\"font-size: 5px;margin-left: 10px\">
\t\t\tNuméro : +216 50 01 23</div>
\t\t<div style=\"font-size: 5px;margin-left: 10px\">
\t\t\tE-mail : EnergyBox@gmail.com</div>

\t\t<hr class=\"cmDEY eufYP cDHZq\" style=\"color: dimgray;width: 750px;\">
\t</header>

\t<footer></footer>
\t{% block body %}
\t\t<section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"{{ asset('img/logo/LogoGymBlack.png')}}\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png);\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"cat-cap\">
\t\t\t\t\t<div class=\"about-caption\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<div class=\"section-tittle section-tittle3 mb-35\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t<span>Veuillez pratique cet activité</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"mb-65 pera-bottom\">
\t\t\t\t\t\t\t\t\t<p>{{ activite.nomActivite }}</p>
\t\t\t\t\t\t\t\t\t<p>Durée :
\t\t\t\t\t\t\t\t\t\t{{ activite.dureeActivite }}</p>
\t\t\t\t\t\t\t\t\t<p>Tenue :
\t\t\t\t\t\t\t\t\t\t{{ activite.tenueActivite }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t{% endblock %}
", "activite_crud/pdfExport.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024\\templates\\activite_crud\\pdfExport.html.twig");
    }
}
