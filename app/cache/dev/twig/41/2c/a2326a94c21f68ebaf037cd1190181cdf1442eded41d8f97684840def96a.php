<?php

/* BackendUserBundle:User:new.html.twig */
class __TwigTemplate_412ca2326a94c21f68ebaf037cd1190181cdf1442eded41d8f97684840def96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backend.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<h3>Nuevo Usuario</h3>
    
   
    <div class=\"well\">
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active in\" id=\"home\">
    <form class=\"form-horizontal\" id=\"tab\" name=\"tab\" method=\"post\" novalidate=\"true\"    action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user_create");
        echo "\" >
     ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
   

    
    ";
        // line 15
        $this->env->loadTemplate("BackendUserBundle:User:_user.html.twig")->display($context);
        echo " 

    
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

    <div class=\"control-group\">
    <!-- Button -->
    <div class=\"controls\">
    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-ok icon-white\"></i>Crear</button>
    <button type=\"button\" class=\"btn btn-inverse\" data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user", array("search" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "user_search"), "method"))), "html", null, true);
        echo "\"><i class=\"icon-chevron-left icon-white\"></i> Back</button>
    
    </div>
    
    
    </form>
    </div>
    
    </div>
    
    
    

       
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 
";
        // line 42
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d5662e1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5662e1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d5662e1_validate_newuser_1.js");
            // line 43
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "d5662e1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5662e1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d5662e1.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 67,  178 => 125,  170 => 123,  161 => 118,  146 => 106,  175 => 79,  165 => 76,  84 => 22,  77 => 20,  53 => 18,  23 => 3,  20 => 1,  104 => 42,  81 => 30,  174 => 51,  160 => 49,  152 => 47,  148 => 46,  110 => 36,  97 => 29,  90 => 24,  76 => 14,  70 => 9,  65 => 22,  34 => 5,  129 => 61,  58 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 71,  132 => 42,  128 => 37,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 27,  67 => 12,  63 => 15,  59 => 20,  38 => 11,  87 => 25,  201 => 92,  196 => 128,  183 => 82,  171 => 78,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 68,  142 => 59,  138 => 54,  136 => 70,  121 => 56,  117 => 26,  105 => 55,  91 => 27,  62 => 21,  49 => 14,  28 => 5,  94 => 42,  89 => 20,  85 => 39,  75 => 28,  68 => 30,  56 => 5,  24 => 4,  31 => 5,  26 => 2,  25 => 1,  21 => 2,  19 => 1,  93 => 28,  88 => 40,  78 => 34,  46 => 7,  44 => 11,  27 => 10,  79 => 15,  72 => 16,  69 => 25,  47 => 15,  40 => 10,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 43,  96 => 36,  83 => 25,  74 => 37,  66 => 24,  55 => 15,  52 => 9,  50 => 53,  43 => 14,  41 => 9,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 64,  173 => 124,  168 => 72,  164 => 59,  162 => 75,  154 => 58,  149 => 51,  147 => 70,  144 => 69,  141 => 48,  133 => 62,  130 => 68,  125 => 36,  122 => 43,  116 => 60,  112 => 59,  109 => 34,  106 => 35,  103 => 32,  99 => 31,  95 => 26,  92 => 27,  86 => 26,  82 => 22,  80 => 19,  73 => 32,  64 => 11,  60 => 6,  57 => 18,  54 => 10,  51 => 15,  48 => 15,  45 => 14,  42 => 12,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
