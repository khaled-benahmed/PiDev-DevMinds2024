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
    <style>
        /**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
        @page {
            margin: 0;
        }
        /** Define now the real margins of every page in the PDF **/
        body {
            margin: 3.5cm 1cm 2cm;
        }
        /** Define the header rules **/
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 3cm;
        }
        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2cm;
        }
    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    <div class=\"intro_price\" style=\"color: red;font-size: 5px;margin-left: 10px;margin-top: 10px\">
        <b>nutrifit</b>
    </div>
    <div style=\"font-size: 5px;margin-left: 10px\">
        Adresse : Esprit Technopole Ghazela Ariana</div>
    <div style=\"font-size: 5px;margin-left: 10px\">
        Numéro : +216 50 01 23</div>
    <div style=\"font-size: 5px;margin-left: 10px\">
        E-mail : nutrifit@gmail.com</div>

    <hr class=\"cmDEY eufYP cDHZq\" style=\"color: dimgray;width: 750px;\">
</header>

<footer></footer>
";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "</body>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "    <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo.png"), "html", null, true);
        echo "\" >
        <div class=\"row\">
            <div class=\"cat-cap\">
                <div class=\"about-caption\">
                    <div class=\"section-tittle section-tittle3 mb-35\" style=\"text-align: center;\">
                         <h4>
                            <span>Veuillez pratiquer cette activité</span>
                        </h4>
                        <div class=\"mb-65 pera-bottom\">
                            <p>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 59, $this->source); })()), "nomActivite", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                            <p>Durée : ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 60, $this->source); })()), "dureeActivite", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
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
        return array (  134 => 60,  130 => 59,  117 => 50,  107 => 49,  96 => 68,  94 => 49,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <style>
        /**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
        @page {
            margin: 0;
        }
        /** Define now the real margins of every page in the PDF **/
        body {
            margin: 3.5cm 1cm 2cm;
        }
        /** Define the header rules **/
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 3cm;
        }
        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2cm;
        }
    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    <div class=\"intro_price\" style=\"color: red;font-size: 5px;margin-left: 10px;margin-top: 10px\">
        <b>nutrifit</b>
    </div>
    <div style=\"font-size: 5px;margin-left: 10px\">
        Adresse : Esprit Technopole Ghazela Ariana</div>
    <div style=\"font-size: 5px;margin-left: 10px\">
        Numéro : +216 50 01 23</div>
    <div style=\"font-size: 5px;margin-left: 10px\">
        E-mail : nutrifit@gmail.com</div>

    <hr class=\"cmDEY eufYP cDHZq\" style=\"color: dimgray;width: 750px;\">
</header>

<footer></footer>
{% block body %}
    <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"{{ asset('img/logo/logo.png')}}\" >
        <div class=\"row\">
            <div class=\"cat-cap\">
                <div class=\"about-caption\">
                    <div class=\"section-tittle section-tittle3 mb-35\" style=\"text-align: center;\">
                         <h4>
                            <span>Veuillez pratiquer cette activité</span>
                        </h4>
                        <div class=\"mb-65 pera-bottom\">
                            <p>{{ activite.nomActivite }}</p>
                            <p>Durée : {{ activite.dureeActivite }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
</body>
", "activite_crud/pdfExport.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\activite_crud\\pdfExport.html.twig");
    }
}
