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

/* badlocation.html.twig */
class __TwigTemplate_1dfefff33b004a533103ae21fe2d56f6cc25c9d52488f6259b2854fbbd4f9aa3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "badlocation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "badlocation.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo "\">
    <title>Wrong city</title>
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
        <h1>Your city does not exist</h1>
    </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "badlocation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 14,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/home.css') }}\">
    <title>Wrong city</title>
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
        <h1>Your city does not exist</h1>
    </div>
</body>
</html>", "badlocation.html.twig", "/home/nilexx/delivery/perso_project/my_site/templates/badlocation.html.twig");
    }
}
