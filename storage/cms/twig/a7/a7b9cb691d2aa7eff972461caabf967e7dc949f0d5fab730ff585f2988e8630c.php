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

/* C:\laravel\office\Daniela\themes\telassantoantonio\partials\about\dna.htm */
class __TwigTemplate_07b7610841033ecfec84953a3c8e3b664c5ad9197ab854e5f7bb35bb2d77695f extends \Twig\Template
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
        echo "<div class=\"aboutdna\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <h2 class=\"aboutdna-title\">Nosso DNA</h2>
                <p class=\"aboutdna-text\">Compromisso e qualidade são a base fundamental para nossa empresa que utiliza sistemas modernos de gestão integrada garantindo o desempenho dos produtos, economia de tempo, prevenção de falhas, ações de sustentabilidade para preservação do meio ambiente e satisfação dos clientes, fornecedores e colaboradores. Atendemos o segmento residencial, comercial e industrial oferecendo soluções diferenciadas e completas visando auxiliar da melhor maneira cada especificação. </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\about\\dna.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"aboutdna\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <h2 class=\"aboutdna-title\">Nosso DNA</h2>
                <p class=\"aboutdna-text\">Compromisso e qualidade são a base fundamental para nossa empresa que utiliza sistemas modernos de gestão integrada garantindo o desempenho dos produtos, economia de tempo, prevenção de falhas, ações de sustentabilidade para preservação do meio ambiente e satisfação dos clientes, fornecedores e colaboradores. Atendemos o segmento residencial, comercial e industrial oferecendo soluções diferenciadas e completas visando auxiliar da melhor maneira cada especificação. </p>
            </div>
        </div>
    </div>
</div>", "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\about\\dna.htm", "");
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
