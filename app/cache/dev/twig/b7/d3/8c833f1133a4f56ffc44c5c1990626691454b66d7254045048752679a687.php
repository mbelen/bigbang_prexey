<?php

/* BackendAdminBundle:Zona:edit.html.twig */
class __TwigTemplate_b7d38c833f1133a4f56ffc44c5c1990626691454b66d7254045048752679a687 extends Twig_Template
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
        echo "<h3>Editar Zona</h3>
    
    
    
    
    <div class=\"well\">
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active in\" id=\"home\">
    <form class=\"form-horizontal\" id=\"tab\" method=\"post\" novalidate  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zona_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" >
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
     ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
     
     
   
    
     ";
        // line 19
        $this->env->loadTemplate("BackendAdminBundle:Zona:_zona.html.twig")->display($context);
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
        echo $this->env->getExtension('routing')->getPath("zona");
        echo "\" ><i class=\"icon-chevron-left icon-white\"></i> Back</button>
    ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_DELZONA")) {
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
       <p class=\"error-text\">Esta seguro que desea borrar la zona?</p>
     </div>
     <div class=\"modal-footer\">
      <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
      <button class=\"btn btn-danger \" data-id=\"0\"  data-url=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("zona_delete", array("id" => "id"));
        echo "\" >Borrar</button>
     </div>
    </div>

<form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>

    
";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        // line 69
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d7b855e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d7b855e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d7b855e_validate_zona_1.js");
            // line 70
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "d7b855e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d7b855e") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d7b855e.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Zona:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 90,  259 => 110,  245 => 109,  223 => 105,  194 => 88,  190 => 87,  244 => 104,  226 => 92,  212 => 91,  261 => 112,  225 => 107,  150 => 62,  134 => 67,  118 => 42,  234 => 100,  216 => 104,  202 => 89,  192 => 93,  181 => 84,  167 => 76,  188 => 89,  124 => 44,  114 => 59,  236 => 126,  205 => 97,  191 => 89,  186 => 95,  153 => 59,  137 => 63,  100 => 36,  126 => 54,  113 => 48,  207 => 97,  198 => 95,  195 => 94,  184 => 85,  180 => 85,  172 => 81,  155 => 75,  127 => 45,  178 => 78,  170 => 73,  161 => 75,  146 => 72,  175 => 83,  165 => 76,  84 => 38,  77 => 29,  53 => 15,  23 => 3,  20 => 1,  104 => 37,  81 => 47,  174 => 75,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 42,  90 => 40,  76 => 28,  70 => 23,  65 => 20,  34 => 5,  129 => 64,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 108,  229 => 108,  220 => 92,  214 => 102,  177 => 65,  169 => 60,  140 => 69,  132 => 67,  128 => 60,  107 => 38,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 110,  240 => 127,  238 => 94,  235 => 74,  230 => 103,  227 => 106,  224 => 93,  221 => 99,  219 => 105,  217 => 103,  208 => 90,  204 => 72,  179 => 84,  159 => 69,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 27,  67 => 13,  63 => 19,  59 => 18,  38 => 9,  87 => 39,  201 => 96,  196 => 87,  183 => 82,  171 => 81,  166 => 69,  163 => 78,  158 => 71,  156 => 73,  151 => 63,  142 => 71,  138 => 69,  136 => 49,  121 => 49,  117 => 49,  105 => 35,  91 => 29,  62 => 21,  49 => 14,  28 => 5,  94 => 30,  89 => 36,  85 => 35,  75 => 28,  68 => 24,  56 => 35,  24 => 4,  31 => 5,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 41,  88 => 31,  78 => 34,  46 => 11,  44 => 11,  27 => 4,  79 => 26,  72 => 24,  69 => 40,  47 => 12,  40 => 11,  37 => 5,  22 => 2,  246 => 90,  157 => 65,  145 => 53,  139 => 58,  131 => 66,  123 => 55,  120 => 59,  115 => 43,  111 => 39,  108 => 46,  101 => 33,  98 => 49,  96 => 36,  83 => 30,  74 => 26,  66 => 23,  55 => 17,  52 => 9,  50 => 29,  43 => 11,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 95,  199 => 94,  193 => 86,  189 => 92,  187 => 84,  182 => 79,  176 => 83,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 71,  149 => 75,  147 => 61,  144 => 70,  141 => 59,  133 => 51,  130 => 46,  125 => 64,  122 => 53,  116 => 58,  112 => 48,  109 => 54,  106 => 40,  103 => 43,  99 => 37,  95 => 43,  92 => 35,  86 => 33,  82 => 29,  80 => 30,  73 => 25,  64 => 12,  60 => 20,  57 => 19,  54 => 17,  51 => 15,  48 => 12,  45 => 13,  42 => 12,  39 => 9,  36 => 10,  33 => 4,  30 => 21,);
    }
}
