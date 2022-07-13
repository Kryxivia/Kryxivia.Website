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

/* inc/partners.twig */
class __TwigTemplate_dade4a1207d97c7a934e2fc9295c3165d2b2c0a4fbbf4feb62323c216711ad6a extends \Twig\Template
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "inc/partners.twig", 1)->unwrap();
        // line 2
        echo "<div id=\"pa\">
    ";
        // line 3
        echo twig_call_macro($macros["m"], "macro_img", ["img/top-ix.png", ["width" => 2000, "height" => 744, "cls" => "t-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3)]], 3, $context, $this->getSourceContext());
        echo "
    <div class=\"ct\">
        <div class=\"sub\" data-show>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "partners", [], "any", false, false, false, 5), "sub", [], "any", false, false, false, 5), "html", null, true);
        echo "</div>
        <h2 class=\"h2\" data-show>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "partners", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
        <div class=\"lst\" data-show>
            ";
        // line 8
        echo twig_call_macro($macros["m"], "macro_Partners", ["Unicrypt Network", "https://unicrypt.network/", ["img" => "unicrypt.svg", "width" => 300, "height" => 85]], 8, $context, $this->getSourceContext());
        // line 12
        echo "
            ";
        // line 13
        echo twig_call_macro($macros["m"], "macro_Partners", ["GraphLinq", "https://graphlinq.io/", ["img" => "graphlinq.svg", "width" => 300, "height" => 56]], 13, $context, $this->getSourceContext());
        // line 17
        echo "
            ";
        // line 18
        echo twig_call_macro($macros["m"], "macro_Partners", ["BakerySwap", "https://www.bakeryswap.org/", ["img" => "bakery.png", "width" => 781, "height" => 163]], 18, $context, $this->getSourceContext());
        // line 22
        echo "
            ";
        // line 23
        echo twig_call_macro($macros["m"], "macro_Partners", ["Mexc Global", "https://www.mexc.com/", ["img" => "mexc.svg", "width" => 500, "height" => 63]], 23, $context, $this->getSourceContext());
        // line 27
        echo "
            ";
        // line 28
        echo twig_call_macro($macros["m"], "macro_Partners", ["BullPerks", "https://bullperks.com/", ["img" => "bullperks.svg", "width" => 500, "height" => 109]], 28, $context, $this->getSourceContext());
        // line 32
        echo "
            ";
        // line 33
        echo twig_call_macro($macros["m"], "macro_Partners", ["Starter Capital", "https://starter.capital/", ["img" => "starter-capital.png", "width" => 400, "height" => 112]], 33, $context, $this->getSourceContext());
        // line 37
        echo "
            ";
        // line 38
        echo twig_call_macro($macros["m"], "macro_Partners", ["EnjinStarter", "https://enjinstarter.com/", ["img" => "enjinstarter.png", "width" => 242, "height" => 53]], 38, $context, $this->getSourceContext());
        // line 42
        echo "
            ";
        // line 43
        echo twig_call_macro($macros["m"], "macro_Partners", ["Poolz", "https://www.poolz.finance/", ["img" => "poolz.png", "width" => 400, "height" => 126]], 43, $context, $this->getSourceContext());
        // line 47
        echo "
            ";
        // line 48
        echo twig_call_macro($macros["m"], "macro_Partners", ["UnitedPress Media", "https://unitedpress.media/", ["img" => "upm.png", "width" => 400, "height" => 137]], 48, $context, $this->getSourceContext());
        // line 52
        echo "
            ";
        // line 53
        echo twig_call_macro($macros["m"], "macro_Partners", ["Dextools", "https://www.dextools.io/", ["img" => "dextool.png", "width" => 174, "height" => 50]], 53, $context, $this->getSourceContext());
        // line 57
        echo "
            ";
        // line 58
        echo twig_call_macro($macros["m"], "macro_Partners", ["PolyNetwork", "https://poly.network/", ["img" => "poly-network.svg", "width" => 400, "height" => 116]], 58, $context, $this->getSourceContext());
        // line 62
        echo "
            ";
        // line 63
        echo twig_call_macro($macros["m"], "macro_Partners", ["Everse Capital", "https://eversecapital.com/", ["img" => "everse-capital.png", "width" => 400, "height" => 230]], 63, $context, $this->getSourceContext());
        // line 67
        echo "
            ";
        // line 68
        echo twig_call_macro($macros["m"], "macro_Partners", ["Ajoobz", "https://www.ajoobz.com/", ["img" => "ajoobz.png", "width" => 400, "height" => 230]], 68, $context, $this->getSourceContext());
        // line 72
        echo "
            ";
        // line 73
        echo twig_call_macro($macros["m"], "macro_Partners", ["DCT Capital", "https://dctcapital.co/", ["img" => "dct-logo.png", "width" => 400, "height" => 261]], 73, $context, $this->getSourceContext());
        // line 77
        echo "
            ";
        // line 78
        echo twig_call_macro($macros["m"], "macro_Partners", ["Defiboost", "https://defiboost.io/", ["img" => "defiboost-logo.png", "width" => 400, "height" => 261]], 78, $context, $this->getSourceContext());
        // line 82
        echo "
            ";
        // line 83
        echo twig_call_macro($macros["m"], "macro_Partners", ["Checkdot", "https://checkdot.io/", ["img" => "checkdot.svg", "width" => 300, "height" => 69]], 83, $context, $this->getSourceContext());
        // line 87
        echo "
            ";
        // line 88
        echo twig_call_macro($macros["m"], "macro_Partners", ["Locklet", "https://www.locklet.finance/", ["img" => "locklet.svg", "width" => 300, "height" => 65]], 88, $context, $this->getSourceContext());
        // line 92
        echo "
            ";
        // line 93
        echo twig_call_macro($macros["m"], "macro_Partners", ["Maxx Capital Ventures", "https://www.maxx.capital/", ["img" => "maxx.png", "width" => 400, "height" => 127]], 93, $context, $this->getSourceContext());
        // line 97
        echo "
            ";
        // line 98
        echo twig_call_macro($macros["m"], "macro_Partners", ["Vespertine Capital", "https://www.vespertine.capital/", ["img" => "vespertine.png", "width" => 400, "height" => 96]], 98, $context, $this->getSourceContext());
        // line 102
        echo "
            ";
        // line 103
        echo twig_call_macro($macros["m"], "macro_Partners", ["AVG Capital", false, ["img" => "avg.svg", "width" => 413, "height" => 188]], 103, $context, $this->getSourceContext());
        // line 107
        echo "
        </div>
    </div>
    ";
        // line 110
        echo twig_call_macro($macros["m"], "macro_img", ["img/bottom-ix.png", ["width" => 2000, "height" => 744, "cls" => "b-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110)]], 110, $context, $this->getSourceContext());
        echo "
    <div id=\"spark-partners\" class=\"sparks\" data-spark=\"#af43f9\"></div>
    <div class=\"bg\">
        <div></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "inc/partners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 110,  153 => 107,  151 => 103,  148 => 102,  146 => 98,  143 => 97,  141 => 93,  138 => 92,  136 => 88,  133 => 87,  131 => 83,  128 => 82,  126 => 78,  123 => 77,  121 => 73,  118 => 72,  116 => 68,  113 => 67,  111 => 63,  108 => 62,  106 => 58,  103 => 57,  101 => 53,  98 => 52,  96 => 48,  93 => 47,  91 => 43,  88 => 42,  86 => 38,  83 => 37,  81 => 33,  78 => 32,  76 => 28,  73 => 27,  71 => 23,  68 => 22,  66 => 18,  63 => 17,  61 => 13,  58 => 12,  56 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'inc/macros.twig' as m %}
<div id=\"pa\">
    {{m.img('img/top-ix.png', {width:2000,height:744,cls:'t-ix',alt:lang.all.name})}}
    <div class=\"ct\">
        <div class=\"sub\" data-show>{{lang.partners.sub}}</div>
        <h2 class=\"h2\" data-show>{{lang.partners.title}}</h2>
        <div class=\"lst\" data-show>
            {{m.Partners(
                'Unicrypt Network',
                'https://unicrypt.network/', 
                {img:'unicrypt.svg',width:300,height:85}
            )}}
            {{m.Partners(
                'GraphLinq',
                'https://graphlinq.io/', 
                {img:'graphlinq.svg',width:300,height:56}
            )}}
            {{m.Partners(
                'BakerySwap',
                'https://www.bakeryswap.org/', 
                {img:'bakery.png',width:781,height:163}
            )}}
            {{m.Partners(
                'Mexc Global',
                'https://www.mexc.com/', 
                {img:'mexc.svg',width:500,height:63}
            )}}
            {{m.Partners(
                'BullPerks',
                'https://bullperks.com/', 
                {img:'bullperks.svg',width:500,height:109}
            )}}
            {{m.Partners(
                'Starter Capital',
                'https://starter.capital/', 
                {img:'starter-capital.png',width:400,height:112}
            )}}
            {{m.Partners(
                'EnjinStarter',
                'https://enjinstarter.com/', 
                {img:'enjinstarter.png',width:242,height:53}
            )}}
            {{m.Partners(
                'Poolz',
                'https://www.poolz.finance/', 
                {img:'poolz.png',width:400,height:126}
            )}}
            {{m.Partners(
                'UnitedPress Media',
                'https://unitedpress.media/', 
                {img:'upm.png',width:400,height:137}
            )}}
            {{m.Partners(
                'Dextools',
                'https://www.dextools.io/', 
                {img:'dextool.png',width:174,height:50}
            )}}
            {{m.Partners(
                'PolyNetwork',
                'https://poly.network/', 
                {img:'poly-network.svg',width:400,height:116}
            )}}
            {{m.Partners(
                'Everse Capital',
                'https://eversecapital.com/', 
                {img:'everse-capital.png',width:400,height:230}
            )}}
            {{m.Partners(
                'Ajoobz',
                'https://www.ajoobz.com/', 
                {img:'ajoobz.png',width:400,height:230}
            )}}
            {{m.Partners(
                'DCT Capital',
                'https://dctcapital.co/', 
                {img:'dct-logo.png',width:400,height:261}
            )}}
            {{m.Partners(
                'Defiboost',
                'https://defiboost.io/',
                {img:'defiboost-logo.png',width:400,height:261}
            )}}
            {{m.Partners(
                'Checkdot',
                'https://checkdot.io/',
                {img:'checkdot.svg',width:300,height:69}
            )}}
            {{m.Partners(
                'Locklet',
                'https://www.locklet.finance/',
                {img:'locklet.svg',width:300,height:65}
            )}}
            {{m.Partners(
                'Maxx Capital Ventures',
                'https://www.maxx.capital/',
                {img:'maxx.png',width:400,height:127}
            )}}
            {{m.Partners(
                'Vespertine Capital',
                'https://www.vespertine.capital/',
                {img:'vespertine.png',width:400,height:96}
            )}}
            {{m.Partners(
                'AVG Capital',
                false,
                {img:'avg.svg',width:413,height:188}
            )}}
        </div>
    </div>
    {{m.img('img/bottom-ix.png', {width:2000,height:744,cls:'b-ix',alt:lang.all.name})}}
    <div id=\"spark-partners\" class=\"sparks\" data-spark=\"#af43f9\"></div>
    <div class=\"bg\">
        <div></div>
    </div>
</div>", "inc/partners.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/inc/partners.twig");
    }
}
