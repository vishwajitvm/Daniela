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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type5.htm */
class __TwigTemplate_a31e54b5a0952e458002e2c02e0a9599644722d9e8f671320df16002e47b5017 extends \Twig\Template
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
        echo "<!-- Tipo 5 ( 3 Imagens com seus respectivos títulos ) -->

<div class=\"col-12 prodsingle-type5\">
    <div class=\"row\">
        <div class=\"col-10 offset-1 col-md-3 offset-md-1 mb-5 mb-md-0\">
            <h2 class=\"prod-subtitle\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title_type5_left", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
            <img src=\"";
        // line 7
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "image_type5_left", [], "any", false, false, true, 7), 7, $this->source));
        echo "\" class=\"img-fluid\">
        </div>
        <div class=\"col-10 offset-1 col-md-3 my-5 my-md-0\">
            <h2 class=\"prod-subtitle\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title_type5_center", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</h2>
            <img src=\"";
        // line 11
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "image_type5_center", [], "any", false, false, true, 11), 11, $this->source));
        echo "\" class=\"img-fluid\">
        </div>
        <div class=\"col-10 offset-1 col-md-2 my-5 my-md-0\">
            <h2 class=\"prod-subtitle\">";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title_type5_right", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</h2>
            <img src=\"";
        // line 15
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "image_type5_right", [], "any", false, false, true, 15), 15, $this->source));
        echo "\" class=\"img-fluid\">
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type5.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  66 => 14,  60 => 11,  56 => 10,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Tipo 5 ( 3 Imagens com seus respectivos títulos ) -->

<div class=\"col-12 prodsingle-type5\">
    <div class=\"row\">
        <div class=\"col-10 offset-1 col-md-3 offset-md-1 mb-5 mb-md-0\">
            <h2 class=\"prod-subtitle\">{{ field.title_type5_left }}</h2>
            <img src=\"{{ field.image_type5_left|media }}\" class=\"img-fluid\">
        </div>
        <div class=\"col-10 offset-1 col-md-3 my-5 my-md-0\">
            <h2 class=\"prod-subtitle\">{{ field.title_type5_center }}</h2>
            <img src=\"{{ field.image_type5_center|media }}\" class=\"img-fluid\">
        </div>
        <div class=\"col-10 offset-1 col-md-2 my-5 my-md-0\">
            <h2 class=\"prod-subtitle\">{{ field.title_type5_right }}</h2>
            <img src=\"{{ field.image_type5_right|media }}\" class=\"img-fluid\">
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type5.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6, "media" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'media'],
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
