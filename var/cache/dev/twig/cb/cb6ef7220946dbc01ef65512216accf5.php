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

/* main/main.html.twig */
class __TwigTemplate_caced2734a9bf6c7d1ce42e09211ae50 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/main.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <main>

        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"images/logo_my_eDR-removebg-preview.png\" width=\"25%\" height=\"auto\" >
                    <span>My eDR</span>
                </a>


                <div class=\"d-lg-none ms-auto me-4\">
                    <a href=\"#top\" class=\"navbar-icon bi-person smoothscroll\"></a>
                </div>

                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-lg-5 me-lg-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_1\">Accueil</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_2\">Nos Experts Médicaux</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_3\">Comment ça fonctionne</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_4\">FAQs</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_5\">Contact</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarLightDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Pages</a>

                            <ul class=\"dropdown-menu dropdown-menu-light\" aria-labelledby=\"navbarLightDropdownMenuLink\">
                                <li><a class=\"dropdown-item\" href=\"topics-listing.html\">Topics Listing</a></li>

                                <li><a class=\"dropdown-item\" href=\"contact.html\">Contact Form</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class=\"d-none d-lg-block\">
                        <a href=\"profil.html\" class=\"navbar-icon bi-person smoothscroll\"></a>
                    </div>
                </div>
            </div>
        </nav>


        <section class=\"hero-section d-flex justify-content-center align-items-center\" id=\"section_1\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-8 col-12 mx-auto\">
                        <h1 class=\"text-white text-center\">Votre santé, votre contrôle. Rendez-vous, consultations, tout à portée de main.</h1>

                        <h6 class=\"text-center\">Découvrez une nouvelle approche de la santé.
                            L'application qui rend votre bien-être accessible.</h6>

                        <form method=\"get\" class=\"custom-form mt-4 pt-2 mb-lg-0 mb-5\" role=\"search\">
                            <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text bi-search\" id=\"basic-addon1\">

                                    </span>

                                <input name=\"keyword\" type=\"search\" class=\"form-control\" id=\"keyword\" placeholder=\"...\" aria-label=\"Search\">

                                <button type=\"submit\" class=\"form-control\">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class=\"featured-section\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">

                    <div class=\"col-lg-4 col-12 mb-4 mb-lg-0\" style=\"width: 25% !important;\">
                        <div class=\"custom-block bg-white shadow-lg\">
                            <a href=\"topics-detail.html\">
                                <div class=\"d-flex\">
                                    <div>
                                        <h5 class=\"mb-2\">Trouvez Votre Médecin Idéal</h5>

                                        <p class=\"mb-0\">Que vous cherchiez un spécialiste ou un médecin généraliste, trouvez le professionnel adapté à vos besoins et prenez rendez-vous en quelques clics.</p>
                                    </div>

                                    <!--span class=\"badge bg-design rounded-pill ms-auto\">14</!--span-->
                                </div>

                                <img src=\"images/contact-img.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">
                            </a>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-12\" style=\"width: 25% !important;\">
                        <div class=\"custom-block custom-block-overlay\">
                            <div class=\"d-flex flex-column h-100\">
                                <img src=\"images/corp.jpeg\" class=\"custom-block-image img-fluid\" alt=\"\">

                                <div class=\"custom-block-overlay-text d-flex\">
                                    <div>
                                        <h5 class=\"text-white mb-2\">Diagnostic Simplifié</h5>

                                        <p class=\"text-white\">Utilisez notre outil de diagnostic simplifié.</p>

                                        <!--a href=\"topics-detail.html\" class=\"btn custom-btn mt-2 mt-lg-3\">Learn More</!--a-->
                                    </div>

                                    <!--span class=\"badge bg-finance rounded-pill ms-auto\">25</!--span-->
                                </div>

                                <div class=\"section-overlay\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-12 mb-4 mb-lg-0\" style=\"width: 25% !important;\">
                        <div class=\"custom-block bg-white shadow-lg\">
                            <a href=\"topics-detail.html\">
                                <div class=\"d-flex\">
                                    <div>
                                        <h5 class=\"mb-2\">Poster une Donation</h5>

                                        <p class=\"mb-0\">Postez une donation pour soutenir d'autres utilisateurs dans leur quête d'informations médicales.</p>
                                    </div>

                                    <!--span class=\"badge bg-design rounded-pill ms-auto\">14</!--span-->
                                </div>

                                <img src=\"images/logo.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class=\"explore-section section-padding\" id=\"section_2\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-12 text-center\">
                        <h1 class=\"mb-4\">Rencontrez nos Experts Médicaux</h1>
                    </div>

                </div>
            </div>

            <div class=\"container-fluid\">
                <div class=\"row\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"design-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#design-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"design-tab-pane\" aria-selected=\"true\">Pédiatrie</button>
                        </li>

                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"marketing-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#marketing-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"marketing-tab-pane\" aria-selected=\"false\">Cardiologie</button>
                        </li>

                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"finance-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#finance-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"finance-tab-pane\" aria-selected=\"false\">Gynécologie</button>
                        </li>

                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"music-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#music-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"music-tab-pane\" aria-selected=\"false\">Dermatologie</button>
                        </li>

                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"education-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#education-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"education-tab-pane\" aria-selected=\"false\">Psychiatrie</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-12\">
                        <div class=\"tab-content\" id=\"myTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"design-tab-pane\" role=\"tabpanel\" aria-labelledby=\"design-tab\" tabindex=\"0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-0\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Dr. Marie Dubois</h5>

                                                        <p class=\"mb-0\">Spécialiste des soins pédiatriques, le Dr. Dubois apporte son expertise aux parents soucieux de la santé de leurs enfants. Rencontrez-la pour des conseils avisés sur la croissance et le développement des plus jeunes.</p>
                                                    </div>


                                                </div>

                                                <img src=\"images/doc3.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-0\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Pr. Thomas Lefevre</h5>

                                                        <p class=\"mb-0\">Consultez le Pr. Lefevre pour des solutions personnalisées en dermatologie. Des problèmes de peau courants aux préoccupations esthétiques, son expertise garantit des soins de qualité</p>
                                                    </div>



                                                </div>

                                                <img src=\"images/doc2.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Pr. Julien Martin</h5>

                                                        <p class=\"mb-0\">Le Pr. Martin, cardiologue émérite, vous accueille pour des consultations liées à la santé cardiovasculaire. Bénéficiez de son expérience pour des soins préventifs et des recommandations personnalisées.</p>
                                                    </div>


                                                </div>

                                                <img src=\"images/doc1.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"marketing-tab-pane\" role=\"tabpanel\" aria-labelledby=\"marketing-tab\" tabindex=\"0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Dr. Aïsha Hassan</h5>

                                                        <p class=\"mb-0\">Spécialiste en gynécologie, le Dr. Hassan offre des services dédiés à la santé des femmes. Prenez rendez-vous pour des consultations confidentielles et des conseils sur la santé reproductive.</p>
                                                    </div>

                                                    <span class=\"badge bg-advertising rounded-pill ms-auto\">30</span>
                                                </div>

                                                <img src=\"images/topics/undraw_online_ad_re_ol62.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Video Content</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-advertising rounded-pill ms-auto\">65</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Group_video_re_btu7.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Viral Tweet</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-advertising rounded-pill ms-auto\">50</span>
                                                </div>

                                                <img src=\"images/topics/undraw_viral_tweet_gndb.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"finance-tab-pane\" role=\"tabpanel\" aria-labelledby=\"finance-tab\" tabindex=\"0\">   <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-12 mb-4 mb-lg-0\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Dr. Aïsha Hassan</h5>

                                                        <p class=\"mb-0\">Spécialiste en gynécologie, le Dr. Hassan offre des services dédiés à la santé des femmes. Prenez rendez-vous pour des consultations confidentielles et des conseils sur la santé reproductive.</p>
                                                    </div>

                                                    <span class=\"badge bg-finance rounded-pill ms-auto\">30</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Finance_re_gnv2.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-6 col-md-6 col-12\">
                                        <div class=\"custom-block custom-block-overlay\">
                                            <div class=\"d-flex flex-column h-100\">
                                                <img src=\"images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">

                                                <div class=\"custom-block-overlay-text d-flex\">
                                                    <div>
                                                        <h5 class=\"text-white mb-2\">Finance</h5>

                                                        <p class=\"text-white\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                                        <a href=\"topics-detail.html\" class=\"btn custom-btn mt-2 mt-lg-3\">Learn More</a>
                                                    </div>

                                                    <span class=\"badge bg-finance rounded-pill ms-auto\">25</span>
                                                </div>

                                                <div class=\"social-share d-flex\">
                                                    <p class=\"text-white me-4\">Share:</p>

                                                    <ul class=\"social-icon\">
                                                        <li class=\"social-icon-item\">
                                                            <a href=\"#\" class=\"social-icon-link bi-twitter\"></a>
                                                        </li>

                                                        <li class=\"social-icon-item\">
                                                            <a href=\"#\" class=\"social-icon-link bi-facebook\"></a>
                                                        </li>

                                                        <li class=\"social-icon-item\">
                                                            <a href=\"#\" class=\"social-icon-link bi-pinterest\"></a>
                                                        </li>
                                                    </ul>

                                                    <a href=\"#\" class=\"custom-icon bi-bookmark ms-auto\"></a>
                                                </div>

                                                <div class=\"section-overlay\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"music-tab-pane\" role=\"tabpanel\" aria-labelledby=\"music-tab\" tabindex=\"0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Pr. Thomas Lefevre</h5>

                                                        <p class=\"mb-0\">Consultez le Pr. Lefevre pour des solutions personnalisées en dermatologie. Des problèmes de peau courants aux préoccupations esthétiques, son expertise garantit des soins de qualité</p>
                                                    </div>

                                                    <span class=\"badge bg-music rounded-pill ms-auto\">45</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Compose_music_re_wpiw.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Online Music</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-music rounded-pill ms-auto\">45</span>
                                                </div>

                                                <img src=\"images/topics/undraw_happy_music_g6wc.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Podcast</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-music rounded-pill ms-auto\">20</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Podcast_audience_re_4i5q.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"education-tab-pane\" role=\"tabpanel\" aria-labelledby=\"education-tab\" tabindex=\"0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Pr. Sophie Rousseau</h5>

                                                        <p class=\"mb-0\">Pour des consultations en psychiatrie, le Pr. Rousseau offre une approche attentive et empathique pour la gestion des troubles mentaux et le bien-être émotionnel.</p>
                                                    </div>

                                                    <span class=\"badge bg-education rounded-pill ms-auto\">80</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Graduation_re_gthn.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-6 col-md-6 col-12\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Educator</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-education rounded-pill ms-auto\">75</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Educator_re_ju47.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class=\"timeline-section section-padding\" id=\"section_3\">
            <div class=\"section-overlay\"></div>

            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-12 text-center\">
                        <h1 class=\"text-white mb-4\">Comment ça fonctionne?</h1>
                    </div>

                    <div class=\"col-lg-10 col-12 mx-auto\">
                        <div class=\"timeline-container\">
                            <ul class=\"vertical-scrollable-timeline\" id=\"vertical-scrollable-timeline\">
                                <div class=\"list-progress\">
                                    <div class=\"inner\"></div>
                                </div>

                                <li>
                                    <h4 class=\"text-white mb-3\">Participez à la Solidarité Médicale </h4>

                                    <p class=\"text-white\">Rejoignez notre mouvement de solidarité médicale. En faisant un don, vous contribuez à renforcer la communauté et à favoriser une compréhension partagée de la santé. Ensemble, nous créons une plateforme où le savoir médical est accessible à tous.</p>

                                    <div class=\"icon-holder\">
                                        <i class=\"bi-bookmark\"></i>
                                    </div>

                                </li>

                                <li>
                                    <h4 class=\"text-white mb-3\">Gérez Vos Rendez-vous Médicaux</h4>

                                    <p class=\"text-white\">Simplifiez la gestion de vos rendez-vous médicaux. Planifiez des consultations avec vos médecins préférés en quelques clics. Notre système convivial facilite la coordination pour que vous puissiez vous concentrer sur votre bien-être.</p>

                                    <div class=\"icon-holder\">
                                        <i class=\"bi-search\"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class=\"text-white mb-3\">Historique Médical à Portée de Main</h4>

                                    <p class=\"text-white\">Consultez votre historique médical à tout moment. Accédez rapidement à vos diagnostics précédents, prescriptions et résultats de consultations pour une vision complète de votre parcours de santé.</p>

                                    <div class=\"icon-holder\">
                                        <i class=\"bi-book\"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <section class=\"faq-section section-padding\" id=\"section_4\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12\">
                        <h2 class=\"mb-4\">Foire Aux Questions</h2>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"col-lg-5 col-12\">
                        <img src=\"images/faq_graphic.jpg\" class=\"img-fluid\" alt=\"FAQs\">
                    </div>

                    <div class=\"col-lg-6 col-12 m-auto\">
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                        Comment puis-je prendre un rendez-vous avec un médecin ?
                                    </button>
                                </h2>

                                <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        Pour prendre un rendez-vous, connectez-vous à votre compte, accédez à la section \"Gestion des Rendez-vous\" et suivez les étapes simples pour choisir votre médecin, la date et l'heure qui vous conviennent.
                                    </div>
                                </div>
                            </div>

                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingTwo\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                        Comment fonctionne l'outil de diagnostic simplifié ?
                                    </button>
                                </h2>

                                <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        L'outil de diagnostic simplifié vous permet de sélectionner la partie du corps qui vous préoccupe, puis de recevoir la liste des medecin dont leurs specialitee convient à vos symptômes. Cet outil ne remplace pas une consultation médicale professionnelle, mais peut vous aider .
                                    </div>
                                </div>
                            </div>

                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                        Comment puis-je consulter mon historique médical ?
                                    </button>
                                </h2>

                                <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        Accédez à votre historique médical en cliquant sur la section dédiée dans votre compte. Vous y trouverez vos anciens diagnostics, prescriptions et résultats de consultations.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class=\"contact-section section-padding section-bg\" id=\"section_5\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-12 col-12 text-center\">
                        <h2 class=\"mb-5\">Get in touch</h2>
                    </div>

                    <div class=\"col-lg-5 col-12 mb-4 mb-lg-0\">
                        <iframe class=\"google-map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth\" width=\"100%\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>

                    <div class=\"col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto\">
                        <h4 class=\"mb-3\">Head office</h4>

                        <p>Bay St &amp;, Larkin St, San Francisco, CA 94109, United States</p>

                        <hr>

                        <p class=\"d-flex align-items-center mb-1\">
                            <span class=\"me-2\">Phone</span>

                            <a href=\"tel: 305-240-9671\" class=\"site-footer-link\">
                                305-240-9671
                            </a>
                        </p>

                        <p class=\"d-flex align-items-center\">
                            <span class=\"me-2\">Email</span>

                            <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 col-12 mx-auto\">
                        <h4 class=\"mb-3\">Dubai office</h4>

                        <p>Burj Park, Downtown Dubai, United Arab Emirates</p>

                        <hr>

                        <p class=\"d-flex align-items-center mb-1\">
                            <span class=\"me-2\">Phone</span>

                            <a href=\"tel: 110-220-3400\" class=\"site-footer-link\">
                                110-220-3400
                            </a>
                        </p>

                        <p class=\"d-flex align-items-center\">
                            <span class=\"me-2\">Email</span>

                            <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                                info@company.com
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class=\"site-footer section-padding\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-3 col-12 mb-4 pb-2\">
                    <a class=\"navbar-brand mb-2\" href=\"index.html\">
                        <i class=\"bi-back\"></i>
                        <span>Topic</span>
                    </a>
                </div>

                <div class=\"col-lg-3 col-md-4 col-6\">
                    <h6 class=\"site-footer-title mb-3\">Resources</h6>

                    <ul class=\"site-footer-links\">
                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Accueil</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Comment ça fonctionne</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">FAQs</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-4 col-6 mb-4 mb-lg-0\">
                    <h6 class=\"site-footer-title mb-3\">Information</h6>

                    <p class=\"text-white d-flex mb-1\">
                        <a href=\"tel: 305-240-9671\" class=\"site-footer-link\">
                            305-240-9671
                        </a>
                    </p>

                    <p class=\"text-white d-flex\">
                        <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class=\"col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto\">
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            English</button>

                        <ul class=\"dropdown-menu\">
                            <li><button class=\"dropdown-item\" type=\"button\">Thai</button></li>

                            <li><button class=\"dropdown-item\" type=\"button\">Myanmar</button></li>

                            <li><button class=\"dropdown-item\" type=\"button\">Arabic</button></li>
                        </ul>
                    </div>

                    <p class=\"copyright-text mt-lg-5 mt-4\">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel=\"nofollow\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>

                </div>

            </div>
        </div>
    </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/main.html.twig";
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
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <main>

        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"images/logo_my_eDR-removebg-preview.png\" width=\"25%\" height=\"auto\" >
                    <span>My eDR</span>
                </a>


                <div class=\"d-lg-none ms-auto me-4\">
                    <a href=\"#top\" class=\"navbar-icon bi-person smoothscroll\"></a>
                </div>

                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-lg-5 me-lg-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_1\">Accueil</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_2\">Nos Experts Médicaux</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_3\">Comment ça fonctionne</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_4\">FAQs</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_5\">Contact</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarLightDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Pages</a>

                            <ul class=\"dropdown-menu dropdown-menu-light\" aria-labelledby=\"navbarLightDropdownMenuLink\">
                                <li><a class=\"dropdown-item\" href=\"topics-listing.html\">Topics Listing</a></li>

                                <li><a class=\"dropdown-item\" href=\"contact.html\">Contact Form</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class=\"d-none d-lg-block\">
                        <a href=\"profil.html\" class=\"navbar-icon bi-person smoothscroll\"></a>
                    </div>
                </div>
            </div>
        </nav>


        <section class=\"hero-section d-flex justify-content-center align-items-center\" id=\"section_1\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-8 col-12 mx-auto\">
                        <h1 class=\"text-white text-center\">Votre santé, votre contrôle. Rendez-vous, consultations, tout à portée de main.</h1>

                        <h6 class=\"text-center\">Découvrez une nouvelle approche de la santé.
                            L'application qui rend votre bien-être accessible.</h6>

                        <form method=\"get\" class=\"custom-form mt-4 pt-2 mb-lg-0 mb-5\" role=\"search\">
                            <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text bi-search\" id=\"basic-addon1\">

                                    </span>

                                <input name=\"keyword\" type=\"search\" class=\"form-control\" id=\"keyword\" placeholder=\"...\" aria-label=\"Search\">

                                <button type=\"submit\" class=\"form-control\">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class=\"featured-section\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">

                    <div class=\"col-lg-4 col-12 mb-4 mb-lg-0\" style=\"width: 25% !important;\">
                        <div class=\"custom-block bg-white shadow-lg\">
                            <a href=\"topics-detail.html\">
                                <div class=\"d-flex\">
                                    <div>
                                        <h5 class=\"mb-2\">Trouvez Votre Médecin Idéal</h5>

                                        <p class=\"mb-0\">Que vous cherchiez un spécialiste ou un médecin généraliste, trouvez le professionnel adapté à vos besoins et prenez rendez-vous en quelques clics.</p>
                                    </div>

                                    <!--span class=\"badge bg-design rounded-pill ms-auto\">14</!--span-->
                                </div>

                                <img src=\"images/contact-img.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">
                            </a>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-12\" style=\"width: 25% !important;\">
                        <div class=\"custom-block custom-block-overlay\">
                            <div class=\"d-flex flex-column h-100\">
                                <img src=\"images/corp.jpeg\" class=\"custom-block-image img-fluid\" alt=\"\">

                                <div class=\"custom-block-overlay-text d-flex\">
                                    <div>
                                        <h5 class=\"text-white mb-2\">Diagnostic Simplifié</h5>

                                        <p class=\"text-white\">Utilisez notre outil de diagnostic simplifié.</p>

                                        <!--a href=\"topics-detail.html\" class=\"btn custom-btn mt-2 mt-lg-3\">Learn More</!--a-->
                                    </div>

                                    <!--span class=\"badge bg-finance rounded-pill ms-auto\">25</!--span-->
                                </div>

                                <div class=\"section-overlay\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-12 mb-4 mb-lg-0\" style=\"width: 25% !important;\">
                        <div class=\"custom-block bg-white shadow-lg\">
                            <a href=\"topics-detail.html\">
                                <div class=\"d-flex\">
                                    <div>
                                        <h5 class=\"mb-2\">Poster une Donation</h5>

                                        <p class=\"mb-0\">Postez une donation pour soutenir d'autres utilisateurs dans leur quête d'informations médicales.</p>
                                    </div>

                                    <!--span class=\"badge bg-design rounded-pill ms-auto\">14</!--span-->
                                </div>

                                <img src=\"images/logo.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class=\"explore-section section-padding\" id=\"section_2\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-12 text-center\">
                        <h1 class=\"mb-4\">Rencontrez nos Experts Médicaux</h1>
                    </div>

                </div>
            </div>

            <div class=\"container-fluid\">
                <div class=\"row\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"design-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#design-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"design-tab-pane\" aria-selected=\"true\">Pédiatrie</button>
                        </li>

                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"marketing-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#marketing-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"marketing-tab-pane\" aria-selected=\"false\">Cardiologie</button>
                        </li>

                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"finance-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#finance-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"finance-tab-pane\" aria-selected=\"false\">Gynécologie</button>
                        </li>

                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"music-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#music-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"music-tab-pane\" aria-selected=\"false\">Dermatologie</button>
                        </li>

                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"education-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#education-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"education-tab-pane\" aria-selected=\"false\">Psychiatrie</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-12\">
                        <div class=\"tab-content\" id=\"myTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"design-tab-pane\" role=\"tabpanel\" aria-labelledby=\"design-tab\" tabindex=\"0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-0\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Dr. Marie Dubois</h5>

                                                        <p class=\"mb-0\">Spécialiste des soins pédiatriques, le Dr. Dubois apporte son expertise aux parents soucieux de la santé de leurs enfants. Rencontrez-la pour des conseils avisés sur la croissance et le développement des plus jeunes.</p>
                                                    </div>


                                                </div>

                                                <img src=\"images/doc3.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-0\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Pr. Thomas Lefevre</h5>

                                                        <p class=\"mb-0\">Consultez le Pr. Lefevre pour des solutions personnalisées en dermatologie. Des problèmes de peau courants aux préoccupations esthétiques, son expertise garantit des soins de qualité</p>
                                                    </div>



                                                </div>

                                                <img src=\"images/doc2.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Pr. Julien Martin</h5>

                                                        <p class=\"mb-0\">Le Pr. Martin, cardiologue émérite, vous accueille pour des consultations liées à la santé cardiovasculaire. Bénéficiez de son expérience pour des soins préventifs et des recommandations personnalisées.</p>
                                                    </div>


                                                </div>

                                                <img src=\"images/doc1.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"marketing-tab-pane\" role=\"tabpanel\" aria-labelledby=\"marketing-tab\" tabindex=\"0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Dr. Aïsha Hassan</h5>

                                                        <p class=\"mb-0\">Spécialiste en gynécologie, le Dr. Hassan offre des services dédiés à la santé des femmes. Prenez rendez-vous pour des consultations confidentielles et des conseils sur la santé reproductive.</p>
                                                    </div>

                                                    <span class=\"badge bg-advertising rounded-pill ms-auto\">30</span>
                                                </div>

                                                <img src=\"images/topics/undraw_online_ad_re_ol62.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Video Content</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-advertising rounded-pill ms-auto\">65</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Group_video_re_btu7.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Viral Tweet</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-advertising rounded-pill ms-auto\">50</span>
                                                </div>

                                                <img src=\"images/topics/undraw_viral_tweet_gndb.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"finance-tab-pane\" role=\"tabpanel\" aria-labelledby=\"finance-tab\" tabindex=\"0\">   <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-12 mb-4 mb-lg-0\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Dr. Aïsha Hassan</h5>

                                                        <p class=\"mb-0\">Spécialiste en gynécologie, le Dr. Hassan offre des services dédiés à la santé des femmes. Prenez rendez-vous pour des consultations confidentielles et des conseils sur la santé reproductive.</p>
                                                    </div>

                                                    <span class=\"badge bg-finance rounded-pill ms-auto\">30</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Finance_re_gnv2.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-6 col-md-6 col-12\">
                                        <div class=\"custom-block custom-block-overlay\">
                                            <div class=\"d-flex flex-column h-100\">
                                                <img src=\"images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg\" class=\"custom-block-image img-fluid\" alt=\"\">

                                                <div class=\"custom-block-overlay-text d-flex\">
                                                    <div>
                                                        <h5 class=\"text-white mb-2\">Finance</h5>

                                                        <p class=\"text-white\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                                        <a href=\"topics-detail.html\" class=\"btn custom-btn mt-2 mt-lg-3\">Learn More</a>
                                                    </div>

                                                    <span class=\"badge bg-finance rounded-pill ms-auto\">25</span>
                                                </div>

                                                <div class=\"social-share d-flex\">
                                                    <p class=\"text-white me-4\">Share:</p>

                                                    <ul class=\"social-icon\">
                                                        <li class=\"social-icon-item\">
                                                            <a href=\"#\" class=\"social-icon-link bi-twitter\"></a>
                                                        </li>

                                                        <li class=\"social-icon-item\">
                                                            <a href=\"#\" class=\"social-icon-link bi-facebook\"></a>
                                                        </li>

                                                        <li class=\"social-icon-item\">
                                                            <a href=\"#\" class=\"social-icon-link bi-pinterest\"></a>
                                                        </li>
                                                    </ul>

                                                    <a href=\"#\" class=\"custom-icon bi-bookmark ms-auto\"></a>
                                                </div>

                                                <div class=\"section-overlay\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"music-tab-pane\" role=\"tabpanel\" aria-labelledby=\"music-tab\" tabindex=\"0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Pr. Thomas Lefevre</h5>

                                                        <p class=\"mb-0\">Consultez le Pr. Lefevre pour des solutions personnalisées en dermatologie. Des problèmes de peau courants aux préoccupations esthétiques, son expertise garantit des soins de qualité</p>
                                                    </div>

                                                    <span class=\"badge bg-music rounded-pill ms-auto\">45</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Compose_music_re_wpiw.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Online Music</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-music rounded-pill ms-auto\">45</span>
                                                </div>

                                                <img src=\"images/topics/undraw_happy_music_g6wc.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-4 col-md-6 col-12\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Podcast</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-music rounded-pill ms-auto\">20</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Podcast_audience_re_4i5q.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"education-tab-pane\" role=\"tabpanel\" aria-labelledby=\"education-tab\" tabindex=\"0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-12 mb-4 mb-lg-3\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Pr. Sophie Rousseau</h5>

                                                        <p class=\"mb-0\">Pour des consultations en psychiatrie, le Pr. Rousseau offre une approche attentive et empathique pour la gestion des troubles mentaux et le bien-être émotionnel.</p>
                                                    </div>

                                                    <span class=\"badge bg-education rounded-pill ms-auto\">80</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Graduation_re_gthn.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-6 col-md-6 col-12\">
                                        <div class=\"custom-block bg-white shadow-lg\">
                                            <a href=\"topics-detail.html\">
                                                <div class=\"d-flex\">
                                                    <div>
                                                        <h5 class=\"mb-2\">Educator</h5>

                                                        <p class=\"mb-0\">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class=\"badge bg-education rounded-pill ms-auto\">75</span>
                                                </div>

                                                <img src=\"images/topics/undraw_Educator_re_ju47.png\" class=\"custom-block-image img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class=\"timeline-section section-padding\" id=\"section_3\">
            <div class=\"section-overlay\"></div>

            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-12 text-center\">
                        <h1 class=\"text-white mb-4\">Comment ça fonctionne?</h1>
                    </div>

                    <div class=\"col-lg-10 col-12 mx-auto\">
                        <div class=\"timeline-container\">
                            <ul class=\"vertical-scrollable-timeline\" id=\"vertical-scrollable-timeline\">
                                <div class=\"list-progress\">
                                    <div class=\"inner\"></div>
                                </div>

                                <li>
                                    <h4 class=\"text-white mb-3\">Participez à la Solidarité Médicale </h4>

                                    <p class=\"text-white\">Rejoignez notre mouvement de solidarité médicale. En faisant un don, vous contribuez à renforcer la communauté et à favoriser une compréhension partagée de la santé. Ensemble, nous créons une plateforme où le savoir médical est accessible à tous.</p>

                                    <div class=\"icon-holder\">
                                        <i class=\"bi-bookmark\"></i>
                                    </div>

                                </li>

                                <li>
                                    <h4 class=\"text-white mb-3\">Gérez Vos Rendez-vous Médicaux</h4>

                                    <p class=\"text-white\">Simplifiez la gestion de vos rendez-vous médicaux. Planifiez des consultations avec vos médecins préférés en quelques clics. Notre système convivial facilite la coordination pour que vous puissiez vous concentrer sur votre bien-être.</p>

                                    <div class=\"icon-holder\">
                                        <i class=\"bi-search\"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class=\"text-white mb-3\">Historique Médical à Portée de Main</h4>

                                    <p class=\"text-white\">Consultez votre historique médical à tout moment. Accédez rapidement à vos diagnostics précédents, prescriptions et résultats de consultations pour une vision complète de votre parcours de santé.</p>

                                    <div class=\"icon-holder\">
                                        <i class=\"bi-book\"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <section class=\"faq-section section-padding\" id=\"section_4\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12\">
                        <h2 class=\"mb-4\">Foire Aux Questions</h2>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"col-lg-5 col-12\">
                        <img src=\"images/faq_graphic.jpg\" class=\"img-fluid\" alt=\"FAQs\">
                    </div>

                    <div class=\"col-lg-6 col-12 m-auto\">
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                        Comment puis-je prendre un rendez-vous avec un médecin ?
                                    </button>
                                </h2>

                                <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        Pour prendre un rendez-vous, connectez-vous à votre compte, accédez à la section \"Gestion des Rendez-vous\" et suivez les étapes simples pour choisir votre médecin, la date et l'heure qui vous conviennent.
                                    </div>
                                </div>
                            </div>

                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingTwo\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                        Comment fonctionne l'outil de diagnostic simplifié ?
                                    </button>
                                </h2>

                                <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        L'outil de diagnostic simplifié vous permet de sélectionner la partie du corps qui vous préoccupe, puis de recevoir la liste des medecin dont leurs specialitee convient à vos symptômes. Cet outil ne remplace pas une consultation médicale professionnelle, mais peut vous aider .
                                    </div>
                                </div>
                            </div>

                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                        Comment puis-je consulter mon historique médical ?
                                    </button>
                                </h2>

                                <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        Accédez à votre historique médical en cliquant sur la section dédiée dans votre compte. Vous y trouverez vos anciens diagnostics, prescriptions et résultats de consultations.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class=\"contact-section section-padding section-bg\" id=\"section_5\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-12 col-12 text-center\">
                        <h2 class=\"mb-5\">Get in touch</h2>
                    </div>

                    <div class=\"col-lg-5 col-12 mb-4 mb-lg-0\">
                        <iframe class=\"google-map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth\" width=\"100%\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>

                    <div class=\"col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto\">
                        <h4 class=\"mb-3\">Head office</h4>

                        <p>Bay St &amp;, Larkin St, San Francisco, CA 94109, United States</p>

                        <hr>

                        <p class=\"d-flex align-items-center mb-1\">
                            <span class=\"me-2\">Phone</span>

                            <a href=\"tel: 305-240-9671\" class=\"site-footer-link\">
                                305-240-9671
                            </a>
                        </p>

                        <p class=\"d-flex align-items-center\">
                            <span class=\"me-2\">Email</span>

                            <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 col-12 mx-auto\">
                        <h4 class=\"mb-3\">Dubai office</h4>

                        <p>Burj Park, Downtown Dubai, United Arab Emirates</p>

                        <hr>

                        <p class=\"d-flex align-items-center mb-1\">
                            <span class=\"me-2\">Phone</span>

                            <a href=\"tel: 110-220-3400\" class=\"site-footer-link\">
                                110-220-3400
                            </a>
                        </p>

                        <p class=\"d-flex align-items-center\">
                            <span class=\"me-2\">Email</span>

                            <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                                info@company.com
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class=\"site-footer section-padding\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-3 col-12 mb-4 pb-2\">
                    <a class=\"navbar-brand mb-2\" href=\"index.html\">
                        <i class=\"bi-back\"></i>
                        <span>Topic</span>
                    </a>
                </div>

                <div class=\"col-lg-3 col-md-4 col-6\">
                    <h6 class=\"site-footer-title mb-3\">Resources</h6>

                    <ul class=\"site-footer-links\">
                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Accueil</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Comment ça fonctionne</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">FAQs</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-4 col-6 mb-4 mb-lg-0\">
                    <h6 class=\"site-footer-title mb-3\">Information</h6>

                    <p class=\"text-white d-flex mb-1\">
                        <a href=\"tel: 305-240-9671\" class=\"site-footer-link\">
                            305-240-9671
                        </a>
                    </p>

                    <p class=\"text-white d-flex\">
                        <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class=\"col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto\">
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            English</button>

                        <ul class=\"dropdown-menu\">
                            <li><button class=\"dropdown-item\" type=\"button\">Thai</button></li>

                            <li><button class=\"dropdown-item\" type=\"button\">Myanmar</button></li>

                            <li><button class=\"dropdown-item\" type=\"button\">Arabic</button></li>
                        </ul>
                    </div>

                    <p class=\"copyright-text mt-lg-5 mt-4\">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel=\"nofollow\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>

                </div>

            </div>
        </div>
    </footer>

{% endblock %}", "main/main.html.twig", "C:\\xampp\\htdocs\\pidev\\templates\\main\\main.html.twig");
    }
}
