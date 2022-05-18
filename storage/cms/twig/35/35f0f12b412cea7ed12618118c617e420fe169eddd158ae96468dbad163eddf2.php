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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/home/products.htm */
class __TwigTemplate_a9d289300410054fef072fd8e072dfea664509eb0b88cf36b3eda2a72685153a extends \Twig\Template
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
        echo "<div class=\"homeprod\">
    <div class=\"container homeprod-paddingcontent\">
        <div class=\"row homeprod-boxcontent\">
            <h2 class=\"homeprod-title col-12\">Produtos</h2>
            <a href=\"";
        // line 5
        echo url("/produtos/alambrados");
        echo "\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Alambrados</p>
            </a>
            <a href=\"";
        // line 9
        echo url("/produtos/telas-hexagonais-para-mangueirao");
        echo "\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Telas hexagonais de mangueirão</p>
            </a>
            <a href=\"";
        // line 13
        echo url("/produtos/telas-para-avicultura");
        echo "\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Telas de avicultura</p>
            </a>
            <a href=\"";
        // line 17
        echo url("/produtos/telas-artisticas");
        echo "\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Telas artísticas</p>
            </a>
            <a href=\"";
        // line 21
        echo url("/produtos/tutor-para-orquidea");
        echo "\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Tutor para orquídea</p>
            </a>
            <a href=\"";
        // line 25
        echo url("/produtos/arame-revestido-em-pvc");
        echo "\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Arame revestido em PVC</p>
            </a>
            <a href=\"";
        // line 29
        echo url("/produtos/produtos-agropecuarios");
        echo "\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Produtos agropecúarios</p>
            </a>
            <a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Todos os produtos</p>
            </a>
            <div class=\"col-12\">

            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/home/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  87 => 29,  80 => 25,  73 => 21,  66 => 17,  59 => 13,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"homeprod\">
    <div class=\"container homeprod-paddingcontent\">
        <div class=\"row homeprod-boxcontent\">
            <h2 class=\"homeprod-title col-12\">Produtos</h2>
            <a href=\"{{ url('/produtos/alambrados') }}\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Alambrados</p>
            </a>
            <a href=\"{{ url('/produtos/telas-hexagonais-para-mangueirao') }}\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Telas hexagonais de mangueirão</p>
            </a>
            <a href=\"{{ url('/produtos/telas-para-avicultura') }}\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Telas de avicultura</p>
            </a>
            <a href=\"{{ url('/produtos/telas-artisticas') }}\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Telas artísticas</p>
            </a>
            <a href=\"{{ url('/produtos/tutor-para-orquidea') }}\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Tutor para orquídea</p>
            </a>
            <a href=\"{{ url('/produtos/arame-revestido-em-pvc') }}\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Arame revestido em PVC</p>
            </a>
            <a href=\"{{ url('/produtos/produtos-agropecuarios') }}\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Produtos agropecúarios</p>
            </a>
            <a href=\"{{ 'product'|page }}\" class=\"homeprod-box\">
                <figure class=\"homeprod-image\"></figure>
                <p class=\"homeprod-name\">Todos os produtos</p>
            </a>
            <div class=\"col-12\">

            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/home/products.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 33);
        static $functions = array("url" => 5);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
                ['url']
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
