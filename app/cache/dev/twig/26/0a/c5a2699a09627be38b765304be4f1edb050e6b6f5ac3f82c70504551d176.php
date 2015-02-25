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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "date", array()), "format", array(0 => "F Y"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"infosFiche right\">
\t\t\t\t\tVisiteur N°";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"infosFiche\">
\t\t\t\t\tDerniere modification effectuée le :<br>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateModification", array()), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"infosFiche right\">
\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t  ";
        // line 29
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 136
        echo "
\t  ";
        // line 137
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 214
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
\t        <th class=\"quantiteForfait\">
\t          Etapes
\t        </th>
\t        <th class=\"quantiteForfait\">
\t          Kilométres
\t        </th>
\t        <th class=\"quantiteForfait\">
\t          Nuits
\t        </th>
\t        <th class=\"quantiteForfait\">
\t          Repas
\t        </th>
\t      </tr>
\t      <tr>

\t        ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneForfait"]) {
            // line 52
            echo "
\t        <td class=\"legende\">
\t      \t\tQuantite
\t      \t</td>
\t        <td class=\"quantiteForfait\">
\t        \t";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbEtape", array()), "html", null, true);
            echo "
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbKm", array()), "html", null, true);
            echo "
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbNuit", array()), "html", null, true);
            echo "
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbRepas", array()), "html", null, true);
            echo "
\t        </td>

\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
\t      </tr>

\t      <tr >

\t        <td class=\"legende\">
\t      \t\tCout unitaire
\t      \t</td>
\t      \t<td class=\"quantiteForfait\">
\t        \t";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitEtape"]) ? $context["forfaitEtape"] : $this->getContext($context, "forfaitEtape")), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitKm"]) ? $context["forfaitKm"] : $this->getContext($context, "forfaitKm")), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitNuit"]) ? $context["forfaitNuit"] : $this->getContext($context, "forfaitNuit")), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitRepas"]) ? $context["forfaitRepas"] : $this->getContext($context, "forfaitRepas")), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        
\t        

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
        // line 130
        echo twig_escape_filter($this->env, (isset($context["totFraisForfait"]) ? $context["totFraisForfait"] : $this->getContext($context, "totFraisForfait")), "html", null, true);
        echo " €
\t        </td>

\t      </tr>
\t    </table>
\t  ";
    }

    // line 137
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 138
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
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 157
            echo "\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"descriptionHorsForfait\">
\t            ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
\t          </td>
\t          <td class=\"delHorsForfait\">
\t            <a href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur_ligneHorsForfait_edit", array("idVisit" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()), "idLigne" => $this->getAttribute($context["ligneHorsForfait"], "id", array()))), "html", null, true);
            echo "\">edit</a>
\t          </td>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
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
        // line 206
        echo twig_escape_filter($this->env, (isset($context["totFraisHorsForfait"]) ? $context["totFraisHorsForfait"] : $this->getContext($context, "totFraisHorsForfait")), "html", null, true);
        echo " €
\t\t        </td>

\t\t      </tr>

\t      </tr>
\t    </table>  
\t  ";
    }

    // line 217
    public function block_rightUp($context, array $blocks = array())
    {
        // line 218
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 219
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'form_start');
        echo "
\t\t\t    ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'label');
        echo "
\t\t\t        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'errors');
        echo "
\t\t\t        ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'label');
        echo "
\t\t\t        ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'errors');
        echo "
\t\t\t        ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'label');
        echo "
\t\t\t        ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'errors');
        echo "
\t\t\t        ";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'label');
        echo "
\t\t\t        ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'errors');
        echo "
\t\t\t        ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 258
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'form_end');
        echo "

\t\t</div>
";
    }

    // line 263
    public function block_rightDown($context, array $blocks = array())
    {
        // line 264
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 265
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), 'form_start');
        echo "
\t\t\t    ";
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'label');
        echo "
\t\t\t        ";
        // line 270
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'errors');
        echo "
\t\t\t        ";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'label');
        echo "
\t\t\t        ";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'errors');
        echo "
\t\t\t        ";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'label');
        echo "
\t\t\t        ";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'errors');
        echo "
\t\t\t        ";
        // line 283
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 298
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), 'form_end');
        echo "

\t\t\t";
        // line 300
        $this->displayBlock('deleteForm', $context, $blocks);
        // line 302
        echo "\t\t</div> 
";
    }

    // line 300
    public function block_deleteForm($context, array $blocks = array())
    {
        // line 301
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
        return array (  581 => 301,  578 => 300,  573 => 302,  571 => 300,  566 => 298,  560 => 295,  556 => 294,  552 => 293,  545 => 289,  541 => 288,  537 => 287,  530 => 283,  526 => 282,  522 => 281,  515 => 277,  511 => 276,  507 => 275,  500 => 271,  496 => 270,  492 => 269,  486 => 266,  482 => 265,  479 => 264,  476 => 263,  468 => 258,  462 => 255,  458 => 254,  454 => 253,  447 => 249,  443 => 248,  439 => 247,  432 => 243,  428 => 242,  424 => 241,  417 => 237,  413 => 236,  409 => 235,  402 => 231,  398 => 230,  394 => 229,  387 => 225,  383 => 224,  379 => 223,  373 => 220,  369 => 219,  366 => 218,  363 => 217,  351 => 206,  313 => 170,  304 => 167,  298 => 164,  292 => 161,  286 => 158,  283 => 157,  279 => 156,  259 => 138,  256 => 137,  246 => 130,  201 => 88,  195 => 85,  189 => 82,  183 => 79,  172 => 70,  162 => 66,  156 => 63,  150 => 60,  144 => 57,  137 => 52,  133 => 51,  110 => 30,  107 => 29,  102 => 214,  100 => 137,  97 => 136,  95 => 29,  85 => 24,  79 => 21,  71 => 16,  65 => 13,  59 => 9,  56 => 8,  50 => 5,  45 => 4,  42 => 3,  11 => 1,);
    }
}
