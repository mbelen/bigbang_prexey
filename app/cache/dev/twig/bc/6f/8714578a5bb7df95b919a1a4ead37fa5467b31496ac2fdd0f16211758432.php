<?php

/* BackendUserBundle:User:_user.html.twig */
class __TwigTemplate_bc6f8714578a5bb7df95b919a1a4ead37fa5467b31496ac2fdd0f16211758432 extends Twig_Template
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
        echo " <div class=\"control-group\">

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nombre"));
        echo "
<div class=\"controls\">
 ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_userbundle_usertype_name_errorloc' class=\"help-inline error\" >";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
        echo "</div>
  
</div>
</div>
    
     
    <div class=\"control-group\">

";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Apellido"));
        echo "
<div class=\"controls\">
 ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastname"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
    <div id='backend_userbundle_usertype_lastname_errorloc' class=\"help-inline error\" >";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastname"), 'errors');
        echo "</div>
</div>
</div>
 
  
   
        <div class=\"control-group\">

";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
<div class=\"controls\">
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
 <div id='backend_userbundle_usertype_email_errorloc' class=\"help-inline error\" >";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "</div>   
</div>
</div>
 
    <div class=\"control-group\">

";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Username"));
        echo "
<div class=\"controls\">
";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
  <div id='backend_userbundle_usertype_username_errorloc' class=\"help-inline error\" >";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
        echo "</div>  
</div>
</div>
    
      <div class=\"control-group\">

";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "first"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Contraseña"));
        echo "
<div class=\"controls\">
";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "first"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
    <div id='backend_userbundle_usertype_password_firt_errorloc' class=\"help-inline error\" >";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "first"), 'errors');
        echo "</div>
</div>
</div>
      
   
     <div class=\"control-group\">

";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "second"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Repetir Contraseña"));
        echo "
<div class=\"controls\">
";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "second"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
  <div id='backend_userbundle_usertype_password_second_errorloc' class=\"help-inline error\" >";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "second"), 'errors');
        echo "</div>   
</div>
</div>
   
       <div class=\"control-group\">

";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "groups"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Grupo"));
        echo "
<div class=\"controls\">
";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "groups"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
  <div id='backend_userbundle_usertype_groups_errorloc' class=\"help-inline error\" >";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "groups"), 'errors');
        echo "</div>  
</div>
</div>  
     
 <div class=\"control-group\">

";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "is_active"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Activo"));
        echo "
<div class=\"controls\">
  ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "is_active"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
   <div id='backend_userbundle_usertype_is_active_errorloc' class=\"help-inline error\" >";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "is_active"), 'errors');
        echo "</div> 
</div>
</div> 
";
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:User:_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 97,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  127 => 59,  178 => 125,  170 => 81,  161 => 118,  146 => 69,  175 => 79,  165 => 79,  84 => 22,  77 => 20,  53 => 18,  23 => 3,  20 => 1,  104 => 42,  81 => 30,  174 => 51,  160 => 77,  152 => 47,  148 => 46,  110 => 50,  97 => 29,  90 => 24,  76 => 14,  70 => 9,  65 => 22,  34 => 5,  129 => 61,  58 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 71,  132 => 61,  128 => 37,  107 => 48,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 99,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 51,  102 => 46,  71 => 27,  67 => 12,  63 => 15,  59 => 20,  38 => 11,  87 => 25,  201 => 92,  196 => 128,  183 => 82,  171 => 78,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 71,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 26,  105 => 55,  91 => 27,  62 => 21,  49 => 14,  28 => 5,  94 => 42,  89 => 20,  85 => 39,  75 => 28,  68 => 30,  56 => 5,  24 => 4,  31 => 8,  26 => 2,  25 => 1,  21 => 2,  19 => 1,  93 => 40,  88 => 38,  78 => 34,  46 => 7,  44 => 11,  27 => 10,  79 => 15,  72 => 33,  69 => 28,  47 => 15,  40 => 10,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 53,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 47,  96 => 36,  83 => 36,  74 => 30,  66 => 24,  55 => 15,  52 => 16,  50 => 53,  43 => 14,  41 => 9,  35 => 3,  32 => 6,  29 => 3,  209 => 82,  203 => 96,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 64,  173 => 124,  168 => 72,  164 => 59,  162 => 75,  154 => 58,  149 => 51,  147 => 61,  144 => 69,  141 => 67,  133 => 62,  130 => 68,  125 => 36,  122 => 57,  116 => 60,  112 => 50,  109 => 34,  106 => 49,  103 => 32,  99 => 31,  95 => 26,  92 => 43,  86 => 26,  82 => 22,  80 => 19,  73 => 32,  64 => 26,  60 => 6,  57 => 18,  54 => 10,  51 => 15,  48 => 16,  45 => 14,  42 => 12,  39 => 9,  36 => 10,  33 => 4,  30 => 7,);
    }
}
