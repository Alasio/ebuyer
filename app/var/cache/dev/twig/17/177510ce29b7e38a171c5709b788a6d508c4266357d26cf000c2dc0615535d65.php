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

/* base.html.twig */
class __TwigTemplate_42911ad4a761a2fa5a04d1ddfb535c91b28ee9ca26875f2df928deb207807c58 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/apple-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>
        eBuyer
    </title>

    ";
        // line 13
        $this->loadTemplate("base/head.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        $this->loadTemplate("base/js.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "
</head>

<body class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "cookies", [], "any", false, false, false, 18), "get", [0 => "sideBarMini"], "method", false, false, false, 18) == true)) {
            echo "sidebar-mini";
        }
        echo "\">

<div class=\"wrapper\">

    ";
        // line 22
        $this->loadTemplate("base/sidebar.twig", "base.html.twig", 22)->display($context);
        // line 23
        echo "
    <div class=\"main-panel\">
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "            </div>
        </div>
    </div>

    ";
        // line 34
        $this->loadTemplate("base/footer.twig", "base.html.twig", 34)->display($context);
        // line 35
        echo "</div>

<!-- Standard Modal -->
<div class=\"modal fade\" id=\"modal\">
    <div class=\"modal-dialog\" id=\"modalContent\">
    </div>
</div>

<!-- Large Modal -->
<div class=\"modal fade\" id=\"largeModal\" >
    <div class=\"modal-dialog modal-lg\" id=\"largeModalContent\">
    </div>
</div>

<!-- Extra Large Modal -->
<div class=\"modal fade\" id=\"extraLargeModal\" >
    <div class=\"modal-dialog modal-xl \" id=\"extraLargeModalContent\">
    </div>
</div>



</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 29,  103 => 35,  101 => 34,  95 => 30,  93 => 29,  85 => 23,  83 => 22,  74 => 18,  69 => 15,  66 => 14,  64 => 13,  55 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('assets/images/apple-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/images/favicon.png') }}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>
        eBuyer
    </title>

    {% include 'base/head.twig' %}
    {% include 'base/js.twig' %}

</head>

<body class=\"{% if app.request.cookies.get('sideBarMini') == true %}sidebar-mini{% endif %}\">

<div class=\"wrapper\">

    {% include 'base/sidebar.twig' %}

    <div class=\"main-panel\">
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </div>

    {% include 'base/footer.twig' %}
</div>

<!-- Standard Modal -->
<div class=\"modal fade\" id=\"modal\">
    <div class=\"modal-dialog\" id=\"modalContent\">
    </div>
</div>

<!-- Large Modal -->
<div class=\"modal fade\" id=\"largeModal\" >
    <div class=\"modal-dialog modal-lg\" id=\"largeModalContent\">
    </div>
</div>

<!-- Extra Large Modal -->
<div class=\"modal fade\" id=\"extraLargeModal\" >
    <div class=\"modal-dialog modal-xl \" id=\"extraLargeModalContent\">
    </div>
</div>



</body>

</html>", "base.html.twig", "/var/www/symfony_docker/templates/base.html.twig");
    }
}
