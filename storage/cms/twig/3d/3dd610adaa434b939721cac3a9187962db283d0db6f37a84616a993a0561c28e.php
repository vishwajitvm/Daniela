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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/about/mission.htm */
class __TwigTemplate_1fc9e949b522c598b3d876d56434254efc17c1b2767d033626e227e394460917 extends \Twig\Template
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
        echo "<div id=\"missao\" class=\"aboutmission\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <h2 class=\"aboutmission-title\">Missão</h2>
                <p class=\"aboutmission-text\">Garantia na excelência da qualidade dos nossos produtos, sempre prontos para superar as necessidades e expandir a relação com nossos clientes.</p>
            </div>
            <div class=\"col-lg-4\">
                <h2 class=\"aboutmission-title\">Visão</h2>
                <p class=\"aboutmission-text\">Ações baseadas em alta tecnologia realizada por profissionais capacitados que mantém o alto nível dos produtos.</p>
            </div>
            <div class=\"col-lg-4\">
                <h2 class=\"aboutmission-title\">Valores</h2>
                <p class=\"aboutmission-text\">Conduta ética, comprometimento com os clientes, qualidade nos produtos, práticas de inovação, eficiência de performance, responsabilidade ambiental, cooperação e respeito.</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/about/mission.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"missao\" class=\"aboutmission\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <h2 class=\"aboutmission-title\">Missão</h2>
                <p class=\"aboutmission-text\">Garantia na excelência da qualidade dos nossos produtos, sempre prontos para superar as necessidades e expandir a relação com nossos clientes.</p>
            </div>
            <div class=\"col-lg-4\">
                <h2 class=\"aboutmission-title\">Visão</h2>
                <p class=\"aboutmission-text\">Ações baseadas em alta tecnologia realizada por profissionais capacitados que mantém o alto nível dos produtos.</p>
            </div>
            <div class=\"col-lg-4\">
                <h2 class=\"aboutmission-title\">Valores</h2>
                <p class=\"aboutmission-text\">Conduta ética, comprometimento com os clientes, qualidade nos produtos, práticas de inovação, eficiência de performance, responsabilidade ambiental, cooperação e respeito.</p>
            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/about/mission.htm", "");
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
