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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/menu/menu.htm */
class __TwigTemplate_1e023a8542c2180569421e51a6bb99bd61e8e0654860c6efe4a7e5309c09c272 extends \Twig\Template
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
        echo "<div class=\"menu\">
    <div class=\"container\">
        <div class=\"row menu-content\">
            <div class=\"col-10 col-md-5 col-lg-3 mb-5 mb-md-0 order-1\">
                <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                    <img class=\"menu-logo img-fluid\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\">
                </a>
            </div>
            <div class=\"col-md-4 offset-md-2 col-lg-3 offset-lg-5 order-3 order-md-2\">
                <form action=\"";
        // line 10
        echo url("/search?q=");
        echo "\" method=\"get\">
                    <label for=\"q\" class=\"menu-box\">
                        <input name=\"q\" type=\"text\" id=\"q\" placeholder=\"&nbsp;\" value=\"\" autocomplete=\"off\" autofocus=\"\">
                        <span class=\"menu-label\">Pesquisar</span>
                        <span class=\"menu-border\"></span>

                        <button type=\"submit\" class=\"menu-search\">
                            <img class=\"menu-iconsearch\" src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu/search.svg");
        echo "\" alt=\"Procurar\">
                        </button>
                    </label>
                </form>
            </div>
            <div class=\"col-2 col-md-1 menu-iconcontainer order-2 order-md-3\">
                <button class=\"menu-icon\"></button>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 offset-md-1 menu-linkcontent\">
                <a class=\"menu-link\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Produtos</a>
                <a class=\"menu-link\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("budget");
        echo "\">Orçamento</a>
                <a class=\"menu-link\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Quem somos</a>
                <a class=\"menu-link\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contato</a>
            </div>
        </div>
    </div>
    <div class=\"container-fluid menu-bottom\">
        <div class=\"container\">
            <div class=\"row position-relative\">

                <div class=\"col-md-3 offset-md-9 col-lg-2 offset-lg-10 menu-socialcontent\">
                    <a class=\"menu-socialink\" href=\"javascript:;\">
                        <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook-white.svg");
        echo "\" alt=\"Facebook\">
                    </a>
                    <a class=\"menu-socialink\" href=\"javascript:;\">
                        <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin-white.svg");
        echo "\" alt=\"LinkedIn\">
                    </a>
                    <a class=\"menu-socialink\" href=\"javascript:;\">
                        <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-white.svg");
        echo "\" alt=\"Instagram\">
                    </a>
                </div>

                <div class=\"col-md-10 offset-md-2 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-7 menu-coltext\">
                    <div class=\"menu-textcontent\">
                        <p class=\"menu-text\">Endereço</p>
                        <p class=\"menu-text\">
                            Rua Maria do Bonsucesso Proença de Moraes, 202<br>
                            Vila Progresso - CEP: 18.214-570<br>
                            Itapetininga-SP
                        </p>
                    </div>
                    <div class=\"menu-textcontent\">
                        <p class=\"menu-text\">Telefones</p>
                        <p class=\"menu-text\">
                            15 3273-4079<br>
                            15 3273-2130
                        </p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/menu/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 47,  111 => 44,  105 => 41,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  66 => 17,  56 => 10,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"menu\">
    <div class=\"container\">
        <div class=\"row menu-content\">
            <div class=\"col-10 col-md-5 col-lg-3 mb-5 mb-md-0 order-1\">
                <a href=\"{{ 'home'|page }}\">
                    <img class=\"menu-logo img-fluid\" src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"Logo\">
                </a>
            </div>
            <div class=\"col-md-4 offset-md-2 col-lg-3 offset-lg-5 order-3 order-md-2\">
                <form action=\"{{ url('/search?q=') }}\" method=\"get\">
                    <label for=\"q\" class=\"menu-box\">
                        <input name=\"q\" type=\"text\" id=\"q\" placeholder=\"&nbsp;\" value=\"\" autocomplete=\"off\" autofocus=\"\">
                        <span class=\"menu-label\">Pesquisar</span>
                        <span class=\"menu-border\"></span>

                        <button type=\"submit\" class=\"menu-search\">
                            <img class=\"menu-iconsearch\" src=\"{{ 'assets/images/menu/search.svg'|theme }}\" alt=\"Procurar\">
                        </button>
                    </label>
                </form>
            </div>
            <div class=\"col-2 col-md-1 menu-iconcontainer order-2 order-md-3\">
                <button class=\"menu-icon\"></button>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 offset-md-1 menu-linkcontent\">
                <a class=\"menu-link\" href=\"{{ 'product'|page }}\">Produtos</a>
                <a class=\"menu-link\" href=\"{{ 'budget'|page }}\">Orçamento</a>
                <a class=\"menu-link\" href=\"{{ 'about'|page }}\">Quem somos</a>
                <a class=\"menu-link\" href=\"{{ 'contact'|page }}\">Contato</a>
            </div>
        </div>
    </div>
    <div class=\"container-fluid menu-bottom\">
        <div class=\"container\">
            <div class=\"row position-relative\">

                <div class=\"col-md-3 offset-md-9 col-lg-2 offset-lg-10 menu-socialcontent\">
                    <a class=\"menu-socialink\" href=\"javascript:;\">
                        <img src=\"{{ 'assets/images/facebook-white.svg'|theme }}\" alt=\"Facebook\">
                    </a>
                    <a class=\"menu-socialink\" href=\"javascript:;\">
                        <img src=\"{{ 'assets/images/linkedin-white.svg'|theme }}\" alt=\"LinkedIn\">
                    </a>
                    <a class=\"menu-socialink\" href=\"javascript:;\">
                        <img src=\"{{ 'assets/images/instagram-white.svg'|theme }}\" alt=\"Instagram\">
                    </a>
                </div>

                <div class=\"col-md-10 offset-md-2 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-7 menu-coltext\">
                    <div class=\"menu-textcontent\">
                        <p class=\"menu-text\">Endereço</p>
                        <p class=\"menu-text\">
                            Rua Maria do Bonsucesso Proença de Moraes, 202<br>
                            Vila Progresso - CEP: 18.214-570<br>
                            Itapetininga-SP
                        </p>
                    </div>
                    <div class=\"menu-textcontent\">
                        <p class=\"menu-text\">Telefones</p>
                        <p class=\"menu-text\">
                            15 3273-4079<br>
                            15 3273-2130
                        </p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/menu/menu.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 5, "theme" => 6);
        static $functions = array("url" => 10);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
