<?php

/* BackendAdminBundle:Sucursal:index.html.twig */
class __TwigTemplate_5495663bd146f6557265e43598cf1cafe0c73c6fa86929d0897d3c8bca38151a extends Twig_Template
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
        echo "    
    
        <h4>Listado de Sucursales </h4>

<div class=\"row-fluid\">
  
  
  <div class=\"span2\">  ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADDSUCURSAL")) {
            echo " <button class=\"btn btn-primary\" type=\"button\" id=\"new_button\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("sucursal_new");
            echo "\" >Nueva Sucursal</button> ";
        }
        echo " </div>
  
    <div class=\"span3\">
     
    <form id=\"custom-search-form\" class=\"form-search form-horizontal pull-right\" action=\"#\">
      <div class=\"input-append span12\">
      <input type=\"text\" class=\"search-query\" name=\"search-query\" id=\"search-query\" placeholder=\"Buscar\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "search"), "html", null, true);
        echo "\">
      <button type=\"button\" id=\"search-button\" class=\"btn\" data-url=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sucursal");
        echo "\" ><i class=\"icon-search\"></i></button>
      </div>
      </form>
    
    
    
    </div>
    
     <div class=\"span2\">
          ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_VIEWSUCURSAL")) {
            echo " <button class=\"btn btn-primary\" type=\"button\" id=\"exportar_button\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("sucursal_exportar");
            echo "\" >Exportar </button> ";
        }
        // line 28
        echo "    </div>
    
 </div>
       
    <div class=\"well\">
    <table class=\"table\">
    <thead>
    <tr>
    
    <th ";
        // line 37
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "u.nombre"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Nombre", "u.nombre");
        echo "</th>
    <th>Responsable</th>
    <th>Dirección</th>
    <th>Teléfono</th>
    <th>Fax</th>
    <th>Email</th>
    <th style=\"width: 36px;\">Acciones</th>
    </tr>
    </thead>
    <tbody>
     ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["sucursal"]) {
            // line 48
            echo "   
    
     <tr>
                
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "sucursal"), "nombre")), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "sucursal"), "Responsable")), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "sucursal"), "calle") . " ") . $this->getAttribute($this->getContext($context, "sucursal"), "numero")), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sucursal"), "telefono"), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sucursal"), "fax"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sucursal"), "email"), "html", null, true);
            echo " </td>
                <td>
                ";
            // line 59
            if ($this->env->getExtension('security')->isGranted("ROLE_MODSUCURSAL")) {
                // line 60
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sucursal_edit", array("id" => $this->getAttribute($this->getContext($context, "sucursal"), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i></a>
                ";
            }
            // line 62
            echo "                 ";
            if ($this->env->getExtension('security')->isGranted("ROLE_DELSUCURSAL")) {
                // line 63
                echo "                
                <a href=\"#myModal\" role=\"button\" class=\"confirm-delete\" data-toggle=\"modal\" data-id=";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sucursal"), "id"), "html", null, true);
                echo " ><i class=\"icon-remove\"></i></a>
                
                 ";
            }
            // line 67
            echo "                </td>
    </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sucursal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "   
    </tbody>
    </table>
    </div>
    
    <div class=\"pagination\">
     ";
        // line 77
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "
    
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
        // line 91
        echo $this->env->getExtension('routing')->getPath("sucursal_delete", array("id" => "id"));
        echo "\">Borrar</button>
     </div>
    </div>
    
    
    <form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>
    
    
    ";
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 
";
        // line 107
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c34c3ec_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c34c3ec_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c34c3ec_search_index_1.js");
            // line 108
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "c34c3ec"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c34c3ec") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c34c3ec.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 110
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "22315e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_22315e7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/22315e7_exportar_entidad_1.js");
            // line 111
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "22315e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_22315e7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/22315e7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 112
        echo "      
  
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Sucursal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 112,  225 => 107,  150 => 63,  134 => 57,  118 => 53,  234 => 100,  216 => 104,  202 => 96,  192 => 93,  181 => 81,  167 => 76,  188 => 88,  124 => 62,  114 => 52,  236 => 126,  205 => 97,  191 => 97,  186 => 95,  153 => 64,  137 => 65,  100 => 33,  126 => 55,  113 => 55,  207 => 97,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 75,  127 => 67,  178 => 85,  170 => 77,  161 => 118,  146 => 69,  175 => 79,  165 => 75,  84 => 48,  77 => 20,  53 => 15,  23 => 3,  20 => 1,  104 => 47,  81 => 47,  174 => 84,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 40,  90 => 46,  76 => 28,  70 => 27,  65 => 20,  34 => 26,  129 => 64,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 77,  229 => 108,  220 => 99,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 67,  128 => 60,  107 => 45,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 110,  240 => 127,  238 => 85,  235 => 74,  230 => 124,  227 => 123,  224 => 71,  221 => 99,  219 => 105,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 67,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 24,  67 => 23,  63 => 34,  59 => 11,  38 => 10,  87 => 37,  201 => 96,  196 => 99,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 48,  151 => 70,  142 => 59,  138 => 69,  136 => 70,  121 => 60,  117 => 59,  105 => 35,  91 => 29,  62 => 19,  49 => 14,  28 => 5,  94 => 30,  89 => 41,  85 => 35,  75 => 43,  68 => 25,  56 => 35,  24 => 4,  31 => 25,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 47,  88 => 38,  78 => 34,  46 => 11,  44 => 11,  27 => 5,  79 => 25,  72 => 36,  69 => 40,  47 => 15,  40 => 10,  37 => 7,  22 => 3,  246 => 90,  157 => 78,  145 => 71,  139 => 59,  131 => 61,  123 => 51,  120 => 50,  115 => 43,  111 => 37,  108 => 48,  101 => 41,  98 => 49,  96 => 48,  83 => 44,  74 => 26,  66 => 24,  55 => 17,  52 => 9,  50 => 29,  43 => 12,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 96,  199 => 67,  193 => 91,  189 => 92,  187 => 84,  182 => 85,  176 => 77,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 71,  149 => 65,  147 => 62,  144 => 69,  141 => 60,  133 => 62,  130 => 56,  125 => 59,  122 => 54,  116 => 60,  112 => 47,  109 => 34,  106 => 49,  103 => 34,  99 => 44,  95 => 43,  92 => 43,  86 => 40,  82 => 29,  80 => 43,  73 => 25,  64 => 38,  60 => 20,  57 => 18,  54 => 17,  51 => 15,  48 => 7,  45 => 30,  42 => 29,  39 => 9,  36 => 10,  33 => 5,  30 => 21,);
    }
}
