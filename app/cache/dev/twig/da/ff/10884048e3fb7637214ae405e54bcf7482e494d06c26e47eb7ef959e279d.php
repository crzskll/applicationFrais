<?php

/* GsbAppliFraisBundle:Visiteur:historique.html.twig */
class __TwigTemplate_daff10884048e3fb7637214ae405e54bcf7482e494d06c26e47eb7ef959e279d extends Twig_Template
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
";
    }

    // line 8
    public function block_corps($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayParentBlock("corps", $context, $blocks);
        echo "

\t<div class=\"listeHistorique\">
\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 13
            echo "\t\t\t<div>
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "date", array()), "format", array(0 => "m-Y"), "method"), "html", null, true);
            echo "
\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "nbJustificatifs", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "dateModification", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "montantValide", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "etat", array()), "libelle", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:Visiteur:historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  61 => 12,  54 => 9,  51 => 8,  45 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
