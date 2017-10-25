<?php

/* collection.html.twig */
class __TwigTemplate_06992e35865003eb65b522dac03a9c14cdccdcf8ff0401bf4212d533e98f8ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base_page.html.twig", "collection.html.twig", 1);
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/collection.css", 1 => 105), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo ($context["content"] ?? null);
        echo "

";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mediahead", array())) {
            // line 10
            echo "<h2>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mediahead", array());
            echo "</h2>
";
        }
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mediaitems", array())) {
            // line 14
            echo "  <section class=\"p-grid2\">
     ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mediaitems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mediaitem"]) {
                // line 16
                echo "
         <article class=\"item2\">
          <div class=\"pik2b\" style=\"background-image:url(";
                // line 18
                echo $this->getAttribute($context["mediaitem"], "image", array());
                echo ");\">
            ";
                // line 19
                echo $this->getAttribute($context["mediaitem"], "frame", array());
                echo "
          </div>
          <div class=\"words\">
            <p class=\"title\">";
                // line 22
                echo $this->getAttribute($context["mediaitem"], "hed", array());
                echo "</p>
            <p class=\"sub\">";
                // line 23
                echo $this->getAttribute($context["mediaitem"], "dek", array());
                echo "</p>
          </div>
         </article>

     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "  </section>
";
        }
        // line 30
        echo "
";
        // line 31
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "itemhead", array())) {
            // line 32
            echo "<h2>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "itemhead", array());
            echo "</h2>
";
        }
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "items", array())) {
            // line 36
            echo "  <section class=\"p-grid\">
     ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 38
                echo "
         <article class=\"item\">
         <a href=\"";
                // line 40
                echo $this->getAttribute($context["item"], "link", array());
                echo "\"><div class=\"pik\">
\t\t\t\t\t ";
                // line 41
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "html", array(), "method");
                echo "
         </div></a>
         <div class=\"words\">
           <a href=\"";
                // line 44
                echo $this->getAttribute($context["item"], "link", array());
                echo "\"><p class=\"title\">";
                echo $this->getAttribute($context["item"], "hed", array());
                echo "</a></p>
           <p class=\"sub\">";
                // line 45
                echo $this->getAttribute($context["item"], "dek", array());
                echo "</p>
         </div>
         </article>

     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "  </section>
";
        }
        // line 52
        echo "


  ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "listhead", array())) {
            // line 56
            echo "  <h3>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "listhead", array());
            echo "</h3>
  ";
        }
        // line 58
        echo "

  ";
        // line 60
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "listlinks", array())) {
            // line 61
            echo "  <ul class=\"list2\">
  ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "listlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["listlink"]) {
                // line 63
                echo "  <li><a href=\"";
                echo $this->getAttribute($context["listlink"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["listlink"], "name", array());
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "  </ul>
  ";
        }
        // line 67
        echo "
  <svg>
    <filter id=\"grayscale-filter\">
      <feColorMatrix type=\"saturate\" values=\"0\"/>
    </filter>
  </svg>

  <svg>
    <filter id=\"colorize\" color-interpolation-filters=\"sRGB\">
      <feColorMatrix type=\"matrix\"
       values=\"0.251 0 0 0 0.749
               0.75 0 0 0 0.25
               0.75 0 0 0 0.25
               0 0 0 1 0\" />
    </filter>
  </svg>

  ";
    }

    public function getTemplateName()
    {
        return "collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 67,  190 => 65,  179 => 63,  175 => 62,  172 => 61,  170 => 60,  166 => 58,  160 => 56,  158 => 55,  153 => 52,  149 => 50,  138 => 45,  132 => 44,  126 => 41,  122 => 40,  118 => 38,  114 => 37,  111 => 36,  109 => 35,  106 => 34,  100 => 32,  98 => 31,  95 => 30,  91 => 28,  80 => 23,  76 => 22,  70 => 19,  66 => 18,  62 => 16,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  44 => 10,  42 => 9,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

{% do assets.addCss('theme://css/collection.css', 105) %}

{% block content %}

{{ content }}

{% if page.header.mediahead %}
<h2>{{ page.header.mediahead }}</h2>
{% endif %}

{% if page.header.mediaitems %}
  <section class=\"p-grid2\">
     {% for mediaitem in page.header.mediaitems %}

         <article class=\"item2\">
          <div class=\"pik2b\" style=\"background-image:url({{ mediaitem.image }});\">
            {{ mediaitem.frame }}
          </div>
          <div class=\"words\">
            <p class=\"title\">{{ mediaitem.hed }}</p>
            <p class=\"sub\">{{ mediaitem.dek }}</p>
          </div>
         </article>

     {% endfor %}
  </section>
{% endif %}

{% if page.header.itemhead %}
<h2>{{ page.header.itemhead }}</h2>
{% endif %}

{% if page.header.items %}
  <section class=\"p-grid\">
     {% for item in page.header.items %}

         <article class=\"item\">
         <a href=\"{{ item.link }}\"><div class=\"pik\">
\t\t\t\t\t {{ page.media[item.image].html() }}
         </div></a>
         <div class=\"words\">
           <a href=\"{{ item.link }}\"><p class=\"title\">{{ item.hed }}</a></p>
           <p class=\"sub\">{{ item.dek }}</p>
         </div>
         </article>

     {% endfor %}
  </section>
{% endif %}



  {% if page.header.listhead %}
  <h3>{{ page.header.listhead }}</h3>
  {% endif %}


  {% if page.header.listlinks %}
  <ul class=\"list2\">
  {% for listlink in page.header.listlinks %}
  <li><a href=\"{{ listlink.link }}\">{{ listlink.name }}</a></li>
  {% endfor %}
  </ul>
  {% endif %}

  <svg>
    <filter id=\"grayscale-filter\">
      <feColorMatrix type=\"saturate\" values=\"0\"/>
    </filter>
  </svg>

  <svg>
    <filter id=\"colorize\" color-interpolation-filters=\"sRGB\">
      <feColorMatrix type=\"matrix\"
       values=\"0.251 0 0 0 0.749
               0.75 0 0 0 0.25
               0.75 0 0 0 0.25
               0 0 0 1 0\" />
    </filter>
  </svg>

  {% endblock %}
", "collection.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/collection.html.twig");
    }
}
