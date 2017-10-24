<?php

/* partials/base_music.html.twig */
class __TwigTemplate_dbe9ded9ff171690be2cf69ca7d5a89e7028a13432c0d97253b79019f127ce31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "</head>
<body id=\"top\" class=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <!-- <div id=\"sb-site\"> -->
        ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "
        <br><br>
        <h2 class=\"things\">things i've done</h2>

        <div>
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        </div>

        ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base_music.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css\">


    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "
        <!-- my css additions -->
        ";
        // line 18
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main-body.css", 1 => 102), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/header.css", 1 => 101), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/projects.css", 1 => 105), "method");
        // line 21
        echo "
    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 27
        echo "    ";
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        // line 35
        echo "        <header id=\"header\">
            <!-- <div id=\"logo\"> -->
                ";
        // line 37
        $this->loadTemplate("partials/name_logo.html.twig", "partials/base_music.html.twig", 37)->display($context);
        // line 38
        echo "
            <!-- </div> -->
                ";
        // line 40
        $this->loadTemplate("partials/top_nav.html.twig", "partials/base_music.html.twig", 40)->display($context);
        // line 41
        echo "        </header>
        ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "        ";
        $this->loadTemplate("partials/musics.html.twig", "partials/base_music.html.twig", 49)->display($context);
        // line 50
        echo "        ";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "        <footer id=\"footer\">
              <p>YR FOOTR.</p>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "partials/base_music.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 54,  177 => 53,  173 => 50,  170 => 49,  167 => 48,  162 => 41,  160 => 40,  156 => 38,  154 => 37,  150 => 35,  147 => 34,  143 => 27,  140 => 26,  137 => 25,  132 => 21,  129 => 20,  126 => 19,  124 => 18,  120 => 16,  117 => 15,  109 => 28,  107 => 25,  101 => 23,  99 => 15,  92 => 11,  88 => 10,  85 => 9,  83 => 8,  75 => 7,  72 => 6,  69 => 5,  62 => 58,  60 => 53,  56 => 51,  54 => 48,  47 => 43,  45 => 34,  40 => 32,  37 => 31,  35 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css\">


    {% block stylesheets %}

        <!-- my css additions -->
        {% do assets.addCss('theme://css/main-body.css', 102) %}
        {% do assets.addCss('theme://css/header.css', 101) %}
        {% do assets.addCss('theme://css/projects.css', 105) %}

    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <!-- <div id=\"sb-site\"> -->
        {% block header %}
        <header id=\"header\">
            <!-- <div id=\"logo\"> -->
                {% include 'partials/name_logo.html.twig' %}

            <!-- </div> -->
                {% include 'partials/top_nav.html.twig' %}
        </header>
        {% endblock %}

        <br><br>
        <h2 class=\"things\">things i've done</h2>

        <div>
        {% block body %}
        {% include 'partials/musics.html.twig' %}
        {% endblock %}
        </div>

        {% block footer %}
        <footer id=\"footer\">
              <p>YR FOOTR.</p>
        </footer>
        {% endblock %}

</body>
</html>
", "partials/base_music.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/partials/base_music.html.twig");
    }
}
