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

/* base/sidebar.twig */
class __TwigTemplate_762f47a285aa24299c4f884c90bbea5de40a3dafdd8f31478afd442d10017eb9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/sidebar.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/sidebar.twig"));

        // line 1
        echo "<div class=\"sidebar\" data-background-color=\"white\">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class=\"logo\">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dash");
        echo "\" class=\"simple-text logo-normal\">
            eBuyer
        </a>
    </div>
    <div class=\"sidebar-wrapper\">
        <ul class=\"nav\">
            <!-- Dashboard -->
            <li class=\"nav-item ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", [0 => "_route"], "method", false, false, false, 15) == "dash")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dash");
        echo "\">
                    <i class=\"material-icons\">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            <!-- Products -->
            <li class=\"nav-item ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "attributes", [], "any", false, false, false, 23), "get", [0 => "_route"], "method", false, false, false, 23) == "products")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">
                    <i class=\"fas fa-shopping-cart\"></i>
                    <p> Products </p>
                </a>
            </li>

            <!-- The Warehouse -->
            <li class=\"nav-item ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "attributes", [], "any", false, false, false, 31), "get", [0 => "_route"], "method", false, false, false, 31) == "warehouse")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse");
        echo "\">
                    <i class=\"fas fa-warehouse\"></i>
                    <p> The Warehouse </p>
                </a>
            </li>

            <!-- Picking Stock -->
            <li class=\"nav-item ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "attributes", [], "any", false, false, false, 39), "get", [0 => "_route"], "method", false, false, false, 39) == "picking")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("picking");
        echo "\">
                    <i class=\"fas fa-warehouse\"></i>
                    <p> Pick Stock </p>
                </a>
            </li>

        </ul>
    </div>
    <div class=\"bottom\">
        <p>Legal statement about T&C's and stuff</p>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  110 => 39,  100 => 32,  94 => 31,  84 => 24,  78 => 23,  68 => 16,  62 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar\" data-background-color=\"white\">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class=\"logo\">
        <a href=\"{{ path('dash') }}\" class=\"simple-text logo-normal\">
            eBuyer
        </a>
    </div>
    <div class=\"sidebar-wrapper\">
        <ul class=\"nav\">
            <!-- Dashboard -->
            <li class=\"nav-item {% if app.request.attributes.get('_route') == 'dash' %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('dash') }}\">
                    <i class=\"material-icons\">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            <!-- Products -->
            <li class=\"nav-item {% if app.request.attributes.get('_route') == 'products' %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('products') }}\">
                    <i class=\"fas fa-shopping-cart\"></i>
                    <p> Products </p>
                </a>
            </li>

            <!-- The Warehouse -->
            <li class=\"nav-item {% if app.request.attributes.get('_route') == 'warehouse' %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('warehouse') }}\">
                    <i class=\"fas fa-warehouse\"></i>
                    <p> The Warehouse </p>
                </a>
            </li>

            <!-- Picking Stock -->
            <li class=\"nav-item {% if app.request.attributes.get('_route') == 'picking' %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('picking') }}\">
                    <i class=\"fas fa-warehouse\"></i>
                    <p> Pick Stock </p>
                </a>
            </li>

        </ul>
    </div>
    <div class=\"bottom\">
        <p>Legal statement about T&C's and stuff</p>
    </div>
</div>", "base/sidebar.twig", "/var/www/symfony_docker/templates/base/sidebar.twig");
    }
}
