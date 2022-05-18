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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/product-single/produtos-agropecuarios.htm */
class __TwigTemplate_d49f49d180e64509d93d0282477cf79e38d9654ce17e3d09f3a35fc424ebaf08 extends \Twig\Template
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
        echo "
<div class=\"prod\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <p class=\"prod-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</p>
                <div class=\"prod-text\">
                    <p>Revenda de produtos agropecuários Gerdau.</p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <!-- ";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "table_product", [], "any", false, false, true, 19), 19, $this->source);
        echo " -->

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "custom_fields", [], "any", false, false, true, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 22
            echo "
                    ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "field_selector", [], "any", false, false, true, 23) == "field_type1")) {
                // line 24
                echo "                        ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-fields/field_type1"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 25
                echo "                    ";
            }
            // line 26
            echo "        
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
            <div class=\"col-4 prodtable-imgcontent d-none d-md-flex\">
                <img class=\"img-fluid prodtable-img\" src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/products/prodtable1.jpg");
        echo "\" alt=\"Produto 1\">
                <img class=\"img-fluid prodtable-img\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/products/prodtable2.jpg");
        echo "\" alt=\"Produto 1\">
                <img class=\"img-fluid prodtable-img\" src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/products/prodtable3.jpg");
        echo "\" alt=\"Produto 1\">
            </div>
        </div>
    </div>
</div>

<div class=\"col-12 prod-buttoncontent text-center py-5 my-5\">
    <a class=\"prod-buttonbudget\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("budget");
        echo "\">Peça o seu orçamento</a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/produtos-agropecuarios.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  113 => 32,  109 => 31,  105 => 30,  101 => 28,  94 => 26,  91 => 25,  85 => 24,  83 => 23,  80 => 22,  76 => 21,  71 => 19,  62 => 13,  55 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
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
                <p class=\"prod-title\">{{ record.name }}</p>
                <div class=\"prod-text\">
                    <p>Revenda de produtos agropecuários Gerdau.</p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <!-- {{ record.table_product|raw }} -->

                {% for field in record.custom_fields %}

                    {% if field.field_selector == 'field_type1' %}
                        {% partial 'product-single/custom-fields/field_type1' field=field %}
                    {% endif %}
        
                {% endfor %}
            </div>
            <div class=\"col-4 prodtable-imgcontent d-none d-md-flex\">
                <img class=\"img-fluid prodtable-img\" src=\"{{ 'assets/images/products/prodtable1.jpg'|theme }}\" alt=\"Produto 1\">
                <img class=\"img-fluid prodtable-img\" src=\"{{ 'assets/images/products/prodtable2.jpg'|theme }}\" alt=\"Produto 1\">
                <img class=\"img-fluid prodtable-img\" src=\"{{ 'assets/images/products/prodtable3.jpg'|theme }}\" alt=\"Produto 1\">
            </div>
        </div>
    </div>
</div>

<div class=\"col-12 prod-buttoncontent text-center py-5 my-5\">
    <a class=\"prod-buttonbudget\" href=\"{{ 'budget'|page }}\">Peça o seu orçamento</a>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/produtos-agropecuarios.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "component" => 7, "for" => 21, "if" => 23, "partial" => 24);
        static $filters = array("escape" => 13, "raw" => 19, "theme" => 30, "page" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'for', 'if', 'partial'],
                ['escape', 'raw', 'theme', 'page'],
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
