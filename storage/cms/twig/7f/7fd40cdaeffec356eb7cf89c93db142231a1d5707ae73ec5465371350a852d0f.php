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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/home/banner.htm */
class __TwigTemplate_d69a89bedf7f0338a0282d6b9efe38bb6ff50edd5c3ef208df63973516a53c91 extends \Twig\Template
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
                                No campo ou na cidade nossos produtos garantem a sua tranquilidade.
                            </h2>
                            <h3 class=\"banner-subtitle\">
                                Estamos sempre inovando para oferecer soluções inteligentes para as mais diversas necessidades, confeccionamos telas sob medida de acordo com o seu projeto.
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home/banner1.jpg");
        echo "\" alt=\"Banner\">
                    </div>
                </div>
            </div>

            <div class=\"banner-item\">
                <div class=\"row banner-carousel\">
                    <div data-animation-in=\"fadeInLeft\" data-animation-out=\"animate-out fadeOutLeft\" class=\"col-7 banner-textindex\">
                        <div class=\"banner-textcontent\">
                            <h2 class=\"banner-title\">
                                Condições especiais para o seu negócio.
                            </h2>
                            <h3 class=\"banner-subtitle\">
                                Oferecemos produtos com durabilidade e qualidade comprovada que podem ser utilizados para as mais diversas aplicações.
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home/banner2-sm.png");
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
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/home/banner.htm";
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
                                No campo ou na cidade nossos produtos garantem a sua tranquilidade.
                            </h2>
                            <h3 class=\"banner-subtitle\">
                                Estamos sempre inovando para oferecer soluções inteligentes para as mais diversas necessidades, confeccionamos telas sob medida de acordo com o seu projeto.
                            </h3>
                            <a class=\"banner-button\" href=\"{{ 'budget'|page }}\">Peça o seu orçamento</a>
                        </div>
                    </div>
                    <div data-animation-in=\"fadeInRight\" data-animation-out=\"animate-out fadeOutRight\" class=\"col-5 banner-fadeRight\">
                        <img class=\"banner-img img-fluid\" src=\"{{ 'assets/images/home/banner1.jpg'|theme }}\" alt=\"Banner\">
                    </div>
                </div>
            </div>

            <div class=\"banner-item\">
                <div class=\"row banner-carousel\">
                    <div data-animation-in=\"fadeInLeft\" data-animation-out=\"animate-out fadeOutLeft\" class=\"col-7 banner-textindex\">
                        <div class=\"banner-textcontent\">
                            <h2 class=\"banner-title\">
                                Condições especiais para o seu negócio.
                            </h2>
                            <h3 class=\"banner-subtitle\">
                                Oferecemos produtos com durabilidade e qualidade comprovada que podem ser utilizados para as mais diversas aplicações.
                            </h3>
                            <a class=\"banner-button\" href=\"{{ 'budget'|page }}\">Peça o seu orçamento</a>
                        </div>
                    </div>
                    <div data-animation-in=\"fadeInRight\" data-animation-out=\"animate-out fadeOutRight\" class=\"col-5\">
                        <img class=\"banner-img img-fluid\" src=\"{{ 'assets/images/home/banner2-sm.png'|theme }}\" alt=\"Banner\">
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/home/banner.htm", "");
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
