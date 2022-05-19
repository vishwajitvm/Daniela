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

/* C:\laravel\office\Daniela\themes\telassantoantonio\partials\home\history.htm */
class __TwigTemplate_5a522f9f0aefab77ef356f4b2cdcc2835ad32bebb2d3d11ec6db54400718bcd0 extends \Twig\Template
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
                    A TSA está no mercado de telas e alambrados desde 1985, além de distribuição de arames, gradil, concertinas e uma variedade de tipos de telas.
                    A TSA surgiu de um sonho e através de muita força de vontade, transformou-se em realidade. Com a força da família surgiu a A Força da Estrutura, contando com o engajamento dos colaboradores, aliado aos investimentos em tecnologia e equipamentos, a empresa atingiu o crescimento e hoje, cumpre o propósito de levar até você, as melhores e diferentes malhas e telas do mercado.
                    A Telas Santo Antonio está localizada em Itapetininga-SP em uma área de 2000 m2 na fabricação e comercialização de telas e alambrados.
                </h3>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\home\\history.htm";
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
                    A TSA está no mercado de telas e alambrados desde 1985, além de distribuição de arames, gradil, concertinas e uma variedade de tipos de telas.
                    A TSA surgiu de um sonho e através de muita força de vontade, transformou-se em realidade. Com a força da família surgiu a A Força da Estrutura, contando com o engajamento dos colaboradores, aliado aos investimentos em tecnologia e equipamentos, a empresa atingiu o crescimento e hoje, cumpre o propósito de levar até você, as melhores e diferentes malhas e telas do mercado.
                    A Telas Santo Antonio está localizada em Itapetininga-SP em uma área de 2000 m2 na fabricação e comercialização de telas e alambrados.
                </h3>
            </div>
        </div>
    </div>
</div>", "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\home\\history.htm", "");
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
