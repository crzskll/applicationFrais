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
            'saisie' => array($this, 'block_saisie'),
            'nom' => array($this, 'block_nom'),
            'deconnexion' => array($this, 'block_deconnexion'),
            'logo' => array($this, 'block_logo'),
            'corps' => array($this, 'block_corps'),
            'rightUp' => array($this, 'block_rightUp'),
            'rightDown' => array($this, 'block_rightDown'),
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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "
    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "
  </head>
  <body>
    <div>
      
      ";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 53
        echo "
      ";
        // line 54
        $this->displayBlock('logo', $context, $blocks);
        // line 59
        echo "
      <h1>Laboratoir Galaxy Swiss Bourdin</h1>
      
      ";
        // line 62
        $this->displayBlock('corps', $context, $blocks);
        // line 66
        echo "
      ";
        // line 67
        $this->displayBlock('rightUp', $context, $blocks);
        // line 71
        echo "
      ";
        // line 72
        $this->displayBlock('rightDown', $context, $blocks);
        // line 76
        echo " 
    </div>
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "        Jobeet - Your best job board
      ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        // line 25
        echo "      <div id=\"menu\" class=\"container\">
        ";
        // line 26
        $this->displayBlock('date', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('historique', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('saisie', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('nom', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('deconnexion', $context, $blocks);
        // line 51
        echo "      </div>
      ";
    }

    // line 26
    public function block_date($context, array $blocks = array())
    {
        // line 27
        echo "          <div id=\"dateMenu\">
            date
          </div>
        ";
    }

    // line 31
    public function block_historique($context, array $blocks = array())
    {
        // line 32
        echo "          <div id=\"historiqueMenu\">
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historique", array("id" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()))), "html", null, true);
        echo "\">Historique</a>
          </div>
        ";
    }

    // line 36
    public function block_saisie($context, array $blocks = array())
    {
        // line 37
        echo "          <div id=\"saisieMenu\">
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur", array("id" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()))), "html", null, true);
        echo "\">Fiche en cours</a>
          </div>
        ";
    }

    // line 41
    public function block_nom($context, array $blocks = array())
    {
        // line 42
        echo "          <div id=\"nomMenu\">
            ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 46
    public function block_deconnexion($context, array $blocks = array())
    {
        // line 47
        echo "          <div id=\"deconnexionMenu\">
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("gsb_appli_frais_portal");
        echo "\">Deconnexion</a>
          </div>
        ";
    }

    // line 54
    public function block_logo($context, array $blocks = array())
    {
        // line 55
        echo "      <div id=\"logo\" class=\"container\">
        <img   src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/images/logo.png"), "html", null, true);
        echo "\" class=\"imglogo\"/>
      </div>
      ";
    }

    // line 62
    public function block_corps($context, array $blocks = array())
    {
        // line 63
        echo "        <div id=\"center\" class=\"container\">
        </div>
      ";
    }

    // line 67
    public function block_rightUp($context, array $blocks = array())
    {
        // line 68
        echo "        <div id=\"rightUp\" class=\"container\">
        </div>
      ";
    }

    // line 72
    public function block_rightDown($context, array $blocks = array())
    {
        // line 73
        echo "        <div id=\"rightDown\" class=\"container\">
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  240 => 73,  237 => 72,  231 => 68,  228 => 67,  222 => 63,  219 => 62,  212 => 56,  209 => 55,  206 => 54,  199 => 48,  196 => 47,  193 => 46,  184 => 43,  181 => 42,  178 => 41,  171 => 38,  168 => 37,  165 => 36,  158 => 33,  155 => 32,  152 => 31,  145 => 27,  142 => 26,  137 => 51,  134 => 46,  131 => 41,  128 => 36,  125 => 31,  123 => 26,  120 => 25,  117 => 24,  113 => 18,  110 => 17,  103 => 14,  100 => 13,  95 => 7,  92 => 6,  85 => 76,  83 => 72,  80 => 71,  78 => 67,  75 => 66,  73 => 62,  68 => 59,  66 => 54,  63 => 53,  61 => 24,  54 => 19,  52 => 17,  49 => 16,  47 => 13,  41 => 9,  39 => 6,  32 => 1,);
    }
}
