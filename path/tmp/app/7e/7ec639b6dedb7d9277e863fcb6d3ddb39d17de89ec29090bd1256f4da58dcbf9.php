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

/* inc/macros.twig */
class __TwigTemplate_daeb858c5bd3a877158f148defb1f7cc247f398b5310467e7b4ad39b949974d4 extends \Twig\Template
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
        // line 7
        echo "
";
        // line 14
        echo "
";
        // line 26
        echo "
";
        // line 36
        echo "
";
        // line 52
        echo "
";
        // line 61
        echo "
";
        // line 76
        echo "
";
        // line 97
        echo "
";
        // line 135
        echo "
";
        // line 145
        echo "  

";
        // line 157
        echo "  

";
        // line 185
        echo "
";
        // line 191
        echo "
";
        // line 225
        echo "
";
        // line 235
        echo "
";
        // line 251
        echo "
";
        // line 256
        echo "
";
        // line 261
        echo "
";
        // line 271
        echo "
";
        // line 276
        echo "
";
    }

    // line 2
    public function macro_css($__css__ = null, $__mode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "css" => $__css__,
            "mode" => $__mode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["css"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 4
                echo "        <link rel=\"";
                echo (((($context["mode"] ?? null) == "preload")) ? ("preload") : ("stylesheet"));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset((("css/" . $context["c"]) . ".css")), "html", null, true);
                echo "\" ";
                echo (((($context["mode"] ?? null) == "preload")) ? ("as=\"style\"") : ("media=\"all\""));
                echo ">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_js($__js__ = null, $__f__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "js" => $__js__,
            "f" => $__f__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["js"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                if (twig_in_filter(($context["f"] ?? null), $context["j"])) {
                    // line 11
                    echo "        <script src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset((("js/" . $context["j"]) . ".js")), "html", null, true);
                    echo "\" defer></script>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_img($__img__ = null, $__o__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "img" => $__img__,
            "o" => $__o__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 17
            echo "    ";
            if (twig_in_filter(".svg", ($context["img"] ?? null))) {
                // line 18
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset(($context["img"] ?? null)), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "width", [], "any", false, false, false, 18), "html", null, true);
                echo "\" height=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "height", [], "any", false, false, false, 18), "html", null, true);
                echo "\" loading=\"lazy\" alt=\"";
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "alt", [], "any", false, false, false, 18)), "html", null, true);
                echo "\">
    ";
            } else {
                // line 20
                echo "        <picture";
                (((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "cls", [], "any", false, false, false, 20) != null)) ? (print (twig_escape_filter($this->env, (" class=" . twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "cls", [], "any", false, false, false, 20)), "html", null, true))) : (print ("")));
                echo ">
            <source srcset=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset((twig_replace_filter(($context["img"] ?? null), ["jpg" => "", "png" => ""]) . "webp")), "html", null, true);
                echo "\" type=\"image/webp\">                
            <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset(($context["img"] ?? null)), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "width", [], "any", false, false, false, 22), "html", null, true);
                echo "\" height=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "height", [], "any", false, false, false, 22), "html", null, true);
                echo "\" loading=\"";
                echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "lazy", [], "any", false, false, false, 22)) ? ("eager") : ("lazy"));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "alt", [], "any", false, false, false, 22)), "html", null, true);
                echo "\">
        </picture>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_Info($__cls__ = null, $__img__ = null, $__name__ = null, $__info__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "cls" => $__cls__,
            "img" => $__img__,
            "name" => $__name__,
            "info" => $__info__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 29
            echo "    ";
            $macros["this"] = $this;
            // line 30
            echo "    <li data-show>
        ";
            // line 31
            echo twig_call_macro($macros["this"], "macro_img", [($context["img"] ?? null), ["width" => 450, "height" => 450, "cls" => ($context["cls"] ?? null), "alt" => ($context["name"] ?? null)]], 31, $context, $this->getSourceContext());
            echo "
        <small>";
            // line 32
            echo ($context["name"] ?? null);
            echo "</small>
        <strong>";
            // line 33
            echo ($context["info"] ?? null);
            echo "</strong>
    </li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 38
    public function macro_Team($__p__ = null, $__o__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "p" => $__p__,
            "o" => $__o__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 39
            echo "    ";
            $macros["this"] = $this;
            // line 40
            echo "    ";
            $context["photo"] = (((twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "photo", [], "any", false, false, false, 40) != null)) ? (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "photo", [], "any", false, false, false, 40)) : ("none"));
            // line 41
            echo "    <div class=\"tem\">
        <div class=\"illu\">
            ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "lang", [], "any", false, false, false, 43) != null)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset((("img/lang/" . twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "lang", [], "any", false, false, false, 43)) . ".svg")), "html", null, true);
                echo "\" width=\"30\" height=\"30\" loading=\"lazy\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "lang", [], "any", false, false, false, 43), "html", null, true);
                echo "\">";
            }
            // line 44
            echo "            ";
            echo twig_call_macro($macros["this"], "macro_img", [(("img/team/" . ($context["photo"] ?? null)) . ".jpg"), ["width" => 100, "height" => 100, "alt" => (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "name", [], "any", false, false, false, 44) . " Kryxivia")]], 44, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"txt\">
            <h3 class=\"name\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</h3>
            <div class=\"post\"><span class=\"dr\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "poste", [], "any", false, false, false, 48), "html", null, true);
            echo "</span></div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_kxa(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 55
            echo "    ";
            $macros["this"] = $this;
            // line 56
            echo "    <span class=\"kxa-c\">
        <span class=\"kxa\">\$KXA</span>
        ";
            // line 58
            echo twig_call_macro($macros["this"], "macro_img", ["img/kxa-icon.png", ["width" => 51, "height" => 64, "alt" => "\$KXA"]], 58, $context, $this->getSourceContext());
            echo "
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 63
    public function macro_bn($__title__ = null, $__link__ = null, $__o__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "link" => $__link__,
            "o" => $__o__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 64
            echo "    ";
            $context["t"] = ($context["title"] ?? null);
            // line 65
            echo "    ";
            if (twig_in_filter(($context["link"] ?? null), [0 => "btn", 1 => "bn", 2 => "button"])) {
                // line 66
                echo "        ";
                $context["start"] = "button";
                // line 67
                echo "        ";
                $context["end"] = "button";
                // line 68
                echo "    ";
            } else {
                // line 69
                echo "        ";
                $context["start"] = ("a href=" . ($context["link"] ?? null));
                // line 70
                echo "        ";
                $context["end"] = "a";
                // line 71
                echo "    ";
            }
            // line 72
            echo "    <";
            echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
            echo " title=\"";
            echo twig_escape_filter($this->env, strip_tags(($context["t"] ?? null)), "html", null, true);
            echo "\" class=\"bn";
            ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "class", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, (" " . twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "class", [], "any", false, false, false, 72)), "html", null, true))) : (print ("")));
            echo (((($context["link"] ?? null) == "#")) ? (" disabled") : (""));
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["o"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["a"]) {
                if ((twig_in_filter($context["key"], [0 => "class", 1 => "title"]) != true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    <span>";
            // line 73
            echo ($context["t"] ?? null);
            echo "</span>
    </";
            // line 74
            echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
            echo ">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 78
    public function macro_Title($__title__ = null, $__o__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "o" => $__o__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 79
            echo "    ";
            $macros["this"] = $this;
            // line 80
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "article", [], "any", false, false, false, 80)) {
                // line 81
                echo "        ";
                $context["d"] = "header";
                // line 82
                echo "    ";
            } else {
                // line 83
                echo "        ";
                $context["d"] = "div";
                // line 84
                echo "    ";
            }
            // line 85
            echo "    <";
            echo twig_escape_filter($this->env, ($context["d"] ?? null), "html", null, true);
            echo " id=\"t\">
        <div class=\"ct\">
            ";
            // line 87
            echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "category", [], "any", false, false, false, 87)) ? (twig_call_macro($macros["this"], "macro_Category", [twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "category", [], "any", false, false, false, 87)], 87, $context, $this->getSourceContext())) : (""));
            echo "
            <h1";
            // line 88
            echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "article", [], "any", false, false, false, 88)) ? (" itemprop=headline") : (""));
            echo ">";
            echo ($context["title"] ?? null);
            echo "</h1>
            ";
            // line 89
            echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "time", [], "any", false, false, false, 89)) ? (twig_call_macro($macros["this"], "macro_Time", [twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "time", [], "any", false, false, false, 89)], 89, $context, $this->getSourceContext())) : (""));
            echo "
        </div>
        ";
            // line 91
            echo twig_call_macro($macros["this"], "macro_img", ["img/bottom-ix.png", ["width" => 2000, "height" => 744, "cls" => "b-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91)]], 91, $context, $this->getSourceContext());
            echo "
        <div class=\"bg\">
            <div></div>
        </div>
    </";
            // line 95
            echo twig_escape_filter($this->env, ($context["d"] ?? null), "html", null, true);
            echo ">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 99
    public function macro_TokenShow($__token__ = null, $__title__ = null, $__txt__ = null, $__o__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "title" => $__title__,
            "txt" => $__txt__,
            "o" => $__o__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 100
            echo "    ";
            $macros["this"] = $this;
            // line 101
            echo "    <div class=\"tkbc tkbc-";
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\">
        <div class=\"illu\">
            <div class=\"tokc\">
                <div class=\"tok\">
                    ";
            // line 105
            echo twig_call_macro($macros["this"], "macro_img", [(("img/" . ($context["token"] ?? null)) . "-token_kryxivia.png"), ["width" => 415, "height" => 513, "alt" => ($context["title"] ?? null)]], 105, $context, $this->getSourceContext());
            echo "
                </div>
                <div id=\"spark-";
            // line 107
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"sparks\" data-spark=\"#";
            echo (((($context["token"] ?? null) == "kxa")) ? ("e84a73") : ("63aff9"));
            echo "\"></div>
                <div class=\"bg\">
                    <div></div>
                </div>
            </div>
            ";
            // line 112
            echo twig_call_macro($macros["this"], "macro_img", ["img/cader.png", ["width" => 1237, "height" => 1102, "cls" => "cader", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112)]], 112, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"txt\">
            <h3 class=\"h3\" data-show>";
            // line 115
            echo ($context["title"] ?? null);
            echo "</h3>
            <div class=\"add\" data-show>
                ";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "coinmarketcap", [], "any", false, false, false, 117) != "0")) {
                // line 118
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "coinmarketcap", [], "any", false, false, false, 118), "html", null, true);
                echo "\" title=\"CoinMarketCap\" rel=\"external noreferrer noopener\" target=\"_blank\" class=\"";
                echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "address", [], "any", false, false, false, 118), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 120
                echo "                    <span class=\"";
                echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "address", [], "any", false, false, false, 120), "html", null, true);
                echo "</span>
                ";
            }
            // line 122
            echo "            </div>
            <div class=\"p\" data-show>
                ";
            // line 124
            echo ($context["txt"] ?? null);
            echo "
            </div>
            <div class=\"bt\" data-show>
                ";
            // line 127
            echo twig_call_macro($macros["this"], "macro_bn", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "token", [], "any", false, false, false, 127), "doc", [], "any", false, false, false, 127), twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "doc", [], "any", false, false, false, 127), ["class" => "small", "target" => "_blank"]], 127, $context, $this->getSourceContext());
            echo "
                ";
            // line 128
            echo twig_call_macro($macros["this"], "macro_bn", ["Dextools", ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "dextools", [], "any", false, false, false, 128)) ? (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "dextools", [], "any", false, false, false, 128)) : ("#")), ["class" => "small dex", "rel" => "external noreferrer noopener", "target" => "_blank"]], 128, $context, $this->getSourceContext());
            echo "
                ";
            // line 129
            echo twig_call_macro($macros["this"], "macro_bn", ["Pancakeswap", ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "pancakeswap", [], "any", false, false, false, 129)) ? (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "pancakeswap", [], "any", false, false, false, 129)) : ("#")), ["class" => "small pck", "rel" => "external noreferrer noopener", "target" => "_blank"]], 129, $context, $this->getSourceContext());
            echo "
                ";
            // line 130
            echo twig_call_macro($macros["this"], "macro_bn", ["MEXC Global", ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "mexc", [], "any", false, false, false, 130)) ? (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "mexc", [], "any", false, false, false, 130)) : ("#")), ["class" => "small mxc", "rel" => "external noreferrer noopener", "target" => "_blank"]], 130, $context, $this->getSourceContext());
            echo "
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 137
    public function macro_Time($__d__ = null, $__author__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "d" => $__d__,
            "author" => $__author__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 138
            echo "    <time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["d"] ?? null), "c"), "html", null, true);
            echo "\" pubdate=\"pubdate\" itemprop=\"datePublished\">";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 138), "publish", [], "any", false, false, false, 138), ["%d%" => twig_date_format_filter($this->env,             // line 139
($context["d"] ?? null), "d"), "%m%" => twig_date_format_filter($this->env,             // line 140
($context["d"] ?? null), "m"), "%y%" => twig_date_format_filter($this->env,             // line 141
($context["d"] ?? null), "Y"), "%h%" => twig_date_format_filter($this->env,             // line 142
($context["d"] ?? null), "h"), "%i%" => twig_date_format_filter($this->env,             // line 143
($context["d"] ?? null), "i")]), "html", null, true);
            // line 144
            echo "</time>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 148
    public function macro_Category($__cat__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "cat" => $__cat__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 149
            echo "    ";
            if ((($context["cat"] ?? null) == 1)) {
                $context["category"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 149), "category", [], "any", false, false, false, 149), 1, [], "any", false, false, false, 149);
                // line 150
                echo "    ";
            } elseif ((($context["cat"] ?? null) == 2)) {
                $context["category"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 150), "category", [], "any", false, false, false, 150), 2, [], "any", false, false, false, 150);
                // line 151
                echo "    ";
            } elseif ((($context["cat"] ?? null) == 3)) {
                $context["category"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 151), "category", [], "any", false, false, false, 151), 3, [], "any", false, false, false, 151);
                // line 152
                echo "    ";
            } elseif ((($context["cat"] ?? null) == 4)) {
                $context["category"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 152), "category", [], "any", false, false, false, 152), 4, [], "any", false, false, false, 152);
                // line 153
                echo "    ";
            } elseif ((($context["cat"] ?? null) == 5)) {
                $context["category"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 153), "category", [], "any", false, false, false, 153), 5, [], "any", false, false, false, 153);
                // line 154
                echo "    ";
            } else {
                $context["category"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 154), "category", [], "any", false, false, false, 154), 7, [], "any", false, false, false, 154);
                // line 155
                echo "    ";
            }
            // line 156
            echo "    <div class=\"bn bdge bdge-";
            echo twig_escape_filter($this->env, ($context["cat"] ?? null), "html", null, true);
            echo "\" ";
            echo " ";
            echo " rel=\"category tag\"><span>";
            echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
            echo "</span></div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 160
    public function macro_Article($__a__ = null, $__n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "a" => $__a__,
            "n" => $__n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 161
            echo "    ";
            $macros["this"] = $this;
            // line 162
            echo "    ";
            $context["at"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "lang", [], "any", false, false, false, 162)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["en"] ?? null) : null);
            // line 163
            echo "    ";
            $context["title"] = twig_get_attribute($this->env, $this->source, ($context["at"] ?? null), "title", [], "any", false, false, false, 163);
            // line 164
            echo "    ";
            $context["href"] = ("devblog/" . $this->extensions['Core\Extension']->urlTransform(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "lang", [], "any", false, false, false, 164)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["en"] ?? null) : null), "title", [], "any", false, false, false, 164)));
            // line 165
            echo "    <article class=\"article\" itemtype=\"https://schema.org/CreativeWork\" itemscope=\"itemscope\">
        <a href=\"";
            // line 166
            echo $this->extensions['Core\Extension']->link($context, ($context["href"] ?? null));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" class=\"cov\">
            <span class=\"nb\">";
            // line 167
            echo twig_escape_filter($this->env, ($context["n"] ?? null), "html", null, true);
            echo "</span>
            <img width=\"1024\" height=\"536\" src=\"";
            // line 168
            echo twig_escape_filter($this->env, (($context["host"] ?? null) . twig_replace_filter($this->extensions['Core\Extension']->asset(twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "cover", [], "any", false, false, false, 168)), ["/assets/" => "assets/img/devblog/"])), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" loading=\"lazy\" itemprop=\"image\">
        </a>
        <header>
            <h2 itemprop=\"headline\">
                <a href=\"";
            // line 172
            echo $this->extensions['Core\Extension']->link($context, ($context["href"] ?? null));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</a>
            </h2>
            <div class=\"meta\">
                ";
            // line 175
            echo twig_call_macro($macros["this"], "macro_Category", [twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "category", [], "any", false, false, false, 175)], 175, $context, $this->getSourceContext());
            echo " ";
            echo twig_call_macro($macros["this"], "macro_Time", [twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "date", [], "any", false, false, false, 175)], 175, $context, $this->getSourceContext());
            echo "
            </div>
        </header>
        ";
            // line 183
            echo "    </article>  
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 187
    public function macro_Fd($__placeholder__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "placeholder" => $__placeholder__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 188
            echo "    <textarea rows=\"1\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
            echo "\" oninput=\"auto_grow(this)\"></textarea>
    <button data-remove>x</button>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 193
    public function macro_BlocArticle($__type__ = null, $__content__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 194
            echo "    ";
            $macros["this"] = $this;
            // line 195
            echo "    ";
            if ((($context["type"] ?? null) == "title")) {
                // line 196
                echo "        <h2";
                (((($context["content"] ?? null) == null)) ? (print (twig_escape_filter($this->env, (" data-bloc=" . ($context["type"] ?? null)), "html", null, true))) : (print ("")));
                echo ">";
                echo (((($context["content"] ?? null) == null)) ? (twig_call_macro($macros["this"], "macro_Fd", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "form", [], "any", false, false, false, 196), "title", [], "any", false, false, false, 196)], 196, $context, $this->getSourceContext())) : (nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "c", [], "any", false, false, false, 196), "html", null, true))));
                echo "</h2>
    ";
            } elseif ((            // line 197
($context["type"] ?? null) == "sub")) {
                // line 198
                echo "        <h3";
                (((($context["content"] ?? null) == null)) ? (print (twig_escape_filter($this->env, (" data-bloc=" . ($context["type"] ?? null)), "html", null, true))) : (print ("")));
                echo ">";
                echo (((($context["content"] ?? null) == null)) ? (twig_call_macro($macros["this"], "macro_Fd", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "form", [], "any", false, false, false, 198), "sub", [], "any", false, false, false, 198)], 198, $context, $this->getSourceContext())) : (nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "c", [], "any", false, false, false, 198), "html", null, true))));
                echo "</h3>
    ";
            } elseif ((            // line 199
($context["type"] ?? null) == "txt")) {
                // line 200
                echo "        <div class=\"p\"";
                (((($context["content"] ?? null) == null)) ? (print (twig_escape_filter($this->env, (" data-bloc=" . ($context["type"] ?? null)), "html", null, true))) : (print ("")));
                echo ">
            ";
                // line 201
                echo (((($context["content"] ?? null) == null)) ? (twig_call_macro($macros["this"], "macro_Fd", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "form", [], "any", false, false, false, 201), "txt", [], "any", false, false, false, 201)], 201, $context, $this->getSourceContext())) : (nl2br(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "c", [], "any", false, false, false, 201))));
                echo "
        </div>
    ";
            } elseif ((            // line 203
($context["type"] ?? null) == "img")) {
                // line 204
                echo "        ";
                if ((($context["content"] ?? null) == null)) {
                    // line 205
                    echo "            <figure data-img data-bloc=\"img\">
                <picture>
                    <img src=\"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset("img/none.png"), "html", null, true);
                    echo "\" alt=\"Ajouter une image\">
                </picture>
                <div class=\"controls\">
                    <input type=\"file\" name=\"contact_image_1\">
                </div>
                <figcaption><textarea rows=\"1\" placeholder=\"";
                    // line 212
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "form", [], "any", false, false, false, 212), "alt", [], "any", false, false, false, 212), "html", null, true);
                    echo "\" oninput=\"auto_grow(this)\"></textarea></figcaption>
                <button data-remove>x</button>
            </figure>
        ";
                } else {
                    // line 216
                    echo "            <figure>
                <picture>
                    <img src=\"";
                    // line 218
                    echo twig_escape_filter($this->env, (($context["host"] ?? null) . twig_replace_filter($this->extensions['Core\Extension']->asset(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "c", [], "any", false, false, false, 218)), ["/assets/" => "assets/img/devblog/"])), "html", null, true);
                    echo "\" loading=\"lazy\" alt=\"";
                    echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "a", [], "any", false, false, false, 218)), "html", null, true);
                    echo "\">
                </picture>
                <figcaption>";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "a", [], "any", false, false, false, 220);
                    echo " © Kryxivia</figcaption>
            </figure>
        ";
                }
                // line 223
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 227
    public function macro_Press($__name__ = null, $__href__ = null, $__logo__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "href" => $__href__,
            "logo" => $__logo__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 228
            echo "    ";
            $macros["this"] = $this;
            // line 229
            echo "    <div class=\"press blc\">
        <a href=\"";
            // line 230
            echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "press", [], "any", false, false, false, 230), "read", [], "any", false, false, false, 230) . " • ") . ($context["name"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" rel=\"external noreferrer noopener\">
            ";
            // line 231
            echo twig_call_macro($macros["this"], "macro_img", [("img/press/" . twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "img", [], "any", false, false, false, 231)), ["width" => twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "width", [], "any", false, false, false, 231), "height" => twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "height", [], "any", false, false, false, 231), "alt" => ($context["name"] ?? null)]], 231, $context, $this->getSourceContext());
            echo "
        </a>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 237
    public function macro_Partners($__name__ = null, $__href__ = null, $__logo__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "href" => $__href__,
            "logo" => $__logo__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 238
            echo "    ";
            $macros["this"] = $this;
            // line 239
            echo "    <div class=\"partner blc\">
        ";
            // line 240
            if (($context["href"] ?? null)) {
                // line 241
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" target=\"_blank\" rel=\"external noreferrer noopener\">
                ";
                // line 242
                echo twig_call_macro($macros["this"], "macro_img", [("img/partners/" . twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "img", [], "any", false, false, false, 242)), ["width" => twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "width", [], "any", false, false, false, 242), "height" => twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "height", [], "any", false, false, false, 242), "alt" => ($context["name"] ?? null)]], 242, $context, $this->getSourceContext());
                echo "
            </a>
        ";
            } else {
                // line 245
                echo "            <div>
                ";
                // line 246
                echo twig_call_macro($macros["this"], "macro_img", [("img/partners/" . twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "img", [], "any", false, false, false, 246)), ["width" => twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "width", [], "any", false, false, false, 246), "height" => twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "height", [], "any", false, false, false, 246), "alt" => ($context["name"] ?? null)]], 246, $context, $this->getSourceContext());
                echo "
            </div>
        ";
            }
            // line 249
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 253
    public function macro_li($__txt__ = null, $__href__ = null, $__target__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "txt" => $__txt__,
            "href" => $__href__,
            "target" => $__target__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 254
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["txt"] ?? null), "html", null, true);
            echo "\"";
            echo ((($context["target"] ?? null)) ? (" target=_blank") : (""));
            echo ">";
            echo twig_escape_filter($this->env, ($context["txt"] ?? null), "html", null, true);
            echo "</a></li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 258
    public function macro_liF($__name__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 259
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" title=\"Kryxivia ";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</a></li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 263
    public function macro_Rs($__name__ = null, $__link__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "link" => $__link__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 264
            echo "    ";
            $macros["this"] = $this;
            // line 265
            echo "    ";
            $context["title"] = ("Kryxivia " . ($context["name"] ?? null));
            // line 266
            echo "    <div>
        <a href=\"";
            // line 267
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_replace_filter(($context["icon"] ?? null), ["xmlns:v=\"https://vecta.io/nano\"" => "", "xmlns=\"http://www.w3.org/2000/svg\"" => "", "</svg>" => (("<title>" . ($context["title"] ?? null)) . "</title></svg>")]);
            echo "</a>
        ";
            // line 268
            echo twig_call_macro($macros["this"], "macro_img", ["img/cader.png", ["width" => 1100, "height" => 1100, "cls" => "cadre", "alt" => ($context["name"] ?? null)]], 268, $context, $this->getSourceContext());
            echo "
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 273
    public function macro_mexc(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 274
            echo "    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"168\" height=\"21\" fill=\"none\" xmlns:v=\"https://vecta.io/nano\"><title>MEXC Global</title><g clip-path=\"url(#B)\"><path d=\"M32.668 14.379l-7.18-12.454c-1.574-2.596-5.412-2.623-6.931.11l-7.539 12.951c-1.408 2.375.331 5.357 3.148 5.357h15.105c2.844 0 4.971-3.065 3.397-5.965z\" fill=\"#00b897\"/><path d=\"M22.312 15.345l-.442-.773-1.325-2.264L14.47 1.759c-1.574-2.347-5.302-2.541-6.876.414L.525 14.406c-1.464 2.568.276 5.909 3.452 5.937h15.022 6.407 3.811c-3.894.028-5.136-1.988-6.904-4.998z\" fill=\"#76fcb2\"/><path d=\"M22.312 15.345l-.442-.773-1.325-2.264-3.921-6.904-5.633 9.61c-1.408 2.375.331 5.357 3.148 5.357h4.832 6.407 3.838c-3.921-.028-5.136-2.016-6.904-5.026z\" fill=\"url(#A)\"/><g fill=\"#00b897\"><path d=\"M165.813 19.377c-1.022 0-1.823-.221-2.43-.607-.636-.414-.967-1.022-.967-1.85V4.879h1.602a1.08 1.08 0 0 1 1.077 1.077V16.56c0 .028 0 .525.414.939.248.248.552.387.966.387h.304c.111 0 .221.11.221.221v1.298l-1.187-.028zm-34.518-.001c-1.657 0-3.01-.442-4.032-1.326-.524-.442-.883-.939-1.104-1.491s-.332-1.353-.332-2.43c0-1.049.111-1.878.332-2.43.193-.525.552-.994 1.077-1.436 1.021-.884 2.374-1.325 4.031-1.325s3.01.442 4.032 1.325c.525.442.884.939 1.077 1.436.221.58.331 1.381.331 2.43 0 1.077-.11 1.878-.331 2.43s-.58 1.049-1.105 1.491c-.966.884-2.319 1.326-3.976 1.326zm0-8.919c-1.823 0-2.734 1.243-2.734 3.7 0 2.485.911 3.728 2.734 3.728s2.734-1.243 2.734-3.7c0-2.485-.939-3.728-2.734-3.728zm11.432 8.92c-1.436 0-2.761-.387-3.893-1.132-.111-.11-.332-.248-.608-.414-.055-.028-.11-.111-.11-.193V4.879h1.629a1.1 1.1 0 0 1 1.077 1.077v3.728l.497-.276c.58-.304 1.353-.442 2.347-.442 1.74 0 3.065.525 3.949 1.546.773.911 1.16 2.126 1.16 3.617s-.442 2.706-1.326 3.59c-1.022 1.105-2.623 1.657-4.722 1.657zm.276-8.919c-.607 0-1.298.221-2.071.69l-.11.055v5.992l.11.083c.608.387 1.326.58 2.071.58.994 0 1.768-.414 2.292-1.243.442-.663.691-1.519.691-2.485 0-2.43-1.022-3.673-2.983-3.673zm12.151 8.891c-3.038 0-4.943-1.988-4.943-5.219 0-3.203 1.877-5.191 4.887-5.191 1.16 0 2.154.304 2.955.884l.166.11v-.801h2.126c.138 0 .221.11.221.221v9.803h-2.375v-.884l-.166.138c-.662.607-1.712.939-2.871.939zm.552-8.643c-1.906 0-3.038 1.464-3.038 3.424s1.132 3.479 3.038 3.479c.607 0 1.657-.055 2.485-.884l.028-.028v-5.026l-.028-.028c-.58-.663-1.436-.939-2.485-.939z\"/></g><g fill=\"#fff\"><path d=\"M57.04 19.238V4.851h11.957v.911c0 .718-.58 1.298-1.298 1.298h-7.677v3.866H67.7v2.209h-7.677v3.866H67.7c.718 0 1.298.58 1.298 1.298v.911l-11.957.028zM86.173 4.851h-2.817a1.66 1.66 0 0 0-1.326.635l-3.397 4.28-3.397-4.253a1.66 1.66 0 0 0-1.325-.635h-2.817l5.716 7.18-5.716 7.18h2.817a1.66 1.66 0 0 0 1.325-.635l3.397-4.253 3.424 4.28c.331.387.801.635 1.325.635h2.817l-5.716-7.18 5.689-7.235zm-38.494 12.87l3.921-6.848v8.34h2.982V4.825h-1.85c-.58 0-1.132.304-1.408.828l-4.694 8.56-4.694-8.56a1.58 1.58 0 0 0-1.408-.828h-1.85v14.387h2.982v-8.34l3.921 6.848h2.099zm46.282 1.683c-4.142.055-7.511-3.203-7.539-7.345 0-2.264.69-4.142 1.988-5.44 1.298-1.27 3.176-1.961 5.412-1.961 2.623 0 4.694.911 6.185 2.679l-.939.801a1.66 1.66 0 0 1-2.071.055c-.828-.635-1.878-.939-3.065-.939-2.927 0-4.667 1.767-4.667 4.75 0 3.01 1.795 4.86 4.667 4.86 1.215 0 2.237-.331 3.065-.939.608-.469 1.464-.442 2.071.055l.939.801c-1.491 1.74-3.479 2.623-6.047 2.623z\"/></g><g fill=\"#00b897\"><path d=\"M112.324 19.404c-4.639 0-7.511-2.817-7.511-7.345s2.872-7.345 7.456-7.345c2.209 0 4.059.635 5.495 1.933l-.69.773c-.304.331-.746.525-1.188.525-.248 0-.497-.055-.718-.166-.856-.442-1.85-.663-2.899-.663-2.983 0-4.833 1.905-4.833 4.971 0 3.093 1.933 4.998 5.026 4.998 1.491 0 2.651-.276 3.507-.884l.055-.028v-2.955h-3.286v-.966c0-.718.58-1.298 1.298-1.298h4.059c.111 0 .221.11.221.221v6.379c-1.408 1.215-3.424 1.85-5.992 1.85zm11.322-.027c-1.022 0-1.823-.221-2.43-.607-.635-.414-.967-1.022-.967-1.85V4.879h1.602a1.08 1.08 0 0 1 1.077 1.077V16.56c0 .028 0 .525.414.939a1.29 1.29 0 0 0 .966.387h.304c.111 0 .221.11.221.221v1.298l-1.187-.028z\"/></g></g><defs><linearGradient id=\"A\" x1=\"8.986\" y1=\"10.648\" x2=\"26.437\" y2=\"17.096\" gradientUnits=\"userSpaceOnUse\"><stop stop-color=\"#53e57a\" stop-opacity=\"0\"/><stop offset=\"1\" stop-color=\"#00a977\"/></linearGradient><clipPath id=\"B\"><path fill=\"#fff\" d=\"M0 0h168v21H0z\"/></clipPath></defs></svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 278
    public function macro_pancake(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 279
            echo "    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 160 26\" width=\"20\" height=\"150\" xmlns:v=\"https://vecta.io/nano\"><title>Pancakeswap</title><path d=\"M30.852 19.757c-.372 0-.635-.077-.789-.231-.141-.154-.212-.398-.212-.731V7.651c0-.334.077-.577.231-.731.154-.167.411-.25.77-.25h4.716c1.796 0 3.118.379 3.965 1.136s1.27 1.886 1.27 3.387c0 1.488-.423 2.611-1.27 3.368-.834.744-2.156 1.116-3.965 1.116H33.74v3.118c0 .334-.077.577-.231.731s-.417.231-.789.231h-1.867zm4.408-6.871c.526 0 .93-.141 1.213-.423.295-.282.443-.706.443-1.27 0-.577-.148-1.007-.443-1.29-.282-.282-.686-.423-1.213-.423h-1.52v3.407h1.52zm10.088 7.16c-1.206 0-2.175-.385-2.906-1.155-.719-.783-1.078-1.88-1.078-3.291 0-1.078.244-2.021.731-2.829.5-.808 1.2-1.431 2.098-1.867.911-.449 1.957-.674 3.137-.674.975 0 1.835.109 2.579.327.757.205 1.45.507 2.079.905v7.699c0 .244-.045.404-.135.481s-.269.116-.539.116h-1.963c-.141 0-.25-.019-.327-.058a.58.58 0 0 1-.192-.231l-.25-.577c-.372.398-.821.687-1.347.866-.513.192-1.142.289-1.886.289zm1.444-2.618c.5 0 .892-.122 1.174-.366s.423-.59.423-1.039v-3.002c-.244-.116-.552-.173-.924-.173-.68 0-1.225.237-1.636.712-.398.475-.597 1.142-.597 2.002 0 1.245.52 1.867 1.559 1.867zm7.875 2.329c-.372 0-.635-.077-.789-.231s-.231-.398-.231-.731v-7.679c0-.231.038-.385.115-.462.09-.09.269-.135.539-.135h1.982c.154 0 .269.026.346.077.09.039.141.116.154.231l.096.577c.359-.359.828-.642 1.405-.847.59-.218 1.245-.327 1.963-.327 1.039 0 1.88.295 2.521.885.642.577.962 1.437.962 2.579v5.1c0 .334-.077.577-.231.731-.141.154-.398.231-.77.231h-1.867c-.372 0-.642-.077-.808-.231-.154-.154-.231-.398-.231-.731v-4.85c0-.385-.083-.661-.25-.828s-.43-.25-.789-.25c-.385 0-.693.103-.924.308-.218.205-.327.488-.327.847v4.773c0 .334-.077.577-.231.731-.141.154-.398.231-.77.231h-1.867zm15.868.289c-1.796 0-3.182-.417-4.157-1.251s-1.463-2.047-1.463-3.638c0-.975.225-1.835.674-2.579s1.097-1.322 1.944-1.732c.86-.411 1.873-.616 3.041-.616.885 0 1.63.083 2.233.25.616.167 1.161.423 1.636.77.141.09.212.205.212.346 0 .103-.051.237-.154.404l-.789 1.367c-.09.18-.199.269-.327.269-.077 0-.199-.051-.366-.154a4.59 4.59 0 0 0-.982-.481c-.295-.103-.667-.154-1.116-.154-.642 0-1.161.205-1.559.616-.385.411-.577.975-.577 1.694 0 .731.199 1.296.597 1.694.398.385.943.577 1.636.577.411 0 .783-.058 1.116-.173s.674-.276 1.02-.481c.18-.103.308-.154.385-.154.116 0 .218.09.308.269l.866 1.482c.064.128.096.231.096.308 0 .116-.077.225-.231.327a6.08 6.08 0 0 1-1.771.77c-.629.18-1.386.27-2.271.27zm9.153 0c-1.206 0-2.175-.385-2.906-1.155-.719-.783-1.078-1.88-1.078-3.291 0-1.078.244-2.021.731-2.829.5-.808 1.2-1.431 2.098-1.867.911-.449 1.957-.674 3.137-.674.975 0 1.835.109 2.579.327.757.205 1.45.507 2.079.905v7.699c0 .244-.045.404-.135.481s-.269.116-.539.116h-1.963c-.141 0-.25-.019-.327-.058-.077-.051-.141-.128-.192-.231l-.25-.577c-.372.398-.821.687-1.347.866-.513.192-1.142.289-1.886.289zm1.444-2.618c.5 0 .892-.122 1.174-.366s.423-.59.423-1.039v-3.002c-.244-.116-.552-.173-.924-.173-.68 0-1.225.237-1.636.712-.398.475-.597 1.142-.597 2.002 0 1.245.52 1.867 1.559 1.867zm17.286 1.598a.51.51 0 0 1 .135.346c0 .115-.038.212-.115.289-.077.064-.18.096-.308.096h-2.983c-.18 0-.314-.013-.404-.039-.077-.038-.16-.109-.25-.212l-2.618-3.561v2.849c0 .334-.077.577-.231.731s-.417.231-.789.231h-1.867c-.372 0-.635-.077-.789-.231-.141-.154-.212-.398-.212-.731V7.651c0-.334.077-.577.231-.731.154-.167.411-.25.77-.25h1.867c.372 0 .635.083.789.25.154.154.231.398.231.731v6.448l2.541-3.31c.077-.103.16-.173.25-.212s.224-.058.404-.058h2.983c.128 0 .225.039.289.116.077.064.116.154.116.269a.51.51 0 0 1-.135.346l-3.291 3.772 3.387 4.003zm6.25 1.02c-1.078 0-2.04-.18-2.887-.539-.834-.359-1.495-.898-1.983-1.617s-.731-1.598-.731-2.637c0-1.63.462-2.874 1.386-3.734s2.252-1.29 3.984-1.29c1.694 0 2.977.424 3.849 1.27.886.834 1.328 1.995 1.328 3.484 0 .641-.282.962-.847.962h-6.043c0 .552.205.975.616 1.27.423.295 1.058.443 1.905.443.526 0 .963-.045 1.309-.135a5.45 5.45 0 0 0 1.078-.443c.154-.064.257-.096.308-.096.115 0 .212.077.289.231l.654 1.232a.74.74 0 0 1 .096.289c0 .116-.077.225-.231.327-.526.346-1.122.597-1.79.751s-1.43.231-2.29.231zm1.482-6.005c0-.488-.141-.866-.424-1.136s-.705-.404-1.27-.404-.994.141-1.289.423c-.295.269-.443.641-.443 1.116h3.426zm10.061 6.005a13.81 13.81 0 0 1-3.06-.327c-.962-.231-1.739-.552-2.329-.962-.218-.141-.327-.289-.327-.443 0-.103.038-.212.115-.327l.943-1.501c.103-.154.206-.231.308-.231.065 0 .174.045.328.135.474.27 1.013.488 1.616.654s1.2.25 1.79.25c.603 0 1.046-.09 1.328-.269.295-.18.443-.468.443-.866 0-.385-.16-.686-.481-.905-.308-.218-.892-.494-1.752-.828-1.296-.488-2.309-1.033-3.041-1.636-.718-.616-1.077-1.45-1.077-2.502 0-1.27.455-2.239 1.366-2.906s2.124-1.001 3.638-1.001c1.052 0 1.95.096 2.694.289.757.18 1.399.462 1.925.847.218.167.327.321.327.462 0 .09-.038.192-.115.308l-.943 1.501c-.116.154-.219.231-.308.231-.065 0-.174-.045-.328-.135-.744-.488-1.629-.731-2.656-.731-.551 0-.975.09-1.27.269s-.443.475-.443.885c0 .282.077.513.231.693a2.2 2.2 0 0 0 .616.481 16.5 16.5 0 0 0 1.232.5l.366.135c.949.372 1.693.731 2.232 1.078.552.334.969.751 1.251 1.251.283.488.424 1.103.424 1.848 0 1.142-.43 2.053-1.29 2.733-.847.68-2.098 1.02-3.753 1.02zm9.132-.289c-.192 0-.34-.032-.443-.096s-.179-.192-.23-.385l-2.483-8.315c-.026-.077-.039-.135-.039-.173 0-.18.129-.27.385-.27h2.541c.167 0 .288.032.365.096.077.051.129.141.154.269l1.04 4.369 1.308-3.522c.065-.154.129-.257.193-.308.077-.064.205-.096.385-.096h1.212c.18 0 .302.032.366.096.077.051.148.154.212.308l1.289 3.522 1.059-4.369c.038-.128.09-.218.154-.269.064-.064.18-.096.346-.096h2.56c.257 0 .385.09.385.27a.63.63 0 0 1-.038.173l-2.502 8.315c-.052.192-.129.321-.231.385-.09.064-.231.096-.424.096h-1.886c-.18 0-.314-.032-.404-.096-.09-.077-.167-.205-.231-.385l-1.27-3.484-1.271 3.484c-.051.18-.128.308-.231.385-.09.064-.224.096-.404.096h-1.867zm15.638.289c-1.206 0-2.175-.385-2.906-1.155-.719-.783-1.078-1.88-1.078-3.291 0-1.078.244-2.021.731-2.829.501-.808 1.2-1.431 2.098-1.867.911-.449 1.957-.674 3.137-.674.975 0 1.835.109 2.579.327.757.205 1.45.507 2.079.905v7.699c0 .244-.045.404-.135.481s-.269.116-.539.116h-1.963c-.141 0-.25-.019-.327-.058a.58.58 0 0 1-.192-.231l-.251-.577c-.372.398-.821.687-1.347.866-.513.192-1.142.289-1.886.289zm1.443-2.618c.501 0 .892-.122 1.174-.366s.424-.59.424-1.039v-3.002c-.244-.116-.552-.173-.924-.173-.68 0-1.225.237-1.636.712-.398.475-.597 1.142-.597 2.002 0 1.245.52 1.867 1.559 1.867zm7.856 6.217c-.372 0-.635-.077-.789-.231-.141-.154-.212-.398-.212-.731V11.654c.578-.411 1.303-.751 2.175-1.02s1.784-.404 2.733-.404c3.875 0 5.813 1.642 5.813 4.927 0 1.488-.411 2.675-1.232 3.561s-1.982 1.328-3.484 1.328a4.9 4.9 0 0 1-1.231-.154c-.385-.103-.706-.244-.963-.423v3.214c0 .334-.077.577-.231.731s-.417.231-.789.231h-1.79zm4.177-6.197c.552 0 .962-.205 1.232-.616.282-.423.423-.988.423-1.694 0-.834-.167-1.418-.5-1.751-.321-.346-.822-.52-1.502-.52-.436 0-.782.058-1.039.173v3.06c0 .436.122.77.366 1.001s.584.346 1.02.346z\" fill=\"#fff\"/><path fill-rule=\"evenodd\" d=\"M4.39 4.5A3.27 3.27 0 0 1 7.6.635c1.804 0 3.266 1.462 3.266 3.266v4.026l1.374-.048 1.321.044V3.901c0-1.804 1.462-3.266 3.266-3.266a3.27 3.27 0 0 1 3.21 3.866l-.884 4.733c3.033 1.324 5.327 3.624 5.327 6.515v1.749c0 2.377-1.572 4.367-3.771 5.71-2.215 1.354-5.212 2.159-8.47 2.159s-6.254-.805-8.47-2.159C1.572 21.863 0 19.873 0 17.497v-1.749c0-2.875 2.27-5.166 5.278-6.493L4.39 4.5zm13.631 5.355l1.034-5.538a2.27 2.27 0 0 0-2.228-2.683c-1.252 0-2.267 1.015-2.267 2.267v5.124l-.999-.1-1.321-.047-1.374.051-.999.103V3.901c0-1.252-1.015-2.267-2.267-2.267a2.27 2.27 0 0 0-2.228 2.683L6.41 9.873C3.166 11.078.999 13.259.999 15.748v1.749c0 3.794 5.033 6.87 11.241 6.87s11.241-3.076 11.241-6.87v-1.749c0-2.502-2.189-4.692-5.46-5.893z\" fill=\"#633001\"/><path d=\"M23.482 17.497c0 3.794-5.033 6.87-11.241 6.87S.999 21.291.999 17.497v-1.749h22.482v1.749z\" fill=\"#fedc90\"/><path fill-rule=\"evenodd\" d=\"M5.372 4.317A2.27 2.27 0 0 1 7.6 1.634c1.252 0 2.267 1.015 2.267 2.267v5.131a18.24 18.24 0 0 1 2.373-.153c.795 0 1.571.05 2.32.146V3.901c0-1.252 1.015-2.267 2.267-2.267a2.27 2.27 0 0 1 2.228 2.683l-1.034 5.538c3.271 1.201 5.461 3.391 5.461 5.893 0 3.794-5.033 6.87-11.241 6.87S.999 19.542.999 15.748c0-2.489 2.167-4.67 5.411-5.875L5.372 4.317z\" fill=\"#d1884f\"/><use xlink:href=\"#B\"/><use xlink:href=\"#B\" x=\"8.618\"/><defs ><path class=\"ey\" id=\"B\" d=\"M9.118 15.249c0 1.035-.559 1.874-1.249 1.874s-1.249-.839-1.249-1.874.559-1.873 1.249-1.873 1.249.839 1.249 1.874z\"/></defs></svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "inc/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1153 => 279,  1141 => 278,  1131 => 274,  1119 => 273,  1107 => 268,  1097 => 267,  1094 => 266,  1091 => 265,  1088 => 264,  1073 => 263,  1057 => 259,  1043 => 258,  1025 => 254,  1010 => 253,  1000 => 249,  994 => 246,  991 => 245,  985 => 242,  978 => 241,  976 => 240,  973 => 239,  970 => 238,  955 => 237,  942 => 231,  936 => 230,  933 => 229,  930 => 228,  915 => 227,  905 => 223,  899 => 220,  892 => 218,  888 => 216,  881 => 212,  873 => 207,  869 => 205,  866 => 204,  864 => 203,  859 => 201,  854 => 200,  852 => 199,  845 => 198,  843 => 197,  836 => 196,  833 => 195,  830 => 194,  816 => 193,  803 => 188,  790 => 187,  780 => 183,  772 => 175,  762 => 172,  753 => 168,  749 => 167,  743 => 166,  740 => 165,  737 => 164,  734 => 163,  731 => 162,  728 => 161,  714 => 160,  698 => 156,  695 => 155,  691 => 154,  687 => 153,  683 => 152,  679 => 151,  675 => 150,  671 => 149,  658 => 148,  648 => 144,  646 => 143,  645 => 142,  644 => 141,  643 => 140,  642 => 139,  638 => 138,  624 => 137,  610 => 130,  606 => 129,  602 => 128,  598 => 127,  592 => 124,  588 => 122,  580 => 120,  570 => 118,  568 => 117,  563 => 115,  557 => 112,  547 => 107,  542 => 105,  534 => 101,  531 => 100,  515 => 99,  504 => 95,  497 => 91,  492 => 89,  486 => 88,  482 => 87,  476 => 85,  473 => 84,  470 => 83,  467 => 82,  464 => 81,  461 => 80,  458 => 79,  444 => 78,  433 => 74,  429 => 73,  404 => 72,  401 => 71,  398 => 70,  395 => 69,  392 => 68,  389 => 67,  386 => 66,  383 => 65,  380 => 64,  365 => 63,  353 => 58,  349 => 56,  346 => 55,  334 => 54,  321 => 48,  317 => 47,  310 => 44,  302 => 43,  298 => 41,  295 => 40,  292 => 39,  278 => 38,  266 => 33,  262 => 32,  258 => 31,  255 => 30,  252 => 29,  236 => 28,  215 => 22,  211 => 21,  206 => 20,  194 => 18,  191 => 17,  177 => 16,  160 => 11,  154 => 10,  140 => 9,  120 => 4,  115 => 3,  101 => 2,  96 => 276,  93 => 271,  90 => 261,  87 => 256,  84 => 251,  81 => 235,  78 => 225,  75 => 191,  72 => 185,  68 => 157,  64 => 145,  61 => 135,  58 => 97,  55 => 76,  52 => 61,  49 => 52,  46 => 36,  43 => 26,  40 => 14,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{# css #}
{% macro css(css, mode = null) %}
    {% for c in css %}
        <link rel=\"{{mode == 'preload' ? 'preload' : 'stylesheet'}}\" href=\"{{asset('css/' ~ c ~ '.css')}}\" {{mode == 'preload' ? 'as=\"style\"' : 'media=\"all\"'}}>
    {% endfor %}
{% endmacro %}

{# js #}
{% macro js(js, f) %}
    {% for j in js if f in j %}
        <script src=\"{{asset('js/' ~ j ~ '.js')}}\" defer></script>
    {% endfor %}
{% endmacro %}

{# img #}
{% macro img(img, o) %}
    {% if '.svg' in img %}
        <img src=\"{{asset(img)}}\" width=\"{{o.width}}\" height=\"{{o.height}}\" loading=\"lazy\" alt=\"{{o.alt|striptags}}\">
    {% else %}
        <picture{{o.cls != null ? ' class='~o.cls}}>
            <source srcset=\"{{asset(img|replace({'jpg':'','png':''})~'webp')}}\" type=\"image/webp\">                
            <img src=\"{{asset(img)}}\" width=\"{{o.width}}\" height=\"{{o.height}}\" loading=\"{{o.lazy ? 'eager' : 'lazy'}}\" alt=\"{{o.alt|striptags}}\">
        </picture>
    {% endif %}
{% endmacro %}

{# info #}
{% macro Info(cls, img, name, info) %}
    {% import _self as this %}
    <li data-show>
        {{this.img(img, {width:450,height:450,cls:cls,alt:name})}}
        <small>{{name|raw}}</small>
        <strong>{{info|raw}}</strong>
    </li>
{% endmacro %}

{# team #}
{% macro Team(p, o) %}
    {% import _self as this %}
    {% set photo = p.photo != null ? p.photo : 'none' %}
    <div class=\"tem\">
        <div class=\"illu\">
            {% if p.lang != null %}<img src=\"{{asset('img/lang/'~p.lang~'.svg')}}\" width=\"30\" height=\"30\" loading=\"lazy\" alt=\"{{p.lang}}\">{% endif %}
            {{this.img('img/team/'~photo~'.jpg', {width:100,height:100,alt:p.name~' Kryxivia'})}}
        </div>
        <div class=\"txt\">
            <h3 class=\"name\">{{p.name}}</h3>
            <div class=\"post\"><span class=\"dr\">{{p.poste}}</span></div>
        </div>
    </div>
{% endmacro %}

{# kxa #}
{% macro kxa() %}
    {% import _self as this %}
    <span class=\"kxa-c\">
        <span class=\"kxa\">\$KXA</span>
        {{this.img('img/kxa-icon.png', {width:51,height:64,alt:'\$KXA'})}}
    </span>
{% endmacro %}

{# button #}
{% macro bn(title, link, o) %}
    {% set t = title %}
    {% if link in ['btn','bn','button'] %}
        {% set start = 'button' %}
        {% set end = 'button' %}
    {% else %}
        {% set start = 'a href='~link %}
        {% set end = 'a' %}
    {% endif %}
    <{{start}} title=\"{{t|striptags}}\" class=\"bn{{o.class ? ' '~o.class}}{{link == '#' ? ' disabled'}}\" {% for key, a in o %}{%if key in ['class','title'] != true %} {{key}}=\"{{a}}\"{% endif %}{% endfor %}>
    <span>{{t|raw}}</span>
    </{{start}}>
{% endmacro %}

{# title #}
{% macro Title(title, o) %}
    {% import _self as this %}
    {% if o.article %}
        {% set d = 'header' %}
    {% else %}
        {% set d = 'div' %}
    {% endif %}
    <{{d}} id=\"t\">
        <div class=\"ct\">
            {{o.category ? this.Category(o.category)}}
            <h1{{o.article ? ' itemprop=headline'}}>{{title|raw}}</h1>
            {{o.time ? this.Time(o.time)}}
        </div>
        {{this.img('img/bottom-ix.png', {width:2000,height:744,cls:'b-ix',alt:lang.all.name})}}
        <div class=\"bg\">
            <div></div>
        </div>
    </{{d}}>
{% endmacro %}

{# token show #}
{% macro TokenShow(token, title, txt, o) %}
    {% import _self as this %}
    <div class=\"tkbc tkbc-{{token}}\">
        <div class=\"illu\">
            <div class=\"tokc\">
                <div class=\"tok\">
                    {{this.img('img/'~token~'-token_kryxivia.png', {width:415,height:513,alt:title})}}
                </div>
                <div id=\"spark-{{token}}\" class=\"sparks\" data-spark=\"#{{token == 'kxa' ? 'e84a73' : '63aff9'}}\"></div>
                <div class=\"bg\">
                    <div></div>
                </div>
            </div>
            {{this.img('img/cader.png', {width:1237,height:1102,cls:'cader',alt:lang.all.name})}}
        </div>
        <div class=\"txt\">
            <h3 class=\"h3\" data-show>{{title|raw}}</h3>
            <div class=\"add\" data-show>
                {% if o.coinmarketcap != '0' %}
                    <a href=\"{{o.coinmarketcap}}\" title=\"CoinMarketCap\" rel=\"external noreferrer noopener\" target=\"_blank\" class=\"{{token}}\">{{o.address}}</a>
                {% else %}
                    <span class=\"{{token}}\">{{o.address}}</span>
                {% endif %}
            </div>
            <div class=\"p\" data-show>
                {{txt|raw}}
            </div>
            <div class=\"bt\" data-show>
                {{this.bn(lang.token.doc, o.doc, {class:'small',target:'_blank'})}}
                {{this.bn('Dextools', o.dextools ? o.dextools : '#', {class:'small dex',rel:'external noreferrer noopener',target:'_blank'})}}
                {{this.bn('Pancakeswap', o.pancakeswap ? o.pancakeswap : '#', {class:'small pck',rel:'external noreferrer noopener',target:'_blank'})}}
                {{this.bn('MEXC Global', o.mexc ? o.mexc : '#', {class:'small mxc',rel:'external noreferrer noopener',target:'_blank'})}}
            </div>
        </div>
    </div>
{% endmacro %}

{# date #}
{% macro Time(d, author) %}
    <time datetime=\"{{d|date('c')}}\" pubdate=\"pubdate\" itemprop=\"datePublished\">{{lang.devblog.publish|replace({
        '%d%':d|date('d'),
        '%m%':d|date('m'),
        '%y%':d|date('Y'),
        '%h%':d|date('h'),
        '%i%':d|date('i')
    })}}</time>
{% endmacro %}  

{# category #}
{% macro Category(cat) %}
    {% if cat == 1 %}{% set category = lang.devblog.category.1 %}
    {% elseif cat == 2 %}{% set category = lang.devblog.category.2 %}
    {% elseif cat == 3 %}{% set category = lang.devblog.category.3 %}
    {% elseif cat == 4 %}{% set category = lang.devblog.category.4 %}
    {% elseif cat == 5 %}{% set category = lang.devblog.category.5 %}
    {% else %}{% set category = lang.devblog.category.7 %}
    {% endif %}
    <div class=\"bn bdge bdge-{{cat}}\" {# href=\"{{link('devblog/category/'~cat~'/'~category|urlTransform)}}\" #} {# title=\"{{category}}\" #} rel=\"category tag\"><span>{{category}}</span></div>
{% endmacro %}  

{# article #}
{% macro Article(a, n) %}
    {% import _self as this %}
    {% set at = a.lang['en'] %}
    {% set title = at.title %}
    {% set href = 'devblog/'~a.lang['en'].title|urlTransform %}
    <article class=\"article\" itemtype=\"https://schema.org/CreativeWork\" itemscope=\"itemscope\">
        <a href=\"{{link(href)}}\" title=\"{{title}}\" class=\"cov\">
            <span class=\"nb\">{{n}}</span>
            <img width=\"1024\" height=\"536\" src=\"{{host~asset(a.cover)|replace({'/assets/':'assets/img/devblog/'})}}\" alt=\"{{title}}\" loading=\"lazy\" itemprop=\"image\">
        </a>
        <header>
            <h2 itemprop=\"headline\">
                <a href=\"{{link(href)}}\" title=\"{{title}}\" rel=\"bookmark\">{{title}}</a>
            </h2>
            <div class=\"meta\">
                {{this.Category(a.category)}} {{this.Time(a.date)}}
            </div>
        </header>
        {# <div class=\"entry-content clear\" itemprop=\"text\">
            <p>I’m happy to announce that GreenGeeks has partnered with One Tree Planted to plant trees! For every customer that signs up for our web hosting …</p>
                <a title=\"{{title}}\" href=\"https://www.greengeeks.com/blog/planting-trees/\"> Read More »</a>
            </p>
        </div> #}
    </article>  
{% endmacro %}

{# bloc fd #}
{% macro Fd(placeholder) %}
    <textarea rows=\"1\" placeholder=\"{{placeholder}}\" oninput=\"auto_grow(this)\"></textarea>
    <button data-remove>x</button>
{% endmacro %}

{# bloc article #}
{% macro BlocArticle(type, content) %}
    {% import _self as this %}
    {% if type == 'title' %}
        <h2{{content == null ? ' data-bloc='~type}}>{{content == null ? this.Fd(lang.form.title) : content.c|nl2br|raw}}</h2>
    {% elseif type == 'sub' %}
        <h3{{content == null ? ' data-bloc='~type}}>{{content == null ? this.Fd(lang.form.sub) : content.c|nl2br|raw}}</h3>
    {% elseif type == 'txt' %}
        <div class=\"p\"{{content == null ? ' data-bloc='~type}}>
            {{content == null ? this.Fd(lang.form.txt) : content.c|raw|nl2br}}
        </div>
    {% elseif type == 'img' %}
        {% if content == null %}
            <figure data-img data-bloc=\"img\">
                <picture>
                    <img src=\"{{asset('img/none.png')}}\" alt=\"Ajouter une image\">
                </picture>
                <div class=\"controls\">
                    <input type=\"file\" name=\"contact_image_1\">
                </div>
                <figcaption><textarea rows=\"1\" placeholder=\"{{lang.form.alt}}\" oninput=\"auto_grow(this)\"></textarea></figcaption>
                <button data-remove>x</button>
            </figure>
        {% else %}
            <figure>
                <picture>
                    <img src=\"{{host~asset(content.c)|replace({'/assets/':'assets/img/devblog/'})}}\" loading=\"lazy\" alt=\"{{content.a|striptags}}\">
                </picture>
                <figcaption>{{content.a|raw}} © Kryxivia</figcaption>
            </figure>
        {% endif %}
    {% endif %}
{% endmacro %}

{# press #}
{% macro Press(name, href, logo) %}
    {% import _self as this %}
    <div class=\"press blc\">
        <a href=\"{{href}}\" title=\"{{lang.press.read~' • '~name}}\" target=\"_blank\" rel=\"external noreferrer noopener\">
            {{this.img('img/press/'~logo.img, {width:logo.width,height:logo.height,alt:name})}}
        </a>
    </div>
{% endmacro %}

{# partners #}
{% macro Partners(name, href, logo) %}
    {% import _self as this %}
    <div class=\"partner blc\">
        {% if href %}
            <a href=\"{{href}}\" title=\"{{name}}\" target=\"_blank\" rel=\"external noreferrer noopener\">
                {{this.img('img/partners/'~logo.img, {width:logo.width,height:logo.height,alt:name})}}
            </a>
        {% else %}
            <div>
                {{this.img('img/partners/'~logo.img, {width:logo.width,height:logo.height,alt:name})}}
            </div>
        {% endif %}
    </div>
{% endmacro %}

{# lien menu #}
{% macro li(txt, href, target = false) %}
    <li><a href=\"{{href}}\" title=\"{{txt}}\"{{target ? ' target=_blank'}}>{{txt}}</a></li>
{% endmacro %}

{# lien footer #}
{% macro liF(name, url) %}
    <li><a href=\"{{url}}\" title=\"Kryxivia {{name}}\" target=\"_blank\" rel=\"noopener noreferrer\">{{name}}</a></li>
{% endmacro %}

{# social footer #}
{% macro Rs(name, link, icon) %}
    {% import _self as this %}
    {% set title = 'Kryxivia '~name %}
    <div>
        <a href=\"{{link}}\" title=\"{{title}}\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"{{name}}\">{{icon|replace({'xmlns:v=\"https://vecta.io/nano\"':'','xmlns=\"http://www.w3.org/2000/svg\"':'','</svg>':'<title>'~title~'</title></svg>'})|raw}}</a>
        {{this.img('img/cader.png', {width:1100,height:1100,cls:'cadre',alt:name})}}
    </div>
{% endmacro %}

{# mexc logo #}
{% macro mexc() %}
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"168\" height=\"21\" fill=\"none\" xmlns:v=\"https://vecta.io/nano\"><title>MEXC Global</title><g clip-path=\"url(#B)\"><path d=\"M32.668 14.379l-7.18-12.454c-1.574-2.596-5.412-2.623-6.931.11l-7.539 12.951c-1.408 2.375.331 5.357 3.148 5.357h15.105c2.844 0 4.971-3.065 3.397-5.965z\" fill=\"#00b897\"/><path d=\"M22.312 15.345l-.442-.773-1.325-2.264L14.47 1.759c-1.574-2.347-5.302-2.541-6.876.414L.525 14.406c-1.464 2.568.276 5.909 3.452 5.937h15.022 6.407 3.811c-3.894.028-5.136-1.988-6.904-4.998z\" fill=\"#76fcb2\"/><path d=\"M22.312 15.345l-.442-.773-1.325-2.264-3.921-6.904-5.633 9.61c-1.408 2.375.331 5.357 3.148 5.357h4.832 6.407 3.838c-3.921-.028-5.136-2.016-6.904-5.026z\" fill=\"url(#A)\"/><g fill=\"#00b897\"><path d=\"M165.813 19.377c-1.022 0-1.823-.221-2.43-.607-.636-.414-.967-1.022-.967-1.85V4.879h1.602a1.08 1.08 0 0 1 1.077 1.077V16.56c0 .028 0 .525.414.939.248.248.552.387.966.387h.304c.111 0 .221.11.221.221v1.298l-1.187-.028zm-34.518-.001c-1.657 0-3.01-.442-4.032-1.326-.524-.442-.883-.939-1.104-1.491s-.332-1.353-.332-2.43c0-1.049.111-1.878.332-2.43.193-.525.552-.994 1.077-1.436 1.021-.884 2.374-1.325 4.031-1.325s3.01.442 4.032 1.325c.525.442.884.939 1.077 1.436.221.58.331 1.381.331 2.43 0 1.077-.11 1.878-.331 2.43s-.58 1.049-1.105 1.491c-.966.884-2.319 1.326-3.976 1.326zm0-8.919c-1.823 0-2.734 1.243-2.734 3.7 0 2.485.911 3.728 2.734 3.728s2.734-1.243 2.734-3.7c0-2.485-.939-3.728-2.734-3.728zm11.432 8.92c-1.436 0-2.761-.387-3.893-1.132-.111-.11-.332-.248-.608-.414-.055-.028-.11-.111-.11-.193V4.879h1.629a1.1 1.1 0 0 1 1.077 1.077v3.728l.497-.276c.58-.304 1.353-.442 2.347-.442 1.74 0 3.065.525 3.949 1.546.773.911 1.16 2.126 1.16 3.617s-.442 2.706-1.326 3.59c-1.022 1.105-2.623 1.657-4.722 1.657zm.276-8.919c-.607 0-1.298.221-2.071.69l-.11.055v5.992l.11.083c.608.387 1.326.58 2.071.58.994 0 1.768-.414 2.292-1.243.442-.663.691-1.519.691-2.485 0-2.43-1.022-3.673-2.983-3.673zm12.151 8.891c-3.038 0-4.943-1.988-4.943-5.219 0-3.203 1.877-5.191 4.887-5.191 1.16 0 2.154.304 2.955.884l.166.11v-.801h2.126c.138 0 .221.11.221.221v9.803h-2.375v-.884l-.166.138c-.662.607-1.712.939-2.871.939zm.552-8.643c-1.906 0-3.038 1.464-3.038 3.424s1.132 3.479 3.038 3.479c.607 0 1.657-.055 2.485-.884l.028-.028v-5.026l-.028-.028c-.58-.663-1.436-.939-2.485-.939z\"/></g><g fill=\"#fff\"><path d=\"M57.04 19.238V4.851h11.957v.911c0 .718-.58 1.298-1.298 1.298h-7.677v3.866H67.7v2.209h-7.677v3.866H67.7c.718 0 1.298.58 1.298 1.298v.911l-11.957.028zM86.173 4.851h-2.817a1.66 1.66 0 0 0-1.326.635l-3.397 4.28-3.397-4.253a1.66 1.66 0 0 0-1.325-.635h-2.817l5.716 7.18-5.716 7.18h2.817a1.66 1.66 0 0 0 1.325-.635l3.397-4.253 3.424 4.28c.331.387.801.635 1.325.635h2.817l-5.716-7.18 5.689-7.235zm-38.494 12.87l3.921-6.848v8.34h2.982V4.825h-1.85c-.58 0-1.132.304-1.408.828l-4.694 8.56-4.694-8.56a1.58 1.58 0 0 0-1.408-.828h-1.85v14.387h2.982v-8.34l3.921 6.848h2.099zm46.282 1.683c-4.142.055-7.511-3.203-7.539-7.345 0-2.264.69-4.142 1.988-5.44 1.298-1.27 3.176-1.961 5.412-1.961 2.623 0 4.694.911 6.185 2.679l-.939.801a1.66 1.66 0 0 1-2.071.055c-.828-.635-1.878-.939-3.065-.939-2.927 0-4.667 1.767-4.667 4.75 0 3.01 1.795 4.86 4.667 4.86 1.215 0 2.237-.331 3.065-.939.608-.469 1.464-.442 2.071.055l.939.801c-1.491 1.74-3.479 2.623-6.047 2.623z\"/></g><g fill=\"#00b897\"><path d=\"M112.324 19.404c-4.639 0-7.511-2.817-7.511-7.345s2.872-7.345 7.456-7.345c2.209 0 4.059.635 5.495 1.933l-.69.773c-.304.331-.746.525-1.188.525-.248 0-.497-.055-.718-.166-.856-.442-1.85-.663-2.899-.663-2.983 0-4.833 1.905-4.833 4.971 0 3.093 1.933 4.998 5.026 4.998 1.491 0 2.651-.276 3.507-.884l.055-.028v-2.955h-3.286v-.966c0-.718.58-1.298 1.298-1.298h4.059c.111 0 .221.11.221.221v6.379c-1.408 1.215-3.424 1.85-5.992 1.85zm11.322-.027c-1.022 0-1.823-.221-2.43-.607-.635-.414-.967-1.022-.967-1.85V4.879h1.602a1.08 1.08 0 0 1 1.077 1.077V16.56c0 .028 0 .525.414.939a1.29 1.29 0 0 0 .966.387h.304c.111 0 .221.11.221.221v1.298l-1.187-.028z\"/></g></g><defs><linearGradient id=\"A\" x1=\"8.986\" y1=\"10.648\" x2=\"26.437\" y2=\"17.096\" gradientUnits=\"userSpaceOnUse\"><stop stop-color=\"#53e57a\" stop-opacity=\"0\"/><stop offset=\"1\" stop-color=\"#00a977\"/></linearGradient><clipPath id=\"B\"><path fill=\"#fff\" d=\"M0 0h168v21H0z\"/></clipPath></defs></svg>
{% endmacro %}

{# pancakeswap logo #}
{% macro pancake() %}
    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 160 26\" width=\"20\" height=\"150\" xmlns:v=\"https://vecta.io/nano\"><title>Pancakeswap</title><path d=\"M30.852 19.757c-.372 0-.635-.077-.789-.231-.141-.154-.212-.398-.212-.731V7.651c0-.334.077-.577.231-.731.154-.167.411-.25.77-.25h4.716c1.796 0 3.118.379 3.965 1.136s1.27 1.886 1.27 3.387c0 1.488-.423 2.611-1.27 3.368-.834.744-2.156 1.116-3.965 1.116H33.74v3.118c0 .334-.077.577-.231.731s-.417.231-.789.231h-1.867zm4.408-6.871c.526 0 .93-.141 1.213-.423.295-.282.443-.706.443-1.27 0-.577-.148-1.007-.443-1.29-.282-.282-.686-.423-1.213-.423h-1.52v3.407h1.52zm10.088 7.16c-1.206 0-2.175-.385-2.906-1.155-.719-.783-1.078-1.88-1.078-3.291 0-1.078.244-2.021.731-2.829.5-.808 1.2-1.431 2.098-1.867.911-.449 1.957-.674 3.137-.674.975 0 1.835.109 2.579.327.757.205 1.45.507 2.079.905v7.699c0 .244-.045.404-.135.481s-.269.116-.539.116h-1.963c-.141 0-.25-.019-.327-.058a.58.58 0 0 1-.192-.231l-.25-.577c-.372.398-.821.687-1.347.866-.513.192-1.142.289-1.886.289zm1.444-2.618c.5 0 .892-.122 1.174-.366s.423-.59.423-1.039v-3.002c-.244-.116-.552-.173-.924-.173-.68 0-1.225.237-1.636.712-.398.475-.597 1.142-.597 2.002 0 1.245.52 1.867 1.559 1.867zm7.875 2.329c-.372 0-.635-.077-.789-.231s-.231-.398-.231-.731v-7.679c0-.231.038-.385.115-.462.09-.09.269-.135.539-.135h1.982c.154 0 .269.026.346.077.09.039.141.116.154.231l.096.577c.359-.359.828-.642 1.405-.847.59-.218 1.245-.327 1.963-.327 1.039 0 1.88.295 2.521.885.642.577.962 1.437.962 2.579v5.1c0 .334-.077.577-.231.731-.141.154-.398.231-.77.231h-1.867c-.372 0-.642-.077-.808-.231-.154-.154-.231-.398-.231-.731v-4.85c0-.385-.083-.661-.25-.828s-.43-.25-.789-.25c-.385 0-.693.103-.924.308-.218.205-.327.488-.327.847v4.773c0 .334-.077.577-.231.731-.141.154-.398.231-.77.231h-1.867zm15.868.289c-1.796 0-3.182-.417-4.157-1.251s-1.463-2.047-1.463-3.638c0-.975.225-1.835.674-2.579s1.097-1.322 1.944-1.732c.86-.411 1.873-.616 3.041-.616.885 0 1.63.083 2.233.25.616.167 1.161.423 1.636.77.141.09.212.205.212.346 0 .103-.051.237-.154.404l-.789 1.367c-.09.18-.199.269-.327.269-.077 0-.199-.051-.366-.154a4.59 4.59 0 0 0-.982-.481c-.295-.103-.667-.154-1.116-.154-.642 0-1.161.205-1.559.616-.385.411-.577.975-.577 1.694 0 .731.199 1.296.597 1.694.398.385.943.577 1.636.577.411 0 .783-.058 1.116-.173s.674-.276 1.02-.481c.18-.103.308-.154.385-.154.116 0 .218.09.308.269l.866 1.482c.064.128.096.231.096.308 0 .116-.077.225-.231.327a6.08 6.08 0 0 1-1.771.77c-.629.18-1.386.27-2.271.27zm9.153 0c-1.206 0-2.175-.385-2.906-1.155-.719-.783-1.078-1.88-1.078-3.291 0-1.078.244-2.021.731-2.829.5-.808 1.2-1.431 2.098-1.867.911-.449 1.957-.674 3.137-.674.975 0 1.835.109 2.579.327.757.205 1.45.507 2.079.905v7.699c0 .244-.045.404-.135.481s-.269.116-.539.116h-1.963c-.141 0-.25-.019-.327-.058-.077-.051-.141-.128-.192-.231l-.25-.577c-.372.398-.821.687-1.347.866-.513.192-1.142.289-1.886.289zm1.444-2.618c.5 0 .892-.122 1.174-.366s.423-.59.423-1.039v-3.002c-.244-.116-.552-.173-.924-.173-.68 0-1.225.237-1.636.712-.398.475-.597 1.142-.597 2.002 0 1.245.52 1.867 1.559 1.867zm17.286 1.598a.51.51 0 0 1 .135.346c0 .115-.038.212-.115.289-.077.064-.18.096-.308.096h-2.983c-.18 0-.314-.013-.404-.039-.077-.038-.16-.109-.25-.212l-2.618-3.561v2.849c0 .334-.077.577-.231.731s-.417.231-.789.231h-1.867c-.372 0-.635-.077-.789-.231-.141-.154-.212-.398-.212-.731V7.651c0-.334.077-.577.231-.731.154-.167.411-.25.77-.25h1.867c.372 0 .635.083.789.25.154.154.231.398.231.731v6.448l2.541-3.31c.077-.103.16-.173.25-.212s.224-.058.404-.058h2.983c.128 0 .225.039.289.116.077.064.116.154.116.269a.51.51 0 0 1-.135.346l-3.291 3.772 3.387 4.003zm6.25 1.02c-1.078 0-2.04-.18-2.887-.539-.834-.359-1.495-.898-1.983-1.617s-.731-1.598-.731-2.637c0-1.63.462-2.874 1.386-3.734s2.252-1.29 3.984-1.29c1.694 0 2.977.424 3.849 1.27.886.834 1.328 1.995 1.328 3.484 0 .641-.282.962-.847.962h-6.043c0 .552.205.975.616 1.27.423.295 1.058.443 1.905.443.526 0 .963-.045 1.309-.135a5.45 5.45 0 0 0 1.078-.443c.154-.064.257-.096.308-.096.115 0 .212.077.289.231l.654 1.232a.74.74 0 0 1 .096.289c0 .116-.077.225-.231.327-.526.346-1.122.597-1.79.751s-1.43.231-2.29.231zm1.482-6.005c0-.488-.141-.866-.424-1.136s-.705-.404-1.27-.404-.994.141-1.289.423c-.295.269-.443.641-.443 1.116h3.426zm10.061 6.005a13.81 13.81 0 0 1-3.06-.327c-.962-.231-1.739-.552-2.329-.962-.218-.141-.327-.289-.327-.443 0-.103.038-.212.115-.327l.943-1.501c.103-.154.206-.231.308-.231.065 0 .174.045.328.135.474.27 1.013.488 1.616.654s1.2.25 1.79.25c.603 0 1.046-.09 1.328-.269.295-.18.443-.468.443-.866 0-.385-.16-.686-.481-.905-.308-.218-.892-.494-1.752-.828-1.296-.488-2.309-1.033-3.041-1.636-.718-.616-1.077-1.45-1.077-2.502 0-1.27.455-2.239 1.366-2.906s2.124-1.001 3.638-1.001c1.052 0 1.95.096 2.694.289.757.18 1.399.462 1.925.847.218.167.327.321.327.462 0 .09-.038.192-.115.308l-.943 1.501c-.116.154-.219.231-.308.231-.065 0-.174-.045-.328-.135-.744-.488-1.629-.731-2.656-.731-.551 0-.975.09-1.27.269s-.443.475-.443.885c0 .282.077.513.231.693a2.2 2.2 0 0 0 .616.481 16.5 16.5 0 0 0 1.232.5l.366.135c.949.372 1.693.731 2.232 1.078.552.334.969.751 1.251 1.251.283.488.424 1.103.424 1.848 0 1.142-.43 2.053-1.29 2.733-.847.68-2.098 1.02-3.753 1.02zm9.132-.289c-.192 0-.34-.032-.443-.096s-.179-.192-.23-.385l-2.483-8.315c-.026-.077-.039-.135-.039-.173 0-.18.129-.27.385-.27h2.541c.167 0 .288.032.365.096.077.051.129.141.154.269l1.04 4.369 1.308-3.522c.065-.154.129-.257.193-.308.077-.064.205-.096.385-.096h1.212c.18 0 .302.032.366.096.077.051.148.154.212.308l1.289 3.522 1.059-4.369c.038-.128.09-.218.154-.269.064-.064.18-.096.346-.096h2.56c.257 0 .385.09.385.27a.63.63 0 0 1-.038.173l-2.502 8.315c-.052.192-.129.321-.231.385-.09.064-.231.096-.424.096h-1.886c-.18 0-.314-.032-.404-.096-.09-.077-.167-.205-.231-.385l-1.27-3.484-1.271 3.484c-.051.18-.128.308-.231.385-.09.064-.224.096-.404.096h-1.867zm15.638.289c-1.206 0-2.175-.385-2.906-1.155-.719-.783-1.078-1.88-1.078-3.291 0-1.078.244-2.021.731-2.829.501-.808 1.2-1.431 2.098-1.867.911-.449 1.957-.674 3.137-.674.975 0 1.835.109 2.579.327.757.205 1.45.507 2.079.905v7.699c0 .244-.045.404-.135.481s-.269.116-.539.116h-1.963c-.141 0-.25-.019-.327-.058a.58.58 0 0 1-.192-.231l-.251-.577c-.372.398-.821.687-1.347.866-.513.192-1.142.289-1.886.289zm1.443-2.618c.501 0 .892-.122 1.174-.366s.424-.59.424-1.039v-3.002c-.244-.116-.552-.173-.924-.173-.68 0-1.225.237-1.636.712-.398.475-.597 1.142-.597 2.002 0 1.245.52 1.867 1.559 1.867zm7.856 6.217c-.372 0-.635-.077-.789-.231-.141-.154-.212-.398-.212-.731V11.654c.578-.411 1.303-.751 2.175-1.02s1.784-.404 2.733-.404c3.875 0 5.813 1.642 5.813 4.927 0 1.488-.411 2.675-1.232 3.561s-1.982 1.328-3.484 1.328a4.9 4.9 0 0 1-1.231-.154c-.385-.103-.706-.244-.963-.423v3.214c0 .334-.077.577-.231.731s-.417.231-.789.231h-1.79zm4.177-6.197c.552 0 .962-.205 1.232-.616.282-.423.423-.988.423-1.694 0-.834-.167-1.418-.5-1.751-.321-.346-.822-.52-1.502-.52-.436 0-.782.058-1.039.173v3.06c0 .436.122.77.366 1.001s.584.346 1.02.346z\" fill=\"#fff\"/><path fill-rule=\"evenodd\" d=\"M4.39 4.5A3.27 3.27 0 0 1 7.6.635c1.804 0 3.266 1.462 3.266 3.266v4.026l1.374-.048 1.321.044V3.901c0-1.804 1.462-3.266 3.266-3.266a3.27 3.27 0 0 1 3.21 3.866l-.884 4.733c3.033 1.324 5.327 3.624 5.327 6.515v1.749c0 2.377-1.572 4.367-3.771 5.71-2.215 1.354-5.212 2.159-8.47 2.159s-6.254-.805-8.47-2.159C1.572 21.863 0 19.873 0 17.497v-1.749c0-2.875 2.27-5.166 5.278-6.493L4.39 4.5zm13.631 5.355l1.034-5.538a2.27 2.27 0 0 0-2.228-2.683c-1.252 0-2.267 1.015-2.267 2.267v5.124l-.999-.1-1.321-.047-1.374.051-.999.103V3.901c0-1.252-1.015-2.267-2.267-2.267a2.27 2.27 0 0 0-2.228 2.683L6.41 9.873C3.166 11.078.999 13.259.999 15.748v1.749c0 3.794 5.033 6.87 11.241 6.87s11.241-3.076 11.241-6.87v-1.749c0-2.502-2.189-4.692-5.46-5.893z\" fill=\"#633001\"/><path d=\"M23.482 17.497c0 3.794-5.033 6.87-11.241 6.87S.999 21.291.999 17.497v-1.749h22.482v1.749z\" fill=\"#fedc90\"/><path fill-rule=\"evenodd\" d=\"M5.372 4.317A2.27 2.27 0 0 1 7.6 1.634c1.252 0 2.267 1.015 2.267 2.267v5.131a18.24 18.24 0 0 1 2.373-.153c.795 0 1.571.05 2.32.146V3.901c0-1.252 1.015-2.267 2.267-2.267a2.27 2.27 0 0 1 2.228 2.683l-1.034 5.538c3.271 1.201 5.461 3.391 5.461 5.893 0 3.794-5.033 6.87-11.241 6.87S.999 19.542.999 15.748c0-2.489 2.167-4.67 5.411-5.875L5.372 4.317z\" fill=\"#d1884f\"/><use xlink:href=\"#B\"/><use xlink:href=\"#B\" x=\"8.618\"/><defs ><path class=\"ey\" id=\"B\" d=\"M9.118 15.249c0 1.035-.559 1.874-1.249 1.874s-1.249-.839-1.249-1.874.559-1.873 1.249-1.873 1.249.839 1.249 1.874z\"/></defs></svg>
{% endmacro %}", "inc/macros.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/inc/macros.twig");
    }
}
