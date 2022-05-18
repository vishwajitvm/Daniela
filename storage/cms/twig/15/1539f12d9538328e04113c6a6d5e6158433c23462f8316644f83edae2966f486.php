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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/home/history.htm */
class __TwigTemplate_0b1c78d3e6f40aa50168624c5e95f4636c9bc08b905235d60146f0ad9262923e extends \Twig\Template
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
        echo "<div class=\"homehistory\">
    <div class=\"container\">
        <div class=\"row\">
            <div data-aos=\"fade-zoom-in\" data-aos-easing=\"ease-in-back\" data-aos-delay=\"50\" data-aos-offset=\"0\" class=\"col-10 offset-1 col-md-8 offset-md-2\">
                <h2 class=\"homehistory-title\">Telas Santo Antônio, compromisso com a qualidade.</h2>
                <h3 class=\"homehistory-subtitle\">
                    A Telas Santo Antônio atua há mais de 30 anos na fabricação de telas e alambrados, além da distribuição de arames e pregos para todo o Brasil.
                    Sua fábrica está localizada na cidade de Itapetininga-SP, numa área de mais de 2.000m² onde são produzidos e armazenados seus produtos.
                    Além de produzir, a Telas Santo Antônio realiza entregas para todo o Brasil através de sua Frota Própria.
                </h3>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/home/history.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"homehistory\">
    <div class=\"container\">
        <div class=\"row\">
            <div data-aos=\"fade-zoom-in\" data-aos-easing=\"ease-in-back\" data-aos-delay=\"50\" data-aos-offset=\"0\" class=\"col-10 offset-1 col-md-8 offset-md-2\">
                <h2 class=\"homehistory-title\">Telas Santo Antônio, compromisso com a qualidade.</h2>
                <h3 class=\"homehistory-subtitle\">
                    A Telas Santo Antônio atua há mais de 30 anos na fabricação de telas e alambrados, além da distribuição de arames e pregos para todo o Brasil.
                    Sua fábrica está localizada na cidade de Itapetininga-SP, numa área de mais de 2.000m² onde são produzidos e armazenados seus produtos.
                    Além de produzir, a Telas Santo Antônio realiza entregas para todo o Brasil através de sua Frota Própria.
                </h3>
            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/home/history.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
