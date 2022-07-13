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

/* inc/info.twig */
class __TwigTemplate_08bf114c5dbc924f2b1e8acbdd21b7489f7278a53980cc2bc468c37fc29a07e5 extends \Twig\Template
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "inc/info.twig", 1)->unwrap();
        // line 2
        echo "<div id=\"do\">
    ";
        // line 3
        echo twig_call_macro($macros["m"], "macro_img", ["img/top-ix.png", ["width" => 2000, "height" => 744, "cls" => "t-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3)]], 3, $context, $this->getSourceContext());
        echo "
    <div class=\"ct\">
        <div class=\"sub\" data-show>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "info", [], "any", false, false, false, 5), "sub", [], "any", false, false, false, 5), "html", null, true);
        echo "</div>
        <h2 class=\"h2\" data-show>";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "info", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6);
        echo "</h2>
        <div class=\"p\" data-show>
            ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "info", [], "any", false, false, false, 8), "txt", [], "any", false, false, false, 8);
        echo "
        </div>
        <ul class=\"dc\">
            ";
        // line 11
        echo twig_call_macro($macros["m"], "macro_Info", ["knight", "img/knight-kryxivia.png", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["lang"] ?? null), "info", [], "any", false, false, false, 14), "player", [], "any", false, false, false, 14), "N/A"], 11, $context, $this->getSourceContext());
        // line 16
        echo "
            ";
        // line 17
        echo twig_call_macro($macros["m"], "macro_Info", ["krys", "img/kxa-token_kryxivia.png", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["lang"] ?? null), "info", [], "any", false, false, false, 20), "capkxa", [], "any", false, false, false, 20), (twig_number_format_filter($this->env,         // line 21
($context["MarketCapKXA"] ?? null), 0, ".", ",") . "\$")], 17, $context, $this->getSourceContext());
        // line 22
        echo "
            ";
        // line 23
        echo twig_call_macro($macros["m"], "macro_Info", ["krys", "img/kxs-token_kryxivia.png", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["lang"] ?? null), "info", [], "any", false, false, false, 26), "capkxs", [], "any", false, false, false, 26), (twig_number_format_filter($this->env, 130000, 0, ".", ",") . "\$")], 23, $context, $this->getSourceContext());
        // line 28
        echo "
            ";
        // line 29
        echo twig_call_macro($macros["m"], "macro_Info", ["krys", "img/mineted-kryxivia.png", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["lang"] ?? null), "info", [], "any", false, false, false, 32), "nft", [], "any", false, false, false, 32), "N/A"], 29, $context, $this->getSourceContext());
        // line 34
        echo "
        </ul>
        <div class=\"bt\" data-show>
            ";
        // line 37
        echo twig_call_macro($macros["m"], "macro_bn", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "info", [], "any", false, false, false, 37), "more", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 37), "doc", [], "any", false, false, false, 37), ["target" => "_blank"]], 37, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
    ";
        // line 40
        echo twig_call_macro($macros["m"], "macro_img", ["img/bottom-ix.png", ["width" => 2000, "height" => 744, "cls" => "b-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40)]], 40, $context, $this->getSourceContext());
        echo "
    <div class=\"bg\">
        <div></div>
    </div>
    <div id=\"spark-info\" class=\"sparks\" data-spark=\"#af43f9\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "inc/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 40,  89 => 37,  84 => 34,  82 => 32,  81 => 29,  78 => 28,  76 => 26,  75 => 23,  72 => 22,  70 => 21,  69 => 20,  68 => 17,  65 => 16,  63 => 14,  62 => 11,  56 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'inc/macros.twig' as m %}
<div id=\"do\">
    {{m.img('img/top-ix.png', {width:2000,height:744,cls:'t-ix',alt:lang.all.name})}}
    <div class=\"ct\">
        <div class=\"sub\" data-show>{{lang.info.sub}}</div>
        <h2 class=\"h2\" data-show>{{lang.info.title|raw}}</h2>
        <div class=\"p\" data-show>
            {{lang.info.txt|raw}}
        </div>
        <ul class=\"dc\">
            {{m.Info(
                'knight',
                'img/knight-kryxivia.png',
                lang.info.player,
                'N/A'
            )}}
            {{m.Info(
                'krys',
                'img/kxa-token_kryxivia.png',
                lang.info.capkxa,
                MarketCapKXA|number_format(0, '.', ',')~'\$'
            )}}
            {{m.Info(
                'krys',
                'img/kxs-token_kryxivia.png',
                lang.info.capkxs,
                130000|number_format(0, '.', ',')~'\$'
            )}}
            {{m.Info(
                'krys',
                'img/mineted-kryxivia.png',
                lang.info.nft,
                'N/A'
            )}}
        </ul>
        <div class=\"bt\" data-show>
            {{m.bn(lang.info.more, config.settings.doc, {target:'_blank'})}}
        </div>
    </div>
    {{m.img('img/bottom-ix.png', {width:2000,height:744,cls:'b-ix',alt:lang.all.name})}}
    <div class=\"bg\">
        <div></div>
    </div>
    <div id=\"spark-info\" class=\"sparks\" data-spark=\"#af43f9\"></div>
</div>", "inc/info.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/inc/info.twig");
    }
}
