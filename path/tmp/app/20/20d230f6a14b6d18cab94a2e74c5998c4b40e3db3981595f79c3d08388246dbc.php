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

/* inc/header.twig */
class __TwigTemplate_a45e9add049fe1bac5f2dd8bca3bc084f4d8f947b19fe3326136fcf6e1391c62 extends \Twig\Template
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "inc/header.twig", 1)->unwrap();
        // line 2
        echo "<header id=\"h\">
    ";
        // line 3
        echo twig_call_macro($macros["m"], "macro_img", ["img/top-h.png", ["width" => 1088, "height" => 651, "cls" => "top-h", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "lazy" => true]], 3, $context, $this->getSourceContext());
        echo "
    <div class=\"hc\">
        <a href=\"";
        // line 5
        echo $this->extensions['Core\Extension']->link($context, "home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 5), "backh", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"lg\">
            ";
        // line 6
        echo twig_call_macro($macros["m"], "macro_img", ["img/logo-kryxivia.png", ["width" => 958, "height" => 365, "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "lazy" => true]], 6, $context, $this->getSourceContext());
        echo "
        </a>
        <div class=\"lang\">
            <div>
                <ul>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "params", [], "any", false, false, false, 11), "lang", [], "any", false, false, false, 11), ","));
        foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
            // line 12
            echo "                        <li";
            echo (((($context["langCode"] ?? null) == $context["lg"])) ? (" class=\"select\"") : (""));
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (($context["host"] ?? null) . $context["lg"]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $context["lg"], "html", null, true);
            echo "\"><img width=\"40\" height=\"40\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset((("img/lang/" . $context["lg"]) . ".svg")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["lg"], "html", null, true);
            echo "\" loading=\"lazy\"></a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </ul>
            </div>
        </div>
        <nav id=\"n\">
            <ul>
                ";
        // line 19
        echo twig_call_macro($macros["m"], "macro_li", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "nav", [], "any", false, false, false, 19), "team", [], "any", false, false, false, 19), $this->extensions['Core\Extension']->link($context, "team")], 19, $context, $this->getSourceContext());
        echo "
\t\t\t\t";
        // line 20
        echo twig_call_macro($macros["m"], "macro_li", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "nav", [], "any", false, false, false, 20), "dev", [], "any", false, false, false, 20), $this->extensions['Core\Extension']->link($context, "devblog")], 20, $context, $this->getSourceContext());
        echo "
\t\t\t\t";
        // line 21
        echo twig_call_macro($macros["m"], "macro_li", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "nav", [], "any", false, false, false, 21), "doc", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 21), "doc", [], "any", false, false, false, 21), ["target" => "_blank"]], 21, $context, $this->getSourceContext());
        echo "
                ";
        // line 22
        echo twig_call_macro($macros["m"], "macro_li", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "nav", [], "any", false, false, false, 22), "gal", [], "any", false, false, false, 22), $this->extensions['Core\Extension']->link($context, "gallery")], 22, $context, $this->getSourceContext());
        echo "
                ";
        // line 23
        echo twig_call_macro($macros["m"], "macro_li", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "nav", [], "any", false, false, false, 23), "lite", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 23), "litepaper", [], "any", false, false, false, 23), ["target" => "_blank"]], 23, $context, $this->getSourceContext());
        echo "
            </ul>
        </nav>
        <div class=\"r\">
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 27), "staking", [], "any", false, false, false, 27), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 27), "stack", [], "any", false, false, false, 27), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 27), "alpha", [], "any", false, false, false, 27)), "html", null, true);
        echo "\" class=\"bn stck\" target=\"_blank\">
                <strong><span class=\"dr\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 28), "stack", [], "any", false, false, false, 28), "html", null, true);
        echo "</span><span class=\"hov\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 28), "stack", [], "any", false, false, false, 28), "html", null, true);
        echo "</span></strong>
                <small>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 29), "alpha", [], "any", false, false, false, 29), "html", null, true);
        echo "</small>
            </a>
            <button id=\"bnv\" class=\"bnv bn cader\" type=\"button\" aria-label=\"Nav\">
                <svg viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path class=\"l-1\" d=\"M0,42h62c13,0,6,26-4,16L35,35\"></path>
                    <path class=\"l-2\" d=\"M0,50h70\"></path>
                    <path class=\"l-3\" d=\"M0,58h62c13,0,6-26-4-16L35,65\"></path>
                </svg>
            </button>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "inc/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 29,  120 => 28,  112 => 27,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  82 => 14,  65 => 12,  61 => 11,  53 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'inc/macros.twig' as m %}
<header id=\"h\">
    {{m.img('img/top-h.png', {width:1088,height:651,cls:'top-h',alt:lang.all.name,lazy:true})}}
    <div class=\"hc\">
        <a href=\"{{link('home')}}\" title=\"{{lang.all.backh}}\" class=\"lg\">
            {{m.img('img/logo-kryxivia.png', {width:958,height:365,alt:lang.all.name,lazy:true})}}
        </a>
        <div class=\"lang\">
            <div>
                <ul>
                    {% for lg in config.params.lang|split(',') %}
                        <li{{langCode == lg ? ' class=\"select\"'}}><a href=\"{{host ~ lg}}\" title=\"{{lg}}\"><img width=\"40\" height=\"40\" src=\"{{asset('img/lang/'~ lg ~'.svg')}}\" alt=\"{{lg}}\" loading=\"lazy\"></a></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <nav id=\"n\">
            <ul>
                {{m.li(lang.nav.team, link('team'))}}
\t\t\t\t{{m.li(lang.nav.dev, link('devblog'))}}
\t\t\t\t{{m.li(lang.nav.doc, config.settings.doc, {target:'_blank'})}}
                {{m.li(lang.nav.gal, link('gallery'))}}
                {{m.li(lang.nav.lite, config.settings.litepaper, {target:'_blank'})}}
            </ul>
        </nav>
        <div class=\"r\">
            <a href=\"{{config.settings.staking}}\" title=\"{{lang.header.stack}} {{lang.header.alpha|lower}}\" class=\"bn stck\" target=\"_blank\">
                <strong><span class=\"dr\">{{lang.header.stack}}</span><span class=\"hov\">{{lang.header.stack}}</span></strong>
                <small>{{lang.header.alpha}}</small>
            </a>
            <button id=\"bnv\" class=\"bnv bn cader\" type=\"button\" aria-label=\"Nav\">
                <svg viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path class=\"l-1\" d=\"M0,42h62c13,0,6,26-4,16L35,35\"></path>
                    <path class=\"l-2\" d=\"M0,50h70\"></path>
                    <path class=\"l-3\" d=\"M0,58h62c13,0,6-26-4-16L35,65\"></path>
                </svg>
            </button>
        </div>
    </div>
</header>", "inc/header.twig", "E:\\wamp64\\www\\Kryxivia\\Views\\inc\\header.twig");
    }
}
