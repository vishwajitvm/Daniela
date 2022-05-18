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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/news/single.htm */
class __TwigTemplate_2b4bb52e52b867c3569285d55ab3db5a886007cdde8b6424d071840cd64d848c extends \Twig\Template
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
        echo "<div class=\"news\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"news-pagename\">#novidades</h1>
            </div>
            <div class=\"col-12\">
                <figure class=\"news-imgcontent\">
                    <img class=\"news-img img-fluid\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/news/novidade.jpg");
        echo "\" alt=\"Novidades\">
                </figure>
                <h2 class=\"news-title\">Tela para alambrado com revestimento em PVC</h2>
                <p class=\"news-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class=\"news-text\">Tristique et egestas quis ipsum suspendisse ultrices. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus integer feugiat scelerisque varius morbi. Nunc consequat interdum varius sit amet. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. In metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies. Ac ut consequat semper viverra nam libero.</p>
                <p class=\"news-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique et egestas quis ipsum suspendisse ultrices. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus integernam libero.</p>
                <p class=\"news-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique et egestas quis ipsum suspendisse ultrices. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus integer feugiat scelerisque varius morbi. Nunc consequat interdum varius sit amet. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. In metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies. Ac ut consequat semper viverra nam libero.</p>
                <p class=\"news-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique et egestas quis ipsum suspendisse ultrices. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus integer feugiat scelerisque varius morbi. Nunc consequat interdum varius sit amet. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. In metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies. Ac ut consequat semper viverra nam libero.</p>
            </div>
            <div class=\"col-12\">
                <div class=\"news-socialcontent\">
                    <div class=\"news-sharecontent\">
                        <p class=\"news-share\">Compartilhar</p>
                        <a class=\"news-sharelink\" href=\"javascript:;\">
                            <img class=\"news-shareicon\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook.svg");
        echo "\" alt=\"Facebook\">
                        </a>
                        <a class=\"news-sharelink\" href=\"javascript:;\">
                            <img class=\"news-shareicon\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin.svg");
        echo "\" alt=\"LinkedIn\">
                        </a>
                        <a class=\"news-sharelink\" href=\"javascript:;\">
                            <img class=\"news-shareicon\" src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram.svg");
        echo "\" alt=\"Instagram\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/news/single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  72 => 26,  66 => 23,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"news\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"news-pagename\">#novidades</h1>
            </div>
            <div class=\"col-12\">
                <figure class=\"news-imgcontent\">
                    <img class=\"news-img img-fluid\" src=\"{{ 'assets/images/news/novidade.jpg'|theme }}\" alt=\"Novidades\">
                </figure>
                <h2 class=\"news-title\">Tela para alambrado com revestimento em PVC</h2>
                <p class=\"news-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class=\"news-text\">Tristique et egestas quis ipsum suspendisse ultrices. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus integer feugiat scelerisque varius morbi. Nunc consequat interdum varius sit amet. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. In metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies. Ac ut consequat semper viverra nam libero.</p>
                <p class=\"news-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique et egestas quis ipsum suspendisse ultrices. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus integernam libero.</p>
                <p class=\"news-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique et egestas quis ipsum suspendisse ultrices. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus integer feugiat scelerisque varius morbi. Nunc consequat interdum varius sit amet. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. In metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies. Ac ut consequat semper viverra nam libero.</p>
                <p class=\"news-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique et egestas quis ipsum suspendisse ultrices. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus integer feugiat scelerisque varius morbi. Nunc consequat interdum varius sit amet. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. In metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies. Ac ut consequat semper viverra nam libero.</p>
            </div>
            <div class=\"col-12\">
                <div class=\"news-socialcontent\">
                    <div class=\"news-sharecontent\">
                        <p class=\"news-share\">Compartilhar</p>
                        <a class=\"news-sharelink\" href=\"javascript:;\">
                            <img class=\"news-shareicon\" src=\"{{ 'assets/images/facebook.svg'|theme }}\" alt=\"Facebook\">
                        </a>
                        <a class=\"news-sharelink\" href=\"javascript:;\">
                            <img class=\"news-shareicon\" src=\"{{ 'assets/images/linkedin.svg'|theme }}\" alt=\"LinkedIn\">
                        </a>
                        <a class=\"news-sharelink\" href=\"javascript:;\">
                            <img class=\"news-shareicon\" src=\"{{ 'assets/images/instagram.svg'|theme }}\" alt=\"Instagram\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/news/single.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 9);
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
