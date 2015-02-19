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
            'logo' => array($this, 'block_logo'),
            'menu' => array($this, 'block_menu'),
            'deconnection' => array($this, 'block_deconnection'),
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
        $this->displayBlock('logo', $context, $blocks);
        // line 24
        echo "
      ";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "
      ";
        // line 28
        $this->displayBlock('deconnection', $context, $blocks);
        // line 30
        echo "
      ";
        // line 31
        $this->displayBlock('fiche', $context, $blocks);
        // line 33
        echo "
      ";
        // line 34
        $this->displayBlock('ligneforfait', $context, $blocks);
        // line 36
        echo "
      ";
        // line 37
        $this->displayBlock('lignehorsforfait', $context, $blocks);
        // line 39
        echo "
      ";
        // line 40
        $this->displayBlock('saisieforfait', $context, $blocks);
        // line 42
        echo "
      ";
        // line 43
        $this->displayBlock('saisiehorsforfait', $context, $blocks);
        // line 45
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
    public function block_logo($context, array $blocks = array())
    {
        // line 20
        echo "      <div id=\"logo\">
        <img   src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/images/logo.png"), "html", null, true);
        echo "\" class=\"imglogo\"/>
      </div>
      ";
    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        // line 26
        echo "      ";
    }

    // line 28
    public function block_deconnection($context, array $blocks = array())
    {
        // line 29
        echo "      ";
    }

    // line 31
    public function block_fiche($context, array $blocks = array())
    {
        // line 32
        echo "      ";
    }

    // line 34
    public function block_ligneforfait($context, array $blocks = array())
    {
        // line 35
        echo "      ";
    }

    // line 37
    public function block_lignehorsforfait($context, array $blocks = array())
    {
        // line 38
        echo "      ";
    }

    // line 40
    public function block_saisieforfait($context, array $blocks = array())
    {
        // line 41
        echo "      ";
    }

    // line 43
    public function block_saisiehorsforfait($context, array $blocks = array())
    {
        // line 44
        echo "      ";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 44,  177 => 43,  173 => 41,  170 => 40,  166 => 38,  163 => 37,  159 => 35,  156 => 34,  152 => 32,  149 => 31,  145 => 29,  142 => 28,  138 => 26,  135 => 25,  128 => 21,  125 => 20,  122 => 19,  118 => 14,  115 => 13,  108 => 11,  105 => 10,  100 => 6,  97 => 5,  90 => 45,  88 => 43,  85 => 42,  83 => 40,  80 => 39,  78 => 37,  75 => 36,  73 => 34,  70 => 33,  68 => 31,  65 => 30,  63 => 28,  60 => 27,  58 => 25,  55 => 24,  53 => 19,  47 => 15,  44 => 13,  42 => 10,  38 => 8,  36 => 5,  30 => 1,);
    }
}
