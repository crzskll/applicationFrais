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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "date", array()), "format", array(0 => "F Y"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"infosFiche right\">
\t\t\t\t\tVisiteur N°";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"infosFiche\">
\t\t\t\t\tDerniere modification effectuée le :<br>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateModification", array()), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"infosFiche right\">
\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t  ";
        // line 30
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 135
        echo "
\t  ";
        // line 136
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 172
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "forfaitLignes", array()));
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
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitNuit"]) ? $context["forfaitNuit"] : $this->getContext($context, "forfaitNuit")), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitRepas"]) ? $context["forfaitRepas"] : $this->getContext($context, "forfaitRepas")), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitKm"]) ? $context["forfaitKm"] : $this->getContext($context, "forfaitKm")), "montant", array()), "html", null, true);
        echo " €
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forfaitEtape"]) ? $context["forfaitEtape"] : $this->getContext($context, "forfaitEtape")), "montant", array()), "html", null, true);
        echo " €
\t        </td>

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
        // line 129
        echo twig_escape_filter($this->env, (isset($context["totFraisForfait"]) ? $context["totFraisForfait"] : $this->getContext($context, "totFraisForfait")), "html", null, true);
        echo " €
\t        </td>

\t      </tr>
\t    </table>
\t  ";
    }

    // line 136
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 137
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
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 156
            echo "\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"descriptionHorsForfait\">
\t            ";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
\t          </td>
\t          <td class=\"delHorsForfait\">
\t            <a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur_ligneHorsForfait_edit", array("id" => $this->getAttribute($context["ligneHorsForfait"], "id", array()))), "html", null, true);
            echo "\">edit</a>
\t          </td>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "\t      </tr>
\t    </table>  
\t  ";
    }

    // line 175
    public function block_rightUp($context, array $blocks = array())
    {
        // line 176
        echo "\t<div id=\"saisieForfait\" class=\"container\">
\t\t<div class=\"contentForm\">
\t\t\t";
        // line 178
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'form_start');
        echo "
\t\t\t    ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'label');
        echo "
\t\t\t        ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'errors');
        echo "
\t\t\t        ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'label');
        echo "
\t\t\t        ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'errors');
        echo "
\t\t\t        ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'label');
        echo "
\t\t\t        ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'errors');
        echo "
\t\t\t        ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'label');
        echo "
\t\t\t        ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'errors');
        echo "
\t\t\t        ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 217
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'form_end');
        echo "

\t\t</div>
\t</div>
";
    }

    // line 223
    public function block_rightDown($context, array $blocks = array())
    {
        // line 224
        echo "\t<div id=\"saisieHorsForfait\" class=\"container\">
\t\t<div class=\"contentForm\">
\t\t\t";
        // line 226
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), 'form_start');
        echo "
\t\t\t    ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'label');
        echo "
\t\t\t        ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'errors');
        echo "
\t\t\t        ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'label');
        echo "
\t\t\t        ";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'errors');
        echo "
\t\t\t        ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'label');
        echo "
\t\t\t        ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'errors');
        echo "
\t\t\t        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 259
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), 'form_end');
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
        return array (  523 => 259,  517 => 256,  513 => 255,  509 => 254,  502 => 250,  498 => 249,  494 => 248,  487 => 244,  483 => 243,  479 => 242,  472 => 238,  468 => 237,  464 => 236,  457 => 232,  453 => 231,  449 => 230,  443 => 227,  439 => 226,  435 => 224,  432 => 223,  423 => 217,  417 => 214,  413 => 213,  409 => 212,  402 => 208,  398 => 207,  394 => 206,  387 => 202,  383 => 201,  379 => 200,  372 => 196,  368 => 195,  364 => 194,  357 => 190,  353 => 189,  349 => 188,  342 => 184,  338 => 183,  334 => 182,  328 => 179,  324 => 178,  320 => 176,  317 => 175,  311 => 169,  302 => 166,  296 => 163,  290 => 160,  284 => 157,  281 => 156,  277 => 155,  257 => 137,  254 => 136,  244 => 129,  201 => 89,  195 => 86,  189 => 83,  183 => 80,  172 => 71,  162 => 67,  156 => 64,  150 => 61,  144 => 58,  137 => 53,  133 => 52,  110 => 31,  107 => 30,  102 => 172,  100 => 136,  97 => 135,  95 => 30,  85 => 25,  79 => 22,  71 => 17,  65 => 14,  58 => 9,  55 => 8,  49 => 5,  44 => 4,  41 => 3,  11 => 1,);
    }
}
