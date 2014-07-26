<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_5dad4750ff8a8366dbefc9a36a33a2727222bc72603d73b445d085c8202bfc5e extends Twig_Template
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
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attr"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
