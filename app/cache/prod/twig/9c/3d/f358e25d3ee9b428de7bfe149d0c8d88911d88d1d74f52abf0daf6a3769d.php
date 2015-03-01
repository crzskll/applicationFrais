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
        if (((isset($context["type"]) ? $context["type"] : null) != "horsForfait")) {
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
\t\t\t       <th></th>
\t\t\t   </tr>

\t\t\t   ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lignesForfait"]) ? $context["lignesForfait"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 23
                echo "\t\t\t\t   <tr>
\t\t\t\t       <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ligne"], "fiche", array()), "date", array()), "format", array(0 => "F Y"), "method"), "html", null, true);
                echo "</td>
\t\t\t\t       ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ligne"], "fraisForfaits", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                    // line 26
                    echo "\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "quantite", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "statut", array()), "html", null, true);
                echo "</td>
\t\t\t\t       <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "motif", array()), "html", null, true);
                echo "</td>
\t\t\t\t       <td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historique_show", array("idVisit" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "id", array()), "idFiche" => $this->getAttribute($this->getAttribute($context["ligne"], "fiche", array()), "id", array()))), "html", null, true);
                echo "\">show</a></td>
\t\t\t\t   </tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</table>
\t\t";
        }
        // line 35
        echo "
\t\t";
        // line 36
        if (((isset($context["type"]) ? $context["type"] : null) != "Forfait")) {
            // line 37
            echo "\t\t\t<table>
\t\t\t   <caption>Lignes non forfaitisées</caption>

\t\t\t   <tr>
\t\t\t       <th>Date</th>
\t\t\t       <th>Description</th>
\t\t\t       <th>Montant</th>
\t\t\t       <th>Statut</th>
\t\t\t       <th>Motif</th>
\t\t\t       <th></th>
\t\t\t   </tr>

\t\t\t   ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lignesHorsForfait"]) ? $context["lignesHorsForfait"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 50
                echo "\t\t\t\t   <tr>
\t\t\t\t\t<td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "montant", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "statut", array()), "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "motif", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td><a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historique_show", array("idVisit" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "id", array()), "idFiche" => $this->getAttribute($this->getAttribute($context["ligne"], "fiche", array()), "id", array()))), "html", null, true);
                echo "\">show</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t</table>
\t\t";
        }
        // line 61
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
        return array (  167 => 61,  163 => 59,  154 => 56,  150 => 55,  146 => 54,  142 => 53,  138 => 52,  134 => 51,  131 => 50,  127 => 49,  113 => 37,  111 => 36,  108 => 35,  104 => 33,  95 => 30,  91 => 29,  86 => 28,  77 => 26,  73 => 25,  69 => 24,  66 => 23,  62 => 22,  46 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
