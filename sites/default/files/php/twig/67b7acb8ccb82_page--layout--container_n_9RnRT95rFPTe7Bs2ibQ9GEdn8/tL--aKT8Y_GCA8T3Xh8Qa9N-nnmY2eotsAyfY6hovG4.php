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

/* themes/custom/gavias_inusti/templates/page/page-layout/page--layout--container_no_sidebar.html.twig */
class __TwigTemplate_c7b035c824c01216f506cd3127ce1558c9e4e586031f7108cbcc8d9e8609e14e extends \Twig\Template
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
        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        echo "<div class=\"gva-body-wrapper\">
\t<div class=\"body-page gva-body-page\">
\t\t
\t   ";
        // line 11
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/custom/gavias_inusti/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 11)->display($context);
        // line 12
        echo "\t\t
\t\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 13)) {
            // line 14
            echo "\t\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 15
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 19
        echo "
\t\t<div role=\"main\" class=\"main main-page";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null), 20, $this->source), "html", null, true);
        echo "\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 23)) {
            // line 24
            echo "\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 27
        echo "\t

\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 29)) {
            // line 30
            echo "\t\t\t\t<div class=\"help  gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 38
        echo "
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 40)) {
            // line 41
            echo "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 51
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container container-bg\">
\t\t\t\t\t";
        // line 56
        $this->loadTemplate("@gavias_inusti/page/main-no-sidebar.html.twig", "themes/custom/gavias_inusti/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 56)->display($context);
        // line 57
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 60)) {
            // line 61
            echo "\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 67
        echo "
\t\t\t";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 68)) {
            // line 69
            echo "\t\t\t\t<div class=\"area after-content\">
\t\t\t\t\t<div class=\"container\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 77
        echo "\t\t\t
\t\t</div>
\t</div>

\t";
        // line 81
        $this->loadTemplate("@gavias_inusti/page/footer.html.twig", "themes/custom/gavias_inusti/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 81)->display($context);
        // line 82
        echo "</div>

";
        // line 84
        $this->loadTemplate("@gavias_inusti/page/parts/quick-side.html.twig", "themes/custom/gavias_inusti/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 84)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_inusti/templates/page/page-layout/page--layout--container_no_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 84,  178 => 82,  176 => 81,  170 => 77,  162 => 72,  157 => 69,  155 => 68,  152 => 67,  145 => 63,  141 => 61,  139 => 60,  134 => 57,  132 => 56,  125 => 51,  116 => 45,  110 => 41,  108 => 40,  104 => 38,  96 => 33,  91 => 30,  89 => 29,  85 => 27,  79 => 25,  76 => 24,  74 => 23,  68 => 20,  65 => 19,  59 => 16,  56 => 15,  53 => 14,  51 => 13,  48 => 12,  46 => 11,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_inusti/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", "/home/inteksi/website/themes/custom/gavias_inusti/templates/page/page-layout/page--layout--container_no_sidebar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "include" => 11, "if" => 13);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape'],
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
