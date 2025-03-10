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

/* themes/custom/gavias_inusti/templates/navigation/menu--main.html.twig */
class __TwigTemplate_d65f3242fdbc5e980b1d247969949159f424ea8aecf04bf4d56d1d88612eed3d extends \Twig\Template
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
        // line 21
        echo "
<div class=\"gva-navigation\">
";
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 29, $context, $this->getSourceContext()));
        echo "

";
        // line 73
        echo "</div>

";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "gva_menu gva_menu_main"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo ">
      
    ";
                } else {
                    // line 38
                    echo "      <ul class=\"menu sub-menu\">
    ";
                }
                // line 40
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "      ";
                    $context["class_mega_menu"] = "";
                    // line 42
                    echo "      ";
                    $context["class_columns"] = "";
                    // line 43
                    echo "      ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 43), "gva_layout", [], "any", false, false, true, 43) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 44
                        echo "        ";
                        $context["class_mega_menu"] = "gva-mega-menu mega-menu-block";
                        echo " 
      ";
                    } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "attributes", [], "any", false, false, true, 45), "gva_layout", [], "any", false, false, true, 45) == "menu-grid") && (($context["menu_level"] ?? null) == 0))) {
                        echo "   
        ";
                        // line 46
                        $context["class_mega_menu"] = "gva-mega-menu megamenu menu-grid";
                        echo " 
        ";
                        // line 47
                        $context["class_columns"] = twig_join_filter([0 => "menu-columns-", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "gva_layout_columns", [], "any", false, false, true, 47)], "");
                        // line 48
                        echo "      ";
                    }
                    echo "    
      ";
                    // line 50
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "is_expanded", [], "any", false, false, true, 52)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "is_collapsed", [], "any", false, false, true, 53)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 54
$context["item"], "in_active_trail", [], "any", false, false, true, 54)) ? ("menu-item--active-trail") : ("")), 4 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 55
$context["item"], "attributes", [], "any", false, false, true, 55), "gva_class", [], "any", false, false, true, 55), 5 =>                     // line 56
($context["class_mega_menu"] ?? null), 6 =>                     // line 57
($context["class_columns"] ?? null)];
                    // line 60
                    echo "      <li ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 60), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "gva_icon", "gva_class", "gva_layout_columns", "gva_block", "gva_layout"), "html", null, true);
                    echo ">
        <a href=\"";
                    // line 61
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 61), "gva_icon", [], "any", false, false, true, 61) != "")) {
                        echo " <i class=\"fa ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 61), "gva_icon", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 62
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 62), 62, $this->source)), "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 62) || ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 62), "gva_layout", [], "any", false, false, true, 62) == "menu-block") && (($context["menu_level"] ?? null) == 0)))) {
                        echo "<span class=\"icaret nav-plus fas fa-chevron-down\"></span>";
                    }
                    // line 63
                    echo "        </a>
        ";
                    // line 64
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 64), "gva_layout", [], "any", false, false, true, 64) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 65
                        echo "          <div class=\"sub-menu\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "gva_block_content", [], "any", false, false, true, 65), 65, $this->source));
                        echo "</div>
        ";
                    }
                    // line 66
                    echo "  
        ";
                    // line 67
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 67)) {
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 67), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 67, $context, $this->getSourceContext()));
                    }
                    // line 68
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_inusti/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 70,  173 => 68,  169 => 67,  166 => 66,  160 => 65,  158 => 64,  155 => 63,  149 => 62,  141 => 61,  136 => 60,  134 => 57,  133 => 56,  132 => 55,  131 => 54,  130 => 53,  129 => 52,  128 => 50,  123 => 48,  121 => 47,  117 => 46,  113 => 45,  108 => 44,  105 => 43,  102 => 42,  99 => 41,  94 => 40,  90 => 38,  83 => 35,  80 => 34,  77 => 33,  74 => 32,  59 => 31,  53 => 73,  48 => 29,  45 => 24,  43 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_inusti/templates/navigation/menu--main.html.twig", "/home/inteksi/website/themes/custom/gavias_inusti/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 40, "set" => 41);
        static $filters = array("escape" => 35, "join" => 47, "without" => 60, "trim" => 62, "raw" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join', 'without', 'trim', 'raw'],
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
