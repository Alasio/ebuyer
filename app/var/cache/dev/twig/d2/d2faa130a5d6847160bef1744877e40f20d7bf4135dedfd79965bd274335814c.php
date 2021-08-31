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

/* base/snippets/message.twig */
class __TwigTemplate_87954ddca4ddcdf17c4d1355def81a1f13e6ed0a223e2da173b8475bd663e7ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/snippets/message.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/snippets/message.twig"));

        // line 1
        if ((array_key_exists("addHeader", $context) && ((isset($context["addHeader"]) || array_key_exists("addHeader", $context) ? $context["addHeader"] : (function () { throw new RuntimeError('Variable "addHeader" does not exist.', 1, $this->source); })()) == true))) {
            // line 2
            echo "    <div class=\"uk-modal-header\">
        ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "
    </div>
";
        }
        // line 6
        echo "
<div class=\"alert alert-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " ";
        if (array_key_exists("addClass", $context)) {
            echo twig_escape_filter($this->env, (isset($context["addClass"]) || array_key_exists("addClass", $context) ? $context["addClass"] : (function () { throw new RuntimeError('Variable "addClass" does not exist.', 7, $this->source); })()), "html", null, true);
        }
        echo "\">
    ";
        // line 8
        if (twig_test_iterable((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "<br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        ";
            if ((array_key_exists("raw", $context) && ((isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new RuntimeError('Variable "raw" does not exist.', 13, $this->source); })()) == true))) {
                // line 14
                echo "            ";
                echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 14, $this->source); })());
                echo "
        ";
            } else {
                // line 16
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "
        ";
            }
            // line 18
            echo "    ";
        }
        // line 19
        echo "</div>

";
        // line 21
        if ((array_key_exists("addClose", $context) && ((isset($context["addClose"]) || array_key_exists("addClose", $context) ? $context["addClose"] : (function () { throw new RuntimeError('Variable "addClose" does not exist.', 21, $this->source); })()) == true))) {
            // line 22
            echo "    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\"
                ";
            // line 24
            if (array_key_exists("refreshPage", $context)) {
                // line 25
                echo "                    onClick=\"window.location.reload();\"
                ";
            }
            // line 27
            echo "        >Close</button>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/snippets/message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 27,  114 => 25,  112 => 24,  108 => 22,  106 => 21,  102 => 19,  99 => 18,  93 => 16,  87 => 14,  84 => 13,  81 => 12,  72 => 10,  67 => 9,  65 => 8,  57 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if addHeader is defined and addHeader == true %}
    <div class=\"uk-modal-header\">
        {{ header }}
    </div>
{% endif %}

<div class=\"alert alert-{{ status }} {% if addClass is defined %}{{ addClass }}{% endif %}\">
    {% if message is iterable %}
        {% for value in message %}
            {{ value }}<br>
        {% endfor %}
    {% else %}
        {% if raw is defined and raw == true %}
            {{ message|raw }}
        {% else %}
            {{ message }}
        {% endif %}
    {% endif %}
</div>

{% if addClose is defined and addClose == true %}
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\"
                {% if refreshPage is defined %}
                    onClick=\"window.location.reload();\"
                {% endif %}
        >Close</button>
    </div>
{% endif %}", "base/snippets/message.twig", "/var/www/symfony_docker/templates/base/snippets/message.twig");
    }
}
