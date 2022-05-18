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

/* C:\laravel\office\Daniela\themes\telassantoantonio\partials\home\news.htm */
class __TwigTemplate_6b879c431bf43ddd543b833f5362f9a4c0b6716002648ca97aff4b52f56c4339 extends \Twig\Template
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
        echo "<div class=\"homenews\">
    <div class=\"container\">
        <div class=\"row\">
            <div data-aos=\"fade-up\" class=\"col-lg-5 homenews-leftside\">
                <h2 class=\"homenews-title\">#novidades</h2>
                <img class=\"homenews-img img-fluid\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home/novidades.jpg");
        echo "\" alt=\"Novidades\">
            </div>
            <div data-aos=\"fade-up\" class=\"col-lg-5 offset-lg-2 offset-xxl-1 homenews-rightside\">
                <div class=\"homenews-textcontent\">
                    <h2 class=\"homenews-titletext\">Tela para alambrado com revestimento em PVC</h2>
                    <p class=\"homenews-text\">Fabricadas sob medida, as telas de arame com revestimento em PVC, estão disponíveis nas mais diversas cores (branca, cinza, verde, azul etc.).</p>
                    <p class=\"homenews-text\">Nosso trabalho é realizado priorizado a tranquilidade e segurança do cliente, com materiais de primeira e um acabamento impecável.</p>
                    <div class=\"homenews-socialcontent\">
                        <a class=\"homenews-button\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\">Saiba mais</a>
                        <div class=\"homenews-sharecontent\">
                            <p class=\"homenews-share\">Compartilhar</p>
                            <a class=\"homenews-sharelink\" href=\"javascript:;\">
                                <img class=\"homenews-shareicon\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook.svg");
        echo "\" alt=\"Facebook\">
                            </a>
                            <a class=\"homenews-sharelink\" href=\"javascript:;\">
                                <img class=\"homenews-shareicon\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin.svg");
        echo "\" alt=\"LinkedIn\">
                            </a>
                            <a class=\"homenews-sharelink\" href=\"javascript:;\">
                                <img class=\"homenews-shareicon\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram.svg");
        echo "\" alt=\"Instagram\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\home\\news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  70 => 21,  64 => 18,  57 => 14,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"homenews\">
    <div class=\"container\">
        <div class=\"row\">
            <div data-aos=\"fade-up\" class=\"col-lg-5 homenews-leftside\">
                <h2 class=\"homenews-title\">#novidades</h2>
                <img class=\"homenews-img img-fluid\" src=\"{{ 'assets/images/home/novidades.jpg'|theme }}\" alt=\"Novidades\">
            </div>
            <div data-aos=\"fade-up\" class=\"col-lg-5 offset-lg-2 offset-xxl-1 homenews-rightside\">
                <div class=\"homenews-textcontent\">
                    <h2 class=\"homenews-titletext\">Tela para alambrado com revestimento em PVC</h2>
                    <p class=\"homenews-text\">Fabricadas sob medida, as telas de arame com revestimento em PVC, estão disponíveis nas mais diversas cores (branca, cinza, verde, azul etc.).</p>
                    <p class=\"homenews-text\">Nosso trabalho é realizado priorizado a tranquilidade e segurança do cliente, com materiais de primeira e um acabamento impecável.</p>
                    <div class=\"homenews-socialcontent\">
                        <a class=\"homenews-button\" href=\"{{ 'news'|page }}\">Saiba mais</a>
                        <div class=\"homenews-sharecontent\">
                            <p class=\"homenews-share\">Compartilhar</p>
                            <a class=\"homenews-sharelink\" href=\"javascript:;\">
                                <img class=\"homenews-shareicon\" src=\"{{ 'assets/images/facebook.svg'|theme }}\" alt=\"Facebook\">
                            </a>
                            <a class=\"homenews-sharelink\" href=\"javascript:;\">
                                <img class=\"homenews-shareicon\" src=\"{{ 'assets/images/linkedin.svg'|theme }}\" alt=\"LinkedIn\">
                            </a>
                            <a class=\"homenews-sharelink\" href=\"javascript:;\">
                                <img class=\"homenews-shareicon\" src=\"{{ 'assets/images/instagram.svg'|theme }}\" alt=\"Instagram\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\home\\news.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 6, "page" => 14);
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
