<?php

/* GsbAppliFraisBundle:Default:portal.html.twig */
class __TwigTemplate_defa14d4a9944c26f53bebdb5e4d729d4cd4ad26e6b59dffc1bc8107f34669c3 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link href = \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/css/portal.css"), "html", null, true);
        echo "\" 
          rel = \"stylesheet\" type = \"text/css\"/>
        <title>Portal</title>
    </head>
    <body>
        <h1>Laboratoir Galaxy Swiss Bourdin</h1>
        <div class=\"connexion\">
            <img   src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/images/logo.png"), "html", null, true);
        echo "\"/>
            
            ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formConnect"]) ? $context["formConnect"] : $this->getContext($context, "formConnect")), 'form');
        echo "
            
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:Default:portal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  35 => 12,  25 => 5,  19 => 1,);
    }
}
