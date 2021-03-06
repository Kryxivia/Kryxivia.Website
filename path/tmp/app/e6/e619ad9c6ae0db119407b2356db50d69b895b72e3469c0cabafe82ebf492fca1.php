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

/* app.twig */
class __TwigTemplate_616e72d97be90e359f420a9be2a517d19165bd68d6894ea108e1ae8f8742501f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'robots' => [$this, 'block_robots'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'info' => [$this, 'block_info'],
            'footer' => [$this, 'block_footer'],
            'plus' => [$this, 'block_plus'],
            'libjs' => [$this, 'block_libjs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["langCode"] ?? null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->webp("wbp"), "html", null, true);
        echo "\">
\t<head>
\t\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    \t";
        $this->displayBlock('robots', $context, $blocks);
        // line 12
        echo "    \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "gilroy/Gilroy-Extrabold", 1 => "gilroy/Gilroy-Medium", 2 => "gilroy/Gilroy-ExtraboldItalic", 3 => "gilroy/Gilroy-MediumItalic"]);
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 13
            echo "\t\t\t<link rel=\"preload\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset((("fonts/" . $context["f"]) . ".woff2")), "html", null, true);
            echo "\" as=\"font\" crossorigin=\"anonymous\">
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    \t";
        $this->displayBlock('css', $context, $blocks);
        // line 18
        echo "    \t";
        $this->displayBlock('js', $context, $blocks);
        // line 21
        echo "\t</head>
\t<body>
\t\t<div id=\"app\">
\t\t\t";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "\t\t\t";
        $this->displayBlock('info', $context, $blocks);
        // line 31
        echo "\t\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "\t\t</div>
\t\t<a href=\"https://client.kryxivia.io/\" title=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "play", [], "any", false, false, false, 35), "tit", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "play", [], "any", false, false, false, 35), "alpha", [], "any", false, false, false, 35)), "html", null, true);
        echo "\" class=\"bn stck plyn\" target=\"_blank\">
            <strong><span class=\"dr\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "play", [], "any", false, false, false, 36), "tit", [], "any", false, false, false, 36), "html", null, true);
        echo "</span><span class=\"hov\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "play", [], "any", false, false, false, 36), "tit", [], "any", false, false, false, 36), "html", null, true);
        echo "</span></strong>
            <small>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "play", [], "any", false, false, false, 37), "alpha", [], "any", false, false, false, 37), "html", null, true);
        echo "</small>
        </a>
\t\t";
        // line 39
        $this->displayBlock('plus', $context, $blocks);
        // line 45
        echo "    \t";
        $this->displayBlock('libjs', $context, $blocks);
        // line 46
        echo "\t</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t        ";
        $this->loadTemplate("inc/head.twig", "app.twig", 5)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["lang"] ?? null), "head", [], "any", false, false, false, 6), "home", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "desc" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["lang"] ?? null), "head", [], "any", false, false, false, 7), "home", [], "any", false, false, false, 7), "desc", [], "any", false, false, false, 7), "urlAlternate" => ""]));
        // line 10
        echo "    \t";
    }

    // line 11
    public function block_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    \t\t";
        echo $this->extensions['Core\Extension']->minifier("default");
        echo "
    \t";
    }

    // line 18
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    \t\t";
        echo $this->extensions['Core\Extension']->minifierJS("default");
        echo "
    \t";
    }

    // line 24
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "\t\t\t\t";
        $this->loadTemplate("inc/header.twig", "app.twig", 25)->display($context);
        // line 26
        echo "\t\t\t";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "\t\t\t\t";
        $this->loadTemplate("inc/info.twig", "app.twig", 29)->display($context);
        // line 30
        echo "\t\t\t";
    }

    // line 31
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "\t\t\t\t";
        $this->loadTemplate("inc/footer.twig", "app.twig", 32)->display($context);
        // line 33
        echo "\t\t\t";
    }

    // line 39
    public function block_plus($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 45
    public function block_libjs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 45,  209 => 39,  205 => 33,  202 => 32,  198 => 31,  194 => 30,  191 => 29,  187 => 28,  181 => 27,  177 => 26,  174 => 25,  170 => 24,  163 => 19,  159 => 18,  152 => 16,  148 => 15,  142 => 11,  138 => 10,  136 => 7,  135 => 6,  133 => 5,  129 => 4,  123 => 46,  120 => 45,  118 => 39,  113 => 37,  107 => 36,  101 => 35,  98 => 34,  95 => 31,  92 => 28,  89 => 27,  87 => 24,  82 => 21,  79 => 18,  76 => 15,  67 => 13,  62 => 12,  59 => 11,  57 => 4,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{langCode}}\" class=\"{{'wbp'|webp}}\">
\t<head>
\t\t{% block head %}
\t        {% include 'inc/head.twig' with {
\t        \ttitle: lang.head.home.title,
\t        \tdesc: lang.head.home.desc,
\t        \turlAlternate: ''
\t    \t} %}
    \t{% endblock %}
    \t{% block robots %}{% endblock %}
    \t{% for f in ['gilroy/Gilroy-Extrabold', 'gilroy/Gilroy-Medium', 'gilroy/Gilroy-ExtraboldItalic', 'gilroy/Gilroy-MediumItalic'] %}
\t\t\t<link rel=\"preload\" href=\"{{asset('fonts/'~ f ~'.woff2')}}\" as=\"font\" crossorigin=\"anonymous\">
\t\t{% endfor %}
    \t{% block css %}
    \t\t{{'default'|minifier()|raw}}
    \t{% endblock %}
    \t{% block js %}
    \t\t{{'default'|minifierJS()|raw}}
    \t{% endblock %}
\t</head>
\t<body>
\t\t<div id=\"app\">
\t\t\t{% block header %}
\t\t\t\t{% include 'inc/header.twig' %}
\t\t\t{% endblock %}
\t\t\t{% block content %}{% endblock %}
\t\t\t{% block info %}
\t\t\t\t{% include 'inc/info.twig' %}
\t\t\t{% endblock %}
\t\t\t{% block footer %}
\t\t\t\t{% include 'inc/footer.twig' %}
\t\t\t{% endblock %}
\t\t</div>
\t\t<a href=\"https://client.kryxivia.io/\" title=\"{{lang.play.tit}} {{lang.play.alpha|lower}}\" class=\"bn stck plyn\" target=\"_blank\">
            <strong><span class=\"dr\">{{lang.play.tit}}</span><span class=\"hov\">{{lang.play.tit}}</span></strong>
            <small>{{lang.play.alpha}}</small>
        </a>
\t\t{% block plus %}{% endblock %}
{# \t\t{% if load != 1 %}
\t\t\t<div class=\"load\">
\t\t\t\t{{m.img('img/logo-kryxivia.png', {width:958,height:365,alt:lang.all.name,lazy:true})}}
\t\t\t</div>
\t\t{% endif %} #}
    \t{% block libjs %}{% endblock %}
\t</body>
</html>
", "app.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/app.twig");
    }
}
