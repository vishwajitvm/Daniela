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

/* /home/wwtela/public_html/themes/telassantoantonio/partials/product-single/subitem.htm */
class __TwigTemplate_778b53dd74261cfcdb8e868c010396a155db024c51d347e0a6a86d79722d840b extends \Twig\Template
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
        echo "<div class=\"container\">

        <!-- Carregamento dos blocos de subitens -->

        <div class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "custom_detail", [], "any", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "
                ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["item"], "field_type1", [], "any", false, false, true, 8)) {
                // line 9
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['item'] = $context["item"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-detail/field_type1"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 10
                echo "                ";
            }
            // line 11
            echo "
                ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["item"], "field_type2", [], "any", false, false, true, 12)) {
                // line 13
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['item'] = $context["item"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-detail/field_type2"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 14
                echo "                ";
            }
            // line 15
            echo "
                ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["item"], "field_type3", [], "any", false, false, true, 16)) {
                // line 17
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['item'] = $context["item"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-detail/field_type3"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "                ";
            }
            // line 19
            echo "
                ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["item"], "field_type4", [], "any", false, false, true, 20)) {
                // line 21
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['item'] = $context["item"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-detail/field_type4"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 22
                echo "                ";
            }
            // line 23
            echo "
                ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["item"], "field_type5", [], "any", false, false, true, 24)) {
                // line 25
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['item'] = $context["item"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-detail/field_type5"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 26
                echo "                ";
            }
            // line 27
            echo "
                ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["item"], "field_type6", [], "any", false, false, true, 28)) {
                // line 29
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['item'] = $context["item"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-detail/field_type6"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 30
                echo "                ";
            }
            // line 31
            echo "    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>  

        <div class=\"row\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "custom_fields", [], "any", false, false, true, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 37
            echo "
                ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "field_selector", [], "any", false, false, true, 38) == "field_type1")) {
                // line 39
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-fields/field_type1"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 40
                echo "                ";
            }
            // line 41
            echo "
                ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "field_selector", [], "any", false, false, true, 42) == "field_type2")) {
                // line 43
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-fields/field_type2"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 44
                echo "                ";
            }
            // line 45
            echo "
                ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "field_selector", [], "any", false, false, true, 46) == "field_type3")) {
                // line 47
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-fields/field_type3"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 48
                echo "                ";
            }
            // line 49
            echo "
                ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "field_selector", [], "any", false, false, true, 50) == "field_type4")) {
                // line 51
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-fields/field_type4"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 52
                echo "                ";
            }
            // line 53
            echo "
                ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "field_selector", [], "any", false, false, true, 54) == "field_type5")) {
                // line 55
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-fields/field_type5"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 56
                echo "                ";
            }
            // line 57
            echo "
                ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "field_selector", [], "any", false, false, true, 58) == "field_type6")) {
                // line 59
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-single/custom-fields/field_type6"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 60
                echo "                ";
            }
            // line 61
            echo "    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        
        </div>  

        <!-- Carregamento da galeria -->
        ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "custom_gallery", [], "any", false, false, true, 67)) {
            // line 68
            echo "            <div class=\"prodsingle-gallery\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-6\">
                        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "custom_gallery", [], "any", false, false, true, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 72
                echo "                            <h3>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "</h3>
                            <div class=\"prod-text\">";
                // line 73
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 73), 73, $this->source);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    </div>
                    <div class=\"col-md-6 text-center\">
                        <div class=\"masonry\">
                            ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "custom_gallery", [], "any", false, false, true, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 79
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["gallery"], "field_gallery", [], "any", false, false, true, 79));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "featured_image", [], "any", false, false, true, 79)) {
                        // line 80
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["image"], "featured_image", [], "any", false, false, true, 80) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 80) <= 6))) {
                            // line 81
                            echo "                                        <div class=\"prodsingle-galleryimage\">
                                            <a class=\"item\" data-fancybox=\"gallery\" href=\"";
                            // line 82
                            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "gallery_image", [], "any", false, false, true, 82), 82, $this->source));
                            echo "\">
                                                <img class=\"img-fluid\" src=\"";
                            // line 83
                            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "gallery_image", [], "any", false, false, true, 83), 83, $this->source));
                            echo "\" alt=\"Produto\">
                                            </a>
                                        </div>
                                    ";
                        }
                        // line 86
                        echo "    
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 94
        echo "    </div>
</div>

<div class=\"col-12 prod-buttoncontent text-center py-5 my-5\">
    <a class=\"prod-buttonbudget\" href=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("budget");
        echo "\">Peça o seu orçamento</a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/subitem.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 98,  333 => 94,  326 => 89,  320 => 88,  309 => 86,  302 => 83,  298 => 82,  295 => 81,  292 => 80,  280 => 79,  276 => 78,  271 => 75,  263 => 73,  258 => 72,  254 => 71,  249 => 68,  247 => 67,  241 => 63,  234 => 61,  231 => 60,  225 => 59,  223 => 58,  220 => 57,  217 => 56,  211 => 55,  209 => 54,  206 => 53,  203 => 52,  197 => 51,  195 => 50,  192 => 49,  189 => 48,  183 => 47,  181 => 46,  178 => 45,  175 => 44,  169 => 43,  167 => 42,  164 => 41,  161 => 40,  155 => 39,  153 => 38,  150 => 37,  146 => 36,  141 => 33,  134 => 31,  131 => 30,  125 => 29,  123 => 28,  120 => 27,  117 => 26,  111 => 25,  109 => 24,  106 => 23,  103 => 22,  97 => 21,  95 => 20,  92 => 19,  89 => 18,  83 => 17,  81 => 16,  78 => 15,  75 => 14,  69 => 13,  67 => 12,  64 => 11,  61 => 10,  55 => 9,  53 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

        <!-- Carregamento dos blocos de subitens -->

        <div class=\"row\">
            {% for item in record.custom_detail %}

                {% if item.field_type1 %}
                    {% partial 'product-single/custom-detail/field_type1' item=item %}
                {% endif %}

                {% if item.field_type2 %}
                    {% partial 'product-single/custom-detail/field_type2' item=item %}
                {% endif %}

                {% if item.field_type3 %}
                    {% partial 'product-single/custom-detail/field_type3' item=item %}
                {% endif %}

                {% if item.field_type4 %}
                    {% partial 'product-single/custom-detail/field_type4' item=item %}
                {% endif %}

                {% if item.field_type5 %}
                    {% partial 'product-single/custom-detail/field_type5' item=item %}
                {% endif %}

                {% if item.field_type6 %}
                    {% partial 'product-single/custom-detail/field_type6' item=item %}
                {% endif %}
    
            {% endfor %}
        </div>  

        <div class=\"row\">
            {% for field in record.custom_fields %}

                {% if field.field_selector == 'field_type1' %}
                    {% partial 'product-single/custom-fields/field_type1' field=field %}
                {% endif %}

                {% if field.field_selector == 'field_type2' %}
                    {% partial 'product-single/custom-fields/field_type2' field=field %}
                {% endif %}

                {% if field.field_selector == 'field_type3' %}
                    {% partial 'product-single/custom-fields/field_type3' field=field %}
                {% endif %}

                {% if field.field_selector == 'field_type4' %}
                    {% partial 'product-single/custom-fields/field_type4' field=field %}
                {% endif %}

                {% if field.field_selector == 'field_type5' %}
                    {% partial 'product-single/custom-fields/field_type5' field=field %}
                {% endif %}

                {% if field.field_selector == 'field_type6' %}
                    {% partial 'product-single/custom-fields/field_type6' field=field %}
                {% endif %}
    
            {% endfor %}
        
        </div>  

        <!-- Carregamento da galeria -->
        {% if record.custom_gallery %}
            <div class=\"prodsingle-gallery\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-6\">
                        {% for item in record.custom_gallery %}
                            <h3>{{ item.title }}</h3>
                            <div class=\"prod-text\">{{ item.description|raw }}</div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-6 text-center\">
                        <div class=\"masonry\">
                            {% for gallery in record.custom_gallery %}
                                {% for image in gallery.field_gallery if image.featured_image %}
                                    {% if image.featured_image and loop.index <= 6 %}
                                        <div class=\"prodsingle-galleryimage\">
                                            <a class=\"item\" data-fancybox=\"gallery\" href=\"{{ image.gallery_image|media }}\">
                                                <img class=\"img-fluid\" src=\"{{ image.gallery_image|media }}\" alt=\"Produto\">
                                            </a>
                                        </div>
                                    {% endif %}    
                                {% endfor %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
</div>

<div class=\"col-12 prod-buttoncontent text-center py-5 my-5\">
    <a class=\"prod-buttonbudget\" href=\"{{ 'budget'|page }}\">Peça o seu orçamento</a>
</div>", "/home/wwtela/public_html/themes/telassantoantonio/partials/product-single/subitem.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6, "if" => 8, "partial" => 9);
        static $filters = array("escape" => 72, "raw" => 73, "media" => 82, "page" => 98);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['escape', 'raw', 'media', 'page'],
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
