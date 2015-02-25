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
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "nbKm", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "nbEtape", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "nbNuit", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "nbRepas", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "statut", array()), "libelle", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesHorsForfait"]) ? $context["lignesHorsForfait"] : $this->getContext($context, "lignesHorsForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 16
            echo "\t\t\t<div>
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "montant", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "statut", array()), "libelle", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
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
        return array (  105 => 23,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  81 => 16,  77 => 15,  74 => 14,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
