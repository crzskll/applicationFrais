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
\t  ";
        // line 10
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 49
        echo "
\t  ";
        // line 50
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 81
        echo "\t</div>
";
    }

    // line 10
    public function block_ligneforfait($context, array $blocks = array())
    {
        // line 11
        echo "\t    <div id=\"ligneForfait\" class=\"container\">
\t      ligne forait
\t      <div id=\"libelleForfait\">
\t        <div class=\"libelleForfait\">
\t          Etapes
\t        </div>
\t        <div class=\"libelleForfait\">
\t          Kilométres
\t        </div>
\t        <div class=\"libelleForfait\">
\t          Nuits
\t        </div>
\t        <div class=\"libelleForfait\">
\t          Repas
\t        </div>
\t      </div>
\t      <div id=\"quantiteForfait\">

\t        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneForfait"]) {
            // line 30
            echo "
\t          <div class=\"quantiteForfait\">
\t            ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbEtape", array()), "html", null, true);
            echo "
\t          </div>
\t          <div class=\"quantiteForfait\">
\t            ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbKm", array()), "html", null, true);
            echo "
\t          </div>
\t          <div class=\"quantiteForfait\">
\t            ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbNuit", array()), "html", null, true);
            echo "
\t          </div>
\t          <div class=\"quantiteForfait\">
\t            ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbRepas", array()), "html", null, true);
            echo "
\t          </div>

\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
\t      </div>
\t    </div>
\t  ";
    }

    // line 50
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 51
        echo "\t    <div id=\"ligneHorsForfait\" class=\"container\">
\t      ligne hors forfait
\t      <div id=\"libelleHorsForfait\">
\t        <div class=\"libelleHorsForfait\">
\t          Date
\t        </div>
\t        <div class=\"descriptionHorsForfait\">
\t          Description
\t        </div>
\t        <div class=\"libelleHorsForfait\">
\t          Montant
\t        </div>
\t      </div>
\t      <div id=\"quantiteHorsForfait\">

\t        ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : null), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 67
            echo "\t          <div class=\"quantiteHorsForfait\">
\t            ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
\t          </div>
\t          <div class=\"descriptionHorsForfait\">
\t            ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
\t          </div>
\t          <div class=\"quantiteHorsForfait\">
\t            ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
\t          </div>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
\t      </div>
\t    </div>  
\t  ";
    }

    // line 84
    public function block_rightUp($context, array $blocks = array())
    {
        // line 85
        echo "\t<div id=\"saisieForfait\" class=\"container\">
\t\t<div class=\"contentForm\">
\t\t\t";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'form_start');
        echo "
\t\t\t    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbEtape", array()), 'label');
        echo "
\t\t\t        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbEtape", array()), 'errors');
        echo "
\t\t\t        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbEtape", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbKm", array()), 'label');
        echo "
\t\t\t        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbKm", array()), 'errors');
        echo "
\t\t\t        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbKm", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbNuit", array()), 'label');
        echo "
\t\t\t        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbNuit", array()), 'errors');
        echo "
\t\t\t        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbNuit", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbRepas", array()), 'label');
        echo "
\t\t\t        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbRepas", array()), 'errors');
        echo "
\t\t\t        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "nbRepas", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 126
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieForfait"]) ? $context["formSaisieForfait"] : null), 'form_end');
        echo "

\t\t</div>
\t</div>
";
    }

    // line 132
    public function block_rightDown($context, array $blocks = array())
    {
        // line 133
        echo "\t<div id=\"saisieHorsForfait\" class=\"container\">
\t\t<div class=\"contentForm\">
\t\t\t";
        // line 135
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'form_start');
        echo "
\t\t\t    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), 'errors');
        echo "

\t\t\t    <div>
\t\t\t        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'label');
        echo "
\t\t\t        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'errors');
        echo "
\t\t\t        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "date", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'label');
        echo "
\t\t\t        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'errors');
        echo "
\t\t\t        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "libelle", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div>
\t\t\t        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'label');
        echo "
\t\t\t        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'errors');
        echo "
\t\t\t        ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "montant", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'label');
        echo "
\t\t\t        ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'errors');
        echo "
\t\t\t        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "statut", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t    <div class=\"hiden\">
\t\t\t        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'label');
        echo "
\t\t\t        ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'errors');
        echo "
\t\t\t        ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSaisieHorsForfait"]) ? $context["formSaisieHorsForfait"] : null), "fiche", array()), 'widget');
        echo "
\t\t\t    </div>

\t\t\t";
        // line 168
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
        return array (  400 => 168,  394 => 165,  390 => 164,  386 => 163,  379 => 159,  375 => 158,  371 => 157,  364 => 153,  360 => 152,  356 => 151,  349 => 147,  345 => 146,  341 => 145,  334 => 141,  330 => 140,  326 => 139,  320 => 136,  316 => 135,  312 => 133,  309 => 132,  300 => 126,  294 => 123,  290 => 122,  286 => 121,  279 => 117,  275 => 116,  271 => 115,  264 => 111,  260 => 110,  256 => 109,  249 => 105,  245 => 104,  241 => 103,  234 => 99,  230 => 98,  226 => 97,  219 => 93,  215 => 92,  211 => 91,  205 => 88,  201 => 87,  197 => 85,  194 => 84,  187 => 77,  178 => 74,  172 => 71,  166 => 68,  163 => 67,  159 => 66,  142 => 51,  139 => 50,  132 => 45,  122 => 41,  116 => 38,  110 => 35,  104 => 32,  100 => 30,  96 => 29,  76 => 11,  73 => 10,  68 => 81,  66 => 50,  63 => 49,  61 => 10,  58 => 9,  55 => 8,  49 => 5,  44 => 4,  41 => 3,  11 => 1,);
    }
}
