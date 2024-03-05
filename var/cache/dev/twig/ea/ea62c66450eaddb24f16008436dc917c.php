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

/* security/login.html.twig */
class __TwigTemplate_225717327a9720180430fa2f45ca3f83 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
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
        echo "    <section class=\"container my-3\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 10
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card border-0 bg-dark text-white shadow\">
                    <div class=\"card-body\">
                        ";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageKey", [], "any", false, false, false, 20) == "Votre compte a été bloqué par l'administrateur. Veuillez le contacter pour plus d'informations.")) {
                // line 21
                echo "                                <div class=\"alert alert-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), "html", null, true);
                echo "</div>
                            ";
            } else {
                // line 23
                echo "                                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageKey", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageData", [], "any", false, false, false, 23), "security"), "html", null, true);
                echo "</div>
                            ";
            }
            // line 25
            echo "                        ";
        }
        // line 26
        echo "
                        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                            <div class=\"mb-3 text-white\">
                                Vous êtes connecté(e) comme ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "userIdentifier", [], "any", false, false, false, 29), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"text-danger\">Déconnexion</a>
                            </div>
                        ";
        }
        // line 32
        echo "
                        <h1 class=\"h3 mb-3 font-weight-normal\">Sign in</h1>
                        <form method=\"post\">
                            <label for=\"inputEmail\" class=\"visually-hidden\">Email</label>
                            <input type=\"email\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control bg-dark text-white border-secondary mb-3\" placeholder=\"Email\" autocomplete=\"email\" required autofocus>
                            <label for=\"inputPassword\" class=\"visually-hidden\">Password</label>
                            <div class=\"input-group mb-3\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control bg-dark text-white border-secondary\" placeholder=\"Mot de passe\" autocomplete=\"current-password\" required>
                                <button type=\"button\" id=\"togglePassword\" class=\"btn btn-outline-secondary\"><i id=\"eyeIcon\" class=\"bi bi-eye\"></i></button>
                            </div>

                            <div class=\"mb-3 form-check\">
                                <input type=\"checkbox\" id=\"rememberMe\" name=\"_remember_me\" checked class=\"form-check-input\">
                                <label class=\"form-check-label\" for=\"rememberMe\">Remember Me</label>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                            <div class=\"d-grid gap-2\">
                                <button class=\"btn btn-lg btn-danger\" type=\"submit\">
                                    Sign in
                                </button>
                                <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-lg btn-secondary\">Cancel</a>
                            </div>
                        </form>
                        <div class=\"text-center mt-3\">
                            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"text-white\">Forgot your password ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('inputPassword');
            var eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  200 => 58,  193 => 54,  184 => 48,  169 => 36,  163 => 32,  155 => 29,  152 => 28,  150 => 27,  147 => 26,  144 => 25,  138 => 23,  132 => 21,  129 => 20,  127 => 19,  120 => 14,  114 => 13,  105 => 10,  100 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
    <section class=\"container my-3\">
        {% for type, messages in app.flashes() %}
            {% for message in messages %}
                <div class=\"alert alert-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card border-0 bg-dark text-white shadow\">
                    <div class=\"card-body\">
                        {% if error %}
                            {% if error.messageKey == 'Votre compte a été bloqué par l\\'administrateur. Veuillez le contacter pour plus d\\'informations.' %}
                                <div class=\"alert alert-warning\">{{ error.messageKey }}</div>
                            {% else %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}
                        {% endif %}

                        {% if app.user %}
                            <div class=\"mb-3 text-white\">
                                Vous êtes connecté(e) comme {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\" class=\"text-danger\">Déconnexion</a>
                            </div>
                        {% endif %}

                        <h1 class=\"h3 mb-3 font-weight-normal\">Sign in</h1>
                        <form method=\"post\">
                            <label for=\"inputEmail\" class=\"visually-hidden\">Email</label>
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control bg-dark text-white border-secondary mb-3\" placeholder=\"Email\" autocomplete=\"email\" required autofocus>
                            <label for=\"inputPassword\" class=\"visually-hidden\">Password</label>
                            <div class=\"input-group mb-3\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control bg-dark text-white border-secondary\" placeholder=\"Mot de passe\" autocomplete=\"current-password\" required>
                                <button type=\"button\" id=\"togglePassword\" class=\"btn btn-outline-secondary\"><i id=\"eyeIcon\" class=\"bi bi-eye\"></i></button>
                            </div>

                            <div class=\"mb-3 form-check\">
                                <input type=\"checkbox\" id=\"rememberMe\" name=\"_remember_me\" checked class=\"form-check-input\">
                                <label class=\"form-check-label\" for=\"rememberMe\">Remember Me</label>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                            <div class=\"d-grid gap-2\">
                                <button class=\"btn btn-lg btn-danger\" type=\"submit\">
                                    Sign in
                                </button>
                                <a href=\"{{ path('app_register')}}\" class=\"btn btn-lg btn-secondary\">Cancel</a>
                            </div>
                        </form>
                        <div class=\"text-center mt-3\">
                            <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-white\">Forgot your password ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('inputPassword');
            var eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            }
        });
    </script>
{% endblock %}", "security/login.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024 (1)\\piDev-DevMinds2024\\templates\\security\\login.html.twig");
    }
}
