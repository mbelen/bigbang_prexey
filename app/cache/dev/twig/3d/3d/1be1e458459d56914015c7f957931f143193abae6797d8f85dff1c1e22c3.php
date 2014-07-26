<?php

/* ::menu.html.twig */
class __TwigTemplate_3d3d1be1e458459d56914015c7f957931f143193abae6797d8f85dff1c1e22c3 extends Twig_Template
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
        echo "<div class=\"nav-collapse collapse\">
                ";
        // line 2
        if ((!$this->env->getExtension('security')->isGranted("ROLE_VISITOR"))) {
            // line 3
            echo "                
                <ul class=\"nav\">
                    ";
            // line 5
            if ($this->env->getExtension('security')->isGranted("ROLE_VIEWUSER")) {
                // line 6
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("user");
                echo "\">Usuarios</a></li>
                    ";
            }
            // line 8
            echo "                    
                    ";
            // line 9
            if (((($this->env->getExtension('security')->isGranted("ROLE_SETEO") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_VIEWPROVINCIA")) || $this->env->getExtension('security')->isGranted("ROLE_VIEWZONA"))) {
                // line 12
                echo "                    <li class=\"dropdown\">           <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Configuración<b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                        ";
                // line 14
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 15
                    echo "                            <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("group");
                    echo "\">Accesos</a></li>
\t\t\t\t\t\t";
                }
                // line 16
                echo "                        
                        ";
                // line 17
                if ($this->env->getExtension('security')->isGranted("ROLE_SETEO")) {
                    // line 18
                    echo "                            <li class=\"divider\"></li>
                            <li><a href=\"";
                    // line 19
                    echo $this->env->getExtension('routing')->getPath("seteo");
                    echo "\">Seteos</a></li>
                        ";
                }
                // line 21
                echo "                        ";
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    echo "                        
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
                    // line 23
                    echo $this->env->getExtension('routing')->getPath("tipoDeposito");
                    echo "\">Depositos</a></li>
                        ";
                }
                // line 24
                echo "                       
                        ";
                // line 25
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWPROVINCIA")) {
                    // line 26
                    echo "                            <li class=\"divider\"></li>
                            <li><a href=\"";
                    // line 27
                    echo $this->env->getExtension('routing')->getPath("provincia");
                    echo "\">Provincias</a></li>
                        ";
                }
                // line 29
                echo "                        ";
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWZONA")) {
                    // line 30
                    echo "                            <li class=\"divider\"></li>
                            <li><a href=\"";
                    // line 31
                    echo $this->env->getExtension('routing')->getPath("zona");
                    echo "\">Zonas</a></li>
                        ";
                }
                // line 33
                echo "                        ";
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 34
                    echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
                            <li><a href=\"";
                    // line 35
                    echo $this->env->getExtension('routing')->getPath("tipo_ordeningreso");
                    echo "\">Tipo de ordenes de Ingreso</a></li>
\t\t\t\t\t\t";
                }
                // line 36
                echo "                        
                      </ul>
                    </li>
                    ";
            }
            // line 40
            echo "                    
                    ";
            // line 41
            if ((((((($this->env->getExtension('security')->isGranted("ROLE_VIEWCLIENTE") || $this->env->getExtension('security')->isGranted("ROLE_VIEWSUCURSAL")) || $this->env->getExtension('security')->isGranted("ROLE_VIEWMARCA")) || $this->env->getExtension('security')->isGranted("ROLE_VIEWMODELO")) || $this->env->getExtension('security')->isGranted("ROLE_VIEWSINTOMA")) || $this->env->getExtension('security')->isGranted("ROLE_VIEWTIPOARTICULO")) || $this->env->getExtension('security')->isGranted("ROLE_VIEWARTICULO"))) {
                // line 46
                echo "                    
                    <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Entidades<b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\" >
                       ";
                // line 50
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWCLIENTE")) {
                    // line 51
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("cliente");
                    echo "\"> Clientes</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 54
                echo "                       ";
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWSUCURSAL")) {
                    // line 55
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("sucursal");
                    echo "\"> Sucursales</a> </li>
                       <li class=\"divider\"></li>
                       <li> <a href=\"";
                    // line 57
                    echo $this->env->getExtension('routing')->getPath("areaTrabajo");
                    echo "\"> Areas de Trabajo</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 60
                echo "                       ";
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWMARCA")) {
                    // line 61
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("marca");
                    echo "\"> Marcas</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 64
                echo "                       ";
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWMODELO")) {
                    // line 65
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("modelo");
                    echo "\"> Modelos</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 67
                echo "                     
                       ";
                // line 68
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWSINTOMA")) {
                    // line 69
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("sintoma");
                    echo "\"> Sintomas</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 72
                echo "                       ";
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWTIPOARTICULO")) {
                    // line 73
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("tipo_articulo");
                    echo "\"> Tipo Artículos</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 76
                echo "                       ";
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWARTICULO")) {
                    // line 77
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("articulo");
                    echo "\"> Artículos</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 80
                echo "                      </ul>                      
                    </li> 
                    <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Ordenes<b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\" >
                       ";
                // line 85
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWCLIENTE")) {
                    // line 86
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("cliente");
                    echo "\"> Ordenes de Ingreso</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 89
                echo "                       ";
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWCLIENTE")) {
                    // line 90
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("cliente");
                    echo "\">Movimientos</a> </li>
                       <li class=\"divider\"></li>
                       ";
                }
                // line 93
                echo "                       ";
                if ($this->env->getExtension('security')->isGranted("ROLE_VIEWCLIENTE")) {
                    // line 94
                    echo "                       <li> <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("cliente");
                    echo "\"> Ordenes de Egreso</a> </li>
                       ";
                }
                // line 96
                echo "                      </ul>
                      ";
            }
            // line 98
            echo "                    </li>  
                </ul>
              ";
        }
        // line 100
        echo "  
                
             ";
        // line 102
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 103
            echo "                
                <ul class=\"nav pull-right\">
                   
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "  <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("profile");
            echo "\">Perfil</a></li>
                            
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Salir</a></li>
                        </ul>
                    </li>
                </ul>
                ";
        }
        // line 116
        echo "    
              
             
            </div><!--/.nav-collapse -->
";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 116,  272 => 112,  266 => 109,  261 => 107,  255 => 103,  253 => 102,  249 => 100,  244 => 98,  240 => 96,  234 => 94,  231 => 93,  224 => 90,  214 => 86,  212 => 85,  205 => 80,  188 => 73,  185 => 72,  178 => 69,  176 => 68,  173 => 67,  166 => 65,  163 => 64,  153 => 60,  141 => 55,  138 => 54,  131 => 51,  129 => 50,  121 => 41,  118 => 40,  112 => 36,  104 => 34,  101 => 33,  96 => 31,  93 => 30,  85 => 27,  82 => 26,  80 => 25,  77 => 24,  66 => 21,  61 => 19,  58 => 18,  53 => 16,  41 => 12,  30 => 6,  24 => 3,  22 => 2,  19 => 1,  174 => 51,  160 => 49,  156 => 61,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  135 => 43,  128 => 37,  125 => 36,  120 => 27,  117 => 26,  107 => 35,  105 => 35,  97 => 29,  95 => 26,  90 => 29,  79 => 15,  76 => 14,  70 => 9,  65 => 8,  62 => 7,  56 => 17,  50 => 53,  47 => 15,  45 => 14,  38 => 11,  36 => 8,  25 => 1,  34 => 5,  31 => 5,  28 => 5,  221 => 89,  207 => 97,  203 => 96,  198 => 77,  195 => 76,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  147 => 57,  136 => 56,  132 => 42,  123 => 46,  119 => 51,  110 => 38,  106 => 49,  102 => 48,  98 => 47,  92 => 43,  88 => 42,  72 => 23,  52 => 16,  48 => 15,  39 => 9,  32 => 4,  29 => 3,);
    }
}
