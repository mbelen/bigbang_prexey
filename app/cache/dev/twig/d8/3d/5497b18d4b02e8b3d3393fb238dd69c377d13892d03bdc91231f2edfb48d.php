<?php

/* BackendUserBundle:Seteo:index.html.twig */
class __TwigTemplate_d83d5497b18d4b02e8b3d3393fb238dd69c377d13892d03bdc91231f2edfb48d extends Twig_Template
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
    <div class=\"btn-toolbar\">
    
    <button class=\"btn btn-primary\" type=\"button\" id=\"new_button\" data-url=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("seteo_new");
        echo "\" >Nuevo Parámetro</button>
    
    </div>
    <div class=\"well\">
    <table class=\"table\">
    <thead>
    <tr>
    
    <th ";
        // line 15
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "u.name"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Nombre", "u.name");
        echo "</th>
    <th>Valor</th>
    <th style=\"width: 36px;\">Acciones</th>
    </tr>
    </thead>
    <tbody>
     ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["seteo"]) {
            // line 22
            echo "   
    
     <tr>
                
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "seteo"), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "seteo"), "value"), "html", null, true);
            echo "</td>
                
                <td>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seteo_edit", array("id" => $this->getAttribute($this->getContext($context, "seteo"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i></a>
                <a href=\"#myModal\" role=\"button\" class=\"confirm-delete\" data-toggle=\"modal\" data-id=";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "seteo"), "id"), "html", null, true);
            echo " ><i class=\"icon-remove\"></i></a>
                </td>
    </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seteo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "   
    </tbody>
    </table>
    </div>
    
    <div class=\"pagination\">
     ";
        // line 42
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "
    
    </div>
    
    <div class=\"modal small hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
      <h3 id=\"myModalLabel\">Confirmar Borrado</h3>
     </div>
     <div class=\"modal-body\">
       <p class=\"error-text\">Esta seguro que desea borrar el parámetro seleccionado?</p>
     </div>
     <div class=\"modal-footer\">
      <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
      <button class=\"btn btn-danger \" data-id=\"0\"  data-url=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("seteo_delete", array("id" => "id"));
        echo "\">Borrar</button>
     </div>
    </div>
    
    
    <form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>
    
    
    ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   
  ";
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:Seteo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 125,  170 => 123,  161 => 118,  146 => 106,  175 => 79,  165 => 76,  84 => 22,  77 => 20,  53 => 18,  23 => 3,  20 => 1,  104 => 42,  81 => 30,  174 => 51,  160 => 49,  152 => 47,  148 => 46,  110 => 36,  97 => 29,  90 => 24,  76 => 14,  70 => 9,  65 => 22,  34 => 5,  129 => 61,  58 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 63,  132 => 42,  128 => 37,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 26,  67 => 12,  63 => 15,  59 => 14,  38 => 11,  87 => 25,  201 => 92,  196 => 128,  183 => 82,  171 => 78,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 68,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 26,  105 => 35,  91 => 27,  62 => 7,  49 => 19,  28 => 5,  94 => 44,  89 => 20,  85 => 31,  75 => 27,  68 => 30,  56 => 5,  24 => 4,  31 => 5,  26 => 2,  25 => 1,  21 => 2,  19 => 1,  93 => 28,  88 => 42,  78 => 34,  46 => 7,  44 => 13,  27 => 10,  79 => 15,  72 => 16,  69 => 25,  47 => 42,  40 => 12,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 45,  96 => 36,  83 => 25,  74 => 37,  66 => 26,  55 => 15,  52 => 9,  50 => 53,  43 => 14,  41 => 9,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 64,  173 => 124,  168 => 72,  164 => 59,  162 => 75,  154 => 58,  149 => 51,  147 => 70,  144 => 69,  141 => 48,  133 => 62,  130 => 41,  125 => 36,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 35,  103 => 32,  99 => 31,  95 => 26,  92 => 27,  86 => 26,  82 => 22,  80 => 19,  73 => 32,  64 => 11,  60 => 6,  57 => 20,  54 => 10,  51 => 17,  48 => 15,  45 => 14,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
