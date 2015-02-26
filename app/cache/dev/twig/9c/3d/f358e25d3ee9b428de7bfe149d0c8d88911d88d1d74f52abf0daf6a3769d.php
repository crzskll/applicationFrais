<?php

/* GsbAppliFraisBundle:Visiteur:ligneHistorique.html.twig */
class __TwigTemplate_9c3df358e25d3ee9b428de7bfe149d0c8d88911d88d1d74f52abf0daf6a3769d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GsbAppliFraisBundle:visiteur:historique.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GsbAppliFraisBundle:visiteur:historique.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_corps($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"listeHistorique\">
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesForfait"]) ? $context["lignesForfait"] : $this->getContext($context, "lignesForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 6
            echo "\t\t\t<div>
\t\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "statut", array()), "libelle", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesHorsForfait"]) ? $context["lignesHorsForfait"] : $this->getContext($context, "lignesHorsForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 12
            echo "\t\t\t<div>
\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "montant", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "statut", array()), "libelle", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:Visiteur:ligneHistorique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  65 => 12,  61 => 11,  58 => 10,  49 => 7,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
