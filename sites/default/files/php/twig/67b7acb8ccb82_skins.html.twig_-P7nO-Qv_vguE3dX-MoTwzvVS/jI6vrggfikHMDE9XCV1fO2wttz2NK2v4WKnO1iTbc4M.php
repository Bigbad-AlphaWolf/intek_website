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

/* themes/custom/gavias_inusti/templates/addon/skins.html.twig */
class __TwigTemplate_fae55e74c18e39c17d7c316c0120bc6389db4150dc3b8493bba0527211f9848a extends \Twig\Template
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
        echo "<div class=\"gavias-skins-panel hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fas fa-eye-dropper\"></i></div>
\t<div class=\"gavias-skins-panel-inner\">
           ";
        // line 6
        echo "<div id=\"gavias_customize_form\" class=\"gavias_customize_form\">
 
   <div class=\"form-group action\">
      <input type=\"button\" id=\"gavias_customize_save\" class=\"btn form-submit\" value=\"Save\" />
      <input type=\"button\" id=\"gavias_customize_preview\" class=\"btn form-submit\" value=\"Preview\" />
      <input type=\"button\" id=\"gavias_customize_reset\" class=\"btn form-submit\" value=\"Reset\" />
      <input type=\"hidden\" id=\"gva_theme_name\" name=\"theme_name\" value=\"gavias_inusti\" />
   </div>   
 
   <div class=\"clearfix\"></div>
   <div id=\"customize-gavias-preivew\">
      <div id=\"customize-accordion\">   
 
         <!-- Typo -->
         <div class=\"card\">
            <div class=\"card-header\">
              <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-typo\">
                Typography
              </a>
            </div>
            <div id=\"customize-typo\" class=\"collapse show\" data-parent=\"#customize-accordion\">
               <div class=\"card-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Font Primary</label>
                        <div class=\"input-group\">
                            <select name=\"font_family_primary\" class=\"form-select form-control customize-option\">
                              ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["fonts"] ?? null), 33, $this->source));
        echo "
                            </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label class=\"fw\">Font Second (Heading h1, h2, h3...)</label>
                        <div class=\"input-group\">
                            <select name=\"font_family_second\" class=\"form-select form-control customize-option\">
                              ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["fonts"] ?? null), 43, $this->source));
        echo "
                            </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Font Weight Body</label>
                        <div class=\"input-group\">
                            <select name=\"font_body_weight\" class=\"form-control customize-option\">
                              <option value=\"\">-- Default --</option>
                              <option value=\"100\">100</option>
                              <option value=\"300\">300</option>
                              <option value=\"400\">400</option>
                              <option value=\"500\">500</option>
                              <option value=\"600\">600</option>
                              <option value=\"700\">700</option>
                              <option value=\"800\">800</option>
                              <option value=\"900\">900</option>
                            </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Font size Body</label>
                        <div class=\"input-group\">
                            <select name=\"font_body_size\" class=\"form-control customize-option\">
                              <option value=\"\">-- Default --</option>
                              <option value=\"12\">12</option>
                              <option value=\"13\">13</option>
                              <option value=\"14\">14</option>
                              <option value=\"15\">15</option>
                              <option value=\"16\">16</option>
                              <option value=\"17\">17</option>
                              <option value=\"18\">18</option>
                              <option value=\"19\">19</option>
                              <option value=\"20\">20</option>
                              <option value=\"21\">21</option>
                              <option value=\"22\">22</option>
                              <option value=\"23\">23</option>
                              <option value=\"24\">24</option>
                              <option value=\"25\">25</option>
                              <option value=\"26\">26</option>
                              <option value=\"27\">27</option>
                              <option value=\"28\">28</option>
                              <option value=\"29\">29</option>
                              <option value=\"30\">30</option>
                            </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 
 
         <!-- Body -->
         <div class=\"card\">
            <div class=\"card-header\">
              <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-body\">
                Body
              </a>
            </div>
            <div id=\"customize-body\" class=\"collapse\" data-parent=\"#customize-accordion\">
               <div class=\"card-body\">
                  <div class=\"desc\">Background body show when use boxed layout</div>
                  <div class=\"form-wrapper\">
                  <div class=\"desc\" style=\"line-height: 25px;\"><b>You can upload image for /themes/gavias_inusti/images/patterns</b></div>
                     <div class=\"form-group\">
                        <label>Background Image</label>
                        <div class=\"input-group\">
                            <input name=\"body_bg_image\" type=\"hidden\" />
                            <div class=\"box-choose-image\">
 
                            </div>
                            <select name=\"body_bg_image\" class=\"form-control customize-option text-black\">
                              <option value=\"\">--Default--</option>
                              ";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["patterns"] ?? null), 120, $this->source));
        echo "
                            </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background Color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"body_bg_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background Position</label>
                        <div class=\"input-group\">
                          <select name=\"body_bg_position\" class=\"form-control customize-option\">
                            <option value=\"\">--Default--</option>
                            <option value=\"center top\">center top</option>
                            <option value=\"center right\">center right</option>
                            <option value=\"center bottom\">center bottom</option>
                            <option value=\"center center\">center center</option>
                            <option value=\"left top\">left top</option>
                            <option value=\"left center\">left center</option>
                            <option value=\"left bottom\">left bottom</option>
                            <option value=\"right top\">right top</option>
                            <option value=\"right center\">right center</option>
                            <option value=\"right bottom\">right bottom</option>
                          </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background Repeat</label>
                        <div class=\"input-group colorselector\">
                            <select name=\"body_bg_repeat\" class=\"form-control customize-option\">
                              <option value=\"\">--Default--</option>
                              <option value=\"no-repeat\">no-repeat</option>
                              <option value=\"repeat\">repeat</option>
                              <option value=\"repeat-x\">repeat-x</option>
                              <option value=\"repeat-y\">repeat-y</option>
                            </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>
 
         <!-- General -->
         <div class=\"card\">
            <div class=\"card-header\">
              <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-general\">
                General
              </a>
            </div>
            <div id=\"customize-general\" class=\"collapse\" data-parent=\"#customize-accordion\">
               <div class=\"card-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"text_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Link color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"link_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Link hover color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"link_hover_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 
 
         <!-- Topbar -->
         <div class=\"card\">
            <div class=\"card-header\">
              <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-topbar\">
                Topbar
              </a>
            </div>
             <div id=\"customize-topbar\" class=\"collapse\" data-parent=\"#customize-accordion\">
                <div class=\"card-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"topbar_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Topbar Color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"topbar_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Topbar Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"topbar_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Topbar Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"topbar_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>
 
         <!-- Header -->
         <div class=\"card\">
            <div class=\"card-header\">
             <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-header\">
               Header
             </a>
            </div>
            <div id=\"customize-header\" class=\"collapse\" data-parent=\"#customize-accordion\">
               <div class=\"card-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Header Color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Header Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Header Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>
 
         <!-- Main menu -->
          <div class=\"card\">
            <div class=\"card-header\">
              <a role=\"button\" data-toggle=\"collapse\" href=\"#customize-mainmenu\">
                Main Menu
              </a>
            </div>
            <div id=\"customize-mainmenu\" class=\"collapse\" data-parent=\"#customize-accordion\">
                <div class=\"card-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Menu | Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Menu | Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_background\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>
 
         <!-- Footer -->
         <div class=\"card\">
            <div class=\"card-header\">
                 <a class=\"card-link\" data-toggle=\"collapse\"  href=\"#customize-footer\">
                   Footer
                 </a>
            </div>
            <div id=\"customize-footer\" class=\"collapse\" data-parent=\"#customize-accordion\">
                <div class=\"card-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
 
               </div>
            </div> 
         </div>
 
         <!-- Copyright -->
        <div class=\"card\">
            <div class=\"card-header\">
             <a role=\"button\" data-toggle=\"collapse\"  href=\"#customize-copyright\" >
               Copyright
             </a>
            </div>
            <div id=\"customize-copyright\" class=\"collapse\" data-parent=\"#customize-accordion\">
                <div class=\"card-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
 
               </div>
            </div> 
         </div>
 
      </div>    
   </div>   
</div>
";
        // line 517
        echo "\t</div>   
</div>

<div class=\"gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Color skins</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"item-color default\" href=\"//";
        // line 525
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 525, $this->source), "html", null, true);
        echo "gvas\"></a>
\t\t\t<a class=\"item-color blue\" href=\"//";
        // line 526
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 526, $this->source), "html", null, true);
        echo "gvas=blue\"></a>
\t\t\t<a class=\"item-color brown\" href=\"//";
        // line 527
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 527, $this->source), "html", null, true);
        echo "gvas=brown\"></a>
\t\t\t<a class=\"item-color green\" href=\"//";
        // line 528
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 528, $this->source), "html", null, true);
        echo "gvas=green\"></a>
\t\t\t<a class=\"item-color lilac\" href=\"//";
        // line 529
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 529, $this->source), "html", null, true);
        echo "gvas=lilac\"></a>
\t\t\t<a class=\"item-color lime_green\" href=\"//";
        // line 530
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 530, $this->source), "html", null, true);
        echo "gvas=lime_green\"></a>
\t\t\t<a class=\"item-color orange\" href=\"//";
        // line 531
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 531, $this->source), "html", null, true);
        echo "gvas=orange\"></a>
\t\t\t<a class=\"item-color pink\" href=\"//";
        // line 532
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 532, $this->source), "html", null, true);
        echo "gvas=pink\"></a>
\t\t\t<a class=\"item-color purple\" href=\"//";
        // line 533
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 533, $this->source), "html", null, true);
        echo "gvas=purple\"></a>
\t\t\t<a class=\"item-color red\" href=\"//";
        // line 534
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 534, $this->source), "html", null, true);
        echo "gvas=red\"></a>
\t\t\t<a class=\"item-color turquoise\" href=\"//";
        // line 535
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 535, $this->source), "html", null, true);
        echo "gvas=turquoise\"></a>
\t\t\t<a class=\"item-color turquoise2\" href=\"//";
        // line 536
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 536, $this->source), "html", null, true);
        echo "gvas=turquoise2\"></a>
\t\t\t<a class=\"item-color violet_red\" href=\"//";
        // line 537
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 537, $this->source), "html", null, true);
        echo "gvas=violet_red\"></a>
\t\t\t<a class=\"item-color violet_red2\" href=\"//";
        // line 538
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 538, $this->source), "html", null, true);
        echo "gvas=violet_red2\"></a>
\t\t\t<a class=\"item-color yellow\" href=\"//";
        // line 539
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 539, $this->source), "html", null, true);
        echo "gvas=yellow\"></a>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Body layout</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"layout\" data-layout=\"boxed\">Boxed</a>
\t\t\t<a class=\"layout\" data-layout=\"wide\">Wide</a>
\t\t</div>
\t</div>
</div>

\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_inusti/templates/addon/skins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 539,  627 => 538,  623 => 537,  619 => 536,  615 => 535,  611 => 534,  607 => 533,  603 => 532,  599 => 531,  595 => 530,  591 => 529,  587 => 528,  583 => 527,  579 => 526,  575 => 525,  565 => 517,  166 => 120,  86 => 43,  73 => 33,  44 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_inusti/templates/addon/skins.html.twig", "/home/inteksi/website/themes/custom/gavias_inusti/templates/addon/skins.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 33, "escape" => 525);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 'escape'],
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
