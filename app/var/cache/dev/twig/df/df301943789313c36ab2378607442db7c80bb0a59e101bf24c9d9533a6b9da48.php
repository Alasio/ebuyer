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

/* warehouse/productModal/item.twig */
class __TwigTemplate_75d8a71b4259e654739319b5ee6052f1ce3326892d50de734fc4a61de137b6f8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "warehouse/productModal/item.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "warehouse/productModal/item.twig"));

        // line 1
        echo "<div class=\"card modal-content\">
    <div class=\"card-text card-header-text card-header-primary\">
        <h5 class=\"card-text\">
            Product In Bin ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "stockBin", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
        </h5>
    </div>

    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"modal-body\">
        <table class=\"table table-bordered table-striped dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"
               role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
            <thead>
            <tr role=\"row\">
                </th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                    aria-label=\"Name: activate to sort column ascending\">Name
                </th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                    aria-label=\"Email: activate to sort column ascending\">Description
                </th>
                <th tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\">Cost
                </th>
                <th tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\">Stock
                </th>
            </tr>
            </thead>
            <tbody>
                <td>
                    ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "
                </td>
                <td>
                    ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
        echo "
                </td>
                <td>
                    ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "cost", [], "any", false, false, false, 39), "GBP"), "html", null, true);
        echo "
                </td>
                <td>
                    ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "stock", [], "any", false, false, false, 42), "html", null, true);
        echo "
                </td>
            </tbody>
        </table>
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "warehouse/productModal/item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  92 => 39,  86 => 36,  80 => 33,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card modal-content\">
    <div class=\"card-text card-header-text card-header-primary\">
        <h5 class=\"card-text\">
            Product In Bin {{ product.stockBin.name }}
        </h5>
    </div>

    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"modal-body\">
        <table class=\"table table-bordered table-striped dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"
               role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
            <thead>
            <tr role=\"row\">
                </th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                    aria-label=\"Name: activate to sort column ascending\">Name
                </th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                    aria-label=\"Email: activate to sort column ascending\">Description
                </th>
                <th tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\">Cost
                </th>
                <th tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\">Stock
                </th>
            </tr>
            </thead>
            <tbody>
                <td>
                    {{ product.name }}
                </td>
                <td>
                    {{ product.description }}
                </td>
                <td>
                    {{ product.cost|format_currency('GBP') }}
                </td>
                <td>
                    {{ product.stock }}
                </td>
            </tbody>
        </table>
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
    </div>
</div>", "warehouse/productModal/item.twig", "/var/www/symfony_docker/templates/warehouse/productModal/item.twig");
    }
}
