<?php

/* BackendAdminBundle:Sucursal:new.html.twig */
class __TwigTemplate_640323674ac9e85bc73dbd80906ac2a778c0097e8e89d2c634721796d992c3a0 extends Twig_Template
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
        echo "<h3>Nueva Sucursal</h3>
    
   
    <div class=\"well\">
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active in\" id=\"home\">
    <form class=\"form-horizontal\" id=\"tab\" name=\"tab\" method=\"post\" novalidate=\"true\"    action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("sucursal_create");
        echo "\" >
     ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
   

    
    ";
        // line 15
        $this->env->loadTemplate("BackendAdminBundle:Sucursal:_sucursal.html.twig")->display($context);
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
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\"><i class=\"icon-chevron-left icon-white\"></i> Back</button>
    
    </div>
    
    
    
    </div>
    </form>
    </div>
    
     </div>
      </div>
    

       
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 
";
        // line 43
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9338c5d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9338c5d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9338c5d_validate_sucursal_1.js");
            // line 44
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "9338c5d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9338c5d") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9338c5d.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Sucursal:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 100,  216 => 98,  202 => 96,  192 => 93,  181 => 81,  167 => 76,  188 => 88,  124 => 62,  114 => 48,  236 => 126,  205 => 105,  191 => 97,  186 => 95,  153 => 77,  137 => 65,  100 => 33,  126 => 52,  113 => 55,  207 => 97,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 75,  127 => 67,  178 => 85,  170 => 77,  161 => 118,  146 => 69,  175 => 79,  165 => 75,  84 => 48,  77 => 20,  53 => 15,  23 => 3,  20 => 1,  104 => 51,  81 => 47,  174 => 84,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 40,  90 => 46,  76 => 26,  70 => 9,  65 => 20,  34 => 26,  129 => 64,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 99,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 67,  128 => 60,  107 => 45,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 127,  238 => 85,  235 => 74,  230 => 124,  227 => 123,  224 => 71,  221 => 99,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 24,  67 => 23,  63 => 34,  59 => 11,  38 => 10,  87 => 49,  201 => 92,  196 => 99,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 48,  151 => 70,  142 => 59,  138 => 69,  136 => 70,  121 => 60,  117 => 59,  105 => 35,  91 => 29,  62 => 19,  49 => 14,  28 => 5,  94 => 30,  89 => 41,  85 => 35,  75 => 43,  68 => 25,  56 => 35,  24 => 4,  31 => 25,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 47,  88 => 38,  78 => 34,  46 => 11,  44 => 11,  27 => 5,  79 => 25,  72 => 36,  69 => 40,  47 => 15,  40 => 10,  37 => 7,  22 => 3,  246 => 90,  157 => 78,  145 => 71,  139 => 45,  131 => 61,  123 => 51,  120 => 50,  115 => 43,  111 => 37,  108 => 36,  101 => 41,  98 => 49,  96 => 48,  83 => 44,  74 => 26,  66 => 24,  55 => 17,  52 => 9,  50 => 29,  43 => 12,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 96,  199 => 67,  193 => 73,  189 => 92,  187 => 84,  182 => 85,  176 => 88,  173 => 124,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 65,  147 => 61,  144 => 69,  141 => 70,  133 => 62,  130 => 68,  125 => 59,  122 => 57,  116 => 60,  112 => 47,  109 => 34,  106 => 49,  103 => 34,  99 => 44,  95 => 43,  92 => 43,  86 => 40,  82 => 29,  80 => 43,  73 => 25,  64 => 38,  60 => 20,  57 => 18,  54 => 17,  51 => 15,  48 => 7,  45 => 30,  42 => 29,  39 => 9,  36 => 10,  33 => 5,  30 => 21,);
    }
}
