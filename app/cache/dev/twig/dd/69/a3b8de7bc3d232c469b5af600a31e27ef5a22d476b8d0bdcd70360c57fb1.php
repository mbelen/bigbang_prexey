<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_dd69a3b8de7bc3d232c469b5af600a31e27ef5a22d476b8d0bdcd70360c57fb1 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if ((array_key_exists("first", $context) && ($this->getContext($context, "current") != $this->getContext($context, "first")))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "first")))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "previous")))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (($this->getContext($context, "page") != $this->getContext($context, "current"))) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "next")))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ($this->getContext($context, "current") != $this->getContext($context, "last")))) {
                // line 35
                echo "        <span class=\"last\">
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "last")))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  167 => 76,  188 => 88,  124 => 62,  114 => 39,  236 => 126,  205 => 105,  191 => 97,  186 => 95,  153 => 77,  137 => 65,  100 => 33,  126 => 63,  113 => 55,  207 => 97,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 75,  127 => 67,  178 => 80,  170 => 77,  161 => 118,  146 => 69,  175 => 79,  165 => 75,  84 => 48,  77 => 20,  53 => 30,  23 => 3,  20 => 1,  104 => 51,  81 => 47,  174 => 51,  160 => 77,  152 => 74,  148 => 69,  110 => 50,  97 => 52,  90 => 46,  76 => 37,  70 => 9,  65 => 20,  34 => 26,  129 => 64,  58 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 127,  238 => 85,  235 => 74,  230 => 124,  227 => 123,  224 => 71,  221 => 99,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 43,  119 => 51,  102 => 46,  71 => 27,  67 => 26,  63 => 34,  59 => 18,  38 => 10,  87 => 49,  201 => 92,  196 => 99,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 48,  151 => 70,  142 => 59,  138 => 69,  136 => 70,  121 => 61,  117 => 26,  105 => 35,  91 => 29,  62 => 19,  49 => 14,  28 => 20,  94 => 30,  89 => 28,  85 => 33,  75 => 43,  68 => 36,  56 => 35,  24 => 4,  31 => 25,  26 => 2,  25 => 1,  21 => 2,  19 => 2,  93 => 47,  88 => 38,  78 => 34,  46 => 13,  44 => 26,  27 => 5,  79 => 25,  72 => 36,  69 => 40,  47 => 15,  40 => 10,  37 => 7,  22 => 3,  246 => 90,  157 => 78,  145 => 46,  139 => 45,  131 => 61,  123 => 58,  120 => 57,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 49,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 17,  52 => 16,  50 => 29,  43 => 12,  41 => 11,  35 => 3,  32 => 7,  29 => 6,  209 => 82,  203 => 96,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 88,  173 => 124,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 61,  144 => 69,  141 => 70,  133 => 62,  130 => 68,  125 => 59,  122 => 57,  116 => 60,  112 => 59,  109 => 34,  106 => 49,  103 => 34,  99 => 41,  95 => 40,  92 => 43,  86 => 27,  82 => 22,  80 => 43,  73 => 23,  64 => 38,  60 => 20,  57 => 19,  54 => 34,  51 => 33,  48 => 16,  45 => 30,  42 => 29,  39 => 10,  36 => 10,  33 => 22,  30 => 21,);
    }
}
