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
        echo "\t<div id=\"fiche\" class=\"container\">

\t\t<div>
\t\t\t<div>
\t\t\t\t<div class=\"infosFiche\">
\t\t\t\t\tFiche de ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "date", array()), "format", array(0 => "F Y"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"infosFiche right\">
\t\t\t\t\tVisiteur N°";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "id", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"infosFiche\">
\t\t\t\t\tDerniere modification effectuée le :<br>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "dateModification", array()), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"infosFiche right\">
\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "prenom", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t  ";
        // line 30
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 137
        echo "
\t  ";
        // line 138
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 215
        echo "\t</div>
";
    }

    // line 30
    public function block_ligneforfait($context, array $blocks = array())
    {
        // line 31
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
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneForfait"]) {
            // line 53
            echo "
\t        <td class=\"legende\">
\t      \t\tQuantite
\t      \t</td>
\t        <td class=\"quantiteForfait\">
\t        \t";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbEtape", array()), "html", null, true);
            echo "
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbKm", array()), "html", null, true);
            echo "
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbNuit", array()), "html", null, true);
            echo "
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbRepas", array()), "html", null, true);
            echo "
\t        </td>

\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
\t      </tr>

\t      <tr >

\t        <td class=\"legende\">
\t      \t\tCout unitaire
\t      \t</td>
\t      \t<td class=\"quantiteForfait\">
\t        \t";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitEtape"]) ? $context["forfaitEtape"] : null), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitKm"]) ? $context["forfaitKm"] : null), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitNuit"]) ? $context["forfaitNuit"] : null), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitRepas"]) ? $context["forfaitRepas"] : null), "montant", array()), "html", null, true);
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
        // line 131
        echo twig_escape_filter($this->env, (isset($context["totFraisForfait"]) ? $context["totFraisForfait"] : null), "html", null, true);
        echo " €
\t        </td>

\t      </tr>
\t    </table>
\t  ";
    }

    // line 138
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 139
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
        // line 157
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 158
            echo "\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"descriptionHorsForfait\">
\t            ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
\t          </td>
\t          <td class=\"delHorsForfait\">
\t            <a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur_ligneHorsForfait_edit", array("id" => $this->getAttribute($context["ligneHorsForfait"], "id", array()))), "html", null, true);
            echo "\">edit</a>
\t          </td>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
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
        // line 207
        echo twig_escape_filter($this->env, (isset($context["totFraisHorsForfait"]) ? $context["totFraisHorsForfait"] : null), "html", null, true);
        echo " €
\t\t        </td>

\t\t      </tr>

\t      </tr>
\t    </table>  
\t  ";
    }

    // line 218
    public function block_rightUp($context, array $blocks = array())
    {
        // line 219
        echo "\t<div id=\"saisieForfait\" class=\"container\">
\t\t<div class=\"contentForm\">
\t\t\t";
        // line 221
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'form_start');
        echo "
\t\t\t    ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbEtape", array()), 'label');
        echo "
\t\t\t        ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbEtape", array()), 'errors');
        echo "
\t\t\t        ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbEtape", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbKm", array()), 'label');
        echo "
\t\t\t        ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbKm", array()), 'errors');
        echo "
\t\t\t        ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbKm", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbNuit", array()), 'label');
        echo "
\t\t\t        ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbNuit", array()), 'errors');
        echo "
\t\t\t        ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbNuit", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbRepas", array()), 'label');
        echo "
\t\t\t        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbRepas", array()), 'errors');
        echo "
\t\t\t        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbRepas", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 257
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 260
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'form_end');
        echo "

\t\t</div>
\t</div>
";
    }

    // line 266
    public function block_rightDown($context, array $blocks = array())
    {
        // line 267
        echo "\t<div id=\"saisieHorsForfait\" class=\"container\">
\t\t<div class=\"contentForm\">
\t\t\t";
        // line 269
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'form_start');
        echo "
\t\t\t    ";
        // line 270
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'label');
        echo "
\t\t\t        ";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'errors');
        echo "
\t\t\t        ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'label');
        echo "
\t\t\t        ";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'errors');
        echo "
\t\t\t        ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'label');
        echo "
\t\t\t        ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'errors');
        echo "
\t\t\t        ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 291
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 297
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 298
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 302
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'form_end');
        echo "
\t\t</div>
\t</div>
";
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
        return array (  569 => 302,  563 => 299,  559 => 298,  555 => 297,  548 => 293,  544 => 292,  540 => 291,  533 => 287,  529 => 286,  525 => 285,  518 => 281,  514 => 280,  510 => 279,  503 => 275,  499 => 274,  495 => 273,  489 => 270,  485 => 269,  481 => 267,  478 => 266,  469 => 260,  463 => 257,  459 => 256,  455 => 255,  448 => 251,  444 => 250,  440 => 249,  433 => 245,  429 => 244,  425 => 243,  418 => 239,  414 => 238,  410 => 237,  403 => 233,  399 => 232,  395 => 231,  388 => 227,  384 => 226,  380 => 225,  374 => 222,  370 => 221,  366 => 219,  363 => 218,  351 => 207,  313 => 171,  304 => 168,  298 => 165,  292 => 162,  286 => 159,  283 => 158,  279 => 157,  259 => 139,  256 => 138,  246 => 131,  201 => 89,  195 => 86,  189 => 83,  183 => 80,  172 => 71,  162 => 67,  156 => 64,  150 => 61,  144 => 58,  137 => 53,  133 => 52,  110 => 31,  107 => 30,  102 => 215,  100 => 138,  97 => 137,  95 => 30,  85 => 25,  79 => 22,  71 => 17,  65 => 14,  58 => 9,  55 => 8,  49 => 5,  44 => 4,  41 => 3,  11 => 1,);
    }
}
