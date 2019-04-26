<?php

/* @Live/ajaxTotalVisitors.twig */
class __TwigTemplate_8630eadafa30aeeb4dea0bac0df1e0994fc3ea5bea4f09d31e33e91c8947e626 extends Twig_Template
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
        $this->loadTemplate("@Live/_totalVisitors.twig", "@Live/ajaxTotalVisitors.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Live/ajaxTotalVisitors.twig";
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
        return new Twig_Source("{% include \"@Live/_totalVisitors.twig\" %}", "@Live/ajaxTotalVisitors.twig", "/home/aliened/Work/mana/my-bitnami-docker-matomo/bitnami-docker-matomo/plugins/Live/templates/ajaxTotalVisitors.twig");
    }
}
