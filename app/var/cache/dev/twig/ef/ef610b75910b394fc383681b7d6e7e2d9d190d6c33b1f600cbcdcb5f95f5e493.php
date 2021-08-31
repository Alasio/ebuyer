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

/* warehouse/index.html.twig */
class __TwigTemplate_4603614a81c38308b9c4f6e1b78d08775542aab27f9060580a1ef2b80e2eb920 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "warehouse/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "warehouse/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "warehouse/index.html.twig", 1);
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

        echo "The Warehouse";
        
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
        echo "    <h1>The Warehouse</h1>

    <div class=\"wrapper\">
        <table style=\"width: 100%\" class=\"table table-bordered\">
            <tr>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">10</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                        role=\"button\"
                        data-location=\"WarehouseController::showProductInBin\"
                        data-content=\"modalContent\"
                        data-name=\"B10\"
                        data-toggle=\"modal\"
                        data-target=\"#modal\">
                        B10
                    </a></td>
                <td style=\"width: 10%; background-color: lightgrey\">11</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">30</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">31</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">9</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">12</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">29</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">32</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">8</td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A8
                    </a></td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B8
                    </a></td>
                <td style=\"width: 10%; background-color: lightgrey\">13</td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C8
                    </a></td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D8
                    </a></td>
                <td style=\"width: 10%; background-color: lightgrey\">28</td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E8
                    </a></td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F8
                    </a></td>
                <td style=\"width: 10%; background-color: lightgrey\">33</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">7</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">14</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">27</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">34</td>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">6</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">15</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">26</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">35</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">5</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">16</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">25</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">36</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">4</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">17</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">24</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">37</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">3</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">18</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">23</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">38</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">2</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">19</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">22</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">39</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">1</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">20</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">21</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">40</td>
            </tr>
            <tr>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: blue; color: white\">P1</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: blue; color: white\">P2</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: blue; color: white\">P3</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
            </tr>
        </table>
        <br/>
        Key:
        <table>
            <tr>
                <td style=\"background-color: yellow\">&nbsp;</td>
                <td>Product Bin</td>
            </tr>
            <tr>
                <td style=\"background-color: blue\">&nbsp;</td>
                <td>Packing Location</td>
            </tr>
            <tr>
                <td style=\"background-color: lightgrey\"></td>
                <td>Picking Location</td>
            </tr>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "warehouse/index.html.twig";
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

{% block title %}The Warehouse{% endblock %}

{% block body %}
    <h1>The Warehouse</h1>

    <div class=\"wrapper\">
        <table style=\"width: 100%\" class=\"table table-bordered\">
            <tr>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">10</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                        role=\"button\"
                        data-location=\"WarehouseController::showProductInBin\"
                        data-content=\"modalContent\"
                        data-name=\"B10\"
                        data-toggle=\"modal\"
                        data-target=\"#modal\">
                        B10
                    </a></td>
                <td style=\"width: 10%; background-color: lightgrey\">11</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">30</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F10\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F10
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">31</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">9</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">12</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">29</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F9\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F9
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">32</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">8</td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A8
                    </a></td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B8
                    </a></td>
                <td style=\"width: 10%; background-color: lightgrey\">13</td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C8
                    </a></td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D8
                    </a></td>
                <td style=\"width: 10%; background-color: lightgrey\">28</td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E8
                    </a></td>
                <td style=\"width: 10%; background-color: yellow\"><a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F8\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F8
                    </a></td>
                <td style=\"width: 10%; background-color: lightgrey\">33</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">7</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">14</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">27</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F7\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F7
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">34</td>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">6</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">15</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">26</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F6\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F6
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">35</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">5</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">16</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">25</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F5\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F5
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">36</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">4</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">17</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">24</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F4\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F4
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">37</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">3</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">18</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">23</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F3\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F3
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">38</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">2</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">19</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">22</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F2\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F2
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">39</td>
            </tr>

            <tr>
                <td style=\"width: 10%; background-color: lightgrey\">1</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"A1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        A1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"B1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        B1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">20</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"C1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        C1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"D1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        D1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">21</td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"E1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        E1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: yellow\">
                    <a class=\"content-load-action\" href=\"#\"
                       role=\"button\"
                       data-location=\"WarehouseController::showProductInBin\"
                       data-content=\"modalContent\"
                       data-name=\"F1\"
                       data-toggle=\"modal\"
                       data-target=\"#modal\">
                        F1
                    </a>
                </td>
                <td style=\"width: 10%; background-color: lightgrey\">40</td>
            </tr>
            <tr>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: blue; color: white\">P1</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: blue; color: white\">P2</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: blue; color: white\">P3</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
                <td style=\"width: 10%; background-color: white\">&nbsp;</td>
            </tr>
        </table>
        <br/>
        Key:
        <table>
            <tr>
                <td style=\"background-color: yellow\">&nbsp;</td>
                <td>Product Bin</td>
            </tr>
            <tr>
                <td style=\"background-color: blue\">&nbsp;</td>
                <td>Packing Location</td>
            </tr>
            <tr>
                <td style=\"background-color: lightgrey\"></td>
                <td>Picking Location</td>
            </tr>
        </table>
    </div>
{% endblock %}
", "warehouse/index.html.twig", "/var/www/symfony_docker/templates/warehouse/index.html.twig");
    }
}
