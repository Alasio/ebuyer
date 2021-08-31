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

/* base/navbar.twig */
class __TwigTemplate_920348fff59cbbd1131bc351e2d72e24c875f2657f065c04fd97d11519081d38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/navbar.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/navbar.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
    <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-end\">
            <ul class=\"navbar-nav\">

            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/navbar.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
    <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-end\">
            <ul class=\"navbar-nav\">

            </ul>
        </div>
    </div>
</nav>", "base/navbar.twig", "/var/www/symfony_docker/templates/base/navbar.twig");
    }
}
