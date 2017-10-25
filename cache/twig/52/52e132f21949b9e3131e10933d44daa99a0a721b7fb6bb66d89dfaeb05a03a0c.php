<?php

/* partials/top_nav.html.twig */
class __TwigTemplate_e1b549940989296e16293e56847519b0dd040b9e5e7d2769c93cd0d472956239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
      <a href=\"#main-menu\"
         class=\"menu-toggle\"
         role=\"button\"
         id=\"main-menu-toggle\"
         aria-expanded=\"false\"
         aria-controls=\"main-menu\"
         aria-label=\"Open main menu\">
        <span class=\"sr-only\">open main menu</span>
        <span class=\"med-nav\">menu&nbsp;</span><span aria-hidden=\"true\">⊕</span>
        <!-- class=\"fa fa-plus-square-o mover\"  -->
      </a>
        <nav id=\"main-menu\"
             class=\"main-menu\"
             role=\"navigation\"
             aria-expanded=\"false\"
             aria-label=\"Main menu\">

          <a href=\"#main-menu-toggle\"
             class=\"menu-close\"
             role=\"button\"
             id=\"main-menu-close\"
             aria-expanded=\"false\"
             aria-controls=\"main-menu\"
             aria-label=\"Close main menu\">
            <span class=\"sr-only\">close main menu</span>
            <span aria-hidden=\"true\">⊕</span>
            <!-- class=\"fa fa-close\" -->
            <!-- ⊕ ⊞ + ✚ -->
          </a>
        <ul>
          <li><a href=\"/about\">about</a></li>
          <li><a href=\"/projects\">projects</a></li>
          <li><a href=\"/writing\">writing</a></li>
          <li><a href=\"/music\">music</a></li>
          <li><a href=\"/\">blog</a></li>

          <!-- <span class=\"nav-symbol\">↳ </span> -->
        </ul>
      </nav>
      <a href=\"#main-menu-toggle\"
         class=\"backdrop\"
         tabindex=\"-1\"
         aria-hidden=\"true\"
         hidden></a>
";
    }

    public function getTemplateName()
    {
        return "partials/top_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
      <a href=\"#main-menu\"
         class=\"menu-toggle\"
         role=\"button\"
         id=\"main-menu-toggle\"
         aria-expanded=\"false\"
         aria-controls=\"main-menu\"
         aria-label=\"Open main menu\">
        <span class=\"sr-only\">open main menu</span>
        <span class=\"med-nav\">menu&nbsp;</span><span aria-hidden=\"true\">⊕</span>
        <!-- class=\"fa fa-plus-square-o mover\"  -->
      </a>
        <nav id=\"main-menu\"
             class=\"main-menu\"
             role=\"navigation\"
             aria-expanded=\"false\"
             aria-label=\"Main menu\">

          <a href=\"#main-menu-toggle\"
             class=\"menu-close\"
             role=\"button\"
             id=\"main-menu-close\"
             aria-expanded=\"false\"
             aria-controls=\"main-menu\"
             aria-label=\"Close main menu\">
            <span class=\"sr-only\">close main menu</span>
            <span aria-hidden=\"true\">⊕</span>
            <!-- class=\"fa fa-close\" -->
            <!-- ⊕ ⊞ + ✚ -->
          </a>
        <ul>
          <li><a href=\"/about\">about</a></li>
          <li><a href=\"/projects\">projects</a></li>
          <li><a href=\"/writing\">writing</a></li>
          <li><a href=\"/music\">music</a></li>
          <li><a href=\"/\">blog</a></li>

          <!-- <span class=\"nav-symbol\">↳ </span> -->
        </ul>
      </nav>
      <a href=\"#main-menu-toggle\"
         class=\"backdrop\"
         tabindex=\"-1\"
         aria-hidden=\"true\"
         hidden></a>
", "partials/top_nav.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/partials/top_nav.html.twig");
    }
}
