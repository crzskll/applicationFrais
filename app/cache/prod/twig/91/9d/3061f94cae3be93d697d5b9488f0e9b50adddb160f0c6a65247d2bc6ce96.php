<?php

/* GsbAppliFraisBundle:Visiteur:update.html.twig */
class __TwigTemplate_919d3061f94cae3be93d697d5b9488f0e9b50adddb160f0c6a65247d2bc6ce96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GsbAppliFraisBundle:Visiteur:saisie.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'deleteForm' => array($this, 'block_deleteForm'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GsbAppliFraisBundle:Visiteur:saisie.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_deleteForm($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDelete"]) ? $context["formDelete"] : null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:Visiteur:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
