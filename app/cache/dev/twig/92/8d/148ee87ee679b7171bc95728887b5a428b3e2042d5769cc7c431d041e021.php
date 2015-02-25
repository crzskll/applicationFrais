<?php

/* GsbAppliFraisBundle:visiteur:historique.html.twig */
class __TwigTemplate_928d148ee87ee679b7171bc95728887b5a428b3e2042d5769cc7c431d041e021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GsbAppliFraisBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'corps' => array($this, 'block_corps'),
            'rightUp' => array($this, 'block_rightUp'),
            'rightDown' => array($this, 'block_rightDown'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GsbAppliFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/css/historique.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/css/saisie.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 9
    public function block_corps($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"listeHistorique\">
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 12
            echo "\t\t\t<div>
\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "date", array()), "format", array(0 => "m-Y"), "method"), "html", null, true);
            echo "
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "nbJustificatifs", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "dateModification", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "montantValide", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "etat", array()), "libelle", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</div>
";
    }

    // line 23
    public function block_rightUp($context, array $blocks = array())
    {
        // line 24
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), 'form');
        echo "
\t\t</div>
";
    }

    // line 29
    public function block_rightDown($context, array $blocks = array())
    {
        // line 30
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLigne"]) ? $context["formLigne"] : $this->getContext($context, "formLigne")), 'form');
        echo "
\t\t</div> 
";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:visiteur:historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  116 => 30,  113 => 29,  106 => 25,  103 => 24,  100 => 23,  95 => 20,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  67 => 12,  63 => 11,  60 => 10,  57 => 9,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
