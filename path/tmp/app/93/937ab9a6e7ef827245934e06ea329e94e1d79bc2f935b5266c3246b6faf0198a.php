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

/* /pages/gallery.twig */
class __TwigTemplate_b2ed2aeba0596dab4c2c28923d409df84f0f3568808eea7948765be28f0c3be3 extends \Twig\Template
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
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "/pages/gallery.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("app.twig", "/pages/gallery.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo $this->extensions['Core\Extension']->minifier("gallery", [0 => "mods/default", 1 => "pages/gallery"]);
        echo "
";
    }

    // line 6
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo $this->extensions['Core\Extension']->minifierJS("gallery", [0 => "grid"], [0 => "gallery"]);
        echo "
";
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("inc/head.twig", "/pages/gallery.twig", 10)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["lang"] ?? null), "head", [], "any", false, false, false, 11), "gallery", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "desc" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["lang"] ?? null), "head", [], "any", false, false, false, 12), "gallery", [], "any", false, false, false, 12), "desc", [], "any", false, false, false, 12), "urlAlternate" => "/gallery"]));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t";
        echo twig_call_macro($macros["m"], "macro_Title", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "gallery", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17)], 17, $context, $this->getSourceContext());
        echo "
\t<main id=\"m\" class=\"gal\">
\t\t<div class=\"ct\">
\t\t\t<div class=\"grid\">
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            if ((twig_in_filter(".jpg", $context["img"]) || twig_in_filter(".jpeg", $context["img"]))) {
                // line 22
                echo "\t\t\t\t\t";
                $context["info"] = twig_split_filter($this->env, $context["img"], ".");
                // line 23
                echo "\t\t\t\t\t";
                $context["name"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), 0, [], "any", false, false, false, 23), ["-" => " ", "_" => " "]);
                // line 24
                echo "\t\t\t\t\t<div>
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset(("img/gallery/" . $context["img"])), "html", null, true);
                echo "\" width=\"100\" height=\"100\" alt=\"Kryxivia © ";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<figcaption>Kryxivia © ";
                // line 27
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t</main>
";
    }

    public function getTemplateName()
    {
        return "/pages/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  118 => 27,  112 => 26,  108 => 24,  105 => 23,  102 => 22,  97 => 21,  89 => 17,  85 => 16,  81 => 12,  80 => 11,  78 => 10,  74 => 9,  67 => 7,  63 => 6,  56 => 4,  52 => 3,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'app.twig' %}
{% import 'inc/macros.twig' as m %}
{% block css %}
\t{{'gallery'|minifier(['mods/default', 'pages/gallery'])|raw}}
{% endblock %}
{% block js %}
    {{'gallery'|minifierJS(['grid'], ['gallery'])|raw}}
{% endblock %}
{% block head %}
    {% include 'inc/head.twig' with {
    \ttitle: lang.head.gallery.title,
    \tdesc: lang.head.gallery.desc,
    \turlAlternate: '/gallery'
\t} %}
{% endblock %}
{% block content %}
\t{{m.Title(lang.gallery.title)}}
\t<main id=\"m\" class=\"gal\">
\t\t<div class=\"ct\">
\t\t\t<div class=\"grid\">
\t\t\t\t{% for img in gallery if '.jpg' in img or '.jpeg' in img %}
\t\t\t\t\t{% set info = img|split('.') %}
\t\t\t\t\t{% set name = info.0|replace({'-':' ','_':' '}) %}
\t\t\t\t\t<div>
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"{{asset('img/gallery/'~img)}}\" width=\"100\" height=\"100\" alt=\"Kryxivia © {{name}}\">
\t\t\t\t\t\t\t<figcaption>Kryxivia © {{name}}</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "/pages/gallery.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/pages/gallery.twig");
    }
}
