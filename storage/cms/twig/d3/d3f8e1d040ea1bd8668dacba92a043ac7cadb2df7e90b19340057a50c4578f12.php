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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type2.htm */
class __TwigTemplate_f644ad52c676503fc78c5da08cdf26aa3be1799c54dd7168e23d7062f461e2d0 extends \Twig\Template
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
        echo "<!-- Tipo 2 ( Título, Descrição ocupando maior parte do bloco e 1 Imagem pequena à direita ) -->

<div class=\"col-12 prodsingle-submargin\">
    <div class=\"row\">
        <div class=\"col-md-9\">
            <h2 class=\"prod-subtitle\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title_type2", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
            <div class=\"prod-text\">
                ";
        // line 8
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "description_type2", [], "any", false, false, true, 8), 8, $this->source);
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <img src=\"";
        // line 12
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "image_type2", [], "any", false, false, true, 12), 12, $this->source));
        echo "\" class=\"img-fluid\">
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Tipo 2 ( Título, Descrição ocupando maior parte do bloco e 1 Imagem pequena à direita ) -->

<div class=\"col-12 prodsingle-submargin\">
    <div class=\"row\">
        <div class=\"col-md-9\">
            <h2 class=\"prod-subtitle\">{{ field.title_type2 }}</h2>
            <div class=\"prod-text\">
                {{ field.description_type2|raw }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <img src=\"{{ field.image_type2|media }}\" class=\"img-fluid\">
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/custom-fields/field_type2.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6, "raw" => 8, "media" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 'media'],
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
