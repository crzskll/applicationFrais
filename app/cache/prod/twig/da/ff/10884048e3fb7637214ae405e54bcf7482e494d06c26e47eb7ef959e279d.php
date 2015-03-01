<?php

/* GsbAppliFraisBundle:Visiteur:historique.html.twig */
class __TwigTemplate_daff10884048e3fb7637214ae405e54bcf7482e494d06c26e47eb7ef959e279d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/css/historique.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbapplifrais/css/saisie.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 9
    public function block_corps($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"listeHistorique\">
\t\t
\t\t\t<div>

\t\t\t\t<table>
\t\t\t\t   <caption>Fiches</caption>

\t\t\t\t   <tr>
\t\t\t\t       <th>Date</th>
\t\t\t\t       <th>Derniere modif</th>
\t\t\t\t       <th>Montant tot</th>
\t\t\t\t       <th>Montant validé</th>
\t\t\t\t       <th>Etat</th>
\t\t\t\t       <th></th>
\t\t\t\t   </tr>

\t\t\t\t   ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 27
            echo "\t\t\t\t\t    <tr>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "date", array()), "format", array(0 => "m-Y"), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "dateModification", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "etat", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historique_show", array("idVisit" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : null), "id", array()), "idFiche" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t</table>
\t\t\t
\t\t\t</div>
\t\t
\t</div>
";
    }

    // line 43
    public function block_rightUp($context, array $blocks = array())
    {
        // line 44
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formFiche"]) ? $context["formFiche"] : null), 'form');
        echo "
\t\t</div>
";
    }

    // line 49
    public function block_rightDown($context, array $blocks = array())
    {
        // line 50
        echo "\t\t<div class=\"contentForm\">
\t\t\t";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLigne"]) ? $context["formLigne"] : null), 'form');
        echo "
\t\t</div> 
";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:Visiteur:historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  133 => 50,  130 => 49,  123 => 45,  120 => 44,  117 => 43,  108 => 36,  99 => 33,  95 => 32,  89 => 29,  85 => 28,  82 => 27,  78 => 26,  60 => 10,  57 => 9,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
