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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/home/banner_mobile.htm */
class __TwigTemplate_4c025b47dfa4c66ce8d4a8840ed51295c077a688f9655a059432521cfc7e61ce extends \Twig\Template
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
        echo "<div class=\"bannermobile\">
    <img class=\"bannermobile-img img-fluid\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home/banner1.jpg");
        echo "\" alt=\"Banner\">
    <div class=\"bannermobile-textcontent\">
        <h2 class=\"banner-title\">
                No campo ou na cidade
                nossos produtos garantem
                a sua tranquilidade.
        </h2>
        <a class=\"banner-button\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("budget");
        echo "\">Peça o seu orçamento</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/home/banner_mobile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bannermobile\">
    <img class=\"bannermobile-img img-fluid\" src=\"{{ 'assets/images/home/banner1.jpg'|theme }}\" alt=\"Banner\">
    <div class=\"bannermobile-textcontent\">
        <h2 class=\"banner-title\">
                No campo ou na cidade
                nossos produtos garantem
                a sua tranquilidade.
        </h2>
        <a class=\"banner-button\" href=\"{{ 'budget'|page }}\">Peça o seu orçamento</a>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/home/banner_mobile.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 2, "page" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
