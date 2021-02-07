<?php

/* logo.html.twig */
class __TwigTemplate_e8970395a3b7f2fc860e8aff0ce4626d64d45044789dec19633a3ea64da61dee extends Twig_Template
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
        echo "<a class=\"navbar-brand\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["homePage"]) ? $context["homePage"] : null), "html", null, true);
        echo "\">
    <img class=\"left_logo\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
        echo "\" alt=\"logo di sinistra\"/>
</a> ";
    }

    public function getTemplateName()
    {
        return "logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "logo.html.twig", "C:\\Program Files\\Ampps\\www\\templates\\standard\\layout\\appLms\\logo.html.twig");
    }
}
