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

/* C:\laravel\office\Daniela\themes\telassantoantonio\partials\products\left.htm */
class __TwigTemplate_af35516b03775e8bec74c23582f6db58fbd00262de56c1ae4658292415869ae9 extends \Twig\Template
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
                <h2 class=\"prod-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
            </div>

            <div class=\"col-lg-6 order-2 order-lg-1\">
                <div class=\"prod-text\">
                    ";
        // line 11
        echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 11), 11, $this->source), 500]);
        echo "
                </div>

                <div class=\"prod-buttoncontent\">
                    <a class=\"prod-buttonabout\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 15, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 15)]);
        echo "\">Saiba mais</a>
                    <a class=\"prod-buttonbudget\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("budget");
        echo "\">Peça o seu orçamento</a>
                </div>
            </div>

            <div class=\"col-8 offset-2 col-lg-6 offset-lg-0 order-1 order-lg-2 prod-imgcontent\">
                <div class=\"prod-item\">
                    <img class=\"prod-img img-fluid\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "photo", [], "any", false, false, true, 22), "path", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\" alt=\"Produto\" />
                </div>
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\products\\left.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  67 => 16,  63 => 15,  56 => 11,  48 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"prod-left {{ record.box_color }}\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-12\">
                <h2 class=\"prod-title\">{{ record.name }}</h2>
            </div>

            <div class=\"col-lg-6 order-2 order-lg-1\">
                <div class=\"prod-text\">
                    {{ html_limit(record.description|raw, 500) }}
                </div>

                <div class=\"prod-buttoncontent\">
                    <a class=\"prod-buttonabout\" href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">Saiba mais</a>
                    <a class=\"prod-buttonbudget\" href=\"{{ 'budget'|page }}\">Peça o seu orçamento</a>
                </div>
            </div>

            <div class=\"col-8 offset-2 col-lg-6 offset-lg-0 order-1 order-lg-2 prod-imgcontent\">
                <div class=\"prod-item\">
                    <img class=\"prod-img img-fluid\" src=\"{{ record.photo.path }}\" alt=\"Produto\" />
                </div>
            </div>

        </div>
    </div>
</div>", "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\products\\left.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "raw" => 11, "page" => 15);
        static $functions = array("html_limit" => 11);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 'page'],
                ['html_limit']
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
