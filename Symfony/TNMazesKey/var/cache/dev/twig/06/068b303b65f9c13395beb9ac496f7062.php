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

/* restaurant/indexClient.html.twig */
class __TwigTemplate_ead5193580284f0ec976a5bcf4fc12ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/indexClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/indexClient.html.twig"));

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template Name: TheEvent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ======================================================== -->
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
\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"#supporters\">Sponsors</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</header>
\t\t<main
\t\t\tid=\"main\" class=\"main-page\">

\t\t\t<!-- ======= Speaker Details Sectionn ======= -->
\t\t\t<section id=\"speakers-details\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2>Nos Restaurants</h2>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">


\t\t\t\t\t\t<div class=\"col-md-6\">


\t\t\t\t\t\t\t";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</section>
\t\t</main>
\t\t<!-- End #main -->
\t\t<!-- ======= Footer ======= -->
\t\t<section id=\"supporters\" class=\"section-with-bg\">

\t\t\t<div class=\"container\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<h2>Nos Sponsors</h2>
\t\t\t\t</div>
\t\t\t\t<center>
\t\t\t\t\t<div class=\"row no-gutters supporters-wrap clearfix\" data-aos=\"zoom-in\" data-aos-delay=\"100\">

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"supporter-logo\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/supporters/download.png\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"supporter-logo\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/supporters/GlovoApp.png\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"supporter-logo\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/supporters/bee.png\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</center>
\t\t\t</div>
\t\t\t<footer id=\"footer\">
\t\t\t\t<div class=\"footer-top\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 footer-info\" id=\"bottom\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/logo1.png\" height=\"200\" width=\"150\">
\t\t\t\t\t\t\t\t\t<p>TN Maze's Key est une application developpée par des apprenti-developpeurs sur multiples platformes qui facilite aux touristes la visite de la Tunisie</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-lg-3 col-md-6 footer-contact\">
\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\tEsprit<br>
\t\t\t\t\t\tAriana Essoghra<br>
\t\t\t\t\t\tTunisie<br>
\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t+216 50 080 401<br>
\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\tleaders@esprit.tn
\t\t\t\t\t\t<br>
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"google-plus\">
\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer><!-- End  Footer --><a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
\t\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t\t</a><!-- Vendor JS Files --><script src=\"/assets/vendor/aos/aos.js\"></script>
\t\t\t<script src=\"/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"/assets/vendor/glightbox/js/glightbox.min.js\"></script>
\t\t\t<script src=\"/assets/vendor/swiper/swiper-bundle.min.js\"></script>
\t\t\t<script src=\"/assets/vendor/php-email-form/validate.js\"></script><!-- Template Main JS File --><script src=\"/assets/js/main.js\"></script>
\t\t</body>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 84
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "

\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Menu</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Programme</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Telephone</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre de places
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Note</th>
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nom", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "adresse", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "menu", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "prog", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "telephone", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nbrep", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "note", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_showClient", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\">Afficher</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\">Noter</a>

\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"9\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/indexClient.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  335 => 125,  326 => 121,  316 => 116,  311 => 114,  306 => 112,  302 => 111,  298 => 110,  294 => 109,  290 => 108,  286 => 107,  282 => 106,  278 => 105,  275 => 104,  270 => 103,  250 => 85,  240 => 84,  131 => 129,  129 => 84,  44 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template Name: TheEvent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ======================================================== -->
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
\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"#supporters\">Sponsors</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</header>
\t\t<main
\t\t\tid=\"main\" class=\"main-page\">

\t\t\t<!-- ======= Speaker Details Sectionn ======= -->
\t\t\t<section id=\"speakers-details\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2>Nos Restaurants</h2>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">


\t\t\t\t\t\t<div class=\"col-md-6\">


\t\t\t\t\t\t\t{% block body %}


\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Menu</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Programme</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Telephone</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre de places
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Note</th>
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for restaurant in restaurants %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.adresse }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.menu }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.prog }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.telephone }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.nbrep }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.note }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_restaurant_showClient', {'id': restaurant.id}) }}\">Afficher</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_avis_new', {'id': restaurant.id}) }}\">Noter</a>

\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"9\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t{% endblock %}


\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</section>
\t\t</main>
\t\t<!-- End #main -->
\t\t<!-- ======= Footer ======= -->
\t\t<section id=\"supporters\" class=\"section-with-bg\">

\t\t\t<div class=\"container\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<h2>Nos Sponsors</h2>
\t\t\t\t</div>
\t\t\t\t<center>
\t\t\t\t\t<div class=\"row no-gutters supporters-wrap clearfix\" data-aos=\"zoom-in\" data-aos-delay=\"100\">

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"supporter-logo\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/supporters/download.png\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"supporter-logo\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/supporters/GlovoApp.png\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"supporter-logo\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/supporters/bee.png\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</center>
\t\t\t</div>
\t\t\t<footer id=\"footer\">
\t\t\t\t<div class=\"footer-top\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 footer-info\" id=\"bottom\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/logo1.png\" height=\"200\" width=\"150\">
\t\t\t\t\t\t\t\t\t<p>TN Maze's Key est une application developpée par des apprenti-developpeurs sur multiples platformes qui facilite aux touristes la visite de la Tunisie</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-lg-3 col-md-6 footer-contact\">
\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\tEsprit<br>
\t\t\t\t\t\tAriana Essoghra<br>
\t\t\t\t\t\tTunisie<br>
\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t+216 50 080 401<br>
\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\tleaders@esprit.tn
\t\t\t\t\t\t<br>
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"google-plus\">
\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer><!-- End  Footer --><a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
\t\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t\t</a><!-- Vendor JS Files --><script src=\"/assets/vendor/aos/aos.js\"></script>
\t\t\t<script src=\"/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"/assets/vendor/glightbox/js/glightbox.min.js\"></script>
\t\t\t<script src=\"/assets/vendor/swiper/swiper-bundle.min.js\"></script>
\t\t\t<script src=\"/assets/vendor/php-email-form/validate.js\"></script><!-- Template Main JS File --><script src=\"/assets/js/main.js\"></script>
\t\t</body>
\t</body>
</html>
", "restaurant/indexClient.html.twig", "C:\\xampp\\htdocs\\TNMazesKey\\templates\\restaurant\\indexClient.html.twig");
    }
}
