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

/* /pages/devblog/add.twig */
class __TwigTemplate_9fdb6bf61c86a9d3cc8edc288b7eef8b54b6fa8b1edd29bad36ac55194395e6b extends \Twig\Template
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
            'robots' => [$this, 'block_robots'],
            'content' => [$this, 'block_content'],
            'plus' => [$this, 'block_plus'],
            'libjs' => [$this, 'block_libjs'],
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
        $macros["m"] = $this->macros["m"] = $this->loadTemplate("inc/macros.twig", "/pages/devblog/add.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("app.twig", "/pages/devblog/add.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo $this->extensions['Core\Extension']->minifier("devblogAdd", [0 => "mods/default", 1 => "mods/devblogAdd", 2 => "pages/devblog"]);
        echo "
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->loadTemplate("inc/head.twig", "/pages/devblog/add.twig", 7)->display(twig_array_merge($context, ["title" => "Devblog Add", "desc" => "Devblog Add", "urlAlternate" => null]));
    }

    // line 13
    public function block_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<meta name=\"robots\" content=\"noindex, follow\">
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <article itemscope=\"itemscope\" class=\"dvs\">
    \t<header id=\"t\">
            <div class=\"ct\">
                <h1><strong><textarea rows=\"1\" placeholder=\"Titre de l'article\" name=\"h1\" oninput=\"auto_grow(this)\"></textarea></strong></h1>
            </div>
            ";
        // line 22
        echo twig_call_macro($macros["m"], "macro_img", ["img/bottom-ix.png", ["width" => 2000, "height" => 744, "cls" => "b-ix", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "all", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22)]], 22, $context, $this->getSourceContext());
        echo "
            <div class=\"bg\">
                <div></div>
            </div>
        </header>
        <main id=\"m\" itemprop=\"text\">
            <div class=\"ct\">
                <div class=\"bt\" data-content>
                    <button type=\"button\" data-template=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_call_macro($macros["m"], "macro_BlocArticle", ["title", null], 30, $context, $this->getSourceContext()));
        echo "\">Titre</button>
                    <button type=\"button\" data-template=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_call_macro($macros["m"], "macro_BlocArticle", ["sub", null], 31, $context, $this->getSourceContext()));
        echo "\">Sous-titre</button>
                    <button type=\"button\" data-template=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_call_macro($macros["m"], "macro_BlocArticle", ["txt", null], 32, $context, $this->getSourceContext()));
        echo "\">Texte</button>
                    <button type=\"button\" data-template=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_call_macro($macros["m"], "macro_BlocArticle", ["img", null], 33, $context, $this->getSourceContext()));
        echo "\">Image</button>
                </div>
                <div class=\"inf\">
                    <h3>Image principale *</h3>
                    <br>
                    <figure data-img>
                        <picture>
                            <img data-cover src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Core\Extension']->asset("img/none.png"), "html", null, true);
        echo "\" alt=\"Ajouter une image\">
                        </picture>
                        <div class=\"controls\">
                            <input type=\"file\" name=\"contact_image_1\">
                        </div>
                    </figure>
                    <br>
                    <h3>Description SEO de l'article *</h3>
                    <br>
                    <textarea rows=\"1\" name=\"desc\" oninput=\"auto_grow(this)\"></textarea>
                    <br>
                    <br>
                    <h3>Catégorie de l'article *</h3>
                    <br>
                    <select name=\"category\">
                        <option value=\"1\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 55), "category", [], "any", false, false, false, 55), 1, [], "any", false, false, false, 55), "html", null, true);
        echo "</option>
                        <option value=\"2\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 56), "category", [], "any", false, false, false, 56), 2, [], "any", false, false, false, 56), "html", null, true);
        echo "</option>
                        <option value=\"3\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 57), "category", [], "any", false, false, false, 57), 3, [], "any", false, false, false, 57), "html", null, true);
        echo "</option>
                        <option value=\"4\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 58), "category", [], "any", false, false, false, 58), 4, [], "any", false, false, false, 58), "html", null, true);
        echo "</option>
                        <option value=\"5\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 59), "category", [], "any", false, false, false, 59), 5, [], "any", false, false, false, 59), "html", null, true);
        echo "</option>
                        <option value=\"6\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 60), "category", [], "any", false, false, false, 60), 6, [], "any", false, false, false, 60), "html", null, true);
        echo "</option>
                        <option value=\"7\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "devblog", [], "any", false, false, false, 61), "category", [], "any", false, false, false, 61), 7, [], "any", false, false, false, 61), "html", null, true);
        echo "</option>
                    </select>
                    <br>
                    <br>
                    ";
        // line 65
        echo twig_call_macro($macros["m"], "macro_bn", ["Enregistrer", "bn", ["data-save" => true]], 65, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
        </main>
    </article>
";
    }

    // line 71
    public function block_plus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "    <div class=\"mss\">Une erreur est survenue.</div>
";
    }

    // line 74
    public function block_libjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script>
        function auto_grow(element) {
            element.style.height = \"5px\";
            element.style.height = (element.scrollHeight)+\"px\";
        }
        \$('[data-template]').on('click', e => {
            e.preventDefault()
            let \$e = \$(e.currentTarget)
            let template = \$e.data('template')
            \$('[data-content]').before(template)
        });
        \$(document).on('click', '[data-img] picture', function() {
            let \$img = \$(this).parents('[data-img]')
            let previewImg = \$img.find(\"img\")
            \$img.find(\"input\").trigger(\"click\");
            \$img.find(\"input\").change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var urll = e.target.result
                    \$(previewImg).attr(\"src\", urll);
                    previewImg.parent().css(\"background\", \"transparent\");
                    previewImg.show();
                    previewImg.siblings(\"p\").hide();
                };
                reader.readAsDataURL(this.files[0]);
            });
        });
        \$(document).on('click', '[data-remove]', function() {
            \$(this).parents('[data-bloc]').remove()
        });
        \$('[data-save]').on('click', () => {
            let template = {}
            template.title = \$('[name=h1]').val()
            template.desc = \$('[name=desc]').val()
            template.category = \$('[name=category]').val()
            template.cover = \$('[data-cover]').attr('src')
            template.content = []
            \$('[data-bloc]').each(function(){
                let bloc = {}
                let \$o = \$(this)
                let type = \$o.data('bloc')
                bloc.type = type
                if(type == 'img'){
                    bloc.c = \$o.find('img').attr('src')
                    bloc.a = \$o.find('textarea').val()
                }else{
                    bloc.c = \$o.find('textarea').val()
                }
                template.content.push(bloc)
            })
            \$.ajax({
                method: \"POST\",
                url: \"/save.php\",
                data: template,
                dataType: 'json',
                beforeSend(){
                    \$('html').addClass('saving')
                    \$('.mss').removeClass('show')
                },
                success(data){
                    \$('.mss').removeClass('show')
                    \$('html').removeClass('saving')
                    document.location.href=\"";
        // line 138
        echo $this->extensions['Core\Extension']->link($context, "devblog");
        echo "/\"+data.elts; 
                },
                complete(data){
                    if(data.result == 'success'){
                        \$('.mss').removeClass('show')
                        document.location.href=\"";
        // line 143
        echo $this->extensions['Core\Extension']->link($context, "devblog");
        echo "/\"+data.elts; 
                    }else{
                        \$('.mss').addClass('show')
                    }
                    \$('html').removeClass('saving')
                }
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "/pages/devblog/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 143,  264 => 138,  199 => 75,  195 => 74,  190 => 72,  186 => 71,  176 => 65,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  149 => 56,  145 => 55,  127 => 40,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  94 => 22,  87 => 17,  83 => 16,  78 => 14,  74 => 13,  69 => 7,  65 => 6,  58 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'app.twig' %}
{% import 'inc/macros.twig' as m %}
{% block css %}
    {{'devblogAdd'|minifier(['mods/default', 'mods/devblogAdd', 'pages/devblog'])|raw}}
{% endblock %}\t\t
{% block head %}
    {% include 'inc/head.twig' with {
    \ttitle: 'Devblog Add',
    \tdesc: 'Devblog Add',
    \turlAlternate: null
\t} %}
{% endblock %}
{% block robots %}
<meta name=\"robots\" content=\"noindex, follow\">
{% endblock %}
{% block content %}
    <article itemscope=\"itemscope\" class=\"dvs\">
    \t<header id=\"t\">
            <div class=\"ct\">
                <h1><strong><textarea rows=\"1\" placeholder=\"Titre de l'article\" name=\"h1\" oninput=\"auto_grow(this)\"></textarea></strong></h1>
            </div>
            {{m.img('img/bottom-ix.png', {width:2000,height:744,cls:'b-ix',alt:lang.all.name})}}
            <div class=\"bg\">
                <div></div>
            </div>
        </header>
        <main id=\"m\" itemprop=\"text\">
            <div class=\"ct\">
                <div class=\"bt\" data-content>
                    <button type=\"button\" data-template=\"{{m.BlocArticle('title', null)|escape}}\">Titre</button>
                    <button type=\"button\" data-template=\"{{m.BlocArticle('sub', null)|escape}}\">Sous-titre</button>
                    <button type=\"button\" data-template=\"{{m.BlocArticle('txt', null)|escape}}\">Texte</button>
                    <button type=\"button\" data-template=\"{{m.BlocArticle('img', null)|escape}}\">Image</button>
                </div>
                <div class=\"inf\">
                    <h3>Image principale *</h3>
                    <br>
                    <figure data-img>
                        <picture>
                            <img data-cover src=\"{{asset('img/none.png')}}\" alt=\"Ajouter une image\">
                        </picture>
                        <div class=\"controls\">
                            <input type=\"file\" name=\"contact_image_1\">
                        </div>
                    </figure>
                    <br>
                    <h3>Description SEO de l'article *</h3>
                    <br>
                    <textarea rows=\"1\" name=\"desc\" oninput=\"auto_grow(this)\"></textarea>
                    <br>
                    <br>
                    <h3>Catégorie de l'article *</h3>
                    <br>
                    <select name=\"category\">
                        <option value=\"1\">{{lang.devblog.category.1}}</option>
                        <option value=\"2\">{{lang.devblog.category.2}}</option>
                        <option value=\"3\">{{lang.devblog.category.3}}</option>
                        <option value=\"4\">{{lang.devblog.category.4}}</option>
                        <option value=\"5\">{{lang.devblog.category.5}}</option>
                        <option value=\"6\">{{lang.devblog.category.6}}</option>
                        <option value=\"7\">{{lang.devblog.category.7}}</option>
                    </select>
                    <br>
                    <br>
                    {{m.bn('Enregistrer', 'bn', {'data-save':true})}}
                </div>
            </div>
        </main>
    </article>
{% endblock %}
{% block plus %}
    <div class=\"mss\">Une erreur est survenue.</div>
{% endblock %}
{% block libjs %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script>
        function auto_grow(element) {
            element.style.height = \"5px\";
            element.style.height = (element.scrollHeight)+\"px\";
        }
        \$('[data-template]').on('click', e => {
            e.preventDefault()
            let \$e = \$(e.currentTarget)
            let template = \$e.data('template')
            \$('[data-content]').before(template)
        });
        \$(document).on('click', '[data-img] picture', function() {
            let \$img = \$(this).parents('[data-img]')
            let previewImg = \$img.find(\"img\")
            \$img.find(\"input\").trigger(\"click\");
            \$img.find(\"input\").change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var urll = e.target.result
                    \$(previewImg).attr(\"src\", urll);
                    previewImg.parent().css(\"background\", \"transparent\");
                    previewImg.show();
                    previewImg.siblings(\"p\").hide();
                };
                reader.readAsDataURL(this.files[0]);
            });
        });
        \$(document).on('click', '[data-remove]', function() {
            \$(this).parents('[data-bloc]').remove()
        });
        \$('[data-save]').on('click', () => {
            let template = {}
            template.title = \$('[name=h1]').val()
            template.desc = \$('[name=desc]').val()
            template.category = \$('[name=category]').val()
            template.cover = \$('[data-cover]').attr('src')
            template.content = []
            \$('[data-bloc]').each(function(){
                let bloc = {}
                let \$o = \$(this)
                let type = \$o.data('bloc')
                bloc.type = type
                if(type == 'img'){
                    bloc.c = \$o.find('img').attr('src')
                    bloc.a = \$o.find('textarea').val()
                }else{
                    bloc.c = \$o.find('textarea').val()
                }
                template.content.push(bloc)
            })
            \$.ajax({
                method: \"POST\",
                url: \"/save.php\",
                data: template,
                dataType: 'json',
                beforeSend(){
                    \$('html').addClass('saving')
                    \$('.mss').removeClass('show')
                },
                success(data){
                    \$('.mss').removeClass('show')
                    \$('html').removeClass('saving')
                    document.location.href=\"{{link('devblog')}}/\"+data.elts; 
                },
                complete(data){
                    if(data.result == 'success'){
                        \$('.mss').removeClass('show')
                        document.location.href=\"{{link('devblog')}}/\"+data.elts; 
                    }else{
                        \$('.mss').addClass('show')
                    }
                    \$('html').removeClass('saving')
                }
            })
        });
    </script>
{% endblock %}", "/pages/devblog/add.twig", "E:\\wamp64\\www\\Kryxivia\\Views\\pages\\devblog\\add.twig");
    }
}
