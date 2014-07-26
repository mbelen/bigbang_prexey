<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_e7ca19267efd6dfb0e86274784b3a79d128e1dc74afc5ebcdf9150ecdd7d670a extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  253 => 100,  222 => 83,  210 => 77,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  213 => 78,  197 => 69,  363 => 153,  357 => 123,  353 => 149,  351 => 141,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 131,  306 => 107,  303 => 122,  300 => 121,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  185 => 66,  250 => 115,  232 => 88,  200 => 72,  206 => 90,  259 => 103,  245 => 109,  223 => 109,  194 => 68,  190 => 76,  244 => 136,  226 => 84,  212 => 78,  261 => 112,  225 => 107,  150 => 55,  134 => 39,  118 => 49,  234 => 100,  216 => 79,  202 => 77,  192 => 93,  181 => 65,  167 => 76,  188 => 90,  124 => 44,  114 => 59,  236 => 113,  205 => 97,  191 => 67,  186 => 95,  153 => 77,  137 => 61,  100 => 39,  126 => 54,  113 => 38,  207 => 75,  198 => 95,  195 => 94,  184 => 63,  180 => 85,  172 => 57,  155 => 47,  127 => 35,  178 => 59,  170 => 84,  161 => 63,  146 => 64,  175 => 58,  165 => 83,  84 => 27,  77 => 25,  53 => 15,  23 => 3,  20 => 1,  104 => 32,  81 => 23,  174 => 65,  160 => 69,  152 => 46,  148 => 65,  110 => 55,  97 => 42,  90 => 37,  76 => 27,  70 => 26,  65 => 22,  34 => 5,  129 => 58,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 106,  268 => 117,  264 => 84,  258 => 94,  252 => 80,  247 => 111,  241 => 93,  229 => 87,  220 => 81,  214 => 102,  177 => 65,  169 => 60,  140 => 58,  132 => 67,  128 => 60,  107 => 38,  61 => 23,  273 => 96,  269 => 107,  254 => 116,  243 => 92,  240 => 127,  238 => 94,  235 => 89,  230 => 103,  227 => 86,  224 => 81,  221 => 99,  219 => 105,  217 => 103,  208 => 76,  204 => 72,  179 => 84,  159 => 69,  143 => 51,  135 => 68,  119 => 40,  102 => 24,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 12,  87 => 32,  201 => 96,  196 => 92,  183 => 82,  171 => 81,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 59,  142 => 71,  138 => 69,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 35,  62 => 24,  49 => 14,  28 => 3,  94 => 21,  89 => 30,  85 => 24,  75 => 28,  68 => 30,  56 => 18,  24 => 2,  31 => 8,  26 => 3,  25 => 3,  21 => 2,  19 => 1,  93 => 38,  88 => 32,  78 => 28,  46 => 14,  44 => 20,  27 => 7,  79 => 29,  72 => 27,  69 => 26,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 68,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 30,  74 => 26,  66 => 25,  55 => 24,  52 => 12,  50 => 15,  43 => 9,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 86,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 75,  147 => 75,  144 => 42,  141 => 73,  133 => 51,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 43,  99 => 23,  95 => 34,  92 => 43,  86 => 33,  82 => 19,  80 => 29,  73 => 33,  64 => 21,  60 => 20,  57 => 20,  54 => 19,  51 => 13,  48 => 16,  45 => 9,  42 => 12,  39 => 6,  36 => 10,  33 => 9,  30 => 5,);
    }
}
