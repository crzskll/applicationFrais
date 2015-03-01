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
        // line 7
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "horsForfait")) {
            // line 8
            echo "\t\t\t<table>
\t\t\t   <caption>Lignes forfaitisées</caption>

\t\t\t   <tr>
\t\t\t       <th>Date</th>
\t\t\t       <th>Nuit</th>
\t\t\t       <th>Repas</th>
\t\t\t       <th>Km</th>
\t\t\t       <th>Etape</th>
\t\t\t       <th>Statut</th>
\t\t\t       <th>Motif</th>
\t\t\t   </tr>

\t\t\t   ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lignesForfait"]) ? $context["lignesForfait"] : $this->getContext($context, "lignesForfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 22
                echo "\t\t\t\t   <tr>
\t\t\t\t       <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ligne"], "fiche", array()), "date", array()), "format", array(0 => "F Y"), "method"), "html", null, true);
                echo "</td>
\t\t\t\t       ";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ligne"], "fraisForfaits", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                    // line 25
                    echo "\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "quantite", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "statut", array()), "html", null, true);
                echo "</td>
\t\t\t\t       <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "motif", array()), "html", null, true);
                echo "</td>
\t\t\t\t   </tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t</table>
\t\t";
        }
        // line 33
        echo "
\t\t";
        // line 34
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "Forfait")) {
            // line 35
            echo "\t\t\t<table>
\t\t\t   <caption>Lignes non forfaitisées</caption>

\t\t\t   <tr>
\t\t\t       <th>Date</th>
\t\t\t       <th>Description</th>
\t\t\t       <th>Montant</th>
\t\t\t       <th>Statut</th>
\t\t\t       <th>Motif</th>
\t\t\t   </tr>

\t\t\t   ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lignesHorsForfait"]) ? $context["lignesHorsForfait"] : $this->getContext($context, "lignesHorsForfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 47
                echo "\t\t\t\t   <tr>
\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "montant", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "statut", array()), "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "motif", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t</table>
\t\t";
        }
        // line 57
        echo "
\t</div>
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
        return array (  157 => 57,  153 => 55,  144 => 52,  140 => 51,  136 => 50,  132 => 49,  128 => 48,  125 => 47,  121 => 46,  108 => 35,  106 => 34,  103 => 33,  99 => 31,  90 => 28,  85 => 27,  76 => 25,  72 => 24,  68 => 23,  65 => 22,  61 => 21,  46 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
