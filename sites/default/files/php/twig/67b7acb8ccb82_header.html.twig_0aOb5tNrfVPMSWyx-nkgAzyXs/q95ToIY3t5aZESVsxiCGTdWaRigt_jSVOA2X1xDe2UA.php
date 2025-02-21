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

/* themes/custom/gavias_inusti/templates/page/header.html.twig */
class __TwigTemplate_f88efc0155776ad6d7d6046024572f2e2e444e7c62379ccfb897d2eac8b91d13 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header-default\">
  
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"topbar-content-inner clearfix";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 8)) {
                echo " has-language-block";
            }
            echo "\"> 
              <div class=\"topbar-content\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</div>
              ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 10)) {
                // line 11
                echo "                <div class=\"language-region\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "</div>
              ";
            }
            // line 13
            echo "            </div>  
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        $context["class_sticky"] = "";
        // line 21
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 22
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 23
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 25, $this->source), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 31)) {
            // line 32
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
                  ";
        }
        // line 34
        echo "                </div>
                
                <div class=\"header-inner clearfix \">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          <div class=\"main-menu-inner\">
                            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 43)) {
            // line 44
            echo "                              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
                            ";
        }
        // line 46
        echo "                          </div>

                          ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 48)) {
            // line 49
            echo "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
                            </div>
                          ";
        }
        // line 53
        echo "                        </div>
                        
                        <div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-lg-none d-xl-none\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>

                        ";
        // line 61
        if (($context["link_request"] ?? null)) {
            // line 62
            echo "                          <div class=\"header-action\">
                            <a href=\"";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_request"] ?? null), 63, $this->source), "html", null, true);
            echo "\" class=\"btn-theme\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get a free quote"));
            echo "</a>
                          </div>
                        ";
        }
        // line 65
        echo " 

                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_inusti/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 65,  160 => 63,  157 => 62,  155 => 61,  145 => 53,  139 => 50,  136 => 49,  134 => 48,  130 => 46,  124 => 44,  122 => 43,  111 => 34,  105 => 32,  103 => 31,  94 => 25,  88 => 23,  85 => 22,  82 => 21,  80 => 20,  77 => 19,  69 => 13,  63 => 11,  61 => 10,  57 => 9,  51 => 8,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_inusti/templates/page/header.html.twig", "/home/inteksi/website/themes/custom/gavias_inusti/templates/page/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 20);
        static $filters = array("escape" => 9, "t" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't'],
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
