<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_adca51f4c54b7234907296d1c18f436a34b07636c5cd21aa2575fbecdc7f7321 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "request"), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "request"), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute($this->getContext($context, "router"), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getContext($context, "router"), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "traces"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("almost") : ((((2 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 115,  232 => 112,  200 => 96,  206 => 90,  259 => 110,  245 => 109,  223 => 109,  194 => 88,  190 => 87,  244 => 104,  226 => 110,  212 => 102,  261 => 112,  225 => 107,  150 => 62,  134 => 67,  118 => 42,  234 => 100,  216 => 104,  202 => 89,  192 => 93,  181 => 84,  167 => 76,  188 => 89,  124 => 44,  114 => 59,  236 => 113,  205 => 97,  191 => 89,  186 => 95,  153 => 59,  137 => 61,  100 => 36,  126 => 54,  113 => 40,  207 => 97,  198 => 95,  195 => 94,  184 => 85,  180 => 85,  172 => 81,  155 => 75,  127 => 45,  178 => 78,  170 => 73,  161 => 75,  146 => 64,  175 => 76,  165 => 76,  84 => 38,  77 => 25,  53 => 17,  23 => 3,  20 => 1,  104 => 37,  81 => 47,  174 => 75,  160 => 69,  152 => 74,  148 => 65,  110 => 55,  97 => 42,  90 => 40,  76 => 28,  70 => 27,  65 => 22,  34 => 5,  129 => 58,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 117,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 108,  229 => 108,  220 => 92,  214 => 102,  177 => 65,  169 => 60,  140 => 69,  132 => 67,  128 => 60,  107 => 38,  61 => 20,  273 => 96,  269 => 94,  254 => 116,  243 => 110,  240 => 127,  238 => 94,  235 => 74,  230 => 103,  227 => 106,  224 => 93,  221 => 99,  219 => 105,  217 => 103,  208 => 101,  204 => 72,  179 => 84,  159 => 69,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 27,  67 => 13,  63 => 19,  59 => 18,  38 => 9,  87 => 33,  201 => 96,  196 => 87,  183 => 82,  171 => 81,  166 => 72,  163 => 78,  158 => 71,  156 => 73,  151 => 63,  142 => 71,  138 => 69,  136 => 49,  121 => 53,  117 => 52,  105 => 48,  91 => 34,  62 => 21,  49 => 14,  28 => 6,  94 => 30,  89 => 36,  85 => 35,  75 => 28,  68 => 24,  56 => 18,  24 => 4,  31 => 5,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 41,  88 => 31,  78 => 28,  46 => 11,  44 => 12,  27 => 4,  79 => 26,  72 => 24,  69 => 40,  47 => 15,  40 => 11,  37 => 5,  22 => 2,  246 => 90,  157 => 68,  145 => 53,  139 => 58,  131 => 66,  123 => 54,  120 => 59,  115 => 43,  111 => 39,  108 => 46,  101 => 33,  98 => 49,  96 => 35,  83 => 30,  74 => 26,  66 => 24,  55 => 17,  52 => 9,  50 => 16,  43 => 11,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 95,  199 => 94,  193 => 86,  189 => 92,  187 => 84,  182 => 79,  176 => 83,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 67,  149 => 75,  147 => 61,  144 => 70,  141 => 62,  133 => 51,  130 => 46,  125 => 64,  122 => 53,  116 => 58,  112 => 48,  109 => 54,  106 => 40,  103 => 43,  99 => 37,  95 => 43,  92 => 35,  86 => 33,  82 => 29,  80 => 30,  73 => 23,  64 => 12,  60 => 20,  57 => 19,  54 => 17,  51 => 15,  48 => 13,  45 => 14,  42 => 12,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
