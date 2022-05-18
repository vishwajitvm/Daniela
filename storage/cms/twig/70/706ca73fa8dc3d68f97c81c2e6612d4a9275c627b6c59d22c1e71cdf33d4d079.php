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

/* C:\laravel\office\Daniela\themes\telassantoantonio\partials\site\footer.htm */
class __TwigTemplate_c33d9c74896932ba7fc676ade1a87902cc5b967da390a4ea1c3e430aa8f69af0 extends \Twig\Template
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
        echo "<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 footer-logocontent\">
                <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                    <img class=\"footer-logo\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\">
                </a>
            </div>
            <div class=\"col-md-8 col-lg-7 col-xl-6\">
                <div class=\"row\">
                    <div class=\"links-produtos col-sm-4 my-4 my-md-0\">
                        <ul class=\"footer-listcontent\">
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Produtos</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 17
        echo url("/produtos/alambrados");
        echo "\">Telas para Alambrado</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 20
        echo url("/produtos/telas-hexagonais-para-mangueirao");
        echo "\">Telas para Mangueirão</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 23
        echo url("/produtos/telas-para-avicultura");
        echo "\">Telas para Avicultura</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 26
        echo url("/produtos/telas-artisticas");
        echo "\">Telas Artísticas</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 29
        echo url("/produtos/tutor-para-orquidea");
        echo "\">Tutor para Orquídea</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 32
        echo url("/produtos/arame-revestido-em-pvc");
        echo "\">Arames em PVC</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 35
        echo url("/produtos/produtos-agropecuarios");
        echo "\">Produtos Agropecuários</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-sm-4 my-4 my-md-0\">
                        <ul class=\"footer-listcontent\">
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Quem somos</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link footer-history\" href=\"/quem-somos#historia\" data-hash=\"#historia\">Nossa história</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link footer-mission\" href=\"/quem-somos#missao\" data-hash=\"#missao\">Nossos valores</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-sm-4 my-4 my-md-0\">
                        <ul class=\"footer-listcontent\">
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contato</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("budget");
        echo "\">Orçamento</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Fale conosco</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-lg-5 col-xl-6\">
                <div class=\"footer-sharecontent\">
                    <a class=\"footer-sharelink\" href=\"javascript:;\">
                        <img class=\"footer-shareicon\" src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook-white.svg");
        echo "\" alt=\"Facebook\">
                    </a>
                    <a class=\"footer-sharelink\" href=\"javascript:;\">
                        <img class=\"footer-shareicon\" src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin-white.svg");
        echo "\" alt=\"LinkedIn\">
                    </a>
                    <a class=\"footer-sharelink\" href=\"javascript:;\">
                        <img class=\"footer-shareicon\" src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-white.svg");
        echo "\" alt=\"Instagram\">
                    </a>
                </div>

                <div class=\"footer-addresscontent\">
                    <p class=\"footer-addresstitle\">Endereço</p>
                    <p class=\"footer-address\">
                        Rua Maria do Bonsucesso Proença de Moraes, 202<br>
                        Vila Progresso - CEP: 18.214-570<br>
                        Itapetininga-SP
                    </p>
                </div>

                <div class=\"footer-addresscontent\">
                    <p class=\"footer-addresstitle\">Telefones</p>
                    <p class=\"footer-address\">
                        <a href=\"tel:+551532734079\" class=\"footer-telnumber\">15 3273-4079</a><br>
                        <a href=\"tel:+551532732130\" class=\"footer-telnumber\">15 3273-2130</a>
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <div class=\"footer-copycontainer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"footer-copy\">® ";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["now"] ?? null), 105, $this->source), "Y"), "html", null, true);
        echo " - Telas Santo Antonio</p>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\site\\footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 105,  164 => 76,  158 => 73,  152 => 70,  140 => 61,  134 => 58,  128 => 55,  112 => 42,  102 => 35,  96 => 32,  90 => 29,  84 => 26,  78 => 23,  72 => 20,  66 => 17,  60 => 14,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 footer-logocontent\">
                <a href=\"{{ 'home'|page }}\">
                    <img class=\"footer-logo\" src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"Logo\">
                </a>
            </div>
            <div class=\"col-md-8 col-lg-7 col-xl-6\">
                <div class=\"row\">
                    <div class=\"links-produtos col-sm-4 my-4 my-md-0\">
                        <ul class=\"footer-listcontent\">
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ 'product'|page }}\">Produtos</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ url('/produtos/alambrados') }}\">Telas para Alambrado</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ url('/produtos/telas-hexagonais-para-mangueirao') }}\">Telas para Mangueirão</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ url('/produtos/telas-para-avicultura') }}\">Telas para Avicultura</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ url('/produtos/telas-artisticas') }}\">Telas Artísticas</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ url('/produtos/tutor-para-orquidea') }}\">Tutor para Orquídea</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ url('/produtos/arame-revestido-em-pvc') }}\">Arames em PVC</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ url('/produtos/produtos-agropecuarios') }}\">Produtos Agropecuários</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-sm-4 my-4 my-md-0\">
                        <ul class=\"footer-listcontent\">
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ 'about'|page }}\">Quem somos</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link footer-history\" href=\"/quem-somos#historia\" data-hash=\"#historia\">Nossa história</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link footer-mission\" href=\"/quem-somos#missao\" data-hash=\"#missao\">Nossos valores</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-sm-4 my-4 my-md-0\">
                        <ul class=\"footer-listcontent\">
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ 'contact'|page }}\">Contato</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ 'budget'|page }}\">Orçamento</a>
                            </li>
                            <li class=\"footer-listitem\">
                                <a class=\"footer-link\" href=\"{{ 'contact'|page }}\">Fale conosco</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-lg-5 col-xl-6\">
                <div class=\"footer-sharecontent\">
                    <a class=\"footer-sharelink\" href=\"javascript:;\">
                        <img class=\"footer-shareicon\" src=\"{{ 'assets/images/facebook-white.svg'|theme }}\" alt=\"Facebook\">
                    </a>
                    <a class=\"footer-sharelink\" href=\"javascript:;\">
                        <img class=\"footer-shareicon\" src=\"{{ 'assets/images/linkedin-white.svg'|theme }}\" alt=\"LinkedIn\">
                    </a>
                    <a class=\"footer-sharelink\" href=\"javascript:;\">
                        <img class=\"footer-shareicon\" src=\"{{ 'assets/images/instagram-white.svg'|theme }}\" alt=\"Instagram\">
                    </a>
                </div>

                <div class=\"footer-addresscontent\">
                    <p class=\"footer-addresstitle\">Endereço</p>
                    <p class=\"footer-address\">
                        Rua Maria do Bonsucesso Proença de Moraes, 202<br>
                        Vila Progresso - CEP: 18.214-570<br>
                        Itapetininga-SP
                    </p>
                </div>

                <div class=\"footer-addresscontent\">
                    <p class=\"footer-addresstitle\">Telefones</p>
                    <p class=\"footer-address\">
                        <a href=\"tel:+551532734079\" class=\"footer-telnumber\">15 3273-4079</a><br>
                        <a href=\"tel:+551532732130\" class=\"footer-telnumber\">15 3273-2130</a>
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <div class=\"footer-copycontainer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"footer-copy\">® {{now|date(\"Y\")}} - Telas Santo Antonio</p>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\partials\\site\\footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 5, "theme" => 6, "escape" => 105, "date" => 105);
        static $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme', 'escape', 'date'],
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
