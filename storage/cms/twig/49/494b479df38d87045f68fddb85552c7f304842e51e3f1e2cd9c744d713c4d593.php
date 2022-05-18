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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/products/item.htm */
class __TwigTemplate_11dfd2db3e1193ac0998eace49b8e341631bc22bbd9c9049e9f03554b2d9b3b8 extends \Twig\Template
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
        <div class=\"row prod-area\">
            <div class=\"col-12\">
                <h1 class=\"prod-pagename\">Produtos</h1>
            </div>            

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "
                ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, true, 17) == true)) {
                // line 18
                echo "
                    ";
                // line 19
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['record'] = $context["record"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("products/left"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 20
                echo "
                ";
            } else {
                // line 22
                echo "
                    ";
                // line 23
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['record'] = $context["record"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("products/right"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 24
                echo "
                ";
            }
            // line 26
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/products/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  97 => 26,  93 => 24,  88 => 23,  85 => 22,  81 => 20,  76 => 19,  73 => 18,  71 => 17,  68 => 16,  64 => 15,  55 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
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
        <div class=\"row prod-area\">
            <div class=\"col-12\">
                <h1 class=\"prod-pagename\">Produtos</h1>
            </div>            

            {% for record in records %}

                {% if record.type == true %}

                    {% partial 'products/left' record=record %}

                {% else %}

                    {% partial 'products/right' record=record %}

                {% endif %}

            {% endfor %}

        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/products/item.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "component" => 7, "for" => 15, "if" => 17, "partial" => 19);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'for', 'if', 'partial'],
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
