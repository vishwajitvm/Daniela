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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/product-single/left.htm */
class __TwigTemplate_1322132e90f57edea3598d2fbac9549c02c75969207b49126416ae3e839a100e extends \Twig\Template
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
        echo "<div class=\"prod-left ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "box_color", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <p class=\"prod-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-lg-6 order-2 order-lg-1 prod-text\">
                ";
        // line 8
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 8), 8, $this->source);
        echo "
            </div>
            <div class=\"col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-0 order-1 order-lg-2 prod-imgcontent\">
                <div class=\"prod-item\">
                    <img class=\"prod-img img-fluid\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "photo", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" alt=\"Produto\" />
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/left.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  53 => 8,  47 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"prod-left {{ record.box_color }}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <p class=\"prod-title\">{{ record.name }}</p>
            </div>
            <div class=\"col-lg-6 order-2 order-lg-1 prod-text\">
                {{ record.description|raw }}
            </div>
            <div class=\"col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-0 order-1 order-lg-2 prod-imgcontent\">
                <div class=\"prod-item\">
                    <img class=\"prod-img img-fluid\" src=\"{{ record.photo.path }}\" alt=\"Produto\" />
                </div>
            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/left.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "raw" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw'],
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
