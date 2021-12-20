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

/* /pages/devblog/show.twig */
class __TwigTemplate_91f6f8d30f5f6497f18df587f135c3ae0b0b89b8705a7a948383bf50977a182f extends \Twig\Template
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "/pages/devblog/show.twig", 2)->unwrap();
        // line 3
        $context["a"] = ($context["article"] ?? null);
        // line 4
        $context["at"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "lang", [], "any", false, false, false, 4)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["en"] ?? null) : null);
        // line 1
        $this->parent = $this->loadTemplate("app.twig", "/pages/devblog/show.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo $this->extensions['Core\Extension']->minifier("devblog", [0 => "mods/default", 1 => "pages/devblog"]);
        echo "
";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->loadTemplate("inc/head.twig", "/pages/devblog/show.twig", 9)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source,         // line 10
($context["at"] ?? null), "title", [], "any", false, false, false, 10), "desc" => twig_get_attribute($this->env, $this->source,         // line 11
($context["at"] ?? null), "desc", [], "any", false, false, false, 11), "urlAlternate" => null, "thumb" => ("devblog/" . twig_get_attribute($this->env, $this->source,         // line 13
($context["a"] ?? null), "cover", [], "any", false, false, false, 13))]));
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "params", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), ","));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            if (($context["code"] != ($context["langCode"] ?? null))) {
                // line 16
                echo "        <link rel=\"alternate\" href=\"";
                echo twig_escape_filter($this->env, (($context["host"] ?? null) . $context["code"]), "html", null, true);
                echo "/devblog/";
                echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->urlTransform(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "lang", [], "any", false, false, false, 16)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["en"] ?? null) : null), "title", [], "any", false, false, false, 16)), "html", null, true);
                echo "\" hreflang=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    <script type=\"application/ld+json\" class=\"yoast-schema-graph\">
        {
          \"@context\": \"https://schema.org\",
          \"@type\": \"NewsArticle\",
          \"headline\": \"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["at"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "\",
          \"image\": [
            \"";
        // line 24
        echo twig_escape_filter($this->env, (($context["host"] ?? null) . twig_replace_filter($this->extensions['Core\Extension']->asset(twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "cover", [], "any", false, false, false, 24)), ["/assets/" => "assets/img/devblog/"])), "html", null, true);
        echo "\"
          ],
          \"datePublished\": \"";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "date", [], "any", false, false, false, 26), "c"), "html", null, true);
        echo "\",
          \"dateModified\": \"";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "date", [], "any", false, false, false, 27), "c"), "html", null, true);
        echo "\",
          // \"author\": {
          //   \"@type\": \"Person\",
          //   \"name\": \"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "\",
          //   \"url\": \"http://example.com/profile/johndoe123\"
          // },
          \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"Kryxivia\",
            \"logo\": {
              \"@type\": \"ImageObject\",
              \"url\": \"";
        // line 38
        echo twig_escape_filter($this->env, (($context["host"] ?? null) . twig_replace_filter($this->extensions['Core\Extension']->asset("img/logo-kryxivia.png"), ["/assets/" => "assets/"])), "html", null, true);
        echo "\"
            }
          }
        }
    </script>
";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    <article itemscope=\"itemscope\" class=\"dvs\">
    \t";
        // line 46
        echo twig_call_macro($macros["m"], "macro_Title", [(("<strong class=\"dr\">" . twig_get_attribute($this->env, $this->source, ($context["at"] ?? null), "title", [], "any", false, false, false, 46)) . "</strong>"), ["article" => true, "time" => twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "date", [], "any", false, false, false, 46), "category" => twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "category", [], "any", false, false, false, 46)]], 46, $context, $this->getSourceContext());
        echo "
        <main id=\"m\" itemprop=\"text\">
            <div class=\"ct\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["at"] ?? null), "content", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 50
            echo "                    ";
            echo twig_call_macro($macros["m"], "macro_BlocArticle", [twig_get_attribute($this->env, $this->source, $context["content"], "type", [], "any", false, false, false, 50), $context["content"]], 50, $context, $this->getSourceContext());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
        </main>
    </article>
";
    }

    public function getTemplateName()
    {
        return "/pages/devblog/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 52,  160 => 50,  156 => 49,  150 => 46,  147 => 45,  143 => 44,  133 => 38,  122 => 30,  116 => 27,  112 => 26,  107 => 24,  102 => 22,  96 => 18,  82 => 16,  76 => 15,  74 => 13,  73 => 11,  72 => 10,  70 => 9,  66 => 8,  59 => 6,  55 => 5,  50 => 1,  48 => 4,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'app.twig' %}
{% import 'inc/macros.twig' as m %}
{% set a = article %}
{% set at = a.lang['en'] %}
{% block css %}
    {{'devblog'|minifier(['mods/default', 'pages/devblog'])|raw}}
{% endblock %}\t\t
{% block head %}
    {% include 'inc/head.twig' with {
    \ttitle: at.title,
    \tdesc: at.desc,
    \turlAlternate: null,
        thumb: 'devblog/'~a.cover
\t} %}
    {% for code in config.params.lang|split(',') if code != langCode %}
        <link rel=\"alternate\" href=\"{{host~code}}/devblog/{{(a.lang['en'].title)|urlTransform}}\" hreflang=\"{{code}}\">
    {% endfor %}
    <script type=\"application/ld+json\" class=\"yoast-schema-graph\">
        {
          \"@context\": \"https://schema.org\",
          \"@type\": \"NewsArticle\",
          \"headline\": \"{{at.title}}\",
          \"image\": [
            \"{{host~asset(a.cover)|replace({'/assets/':'assets/img/devblog/'})}}\"
          ],
          \"datePublished\": \"{{a.date|date('c')}}\",
          \"dateModified\": \"{{a.date|date('c')}}\",
          // \"author\": {
          //   \"@type\": \"Person\",
          //   \"name\": \"{{author.name}}\",
          //   \"url\": \"http://example.com/profile/johndoe123\"
          // },
          \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"Kryxivia\",
            \"logo\": {
              \"@type\": \"ImageObject\",
              \"url\": \"{{host~asset('img/logo-kryxivia.png')|replace({'/assets/':'assets/'})}}\"
            }
          }
        }
    </script>
{% endblock %}
{% block content %}
    <article itemscope=\"itemscope\" class=\"dvs\">
    \t{{m.Title('<strong class=\"dr\">'~at.title~'</strong>', {article:true,time:a.date,category:a.category})}}
        <main id=\"m\" itemprop=\"text\">
            <div class=\"ct\">
                {% for content in at.content %}
                    {{m.BlocArticle(content.type, content)}}
                {% endfor %}
            </div>
        </main>
    </article>
{% endblock %}", "/pages/devblog/show.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/pages/devblog/show.twig");
    }
}
