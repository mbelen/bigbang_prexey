<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig */
class __TwigTemplate_6690d707516fa324b91c6803dc954f4ca805cebb8cd6a8c085b5c8f57014f08c extends Twig_Template
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
        // line 19
        echo "
";
        // line 20
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 21
            echo "<div class=\"pagination\">
    <ul>

    ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "        <li>
            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "previous")))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 29
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (($this->getContext($context, "startPage") > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if (($this->getContext($context, "startPage") == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (($this->getContext($context, "startPage") != 2)) {
                    // line 43
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (($this->getContext($context, "page") != $this->getContext($context, "current"))) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            <li class=\"active\">
                <span>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 59
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
    ";
            // line 62
            if (($this->getContext($context, "pageCount") > $this->getContext($context, "endPage"))) {
                // line 63
                echo "        ";
                if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 1))) {
                    // line 64
                    echo "            ";
                    if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 2))) {
                        // line 65
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 69
                        echo "                <li>
                    <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => ($this->getContext($context, "pageCount") - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getContext($context, "pageCount") - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "pageCount")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "pageCount"), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "next")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 84
                echo "        <li class=\"disabled\">
            <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 88
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 85,  179 => 84,  171 => 81,  168 => 80,  149 => 73,  126 => 63,  124 => 62,  114 => 59,  108 => 56,  94 => 51,  91 => 50,  84 => 48,  81 => 47,  75 => 43,  69 => 40,  64 => 38,  54 => 34,  51 => 33,  42 => 29,  103 => 30,  99 => 29,  87 => 49,  83 => 23,  67 => 18,  63 => 16,  59 => 36,  43 => 9,  27 => 4,  23 => 2,  280 => 116,  272 => 112,  266 => 109,  261 => 107,  255 => 103,  253 => 102,  249 => 100,  244 => 98,  240 => 96,  234 => 94,  231 => 93,  224 => 90,  214 => 86,  212 => 85,  205 => 80,  188 => 88,  185 => 72,  178 => 69,  176 => 68,  173 => 67,  166 => 79,  163 => 78,  153 => 60,  141 => 70,  138 => 69,  131 => 51,  129 => 64,  121 => 61,  118 => 40,  112 => 36,  104 => 34,  101 => 33,  96 => 28,  93 => 30,  85 => 27,  82 => 26,  80 => 25,  77 => 24,  66 => 39,  61 => 19,  58 => 18,  53 => 16,  41 => 12,  30 => 6,  24 => 21,  22 => 20,  19 => 19,  174 => 51,  160 => 49,  156 => 61,  152 => 74,  148 => 46,  144 => 45,  140 => 44,  135 => 43,  128 => 37,  125 => 36,  120 => 27,  117 => 26,  107 => 32,  105 => 55,  97 => 52,  95 => 26,  90 => 29,  79 => 22,  76 => 21,  70 => 9,  65 => 8,  62 => 7,  56 => 35,  50 => 53,  47 => 11,  45 => 30,  38 => 11,  36 => 7,  25 => 1,  34 => 26,  31 => 25,  28 => 5,  221 => 89,  207 => 97,  203 => 96,  198 => 77,  195 => 76,  184 => 87,  180 => 86,  172 => 81,  155 => 75,  147 => 57,  136 => 56,  132 => 65,  123 => 46,  119 => 51,  110 => 38,  106 => 49,  102 => 48,  98 => 47,  92 => 43,  88 => 42,  72 => 23,  52 => 16,  48 => 15,  39 => 8,  32 => 4,  29 => 24,);
    }
}
