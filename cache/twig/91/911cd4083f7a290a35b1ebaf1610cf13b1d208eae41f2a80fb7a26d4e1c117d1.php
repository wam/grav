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

        <div>
        ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "        </div>



        ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 59
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
        $this->loadTemplate("partials/metadata.html.twig", "partials/base_page.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
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
        $this->loadTemplate("partials/name_logo.html.twig", "partials/base_page.html.twig", 37)->display($context);
        // line 38
        echo "
            <!-- </div> -->
                ";
        // line 40
        $this->loadTemplate("partials/top_nav.html.twig", "partials/base_page.html.twig", 40)->display($context);
        // line 41
        echo "        </header>
        ";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "        <p>stuff!</p>
        ";
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
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
        return array (  177 => 55,  174 => 54,  169 => 48,  166 => 47,  161 => 41,  159 => 40,  155 => 38,  153 => 37,  149 => 35,  146 => 34,  142 => 27,  139 => 26,  136 => 25,  130 => 20,  127 => 19,  125 => 18,  121 => 16,  118 => 15,  110 => 28,  108 => 25,  102 => 23,  100 => 15,  93 => 11,  89 => 10,  86 => 9,  84 => 8,  76 => 7,  73 => 6,  70 => 5,  63 => 59,  61 => 54,  55 => 50,  53 => 47,  47 => 43,  45 => 34,  40 => 32,  37 => 31,  35 => 5,  30 => 3,  27 => 2,  25 => 1,);
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

        <div>
        {% block content %}
        <p>stuff!</p>
        {% endblock %}
        </div>



        {% block footer %}
        <footer id=\"footer\">
              <p>YR FOOTR.</p>
        </footer>
        {% endblock %}

</body>
</html>
", "partials/base_page.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/partials/base_page.html.twig");
    }
}
