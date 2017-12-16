<?php

/* partials/base_page.html.twig */
class __TwigTemplate_e4a9f8d3d54ddd2435df5f20e3336b5189b2fbb01df2b0a1011172f5bf7b6b66 extends Twig_Template
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
            'content' => array($this, 'block_content'),
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
        // line 30
        echo "</head>
<body id=\"top\" class=\"";
        // line 31
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <!-- <div id=\"sb-site\"> -->
        ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "
        <br><br>

        <div class=\"cont\">
        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "        </div>



        <!-- begin footer -->

        <!-- ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo " -->

        <!-- end footer -->


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
        $this->loadTemplate("partials/metadata.html.twig", "partials/base_page.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "
        <!-- my css additions -->
        ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main-body.css", 1 => 102), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/header.css", 1 => 101), "method");
        // line 19
        echo "

    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 26
        echo "    ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "        <header id=\"header\">
            <!-- <div id=\"logo\"> -->
                ";
        // line 36
        $this->loadTemplate("partials/name_logo.html.twig", "partials/base_page.html.twig", 36)->display($context);
        // line 37
        echo "
            <!-- </div> -->
                ";
        // line 39
        $this->loadTemplate("partials/top_nav.html.twig", "partials/base_page.html.twig", 39)->display($context);
        // line 40
        echo "        </header>
        ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "        <p>stuff!</p>
        ";
    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        // line 56
        echo "        <footer id=\"footer\">
              <p>YR FOOTR.</p>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "partials/base_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 56,  179 => 55,  174 => 47,  171 => 46,  166 => 40,  164 => 39,  160 => 37,  158 => 36,  154 => 34,  151 => 33,  147 => 26,  144 => 25,  141 => 24,  135 => 19,  132 => 18,  130 => 17,  126 => 15,  123 => 14,  115 => 27,  113 => 24,  107 => 22,  105 => 14,  99 => 11,  95 => 10,  92 => 9,  90 => 8,  82 => 7,  79 => 6,  76 => 5,  65 => 59,  63 => 55,  55 => 49,  53 => 46,  47 => 42,  45 => 33,  40 => 31,  37 => 30,  35 => 5,  30 => 3,  27 => 2,  25 => 1,);
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.ico') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css\">

    {% block stylesheets %}

        <!-- my css additions -->
        {% do assets.addCss('theme://css/main-body.css', 102) %}
        {% do assets.addCss('theme://css/header.css', 101) %}


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

        <div class=\"cont\">
        {% block content %}
        <p>stuff!</p>
        {% endblock %}
        </div>



        <!-- begin footer -->

        <!-- {% block footer %}
        <footer id=\"footer\">
              <p>YR FOOTR.</p>
        </footer>
        {% endblock %} -->

        <!-- end footer -->


</body>
</html>
", "partials/base_page.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/partials/base_page.html.twig");
    }
}
