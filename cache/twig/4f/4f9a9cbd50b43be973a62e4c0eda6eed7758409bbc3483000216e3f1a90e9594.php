<?php

/* partials/insert.html.twig */
class __TwigTemplate_618b1d027444afefe373ae0ae80db7e9ebc475034dd5f269fd7a8f9eeed1afe1 extends Twig_Template
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
        echo "<div id=\"cDiv\" class=\"cDiv\" onclick=\"pause()\"></div>
";
    }

    public function getTemplateName()
    {
        return "partials/insert.html.twig";
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
        return new Twig_Source("<div id=\"cDiv\" class=\"cDiv\" onclick=\"pause()\"></div>
", "partials/insert.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/partials/insert.html.twig");
    }
}
