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
        // line 69
        echo "
\t  ";
        // line 70
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 106
        echo "\t</div>
";
    }

    // line 30
    public function block_ligneforfait($context, array $blocks = array())
    {
        // line 31
        echo "\t    <table id=\"ligneForfait\">
\t      <caption>ligne forait</caption>
\t      <tr id=\"libelleForfait\">
\t        <th class=\"libelleForfait\">
\t          Etapes
\t        </th>
\t        <th class=\"libelleForfait\">
\t          Kilométres
\t        </th>
\t        <th class=\"libelleForfait\">
\t          Nuits
\t        </th>
\t        <th class=\"libelleForfait\">
\t          Repas
\t        </th>
\t      </tr>
\t      <tr id=\"quantiteForfait\">

\t        ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneForfait"]) {
            // line 50
            echo "
\t          <td class=\"quantiteForfait\">
\t            ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbEtape", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteForfait\">
\t            ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbKm", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteForfait\">
\t            ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbNuit", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteForfait\">
\t            ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbRepas", array()), "html", null, true);
            echo "
\t          </td>

\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
\t      </tr>
\t    </table>
\t  ";
    }

    // line 70
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 71
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
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 90
            echo "\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"descriptionHorsForfait\">
\t            ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
\t          </td>
\t          <td class=\"quantiteHorsForfait\">
\t            ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
\t          </td>
\t          <td class=\"delHorsForfait\">
\t            <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur_ligneHorsForfait_edit", array("id" => $this->getAttribute($context["ligneHorsForfait"], "id", array()))), "html", null, true);
            echo "\">edit</a>
\t          </td>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t      </tr>
\t    </table>  
\t  ";
    }

    // line 109
    public function block_rightUp($context, array $blocks = array())
    {
        // line 110
        echo "\t<div id=\"saisieForfait\" class=\"container\">
\t\t<div class=\"contentForm\">
\t\t\t";
        // line 112
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'form_start');
        echo "
\t\t\t    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'label');
        echo "
\t\t\t        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'errors');
        echo "
\t\t\t        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbEtape", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'label');
        echo "
\t\t\t        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'errors');
        echo "
\t\t\t        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbKm", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'label');
        echo "
\t\t\t        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'errors');
        echo "
\t\t\t        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbNuit", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'label');
        echo "
\t\t\t        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'errors');
        echo "
\t\t\t        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "nbRepas", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 151
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : $this->getContext($context, "formSaisieForfait")), 'form_end');
        echo "

\t\t</div>
\t</div>
";
    }

    // line 157
    public function block_rightDown($context, array $blocks = array())
    {
        // line 158
        echo "\t<div id=\"saisieHorsForfait\" class=\"container\">
\t\t<div class=\"contentForm\">
\t\t\t";
        // line 160
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), 'form_start');
        echo "
\t\t\t    ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'label');
        echo "
\t\t\t        ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'errors');
        echo "
\t\t\t        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "date", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'label');
        echo "
\t\t\t        ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'errors');
        echo "
\t\t\t        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "libelle", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'label');
        echo "
\t\t\t        ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'errors');
        echo "
\t\t\t        ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "montant", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : $this->getContext($context, "formSaisieHorsForfait")), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 193
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
        return array (  442 => 193,  436 => 190,  432 => 189,  428 => 188,  421 => 184,  417 => 183,  413 => 182,  406 => 178,  402 => 177,  398 => 176,  391 => 172,  387 => 171,  383 => 170,  376 => 166,  372 => 165,  368 => 164,  362 => 161,  358 => 160,  354 => 158,  351 => 157,  342 => 151,  336 => 148,  332 => 147,  328 => 146,  321 => 142,  317 => 141,  313 => 140,  306 => 136,  302 => 135,  298 => 134,  291 => 130,  287 => 129,  283 => 128,  276 => 124,  272 => 123,  268 => 122,  261 => 118,  257 => 117,  253 => 116,  247 => 113,  243 => 112,  239 => 110,  236 => 109,  230 => 103,  221 => 100,  215 => 97,  209 => 94,  203 => 91,  200 => 90,  196 => 89,  176 => 71,  173 => 70,  166 => 65,  156 => 61,  150 => 58,  144 => 55,  138 => 52,  134 => 50,  130 => 49,  110 => 31,  107 => 30,  102 => 106,  100 => 70,  97 => 69,  95 => 30,  85 => 25,  79 => 22,  71 => 17,  65 => 14,  58 => 9,  55 => 8,  49 => 5,  44 => 4,  41 => 3,  11 => 1,);
    }
}
