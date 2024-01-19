<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/sorting.html.twig */
class __TwigTemplate_9efd7bb0a179f3cb73b3b92bd7424b9680eecda0e463a7e5bec2ebaede966fc8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<div class=\"module-sorting-menu\">
  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"module-sorting-search-wording\">
        <span id=\"selected_modules\" class=\"module-search-result-title module-search-result-wording\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% partner modules compatible with your store", ["%nbModules%" => ($context["totalModules"] ?? null)], "Modules.Mbo.Modulescatalog"), "html", null, true);
        echo "</span>
        
        <div class=\"module-sorting-search-wording__tooltip-container\">
          ";
        // line 32
        if ((twig_constant("_PS_VERSION_") > "1.7.7.8")) {
            // line 33
            echo "              ";
            $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/sorting.html.twig", 33)->display(twig_array_merge($context, ["content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In the back office, we only show you the modules developed by PrestaShop or our partners that are compatible with your store. ", [], "Modules.Mbo.Modulescatalog")]));
            // line 34
            echo "          ";
        } else {
            // line 35
            echo "            <span 
              class=\"help-box\" data-toggle=\"popover\"
              data-content=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In the back office, we only show you the modules developed by PrestaShop or our partners that are compatible with your store. ", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "\"
            >
            </span>
          ";
        }
        // line 41
        echo "        </div>
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"module-sorting module-sorting-author float-right\">
        <select id=\"sort_module\" class=\"custom-select sort-component\">
          <option value=\"\" disabled selected>- ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", [], "Admin.Actions"), "html", null, true);
        echo " -</option>
          <option value=\"name\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</option>
          <option value=\"price\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Increasing Price", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
          <option value=\"price-desc\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Decreasing Price", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
          <option value=\"scoring-desc\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popularity", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
        </select>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 51,  81 => 50,  77 => 49,  73 => 48,  69 => 47,  61 => 41,  54 => 37,  50 => 35,  47 => 34,  44 => 33,  42 => 32,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/sorting.html.twig", "/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/sorting.html.twig");
    }
}
