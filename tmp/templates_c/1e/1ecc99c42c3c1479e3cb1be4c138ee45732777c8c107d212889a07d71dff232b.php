<?php

/* _sparklineFooter.twig */
class __TwigTemplate_f075810b83d05ad12412ab8f2adeb29232ddba947c19db3f496029e3378facc5 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "_sparklineFooter.twig";
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
        return new Twig_Source("<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
", "_sparklineFooter.twig", "/home/aliened/Work/mana/my-bitnami-docker-matomo/bitnami-docker-matomo/plugins/Morpheus/templates/_sparklineFooter.twig");
    }
}
