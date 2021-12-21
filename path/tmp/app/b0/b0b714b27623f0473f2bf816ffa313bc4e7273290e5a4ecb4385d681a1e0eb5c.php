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

/* /pages/team.twig */
class __TwigTemplate_5f8092717b153878b2f57bd65a0bb692ecd46714ebd290b40abfa85d9fd251ca extends \Twig\Template
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "/pages/team.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("app.twig", "/pages/team.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo $this->extensions['Core\Extension']->minifier("team", [0 => "mods/default", 1 => "pages/team"]);
        echo "
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->loadTemplate("inc/head.twig", "/pages/team.twig", 7)->display(twig_array_merge($context, ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["lang"] ?? null), "head", [], "any", false, false, false, 8), "team", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "desc" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
($context["lang"] ?? null), "head", [], "any", false, false, false, 9), "team", [], "any", false, false, false, 9), "desc", [], "any", false, false, false, 9), "urlAlternate" => "/team"]));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t";
        echo twig_call_macro($macros["m"], "macro_Title", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "team", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "
\t<main id=\"m\" class=\"te\">
\t\t<div class=\"ct\">
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 18
            echo "\t\t\t\t";
            if (($context["cat"] == 1)) {
                echo "<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "team", [], "any", false, false, false, 18), "group", [], "any", false, false, false, 18), 1, [], "any", false, false, false, 18), "html", null, true);
                echo "</h2>
\t\t\t\t";
            } elseif ((            // line 19
$context["cat"] == 2)) {
                echo "<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "team", [], "any", false, false, false, 19), "group", [], "any", false, false, false, 19), 2, [], "any", false, false, false, 19), "html", null, true);
                echo "</h2>
\t\t\t\t";
            } elseif ((            // line 20
$context["cat"] == 3)) {
                echo "<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "team", [], "any", false, false, false, 20), "group", [], "any", false, false, false, 20), 3, [], "any", false, false, false, 20), "html", null, true);
                echo "</h2>
\t\t\t\t";
            } elseif ((            // line 21
$context["cat"] == 4)) {
                echo "<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "team", [], "any", false, false, false, 21), "group", [], "any", false, false, false, 21), 4, [], "any", false, false, false, 21), "html", null, true);
                echo "</h2>
\t\t\t\t";
            } elseif ((            // line 22
$context["cat"] == 5)) {
                echo "<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "team", [], "any", false, false, false, 22), "group", [], "any", false, false, false, 22), 5, [], "any", false, false, false, 22), "html", null, true);
                echo "</h2>
\t\t\t\t";
            } elseif ((            // line 23
$context["cat"] == 6)) {
                echo "<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "team", [], "any", false, false, false, 23), "group", [], "any", false, false, false, 23), 6, [], "any", false, false, false, 23), "html", null, true);
                echo "</h2>
\t\t\t\t";
            } elseif ((            // line 24
$context["cat"] == 7)) {
                echo "<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "team", [], "any", false, false, false, 24), "group", [], "any", false, false, false, 24), 7, [], "any", false, false, false, 24), "html", null, true);
                echo "</h2>";
            }
            // line 25
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["TeamMember"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["team"], "cat", [], "any", false, false, false, 25) == $context["cat"])) {
                    // line 26
                    echo "\t\t\t\t\t";
                    echo twig_call_macro($macros["m"], "macro_Team", [$context["team"]], 26, $context, $this->getSourceContext());
                    echo "
\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t<div class=\"bt\">
\t\t\t\t";
        // line 30
        echo twig_call_macro($macros["m"], "macro_bn", ["More Informations", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 30), "doc", [], "any", false, false, false, 30) . "kryxivia-team"), ["target" => "_blank"]], 30, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t</div>
\t</main>
";
    }

    public function getTemplateName()
    {
        return "/pages/team.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 30,  153 => 29,  147 => 28,  137 => 26,  131 => 25,  125 => 24,  119 => 23,  113 => 22,  107 => 21,  101 => 20,  95 => 19,  88 => 18,  84 => 17,  77 => 14,  73 => 13,  69 => 9,  68 => 8,  66 => 7,  62 => 6,  55 => 4,  51 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'app.twig' %}
{% import 'inc/macros.twig' as m %}
{% block css %}
\t{{'team'|minifier(['mods/default', 'pages/team'])|raw}}
{% endblock %}
{% block head %}
    {% include 'inc/head.twig' with {
    \ttitle: lang.head.team.title,
    \tdesc: lang.head.team.desc,
    \turlAlternate: '/team'
\t} %}
{% endblock %}
{% block content %}
\t{{m.Title(lang.team.title)}}
\t<main id=\"m\" class=\"te\">
\t\t<div class=\"ct\">
\t\t\t{% for cat in 1..7 %}
\t\t\t\t{% if cat == 1 %}<h2>{{lang.team.group.1}}</h2>
\t\t\t\t{% elseif cat == 2 %}<h2>{{lang.team.group.2}}</h2>
\t\t\t\t{% elseif cat == 3 %}<h2>{{lang.team.group.3}}</h2>
\t\t\t\t{% elseif cat == 4 %}<h2>{{lang.team.group.4}}</h2>
\t\t\t\t{% elseif cat == 5 %}<h2>{{lang.team.group.5}}</h2>
\t\t\t\t{% elseif cat == 6 %}<h2>{{lang.team.group.6}}</h2>
\t\t\t\t{% elseif cat == 7 %}<h2>{{lang.team.group.7}}</h2>{% endif %}
\t\t\t\t{% for team in TeamMember if team.cat == cat %}
\t\t\t\t\t{{m.Team(team)}}
\t\t\t\t{% endfor %}
\t\t\t{% endfor %}
\t\t\t<div class=\"bt\">
\t\t\t\t{{m.bn('More Informations', config.settings.doc~'kryxivia-team', {target:'_blank'})}}
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "/pages/team.twig", "E:\\wamp64\\www\\Kryxivia\\Views\\pages\\team.twig");
    }
}
