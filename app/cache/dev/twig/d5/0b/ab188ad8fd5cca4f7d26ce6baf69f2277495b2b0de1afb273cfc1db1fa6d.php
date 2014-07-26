<?php

/* BackendUserBundle:User:index.html.twig */
class __TwigTemplate_d50bab188ad8fd5cca4f7d26ce6baf69f2277495b2b0de1afb273cfc1db1fa6d extends Twig_Template
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
        echo "<h4>Listado de Usuarios </h4>

<div class=\"row-fluid\">
  
  
  <div class=\"span2\">   <button class=\"btn btn-primary\" type=\"button\" id=\"new_button\" data-url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" >Nuevo Usuario</button> </div>
  
    <div class=\"span3\">
     
    <form id=\"custom-search-form\" class=\"form-search form-horizontal pull-right\" action=\"#\">
      <div class=\"input-append span12\">
      <input type=\"text\" class=\"search-query\" id=\"search-query\" placeholder=\"Buscar\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "search"), "html", null, true);
        echo "\">
      <button type=\"button\" id=\"search-button\" class=\"btn\" data-url=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" ><i class=\"icon-search\"></i></button>
      </div>
      </form>
    
    
    
    </div>
    
  
    
 </div>
    
    <div class=\"well\">
    <table class=\"table\">
    <thead>
    <tr>
    
    <th ";
        // line 33
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "u.Username"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Username", "u.username");
        echo "</th>
    <th>Email</th>
    <th>Tipo Usuario</th>
    <th>Estado</th>
    
    <th style=\"width: 36px;\">Acciones</th>
    </tr>
    </thead>
    <tbody>
     ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "   
    
     <tr>
                
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "user"), "groups"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "                     ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name"), "html", null, true);
                echo "<br/>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo " </td>
                
                <td>   ";
            // line 53
            if (($this->getAttribute($this->getContext($context, "user"), "isActive") == 1)) {
                echo " <span class=\"label label-success\">Activo</span> ";
            } else {
                echo " <span class=\"label label-important\">Inhabilitado</span>  ";
            }
            echo " </td>
                <td>
                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i></a>
                <a href=\"#myModal\" role=\"button\" class=\"confirm-delete\" data-toggle=\"modal\" data-id=";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
            echo " ><i class=\"icon-remove\"></i></a>
                </td>
    </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "   
    </tbody>
    </table>
    </div>
    
    <div class=\"pagination\">
     ";
        // line 67
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "
    
    </div>
    
    <div class=\"modal small hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
      <h3 id=\"myModalLabel\">Confirmar Borrado</h3>
     </div>
     <div class=\"modal-body\">
       <p class=\"error-text\">Esta seguro que desea borrar el usuario?</p>
     </div>
     <div class=\"modal-footer\">
      <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
      <button class=\"btn btn-danger \" data-id=\"0\"  data-url=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("user_delete", array("id" => "id"));
        echo "\">Borrar</button>
     </div>
    </div>
    
    
    <form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>
    
    
    ";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   ";
        // line 96
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7062b2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7062b2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e7062b2_user_index_1.js");
            // line 97
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "e7062b2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7062b2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e7062b2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 99
        echo "
   
  
";
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 99,  207 => 97,  203 => 96,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  147 => 61,  136 => 56,  132 => 55,  123 => 53,  119 => 51,  110 => 50,  106 => 49,  102 => 48,  98 => 47,  92 => 43,  88 => 42,  72 => 33,  52 => 16,  48 => 15,  39 => 9,  32 => 4,  29 => 3,);
    }
}
