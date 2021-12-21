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

/* inc/footer.twig */
class __TwigTemplate_ae0cee8e5dcfb885628c6111f1e366890793ba073e6578df7f45bb71dc13f5b2 extends \Twig\Template
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "inc/footer.twig", 1)->unwrap();
        // line 2
        echo "<footer id=\"f\">
    <div class=\"ct ct-r\">
        ";
        // line 4
        echo twig_call_macro($macros["m"], "macro_Rs", ["Telegram", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["config"] ?? null), "settings", [], "any", false, false, false, 6), "social", [], "any", false, false, false, 6), "telegram", [], "any", false, false, false, 6), "<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"512\" viewBox=\"0 0 32 32\" width=\"512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M2.617 15.832l6.44 2.187 15.29-9.348c.222-.136.449.165.258.341L13.03 19.668l-.43 5.965c-.033.454.514.706.838.387l3.564-3.505 6.516 4.932a1.21 1.21 0 0 0 1.909-.703l4.537-20.6c.259-1.175-.893-2.167-2.016-1.736L2.585 14.12c-.796.305-.774 1.438.033 1.712z\"/></svg>"], 4, $context, $this->getSourceContext());
        // line 8
        echo "
        ";
        // line 9
        echo twig_call_macro($macros["m"], "macro_Rs", ["Twitter", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["config"] ?? null), "settings", [], "any", false, false, false, 11), "social", [], "any", false, false, false, 11), "twitter", [], "any", false, false, false, 11), "<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"512\" viewBox=\"0 0 100 100\" width=\"512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"m89.9 25.2c-3 1.3-6.1 2.2-9.4 2.6 3.4-2 6-5.2 7.2-9.1-3.2 1.9-6.7 3.2-10.4 4-3-3.2-7.3-5.2-12-5.2-9.1 0-16.4 7.4-16.4 16.4 0 1.3.1 2.5.4 3.7-13.6-.6-25.6-7.2-33.7-17.1-5.8 10.4.7 19 5 21.9-2.6 0-5.2-.8-7.4-2 0 8.1 5.7 14.8 13.1 16.3-1.6.5-5.2.8-7.4.3 2.1 6.5 8.2 11.3 15.3 11.4-5.6 4.4-13.8 7.9-24.3 6.8 7.3 4.7 15.9 7.4 25.2 7.4 30.2 0 46.6-25 46.6-46.6 0-.7 0-1.4-.1-2.1 3.4-2.5 6.2-5.4 8.3-8.7z\"/></svg>"], 9, $context, $this->getSourceContext());
        // line 13
        echo "
        ";
        // line 14
        echo twig_call_macro($macros["m"], "macro_Rs", ["Reddit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["config"] ?? null), "settings", [], "any", false, false, false, 16), "social", [], "any", false, false, false, 16), "reddit", [], "any", false, false, false, 16), "<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"512\" viewBox=\"0 0 24 24\" width=\"512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M21.325 9.308c-.758 0-1.425.319-1.916.816-1.805-1.268-4.239-2.084-6.936-2.171l1.401-6.406 4.461 1.016c0 1.108.89 2.013 1.982 2.013 1.113 0 2.008-.929 2.008-2.038S21.436.5 20.318.5c-.779 0-1.451.477-1.786 1.129L13.605.521c-.248-.067-.491.113-.557.365L11.51 7.948c-2.676.113-5.084.928-6.895 2.197-.491-.518-1.184-.837-1.942-.837-2.812 0-3.733 3.829-1.158 5.138a5.83 5.83 0 0 0-.132 1.268c0 4.301 4.775 7.786 10.638 7.786 5.888 0 10.663-3.485 10.663-7.786 0-.431-.045-.883-.156-1.289 2.523-1.314 1.594-5.115-1.203-5.117zm-15.724 5.41c0-1.129.89-2.038 2.008-2.038 1.092 0 1.983.903 1.983 2.038 0 1.109-.89 2.013-1.983 2.013-1.113.005-2.008-.904-2.008-2.013zm10.839 4.798c-1.841 1.868-7.036 1.868-8.878 0-.203-.18-.203-.498 0-.703a.48.48 0 0 1 .668 0c1.406 1.463 6.07 1.488 7.537 0a.48.48 0 0 1 .668 0c.207.206.207.524.005.703zm-.041-2.781c-1.092 0-1.982-.903-1.982-2.011 0-1.129.89-2.038 1.982-2.038 1.113 0 2.008.903 2.008 2.038-.005 1.103-.895 2.011-2.008 2.011z\"/></svg>"], 14, $context, $this->getSourceContext());
        // line 18
        echo "
        ";
        // line 19
        echo twig_call_macro($macros["m"], "macro_Rs", ["Discord", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["config"] ?? null), "settings", [], "any", false, false, false, 21), "social", [], "any", false, false, false, 21), "discord", [], "any", false, false, false, 21), "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M417.5 107.8c-29.7-13.6-61.6-23.7-94.9-29.4-.6-.1-1.2.2-1.5.7-4.1 7.3-8.6 16.8-11.8 24.3-35.8-5.4-71.5-5.4-106.5 0-3.2-7.6-7.9-17-12-24.3-.3-.5-.9-.8-1.5-.7-33.3 5.7-65.1 15.8-94.9 29.4-.3.1-.5.3-.6.5-60.4 90.3-77 178.3-68.8 265.2 0 .4.3.8.6 1.1 39.9 29.3 78.5 47 116.4 58.8.6.2 1.2 0 1.6-.5 9-12.2 17-25.1 23.8-38.7.4-.8 0-1.7-.8-2.1-12.7-4.8-24.7-10.7-36.4-17.3-.9-.5-1-1.8-.1-2.5 2.4-1.8 4.9-3.7 7.2-5.7.4-.4 1-.4 1.5-.2 76.3 34.8 158.8 34.8 234.2 0 .5-.2 1.1-.2 1.5.2 2.3 1.9 4.8 3.8 7.2 5.7a1.55 1.55 0 0 1-.1 2.5c-11.6 6.8-23.7 12.5-36.4 17.3-.8.3-1.2 1.3-.8 2.1 7 13.6 15 26.5 23.8 38.7.4.5 1 .7 1.6.6 38.1-11.8 76.7-29.5 116.5-58.8.3-.3.6-.6.6-1.1 9.7-100.5-16.3-187.8-68.9-265.2 0-.3-.3-.4-.5-.6h0zM178.7 320.7c-23 0-41.9-21.1-41.9-47s18.6-47 41.9-47c23.5 0 42.2 21.3 41.9 47 0 25.9-18.6 47-41.9 47zm154.9 0c-23 0-41.9-21.1-41.9-47s18.6-47 41.9-47c23.5 0 42.2 21.3 41.9 47-.1 25.9-18.4 47-41.9 47z\"/></svg>"], 19, $context, $this->getSourceContext());
        // line 23
        echo "
        ";
        // line 24
        echo twig_call_macro($macros["m"], "macro_Rs", ["Medium", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["config"] ?? null), "settings", [], "any", false, false, false, 26), "social", [], "any", false, false, false, 26), "medium", [], "any", false, false, false, 26), "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M285.6 256c0 72.3-58.3 131-130.1 131S25.3 328.3 25.3 256s58.3-131 130.1-131c71.9 0 130.2 58.7 130.2 131m142.7 0c0 68.1-29.1 123.3-65.1 123.3s-65.1-55.2-65.1-123.3 29.1-123.3 65.1-123.3 65.1 55.2 65.1 123.3m58.4 0c0 61-10.2 110.5-22.9 110.5-12.6 0-22.9-49.5-22.9-110.5s10.2-110.5 22.9-110.5c12.6 0 22.9 49.5 22.9 110.5\"/></svg>"], 24, $context, $this->getSourceContext());
        // line 28
        echo "
        ";
        // line 29
        echo twig_call_macro($macros["m"], "macro_Rs", ["Linkedin", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["config"] ?? null), "settings", [], "any", false, false, false, 31), "social", [], "any", false, false, false, 31), "linkedin", [], "any", false, false, false, 31), "<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"512\" viewBox=\"0 0 152 152\" width=\"512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M140.9 140.9V93.3c0-23.4-5-41.2-32.3-41.2-13.1 0-21.9 7.1-25.5 14h-.3V54.2H57v86.7h27V98c0-11.4 2.1-22.2 16.2-22.2s14 13 14 23V141zM13.2 54.2h26.9v86.7H13.2zM26.7 11C18.1 11 11 18 11 26.6s7 15.7 15.6 15.7 15.7-7 15.7-15.6v-.2c0-8.5-7-15.5-15.6-15.5z\"/></svg>"], 29, $context, $this->getSourceContext());
        // line 33
        echo "
        ";
        // line 34
        echo twig_call_macro($macros["m"], "macro_Rs", ["Instagram", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["config"] ?? null), "settings", [], "any", false, false, false, 36), "social", [], "any", false, false, false, 36), "instagram", [], "any", false, false, false, 36), "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M363.273 0H148.728C66.719 0 0 66.719 0 148.728v214.544C0 445.281 66.719 512 148.728 512h214.544C445.281 512 512 445.281 512 363.273V148.728C512 66.719 445.281 0 363.273 0zM472 363.272C472 423.225 423.225 472 363.273 472H148.728C88.775 472 40 423.225 40 363.273V148.728C40 88.775 88.775 40 148.728 40h214.544C423.225 40 472 88.775 472 148.728v214.544zM256 118c-76.094 0-138 61.906-138 138s61.906 138 138 138 138-61.906 138-138-61.906-138-138-138zm0 236c-54.037 0-98-43.963-98-98s43.963-98 98-98 98 43.963 98 98-43.963 98-98 98z\"/><circle cx=\"396\" cy=\"116\" r=\"20\"/></svg>"], 34, $context, $this->getSourceContext());
        // line 38
        echo "
    </div>
    <div class=\"ct ct-d\">
        <div class=\"left\">
            <div class=\"left-t\">
                ";
        // line 43
        echo twig_call_macro($macros["m"], "macro_img", ["img/logo-kryxivia.png", ["width" => 958, "height" => 365, "cls" => "lg", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43)]], 43, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"copy\">";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 45), "copy", [], "any", false, false, false, 45);
        echo "</div>
        </div>
        <div class=\"right\">
            <ul>
                <li>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 49), "ress", [], "any", false, false, false, 49), "html", null, true);
        echo "</li>
                ";
        // line 50
        echo twig_call_macro($macros["m"], "macro_liF", ["Github", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 50), "github", [], "any", false, false, false, 50)], 50, $context, $this->getSourceContext());
        echo "
                ";
        // line 51
        echo twig_call_macro($macros["m"], "macro_liF", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 51), "doc", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 51), "doc", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
        echo "
                ";
        // line 52
        echo twig_call_macro($macros["m"], "macro_liF", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 52), "article", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 52), "social", [], "any", false, false, false, 52), "medium", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
        echo "
                ";
        // line 53
        echo twig_call_macro($macros["m"], "macro_liF", ["Coin Market Cap", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 53), "kxa", [], "any", false, false, false, 53), "coinmarketcap", [], "any", false, false, false, 53)], 53, $context, $this->getSourceContext());
        echo "
                ";
        // line 54
        echo twig_call_macro($macros["m"], "macro_liF", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 54), "contrat", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 54), "contract", [], "any", false, false, false, 54)], 54, $context, $this->getSourceContext());
        echo "
            </ul>
            <ul>
                <li>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 57), "follow", [], "any", false, false, false, 57), "html", null, true);
        echo "</li>
                ";
        // line 58
        echo twig_call_macro($macros["m"], "macro_liF", ["Telegram", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 58), "social", [], "any", false, false, false, 58), "telegram", [], "any", false, false, false, 58)], 58, $context, $this->getSourceContext());
        echo "
                ";
        // line 59
        echo twig_call_macro($macros["m"], "macro_liF", ["Twitter", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 59), "social", [], "any", false, false, false, 59), "twitter", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
        echo "
                ";
        // line 60
        echo twig_call_macro($macros["m"], "macro_liF", ["Reddit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 60), "social", [], "any", false, false, false, 60), "reddit", [], "any", false, false, false, 60)], 60, $context, $this->getSourceContext());
        echo "
                ";
        // line 61
        echo twig_call_macro($macros["m"], "macro_liF", ["Discord", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 61), "social", [], "any", false, false, false, 61), "discord", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
        echo "
                ";
        // line 62
        echo twig_call_macro($macros["m"], "macro_liF", ["Linkedin", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 62), "social", [], "any", false, false, false, 62), "linkedin", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
        echo "
                ";
        // line 63
        echo twig_call_macro($macros["m"], "macro_liF", ["Instagram", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "settings", [], "any", false, false, false, 63), "social", [], "any", false, false, false, 63), "instagram", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
        echo "
            </ul>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "inc/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  147 => 62,  143 => 61,  139 => 60,  135 => 59,  131 => 58,  127 => 57,  121 => 54,  117 => 53,  113 => 52,  109 => 51,  105 => 50,  101 => 49,  94 => 45,  89 => 43,  82 => 38,  80 => 36,  79 => 34,  76 => 33,  74 => 31,  73 => 29,  70 => 28,  68 => 26,  67 => 24,  64 => 23,  62 => 21,  61 => 19,  58 => 18,  56 => 16,  55 => 14,  52 => 13,  50 => 11,  49 => 9,  46 => 8,  44 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'inc/macros.twig' as m %}
<footer id=\"f\">
    <div class=\"ct ct-r\">
        {{m.Rs(
            'Telegram',
            config.settings.social.telegram,
            '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"512\" viewBox=\"0 0 32 32\" width=\"512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M2.617 15.832l6.44 2.187 15.29-9.348c.222-.136.449.165.258.341L13.03 19.668l-.43 5.965c-.033.454.514.706.838.387l3.564-3.505 6.516 4.932a1.21 1.21 0 0 0 1.909-.703l4.537-20.6c.259-1.175-.893-2.167-2.016-1.736L2.585 14.12c-.796.305-.774 1.438.033 1.712z\"/></svg>'
        )}}
        {{m.Rs(
            'Twitter',
            config.settings.social.twitter,
            '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"512\" viewBox=\"0 0 100 100\" width=\"512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"m89.9 25.2c-3 1.3-6.1 2.2-9.4 2.6 3.4-2 6-5.2 7.2-9.1-3.2 1.9-6.7 3.2-10.4 4-3-3.2-7.3-5.2-12-5.2-9.1 0-16.4 7.4-16.4 16.4 0 1.3.1 2.5.4 3.7-13.6-.6-25.6-7.2-33.7-17.1-5.8 10.4.7 19 5 21.9-2.6 0-5.2-.8-7.4-2 0 8.1 5.7 14.8 13.1 16.3-1.6.5-5.2.8-7.4.3 2.1 6.5 8.2 11.3 15.3 11.4-5.6 4.4-13.8 7.9-24.3 6.8 7.3 4.7 15.9 7.4 25.2 7.4 30.2 0 46.6-25 46.6-46.6 0-.7 0-1.4-.1-2.1 3.4-2.5 6.2-5.4 8.3-8.7z\"/></svg>'
        )}}
        {{m.Rs(
            'Reddit',
            config.settings.social.reddit,
            '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"512\" viewBox=\"0 0 24 24\" width=\"512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M21.325 9.308c-.758 0-1.425.319-1.916.816-1.805-1.268-4.239-2.084-6.936-2.171l1.401-6.406 4.461 1.016c0 1.108.89 2.013 1.982 2.013 1.113 0 2.008-.929 2.008-2.038S21.436.5 20.318.5c-.779 0-1.451.477-1.786 1.129L13.605.521c-.248-.067-.491.113-.557.365L11.51 7.948c-2.676.113-5.084.928-6.895 2.197-.491-.518-1.184-.837-1.942-.837-2.812 0-3.733 3.829-1.158 5.138a5.83 5.83 0 0 0-.132 1.268c0 4.301 4.775 7.786 10.638 7.786 5.888 0 10.663-3.485 10.663-7.786 0-.431-.045-.883-.156-1.289 2.523-1.314 1.594-5.115-1.203-5.117zm-15.724 5.41c0-1.129.89-2.038 2.008-2.038 1.092 0 1.983.903 1.983 2.038 0 1.109-.89 2.013-1.983 2.013-1.113.005-2.008-.904-2.008-2.013zm10.839 4.798c-1.841 1.868-7.036 1.868-8.878 0-.203-.18-.203-.498 0-.703a.48.48 0 0 1 .668 0c1.406 1.463 6.07 1.488 7.537 0a.48.48 0 0 1 .668 0c.207.206.207.524.005.703zm-.041-2.781c-1.092 0-1.982-.903-1.982-2.011 0-1.129.89-2.038 1.982-2.038 1.113 0 2.008.903 2.008 2.038-.005 1.103-.895 2.011-2.008 2.011z\"/></svg>'
        )}}
        {{m.Rs(
            'Discord',
            config.settings.social.discord,
            '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M417.5 107.8c-29.7-13.6-61.6-23.7-94.9-29.4-.6-.1-1.2.2-1.5.7-4.1 7.3-8.6 16.8-11.8 24.3-35.8-5.4-71.5-5.4-106.5 0-3.2-7.6-7.9-17-12-24.3-.3-.5-.9-.8-1.5-.7-33.3 5.7-65.1 15.8-94.9 29.4-.3.1-.5.3-.6.5-60.4 90.3-77 178.3-68.8 265.2 0 .4.3.8.6 1.1 39.9 29.3 78.5 47 116.4 58.8.6.2 1.2 0 1.6-.5 9-12.2 17-25.1 23.8-38.7.4-.8 0-1.7-.8-2.1-12.7-4.8-24.7-10.7-36.4-17.3-.9-.5-1-1.8-.1-2.5 2.4-1.8 4.9-3.7 7.2-5.7.4-.4 1-.4 1.5-.2 76.3 34.8 158.8 34.8 234.2 0 .5-.2 1.1-.2 1.5.2 2.3 1.9 4.8 3.8 7.2 5.7a1.55 1.55 0 0 1-.1 2.5c-11.6 6.8-23.7 12.5-36.4 17.3-.8.3-1.2 1.3-.8 2.1 7 13.6 15 26.5 23.8 38.7.4.5 1 .7 1.6.6 38.1-11.8 76.7-29.5 116.5-58.8.3-.3.6-.6.6-1.1 9.7-100.5-16.3-187.8-68.9-265.2 0-.3-.3-.4-.5-.6h0zM178.7 320.7c-23 0-41.9-21.1-41.9-47s18.6-47 41.9-47c23.5 0 42.2 21.3 41.9 47 0 25.9-18.6 47-41.9 47zm154.9 0c-23 0-41.9-21.1-41.9-47s18.6-47 41.9-47c23.5 0 42.2 21.3 41.9 47-.1 25.9-18.4 47-41.9 47z\"/></svg>'
        )}}
        {{m.Rs(
            'Medium',
            config.settings.social.medium,
            '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M285.6 256c0 72.3-58.3 131-130.1 131S25.3 328.3 25.3 256s58.3-131 130.1-131c71.9 0 130.2 58.7 130.2 131m142.7 0c0 68.1-29.1 123.3-65.1 123.3s-65.1-55.2-65.1-123.3 29.1-123.3 65.1-123.3 65.1 55.2 65.1 123.3m58.4 0c0 61-10.2 110.5-22.9 110.5-12.6 0-22.9-49.5-22.9-110.5s10.2-110.5 22.9-110.5c12.6 0 22.9 49.5 22.9 110.5\"/></svg>'
        )}}
        {{m.Rs(
            'Linkedin',
            config.settings.social.linkedin,
            '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"512\" viewBox=\"0 0 152 152\" width=\"512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M140.9 140.9V93.3c0-23.4-5-41.2-32.3-41.2-13.1 0-21.9 7.1-25.5 14h-.3V54.2H57v86.7h27V98c0-11.4 2.1-22.2 16.2-22.2s14 13 14 23V141zM13.2 54.2h26.9v86.7H13.2zM26.7 11C18.1 11 11 18 11 26.6s7 15.7 15.6 15.7 15.7-7 15.7-15.6v-.2c0-8.5-7-15.5-15.6-15.5z\"/></svg>'
        )}}
        {{m.Rs(
            'Instagram',
            config.settings.social.instagram,
            '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" xmlns:v=\"https://vecta.io/nano\"><path d=\"M363.273 0H148.728C66.719 0 0 66.719 0 148.728v214.544C0 445.281 66.719 512 148.728 512h214.544C445.281 512 512 445.281 512 363.273V148.728C512 66.719 445.281 0 363.273 0zM472 363.272C472 423.225 423.225 472 363.273 472H148.728C88.775 472 40 423.225 40 363.273V148.728C40 88.775 88.775 40 148.728 40h214.544C423.225 40 472 88.775 472 148.728v214.544zM256 118c-76.094 0-138 61.906-138 138s61.906 138 138 138 138-61.906 138-138-61.906-138-138-138zm0 236c-54.037 0-98-43.963-98-98s43.963-98 98-98 98 43.963 98 98-43.963 98-98 98z\"/><circle cx=\"396\" cy=\"116\" r=\"20\"/></svg>'
        )}}
    </div>
    <div class=\"ct ct-d\">
        <div class=\"left\">
            <div class=\"left-t\">
                {{m.img('img/logo-kryxivia.png', {width:958,height:365,cls:'lg',alt:lang.all.name})}}
            </div>
            <div class=\"copy\">{{lang.footer.copy|raw}}</div>
        </div>
        <div class=\"right\">
            <ul>
                <li>{{lang.footer.ress}}</li>
                {{m.liF('Github', config.settings.github)}}
                {{m.liF(lang.footer.doc, config.settings.doc)}}
                {{m.liF(lang.footer.article, config.settings.social.medium)}}
                {{m.liF('Coin Market Cap', config.settings.kxa.coinmarketcap)}}
                {{m.liF(lang.footer.contrat, config.settings.contract)}}
            </ul>
            <ul>
                <li>{{lang.footer.follow}}</li>
                {{m.liF('Telegram', config.settings.social.telegram)}}
                {{m.liF('Twitter', config.settings.social.twitter)}}
                {{m.liF('Reddit', config.settings.social.reddit)}}
                {{m.liF('Discord', config.settings.social.discord)}}
                {{m.liF('Linkedin', config.settings.social.linkedin)}}
                {{m.liF('Instagram', config.settings.social.instagram)}}
            </ul>
        </div>
    </div>
</footer>", "inc/footer.twig", "E:\\wamp64\\www\\Kryxivia\\Views\\inc\\footer.twig");
    }
}
