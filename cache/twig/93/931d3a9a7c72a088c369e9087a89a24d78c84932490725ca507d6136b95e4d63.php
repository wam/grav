<?php

/* about.html.twig */
class __TwigTemplate_fe64971f42a96aba8638538a6746c31c78475ddf894745790e94266a17f92309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base_page.html.twig", "about.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/about.css", 1 => 105), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"biopic\">
    ";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "ryan1-b.jpg", array(), "array"), "grayscale", array(), "method");
        echo "
  </div>
  ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hed", array())) {
            // line 10
            echo "  <h2>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hed", array());
            echo "</h2>
  ";
        }
        // line 12
        echo "  <div class=\"about\">
    ";
        // line 13
        echo ($context["content"] ?? null);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  50 => 12,  44 => 10,  42 => 9,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base_page.html.twig' %}

{% do assets.addCss('theme://css/about.css', 105) %}

{% block content %}
  <div class=\"biopic\">
    {{ page.media['ryan1-b.jpg'].grayscale() }}
  </div>
  {% if page.header.hed %}
  <h2>{{ page.header.hed }}</h2>
  {% endif %}
  <div class=\"about\">
    {{ content }}
  </div>
{% endblock %}
", "about.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/about.html.twig");
    }
}
