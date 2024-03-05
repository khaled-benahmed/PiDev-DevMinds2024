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

/* pdf_generator/index.html.twig */
class __TwigTemplate_9ae62422a02565acdfbdfa914784b68e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Plat</title>
</head>
<body>
<div style=\"margin: 0 auto;display: block;width: 500px;\">
    <table width=\"100%\" border=\"1\">
        <tr>
            <td colspan=\"2\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" style=\"width:200px;\">
            </td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Calories:</td>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["calories"]) || array_key_exists("calories", $context) ? $context["calories"] : (function () { throw new RuntimeError('Variable "calories" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <td>Prix:</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
    </table>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pdf_generator/index.html.twig";
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
        return array (  79 => 26,  71 => 21,  64 => 17,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Plat</title>
</head>
<body>
<div style=\"margin: 0 auto;display: block;width: 500px;\">
    <table width=\"100%\" border=\"1\">
        <tr>
            <td colspan=\"2\">
                <img src=\"{{imageSrc}}\" style=\"width:200px;\">
            </td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{nom}}</td>
        </tr>
        <tr>
            <td>Calories:</td>
            <td>{{calories}}</td>
        </tr>

        <tr>
            <td>Prix:</td>
            <td>{{prix}}</td>
        </tr>
    </table>
</div>
</body>
</html>", "pdf_generator/index.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\pdf_generator\\index.html.twig");
    }
}
