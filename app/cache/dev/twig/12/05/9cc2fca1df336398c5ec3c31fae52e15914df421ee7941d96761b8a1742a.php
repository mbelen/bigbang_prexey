<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_12059cc2fca1df336398c5ec3c31fae52e15914df421ee7941d96761b8a1742a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => $this->getContext($context, "token"))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => $this->getContext($context, "token"))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  213 => 78,  197 => 71,  363 => 126,  357 => 123,  353 => 121,  351 => 141,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  315 => 125,  306 => 107,  303 => 122,  300 => 121,  297 => 104,  291 => 102,  288 => 101,  274 => 97,  265 => 96,  263 => 95,  255 => 93,  231 => 83,  185 => 66,  250 => 115,  232 => 112,  200 => 72,  206 => 90,  259 => 110,  245 => 109,  223 => 109,  194 => 70,  190 => 76,  244 => 104,  226 => 84,  212 => 78,  261 => 112,  225 => 107,  150 => 55,  134 => 47,  118 => 49,  234 => 100,  216 => 79,  202 => 77,  192 => 93,  181 => 65,  167 => 76,  188 => 89,  124 => 44,  114 => 59,  236 => 113,  205 => 97,  191 => 69,  186 => 95,  153 => 56,  137 => 61,  100 => 39,  126 => 54,  113 => 38,  207 => 75,  198 => 95,  195 => 94,  184 => 85,  180 => 85,  172 => 62,  155 => 75,  127 => 45,  178 => 64,  170 => 73,  161 => 63,  146 => 64,  175 => 65,  165 => 60,  84 => 24,  77 => 25,  53 => 12,  23 => 3,  20 => 1,  104 => 32,  81 => 23,  174 => 65,  160 => 69,  152 => 74,  148 => 65,  110 => 55,  97 => 42,  90 => 27,  76 => 25,  70 => 19,  65 => 22,  34 => 5,  129 => 58,  58 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 100,  278 => 106,  268 => 117,  264 => 84,  258 => 94,  252 => 80,  247 => 111,  241 => 90,  229 => 85,  220 => 81,  214 => 102,  177 => 65,  169 => 60,  140 => 58,  132 => 67,  128 => 60,  107 => 38,  61 => 17,  273 => 96,  269 => 94,  254 => 116,  243 => 92,  240 => 127,  238 => 94,  235 => 85,  230 => 103,  227 => 106,  224 => 81,  221 => 99,  219 => 105,  217 => 103,  208 => 101,  204 => 72,  179 => 84,  159 => 69,  143 => 51,  135 => 68,  119 => 40,  102 => 33,  71 => 27,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  87 => 34,  201 => 96,  196 => 87,  183 => 82,  171 => 81,  166 => 72,  163 => 78,  158 => 62,  156 => 58,  151 => 59,  142 => 71,  138 => 69,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 21,  49 => 14,  28 => 6,  94 => 30,  89 => 36,  85 => 24,  75 => 19,  68 => 24,  56 => 18,  24 => 4,  31 => 5,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 41,  88 => 32,  78 => 28,  46 => 13,  44 => 9,  27 => 3,  79 => 21,  72 => 18,  69 => 17,  47 => 15,  40 => 11,  37 => 5,  22 => 2,  246 => 93,  157 => 68,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 59,  115 => 43,  111 => 47,  108 => 46,  101 => 31,  98 => 30,  96 => 30,  83 => 33,  74 => 26,  66 => 24,  55 => 13,  52 => 12,  50 => 16,  43 => 9,  41 => 8,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 94,  193 => 86,  189 => 92,  187 => 75,  182 => 79,  176 => 63,  173 => 124,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 75,  147 => 54,  144 => 70,  141 => 51,  133 => 51,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 40,  103 => 43,  99 => 31,  95 => 43,  92 => 27,  86 => 33,  82 => 28,  80 => 27,  73 => 24,  64 => 17,  60 => 20,  57 => 19,  54 => 17,  51 => 15,  48 => 13,  45 => 9,  42 => 12,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
