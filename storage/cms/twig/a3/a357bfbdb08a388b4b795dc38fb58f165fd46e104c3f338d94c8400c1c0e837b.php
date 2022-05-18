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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/site/header.htm */
class __TwigTemplate_e26204e5a09eba8720d30d250cb4907c29e474191bc9d2f97b44acc527069de5 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 col-md-3\">
                <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                    <img class=\"header-logo img-fluid\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Telas Santo Antonio\">
                </a>
            </div>
            <div class=\"col-md-8 header-linkcontainer d-none d-md-flex\">
                <a class=\"header-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Produtos</a>
            </div>
            <div class=\"col-2 col-md-1 header-iconcontainer\">
                <button class=\"header-burger-btn\" data-action=\"openBurgerMenu\">
                    <span 
                    ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "id", [], "any", false, false, true, 15) == "home")) {
            // line 16
            echo "                        class=\"header-icon-home\"
                    ";
        } else {
            // line 18
            echo "                        class=\"header-icon-internal\"
                    ";
        }
        // line 19
        echo ">
                    </span>
                </button>
            </div>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 18,  66 => 16,  64 => 15,  56 => 10,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 col-md-3\">
                <a href=\"{{ 'home'|page }}\">
                    <img class=\"header-logo img-fluid\" src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"Telas Santo Antonio\">
                </a>
            </div>
            <div class=\"col-md-8 header-linkcontainer d-none d-md-flex\">
                <a class=\"header-link\" href=\"{{ 'product'|page }}\">Produtos</a>
            </div>
            <div class=\"col-2 col-md-1 header-iconcontainer\">
                <button class=\"header-burger-btn\" data-action=\"openBurgerMenu\">
                    <span 
                    {% if this.page.id == 'home' %}
                        class=\"header-icon-home\"
                    {% else %}
                        class=\"header-icon-internal\"
                    {% endif %}>
                    </span>
                </button>
            </div>
        </div>
    </div>
</nav>", "/home/wwtela/public_html/themes/telassantoantonio/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("page" => 5, "theme" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
