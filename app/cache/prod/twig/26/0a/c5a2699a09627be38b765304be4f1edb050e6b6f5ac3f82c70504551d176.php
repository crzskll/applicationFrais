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
        // line 118
        echo "
\t  ";
        // line 119
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 196
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

\t        

\t      </tr>

\t      <tr >

\t        <td class=\"legende\">
\t      \t\tCout unitaire
\t      \t</td>
\t      \t<td class=\"quantiteForfait\">
\t        \t
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t
\t        </td>
\t        <td class=\"quantiteForfait\">
\t        \t
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
        // line 112
        echo twig_escape_filter($this->env, (isset($context["totFraisForfait"]) ? $context["totFraisForfait"] : null), "html", null, true);
        echo " €
\t        </td>

\t      </tr>
\t    </table>
\t  ";
    }

    // line 119
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 120
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
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 139
            echo "\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"descriptionHorsForfait\">
\t            ";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
\t          </td>
\t          <td class=\"delHorsForfait\">
\t            <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur_ligneHorsForfait_edit", array("idVisit" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "id", array()), "idLigne" => $this->getAttribute($context["ligneHorsForfait"], "id", array()))), "html", null, true);
            echo "\">edit</a>
\t          </td>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
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
        // line 188
        echo twig_escape_filter($this->env, (isset($context["totFraisHorsForfait"]) ? $context["totFraisHorsForfait"] : null), "html", null, true);
        echo " €
\t\t        </td>

\t\t      </tr>

\t      </tr>
\t    </table>  
\t  ";
    }

    // line 199
    public function block_rightUp($context, array $blocks = array())
    {
        // line 200
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 201
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'form_start');
        echo "
\t\t\t    ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'errors');
        echo "

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 216
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'form_end');
        echo "

\t\t</div>
";
    }

    // line 221
    public function block_rightDown($context, array $blocks = array())
    {
        // line 222
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 223
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'form_start');
        echo "
\t\t\t    ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'label');
        echo "
\t\t\t        ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'errors');
        echo "
\t\t\t        ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'label');
        echo "
\t\t\t        ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'errors');
        echo "
\t\t\t        ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'label');
        echo "
\t\t\t        ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'errors');
        echo "
\t\t\t        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 256
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'form_end');
        echo "

\t\t\t";
        // line 258
        $this->displayBlock('deleteForm', $context, $blocks);
        // line 260
        echo "\t\t</div> 
";
    }

    // line 258
    public function block_deleteForm($context, array $blocks = array())
    {
        // line 259
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
        return array (  469 => 259,  466 => 258,  461 => 260,  459 => 258,  454 => 256,  448 => 253,  444 => 252,  440 => 251,  433 => 247,  429 => 246,  425 => 245,  418 => 241,  414 => 240,  410 => 239,  403 => 235,  399 => 234,  395 => 233,  388 => 229,  384 => 228,  380 => 227,  374 => 224,  370 => 223,  367 => 222,  364 => 221,  356 => 216,  350 => 213,  346 => 212,  342 => 211,  335 => 207,  331 => 206,  327 => 205,  321 => 202,  317 => 201,  314 => 200,  311 => 199,  299 => 188,  261 => 152,  252 => 149,  246 => 146,  240 => 143,  234 => 140,  231 => 139,  227 => 138,  207 => 120,  204 => 119,  194 => 112,  110 => 30,  107 => 29,  102 => 196,  100 => 119,  97 => 118,  95 => 29,  85 => 24,  79 => 21,  71 => 16,  65 => 13,  59 => 9,  56 => 8,  50 => 5,  45 => 4,  42 => 3,  11 => 1,);
    }
}
