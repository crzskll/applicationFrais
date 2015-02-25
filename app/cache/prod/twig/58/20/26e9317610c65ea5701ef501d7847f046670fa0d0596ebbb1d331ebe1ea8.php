<?php

/* GsbAppliFraisBundle:Visiteur:test.html.twig */
class __TwigTemplate_582026e9317610c65ea5701ef501d7847f046670fa0d0596ebbb1d331ebe1ea8 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:Visiteur:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
