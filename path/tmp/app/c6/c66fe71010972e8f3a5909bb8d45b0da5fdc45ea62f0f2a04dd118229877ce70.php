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

/* /pages/home.twig */
class __TwigTemplate_5f50c4b655e35e257c8447ed37ba17bf40b50200247869b41789911de4831705 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'content' => [$this, 'block_content'],
            'plus' => [$this, 'block_plus'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "app.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "/pages/home.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("app.twig", "/pages/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo $this->extensions['Core\Extension']->minifier("index", [0 => "pages/index"]);
        echo "
";
    }

    // line 6
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo $this->extensions['Core\Extension']->minifierJS("index", [0 => "gsap", 1 => "sparks"], [0 => "index"]);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t<div id=\"ix\">
\t\t<div class=\"ct\">
\t\t\t<div class=\"ixc\">
\t\t\t\t<div class=\"sub\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "home", [], "any", false, false, false, 13), "sub", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
\t\t\t\t<h1>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "home", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
\t\t\t\t<h2>";
        // line 15
        echo twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "home", [], "any", false, false, false, 15), "now", [], "any", false, false, false, 15), ["\$KXA" => twig_call_macro($macros["m"], "macro_kxa", [], 15, $context, $this->getSourceContext())]);
        echo "</h2>
\t\t\t\t<div class=\"but\">
\t\t\t\t\t<div class=\"pck-c\">
\t\t\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 18), "kxa", [], "any", false, false, false, 18), "pancakeswap", [], "any", false, false, false, 18), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 18), "buy", [], "any", false, false, false, 18), ["%name%" => "Pancakeswap"]), "html", null, true);
        echo "\" target=\"_blank\" rel=\"external noreferrer noopener\" class=\"bn pck\">
\t\t                \t";
        // line 19
        echo twig_call_macro($macros["m"], "macro_pancake", [], 19, $context, $this->getSourceContext());
        echo "
\t\t            \t</a>
\t\t            </div>
\t\t\t\t\t<div class=\"mxc-c\">
\t\t\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 23), "kxa", [], "any", false, false, false, 23), "mexc", [], "any", false, false, false, 23), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 23), "buy", [], "any", false, false, false, 23), ["%name%" => "MEXC Global"]), "html", null, true);
        echo "\" target=\"_blank\" rel=\"external noreferrer noopener\" class=\"bn mxc\">
\t\t                \t";
        // line 24
        echo twig_call_macro($macros["m"], "macro_mexc", [], 24, $context, $this->getSourceContext());
        echo "
\t\t            \t</a>
\t\t            </div>
\t            </div>
\t            <div class=\"info\">
\t            \t<div>
\t            \t\t<p>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "home", [], "any", false, false, false, 30), "made", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
\t            \t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1500 551.724\" width=\"1000\" height=\"367.816\" xmlns:v=\"https://vecta.io/nano\"><title>Unity Kryxivia</title><path d=\"M617.241 300V143.678h65.517v158.621c0 26.437 13.793 43.678 45.977 43.678 29.885 0 44.828-18.391 44.828-44.828V143.678h65.517V300c0 60.92-36.782 97.701-110.345 97.701-74.713 1.149-111.494-35.632-111.494-97.701zm251.724-96.552h58.621v26.437h1.149c13.793-20.69 32.184-31.034 58.621-31.034 41.379 0 65.517 29.885 65.517 72.414v122.988h-60.92V282.759c0-19.54-10.345-33.333-29.885-33.333s-33.333 17.241-33.333 40.23v104.598h-60.92V203.448zm214.942-74.713h60.92v49.425h-60.92zm0 74.713h60.92v189.655h-60.92zm108.046 140.23v-90.805h-25.287v-49.425h25.287v-59.77h58.621v59.77h34.483v49.425h-34.483v78.161c0 14.943 8.046 18.391 20.69 18.391h13.793v43.678c-5.747 1.149-17.241 3.448-33.333 3.448-34.483 0-59.77-11.494-59.77-52.874zm131.034 65.517h20.69c17.241 0 25.287-6.897 25.287-19.54 0-8.046-3.448-19.54-11.494-39.08l-56.322-145.977h63.218l25.287 80.46c5.747 18.391 11.494 43.678 11.494 43.678h1.149s5.747-25.287 11.494-43.678l25.287-80.46H1500l-65.517 191.954c-14.943 44.828-33.333 59.77-71.264 59.77h-39.081z\"/><path d=\"M488.506 386.207V128.736L265.517 0v98.851l87.356 50.575c3.448 2.299 3.448 6.897 0 8.046l-103.448 59.77c-3.448 2.299-6.897 1.149-9.195 0l-103.448-59.77c-3.448-1.149-3.448-6.897 0-8.046l87.356-50.575V0L0 128.736v257.471-1.149 1.149l85.057-49.425V235.632c0-3.448 4.598-5.747 6.897-4.598l103.448 59.77c3.448 2.299 4.598 4.598 4.598 8.046v119.54c0 3.448-4.598 5.747-6.897 4.598l-87.356-50.575-85.057 49.425 222.989 129.885 222.989-128.736-85.057-49.425-87.356 50.575c-3.448 2.299-6.897 0-6.897-4.598V300c0-3.448 2.299-6.897 4.598-8.046l103.448-59.77c3.448-2.299 6.897 0 6.897 4.598v101.149z\" fill=\"#fff\"/><path d=\"M243.678 551.724l222.989-128.736-85.057-49.425-87.356 50.575c-3.448 2.299-6.897 0-6.897-4.598V300c0-3.448 2.299-6.897 4.598-8.046l103.448-59.77c3.448-2.299 6.897 0 6.897 4.598v101.149l85.057 49.425V128.736L243.678 270.115z\"/><path d=\"M265.517 0v98.851l87.356 50.575c3.448 2.299 3.448 6.897 0 8.046l-103.448 59.77c-3.448 2.299-6.897 1.149-9.195 0l-103.448-59.77c-3.448-1.149-3.448-6.897 0-8.046l87.356-50.575V0L0 128.736l243.678 141.379 243.678-141.379z\" fill=\"#fff\"/><path d=\"M194.253 424.138l-87.356-50.575-85.057 49.425 222.989 128.736V270.115L0 128.736v257.471-1.149 1.149l85.057-49.425V235.632c0-3.448 4.598-5.747 6.897-4.598l103.448 59.77c3.448 2.299 4.598 4.598 4.598 8.046v119.54c1.149 4.598-2.299 8.046-5.747 5.747z\" fill=\"#fff\"/></svg>
\t            \t</div>
\t            \t<div>
\t            \t\t<p>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "home", [], "any", false, false, false, 34), "propuls", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
\t            \t\t";
        // line 35
        echo twig_call_macro($macros["m"], "macro_img", ["img/kryxivia-binance-smart-chain.png", ["width" => 400, "height" => 106, "alt" => "Binance Smart Chain Kryxivia"]], 35, $context, $this->getSourceContext());
        echo "
\t            \t</div>
\t            </div>
\t\t\t</div>
\t\t</div>
        <div class=\"bg\">
            <div></div>
        </div>
        <div id=\"spark-ix\" class=\"sparks\" data-spark=\"#ff7c49\"></div>
        ";
        // line 44
        echo twig_call_macro($macros["m"], "macro_img", ["img/bottom-ix.png", ["width" => 2000, "height" => 744, "cls" => "b-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "lazy" => true]], 44, $context, $this->getSourceContext());
        echo "
    </div>
    <div id=\"tra\" class=\"vidd\">
        <div class=\"tra-c\">
            <div class=\"yt\"><iframe id=\"tra-yt\" width=\"560\" height=\"315\" data-src=\"https://www.youtube.com/embed/";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 48), "video", [], "any", false, false, false, 48), "trailer", [], "any", false, false, false, 48), "html", null, true);
        echo "?rel=0&enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div>
        </div>
        <div class=\"bg-tra\" onClick=\"closeTra()\"></div>
    </div>
    <div id=\"traGp\" class=\"vidd\">
        <div class=\"tra-c\">
            <div class=\"yt\"><iframe id=\"tra-yt-gp\" width=\"560\" height=\"315\" data-src=\"https://www.youtube.com/embed/";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 54), "video", [], "any", false, false, false, 54), "gameplay", [], "any", false, false, false, 54), "html", null, true);
        echo "?rel=0&enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div>
        </div>
        <div class=\"bg-tra\" onClick=\"closeTraGp()\"></div>
    </div>
    ";
        // line 58
        $this->loadTemplate("inc/presentation.twig", "/pages/home.twig", 58)->display($context);
        // line 59
        echo "    ";
        $this->loadTemplate("inc/token.twig", "/pages/home.twig", 59)->display($context);
        // line 60
        echo "    ";
        $this->loadTemplate("inc/partners.twig", "/pages/home.twig", 60)->display($context);
        // line 61
        echo "    ";
        $this->loadTemplate("inc/press.twig", "/pages/home.twig", 61)->display($context);
    }

    // line 63
    public function block_plus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "\t<div id=\"sd\">
\t\t<div class=\"bars\">
\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<span></span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t</div>
\t\t<strong class=\"play\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 68), "play", [], "any", false, false, false, 68), "html", null, true);
        echo "</strong> 
\t\t<strong class=\"stop\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 69), "pause", [], "any", false, false, false, 69), "html", null, true);
        echo "</strong> 
\t\t<span>Kryxivia ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 70), "music", [], "any", false, false, false, 70), "html", null, true);
        echo "</span>
\t</div>
\t<audio id=\"bgsound\" data-src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset("media/kryxivia_main-theme_music_web-edit.mp3"), "html", null, true);
        echo "\"></audio>
";
    }

    public function getTemplateName()
    {
        return "/pages/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 72,  212 => 70,  208 => 69,  204 => 68,  201 => 67,  192 => 66,  188 => 64,  184 => 63,  179 => 61,  176 => 60,  173 => 59,  171 => 58,  164 => 54,  155 => 48,  148 => 44,  136 => 35,  132 => 34,  125 => 30,  116 => 24,  110 => 23,  103 => 19,  97 => 18,  91 => 15,  87 => 14,  83 => 13,  78 => 10,  74 => 9,  67 => 7,  63 => 6,  56 => 4,  52 => 3,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'app.twig' %}
{% import 'inc/macros.twig' as m %}
{% block css %}
\t{{'index'|minifier(['pages/index'])|raw}}
{% endblock %}
{% block js %}
    {{'index'|minifierJS(['gsap', 'sparks'], ['index'])|raw}}
{% endblock %}
{% block content %}
\t<div id=\"ix\">
\t\t<div class=\"ct\">
\t\t\t<div class=\"ixc\">
\t\t\t\t<div class=\"sub\">{{lang.home.sub}}</div>
\t\t\t\t<h1>{{lang.home.title}}</h1>
\t\t\t\t<h2>{{lang.home.now|replace({'\$KXA':m.kxa()})|raw}}</h2>
\t\t\t\t<div class=\"but\">
\t\t\t\t\t<div class=\"pck-c\">
\t\t\t\t\t\t<a href=\"{{config.settings.kxa.pancakeswap}}\" title=\"{{lang.all.buy|replace({'%name%':'Pancakeswap'})}}\" target=\"_blank\" rel=\"external noreferrer noopener\" class=\"bn pck\">
\t\t                \t{{m.pancake()}}
\t\t            \t</a>
\t\t            </div>
\t\t\t\t\t<div class=\"mxc-c\">
\t\t\t\t\t\t<a href=\"{{config.settings.kxa.mexc}}\" title=\"{{lang.all.buy|replace({'%name%':'MEXC Global'})}}\" target=\"_blank\" rel=\"external noreferrer noopener\" class=\"bn mxc\">
\t\t                \t{{m.mexc()}}
\t\t            \t</a>
\t\t            </div>
\t            </div>
\t            <div class=\"info\">
\t            \t<div>
\t            \t\t<p>{{lang.home.made}}</p>
\t            \t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1500 551.724\" width=\"1000\" height=\"367.816\" xmlns:v=\"https://vecta.io/nano\"><title>Unity Kryxivia</title><path d=\"M617.241 300V143.678h65.517v158.621c0 26.437 13.793 43.678 45.977 43.678 29.885 0 44.828-18.391 44.828-44.828V143.678h65.517V300c0 60.92-36.782 97.701-110.345 97.701-74.713 1.149-111.494-35.632-111.494-97.701zm251.724-96.552h58.621v26.437h1.149c13.793-20.69 32.184-31.034 58.621-31.034 41.379 0 65.517 29.885 65.517 72.414v122.988h-60.92V282.759c0-19.54-10.345-33.333-29.885-33.333s-33.333 17.241-33.333 40.23v104.598h-60.92V203.448zm214.942-74.713h60.92v49.425h-60.92zm0 74.713h60.92v189.655h-60.92zm108.046 140.23v-90.805h-25.287v-49.425h25.287v-59.77h58.621v59.77h34.483v49.425h-34.483v78.161c0 14.943 8.046 18.391 20.69 18.391h13.793v43.678c-5.747 1.149-17.241 3.448-33.333 3.448-34.483 0-59.77-11.494-59.77-52.874zm131.034 65.517h20.69c17.241 0 25.287-6.897 25.287-19.54 0-8.046-3.448-19.54-11.494-39.08l-56.322-145.977h63.218l25.287 80.46c5.747 18.391 11.494 43.678 11.494 43.678h1.149s5.747-25.287 11.494-43.678l25.287-80.46H1500l-65.517 191.954c-14.943 44.828-33.333 59.77-71.264 59.77h-39.081z\"/><path d=\"M488.506 386.207V128.736L265.517 0v98.851l87.356 50.575c3.448 2.299 3.448 6.897 0 8.046l-103.448 59.77c-3.448 2.299-6.897 1.149-9.195 0l-103.448-59.77c-3.448-1.149-3.448-6.897 0-8.046l87.356-50.575V0L0 128.736v257.471-1.149 1.149l85.057-49.425V235.632c0-3.448 4.598-5.747 6.897-4.598l103.448 59.77c3.448 2.299 4.598 4.598 4.598 8.046v119.54c0 3.448-4.598 5.747-6.897 4.598l-87.356-50.575-85.057 49.425 222.989 129.885 222.989-128.736-85.057-49.425-87.356 50.575c-3.448 2.299-6.897 0-6.897-4.598V300c0-3.448 2.299-6.897 4.598-8.046l103.448-59.77c3.448-2.299 6.897 0 6.897 4.598v101.149z\" fill=\"#fff\"/><path d=\"M243.678 551.724l222.989-128.736-85.057-49.425-87.356 50.575c-3.448 2.299-6.897 0-6.897-4.598V300c0-3.448 2.299-6.897 4.598-8.046l103.448-59.77c3.448-2.299 6.897 0 6.897 4.598v101.149l85.057 49.425V128.736L243.678 270.115z\"/><path d=\"M265.517 0v98.851l87.356 50.575c3.448 2.299 3.448 6.897 0 8.046l-103.448 59.77c-3.448 2.299-6.897 1.149-9.195 0l-103.448-59.77c-3.448-1.149-3.448-6.897 0-8.046l87.356-50.575V0L0 128.736l243.678 141.379 243.678-141.379z\" fill=\"#fff\"/><path d=\"M194.253 424.138l-87.356-50.575-85.057 49.425 222.989 128.736V270.115L0 128.736v257.471-1.149 1.149l85.057-49.425V235.632c0-3.448 4.598-5.747 6.897-4.598l103.448 59.77c3.448 2.299 4.598 4.598 4.598 8.046v119.54c1.149 4.598-2.299 8.046-5.747 5.747z\" fill=\"#fff\"/></svg>
\t            \t</div>
\t            \t<div>
\t            \t\t<p>{{lang.home.propuls}}</p>
\t            \t\t{{m.img('img/kryxivia-binance-smart-chain.png', {width:400,height:106,alt:\"Binance Smart Chain Kryxivia\"})}}
\t            \t</div>
\t            </div>
\t\t\t</div>
\t\t</div>
        <div class=\"bg\">
            <div></div>
        </div>
        <div id=\"spark-ix\" class=\"sparks\" data-spark=\"#ff7c49\"></div>
        {{m.img('img/bottom-ix.png', {width:2000,height:744,cls:'b-ix',alt:lang.all.name,lazy:true})}}
    </div>
    <div id=\"tra\" class=\"vidd\">
        <div class=\"tra-c\">
            <div class=\"yt\"><iframe id=\"tra-yt\" width=\"560\" height=\"315\" data-src=\"https://www.youtube.com/embed/{{config.settings.video.trailer}}?rel=0&enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div>
        </div>
        <div class=\"bg-tra\" onClick=\"closeTra()\"></div>
    </div>
    <div id=\"traGp\" class=\"vidd\">
        <div class=\"tra-c\">
            <div class=\"yt\"><iframe id=\"tra-yt-gp\" width=\"560\" height=\"315\" data-src=\"https://www.youtube.com/embed/{{config.settings.video.gameplay}}?rel=0&enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div>
        </div>
        <div class=\"bg-tra\" onClick=\"closeTraGp()\"></div>
    </div>
    {% include 'inc/presentation.twig' %}
    {% include 'inc/token.twig' %}
    {% include 'inc/partners.twig' %}
    {% include 'inc/press.twig' %}
{% endblock %}
{% block plus %}
\t<div id=\"sd\">
\t\t<div class=\"bars\">
\t\t\t{% for i in 1..5 %}<span></span>{% endfor %}
\t\t</div>
\t\t<strong class=\"play\">{{lang.all.play}}</strong> 
\t\t<strong class=\"stop\">{{lang.all.pause}}</strong> 
\t\t<span>Kryxivia {{lang.all.music}}</span>
\t</div>
\t<audio id=\"bgsound\" data-src=\"{{asset('media/kryxivia_main-theme_music_web-edit.mp3')}}\"></audio>
{% endblock %}", "/pages/home.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/pages/home.twig");
    }
}
