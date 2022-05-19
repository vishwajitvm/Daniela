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

/* C:\laravel\office\Daniela\themes\telassantoantonio\pages\contact.htm */
class __TwigTemplate_c2cea5672f6b4e1f372af577abd462b77b39469bad94a85661247f1d3fbe6fe4 extends \Twig\Template
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
        echo "<div class=\"form\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">

                <h1 class=\"form-title\">Em que podemos ajudar?</h1>
                <h2 class=\"form-subtitle\">
                    Seja para solicitar um orçamento ou esclarecer dúvidas sobre nossos produtos. <br>
                    O seu contato é muito importante para nós!
                </h2>

               ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ContactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "    
                
            </div>
        </div>
    </div>
    </div>



    <div class=\"aboutarea\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.8072281969744!2d-48.018779784484394!3d-23.575365967995968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5cc15ce34e9fd%3A0xdbbab10e8e2c9ca!2sR.%20Maria%20do%20Bom%20Sucesso%20de%20Proen%C3%A7a%20Moraes%2C%20202%20-%20Jardim%20Maraba%2C%20Itapetininga%20-%20SP%2C%20Brazil!5e0!3m2!1sen!2sin!4v1652948693727!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </div>
                <div class=\"col-lg-6 aboutarea-textcontent\">
                    <h2 class=\"aboutarea-title\">dirección</h2>
                    <p class=\"aboutarea-text\">
                        <div class=\"contacto-address \">
        
                            <!-- <div class=\"icon float-left\"> <i class=\"fa-solid fa-location-dot px-3\"></i></div>
                            <div class=\"adreesss float right\"><h3>
                                R. Maria do Bonsucesso Proença de Moraes, <br> 202 Vila Progresso - CEP: 18.214-570 - Itapetininga/SP
                            </h3></div> -->
                            <h3 class=\"w-75\">
                                <span class=\"float-left\"><i class=\"fa-solid fa-location-dot \"></i></span><p class=\"pl-5 ml-5\">R. Maria do Bonsucesso Proença de Moraes, <br> 202 Vila Progresso - CEP: 18.214-570 - Itapetininga/SP</p>
                            </h3>
        
                            <div class=\"contacto-tel \">
                                <h3><i class=\"fa-solid fa-phone px-3\"></i>  (15) 3273.4079</h3>
                             <h3><i class=\"fa-solid fa-phone px-3 \"></i> (15) 3273.2131</h3>
                            </div>
             
                        </div>
                        </p>
                </div>
            </div>
        </div>
    </div>

                <style>
              
              .contacto-address h2 {
                font-size: 35px;
                /* font-weight: bold; */
              }
              .contacto-address h3 i{
                  font-size: 35px;
                  color: #FFC400;
    
              }
              .contacto-address h3 p{
                  font-size: 18px;
                  /* font-weight: bold; */
              }
              .contacto-address h3{
                  text-align: justify;
                  margin-top: 30px;
                  /* padding: 10px;   */
              }
              /* .contacto-tel{
                padding: px;
                
              } */
    
              .contacto-tel h3{
                    font-size: 18px;
                    font-weight: 100;
    
              }
              
              .contacto-tel h3 i{
                font-size: 35px;
                  color: #FFC400;
              }
    
    
            </style>

    

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\pages\\contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">

                <h1 class=\"form-title\">Em que podemos ajudar?</h1>
                <h2 class=\"form-subtitle\">
                    Seja para solicitar um orçamento ou esclarecer dúvidas sobre nossos produtos. <br>
                    O seu contato é muito importante para nós!
                </h2>

               {% component 'ContactForm' %}    
                
            </div>
        </div>
    </div>
    </div>



    <div class=\"aboutarea\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.8072281969744!2d-48.018779784484394!3d-23.575365967995968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5cc15ce34e9fd%3A0xdbbab10e8e2c9ca!2sR.%20Maria%20do%20Bom%20Sucesso%20de%20Proen%C3%A7a%20Moraes%2C%20202%20-%20Jardim%20Maraba%2C%20Itapetininga%20-%20SP%2C%20Brazil!5e0!3m2!1sen!2sin!4v1652948693727!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </div>
                <div class=\"col-lg-6 aboutarea-textcontent\">
                    <h2 class=\"aboutarea-title\">dirección</h2>
                    <p class=\"aboutarea-text\">
                        <div class=\"contacto-address \">
        
                            <!-- <div class=\"icon float-left\"> <i class=\"fa-solid fa-location-dot px-3\"></i></div>
                            <div class=\"adreesss float right\"><h3>
                                R. Maria do Bonsucesso Proença de Moraes, <br> 202 Vila Progresso - CEP: 18.214-570 - Itapetininga/SP
                            </h3></div> -->
                            <h3 class=\"w-75\">
                                <span class=\"float-left\"><i class=\"fa-solid fa-location-dot \"></i></span><p class=\"pl-5 ml-5\">R. Maria do Bonsucesso Proença de Moraes, <br> 202 Vila Progresso - CEP: 18.214-570 - Itapetininga/SP</p>
                            </h3>
        
                            <div class=\"contacto-tel \">
                                <h3><i class=\"fa-solid fa-phone px-3\"></i>  (15) 3273.4079</h3>
                             <h3><i class=\"fa-solid fa-phone px-3 \"></i> (15) 3273.2131</h3>
                            </div>
             
                        </div>
                        </p>
                </div>
            </div>
        </div>
    </div>

                <style>
              
              .contacto-address h2 {
                font-size: 35px;
                /* font-weight: bold; */
              }
              .contacto-address h3 i{
                  font-size: 35px;
                  color: #FFC400;
    
              }
              .contacto-address h3 p{
                  font-size: 18px;
                  /* font-weight: bold; */
              }
              .contacto-address h3{
                  text-align: justify;
                  margin-top: 30px;
                  /* padding: 10px;   */
              }
              /* .contacto-tel{
                padding: px;
                
              } */
    
              .contacto-tel h3{
                    font-size: 18px;
                    font-weight: 100;
    
              }
              
              .contacto-tel h3 i{
                font-size: 35px;
                  color: #FFC400;
              }
    
    
            </style>

    

  </div>
</div>", "C:\\laravel\\office\\Daniela\\themes\\telassantoantonio\\pages\\contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 12);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
