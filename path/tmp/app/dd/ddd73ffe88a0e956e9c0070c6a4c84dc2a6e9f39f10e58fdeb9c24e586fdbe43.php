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

/* inc/press.twig */
class __TwigTemplate_1eb630bf7d1f0dab3277b41a39ab11e61bebb94634e399d50bea1d2e1364a113 extends \Twig\Template
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "inc/press.twig", 1)->unwrap();
        // line 2
        echo "<div id=\"pr\">
    <div class=\"ct\">
        <div class=\"sub\" data-show>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "press", [], "any", false, false, false, 4), "sub", [], "any", false, false, false, 4), "html", null, true);
        echo "</div>
        <h2 class=\"h2\" data-show>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "press", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h2>
        <div class=\"lst\" data-show>
            ";
        // line 7
        echo twig_call_macro($macros["m"], "macro_Press", ["CoinTelegraph", "https://cointelegraph.com/press-releases/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt", ["img" => "cointelegraph.svg", "width" => 268, "height" => 62]], 7, $context, $this->getSourceContext());
        // line 11
        echo "
            ";
        // line 12
        echo twig_call_macro($macros["m"], "macro_Press", ["ChainBits", "https://www.chainbits.com/press-releases/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "chainbits.png", "width" => 400, "height" => 80]], 12, $context, $this->getSourceContext());
        // line 16
        echo "
            ";
        // line 17
        echo twig_call_macro($macros["m"], "macro_Press", ["ChainRadar", "https://chainradar.co/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "chainradar.png", "width" => 400, "height" => 80]], 17, $context, $this->getSourceContext());
        // line 21
        echo "
            ";
        // line 22
        echo twig_call_macro($macros["m"], "macro_Press", ["TheNewsCrypto", "https://thenewscrypto.com/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "Thenewscrypto.png", "width" => 500, "height" => 78]], 22, $context, $this->getSourceContext());
        // line 26
        echo "
            ";
        // line 27
        echo twig_call_macro($macros["m"], "macro_Press", ["Coin Rivet", "https://coinrivet.com/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "coinrivet.svg", "width" => 500, "height" => 94]], 27, $context, $this->getSourceContext());
        // line 31
        echo "
            ";
        // line 32
        echo twig_call_macro($macros["m"], "macro_Press", ["CoinQuora", "https://coinquora.com/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "coinquora.png", "width" => 2000, "height" => 350]], 32, $context, $this->getSourceContext());
        // line 36
        echo "
            ";
        // line 37
        echo twig_call_macro($macros["m"], "macro_Press", ["CoinCodex", "https://coincodex.com/article/12962/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "coincodex.svg", "width" => 1254, "height" => 246]], 37, $context, $this->getSourceContext());
        // line 41
        echo "
            ";
        // line 42
        echo twig_call_macro($macros["m"], "macro_Press", ["UK Bitcoin Blog", "https://www.ukbitcoinblog.com/general-info/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "ukcoinblog.png", "width" => 684, "height" => 89]], 42, $context, $this->getSourceContext());
        // line 46
        echo "
            ";
        // line 47
        echo twig_call_macro($macros["m"], "macro_Press", ["CoinMarketCal", "https://coinmarketcal.com/en/news/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt", ["img" => "coinmarketcal.png", "width" => 497, "height" => 75]], 47, $context, $this->getSourceContext());
        // line 51
        echo "
            ";
        // line 52
        echo twig_call_macro($macros["m"], "macro_Press", ["DefiTimes", "https://defitimes.io/news/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "defitimes.svg", "width" => 300, "height" => 48]], 52, $context, $this->getSourceContext());
        // line 56
        echo "
            ";
        // line 57
        echo twig_call_macro($macros["m"], "macro_Press", ["ChainWire", "https://chainwire.org/2021/11/24/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "chainwire.png", "width" => 512, "height" => 65]], 57, $context, $this->getSourceContext());
        // line 61
        echo "
            ";
        // line 62
        echo twig_call_macro($macros["m"], "macro_Press", ["The Crypto Basic", "https://thecryptobasic.com/2021/11/24/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "thecryptobasic.svg", "width" => 300, "height" => 64]], 62, $context, $this->getSourceContext());
        // line 66
        echo "
            ";
        // line 67
        echo twig_call_macro($macros["m"], "macro_Press", ["Ihodl", "https://ihodl.com/press-releases/2021-11-24/kryxivia-offers-blockchain-gaming-nft-powered-twist-incubated-unicrypt/", ["img" => "ihodl.svg", "width" => 300, "height" => 62]], 67, $context, $this->getSourceContext());
        // line 71
        echo "
            ";
        // line 72
        echo twig_call_macro($macros["m"], "macro_Press", ["Blockonomi", "https://blockonomi.com/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/", ["img" => "blockonomi.png", "width" => 300, "height" => 47]], 72, $context, $this->getSourceContext());
        // line 76
        echo "
            ";
        // line 77
        echo twig_call_macro($macros["m"], "macro_Press", ["Tech Times", "https://www.techtimes.com/articles/268451/20211129/in-kryxivia-crypto-gamers-will-find-adventure-and-build-fortunes.htm", ["img" => "techtimes.svg", "width" => 300, "height" => 44]], 77, $context, $this->getSourceContext());
        // line 81
        echo "
            ";
        // line 82
        echo twig_call_macro($macros["m"], "macro_Press", ["HackerNoon", "https://hackernoon.com/welcome-to-kryxivia-the-future-of-blockchain-mmorpg-gaming", ["img" => "hn-logo.png", "width" => 619, "height" => 100]], 82, $context, $this->getSourceContext());
        // line 86
        echo "
        </div>
    </div>
    ";
        // line 89
        echo twig_call_macro($macros["m"], "macro_img", ["img/bg-press.png", ["width" => 1900, "height" => 1091, "cls" => "bg", "alt" => "Kryxivia"]], 89, $context, $this->getSourceContext());
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "inc/press.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 89,  129 => 86,  127 => 82,  124 => 81,  122 => 77,  119 => 76,  117 => 72,  114 => 71,  112 => 67,  109 => 66,  107 => 62,  104 => 61,  102 => 57,  99 => 56,  97 => 52,  94 => 51,  92 => 47,  89 => 46,  87 => 42,  84 => 41,  82 => 37,  79 => 36,  77 => 32,  74 => 31,  72 => 27,  69 => 26,  67 => 22,  64 => 21,  62 => 17,  59 => 16,  57 => 12,  54 => 11,  52 => 7,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'inc/macros.twig' as m %}
<div id=\"pr\">
    <div class=\"ct\">
        <div class=\"sub\" data-show>{{lang.press.sub}}</div>
        <h2 class=\"h2\" data-show>{{lang.press.title}}</h2>
        <div class=\"lst\" data-show>
            {{m.Press(
                'CoinTelegraph',
                'https://cointelegraph.com/press-releases/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt', 
                {img:'cointelegraph.svg',width:268,height:62}
            )}}
            {{m.Press(
                'ChainBits',
                'https://www.chainbits.com/press-releases/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'chainbits.png',width:400,height:80}
            )}}
            {{m.Press(
                'ChainRadar',
                'https://chainradar.co/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'chainradar.png',width:400,height:80}
            )}}
            {{m.Press(
                'TheNewsCrypto',
                'https://thenewscrypto.com/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'Thenewscrypto.png',width:500,height:78}
            )}}
            {{m.Press(
                'Coin Rivet',
                'https://coinrivet.com/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'coinrivet.svg',width:500,height:94}
            )}}
            {{m.Press(
                'CoinQuora',
                'https://coinquora.com/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'coinquora.png',width:2000,height:350}
            )}}
            {{m.Press(
                'CoinCodex',
                'https://coincodex.com/article/12962/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'coincodex.svg',width:1254,height:246}
            )}}
            {{m.Press(
                'UK Bitcoin Blog',
                'https://www.ukbitcoinblog.com/general-info/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'ukcoinblog.png',width:684,height:89}
            )}}
            {{m.Press(
                'CoinMarketCal',
                'https://coinmarketcal.com/en/news/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt', 
                {img:'coinmarketcal.png',width:497,height:75}
            )}}
            {{m.Press(
                'DefiTimes',
                'https://defitimes.io/news/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'defitimes.svg',width:300,height:48}
            )}}
            {{m.Press(
                'ChainWire',
                'https://chainwire.org/2021/11/24/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'chainwire.png',width:512,height:65}
            )}}
            {{m.Press(
                'The Crypto Basic',
                'https://thecryptobasic.com/2021/11/24/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'thecryptobasic.svg',width:300,height:64}
            )}}
            {{m.Press(
                'Ihodl',
                'https://ihodl.com/press-releases/2021-11-24/kryxivia-offers-blockchain-gaming-nft-powered-twist-incubated-unicrypt/', 
                {img:'ihodl.svg',width:300,height:62}
            )}}
            {{m.Press(
                'Blockonomi',
                'https://blockonomi.com/kryxivia-offers-blockchain-gaming-with-an-nft-powered-twist-incubated-on-unicrypt/', 
                {img:'blockonomi.png',width:300,height:47}
            )}}
            {{m.Press(
                'Tech Times',
                'https://www.techtimes.com/articles/268451/20211129/in-kryxivia-crypto-gamers-will-find-adventure-and-build-fortunes.htm', 
                {img:'techtimes.svg',width:300,height:44}
            )}}
            {{m.Press(
                'HackerNoon',
                'https://hackernoon.com/welcome-to-kryxivia-the-future-of-blockchain-mmorpg-gaming', 
                {img:'hn-logo.png',width:619,height:100}
            )}}
        </div>
    </div>
    {{m.img('img/bg-press.png', {width:1900,height:1091,cls:'bg',alt:'Kryxivia'})}}
</div>", "inc/press.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/inc/press.twig");
    }
}
