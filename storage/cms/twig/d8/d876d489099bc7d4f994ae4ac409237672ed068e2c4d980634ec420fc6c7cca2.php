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

/* C:\laravel\office\Daniela\themes\telassantoantonio\partials\product-single\custom-fields\field_type4.htm */
class __TwigTemplate_66f5948e134e9ec4ae229cae569fb8c46786a4dd68568cd295b0cda8820d40f0 extends \Twig\Template
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
        echo "<!-- Tipo 4 ( 2 Imagens com seus respectivos títulos ) -->

<div class=\"col-12 prodsingle-type4\">
    <div class=\"row\">
        <div class=\"col-10 offset-1 col-md-3 mb-5 mb-md-0\">
            <h2 class=\"prod-subtitle\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title_type4_left", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
            <img src=\"";
        // line 7
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "image_type4_left", [], "any", false, false, true, 7), 7, $this->source));
        echo "\" class=\"img-fluid pt-4\">
        </div>
        <div class=\"col-10 offset-1 col-md-6 offset-md-1 mt-5 mt-md-0\">
            <h2 class=\"prod-subtitle\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title_type4_right", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</h2>
            <img src=\"";
        // line 11
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "image_type4_right", [], "any", false, false, true, 11), 11, $this->source));
        echo "\" class=\"img-fluid pt-4\">
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\product-single\\custom-fields\\field_type4.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  56 => 10,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Tipo 4 ( 2 Imagens com seus respectivos títulos ) -->

<div class=\"col-12 prodsingle-type4\">
    <div class=\"row\">
        <div class=\"col-10 offset-1 col-md-3 mb-5 mb-md-0\">
            <h2 class=\"prod-subtitle\">{{ field.title_type4_left }}</h2>
            <img src=\"{{ field.image_type4_left|media }}\" class=\"img-fluid pt-4\">
        </div>
        <div class=\"col-10 offset-1 col-md-6 offset-md-1 mt-5 mt-md-0\">
            <h2 class=\"prod-subtitle\">{{ field.title_type4_right }}</h2>
            <img src=\"{{ field.image_type4_right|media }}\" class=\"img-fluid pt-4\">
        </div>
    </div>
</div>", "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\product-single\\custom-fields\\field_type4.htm", "");
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
