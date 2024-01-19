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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/module_actions_buttons.html.twig */
class __TwigTemplate_adb05be1a4cdf069ac84b08154678af0d988aac8941ee66b3e9f95678d4b4b6a extends \Twig\Template
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
        list($context["url"], $context["priceRaw"], $context["priceDisplay"], $context["url_active"], $context["urls"], $context["name"], $context["transDomains"]) =         [$this->getAttribute($this->getAttribute(        // line 27
($context["module"] ?? null), "attributes", []), "url", []), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["module"] ?? null), "attributes", []), "price", []), "raw", []), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["module"] ?? null), "attributes", []), "price", []), "displayPrice", []), $this->getAttribute($this->getAttribute(        // line 30
($context["module"] ?? null), "attributes", []), "url_active", []), $this->getAttribute($this->getAttribute(        // line 31
($context["module"] ?? null), "attributes", []), "urls", []), $this->getAttribute($this->getAttribute(        // line 32
($context["module"] ?? null), "attributes", []), "name", []), "AdminActions"];
        // line 35
        echo "

<div class=\"mbo-module-card__actions btn-group module-actions\">
\t";
        // line 38
        if ((($context["url_active"] ?? null) == "buy")) {
            // line 39
            echo "\t\t<a class=\"btn btn-secondary btn-block btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t<i class=\"material-icons\" style=\"font-size: 18px;\">launch</i>
\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "
\t\t</a>
\t";
        } elseif (twig_length_filter($this->env,         // line 43
($context["urls"] ?? null))) {
            // line 44
            echo "\t\t";
            $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/action_button.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/module_actions_buttons.html.twig", 44)->display(twig_array_merge($context, ["name" =>             // line 45
($context["name"] ?? null), "classes_form" => "btn-block", "classes" => "btn btn-secondary btn-block", "url" => $this->getAttribute(            // line 48
($context["urls"] ?? null), ($context["url_active"] ?? null), [], "array"), "action" =>             // line 49
($context["url_active"] ?? null), "transDomain" =>             // line 50
($context["transDomains"] ?? null)]));
            // line 52
            echo "\t\t";
            if ((twig_length_filter($this->env, ($context["urls"] ?? null)) > 1)) {
                // line 53
                echo "\t\t\t<input type=\"hidden\" class=\"btn\"/>
\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<span class=\"caret\"></span>
\t\t\t</button>
\t\t\t<span class=\"sr-only\">";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle Dropdown", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</span>
\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 60
                    echo "\t\t\t\t\t";
                    if (($context["module_action"] != ($context["url_active"] ?? null))) {
                        // line 61
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 62
                        $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/action_button.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/module_actions_buttons.html.twig", 62)->display(twig_array_merge($context, ["name" =>                         // line 63
($context["name"] ?? null), "classes" => "dropdown-item", "url" =>                         // line 65
$context["module_url"], "action" =>                         // line 66
$context["module_action"], "transDomain" =>                         // line 67
($context["transDomains"] ?? null)]));
                        // line 69
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "\t\t\t</div>
\t\t";
            }
            // line 74
            echo "\t";
        }
        // line 75
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/module_actions_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 75,  133 => 74,  129 => 72,  115 => 71,  111 => 69,  109 => 67,  108 => 66,  107 => 65,  106 => 63,  105 => 62,  102 => 61,  99 => 60,  82 => 59,  77 => 57,  71 => 53,  68 => 52,  66 => 50,  65 => 49,  64 => 48,  63 => 45,  61 => 44,  59 => 43,  54 => 41,  48 => 39,  46 => 38,  41 => 35,  39 => 32,  38 => 31,  37 => 30,  36 => 29,  35 => 28,  34 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/module_actions_buttons.html.twig", "/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/module_actions_buttons.html.twig");
    }
}
