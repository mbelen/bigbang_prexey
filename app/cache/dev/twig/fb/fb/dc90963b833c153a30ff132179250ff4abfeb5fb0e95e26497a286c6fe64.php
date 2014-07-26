<?php

/* BackendAdminBundle:Articulo:index.html.twig */
class __TwigTemplate_fbfbdc90963b833c153a30ff132179250ff4abfeb5fb0e95e26497a286c6fe64 extends Twig_Template
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
    
        <h4>Listado de Artículos </h4>

<div class=\"row-fluid\">
  
  
  <div class=\"span2\">  ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADDARTICULO")) {
            echo " <button class=\"btn btn-primary\" type=\"button\" id=\"new_button\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("articulo_new");
            echo "\" >Nuevo Artículo</button> ";
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
        echo $this->env->getExtension('routing')->getPath("articulo");
        echo "\" ><i class=\"icon-search\"></i></button>
      </div>
      </form>
    
    
    
    </div>
    
     <div class=\"span2\">
          ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_VIEWARTICULO")) {
            echo " <button class=\"btn btn-primary\" type=\"button\" id=\"exportar_button\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("articulo_exportar");
            echo "\" >Exportar </button> ";
        }
        // line 28
        echo "    </div>
    
 </div>
    
    
    
    
    <div class=\"well\">
    <table class=\"table\">
    <thead>
    <tr>
     <th>Fecha</th>
    <th ";
        // line 40
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "u.tipo"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Tipo", "u.tipo");
        echo "</th>
    <th>Disponible</th>
    <th>Descripción</th>
    <th>Observaciones</th>
    <th style=\"width: 36px;\">Acciones</th>
    </tr>
    </thead>
    <tbody>
     ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 49
            echo "    
     <tr>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "createdAt"), "d-m-Y "), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "tipo"), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            if ($this->getAttribute($this->getContext($context, "articulo"), "isDisponible")) {
                // line 54
                echo "                    
                    <span class=\"label label-success\">Disponible</span>
                   
                  ";
            } else {
                // line 58
                echo "                     <span class=\"label label-important\">No Disponible</span> 
                     
                  ";
            }
            // line 60
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "observacion"), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 64
            if ($this->env->getExtension('security')->isGranted("ROLE_MODARTICULO")) {
                // line 65
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articulo_edit", array("id" => $this->getAttribute($this->getContext($context, "articulo"), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i></a>
                ";
            }
            // line 67
            echo "                 ";
            if ($this->env->getExtension('security')->isGranted("ROLE_DELARTICULO")) {
                // line 68
                echo "                
                <a href=\"#myModal\" role=\"button\" class=\"confirm-delete\" data-toggle=\"modal\" data-id=";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "id"), "html", null, true);
                echo " ><i class=\"icon-remove\"></i></a>
                
                 ";
            }
            // line 72
            echo "                </td>
    </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "   
    </tbody>
    </table>
    </div>
    
    <div class=\"pagination\">
     ";
        // line 82
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "
    
    </div>
    
    <div class=\"modal small hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
      <h3 id=\"myModalLabel\">Confirmar Borrado</h3>
     </div>
     <div class=\"modal-body\">
       <p class=\"error-text\">Esta seguro que desea borrar los datos del artículo?</p>
     </div>
     <div class=\"modal-footer\">
      <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
      <button class=\"btn btn-danger \" data-id=\"0\"  data-url=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("articulo_delete", array("id" => "id"));
        echo "\">Borrar</button>
     </div>
    </div>
    
    
    <form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>
    
    
    ";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 
";
        // line 112
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c34c3ec_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c34c3ec_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c34c3ec_search_index_1.js");
            // line 113
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
        // line 115
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "22315e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_22315e7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/22315e7_exportar_entidad_1.js");
            // line 116
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
        // line 117
        echo "      
  
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Articulo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 115,  232 => 112,  200 => 96,  206 => 90,  259 => 110,  245 => 109,  223 => 109,  194 => 88,  190 => 87,  244 => 104,  226 => 110,  212 => 102,  261 => 112,  225 => 107,  150 => 62,  134 => 60,  118 => 42,  234 => 100,  216 => 104,  202 => 89,  192 => 93,  181 => 84,  167 => 76,  188 => 89,  124 => 44,  114 => 59,  236 => 113,  205 => 97,  191 => 89,  186 => 95,  153 => 59,  137 => 61,  100 => 36,  126 => 54,  113 => 51,  207 => 97,  198 => 95,  195 => 94,  184 => 85,  180 => 85,  172 => 81,  155 => 75,  127 => 45,  178 => 78,  170 => 73,  161 => 75,  146 => 64,  175 => 76,  165 => 76,  84 => 38,  77 => 29,  53 => 15,  23 => 3,  20 => 1,  104 => 37,  81 => 47,  174 => 75,  160 => 69,  152 => 74,  148 => 65,  110 => 55,  97 => 42,  90 => 40,  76 => 28,  70 => 27,  65 => 20,  34 => 5,  129 => 58,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 117,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 108,  229 => 108,  220 => 92,  214 => 102,  177 => 65,  169 => 60,  140 => 69,  132 => 67,  128 => 60,  107 => 38,  61 => 23,  273 => 96,  269 => 94,  254 => 116,  243 => 110,  240 => 127,  238 => 94,  235 => 74,  230 => 103,  227 => 106,  224 => 93,  221 => 99,  219 => 105,  217 => 103,  208 => 101,  204 => 72,  179 => 84,  159 => 69,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 27,  67 => 13,  63 => 19,  59 => 18,  38 => 9,  87 => 39,  201 => 96,  196 => 87,  183 => 82,  171 => 81,  166 => 72,  163 => 78,  158 => 71,  156 => 73,  151 => 63,  142 => 71,  138 => 69,  136 => 49,  121 => 53,  117 => 52,  105 => 48,  91 => 29,  62 => 21,  49 => 14,  28 => 5,  94 => 30,  89 => 36,  85 => 35,  75 => 28,  68 => 24,  56 => 35,  24 => 4,  31 => 5,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 41,  88 => 31,  78 => 34,  46 => 11,  44 => 11,  27 => 4,  79 => 26,  72 => 24,  69 => 40,  47 => 12,  40 => 10,  37 => 5,  22 => 2,  246 => 90,  157 => 68,  145 => 53,  139 => 58,  131 => 66,  123 => 54,  120 => 59,  115 => 43,  111 => 39,  108 => 46,  101 => 33,  98 => 49,  96 => 36,  83 => 30,  74 => 26,  66 => 24,  55 => 17,  52 => 9,  50 => 29,  43 => 11,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 95,  199 => 94,  193 => 86,  189 => 92,  187 => 84,  182 => 79,  176 => 83,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 67,  149 => 75,  147 => 61,  144 => 70,  141 => 62,  133 => 51,  130 => 46,  125 => 64,  122 => 53,  116 => 58,  112 => 48,  109 => 49,  106 => 40,  103 => 43,  99 => 37,  95 => 43,  92 => 35,  86 => 33,  82 => 29,  80 => 30,  73 => 25,  64 => 12,  60 => 20,  57 => 18,  54 => 17,  51 => 15,  48 => 12,  45 => 13,  42 => 12,  39 => 9,  36 => 10,  33 => 4,  30 => 21,);
    }
}
