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

/* /home/wwtela/public_html/plugins/telassantoantonio/contact/components/contactform/default.htm */
class __TwigTemplate_96b0e2fd9975e0f3e7dfa01803b43ccc805bf27333c1c44307f025cdd041decc extends \Twig\Template
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
        echo "<form data-action=\"contactForm\">
    <div class=\"row\">
        <div class=\"col-12\">
            <label for=\"name\" class=\"form-box\">
                <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"&nbsp;\" required>
                <span class=\"form-label\">Nome*</span>
                <span class=\"form-border\"></span>
            </label>
        </div>
        <div class=\"col-md-4\">
            <label for=\"phone\" class=\"form-box\">
                <input name=\"phone\" type=\"text\" id=\"phone\" placeholder=\"&nbsp;\" required>
                <span class=\"form-label\">Telefone*</span>
                <span class=\"form-border\"></span>
            </label>
        </div>
        <div class=\"col-md-8\">
            <label for=\"mail\" class=\"form-box\">
                <input name=\"email\" type=\"email\" id=\"mail\" placeholder=\"&nbsp;\" required>
                <span class=\"form-label\">E-mail*</span>
                <span class=\"form-border\"></span>
            </label>
        </div>
        <div class=\"col-12\">
            <label for=\"message\" class=\"form-box\">
                <textarea name=\"content\" id=\"message\" placeholder=\"&nbsp;\"></textarea>
                <span class=\"form-label\">Mensagem</span>
                <span class=\"form-border\"></span>
            </label>
        </div>
        <div class=\"col-md-3 offset-md-9 form-buttonarea\">
            <i class=\"form-refreshicon fas fa-sync-alt fa-spin float-right mr-3 mr-md-2\"></i>
            <button class=\"form-button\" data-action=\"submit-ajax\" type=\"submit\">Enviar</button>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/plugins/telassantoantonio/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-action=\"contactForm\">
    <div class=\"row\">
        <div class=\"col-12\">
            <label for=\"name\" class=\"form-box\">
                <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"&nbsp;\" required>
                <span class=\"form-label\">Nome*</span>
                <span class=\"form-border\"></span>
            </label>
        </div>
        <div class=\"col-md-4\">
            <label for=\"phone\" class=\"form-box\">
                <input name=\"phone\" type=\"text\" id=\"phone\" placeholder=\"&nbsp;\" required>
                <span class=\"form-label\">Telefone*</span>
                <span class=\"form-border\"></span>
            </label>
        </div>
        <div class=\"col-md-8\">
            <label for=\"mail\" class=\"form-box\">
                <input name=\"email\" type=\"email\" id=\"mail\" placeholder=\"&nbsp;\" required>
                <span class=\"form-label\">E-mail*</span>
                <span class=\"form-border\"></span>
            </label>
        </div>
        <div class=\"col-12\">
            <label for=\"message\" class=\"form-box\">
                <textarea name=\"content\" id=\"message\" placeholder=\"&nbsp;\"></textarea>
                <span class=\"form-label\">Mensagem</span>
                <span class=\"form-border\"></span>
            </label>
        </div>
        <div class=\"col-md-3 offset-md-9 form-buttonarea\">
            <i class=\"form-refreshicon fas fa-sync-alt fa-spin float-right mr-3 mr-md-2\"></i>
            <button class=\"form-button\" data-action=\"submit-ajax\" type=\"submit\">Enviar</button>
        </div>
    </div>
</form>", "/home/wwtela/public_html/plugins/telassantoantonio/contact/components/contactform/default.htm", "");
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
