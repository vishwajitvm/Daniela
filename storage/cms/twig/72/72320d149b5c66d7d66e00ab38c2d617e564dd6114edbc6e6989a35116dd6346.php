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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/about/history.htm */
class __TwigTemplate_51d79a64006d96de178ffd11579b8315471f45bca730fbcdbce59edddb4b3b4f extends \Twig\Template
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
        echo "<div id=\"historia\" class=\"abouthistory\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"abouthistory-pagename\">Quem somos</h1>
            </div>
            <div class=\"col-lg-6\">
                <h2 class=\"abouthistory-title\">Nossa história</h2>
                <p class=\"abouthistory-text\">
                    Telas Santo Antonio está presente no mercado há mais de 35 anos, teve seu início na garagem da casa do fundador Sr. Antonio, que produzia às telas de forma manual. <br>
                    Com o passar do tempo a gestão da empresa ficou sob os cuidados de seu filho, Sr. Leandro que decidiu largar tudo e se dedicar totalmente a empresa, foram tempos de muito trabalho e dedicação. <br>
                    A empresa já se destacava pela qualidade dos produtos que gerou um aumento nas vendas pela região, o amor e a dedicação sempre foi a base para tudo isso. <br>
                    Com o crescimento da empresa, a produção 
                    foi automatizada, o portfólio ganhou novos produtos, a gestão conta com colaboração e dedicação da família, consolidando o Telas Santo Antonio como grande referência no mercado, sempre evoluindo 
                    para oferecer os melhores produtos aos seus clientes.
            </div>
            <div class=\"col-lg-6\">
                <img class=\"img-fluid\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/building.jpg");
        echo "\" alt=\"Nossa História\">
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/about/history.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"historia\" class=\"abouthistory\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"abouthistory-pagename\">Quem somos</h1>
            </div>
            <div class=\"col-lg-6\">
                <h2 class=\"abouthistory-title\">Nossa história</h2>
                <p class=\"abouthistory-text\">
                    Telas Santo Antonio está presente no mercado há mais de 35 anos, teve seu início na garagem da casa do fundador Sr. Antonio, que produzia às telas de forma manual. <br>
                    Com o passar do tempo a gestão da empresa ficou sob os cuidados de seu filho, Sr. Leandro que decidiu largar tudo e se dedicar totalmente a empresa, foram tempos de muito trabalho e dedicação. <br>
                    A empresa já se destacava pela qualidade dos produtos que gerou um aumento nas vendas pela região, o amor e a dedicação sempre foi a base para tudo isso. <br>
                    Com o crescimento da empresa, a produção 
                    foi automatizada, o portfólio ganhou novos produtos, a gestão conta com colaboração e dedicação da família, consolidando o Telas Santo Antonio como grande referência no mercado, sempre evoluindo 
                    para oferecer os melhores produtos aos seus clientes.
            </div>
            <div class=\"col-lg-6\">
                <img class=\"img-fluid\" src=\"{{ 'assets/images/about/building.jpg'|theme }}\" alt=\"Nossa História\">
            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/about/history.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
