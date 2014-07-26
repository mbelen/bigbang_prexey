<?php

/* BackendUserBundle:Security:login.html.twig */
class __TwigTemplate_67324e3852297818be1c14ace308eab5b9070e604515614a5116af419f6e4767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "     <div class=\"\" id=\"loginModal\">
    
    <div class=\"modal-body\">
    <div class=\"well\">
    <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a href=\"#login\" data-toggle=\"tab\">Ingresar</a></li>
    <li><a href=\"#create\" data-toggle=\"tab\">Registrarse</a></li>
    </ul>
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active in\" id=\"login\">
    <form class=\"form-horizontal\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\" id=\"formLogin\" name=\"formLogin\">
    <fieldset>
    <div id=\"legend\">
    <legend class=\"\">Login</legend>
    </div>
     
    <div class=\"control-group\">
    <!-- Username -->
    <label class=\"control-label\" for=\"username\">Usuario</label>
    <div class=\"controls\">
    <input type=\"text\" id=\"formUsername\" name=\"_username\" placeholder=\"\" class=\"input-xlarge\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\"/>
    <div id='formLogin__username_errorloc' class=\"help-inline error\" ></div>
    </div>
    </div>
    <div class=\"control-group\">
    <!-- Password-->
    <label class=\"control-label\" for=\"password\">Contraseña</label>
    <div class=\"controls\">
    <input type=\"password\" id=\"formPassword\" name=\"_password\" placeholder=\"\" class=\"input-xlarge\">
    <div id='formLogin__password_errorloc' class=\"help-inline error\" ></div>
    <input type=\"hidden\" name=\"_target_path\" value=\"home\" />
    <label class=\"checkbox\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"> Recordarme
             |
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("forgot_pass");
        echo "\" class=\"btn btn-link\">Recuperar contraseña </a>
        </label>
    </div>
    </div>
    <div class=\"control-group\">
    <!-- Button -->
    <div class=\"controls\">
    <button class=\"btn btn-success\" type=\"submit\" id=\"btn_login\" >Login</button>
    </div>
    </div>
    </fieldset>
    </form>
    </div>
    <div class=\"tab-pane fade\" id=\"create\">
    <form id=\"formRegister\" name=\"formRegister\" class=\"form-horizontal\" method=\"post\" action=\"#\">
     
    <div class=\"control-group\">
      <label class=\"control-label required\" for=\"inputNombre\">Nombre</label>
      <div class=\"controls\">
      <input type=\"text\" id=\"inputNombre\" placeholder=\"\" name=\"name\" value=\"\" />
      
      <div id='formRegister_name_errorloc' class=\"help-inline error\" ></div>
      </div>
    </div>
    
    <div class=\"control-group\">
      <label class=\"control-label required\" for=\"inputApellido\">Apellido</label>
      <div class=\"controls\">
      <input type=\"text\" id=\"inputApellido\" placeholder=\"\" name=\"lastname\" value=\"\" />
      <div id='formRegister_lastname_errorloc' class=\"help-inline error\" ></div>
      </div>
    </div>
    
    <div class=\"control-group\">
      <label class=\"control-label required\" for=\"inputEmail\">Email</label>
      <div class=\"controls\">
      <input type=\"text\" id=\"inputEmail\" placeholder=\"\" name=\"email\" value=\"\" />
      <div id='formRegister_email_errorloc' class=\"help-inline error\" ></div>
      </div>
    </div>
    
   
   <div class=\"control-group\">
      <label class=\"control-label required\" for=\"inputUsuario\">Usuario</label>
      <div class=\"controls\">
      <input type=\"text\" id=\"inputUsuario\" name=\"username\" value=\"\" placeholder=\"\" />
      <div id='formRegister_username_errorloc' class=\"help-inline error\" ></div>
      </div>
    </div>
    
    <div class=\"control-group\">
      <label class=\"control-label required\" for=\"inputPass\">Contraseña</label>
      <div class=\"controls\">
      <input type=\"password\" id=\"inputPass\" name=\"password\" placeholder=\"\" value=\"\" />
      <div id='formRegister_password_errorloc' class=\"help-inline error\" ></div>
      </div>
    </div>
   
    <div class=\"control-group\">
      <label class=\"control-label required\" for=\"inputConfirmPass\">Repetir Contraseña</label>
      <div class=\"controls\">
      <input type=\"password\" id=\"inputConfirmPass\" name=\"confirmPassword\" placeholder=\"\" value=\"\" />
      <div id='formRegister_confirmPassword_errorloc' class=\"help-inline error\" ></div>
      </div>
    </div>
    
   
    
      <div class=\"controls\">
    <button type=\"button\" id=\"btn_create_account\" class=\"btn btn-primary\" data-url=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("register_user");
        echo "\" >Crear</button>
    </div>
    
    </form>
    
    </div>
    </div>
    </div>
    </div>
     <div class=\"modal small hide \" style=\"width: 80px; text-align: center;\" id=\"myModalLoading\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"false\">
     
     <div class=\"modal-body\">
       <p class=\"error-text\"> <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/loading.gif"), "html", null, true);
        echo "\"  width=\"32\" height=\"32\" /></p>
     </div>
    
    </div>
";
    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        // line 124
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 ";
        // line 125
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "71873f3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_71873f3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/71873f3_login_user_1.js");
            // line 126
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "71873f3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_71873f3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/71873f3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 128
        echo "
";
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 125,  170 => 123,  161 => 118,  146 => 106,  175 => 79,  165 => 76,  84 => 22,  77 => 20,  53 => 18,  23 => 3,  20 => 1,  104 => 42,  81 => 30,  174 => 51,  160 => 49,  152 => 47,  148 => 46,  110 => 36,  97 => 29,  90 => 24,  76 => 14,  70 => 9,  65 => 22,  34 => 5,  129 => 61,  58 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 63,  132 => 42,  128 => 37,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 26,  67 => 12,  63 => 15,  59 => 14,  38 => 11,  87 => 25,  201 => 92,  196 => 128,  183 => 82,  171 => 78,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 68,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 26,  105 => 35,  91 => 27,  62 => 7,  49 => 19,  28 => 5,  94 => 28,  89 => 20,  85 => 31,  75 => 27,  68 => 30,  56 => 5,  24 => 4,  31 => 5,  26 => 2,  25 => 1,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 34,  46 => 7,  44 => 13,  27 => 10,  79 => 15,  72 => 16,  69 => 25,  47 => 42,  40 => 4,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 31,  96 => 36,  83 => 25,  74 => 37,  66 => 15,  55 => 15,  52 => 9,  50 => 53,  43 => 14,  41 => 9,  35 => 3,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 64,  173 => 124,  168 => 72,  164 => 59,  162 => 75,  154 => 58,  149 => 51,  147 => 67,  144 => 69,  141 => 48,  133 => 62,  130 => 41,  125 => 36,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 35,  103 => 32,  99 => 31,  95 => 26,  92 => 27,  86 => 26,  82 => 22,  80 => 19,  73 => 32,  64 => 11,  60 => 6,  57 => 23,  54 => 10,  51 => 14,  48 => 16,  45 => 14,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
