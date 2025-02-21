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

/* themes/custom/gavias_inusti/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_ef39ed9f8f099172ea6cece28b60e04f58c3da7832ad28e25cca190f5132ccb2 extends \Twig\Template
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
        // line 10
        echo "<div class=\"breadcrumb-links\">
  <div class=\"content-inner\">
    ";
        // line 12
        if (($context["breadcrumb"] ?? null)) {
            // line 13
            echo "      <nav class=\"breadcrumb ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null), 13, $this->source), "html", null, true);
            echo "\" aria-labelledby=\"system-breadcrumb\">
        <ol>
          ";
            // line 15
            $context["i"] = 0;
            echo "  
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 18
                echo "            <li>
              ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 19)) {
                    // line 20
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "</a>
              ";
                } else {
                    // line 22
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "
              ";
                }
                // line 24
                echo "              ";
                if ((($context["i"] ?? null) < (twig_length_filter($this->env, ($context["breadcrumb"] ?? null)) - 1))) {
                    // line 25
                    echo "                <span class=\"\"> / </span>
              ";
                }
                // line 26
                echo "  
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "          <li></li>
        </ol>
      </nav>
    ";
        }
        // line 33
        echo "  </div> 
</div>  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_inusti/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  96 => 29,  88 => 26,  84 => 25,  81 => 24,  75 => 22,  67 => 20,  65 => 19,  62 => 18,  59 => 17,  55 => 16,  51 => 15,  45 => 13,  43 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_inusti/templates/navigation/breadcrumb.html.twig", "/home/inteksi/website/themes/custom/gavias_inusti/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "set" => 15, "for" => 16);
        static $filters = array("escape" => 13, "length" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
