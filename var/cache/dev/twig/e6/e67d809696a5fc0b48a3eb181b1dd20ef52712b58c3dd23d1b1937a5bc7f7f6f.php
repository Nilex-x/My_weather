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

/* weather.html.twig */
class __TwigTemplate_00f0389197969fce3e6217491fce44d79e2ce781432fdcbd810d6b00040f30de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo "\">
    <title>Weather</title>
</head>
<body>
    <div class=\"header\">
        <div class=\"inner_header\">
            <div class=\"logo_container\">
                <h1>My <span>Weather</span></h1>
            </div>
            <ul class=\"navigation\">
                <a href=";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("weather");
        echo "><li>Weather</li></a>
                <a href=";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location");
        echo "><li>Location</li></a>
            </ul>
        </div>
    </div>
    <div>
        <h1>La météo de ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 20, $this->source); })()), "name", [], "array", false, false, false, 20), "html", null, true);
        echo " </h1>
        <img alt=\"weather\" id=\"icon\"
        src=\"http://openweathermap.org/img/w/";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 22, $this->source); })()), "weather", [], "array", false, false, false, 22), "0", [], "array", false, false, false, 22), "icon", [], "array", false, false, false, 22), "html", null, true);
        echo ".png\"
        style=\"width: 15%;\">
        <h1>La température est de ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 24, $this->source); })()), 0, [], "array", false, false, false, 24), "html", null, true);
        echo "°c et elle est ressentie a ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 24, $this->source); })()), 2, [], "array", false, false, false, 24), "html", null, true);
        echo "°c </h1>
        <h1>La vitesse du vent est de ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 25, $this->source); })()), "wind", [], "array", false, false, false, 25), "speed", [], "array", false, false, false, 25), "html", null, true);
        echo " km/h </h1>
        <h1>La température maximal sera de ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 26, $this->source); })()), 4, [], "array", false, false, false, 26), "html", null, true);
        echo "°c et la minimal est de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 26, $this->source); })()), 5, [], "array", false, false, false, 26), "html", null, true);
        echo "°c </h1>
        <h1>L'humidité est de ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 27, $this->source); })()), "main", [], "array", false, false, false, 27), "humidity", [], "array", false, false, false, 27), "html", null, true);
        echo "% </h1>
        <h1>La pression atmosphérique est de ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 28, $this->source); })()), "main", [], "array", false, false, false, 28), "pressure", [], "array", false, false, false, 28), "html", null, true);
        echo "hPa </h1>
    </div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "weather.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  99 => 27,  93 => 26,  89 => 25,  83 => 24,  78 => 22,  73 => 20,  65 => 15,  61 => 14,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/home.css') }}\">
    <title>Weather</title>
</head>
<body>
    <div class=\"header\">
        <div class=\"inner_header\">
            <div class=\"logo_container\">
                <h1>My <span>Weather</span></h1>
            </div>
            <ul class=\"navigation\">
                <a href={{ path('weather') }}><li>Weather</li></a>
                <a href={{ path('location') }}><li>Location</li></a>
            </ul>
        </div>
    </div>
    <div>
        <h1>La météo de {{ weather[\"name\"] }} </h1>
        <img alt=\"weather\" id=\"icon\"
        src=\"http://openweathermap.org/img/w/{{ weather[\"weather\"][\"0\"][\"icon\"] }}.png\"
        style=\"width: 15%;\">
        <h1>La température est de {{ temp[0] }}°c et elle est ressentie a {{ temp[2] }}°c </h1>
        <h1>La vitesse du vent est de {{ weather[\"wind\"][\"speed\"] }} km/h </h1>
        <h1>La température maximal sera de {{ temp[4] }}°c et la minimal est de {{temp[5]}}°c </h1>
        <h1>L'humidité est de {{ weather[\"main\"][\"humidity\"] }}% </h1>
        <h1>La pression atmosphérique est de {{ weather[\"main\"][\"pressure\"] }}hPa </h1>
    </div>
</body>
</html>
", "weather.html.twig", "/home/nilexx/delivery/perso_project/my_site/templates/weather.html.twig");
    }
}
