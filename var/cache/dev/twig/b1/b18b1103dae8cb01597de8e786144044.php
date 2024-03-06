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

/* reclamation_back/index.html.twig */
class __TwigTemplate_1301cfadb0d60b3f6caee94e59d5dd68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'notify' => [$this, 'block_notify'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reclamation_back/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "        <!-- Fontfaces CSS-->
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/font-face.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">


        <!-- Vendor CSS-->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Calendar -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
        <style>
            #notificationContainer {
                position: fixed;
                left: 85%;
                transform: translate(-50%, -50%);
                background: linear-gradient(to right, #00b09b, #96c93d);
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                z-index: 9999;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
        </style>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 45
        echo "    Reclamation index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_notify($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notify"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notify"));

        // line 48
        echo "                        <div class=\"header-button\">
                            <div class=\"noti-wrap\" style=\"position: relative;left: 300px;\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["counterData"]) || array_key_exists("counterData", $context) ? $context["counterData"] : (function () { throw new RuntimeError('Variable "counterData" does not exist.', 52, $this->source); })()), "value", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["counterData"] ?? null), "reclamations", [], "any", true, true, false, 54) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["counterData"]) || array_key_exists("counterData", $context) ? $context["counterData"] : (function () { throw new RuntimeError('Variable "counterData" does not exist.', 54, $this->source); })()), "reclamations", [], "any", false, false, false, 54)))) {
            // line 55
            echo "                                         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["counterData"]) || array_key_exists("counterData", $context) ? $context["counterData"] : (function () { throw new RuntimeError('Variable "counterData" does not exist.', 55, $this->source); })()), "reclamations", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 56
                echo "                                        <div class=\"mess__item\">
                                            <div class=\"content\">
                                                <h6>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nomUserReclamation", [], "any", false, false, false, 58), "html", null, true);
                echo " </h6>
                                                <p>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "textReclamation", [], "any", false, false, false, 59), "html", null, true);
                echo "</p>
                                                <span class=\"time\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateReclamation", [], "any", false, false, false, 60), "html", null, true);
                echo " </span>
                                            </div>
                            <form action=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_auto_response", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" method=\"post\" class=\"d-inline\">
                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Respond</button>
                            </form>
                                        </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                            ";
        }
        // line 68
        echo "                                    </div>
                                </div>
                            </div>

                        </div>
                
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "<div class=\"container\">
   <!-- <div id=\"notificationContainer\"></div> -->
        <div class=\"reclamation-index\">
        <h1 class=\"mb-4\">Reclamation index</h1>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <form class=\"d-flex\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control me-2\" placeholder=\"Search...\">
                </form>
            </div>
            <div class=\"col-sm-4\">
                <button id=\"sortButton\" class=\"btn btn-primary\">Sort by Date</button>
            </div>
            <div class=\"col-sm-4\">
                <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations_pdf");
        echo "\" class=\"btn btn-success\">Pdf</a>
            </div>
        </div>
        <br><br>
        

        
        <table class=\"table table-striped\" id=\"reclamationsTable\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>NomUserReclamation</th>
                    <th>TextReclamation</th>
                    <th>DateReclamation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 108, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 109
            echo "                    <tr>
                        <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                        <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "NomUserReclamation", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                        <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "textReclamation", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                        <td>";
            // line 113
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateReclamation", [], "any", false, false, false, 113)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateReclamation", [], "any", false, false, false, 113), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm mr-1\">Show</a>
                            <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm mr-1\">Edit</a>
                            <form action=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_auto_response", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            echo "\" method=\"post\" class=\"d-inline\">
                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Respond</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 123
            echo "                    <tr>
                        <td colspan=\"5\">No records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_new");
        echo "\" class=\"btn btn-success\">Create new</a>
    </div>
    </div>
    <br><br>
    
    <div class=\"container\">
        <div class=\"reclamation-index\" style=\"width: 1000px;\">
            <canvas id=\"reclamationChart\" width=\"200\" height=\"100\"></canvas>
        </div>
    </div>
    

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        // Define the reclamationData variable here or pass it from PHP
        var reclamationData = ";
        // line 147
        echo json_encode((isset($context["reclamationData"]) || array_key_exists("reclamationData", $context) ? $context["reclamationData"] : (function () { throw new RuntimeError('Variable "reclamationData" does not exist.', 147, $this->source); })()));
        echo ";

        // Call the renderChart function after defining reclamationData
        renderChart(reclamationData);

        // Display notification for new reclamations
       // displayNewReclamationsNotification(";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["counterData"]) || array_key_exists("counterData", $context) ? $context["counterData"] : (function () { throw new RuntimeError('Variable "counterData" does not exist.', 153, $this->source); })()), "value", [], "any", false, false, false, 153), "html", null, true);
        echo ");
    });

    function renderChart(reclamationData) {
        var ctx = document.getElementById('reclamationChart').getContext('2d');
        var chartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], 
            datasets: [{
                label: 'Number of Reclamations',
                data: reclamationData,  
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        suggestedMin: 0, // Minimum value for y-axis
                        suggestedMax: Math.max(...reclamationData) + 5 // Maximum value for y-axis (add some padding)
                    }
                }]
            }
        }
        });
    }
    function displayNewReclamationsNotification(newReclamationsCount) {
        if (newReclamationsCount > 0) {
            var notificationContainer = document.getElementById('notificationContainer');
            var notification = document.createElement('div');
            notification.classList.add('notification');
            notification.textContent = `You have \${newReclamationsCount} new reclamation(s)`;
            notificationContainer.appendChild(notification);
            setTimeout(function() {
                notification.remove();
            }, 5000); // Remove the notification after 5 seconds
        }
    }
    
</script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        // Your code here
        \$('#searchInput').on('input', function() {
            // Get the search string
            var searchString = \$(this).val();
            console.log(searchString)
            
            // Send AJAX request with the search string
            \$.ajax({
                type: 'GET',
                url: '";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_index");
        echo "',
                data: { search: searchString }, // Include the search string in the data
                success: function(response) {
                    // Update table content with filtered/sorted data
                    updateTable(response.reclamations);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
        \$('#sortButton').click(function() {
        // Get the current search string
        var searchString = \$('#searchInput').val();
        
        // Send AJAX request to the controller with sort parameter
        \$.ajax({
            type: 'GET',
            url: '";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_index");
        echo "',
            data: { search: searchString, sort: 'date' }, // Add sort parameter
            success: function(response) {
                // Update table content with filtered/sorted data
                updateTable(response.reclamations);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
     \$('.noti__item').on('click', function() {
        \$.ajax({
            type: 'POST',
            url:'";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resetCounter");
        echo "', // Update this URL to match your route
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    \$('.quantity').text('0'); // Update the notification counter to 0
                }
            }
        });
    });
    });
// Function to update table content
function updateTable(reclamations) {
    var tableBody = \$('#reclamationsTable tbody');
    tableBody.empty(); // Clear existing table rows

    // Add new rows based on filtered/sorted reclamations
    reclamations.forEach(function(reclamation) {
        var row = '<tr>' +
            '<td>' + reclamation.id + '</td>' +
            '<td>' + reclamation.NomUserReclamation + '</td>' +
            '<td>' + reclamation.textReclamation + '</td>' +
            '<td>' + (reclamation.dateReclamation ? reclamation.dateReclamation : '') + '</td>' +
            '<td>' +
            '<a href=\"";
        // line 265
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_show", ["id" => "RECLAMATION_ID"]);
        echo "\" class=\"btn btn-info btn-sm mr-1\">Show</a>' +
            '<a href=\"";
        // line 266
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_edit", ["id" => "RECLAMATION_ID"]);
        echo "\" class=\"btn btn-primary btn-sm mr-1\">Edit</a>' +
            '<form action=\"";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_auto_response", ["id" => "RECLAMATION_ID"]);
        echo "\" method=\"post\" class=\"d-inline\">' +
            '<button type=\"submit\" class=\"btn btn-success btn-sm\">Respond</button>' +
            '</form>' +
            '</td>' +
            '</tr>';

        // Replace placeholder 'RECLAMATION_ID' with actual reclamation ID
        row = row.replace(/RECLAMATION_ID/g, reclamation.id);

        tableBody.append(row);
    });
}

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
        return "reclamation_back/index.html.twig";
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
        return array (  519 => 267,  515 => 266,  511 => 265,  485 => 242,  468 => 228,  447 => 210,  387 => 153,  378 => 147,  358 => 130,  353 => 127,  344 => 123,  333 => 117,  329 => 116,  325 => 115,  320 => 113,  316 => 112,  312 => 111,  308 => 110,  305 => 109,  300 => 108,  279 => 90,  263 => 76,  253 => 75,  237 => 68,  234 => 67,  223 => 62,  218 => 60,  214 => 59,  210 => 58,  206 => 56,  201 => 55,  199 => 54,  194 => 52,  188 => 48,  178 => 47,  167 => 45,  157 => 44,  125 => 22,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  103 => 15,  99 => 14,  95 => 13,  88 => 9,  82 => 6,  78 => 5,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
    {% block stylesheets %}
        <!-- Fontfaces CSS-->
        <link href=\"{{ asset('./BackOffice/css/font-face.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css')}}\" rel=\"stylesheet\" media=\"all\">


        <!-- Vendor CSS-->
        <link href=\"{{ asset('./BackOffice/vendor/animsition/animsition.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/wow/animate.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/css-hamburgers/hamburgers.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/slick/slick.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/select2/select2.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"{{ asset('./BackOffice/css/theme.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Calendar -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
        <style>
            #notificationContainer {
                position: fixed;
                left: 85%;
                transform: translate(-50%, -50%);
                background: linear-gradient(to right, #00b09b, #96c93d);
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                z-index: 9999;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
        </style>

    {% endblock %}
{% block title %}
    Reclamation index
{% endblock %}
     {% block notify %}
                        <div class=\"header-button\">
                            <div class=\"noti-wrap\" style=\"position: relative;left: 300px;\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">{{counterData.value}}</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        {% if counterData.reclamations is defined and counterData.reclamations is iterable %}
                                         {% for reclamation in counterData.reclamations %}
                                        <div class=\"mess__item\">
                                            <div class=\"content\">
                                                <h6>{{ reclamation.nomUserReclamation }} </h6>
                                                <p>{{ reclamation.textReclamation }}</p>
                                                <span class=\"time\">{{ reclamation.dateReclamation }} </span>
                                            </div>
                            <form action=\"{{ path('app_reclamation_auto_response', {'id': reclamation.id}) }}\" method=\"post\" class=\"d-inline\">
                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Respond</button>
                            </form>
                                        </div>
                                            {% endfor %}
                                            {% endif %}
                                    </div>
                                </div>
                            </div>

                        </div>
                
    {% endblock %}
{% block body %}
<div class=\"container\">
   <!-- <div id=\"notificationContainer\"></div> -->
        <div class=\"reclamation-index\">
        <h1 class=\"mb-4\">Reclamation index</h1>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <form class=\"d-flex\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control me-2\" placeholder=\"Search...\">
                </form>
            </div>
            <div class=\"col-sm-4\">
                <button id=\"sortButton\" class=\"btn btn-primary\">Sort by Date</button>
            </div>
            <div class=\"col-sm-4\">
                <a href=\"{{ path('reclamations_pdf') }}\" class=\"btn btn-success\">Pdf</a>
            </div>
        </div>
        <br><br>
        

        
        <table class=\"table table-striped\" id=\"reclamationsTable\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>NomUserReclamation</th>
                    <th>TextReclamation</th>
                    <th>DateReclamation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for reclamation in reclamations %}
                    <tr>
                        <td>{{ reclamation.id }}</td>
                        <td>{{ reclamation.NomUserReclamation }}</td>
                        <td>{{ reclamation.textReclamation }}</td>
                        <td>{{ reclamation.dateReclamation ? reclamation.dateReclamation|date('Y-m-d') : '' }}</td>
                        <td>
                            <a href=\"{{ path('app_reclamation_back_show', {'id': reclamation.id}) }}\" class=\"btn btn-info btn-sm mr-1\">Show</a>
                            <a href=\"{{ path('app_reclamation_back_edit', {'id': reclamation.id}) }}\" class=\"btn btn-primary btn-sm mr-1\">Edit</a>
                            <form action=\"{{ path('app_reclamation_auto_response', {'id': reclamation.id}) }}\" method=\"post\" class=\"d-inline\">
                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Respond</button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">No records found</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_reclamation_back_new') }}\" class=\"btn btn-success\">Create new</a>
    </div>
    </div>
    <br><br>
    
    <div class=\"container\">
        <div class=\"reclamation-index\" style=\"width: 1000px;\">
            <canvas id=\"reclamationChart\" width=\"200\" height=\"100\"></canvas>
        </div>
    </div>
    

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        // Define the reclamationData variable here or pass it from PHP
        var reclamationData = {{ reclamationData|json_encode|raw }};

        // Call the renderChart function after defining reclamationData
        renderChart(reclamationData);

        // Display notification for new reclamations
       // displayNewReclamationsNotification({{ counterData.value }});
    });

    function renderChart(reclamationData) {
        var ctx = document.getElementById('reclamationChart').getContext('2d');
        var chartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], 
            datasets: [{
                label: 'Number of Reclamations',
                data: reclamationData,  
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        suggestedMin: 0, // Minimum value for y-axis
                        suggestedMax: Math.max(...reclamationData) + 5 // Maximum value for y-axis (add some padding)
                    }
                }]
            }
        }
        });
    }
    function displayNewReclamationsNotification(newReclamationsCount) {
        if (newReclamationsCount > 0) {
            var notificationContainer = document.getElementById('notificationContainer');
            var notification = document.createElement('div');
            notification.classList.add('notification');
            notification.textContent = `You have \${newReclamationsCount} new reclamation(s)`;
            notificationContainer.appendChild(notification);
            setTimeout(function() {
                notification.remove();
            }, 5000); // Remove the notification after 5 seconds
        }
    }
    
</script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        // Your code here
        \$('#searchInput').on('input', function() {
            // Get the search string
            var searchString = \$(this).val();
            console.log(searchString)
            
            // Send AJAX request with the search string
            \$.ajax({
                type: 'GET',
                url: '{{ path('app_reclamation_back_index') }}',
                data: { search: searchString }, // Include the search string in the data
                success: function(response) {
                    // Update table content with filtered/sorted data
                    updateTable(response.reclamations);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
        \$('#sortButton').click(function() {
        // Get the current search string
        var searchString = \$('#searchInput').val();
        
        // Send AJAX request to the controller with sort parameter
        \$.ajax({
            type: 'GET',
            url: '{{ path('app_reclamation_back_index') }}',
            data: { search: searchString, sort: 'date' }, // Add sort parameter
            success: function(response) {
                // Update table content with filtered/sorted data
                updateTable(response.reclamations);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
     \$('.noti__item').on('click', function() {
        \$.ajax({
            type: 'POST',
            url:'{{ path('app_resetCounter') }}', // Update this URL to match your route
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    \$('.quantity').text('0'); // Update the notification counter to 0
                }
            }
        });
    });
    });
// Function to update table content
function updateTable(reclamations) {
    var tableBody = \$('#reclamationsTable tbody');
    tableBody.empty(); // Clear existing table rows

    // Add new rows based on filtered/sorted reclamations
    reclamations.forEach(function(reclamation) {
        var row = '<tr>' +
            '<td>' + reclamation.id + '</td>' +
            '<td>' + reclamation.NomUserReclamation + '</td>' +
            '<td>' + reclamation.textReclamation + '</td>' +
            '<td>' + (reclamation.dateReclamation ? reclamation.dateReclamation : '') + '</td>' +
            '<td>' +
            '<a href=\"{{ path('app_reclamation_back_show', {'id': 'RECLAMATION_ID'}) }}\" class=\"btn btn-info btn-sm mr-1\">Show</a>' +
            '<a href=\"{{ path('app_reclamation_back_edit', {'id': 'RECLAMATION_ID'}) }}\" class=\"btn btn-primary btn-sm mr-1\">Edit</a>' +
            '<form action=\"{{ path('app_reclamation_auto_response', {'id': 'RECLAMATION_ID'}) }}\" method=\"post\" class=\"d-inline\">' +
            '<button type=\"submit\" class=\"btn btn-success btn-sm\">Respond</button>' +
            '</form>' +
            '</td>' +
            '</tr>';

        // Replace placeholder 'RECLAMATION_ID' with actual reclamation ID
        row = row.replace(/RECLAMATION_ID/g, reclamation.id);

        tableBody.append(row);
    });
}

</script>

{% endblock %}
", "reclamation_back/index.html.twig", "C:\\Users\\khaled\\Desktop\\PiDev-DevMinds2024-master\\PiDev-DevMinds2024-master\\templates\\reclamation_back\\index.html.twig");
    }
}
