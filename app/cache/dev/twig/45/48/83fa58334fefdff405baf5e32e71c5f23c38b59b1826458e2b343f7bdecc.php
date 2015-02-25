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
      
      <div id=\"menu\" class=\"container\">
      ";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 64
        echo "      </div>

      <div id=\"logo\" class=\"container\">
      ";
        // line 67
        $this->displayBlock('logo', $context, $blocks);
        // line 72
        echo "      </div>

      <h1>Laboratoir Galaxy Swiss Bourdin</h1>
      
      <div id=\"center\" class=\"container\">
      ";
        // line 77
        $this->displayBlock('corps', $context, $blocks);
        // line 81
        echo "      </div>

      <div id=\"rightUp\" class=\"container\">
      ";
        // line 84
        $this->displayBlock('rightUp', $context, $blocks);
        // line 88
        echo "      </div>

      <div id=\"rightDown\" class=\"container\">
      ";
        // line 91
        $this->displayBlock('rightDown', $context, $blocks);
        // line 95
        echo "      </div>
 
    </div>
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "        GSB
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

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        // line 26
        echo "        <div id=\"dateMenu\">
        ";
        // line 27
        $this->displayBlock('date', $context, $blocks);
        // line 32
        echo "        </div>

        <div id=\"historiqueMenu\">
        ";
        // line 35
        $this->displayBlock('historique', $context, $blocks);
        // line 40
        echo "        </div>
        <div id=\"saisieMenu\">
        ";
        // line 42
        $this->displayBlock('saisie', $context, $blocks);
        // line 47
        echo "        </div>
        <div id=\"nomMenu\">
        ";
        // line 49
        $this->displayBlock('nom', $context, $blocks);
        // line 54
        echo "        </div>
        <div id=\"deconnexionMenu\">
        ";
        // line 56
        $this->displayBlock('deconnexion', $context, $blocks);
        // line 61
        echo "        </div>
      
      ";
    }

    // line 27
    public function block_date($context, array $blocks = array())
    {
        // line 28
        echo "          
            date
          
        ";
    }

    // line 35
    public function block_historique($context, array $blocks = array())
    {
        // line 36
        echo "          
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historique", array("id" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()))), "html", null, true);
        echo "\">Historique</a>
          
        ";
    }

    // line 42
    public function block_saisie($context, array $blocks = array())
    {
        // line 43
        echo "          
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("visiteur", array("id" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()))), "html", null, true);
        echo "\">Fiche en cours</a>
          
        ";
    }

    // line 49
    public function block_nom($context, array $blocks = array())
    {
        // line 50
        echo "          
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
        echo "
          
        ";
    }

    // line 56
    public function block_deconnexion($context, array $blocks = array())
    {
        // line 57
        echo "          
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("gsb_appli_frais_portal");
        echo "\">Deconnexion</a>
          
        ";
    }

    // line 67
    public function block_logo($context, array $blocks = array())
    {
        // line 68
        echo "      
        <img   src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/images/logo.png"), "html", null, true);
        echo "\" class=\"imglogo\"/>
      
      ";
    }

    // line 77
    public function block_corps($context, array $blocks = array())
    {
        // line 78
        echo "        
        
      ";
    }

    // line 84
    public function block_rightUp($context, array $blocks = array())
    {
        // line 85
        echo "        
        
      ";
    }

    // line 91
    public function block_rightDown($context, array $blocks = array())
    {
        // line 92
        echo "        
        
      ";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  264 => 92,  261 => 91,  255 => 85,  252 => 84,  246 => 78,  243 => 77,  236 => 69,  233 => 68,  230 => 67,  223 => 58,  220 => 57,  217 => 56,  208 => 51,  205 => 50,  202 => 49,  195 => 44,  192 => 43,  189 => 42,  182 => 37,  179 => 36,  176 => 35,  169 => 28,  166 => 27,  160 => 61,  158 => 56,  154 => 54,  152 => 49,  148 => 47,  146 => 42,  142 => 40,  140 => 35,  135 => 32,  133 => 27,  130 => 26,  127 => 25,  123 => 18,  120 => 17,  113 => 14,  110 => 13,  105 => 7,  102 => 6,  94 => 95,  92 => 91,  87 => 88,  85 => 84,  80 => 81,  78 => 77,  71 => 72,  69 => 67,  64 => 64,  62 => 25,  54 => 19,  52 => 17,  49 => 16,  47 => 13,  41 => 9,  39 => 6,  32 => 1,);
    }
}
