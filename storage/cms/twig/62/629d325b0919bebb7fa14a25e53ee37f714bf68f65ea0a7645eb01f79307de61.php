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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/product-single/item.htm */
class __TwigTemplate_5302680e843bfd95d8b0e2282002947ef3693fce437874257bc105cf7cf300b6 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "<div class=\"prod\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"prod-pagename\">Produtos</h1>
            </div>

            ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", [], "any", false, false, true, 15) != "produtos-agropecuarios")) {
            // line 16
            echo "
                ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "type", [], "any", false, false, true, 17) == true)) {
                // line 18
                echo "
                    ";
                // line 19
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['record'] = ($context["record"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/left"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 20
                echo "
                    ";
                // line 21
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['record'] = ($context["record"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/subitem"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 22
                echo "
                ";
            } else {
                // line 24
                echo "
                    ";
                // line 25
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['record'] = ($context["record"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/right"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 26
                echo "
                    ";
                // line 27
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['record'] = ($context["record"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/subitem"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 28
                echo "                
                ";
            }
            // line 30
            echo "
            ";
        } else {
            // line 32
            echo "
                ";
            // line 33
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['record'] = ($context["record"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/produtos-agropecuarios"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 34
            echo "                
            ";
        }
        // line 36
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  123 => 34,  118 => 33,  115 => 32,  111 => 30,  107 => 28,  102 => 27,  99 => 26,  94 => 25,  91 => 24,  87 => 22,  82 => 21,  79 => 20,  74 => 19,  71 => 18,  69 => 17,  66 => 16,  64 => 15,  55 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
{% component 'siteSearchInclude' %}
<div class=\"prod\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"prod-pagename\">Produtos</h1>
            </div>

            {% if record.slug != 'produtos-agropecuarios' %}

                {% if record.type == true %}

                    {% partial 'product-single/left' record=record %}

                    {% partial 'product-single/subitem' record=record %}

                {% else %}

                    {% partial 'product-single/right' record=record %}

                    {% partial 'product-single/subitem' record=record %}
                
                {% endif %}

            {% else %}

                {% partial 'product-single/produtos-agropecuarios' record=record %}
                
            {% endif %}

        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/item.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "component" => 7, "if" => 15, "partial" => 19);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'if', 'partial'],
                [],
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
