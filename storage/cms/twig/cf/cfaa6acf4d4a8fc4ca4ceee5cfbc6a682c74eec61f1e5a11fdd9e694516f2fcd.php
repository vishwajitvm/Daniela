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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/about/area.htm */
class __TwigTemplate_e226155a34b166696b5c449c228ce65398055dcfb7b4f54a1cdb1802d4204139 extends \Twig\Template
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
        echo "<div class=\"aboutarea\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <img class=\"img-fluid aboutarea-img\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/map.svg");
        echo "\" alt=\"Mapa\">
            </div>
            <div class=\"col-lg-6 aboutarea-textcontent\">
                <h2 class=\"aboutarea-title\">Área de atuação</h2>
                <p class=\"aboutarea-text\">A fabricação e o armazenamento dos nossos produtos estão localizados de maneira estratégica em Itapetininga, município do interior de São Paulo com fácil acesso para as principais rodovias que ligam o norte e sul do país. A sede conta com um espaço de mais de 2000 m², uma área ampla e moderna onde garantimos a eficiência de nossa logística.</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/about/area.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"aboutarea\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <img class=\"img-fluid aboutarea-img\" src=\"{{ 'assets/images/about/map.svg'|theme }}\" alt=\"Mapa\">
            </div>
            <div class=\"col-lg-6 aboutarea-textcontent\">
                <h2 class=\"aboutarea-title\">Área de atuação</h2>
                <p class=\"aboutarea-text\">A fabricação e o armazenamento dos nossos produtos estão localizados de maneira estratégica em Itapetininga, município do interior de São Paulo com fácil acesso para as principais rodovias que ligam o norte e sul do país. A sede conta com um espaço de mais de 2000 m², uma área ampla e moderna onde garantimos a eficiência de nossa logística.</p>
            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/about/area.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 5);
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
