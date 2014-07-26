<?php

/* BackendAdminBundle:Cliente:index.html.twig */
class __TwigTemplate_326000b976ee82a8bc9227a3b8367652ae0492e0189eeb2378b4298295a95ce1 extends Twig_Template
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
    
        <h4>Listado de Clientes </h4>

<div class=\"row-fluid\">
  
  
  <div class=\"span2\">  ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADDCLIENTE")) {
            echo " <button class=\"btn btn-primary\" type=\"button\" id=\"new_button\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("cliente_new");
            echo "\" >Nuevo Cliente</button> ";
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
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\" ><i class=\"icon-search\"></i></button>
      </div>
      </form>
    
    
    
    </div>
    
     <div class=\"span2\">
          ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_VIEWCLIENTE")) {
            echo " <button class=\"btn btn-primary\" type=\"button\" id=\"exportar_button\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("cliente_exportar");
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
        // line 40
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "u.name"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Nombre", "u.name");
        echo "</th>
    <th>Código Interno</th>
    <th>Dirección</th>
    <th>Email</th>
    <th>Teléfono</th>
    <th>CUIT </th>
    <th>DNI</th>
    <th>Observaciones</th>
    <th style=\"width: 36px;\">Acciones</th>
    </tr>
    </thead>
    <tbody>
     ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 53
            echo "   
    
     <tr>
                
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "name")), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "codigo"), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "direccion"), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "celular"), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "cuit"), "html", null, true);
            echo " </td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "dni"), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "observacion"), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 66
            if ($this->env->getExtension('security')->isGranted("ROLE_MODCLIENTE")) {
                // line 67
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute($this->getContext($context, "cliente"), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i></a>
                ";
            }
            // line 69
            echo "                 ";
            if ($this->env->getExtension('security')->isGranted("ROLE_DELCLIENTE")) {
                // line 70
                echo "                
                <a href=\"#myModal\" role=\"button\" class=\"confirm-delete\" data-toggle=\"modal\" data-id=";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliente"), "id"), "html", null, true);
                echo " ><i class=\"icon-remove\"></i></a>
                
                 ";
            }
            // line 74
            echo "                </td>
    </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "   
    </tbody>
    </table>
    </div>
    
    <div class=\"pagination\">
     ";
        // line 84
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "
    
    </div>
    
    <div class=\"modal small hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
      <h3 id=\"myModalLabel\">Confirmar Borrado</h3>
     </div>
     <div class=\"modal-body\">
       <p class=\"error-text\">Esta seguro que desea borrar los datos del cliente?</p>
     </div>
     <div class=\"modal-footer\">
      <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
      <button class=\"btn btn-danger \" data-id=\"0\"  data-url=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("cliente_delete", array("id" => "id"));
        echo "\">Borrar</button>
     </div>
    </div>
    
    
    <form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>
    
    
    ";
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        // line 112
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 
";
        // line 114
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c34c3ec_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c34c3ec_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c34c3ec_search_index_1.js");
            // line 115
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
        // line 117
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "22315e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_22315e7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/22315e7_exportar_entidad_1.js");
            // line 118
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
        // line 119
        echo "      
  
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 119,  260 => 118,  256 => 117,  242 => 115,  238 => 114,  232 => 112,  229 => 111,  218 => 104,  214 => 103,  206 => 98,  189 => 84,  181 => 78,  172 => 74,  166 => 71,  163 => 70,  160 => 69,  154 => 67,  152 => 66,  147 => 64,  143 => 63,  139 => 62,  135 => 61,  131 => 60,  127 => 59,  123 => 58,  119 => 57,  113 => 53,  109 => 52,  90 => 40,  76 => 28,  70 => 27,  58 => 18,  54 => 17,  41 => 11,  32 => 4,  29 => 3,);
    }
}
