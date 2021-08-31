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

/* dashboard/index.html.twig */
class __TwigTemplate_d1b8e6328086b4ba8b530170cfdc6db3de11dfba390beefb6318ebed161b1794 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello eBuyer!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"example-wrapper\">
    <h1>Hello eBuyer!</h1>

    This is an example coding task, based on the requirements set out in the technical task:
    <ol>
        <li>Create a database of 60 products. Assign each a stock level and a unique bin location from the range A1 - F10</li>
        <li>Provide a tool for querying a product or a bin location. It should return the product description, bin location and current stock level.</li>
        <li>Provide a tool to generate a picking route for a list of five or more products. The algorithm should consider factors such as speed, efficiency and scalability.</li>
        <li>All routes should start and end at a picking station. Your algorithm may choose which ones.</li>
        <li>The solution must be written in PHP and demonstrate an object oriented approach.</li>
        <li>The database should be MySQL.</li>
        <li>Third party libraries are allowed for providing basic functionality however the route
            algorithm itself must be your own code.</li>
        <li>Provide a brief explanation of the approach taken and any considerations that went
            into it. Discuss how your solution would scale to a larger warehouse or orders with
            more products.</li>
        <li>Provide instructions on how to use the tools you have written.</li>
    </ol>

    <h3>Products</h3>
    <p>Before you begin, in order to load the products into the database, please ensure you have run 'symfony console doctrine:fixtures:load'.
    This will ensure the products are generated using the Faker plugin for Symfony and loaded into the MySQL 8.0 database.</p>
    <p>Products and querying them, along with their stock level, bin location and price et al is done through the products tab
    on the left.  This is done using jquery DataTables.  Simply go to the tab, enter the product name, desctiption, bin location
    or any part thereof that you wish to query and the search should occur automatically!</p>

    <h3>The Warehouse</h3>
    <p>The warehouse itself is set out as per the brief (above) with the added marked picking locations in light grey.  As an added bonus,
    in the warehouse tab itself, by clicking on a bin, you can see the product contained within it!</p>

    <h3>Picking Stock</h3>
    <p>Originally, I planned on a full blown form input here, allowing for the user to select multiple products by way of
    a form, allowing the user to add/remove stock lines, set quantities and more, then submit to the back end for validation on
    stock quantities remaining and more.  However, time and health got in the way.</p>
    <p>Therefore, the solution became a more simple one: simply select five products at random from the database, ordered by picking
    location in ascending order.  The picking locations are set out in a snake format around the warehouse (See The Warehouse for the
    layout), giving the mose efficient way of picking without implementing a full Travelling Salesperson algorithm.</p>
    <p>With more time and focus, I would have liked to implement better route planning and management, but the solution proposed here
    is a simple one: set the warehouse out as proposed, marked locations as they are and then order the picking locations, moving around them
    in ascending (or even descending) order, starting at the closest Packing Station to the first item, then finshing at the closest to the
    final packing station.</p>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello eBuyer!{% endblock %}

{% block body %}

<div class=\"example-wrapper\">
    <h1>Hello eBuyer!</h1>

    This is an example coding task, based on the requirements set out in the technical task:
    <ol>
        <li>Create a database of 60 products. Assign each a stock level and a unique bin location from the range A1 - F10</li>
        <li>Provide a tool for querying a product or a bin location. It should return the product description, bin location and current stock level.</li>
        <li>Provide a tool to generate a picking route for a list of five or more products. The algorithm should consider factors such as speed, efficiency and scalability.</li>
        <li>All routes should start and end at a picking station. Your algorithm may choose which ones.</li>
        <li>The solution must be written in PHP and demonstrate an object oriented approach.</li>
        <li>The database should be MySQL.</li>
        <li>Third party libraries are allowed for providing basic functionality however the route
            algorithm itself must be your own code.</li>
        <li>Provide a brief explanation of the approach taken and any considerations that went
            into it. Discuss how your solution would scale to a larger warehouse or orders with
            more products.</li>
        <li>Provide instructions on how to use the tools you have written.</li>
    </ol>

    <h3>Products</h3>
    <p>Before you begin, in order to load the products into the database, please ensure you have run 'symfony console doctrine:fixtures:load'.
    This will ensure the products are generated using the Faker plugin for Symfony and loaded into the MySQL 8.0 database.</p>
    <p>Products and querying them, along with their stock level, bin location and price et al is done through the products tab
    on the left.  This is done using jquery DataTables.  Simply go to the tab, enter the product name, desctiption, bin location
    or any part thereof that you wish to query and the search should occur automatically!</p>

    <h3>The Warehouse</h3>
    <p>The warehouse itself is set out as per the brief (above) with the added marked picking locations in light grey.  As an added bonus,
    in the warehouse tab itself, by clicking on a bin, you can see the product contained within it!</p>

    <h3>Picking Stock</h3>
    <p>Originally, I planned on a full blown form input here, allowing for the user to select multiple products by way of
    a form, allowing the user to add/remove stock lines, set quantities and more, then submit to the back end for validation on
    stock quantities remaining and more.  However, time and health got in the way.</p>
    <p>Therefore, the solution became a more simple one: simply select five products at random from the database, ordered by picking
    location in ascending order.  The picking locations are set out in a snake format around the warehouse (See The Warehouse for the
    layout), giving the mose efficient way of picking without implementing a full Travelling Salesperson algorithm.</p>
    <p>With more time and focus, I would have liked to implement better route planning and management, but the solution proposed here
    is a simple one: set the warehouse out as proposed, marked locations as they are and then order the picking locations, moving around them
    in ascending (or even descending) order, starting at the closest Packing Station to the first item, then finshing at the closest to the
    final packing station.</p>
</div>
{% endblock %}
", "dashboard/index.html.twig", "/var/www/symfony_docker/templates/dashboard/index.html.twig");
    }
}
