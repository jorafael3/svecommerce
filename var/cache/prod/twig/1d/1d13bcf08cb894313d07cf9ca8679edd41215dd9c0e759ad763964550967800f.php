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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Profiles/create.html.twig */
class __TwigTemplate_5134c362d98e759b474ddcce558c0a41368b102d1cc3ea141f8e78610ba43fd3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/create.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        if (($context["multistoreIsUsed"] ?? null)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "infotip", [0 => ($context["multistoreInfoTip"] ?? null), 1 => true], "method"), "html", null, true);
        }
        // line 30
        echo "  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 32
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/create.html.twig", 32)->display($context);
        // line 33
        echo "    </div>
  </div>
";
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        // line 38
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/profiles.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 40,  63 => 38,  60 => 37,  54 => 33,  52 => 32,  48 => 30,  43 => 29,  40 => 28,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/create.html.twig", "/home/u672279739/domains/salvacerohomecenter.com/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Profiles/create.html.twig");
    }
}
