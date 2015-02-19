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
        // line 24
        echo "
      ";
        // line 25
        $this->displayBlock('logo', $context, $blocks);
        // line 30
        echo "
      ";
        // line 31
        $this->displayBlock('fiche', $context, $blocks);
        // line 96
        echo "
      ";
        // line 97
        $this->displayBlock('saisieforfait', $context, $blocks);
        // line 101
        echo "
      ";
        // line 102
        $this->displayBlock('saisiehorsforfait', $context, $blocks);
        // line 106
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
        liste du menu
      </div>
      ";
    }

    // line 25
    public function block_logo($context, array $blocks = array())
    {
        // line 26
        echo "      <div id=\"logo\" class=\"container\">
        <img   src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/images/logo.png"), "html", null, true);
        echo "\" class=\"imglogo\"/>
      </div>
      ";
    }

    // line 31
    public function block_fiche($context, array $blocks = array())
    {
        // line 32
        echo "        <div id=\"fiche\" class=\"container\">
          ";
        // line 33
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 66
        echo "
          ";
        // line 67
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 94
        echo "        </div>
      ";
    }

    // line 33
    public function block_ligneforfait($context, array $blocks = array())
    {
        // line 34
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
                <div class=\"quantiteForfait\">
                  0
                </div>
                <div class=\"quantiteForfait\">
                  0
                </div>
                <div class=\"quantiteForfait\">
                  0
                </div>
                <div class=\"quantiteForfait\">
                  0
                </div>
              </div>
            </div>
          ";
    }

    // line 67
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 68
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
                <div class=\"quantiteHorsForfait\">
                  0
                </div>
                <div class=\"descriptionHorsForfait\">
                  0
                </div>
                <div class=\"quantiteHorsForfait\">
                  0
                </div>
              </div>
            </div>  
          ";
    }

    // line 97
    public function block_saisieforfait($context, array $blocks = array())
    {
        // line 98
        echo "        <div id=\"saisieForfait\" class=\"container\">
        </div>
      ";
    }

    // line 102
    public function block_saisiehorsforfait($context, array $blocks = array())
    {
        // line 103
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
        return array (  229 => 103,  226 => 102,  220 => 98,  217 => 97,  188 => 68,  185 => 67,  150 => 34,  147 => 33,  142 => 94,  140 => 67,  137 => 66,  135 => 33,  132 => 32,  129 => 31,  122 => 27,  119 => 26,  116 => 25,  109 => 20,  106 => 19,  102 => 14,  99 => 13,  92 => 11,  89 => 10,  84 => 6,  81 => 5,  74 => 106,  72 => 102,  69 => 101,  67 => 97,  64 => 96,  62 => 31,  59 => 30,  57 => 25,  54 => 24,  52 => 19,  46 => 15,  43 => 13,  41 => 10,  37 => 8,  35 => 5,  29 => 1,);
    }
}
