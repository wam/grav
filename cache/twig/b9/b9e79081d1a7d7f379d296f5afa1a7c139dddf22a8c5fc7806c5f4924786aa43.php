<?php

/* partials/name_logo.html.twig */
class __TwigTemplate_e35ef41906f5e670246d14114c29502df00c7a6f0590a8f4c438c23059d31079 extends Twig_Template
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
        echo "<span class=\"nameLogo\"><a href=\"";
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\"><h1 class=\"myLogo\"><span class=\"name\"><span class=\"first\">r</span>yan t. little</span></h1></a></span>
";
    }

    public function getTemplateName()
    {
        return "partials/name_logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<span class=\"nameLogo\"><a href=\"{{ base_url == '' ? '/' : base_url }}\"><h1 class=\"myLogo\"><span class=\"name\"><span class=\"first\">r</span>yan t. little</span></h1></a></span>
", "partials/name_logo.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/partials/name_logo.html.twig");
    }
}
