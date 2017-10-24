<?php

/* collection.html.twig */
class __TwigTemplate_06992e35865003eb65b522dac03a9c14cdccdcf8ff0401bf4212d533e98f8ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base_collection.html.twig", "collection.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base_collection.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        echo ($context["content"] ?? null);
        echo "

";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mediahead", array())) {
            // line 9
            echo "<h2>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mediahead", array());
            echo "</h2>
";
        }
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mediaitems", array())) {
            // line 13
            echo "  <section class=\"p-grid2\">
     ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mediaitems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mediaitem"]) {
                // line 15
                echo "
         <article class=\"item\">
         <!-- <div class=\"pik\"> -->
\t\t\t\t\t ";
                // line 18
                echo $this->getAttribute($context["mediaitem"], "frame", array());
                echo "
         <!-- </div> -->
         <div class=\"words\">
           <p class=\"title\">";
                // line 21
                echo $this->getAttribute($context["mediaitem"], "hed", array());
                echo "</p>
           <p class=\"sub\">";
                // line 22
                echo $this->getAttribute($context["mediaitem"], "dek", array());
                echo "</p>
         </article>

     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "  </section>
";
        }
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "itemhead", array())) {
            // line 30
            echo "<h2>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "itemhead", array());
            echo "</h2>
";
        }
        // line 32
        echo "
";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "items", array())) {
            // line 34
            echo "  <section class=\"p-grid\">
     ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 36
                echo "
         <article class=\"item\">
         <a href=\"";
                // line 38
                echo $this->getAttribute($context["item"], "link", array());
                echo "\"><div class=\"pik\">
\t\t\t\t\t ";
                // line 39
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "grayscale", array()), "html", array(), "method");
                echo "
         </div></a>
         <div class=\"words\">
           <a href=\"";
                // line 42
                echo $this->getAttribute($context["item"], "link", array());
                echo "\"><p class=\"title\">";
                echo $this->getAttribute($context["item"], "hed", array());
                echo "</a></p>
           <p class=\"sub\">";
                // line 43
                echo $this->getAttribute($context["item"], "dek", array());
                echo "</p>
         </article>

     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "  </section>
";
        }
        // line 49
        echo "


  ";
        // line 52
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "listhead", array())) {
            // line 53
            echo "  <h3>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "listhead", array());
            echo "</h3>
  ";
        }
        // line 55
        echo "

  ";
        // line 57
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "listlinks", array())) {
            // line 58
            echo "  <ul class=\"list2\">
  ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "listlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["listlink"]) {
                // line 60
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
            // line 62
            echo "  </ul>
  ";
        }
        // line 64
        echo "
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
        return array (  186 => 64,  182 => 62,  171 => 60,  167 => 59,  164 => 58,  162 => 57,  158 => 55,  152 => 53,  150 => 52,  145 => 49,  141 => 47,  131 => 43,  125 => 42,  119 => 39,  115 => 38,  111 => 36,  107 => 35,  104 => 34,  102 => 33,  99 => 32,  93 => 30,  91 => 29,  88 => 28,  84 => 26,  74 => 22,  70 => 21,  64 => 18,  59 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  41 => 9,  39 => 8,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base_collection.html.twig' %}


{% block content %}

{{ content }}

{% if page.header.mediahead %}
<h2>{{ page.header.mediahead }}</h2>
{% endif %}

{% if page.header.mediaitems %}
  <section class=\"p-grid2\">
     {% for mediaitem in page.header.mediaitems %}

         <article class=\"item\">
         <!-- <div class=\"pik\"> -->
\t\t\t\t\t {{ mediaitem.frame }}
         <!-- </div> -->
         <div class=\"words\">
           <p class=\"title\">{{ mediaitem.hed }}</p>
           <p class=\"sub\">{{ mediaitem.dek }}</p>
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
\t\t\t\t\t {{ page.media[item.image].grayscale.html() }}
         </div></a>
         <div class=\"words\">
           <a href=\"{{ item.link }}\"><p class=\"title\">{{ item.hed }}</a></p>
           <p class=\"sub\">{{ item.dek }}</p>
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

  {% endblock %}
", "collection.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/collection.html.twig");
    }
}
