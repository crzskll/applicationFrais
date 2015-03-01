<?php

/* GsbAppliFraisBundle:Visiteur:showHistorique.html.twig */
class __TwigTemplate_8da7d9fad134720c83464ea53788dcdb0fb751ad296808ddb72f309c76aa0ee4 extends Twig_Template
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
            'ligneforfait' => array($this, 'block_ligneforfait'),
            'lignehorsforfait' => array($this, 'block_lignehorsforfait'),
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
        echo "\t
\t<div>
\t\t<div>
\t\t\t<div class=\"infosFiche\">
\t\t\t\tFiche de ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "date", array()), "format", array(0 => "F Y"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"infosFiche right\">
\t\t\t\tVisiteur N°";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"infosFiche\">
\t\t\t\tDerniere modification effectuée le :<br>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateModification", array()), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"infosFiche right\">
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 24
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 126
        echo "

\t  ";
        // line 128
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 205
        echo "\t


";
    }

    // line 24
    public function block_ligneforfait($context, array $blocks = array())
    {
        // line 25
        echo "\t    <table id=\"ligneForfait\">
\t      <caption>ligne forait</caption>
\t      <tr>
\t      \t<th class=\"legende\">
\t      \t\tForfait
\t      \t</th>
\t        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfaitLigne"]) {
            // line 32
            echo "
\t      \t\t";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forfaitLigne"], "fraisForfaits", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                // line 34
                echo "
\t      \t\t\t<td class=\"quantiteForfait\">
\t        \t\t\t";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["frais"], "forfait", array()), "libelle", array()), "html", null, true);
                echo "
\t        \t\t</td>

\t      \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
\t      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfaitLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t      </tr>
\t      <tr>

\t

\t        <td class=\"legende\">
\t      \t\tQuantite
\t      \t</td>
\t      \t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfaitLigne"]) {
            // line 51
            echo "
\t      \t\t";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forfaitLigne"], "fraisForfaits", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                // line 53
                echo "
\t      \t\t\t<td class=\"quantiteForfait\">
\t        \t\t\t";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "quantite", array()), "html", null, true);
                echo "
\t        \t\t</td>

\t      \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
\t      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfaitLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
\t      </tr>

\t      <tr >

\t        <td class=\"legende\">
\t      \t\tCout unitaire
\t      \t</td>
\t      \t
\t        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfaitLigne"]) {
            // line 71
            echo "
\t      \t\t";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forfaitLigne"], "fraisForfaits", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                // line 73
                echo "
\t      \t\t\t<td class=\"quantiteForfait\">
\t        \t\t\t";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["frais"], "forfait", array()), "montant", array()), "html", null, true);
                echo " €
\t        \t\t</td>

\t      \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "
\t      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfaitLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t        

\t      </tr>

\t      <tr >

\t        <td class=\"legende noBorder\">
\t      \t\t
\t      \t</td>
\t        <td class=\"quantiteForfait noBorder\">
\t        \t
\t        </td>
\t        <td class=\"quantiteForfait noBorder\">
\t        \t
\t        </td>
\t        <td class=\"quantiteForfait noBorder\">
\t        \t
\t        </td>
\t        <td class=\"quantiteForfait noBorder\">
\t        \t
\t        </td>

\t      </tr>

\t      <tr >

\t        <td class=\"legende noBorder\">
\t      
\t      \t</td>
\t        <td class=\"quantiteForfait noBorder\">
\t        \t
\t        </td>
\t        <td class=\"quantiteForfait noBorder\">
\t        \t
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \tTotal
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t€
\t        </td>

\t      </tr>
\t    </table>
\t  ";
    }

    // line 128
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 129
        echo "\t    <table id=\"ligneHorsForfait\">
\t      <caption>ligne hors forfait</caption>
\t      <tr id=\"libelleHorsForfait\">
\t        <th class=\"quantiteHorsForfait\">
\t          Date
\t        </th>
\t        <th class=\"descriptionHorsForfait\">
\t          Description
\t        </th>
\t        <th class=\"quantiteHorsForfait\">
\t          Montant
\t        </th>
\t        <th class=\"delHorsForfait\">
\t            
\t        </th>
\t      </tr>
\t      <tr id=\"quantiteHorsForfait\">

\t        ";
        // line 147
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 148
            echo "\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"descriptionHorsForfait\">
\t            ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
\t          </td>
\t          <td class=\"delHorsForfait\">
\t            <a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur_ligneHorsForfait_edit", array("idVisit" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()), "idLigne" => $this->getAttribute($context["ligneHorsForfait"], "id", array()))), "html", null, true);
            echo "\">edit</a>
\t          </td>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
\t        <tr >

\t\t        <td class=\"legende noBorder\">
\t\t      \t\t
\t\t      \t</td>
\t\t        <td class=\"quantiteForfait noBorder\">
\t\t        \t
\t\t        </td>
\t\t        <td class=\"quantiteForfait noBorder\">
\t\t        \t
\t\t        </td>
\t\t        <td class=\"quantiteForfait noBorder\">
\t\t        \t
\t\t        </td>
\t\t        <td class=\"quantiteForfait noBorder\">
\t\t        \t
\t\t        </td>

\t\t      </tr>

\t\t      <tr >

\t\t        <td class=\"legende noBorder\">
\t\t      
\t\t      \t</td>
\t\t        <td class=\"quantiteForfait noBorder\">
\t\t        \t
\t\t        </td>
\t\t        <td class=\"quantiteForfait noBorder\">
\t\t        \t
\t\t        </td>
\t\t        <td class=\"quantiteForfait\">
\t\t        \tTotal
\t\t        </td>
\t\t        <td class=\"quantiteForfait\">
\t\t        \t€
\t\t        </td>

\t\t      </tr>

\t      </tr>
\t    </table>  
\t  ";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:Visiteur:showHistorique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 161,  316 => 158,  310 => 155,  304 => 152,  298 => 149,  295 => 148,  291 => 147,  271 => 129,  268 => 128,  220 => 81,  213 => 79,  203 => 75,  199 => 73,  195 => 72,  192 => 71,  188 => 70,  177 => 61,  170 => 59,  160 => 55,  156 => 53,  152 => 52,  149 => 51,  145 => 50,  135 => 42,  128 => 40,  118 => 36,  114 => 34,  110 => 33,  107 => 32,  103 => 31,  95 => 25,  92 => 24,  85 => 205,  83 => 128,  79 => 126,  77 => 24,  67 => 19,  61 => 16,  53 => 11,  47 => 8,  41 => 4,  38 => 3,  11 => 1,);
    }
}
