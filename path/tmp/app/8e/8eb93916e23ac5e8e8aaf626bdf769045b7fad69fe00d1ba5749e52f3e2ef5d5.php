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

/* inc/token.twig */
class __TwigTemplate_3e1c124ff4f5a6808c48f08b2d986700a988cc5fc78c182040974b775dec8b03 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "inc/token.twig", 1)->unwrap();
        // line 2
        echo "<div id=\"tkb\">
    ";
        // line 3
        echo twig_call_macro($macros["m"], "macro_TokenShow", ["kxa", twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["lang"] ?? null), "token", [], "any", false, false, false, 5), "kxa", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), ["\$KXA" => "<span class=\"kxa\">\$KXA</span>"]), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["lang"] ?? null), "token", [], "any", false, false, false, 6), "kxa", [], "any", false, false, false, 6), "txt", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["config"] ?? null), "settings", [], "any", false, false, false, 7), "kxa", [], "any", false, false, false, 7)], 3, $context, $this->getSourceContext());
        // line 8
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["m"], "macro_TokenShow", ["kxs", twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["lang"] ?? null), "token", [], "any", false, false, false, 11), "kxs", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), ["\$KXS" => "<span class=\"kxs\">\$KXS</span>"]), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["lang"] ?? null), "token", [], "any", false, false, false, 12), "kxs", [], "any", false, false, false, 12), "txt", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["config"] ?? null), "settings", [], "any", false, false, false, 13), "kxs", [], "any", false, false, false, 13)], 9, $context, $this->getSourceContext());
        // line 14
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "inc/token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  53 => 13,  52 => 12,  51 => 11,  50 => 9,  47 => 8,  45 => 7,  44 => 6,  43 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'inc/macros.twig' as m %}
<div id=\"tkb\">
    {{m.TokenShow(
        'kxa',
        lang.token.kxa.title|replace({'\$KXA':'<span class=\"kxa\">\$KXA</span>'}),
        lang.token.kxa.txt,
        config.settings.kxa
    )}}
    {{m.TokenShow(
        'kxs',
        lang.token.kxs.title|replace({'\$KXS':'<span class=\"kxs\">\$KXS</span>'}),
        lang.token.kxs.txt,
        config.settings.kxs
    )}}
</div>
", "inc/token.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/inc/token.twig");
    }
}
