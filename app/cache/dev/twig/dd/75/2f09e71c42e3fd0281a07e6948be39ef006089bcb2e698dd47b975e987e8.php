<?php

/* BackendAdminBundle:Sucursal:edit.html.twig */
class __TwigTemplate_dd752f09e71c42e3fd0281a07e6948be39ef006089bcb2e698dd47b975e987e8 extends Twig_Template
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
        echo "<h3>Editar Sucursal</h3>
    
    
    
    
    <div class=\"well\">
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active in\" id=\"home\">
    <form class=\"form-horizontal\" id=\"tab\" method=\"post\" novalidate  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sucursal_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" >
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
     ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
     
     
   
    
     ";
        // line 19
        $this->env->loadTemplate("BackendAdminBundle:Sucursal:_sucursal.html.twig")->display($context);
        echo " 
        
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

    <div class=\"control-group\">
    <!-- Button -->
    <div class=\"controls\">
    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-ok icon-white\"></i>Actualizar</button>
    <button type=\"button\" class=\"btn btn-inverse\" data-url=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("sucursal");
        echo "\" ><i class=\"icon-chevron-left icon-white\"></i> Back</button>
    ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_DELSUCURSAL")) {
            // line 29
            echo "  
    <a href=\"#myModal\" class=\"btn btn-danger confirm-delete\" role=\"button\" data-toggle=\"modal\" data-id=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\" ><i class=\"icon-remove icon-white\"></i>Borrar</a>
    
    ";
        }
        // line 33
        echo "    
    </div>
    
    
    </div>
    
    
    
    
    
    </form>
    </div>
    
    </div>
     </div>
    
    <div class=\"modal small hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
      <h3 id=\"myModalLabel\">Confirmar Borrado</h3>
     </div>
     <div class=\"modal-body\">
       <p class=\"error-text\">Esta seguro que desea borrar los datos de la sucursal?</p>
     </div>
     <div class=\"modal-footer\">
      <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
      <button class=\"btn btn-danger \" data-id=\"0\"  data-url=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("sucursal_delete", array("id" => "id"));
        echo "\" >Borrar</button>
     </div>
    </div>

<form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>

    
";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        // line 74
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9338c5d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9338c5d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9338c5d_validate_sucursal_1.js");
            // line 75
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
        return "BackendAdminBundle:Sucursal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 112,  225 => 107,  150 => 63,  134 => 57,  118 => 53,  234 => 100,  216 => 104,  202 => 96,  192 => 93,  181 => 81,  167 => 76,  188 => 88,  124 => 62,  114 => 59,  236 => 126,  205 => 97,  191 => 97,  186 => 95,  153 => 64,  137 => 63,  100 => 33,  126 => 55,  113 => 55,  207 => 97,  198 => 95,  195 => 94,  184 => 86,  180 => 85,  172 => 81,  155 => 75,  127 => 56,  178 => 85,  170 => 77,  161 => 75,  146 => 66,  175 => 83,  165 => 76,  84 => 48,  77 => 29,  53 => 15,  23 => 3,  20 => 1,  104 => 45,  81 => 47,  174 => 84,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 40,  90 => 46,  76 => 28,  70 => 26,  65 => 20,  34 => 26,  129 => 64,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 77,  229 => 108,  220 => 99,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 67,  128 => 60,  107 => 45,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 110,  240 => 127,  238 => 85,  235 => 74,  230 => 124,  227 => 123,  224 => 71,  221 => 99,  219 => 105,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 67,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 27,  67 => 23,  63 => 34,  59 => 11,  38 => 10,  87 => 37,  201 => 96,  196 => 99,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 73,  151 => 70,  142 => 65,  138 => 69,  136 => 71,  121 => 63,  117 => 59,  105 => 35,  91 => 29,  62 => 21,  49 => 14,  28 => 5,  94 => 30,  89 => 36,  85 => 35,  75 => 28,  68 => 25,  56 => 35,  24 => 4,  31 => 25,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 47,  88 => 38,  78 => 34,  46 => 11,  44 => 11,  27 => 5,  79 => 25,  72 => 36,  69 => 40,  47 => 15,  40 => 10,  37 => 7,  22 => 3,  246 => 90,  157 => 78,  145 => 74,  139 => 72,  131 => 61,  123 => 55,  120 => 50,  115 => 43,  111 => 37,  108 => 46,  101 => 41,  98 => 49,  96 => 48,  83 => 44,  74 => 26,  66 => 25,  55 => 17,  52 => 9,  50 => 29,  43 => 12,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 96,  199 => 67,  193 => 91,  189 => 92,  187 => 84,  182 => 85,  176 => 77,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 71,  149 => 75,  147 => 62,  144 => 69,  141 => 60,  133 => 62,  130 => 56,  125 => 64,  122 => 54,  116 => 60,  112 => 47,  109 => 34,  106 => 49,  103 => 34,  99 => 43,  95 => 43,  92 => 43,  86 => 33,  82 => 29,  80 => 30,  73 => 25,  64 => 38,  60 => 20,  57 => 19,  54 => 17,  51 => 16,  48 => 7,  45 => 30,  42 => 12,  39 => 9,  36 => 10,  33 => 5,  30 => 21,);
    }
}
