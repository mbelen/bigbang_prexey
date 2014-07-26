<?php

/* ::backend.html.twig */
class __TwigTemplate_cefc0cbbbba4d86b278099ee728edb902e62d7533482bdc20d98ccd7ecf8e5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("::menu.html.twig")->display($context);
        // line 5
        echo "    
 ";
    }

    public function getTemplateName()
    {
        return "::backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  221 => 99,  207 => 97,  203 => 96,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  147 => 61,  136 => 56,  132 => 55,  123 => 53,  119 => 51,  110 => 50,  106 => 49,  102 => 48,  98 => 47,  92 => 43,  88 => 42,  72 => 33,  52 => 16,  48 => 15,  39 => 9,  32 => 4,  29 => 3,);
    }
}
