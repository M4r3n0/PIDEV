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

/* restaurant/new.html.twig */
class __TwigTemplate_4f5782061e43ce5dc115703012da25b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Restaurants</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"/assets/img/favicon.png\" rel=\"icon\">
\t\t<link
\t\thref=\"/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
\t\t<link href=\"/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<link href=\"/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t<link href=\"/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link
\t\thref=\"/assets/css/style.css\" rel=\"stylesheet\">

\t<!-- =======================================================
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template Name: TheEvent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ======================================================== -->
\t</head>

\t<body>

\t\t<header id=\"header\" class=\"d-flex align-items-center header-inner\">
\t\t\t<div class=\"container-fluid container-xxl d-flex align-items-center justify-content-between\">

\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<a>
\t\t\t\t\t\t<img src=\"assets/img/logo1.png\" alt=\"\" title=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"#bottom\">Plus d'infos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"#bottom\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t</nav>

\t\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_index");
        echo "\">Nos Restaurants</a>

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->

\t\t<main
\t\t\tid=\"main\" class=\"main-page\">

\t\t\t<!-- ======= Speaker Details Sectionn ======= -->
\t\t\t<section id=\"speakers-details\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2>Restaurants</h2>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<img src=\"/assets/img/speakers/couscous-viande_0.jpg\" alt=\"Speaker 1\" class=\"img-fluid\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"details\">

\t\t\t\t\t\t\t\t";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</section>

\t\t</main><!-- End #main --><!-- ======= Footer ======= --><footer id=\"footer\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 footer-info\" id=\"bottom\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/logo1.png\" height=\"200\" width=\"150\">
\t\t\t\t\t\t\t\t<p>TN Maze's Key est une application developpée par des apprenti-developpeurs sur multiples platformes qui facilite aux touristes la visite de la Tunisie</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</center>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"col-lg-3 col-md-6 footer-contact\">
\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t<p>
\t\t\t\t\tEsprit<br>
\t\t\t\t\tAriana Essoghra<br>
\t\t\t\t\tTunisie<br>
\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t+216 50 080 401<br>
\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\tleaders@esprit.tn
\t\t\t\t\t<br>
\t\t\t\t</p>

\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"google-plus\">
\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer><!-- End  Footer --><a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a><!-- Vendor JS Files --><script src=\"/assets/vendor/aos/aos.js\"></script>
\t\t<script src=\"/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<script src=\"/assets/vendor/glightbox/js/glightbox.min.js\"></script>
\t\t<script src=\"/assets/vendor/swiper/swiper-bundle.min.js\"></script>
\t\t<script src=\"/assets/vendor/php-email-form/validate.js\"></script><!-- Template Main JS File --><script src=\"/assets/js/main.js\"></script>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<h1>Ajouter un nouveau Restaurant</h1>

\t\t\t\t\t\t\t\t\t\t";
        // line 95
        echo twig_include($this->env, $context, "restaurant/_form.html.twig");
        echo "


\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_index");
        echo "\">Affichage</a>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 98,  231 => 95,  226 => 92,  216 => 91,  141 => 101,  139 => 91,  111 => 66,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Restaurants</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"/assets/img/favicon.png\" rel=\"icon\">
\t\t<link
\t\thref=\"/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
\t\t<link href=\"/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<link href=\"/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t<link href=\"/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link
\t\thref=\"/assets/css/style.css\" rel=\"stylesheet\">

\t<!-- =======================================================
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template Name: TheEvent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ======================================================== -->
\t</head>

\t<body>

\t\t<header id=\"header\" class=\"d-flex align-items-center header-inner\">
\t\t\t<div class=\"container-fluid container-xxl d-flex align-items-center justify-content-between\">

\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<a>
\t\t\t\t\t\t<img src=\"assets/img/logo1.png\" alt=\"\" title=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"#bottom\">Plus d'infos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"#bottom\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t</nav>

\t\t\t\t<a href=\"{{ path('app_restaurant_index') }}\">Nos Restaurants</a>

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->

\t\t<main
\t\t\tid=\"main\" class=\"main-page\">

\t\t\t<!-- ======= Speaker Details Sectionn ======= -->
\t\t\t<section id=\"speakers-details\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2>Restaurants</h2>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<img src=\"/assets/img/speakers/couscous-viande_0.jpg\" alt=\"Speaker 1\" class=\"img-fluid\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"details\">

\t\t\t\t\t\t\t\t{% block body %}
\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<h1>Ajouter un nouveau Restaurant</h1>

\t\t\t\t\t\t\t\t\t\t{{ include('restaurant/_form.html.twig') }}


\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_restaurant_index') }}\">Affichage</a>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</section>

\t\t</main><!-- End #main --><!-- ======= Footer ======= --><footer id=\"footer\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 footer-info\" id=\"bottom\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/logo1.png\" height=\"200\" width=\"150\">
\t\t\t\t\t\t\t\t<p>TN Maze's Key est une application developpée par des apprenti-developpeurs sur multiples platformes qui facilite aux touristes la visite de la Tunisie</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</center>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"col-lg-3 col-md-6 footer-contact\">
\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t<p>
\t\t\t\t\tEsprit<br>
\t\t\t\t\tAriana Essoghra<br>
\t\t\t\t\tTunisie<br>
\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t+216 50 080 401<br>
\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\tleaders@esprit.tn
\t\t\t\t\t<br>
\t\t\t\t</p>

\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"google-plus\">
\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer><!-- End  Footer --><a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a><!-- Vendor JS Files --><script src=\"/assets/vendor/aos/aos.js\"></script>
\t\t<script src=\"/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<script src=\"/assets/vendor/glightbox/js/glightbox.min.js\"></script>
\t\t<script src=\"/assets/vendor/swiper/swiper-bundle.min.js\"></script>
\t\t<script src=\"/assets/vendor/php-email-form/validate.js\"></script><!-- Template Main JS File --><script src=\"/assets/js/main.js\"></script>
\t</body>
</html>
", "restaurant/new.html.twig", "C:\\xampp\\htdocs\\TNMazesKey\\templates\\restaurant\\new.html.twig");
    }
}
