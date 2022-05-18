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

/* /home/wwtela/public_html/themes/telassantoantonio/pages/contact.htm */
class __TwigTemplate_4bd356cb26154bdae056f2116caed4927be1e441710398fbf51d3f62dd7c7977 extends \Twig\Template
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
        echo "<div class=\"form\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">

                <h1 class=\"form-title\">Em que podemos ajudar?</h1>
                <h2 class=\"form-subtitle\">
                    Seja para solicitar um orçamento ou esclarecer dúvidas sobre nossos produtos. <br>
                    O seu contato é muito importante para nós!
                </h2>

               ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ContactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "    
                
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">

                <h1 class=\"form-title\">Em que podemos ajudar?</h1>
                <h2 class=\"form-subtitle\">
                    Seja para solicitar um orçamento ou esclarecer dúvidas sobre nossos produtos. <br>
                    O seu contato é muito importante para nós!
                </h2>

               {% component 'ContactForm' %}    
                
            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/pages/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 12);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
