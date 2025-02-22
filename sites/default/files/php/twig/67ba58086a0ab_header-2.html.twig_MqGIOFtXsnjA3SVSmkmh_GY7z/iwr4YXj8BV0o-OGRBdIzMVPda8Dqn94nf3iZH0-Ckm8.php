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

/* themes/custom/gavias_inusti/templates/page/header-2.html.twig */
class __TwigTemplate_f376d7bf6883b3a96396f7bd5bb00eab extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header-2\">
  ";
        // line 2
        $context["class_sticky"] = "";
        // line 3
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 4
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 5
            echo "  ";
        }
        echo "  

  <div class=\"header-main\">
    <div class=\"container\">
      <div class=\"header-inner clearfix\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-4 col-xs-4 branding\">
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 12)) {
            // line 13
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 15
        echo "          </div>
          <div class=\"col-md-9 col-sm-8 col-xs-8 right-header\">
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 17)) {
            // line 18
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 20
        echo "          </div>
        </div>  
      </div>
    </div>  
  </div>

  <div class=\"main-menu ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 26, $this->source), "html", null, true);
        echo " ";
        if (($context["link_request"] ?? null)) {
            echo " has-link-request";
        }
        echo "\">
    <div class=\"container header-content-layout\">
      <div class=\"header-main-inner p-relative\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12 p-static\">
            <div class=\"area-main-menu\">
              <div class=\"area-inner\">
                <div class=\"gva-offcanvas-mobile\">
                  <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                  ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 35)) {
            // line 36
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
                  
                  ";
        }
        // line 38
        echo "  
                  ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 39)) {
            // line 40
            echo "                    <div class=\"after-offcanvas hidden\">
                      ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
                    </div>
                 ";
        }
        // line 44
        echo "                </div>
                  
                <div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-lg-none d-xl-none\">
                  <span class=\"one\"></span>
                  <span class=\"two\"></span>
                  <span class=\"three\"></span>
                </div>
    
                ";
        // line 52
        if (($context["link_request"] ?? null)) {
            // line 53
            echo "                  <div class=\"header-action\">
                    <a href=\"";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_request"] ?? null), 54, $this->source), "html", null, true);
            echo "\" class=\"btn-large btn-theme\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get a free quote"));
            echo "</a>
                  </div>
                ";
        }
        // line 56
        echo " 

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
        return "themes/custom/gavias_inusti/templates/page/header-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  143 => 54,  140 => 53,  138 => 52,  128 => 44,  122 => 41,  119 => 40,  117 => 39,  114 => 38,  107 => 36,  105 => 35,  89 => 26,  81 => 20,  75 => 18,  73 => 17,  69 => 15,  63 => 13,  61 => 12,  50 => 5,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_inusti/templates/page/header-2.html.twig", "/Users/makdiop/Documents/INTEK_WEBSITE/intek_website_v2/intek_website/themes/custom/gavias_inusti/templates/page/header-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 3);
        static $filters = array("escape" => 13, "t" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
