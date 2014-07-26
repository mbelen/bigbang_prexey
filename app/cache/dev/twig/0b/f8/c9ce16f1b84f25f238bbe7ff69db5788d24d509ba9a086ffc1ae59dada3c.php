<?php

/* ::messages.html.twig */
class __TwigTemplate_0bf8c9ce16f1b84f25f238bbe7ff69db5788d24d509ba9a086ffc1ae59dada3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"alert alert-error\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "    <div class=\"alert alert-notice\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "    <div class=\"alert alert-success\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "    <div class=\"alert alert-info\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        ";
            // line 32
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "::messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  99 => 29,  87 => 25,  83 => 23,  67 => 18,  63 => 16,  59 => 15,  43 => 9,  27 => 4,  23 => 2,  280 => 116,  272 => 112,  266 => 109,  261 => 107,  255 => 103,  253 => 102,  249 => 100,  244 => 98,  240 => 96,  234 => 94,  231 => 93,  224 => 90,  214 => 86,  212 => 85,  205 => 80,  188 => 73,  185 => 72,  178 => 69,  176 => 68,  173 => 67,  166 => 65,  163 => 64,  153 => 60,  141 => 55,  138 => 54,  131 => 51,  129 => 50,  121 => 41,  118 => 40,  112 => 36,  104 => 34,  101 => 33,  96 => 28,  93 => 30,  85 => 27,  82 => 26,  80 => 25,  77 => 24,  66 => 21,  61 => 19,  58 => 18,  53 => 16,  41 => 12,  30 => 6,  24 => 3,  22 => 2,  19 => 1,  174 => 51,  160 => 49,  156 => 61,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  135 => 43,  128 => 37,  125 => 36,  120 => 27,  117 => 26,  107 => 32,  105 => 35,  97 => 29,  95 => 26,  90 => 29,  79 => 22,  76 => 21,  70 => 9,  65 => 8,  62 => 7,  56 => 14,  50 => 53,  47 => 11,  45 => 14,  38 => 11,  36 => 7,  25 => 1,  34 => 5,  31 => 5,  28 => 5,  221 => 89,  207 => 97,  203 => 96,  198 => 77,  195 => 76,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  147 => 57,  136 => 56,  132 => 42,  123 => 46,  119 => 51,  110 => 38,  106 => 49,  102 => 48,  98 => 47,  92 => 43,  88 => 42,  72 => 23,  52 => 16,  48 => 15,  39 => 8,  32 => 4,  29 => 3,);
    }
}
