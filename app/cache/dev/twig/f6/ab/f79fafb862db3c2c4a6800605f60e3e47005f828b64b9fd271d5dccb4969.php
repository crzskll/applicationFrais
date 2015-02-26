<?php

/* GsbAppliFraisBundle:ForfaitLigne:index.html.twig */
class __TwigTemplate_f6abf79fafb862db3c2c4a6800605f60e3e47005f828b64b9fd271d5dccb4969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>ForfaitLigne list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gsb_forfaitligne_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gsb_forfaitligne_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gsb_forfaitligne_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("gsb_forfaitligne_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "GsbAppliFraisBundle:ForfaitLigne:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  85 => 29,  73 => 23,  67 => 20,  58 => 16,  55 => 15,  51 => 14,  39 => 4,  36 => 3,  11 => 1,);
    }
}
