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

/* inc/presentation.twig */
class __TwigTemplate_0c2e0677ead09ccb08010aec1a517d1300c7fb7dbc7957bc609f2803aa9d9620 extends \Twig\Template
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "inc/presentation.twig", 1)->unwrap();
        // line 2
        echo "<div id=\"tk\">
    ";
        // line 3
        echo twig_call_macro($macros["m"], "macro_img", ["img/top-ix.png", ["width" => 2000, "height" => 744, "cls" => "t-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "lazy" => true]], 3, $context, $this->getSourceContext());
        echo "
    <div class=\"ct\">
        <div class=\"tkc\">
            <div class=\"sub\" data-show>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "token", [], "any", false, false, false, 6), "sub", [], "any", false, false, false, 6), "html", null, true);
        echo "</div>
            <h2 class=\"h2\" data-show>";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "token", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7);
        echo "</h2>
            <div class=\"p\" data-show>
                ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "token", [], "any", false, false, false, 9), "txt", [], "any", false, false, false, 9);
        echo "
            </div>
            <div class=\"bt\" data-show>
                ";
        // line 12
        echo twig_call_macro($macros["m"], "macro_bn", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "token", [], "any", false, false, false, 12), "trailer", [], "any", false, false, false, 12), "bn", ["type" => "button", "onClick" => "openTra()"]], 12, $context, $this->getSourceContext());
        echo "
                ";
        // line 13
        echo twig_call_macro($macros["m"], "macro_bn", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "token", [], "any", false, false, false, 13), "gp", [], "any", false, false, false, 13), "bn", ["type" => "button", "onClick" => "openTraGp()"]], 13, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
    ";
        // line 17
        echo twig_call_macro($macros["m"], "macro_img", ["img/bottom-ix.png", ["width" => 2000, "height" => 744, "cls" => "b-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17)]], 17, $context, $this->getSourceContext());
        echo "
    <div id=\"spark-tok\" class=\"sparks\" data-spark=\"#af43f9\"></div>
    <div class=\"bg\">
        <video poster=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset("img/no-video.webp"), "html", null, true);
        echo "\" playsinline autoplay muted loop preload=\"none\">
            <source src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset("img/video.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
        </video>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "inc/presentation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  80 => 20,  74 => 17,  67 => 13,  63 => 12,  57 => 9,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'inc/macros.twig' as m %}
<div id=\"tk\">
    {{m.img('img/top-ix.png', {width:2000,height:744,cls:'t-ix',alt:lang.all.name,lazy:true})}}
    <div class=\"ct\">
        <div class=\"tkc\">
            <div class=\"sub\" data-show>{{lang.token.sub}}</div>
            <h2 class=\"h2\" data-show>{{lang.token.title|raw}}</h2>
            <div class=\"p\" data-show>
                {{lang.token.txt|raw}}
            </div>
            <div class=\"bt\" data-show>
                {{m.bn(lang.token.trailer, 'bn', {type:'button',onClick:'openTra()'})}}
                {{m.bn(lang.token.gp, 'bn', {type:'button',onClick:'openTraGp()'})}}
            </div>
        </div>
    </div>
    {{m.img('img/bottom-ix.png', {width:2000,height:744,cls:'b-ix',alt:lang.all.name})}}
    <div id=\"spark-tok\" class=\"sparks\" data-spark=\"#af43f9\"></div>
    <div class=\"bg\">
        <video poster=\"{{asset('img/no-video.webp')}}\" playsinline autoplay muted loop preload=\"none\">
            <source src=\"{{asset('img/video.mp4')}}\" type=\"video/mp4\">
        </video>
    </div>
</div>", "inc/presentation.twig", "E:\\wamp64\\www\\Kryxivia\\Views\\inc\\presentation.twig");
    }
}
