<?php

/* BackendUserBundle:User:profile.html.twig */
class __TwigTemplate_19ea15247f91b0642152ec558f7e147fc460280c3f9941060e44edb0f87fc43c extends Twig_Template
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "  
      <div class=\"well\">
    <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Perfil</a></li>
    <li><a href=\"#profile\" data-toggle=\"tab\">Contraseña</a></li>
    </ul>
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active in\" id=\"home\">
    <form class=\"form-horizontal\" id=\"tab\" name=\"tab\" method=\"post\" novalidate  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " action=\"\" >
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        
    <input type=\"hidden\" name=\"action\" value=\"update\" />
    
    <div class=\"control-group\">

";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nombre"));
        echo "
<div class=\"controls\">
 ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_userbundle_usertype_name_errorloc' class=\"help-inline error\" >";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
        echo "</div>
  
</div>
</div>
    
    
   <div class=\"control-group\">

";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Apellido"));
        echo "
<div class=\"controls\">
 ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastname"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
    <div id='backend_userbundle_usertype_lastname_errorloc' class=\"help-inline error\" >";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastname"), 'errors');
        echo "</div>
</div>
</div>
 
    
      <div class=\"control-group\">

";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
<div class=\"controls\">
";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
 <div id='backend_userbundle_usertype_email_errorloc' class=\"help-inline error\" >";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "</div>   
</div>
</div>
    
    
        
    <div class=\"control-group\">

";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Username"));
        echo "
<div class=\"controls\">
";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
  <div id='backend_userbundle_usertype_username_errorloc' class=\"help-inline error\" >";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
        echo "</div>  
</div>
</div>
    
    
    
    
    
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    
    
        <div class=\"control-group\">
<!-- Button -->
<div class=\"controls\">
<button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-ok icon-white\"></i>Actualizar</button>
</div>
</div>
    
    </form>
    </div>
    <div class=\"tab-pane fade\" id=\"profile\">
    <form id=\"tab2\" class=\"form-horizontal\" name=\"tab2\" method=\"post\" novalidate  ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " action=\"\" >
    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "pass"), 'errors');
        echo "
     
    <input type=\"hidden\" name=\"action\" value=\"change\" />
    
    <div class=\"control-group\">

";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pass"), "password"), "first"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nueva Contraseña"));
        echo "
<div class=\"controls\">
";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pass"), "password"), "first"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
    <div id='backend_userbundle_usertype_password_firt_errorloc' class=\"help-inline error\" >";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pass"), "password"), "first"), 'errors');
        echo "</div>
</div>
</div>
      
   
     <div class=\"control-group\">

";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pass"), "password"), "second"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Repetir Contraseña"));
        echo "
<div class=\"controls\">
";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pass"), "password"), "second"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
  <div id='backend_userbundle_usertype_password_second_errorloc' class=\"help-inline error\" >";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pass"), "password"), "second"), 'errors');
        echo "</div>   
</div>
</div>
    
    
    
    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "pass"), 'rest');
        echo "
    
    <div class=\"control-group\">
<!-- Button -->
<div class=\"controls\">
<button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-ok icon-white\"></i>Cambiar</button>
</div>
</div>
    
    
    </form>
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
        // line 126
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cc01a9f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc01a9f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cc01a9f_validate_profile_1.js");
            // line 127
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "cc01a9f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc01a9f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cc01a9f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:User:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 126,  205 => 105,  191 => 97,  186 => 95,  153 => 77,  137 => 64,  100 => 42,  126 => 56,  113 => 54,  207 => 97,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  127 => 59,  178 => 125,  170 => 81,  161 => 118,  146 => 69,  175 => 79,  165 => 79,  84 => 22,  77 => 20,  53 => 18,  23 => 3,  20 => 1,  104 => 42,  81 => 34,  174 => 51,  160 => 77,  152 => 47,  148 => 46,  110 => 50,  97 => 29,  90 => 24,  76 => 37,  70 => 9,  65 => 22,  34 => 5,  129 => 61,  58 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 71,  132 => 61,  128 => 37,  107 => 48,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 127,  238 => 85,  235 => 74,  230 => 124,  227 => 123,  224 => 71,  221 => 99,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 51,  102 => 46,  71 => 27,  67 => 26,  63 => 15,  59 => 26,  38 => 11,  87 => 25,  201 => 92,  196 => 99,  183 => 82,  171 => 86,  166 => 84,  163 => 62,  158 => 67,  156 => 48,  151 => 71,  142 => 59,  138 => 54,  136 => 56,  121 => 54,  117 => 26,  105 => 44,  91 => 27,  62 => 21,  49 => 14,  28 => 3,  94 => 42,  89 => 20,  85 => 33,  75 => 29,  68 => 30,  56 => 5,  24 => 4,  31 => 4,  26 => 2,  25 => 1,  21 => 2,  19 => 1,  93 => 40,  88 => 38,  78 => 34,  46 => 12,  44 => 11,  27 => 10,  79 => 15,  72 => 33,  69 => 28,  47 => 15,  40 => 10,  37 => 7,  22 => 2,  246 => 90,  157 => 78,  145 => 46,  139 => 45,  131 => 52,  123 => 53,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 47,  96 => 36,  83 => 36,  74 => 30,  66 => 24,  55 => 18,  52 => 16,  50 => 53,  43 => 12,  41 => 9,  35 => 3,  32 => 3,  29 => 2,  209 => 82,  203 => 96,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 88,  173 => 124,  168 => 72,  164 => 59,  162 => 75,  154 => 58,  149 => 51,  147 => 61,  144 => 69,  141 => 67,  133 => 62,  130 => 68,  125 => 36,  122 => 57,  116 => 52,  112 => 50,  109 => 34,  106 => 49,  103 => 32,  99 => 41,  95 => 40,  92 => 43,  86 => 26,  82 => 22,  80 => 31,  73 => 36,  64 => 21,  60 => 20,  57 => 18,  54 => 10,  51 => 15,  48 => 16,  45 => 14,  42 => 11,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
