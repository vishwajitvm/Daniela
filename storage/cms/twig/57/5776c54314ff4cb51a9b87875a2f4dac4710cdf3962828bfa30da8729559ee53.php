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

/* C:\laravel\office\Daniela\themes\telassantoantonio\partials\home\banner.htm */
class __TwigTemplate_ee3ea6757d09b39c741ad063851046bd7a9a8d9f74d501f194d40708e9f65d64 extends \Twig\Template
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
        echo "<div class=\"banner\">
    <div class=\"container\">
        <div class=\"owl-carousel owl-theme\">

            <div class=\"banner-item\">
                <div class=\"row banner-carousel\">
                    <div data-animation-in=\"fadeInLeft\" data-animation-out=\"animate-out fadeOutLeft\" class=\"col-7 banner-textindex banner-fadeLeft\">
                        <div class=\"banner-textcontent\">
                            <h2 class=\"banner-title\">
                                No campo ou na cidade a TSA tem A Força da Estrutura em telas e alambrados.
                            </h2>
                            <h3 class=\"banner-subtitle\">
                                Todo lugar precisa de proteção e segurança, seja em seu sítio, criação de animais, condomínio ou mesmo na quadra onde as crianças estão brincando.
                            </h3>
                            <a class=\"banner-button\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("budget");
        echo "\">Peça o seu orçamento</a>
                        </div>
                    </div>
                    <div data-animation-in=\"fadeInRight\" data-animation-out=\"animate-out fadeOutRight\" class=\"col-5 banner-fadeRight\">
                        <img class=\"banner-img img-fluid\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home/TSA_Banner_1.png");
        echo "\" alt=\"Banner\">
                    </div>
                </div>
            </div>

            <div class=\"banner-item\">
                <div class=\"row banner-carousel\">
                    <div data-animation-in=\"fadeInLeft\" data-animation-out=\"animate-out fadeOutLeft\" class=\"col-7 banner-textindex\">
                        <div class=\"banner-textcontent\">
                            <h2 class=\"banner-title\">
                                TSA - A Força da Estrutura em telas e alambrados.
                            </h2>
                            <h3 class=\"banner-subtitle\">
                                É preciso pensar nos detalhes para ficarmos tranquilos em relação àqueles que amamos e criamos. Busque telas que são fortes, com uma estrutura inigualável, que protege a tudo e a todos.
                            </h3>
                            <a class=\"banner-button\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("budget");
        echo "\">Peça o seu orçamento</a>
                        </div>
                    </div>
                    <div data-animation-in=\"fadeInRight\" data-animation-out=\"animate-out fadeOutRight\" class=\"col-5\">
                        <img class=\"banner-img img-fluid\" src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home/TSA_Banner_2.png");
        echo "\" alt=\"Banner\">
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\home\\banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  80 => 34,  62 => 19,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"banner\">
    <div class=\"container\">
        <div class=\"owl-carousel owl-theme\">

            <div class=\"banner-item\">
                <div class=\"row banner-carousel\">
                    <div data-animation-in=\"fadeInLeft\" data-animation-out=\"animate-out fadeOutLeft\" class=\"col-7 banner-textindex banner-fadeLeft\">
                        <div class=\"banner-textcontent\">
                            <h2 class=\"banner-title\">
                                No campo ou na cidade a TSA tem A Força da Estrutura em telas e alambrados.
                            </h2>
                            <h3 class=\"banner-subtitle\">
                                Todo lugar precisa de proteção e segurança, seja em seu sítio, criação de animais, condomínio ou mesmo na quadra onde as crianças estão brincando.
                            </h3>
                            <a class=\"banner-button\" href=\"{{ 'budget'|page }}\">Peça o seu orçamento</a>
                        </div>
                    </div>
                    <div data-animation-in=\"fadeInRight\" data-animation-out=\"animate-out fadeOutRight\" class=\"col-5 banner-fadeRight\">
                        <img class=\"banner-img img-fluid\" src=\"{{ 'assets/images/home/TSA_Banner_1.png'|theme }}\" alt=\"Banner\">
                    </div>
                </div>
            </div>

            <div class=\"banner-item\">
                <div class=\"row banner-carousel\">
                    <div data-animation-in=\"fadeInLeft\" data-animation-out=\"animate-out fadeOutLeft\" class=\"col-7 banner-textindex\">
                        <div class=\"banner-textcontent\">
                            <h2 class=\"banner-title\">
                                TSA - A Força da Estrutura em telas e alambrados.
                            </h2>
                            <h3 class=\"banner-subtitle\">
                                É preciso pensar nos detalhes para ficarmos tranquilos em relação àqueles que amamos e criamos. Busque telas que são fortes, com uma estrutura inigualável, que protege a tudo e a todos.
                            </h3>
                            <a class=\"banner-button\" href=\"{{ 'budget'|page }}\">Peça o seu orçamento</a>
                        </div>
                    </div>
                    <div data-animation-in=\"fadeInRight\" data-animation-out=\"animate-out fadeOutRight\" class=\"col-5\">
                        <img class=\"banner-img img-fluid\" src=\"{{ 'assets/images/home/TSA_Banner_2.png'|theme }}\" alt=\"Banner\">
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>", "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\home\\banner.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 15, "theme" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
