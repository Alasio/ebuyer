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

/* base/head.twig */
class __TwigTemplate_4e1454771a67966f542f11fa139388a5050934b67d363652a2dc88cbc742601a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/head.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/head.twig"));

        // line 1
        echo "<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

<!-- Fonts and icons -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
<script src=\"https://kit.fontawesome.com/28e3734837.js\" crossorigin=\"anonymous\" integrity=\"sha384-tCIa9x35rFwAnPYwDCoqImEiB9Ai31jfzeslK4Q53KZAXSFi24Px912eIpefo9Bj\"></script>

<!-- CSS Files -->
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/material-dashboard.css?v=2.1.0"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<!-- Our CSS Files -->
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/redesign.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<!-- JQuery -->
<script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

<!-- Fonts and icons -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
<script src=\"https://kit.fontawesome.com/28e3734837.js\" crossorigin=\"anonymous\" integrity=\"sha384-tCIa9x35rFwAnPYwDCoqImEiB9Ai31jfzeslK4Q53KZAXSFi24Px912eIpefo9Bj\"></script>

<!-- CSS Files -->
<link href=\"{{ asset('assets/css/material-dashboard.css?v=2.1.0') }}\" rel=\"stylesheet\" />

<!-- Our CSS Files -->
<link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('assets/css/redesign.css') }}\" rel=\"stylesheet\" />

<!-- JQuery -->
<script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>", "base/head.twig", "/var/www/symfony_docker/templates/base/head.twig");
    }
}
