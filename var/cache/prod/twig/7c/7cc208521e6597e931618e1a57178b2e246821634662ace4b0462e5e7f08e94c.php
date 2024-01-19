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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/menu_top.html.twig */
class __TwigTemplate_68622587e42164ddcd28557a49e47fb61b46d7e68761fa86e9e5d692136adc01 extends \Twig\Template
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
        echo "<div class=\"module-top-menu\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\" style=\"margin-bottom: 8px;\">
\t\t\t<h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Find modules to grow your business", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Explore the Marketplace in your back office to find free and paid partner modules to grow your business. Increase traffic, improve conversions, or build customer loyalty... there’s a module for every need.", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("And if you want to give your store a new look, {link}check the theme catalog{/link}.", ["{link}" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mbo_catalog_theme")) . "\">"), "{/link}" => "</a>"], "Modules.Mbo.Modulescatalog");
        echo "
\t\t\t</p>
\t\t</div>
\t</div>


\t<div class=\"row\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"input-group\" id=\"search-input-group\">
\t\t\t\t<input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
\t\t\t\t\t\t<i class=\"material-icons\">search</i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4 module-menu-item\"></div>
\t</div>

\t<div class=\"row\">
\t\t";
        // line 54
        if (array_key_exists("topMenuData", $context)) {
            // line 55
            echo "\t\t\t<div class=\"col-md-4 module-top-menu-item\">
\t\t\t\t<h3>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h3>
\t\t\t\t";
            // line 57
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/menu_top.html.twig", 57)->display(twig_array_merge($context, ["topMenuData" => ($context["topMenuData"] ?? null)]));
            // line 58
            echo "\t\t\t</div>
\t\t";
        }
        // line 60
        echo "
\t\t";
        // line 61
        if ((array_key_exists("requireFilterStatus", $context) && (($context["requireFilterStatus"] ?? null) == true))) {
            // line 62
            echo "\t\t\t<div class=\"col-md-4 module-top-menu-item\">
\t\t\t\t<h3>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
            echo "</h3>
\t\t\t\t";
            // line 64
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/menu_top.html.twig", 64)->display($context);
            // line 65
            echo "\t\t\t</div>
\t\t";
        }
        // line 67
        echo "
\t\t";
        // line 68
        if (((($context["level"] ?? null) > twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")) && array_key_exists("bulkActions", $context))) {
            // line 69
            echo "\t\t\t<div class=\"col-md-4 module-top-menu-item disabled\">
\t\t\t\t<h3>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk Actions", [], "Admin.Global"), "html", null, true);
            echo "</h3>
\t\t\t\t";
            // line 71
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/menu_top.html.twig", 71)->display($context);
            // line 72
            echo "\t\t\t</div>
\t\t";
        }
        // line 74
        echo "\t</div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 79
        $context["js_translatable"] = twig_array_merge(["Search - placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search modules: keyword, name, author...", [], "Admin.Modules.Help")],         // line 81
($context["js_translatable"] ?? null));
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/menu_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 81,  128 => 79,  121 => 74,  117 => 72,  115 => 71,  111 => 70,  108 => 69,  106 => 68,  103 => 67,  99 => 65,  97 => 64,  93 => 63,  90 => 62,  88 => 61,  85 => 60,  81 => 58,  79 => 57,  75 => 56,  72 => 55,  70 => 54,  46 => 33,  40 => 30,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/menu_top.html.twig", "/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/menu_top.html.twig");
    }
}
