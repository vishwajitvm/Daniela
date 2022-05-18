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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type6.htm */
class __TwigTemplate_08ff0f3c2223881af17592ba3be53f21047ca22bad7ae52346bbc749ec694736 extends \Twig\Template
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
        echo "<!-- Tipo 6 ( Título, 1 Imagem e 1 Tabela ) -->

<div class=\"col-12 prodsingle-type6\">
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title_type6", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
    <div class=\"row\">
        <div class=\"col-10 offset-1 col-md-5 offset-md-0 mb-5 mb-md-0\">
            <img src=\"";
        // line 7
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "image_type6", [], "any", false, false, true, 7), 7, $this->source));
        echo "\" class=\"img-fluid\">
        </div>
        <div class=\"col-10 offset-1 col-md-7 offset-md-0 mt-5 mt-md-0\">
            ";
        // line 10
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "table_type6", [], "any", false, false, true, 10), 10, $this->source);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type6.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  50 => 7,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Tipo 6 ( Título, 1 Imagem e 1 Tabela ) -->

<div class=\"col-12 prodsingle-type6\">
    <h2>{{ field.title_type6 }}</h2>
    <div class=\"row\">
        <div class=\"col-10 offset-1 col-md-5 offset-md-0 mb-5 mb-md-0\">
            <img src=\"{{ field.image_type6|media }}\" class=\"img-fluid\">
        </div>
        <div class=\"col-10 offset-1 col-md-7 offset-md-0 mt-5 mt-md-0\">
            {{ field.table_type6|raw }}
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type6.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4, "media" => 7, "raw" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'media', 'raw'],
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
