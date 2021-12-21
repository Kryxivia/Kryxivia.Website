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

/* /pages/devblog/list.twig */
class __TwigTemplate_64c297d0f9303554f156f8428b28818cfec0472b69b803782e551186ec67a307 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "/pages/devblog/list.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("app.twig", "/pages/devblog/list.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo $this->extensions['Core\Extension']->minifier("devblog", [0 => "mods/default", 1 => "pages/devblog"]);
        echo "
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->loadTemplate("inc/head.twig", "/pages/devblog/list.twig", 7)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["lang"] ?? null), "head", [], "any", false, false, false, 8), "devblog", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "desc" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
($context["lang"] ?? null), "head", [], "any", false, false, false, 9), "devblog", [], "any", false, false, false, 9), "desc", [], "any", false, false, false, 9), "urlAlternate" => "/devblog"]));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t";
        echo twig_call_macro($macros["m"], "macro_Title", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "
    <main id=\"m\">
        <div class=\"ct\">
            <div id=\"dv\">
                <div class=\"l\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["article"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 20
            echo "                        ";
            echo twig_call_macro($macros["m"], "macro_Article", [$context["a"], ((twig_length_filter($this->env, ($context["article"] ?? null)) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20)) + 1)], 20, $context, $this->getSourceContext());
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </div>
            </div>
        </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/pages/devblog/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 22,  103 => 20,  86 => 19,  77 => 14,  73 => 13,  69 => 9,  68 => 8,  66 => 7,  62 => 6,  55 => 4,  51 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'app.twig' %}
{% import 'inc/macros.twig' as m %}
{% block css %}
    {{'devblog'|minifier(['mods/default', 'pages/devblog'])|raw}}
{% endblock %}\t\t
{% block head %}
    {% include 'inc/head.twig' with {
    \ttitle: lang.head.devblog.title,
    \tdesc: lang.head.devblog.desc,
    \turlAlternate: '/devblog'
\t} %}
{% endblock %}
{% block content %}
\t{{m.Title(lang.devblog.title)}}
    <main id=\"m\">
        <div class=\"ct\">
            <div id=\"dv\">
                <div class=\"l\">
                    {% for a in article %}
                        {{m.Article(a, (article|length - loop.index + 1))}}
                    {% endfor %}
                </div>
            </div>
        </div>
    </main>
{% endblock %}", "/pages/devblog/list.twig", "E:\\wamp64\\www\\Kryxivia\\Views\\pages\\devblog\\list.twig");
    }
}
