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

/* restaurant/showClient.html.twig */
class __TwigTemplate_46ce949646ebc0bf461033c2cba5da76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/showClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/showClient.html.twig"));

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template Name: TheEvent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ======================================================== -->
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
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 140
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

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<h1>Restaurant
\t\t\t\t\t\t\t\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 95, $this->source); })()), "nom", [], "any", false, false, false, 95), "html", null, true);
        echo "</h1>

\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 105, $this->source); })()), "nom", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 109, $this->source); })()), "adresse", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Menu</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 113, $this->source); })()), "menu", [], "any", false, false, false, 113), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Programme</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 117, $this->source); })()), "prog", [], "any", false, false, false, 117), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Telephone</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 121, $this->source); })()), "telephone", [], "any", false, false, false, 121), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Nombre de places
\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 126, $this->source); })()), "nbrep", [], "any", false, false, false, 126), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Note</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 130, $this->source); })()), "note", [], "any", false, false, false, 130), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_indexClient");
        echo "\">back to list</a>
\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/showClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 135,  291 => 130,  284 => 126,  276 => 121,  269 => 117,  262 => 113,  255 => 109,  248 => 105,  241 => 101,  232 => 95,  228 => 93,  218 => 92,  142 => 140,  140 => 92,  111 => 66,  44 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template Name: TheEvent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ======================================================== -->
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
\t\t\t\t\t\t\t\t\t\t<h1>Restaurant
\t\t\t\t\t\t\t\t\t\t\t{{ restaurant.nom }}</h1>

\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.adresse }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Menu</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.menu }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Programme</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.prog }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Telephone</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.telephone }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Nombre de places
\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.nbrep }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Note</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.note }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_restaurant_indexClient') }}\">back to list</a>
\t\t\t\t\t\t\t\t\t\t</button>

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
", "restaurant/showClient.html.twig", "C:\\xampp\\htdocs\\TNMazesKey\\templates\\restaurant\\showClient.html.twig");
    }
}
