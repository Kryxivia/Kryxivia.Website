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

/* inc/head.twig */
class __TwigTemplate_4132eb489f5a85a6483a31f060df8d5bc9ede1570061be67735b30a20fe3c681 extends \Twig\Template
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
        echo "<meta charset=\"UTF-8\">
<title>";
        // line 2
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
<meta name=\"theme-color\" content=\"#";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "params", [], "any", false, false, false, 3), "thcolor", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
<meta name=\"msapplication-TileColor\" content=\"#";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "params", [], "any", false, false, false, 4), "thcolor", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset("img/favicon.png"), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
<meta content=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
        echo "\" name=\"description\">
<meta content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" property=\"og:title\">
<meta content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
        echo "\" property=\"og:description\">
<meta content=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
        echo "assets/img/";
        (((($context["thumb"] ?? null) != null)) ? (print (twig_escape_filter($this->env, ($context["thumb"] ?? null), "html", null, true))) : (print ("thumbnail.png")));
        echo "\" property=\"og:image\">
<meta content=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" property=\"twitter:title\">
<meta content=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
        echo "\" property=\"twitter:description\">
<meta content=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
        echo "assets/img/";
        (((($context["thumb"] ?? null) != null)) ? (print (twig_escape_filter($this->env, ($context["thumb"] ?? null), "html", null, true))) : (print ("thumbnail.png")));
        echo "\" property=\"twitter:image\">
 <link rel=\"alternate\" hreflang=\"x-default\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
        echo "en";
        (((($context["urlAlternate"] ?? null) != null)) ? (print (twig_escape_filter($this->env, ($context["urlAlternate"] ?? null), "html", null, true))) : (print ("")));
        echo "\">
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "params", [], "any", false, false, false, 15), "lang", [], "any", false, false, false, 15), ","));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            if ((($context["code"] != ($context["langCode"] ?? null)) && (($context["urlAlternate"] ?? null) != null))) {
                // line 16
                echo " <link rel=\"alternate\" hreflang=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (($context["host"] ?? null) . $context["code"]), "html", null, true);
                (((($context["urlAlternate"] ?? null) != null)) ? (print (twig_escape_filter($this->env, ($context["urlAlternate"] ?? null), "html", null, true))) : (print ("")));
                echo "\">
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-7ZJBRGJFY1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-7ZJBRGJFY1');
</script>";
    }

    public function getTemplateName()
    {
        return "inc/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 18,  100 => 16,  95 => 15,  89 => 14,  83 => 13,  79 => 12,  75 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"UTF-8\">
<title>{{title}}</title>
<meta name=\"theme-color\" content=\"#{{config.params.thcolor}}\">
<meta name=\"msapplication-TileColor\" content=\"#{{config.params.thcolor}}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{asset('img/favicon.png')}}\">
<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
<meta content=\"{{desc}}\" name=\"description\">
<meta content=\"{{title}}\" property=\"og:title\">
<meta content=\"{{desc}}\" property=\"og:description\">
<meta content=\"{{host}}assets/img/{{thumb != null ? thumb : 'thumbnail.png'}}\" property=\"og:image\">
<meta content=\"{{title}}\" property=\"twitter:title\">
<meta content=\"{{desc}}\" property=\"twitter:description\">
<meta content=\"{{host}}assets/img/{{thumb != null ? thumb : 'thumbnail.png'}}\" property=\"twitter:image\">
 <link rel=\"alternate\" hreflang=\"x-default\" href=\"{{host}}en{{urlAlternate != null ? urlAlternate}}\">
{% for code in config.params.lang|split(',') if code != langCode and urlAlternate != null %}
 <link rel=\"alternate\" hreflang=\"{{code}}\" href=\"{{host~code}}{{urlAlternate != null ? urlAlternate}}\">
{% endfor %}
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-7ZJBRGJFY1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-7ZJBRGJFY1');
</script>", "inc/head.twig", "/Users/nuixw/Documents/Localhost/Kryxivia.Website/Kryxivia/Views/inc/head.twig");
    }
}
