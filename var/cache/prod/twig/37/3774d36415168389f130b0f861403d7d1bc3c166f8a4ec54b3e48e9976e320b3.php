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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig */
class __TwigTemplate_be994d6592ec6fee6e0f16327f636adcac4aab4609bad1ab874f6ee49a5d5fb8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'profile_form_rest' => [$this, 'block_profile_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">group</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["profileForm"] ?? null), 'errors');
        echo "

      ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["profileForm"] ?? null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global")]);
        // line 40
        echo "

      ";
        // line 42
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["profileForm"] ?? null), "avatarUrl", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Avatar", [], "Admin.Global")]);
        // line 44
        echo "

      ";
        // line 46
        if ( !twig_test_empty(((array_key_exists("avatarUrl", $context)) ? (_twig_default_filter(($context["avatarUrl"] ?? null), "")) : ("")))) {
            // line 47
            echo "      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <img class=\"img-thumbnail clickable-avatar\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["avatarUrl"] ?? null), "html", null, true);
            echo "\" alt=\"\">
        </div>
      </div>
      ";
        }
        // line 54
        echo "
      ";
        // line 55
        $this->displayBlock('profile_form_rest', $context, $blocks);
        // line 58
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profiles_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">
      ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 55
    public function block_profile_form_rest($context, array $blocks = [])
    {
        // line 56
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["profileForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 56,  117 => 55,  111 => 69,  104 => 65,  98 => 62,  94 => 61,  89 => 58,  87 => 55,  84 => 54,  77 => 50,  72 => 47,  70 => 46,  66 => 44,  64 => 42,  60 => 40,  58 => 38,  53 => 36,  46 => 32,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig", "/home/u672279739/domains/salvacerohomecenter.com/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig");
    }
}
