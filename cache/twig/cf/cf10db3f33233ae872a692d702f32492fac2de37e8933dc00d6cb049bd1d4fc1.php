<?php

/* partials/base.html.twig */
class __TwigTemplate_8808cf91b721d893ced9905ba92ef8eb1e420c8a71c03ba508259e9c50873136 extends Twig_Template
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
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
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
        // line 34
        echo "</head>
<body id=\"top\" class=\"";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <!-- <div id=\"sb-site\"> -->
        ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        $this->loadTemplate("partials/insert.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('showcase', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "
      <script>
      ";
        // line 68
        $this->loadTemplate("partials/scribbler_script.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
        echo "      </script>


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
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
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
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/addons/p5.dom.js\"></script>

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "
        ";
        // line 18
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        <!-- my css additions -->
        ";
        // line 20
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main-body.css", 1 => 102), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/header.css", 1 => 101), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/insert.css", 1 => 103), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/blog-post.css", 1 => 104), "method");
        // line 24
        echo "
    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 30
        echo "    ";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "        <header id=\"header\">
            <!-- <div id=\"logo\"> -->
                <!-- <h1 class=\"myLogo\"><a href=\"";
        // line 40
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\"></a></h1> -->
                ";
        // line 41
        $this->loadTemplate("partials/name_logo.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "
            <!-- </div> -->
                ";
        // line 44
        $this->loadTemplate("partials/top_nav.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "        </header>
        ";
    }

    // line 50
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "        <article class=\"pa3 pa5-ns ";
        echo ($context["class"] ?? null);
        echo "\">
        <h2 class=\"f2\">";
        // line 54
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "posting", array());
        echo "</h2>
        <div class=\"measure lh-copy\">
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "        </div>
        </article>
        ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "        <footer id=\"footer\">
              <p>YR FOOTR.</p>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 62,  225 => 61,  220 => 56,  214 => 57,  212 => 56,  207 => 54,  202 => 53,  199 => 52,  194 => 50,  189 => 45,  187 => 44,  183 => 42,  181 => 41,  177 => 40,  173 => 38,  170 => 37,  166 => 30,  163 => 29,  160 => 28,  155 => 24,  152 => 23,  149 => 22,  146 => 21,  144 => 20,  141 => 19,  139 => 18,  136 => 17,  133 => 16,  125 => 31,  123 => 28,  117 => 26,  115 => 16,  107 => 11,  103 => 10,  100 => 9,  98 => 8,  90 => 7,  87 => 6,  84 => 5,  75 => 69,  73 => 68,  69 => 66,  67 => 61,  64 => 60,  62 => 52,  59 => 51,  57 => 50,  54 => 49,  52 => 48,  49 => 47,  47 => 37,  42 => 35,  39 => 34,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
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
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/addons/p5.dom.js\"></script>

    {% block stylesheets %}

        {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
        <!-- my css additions -->
        {% do assets.addCss('theme://css/main-body.css', 102) %}
        {% do assets.addCss('theme://css/header.css', 101) %}
        {% do assets.addCss('theme://css/insert.css', 103) %}
        {% do assets.addCss('theme://css/blog-post.css', 104) %}

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
                <!-- <h1 class=\"myLogo\"><a href=\"{{ base_url == '' ? '/' : base_url }}\"></a></h1> -->
                {% include 'partials/name_logo.html.twig' %}

            <!-- </div> -->
                {% include 'partials/top_nav.html.twig' %}
        </header>
        {% endblock %}

        {% include 'partials/insert.html.twig' %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <article class=\"pa3 pa5-ns {{ class }}\">
        <h2 class=\"f2\">{{ page.header.posting }}</h2>
        <div class=\"measure lh-copy\">
            {% block content %}{% endblock %}
        </div>
        </article>
        {% endblock %}

        {% block footer %}
        <footer id=\"footer\">
              <p>YR FOOTR.</p>
        </footer>
        {% endblock %}

      <script>
      {% include 'partials/scribbler_script.html.twig' %}
      </script>


</body>
</html>
", "partials/base.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/partials/base.html.twig");
    }
}
