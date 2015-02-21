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
        // line 48
        echo "
      ";
        // line 49
        $this->displayBlock('logo', $context, $blocks);
        // line 54
        echo "
      <h1>Laboratoir Galaxy Swiss Bourdin</h1>
      
      ";
        // line 57
        $this->displayBlock('corps', $context, $blocks);
        // line 61
        echo "
      ";
        // line 62
        $this->displayBlock('rightUp', $context, $blocks);
        // line 66
        echo "
      ";
        // line 67
        $this->displayBlock('rightDown', $context, $blocks);
        // line 71
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
        $this->displayBlock('nom', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('deconnexion', $context, $blocks);
        // line 46
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur_historique", array("id" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()))), "html", null, true);
        echo "\">Historique</a>
          </div>
        ";
    }

    // line 36
    public function block_nom($context, array $blocks = array())
    {
        // line 37
        echo "          <div id=\"nomMenu\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 41
    public function block_deconnexion($context, array $blocks = array())
    {
        // line 42
        echo "          <div id=\"deconnexionMenu\">
            deconnexion
          </div>
        ";
    }

    // line 49
    public function block_logo($context, array $blocks = array())
    {
        // line 50
        echo "      <div id=\"logo\" class=\"container\">
        <img   src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/images/logo.png"), "html", null, true);
        echo "\" class=\"imglogo\"/>
      </div>
      ";
    }

    // line 57
    public function block_corps($context, array $blocks = array())
    {
        // line 58
        echo "        <div id=\"center\" class=\"container\">
        </div>
      ";
    }

    // line 62
    public function block_rightUp($context, array $blocks = array())
    {
        // line 63
        echo "        <div id=\"rightUp\" class=\"container\">
        </div>
      ";
    }

    // line 67
    public function block_rightDown($context, array $blocks = array())
    {
        // line 68
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
        return array (  220 => 68,  217 => 67,  211 => 63,  208 => 62,  202 => 58,  199 => 57,  192 => 51,  189 => 50,  186 => 49,  179 => 42,  176 => 41,  167 => 38,  164 => 37,  161 => 36,  154 => 33,  151 => 32,  148 => 31,  141 => 27,  138 => 26,  133 => 46,  130 => 41,  127 => 36,  124 => 31,  122 => 26,  119 => 25,  116 => 24,  112 => 18,  109 => 17,  102 => 14,  99 => 13,  94 => 7,  91 => 6,  84 => 71,  82 => 67,  79 => 66,  77 => 62,  74 => 61,  72 => 57,  67 => 54,  65 => 49,  62 => 48,  60 => 24,  53 => 19,  51 => 17,  48 => 16,  46 => 13,  40 => 9,  38 => 6,  31 => 1,);
    }
}
