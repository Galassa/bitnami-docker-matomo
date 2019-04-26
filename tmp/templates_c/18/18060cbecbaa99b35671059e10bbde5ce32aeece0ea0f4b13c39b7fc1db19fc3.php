<?php

/* @CoreHome/_favicon.twig */
class __TwigTemplate_461e4e31aff94c161d33cc81de93ce53f4b53d94b21a3714abc38e3684d3e052 extends Twig_Template
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
        if (((($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo")) && (isset($context["customFavicon"]) || array_key_exists("customFavicon", $context))) && ($context["customFavicon"] ?? $this->getContext($context, "customFavicon")))) {
            // line 2
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["customFavicon"] ?? $this->getContext($context, "customFavicon")), "html", null, true);
            echo "\"/>
";
        } else {
            // line 4
            echo "    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
    <link rel=\"icon\" type='image/png' sizes='256x256' href=\"plugins/CoreHome/images/applogo_256.png\"/>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isCustomLogo and customFavicon is defined and customFavicon %}
    <link rel=\"shortcut icon\" href=\"{{ customFavicon }}\"/>
{% else %}
    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
    <link rel=\"icon\" type='image/png' sizes='256x256' href=\"plugins/CoreHome/images/applogo_256.png\"/>
{% endif %}", "@CoreHome/_favicon.twig", "/home/aliened/Work/mana/my-bitnami-docker-matomo/bitnami-docker-matomo/plugins/CoreHome/templates/_favicon.twig");
    }
}
