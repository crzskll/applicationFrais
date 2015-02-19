<?php

/* GsbAppliFraisBundle::layout.html.twig */
class __TwigTemplate_454883fa58334fefdff405baf5e32e71c5f23c38b59b1826458e2b343f7bdecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'date' => array($this, 'block_date'),
            'historique' => array($this, 'block_historique'),
            'nom' => array($this, 'block_nom'),
            'deconnexion' => array($this, 'block_deconnexion'),
            'logo' => array($this, 'block_logo'),
            'fiche' => array($this, 'block_fiche'),
            'ligneforfait' => array($this, 'block_ligneforfait'),
            'lignehorsforfait' => array($this, 'block_lignehorsforfait'),
            'saisieforfait' => array($this, 'block_saisieforfait'),
            'saisiehorsforfait' => array($this, 'block_saisiehorsforfait'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "  </head>
  <body>
    <div>
      
      ";
        // line 19
        $this->displayBlock('menu', $context, $blocks);
        // line 43
        echo "
      ";
        // line 44
        $this->displayBlock('logo', $context, $blocks);
        // line 49
        echo "
      <h1>Laboratoir Galaxy Swiss Bourdin</h1>
      
      ";
        // line 52
        $this->displayBlock('fiche', $context, $blocks);
        // line 127
        echo "
      ";
        // line 128
        $this->displayBlock('saisieforfait', $context, $blocks);
        // line 132
        echo "
      ";
        // line 133
        $this->displayBlock('saisiehorsforfait', $context, $blocks);
        // line 137
        echo " 
    </div>
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        Jobeet - Your best job board
      ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "      <div id=\"menu\" class=\"container\">
        ";
        // line 21
        $this->displayBlock('date', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('historique', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('nom', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('deconnexion', $context, $blocks);
        // line 41
        echo "      </div>
      ";
    }

    // line 21
    public function block_date($context, array $blocks = array())
    {
        // line 22
        echo "          <div id=\"dateMenu\">
            date
          </div>
        ";
    }

    // line 26
    public function block_historique($context, array $blocks = array())
    {
        // line 27
        echo "          <div id=\"historiqueMenu\">
            historique
          </div>
        ";
    }

    // line 31
    public function block_nom($context, array $blocks = array())
    {
        // line 32
        echo "          <div id=\"nomMenu\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 36
    public function block_deconnexion($context, array $blocks = array())
    {
        // line 37
        echo "          <div id=\"deconnexionMenu\">
            deconnexion
          </div>
        ";
    }

    // line 44
    public function block_logo($context, array $blocks = array())
    {
        // line 45
        echo "      <div id=\"logo\" class=\"container\">
        <img   src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/images/logo.png"), "html", null, true);
        echo "\" class=\"imglogo\"/>
      </div>
      ";
    }

    // line 52
    public function block_fiche($context, array $blocks = array())
    {
        // line 53
        echo "        <div id=\"fiche\" class=\"container\">
          ";
        // line 54
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 93
        echo "
          ";
        // line 94
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 125
        echo "        </div>
      ";
    }

    // line 54
    public function block_ligneforfait($context, array $blocks = array())
    {
        // line 55
        echo "            <div id=\"ligneForfait\" class=\"container\">
              ligne forait
              <div id=\"libelleForfait\">
                <div class=\"libelleForfait\">
                  Etapes
                </div>
                <div class=\"libelleForfait\">
                  Kilométres
                </div>
                <div class=\"libelleForfait\">
                  Nuits
                </div>
                <div class=\"libelleForfait\">
                  Repas
                </div>
              </div>
              <div id=\"quantiteForfait\">

                ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "forfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneForfait"]) {
            // line 74
            echo "
                  <div class=\"quantiteForfait\">
                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbEtape", array()), "html", null, true);
            echo "
                  </div>
                  <div class=\"quantiteForfait\">
                    ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbKm", array()), "html", null, true);
            echo "
                  </div>
                  <div class=\"quantiteForfait\">
                    ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbNuit", array()), "html", null, true);
            echo "
                  </div>
                  <div class=\"quantiteForfait\">
                    ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneForfait"], "nbRepas", array()), "html", null, true);
            echo "
                  </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
              </div>
            </div>
          ";
    }

    // line 94
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 95
        echo "            <div id=\"ligneHorsForfait\" class=\"container\">
              ligne hors forfait
              <div id=\"libelleHorsForfait\">
                <div class=\"libelleHorsForfait\">
                  Date
                </div>
                <div class=\"descriptionHorsForfait\">
                  Description
                </div>
                <div class=\"libelleHorsForfait\">
                  Montant
                </div>
              </div>
              <div id=\"quantiteHorsForfait\">

                ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "horsForfaitLignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneHorsForfait"]) {
            // line 111
            echo "                  <div class=\"quantiteHorsForfait\">
                    ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneHorsForfait"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
                  </div>
                  <div class=\"descriptionHorsForfait\">
                    ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "libelle", array()), "html", null, true);
            echo "
                  </div>
                  <div class=\"quantiteHorsForfait\">
                    ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneHorsForfait"], "montant", array()), "html", null, true);
            echo "€
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
              </div>
            </div>  
          ";
    }

    // line 128
    public function block_saisieforfait($context, array $blocks = array())
    {
        // line 129
        echo "        <div id=\"saisieForfait\" class=\"container\">
        </div>
      ";
    }

    // line 133
    public function block_saisiehorsforfait($context, array $blocks = array())
    {
        // line 134
        echo "        <div id=\"saisieHorsForfait\" class=\"container\">
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  343 => 134,  340 => 133,  334 => 129,  331 => 128,  324 => 121,  315 => 118,  309 => 115,  303 => 112,  300 => 111,  296 => 110,  279 => 95,  276 => 94,  269 => 89,  259 => 85,  253 => 82,  247 => 79,  241 => 76,  237 => 74,  233 => 73,  213 => 55,  210 => 54,  205 => 125,  203 => 94,  200 => 93,  198 => 54,  195 => 53,  192 => 52,  185 => 46,  182 => 45,  179 => 44,  172 => 37,  169 => 36,  160 => 33,  157 => 32,  154 => 31,  147 => 27,  144 => 26,  137 => 22,  134 => 21,  129 => 41,  126 => 36,  123 => 31,  120 => 26,  118 => 21,  115 => 20,  112 => 19,  108 => 14,  105 => 13,  98 => 11,  95 => 10,  90 => 6,  87 => 5,  80 => 137,  78 => 133,  75 => 132,  73 => 128,  70 => 127,  68 => 52,  63 => 49,  61 => 44,  58 => 43,  56 => 19,  50 => 15,  47 => 13,  45 => 10,  41 => 8,  39 => 5,  33 => 1,);
    }
}
