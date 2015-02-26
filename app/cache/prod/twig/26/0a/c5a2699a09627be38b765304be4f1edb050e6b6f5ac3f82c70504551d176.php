<?php

/* GsbAppliFraisBundle:Visiteur:saisie.html.twig */
class __TwigTemplate_260ac5a2699a09627be38b765304be4f1edb050e6b6f5ac3f82c70504551d176 extends Twig_Template
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
            'ligneforfait' => array($this, 'block_ligneforfait'),
            'lignehorsforfait' => array($this, 'block_lignehorsforfait'),
            'rightUp' => array($this, 'block_rightUp'),
            'rightDown' => array($this, 'block_rightDown'),
            'deleteForm' => array($this, 'block_deleteForm'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/css/saisie.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_corps($context, array $blocks = array())
    {
        // line 9
        echo "
\t\t<div>
\t\t\t<div>
\t\t\t\t<div class=\"infosFiche\">
\t\t\t\t\tFiche de ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "date", array()), "format", array(0 => "F Y"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"infosFiche right\">
\t\t\t\t\tVisiteur N°";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "id", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"infosFiche\">
\t\t\t\t\tDerniere modification effectuée le :<br>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "dateModification", array()), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"infosFiche right\">
\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "prenom", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t  ";
        // line 29
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 131
        echo "
\t  ";
        // line 132
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 209
        echo "\t
";
    }

    // line 29
    public function block_ligneforfait($context, array $blocks = array())
    {
        // line 30
        echo "\t    <table id=\"ligneForfait\">
\t      <caption>ligne forait</caption>
\t      <tr>
\t      \t<th class=\"legende\">
\t      \t\tForfait
\t      \t</th>
\t        ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfaitLigne"]) {
            // line 37
            echo "
\t      \t\t";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forfaitLigne"], "fraisForfaits", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                // line 39
                echo "
\t      \t\t\t<td class=\"quantiteForfait\">
\t        \t\t\t";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["frais"], "forfait", array()), "libelle", array()), "html", null, true);
                echo "
\t        \t\t</td>

\t      \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
\t      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfaitLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t      </tr>
\t      <tr>

\t

\t        <td class=\"legende\">
\t      \t\tQuantite
\t      \t</td>
\t      \t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfaitLigne"]) {
            // line 56
            echo "
\t      \t\t";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forfaitLigne"], "fraisForfaits", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                // line 58
                echo "
\t      \t\t\t<td class=\"quantiteForfait\">
\t        \t\t\t";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["frais"], "quantite", array()), "html", null, true);
                echo "
\t        \t\t</td>

\t      \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
\t      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfaitLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
\t      </tr>

\t      <tr >

\t        <td class=\"legende\">
\t      \t\tCout unitaire
\t      \t</td>
\t      \t
\t        ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfaitLigne"]) {
            // line 76
            echo "
\t      \t\t";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forfaitLigne"], "fraisForfaits", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
                // line 78
                echo "
\t      \t\t\t<td class=\"quantiteForfait\">
\t        \t\t\t";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["frais"], "forfait", array()), "montant", array()), "html", null, true);
                echo " €
\t        \t\t</td>

\t      \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
\t      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfaitLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
\t        \t";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["totFraisForfait"]) ? $context["totFraisForfait"] : null), "html", null, true);
        echo " €
\t        </td>

\t      </tr>
\t    </table>
\t  ";
    }

    // line 132
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 133
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
        // line 151
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 152
            echo "\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"descriptionHorsForfait\">
\t            ";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
\t          </td>
\t          <td class=\"delHorsForfait\">
\t            <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur_ligneHorsForfait_edit", array("idVisit" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "id", array()), "idLigne" => $this->getAttribute($context["ligneHorsForfait"], "id", array()))), "html", null, true);
            echo "\">edit</a>
\t          </td>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
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
\t\t        \t";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["totFraisHorsForfait"]) ? $context["totFraisHorsForfait"] : null), "html", null, true);
        echo " €
\t\t        </td>

\t\t      </tr>

\t      </tr>
\t    </table>  
\t  ";
    }

    // line 212
    public function block_rightUp($context, array $blocks = array())
    {
        // line 213
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 214
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'form');
        echo "

\t\t</div>
";
    }

    // line 219
    public function block_rightDown($context, array $blocks = array())
    {
        // line 220
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 221
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'form_start');
        echo "
\t\t\t    ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'label');
        echo "
\t\t\t        ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'errors');
        echo "
\t\t\t        ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'label');
        echo "
\t\t\t        ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'errors');
        echo "
\t\t\t        ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'label');
        echo "
\t\t\t        ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'errors');
        echo "
\t\t\t        ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 254
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'form_end');
        echo "

\t\t\t";
        // line 256
        $this->displayBlock('deleteForm', $context, $blocks);
        // line 258
        echo "\t\t</div> 
";
    }

    // line 256
    public function block_deleteForm($context, array $blocks = array())
    {
        // line 257
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:Visiteur:saisie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 257,  509 => 256,  504 => 258,  502 => 256,  497 => 254,  491 => 251,  487 => 250,  483 => 249,  476 => 245,  472 => 244,  468 => 243,  461 => 239,  457 => 238,  453 => 237,  446 => 233,  442 => 232,  438 => 231,  431 => 227,  427 => 226,  423 => 225,  417 => 222,  413 => 221,  410 => 220,  407 => 219,  399 => 214,  396 => 213,  393 => 212,  381 => 201,  343 => 165,  334 => 162,  328 => 159,  322 => 156,  316 => 153,  313 => 152,  309 => 151,  289 => 133,  286 => 132,  276 => 125,  235 => 86,  228 => 84,  218 => 80,  214 => 78,  210 => 77,  207 => 76,  203 => 75,  192 => 66,  185 => 64,  175 => 60,  171 => 58,  167 => 57,  164 => 56,  160 => 55,  150 => 47,  143 => 45,  133 => 41,  129 => 39,  125 => 38,  122 => 37,  118 => 36,  110 => 30,  107 => 29,  102 => 209,  100 => 132,  97 => 131,  95 => 29,  85 => 24,  79 => 21,  71 => 16,  65 => 13,  59 => 9,  56 => 8,  50 => 5,  45 => 4,  42 => 3,  11 => 1,);
    }
}
