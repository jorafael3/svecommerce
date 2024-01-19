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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/catalog_card.html.twig */
class __TwigTemplate_bc35169b1c60621d9b1d3224d7f455faf494788cad952e747cc6605c3e395f69 extends \Twig\Template
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
        echo "
";
        // line 26
        $context["isModuleActive"] = $this->getAttribute($this->getAttribute(($context["module"] ?? null), "database", []), "active", []);
        // line 27
        echo "
<div class=\"mbo-module-grid__item col-sm-12 col-md-6 col-lg-4 col-xl-3 module-item module-item-grid\" data-id=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "id", []), "html", null, true);
        echo "\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "displayName", []), "html", null, true);
        echo "\" data-scoring=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "avgRate", []), "html", null, true);
        echo "\" data-logo=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "img", []), "html", null, true);
        echo "\" data-author=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "author", []), "html", null, true);
        echo "\" data-version=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "version", []), "html", null, true);
        echo "\" data-description=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "description", []), "html", null, true);
        echo "\" data-tech-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "name", []), "html", null, true);
        echo "\" data-child-categories=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "categoryName", []), "html", null, true);
        echo "\" data-categories=\"";
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "productType", []), "html", null, true);
        echo "\" data-price=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "price", []), "raw", []), "html", null, true);
        echo "\" data-active=\"";
        echo twig_escape_filter($this->env, ($context["isModuleActive"] ?? null), "html", null, true);
        echo "\">

\t<div class=\"mbo-module-card\">
\t\t<div class=\"mbo-module-card__top\">
\t\t\t<div class=\"mbo-module-card__header\">
\t\t\t\t<div class=\"mbo-module-card__img-container\">
\t\t\t\t\t<img class=\"mbo-module-card__img\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "img", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "displayName", []), "html", null, true);
        echo "\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"mbo-module-card__title-container\">
\t\t\t\t\t<h3 class=\"mbo-module-card__title\" data-toggle=\"pstooltip\" data-placement=\"top\" title=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "displayName", []);
        echo "\">
\t\t\t\t\t\t";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "displayName", [])) {
            // line 39
            echo "\t\t\t\t\t\t\t";
            echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "displayName", []);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "name", []), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "picos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["pico"]) {
            // line 44
            echo "\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pico"], "img", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pico"], "label", []), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</h3>
\t\t\t\t\t<p class=\"mbo-module-card__subtitle\">
\t\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("by %author%", ["%author%" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "author", [])]), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mbo-module-card__infos\">
\t\t\t<div class=\"mbo-module-card__tags-container\">
\t\t\t\t";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "categoryName", [])) {
            // line 57
            echo "\t\t\t\t\t<div class=\"mbo-module-card__tag\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "categoryName", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "categoryName", []), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t";
        $context["badges"] = $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "badges", []);
        // line 62
        echo "\t\t\t\t";
        if (($context["badges"] ?? null)) {
            // line 63
            echo "\t\t\t\t\t";
            $context["badge"] = twig_first($this->env, ($context["badges"] ?? null));
            // line 64
            echo "\t\t\t\t\t<div class=\"mbo-module-card__tag\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? null), "label", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? null), "label", []), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 68
        echo "\t\t\t</div>

\t\t\t";
        // line 70
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "nbRates", []) > 0)) {
            // line 71
            echo "\t\t\t\t<div class=\"mbo-module-card__rate-container\">
\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t<span class=\"mbo-module-card__rate\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "avgRate", []), "html", null, true);
            echo "</span>
\t\t\t\t\t<span class=\"mbo-module-card__nb-rate\">(";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "nbRates", []), "html", null, true);
            echo ")</span>
\t\t\t\t</div>
\t\t\t";
        }
        // line 77
        echo "\t\t</div>

\t\t<p class=\"mbo-module-card__description\">
\t\t\t";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "description", []), "html", null, true);
        echo "
\t\t</p>

\t\t<a class=\"module-read-more-grid-btn mbo-module-card__read-more\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_cart", ["moduleId" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "id", [])]), "html", null, true);
        echo "\" data-target=\"#module-modal-read-more-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "name", []), "html", null, true);
        echo twig_escape_filter($this->env, ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show details", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
        echo "
\t\t</a>

\t\t<div class=\"mbo-module-card__bottom\">

\t\t\t<p class=\"bo-module-card__price\">
\t\t\t\t";
        // line 90
        if ((($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "url_active", []) == "buy") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "price", []), "raw", []) != "0.00"))) {
            // line 91
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "price", []), "displayPrice", []), "html", null, true);
            echo "
\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 92
($context["module"] ?? null), "attributes", []), "url_active", []) != "buy")) {
            // line 93
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 95
        echo "\t\t\t</p>

\t\t\t";
        // line 97
        $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/module_actions_buttons.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/catalog_card.html.twig", 97)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null), "level" => ($context["level"] ?? null)]));
        // line 98
        echo "\t\t</div>
\t</div>

\t";
        // line 101
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_read_more.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/catalog_card.html.twig", 101)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null), "additionalModalSuffix" => ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? null), "")) : ("")), "level" => ($context["level"] ?? null)]));
        // line 102
        echo "\t";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/catalog_card.html.twig", 102)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null)]));
        // line 103
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/catalog_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 103,  236 => 102,  234 => 101,  229 => 98,  227 => 97,  223 => 95,  217 => 93,  215 => 92,  210 => 91,  208 => 90,  199 => 84,  192 => 83,  186 => 80,  181 => 77,  175 => 74,  171 => 73,  167 => 71,  165 => 70,  161 => 68,  155 => 65,  150 => 64,  147 => 63,  144 => 62,  141 => 61,  135 => 58,  130 => 57,  128 => 56,  117 => 48,  113 => 46,  102 => 44,  97 => 43,  91 => 41,  85 => 39,  83 => 38,  79 => 37,  71 => 34,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/catalog_card.html.twig", "/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/catalog_card.html.twig");
    }
}
