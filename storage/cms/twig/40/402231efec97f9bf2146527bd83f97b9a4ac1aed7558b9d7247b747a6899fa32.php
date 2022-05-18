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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/forms/success.htm */
class __TwigTemplate_b7a24e14fa9ae8c53a135cf750ea4d1dabe4fb086405ea8d076c1688c859d8a9 extends \Twig\Template
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
        echo "<div class=\"form form-success\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                <h1 class=\"form-title\">Obrigado pela sua mensagem!</h1>
                <h2 class=\"form-subtitle\">Em breve um de nossos profissionais entrará em contato.</h2>

                <div class=\"row\">
                    <div class=\"col-md-4 offset-md-4\">
                        <a class=\"form-button\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Voltar</a>
                    </div>
                </div>                

            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/forms/success.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form form-success\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                <h1 class=\"form-title\">Obrigado pela sua mensagem!</h1>
                <h2 class=\"form-subtitle\">Em breve um de nossos profissionais entrará em contato.</h2>

                <div class=\"row\">
                    <div class=\"col-md-4 offset-md-4\">
                        <a class=\"form-button\" href=\"{{ 'home'|page }}\">Voltar</a>
                    </div>
                </div>                

            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/forms/success.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
