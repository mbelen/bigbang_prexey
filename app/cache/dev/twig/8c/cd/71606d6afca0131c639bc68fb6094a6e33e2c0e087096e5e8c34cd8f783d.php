<?php

/* BackendUserBundle:Group:_group.html.twig */
class __TwigTemplate_8ccd71606d6afca0131c639bc68fb6094a6e33e2c0e087096e5e8c34cd8f783d extends Twig_Template
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
 <div id='backend_userbundle_group_name_errorloc' class=\"help-inline error\" >";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
        echo "</div>
  
</div>
</div>
    
     
    <div class=\"control-group\">

";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "role"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Rol"));
        echo "
<div class=\"controls\">
 ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "role"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
    <div id='backend_userbundle_group_role_errorloc' class=\"help-inline error\" >";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "role"), 'errors');
        echo "</div>
</div>
</div>
 


  
   


<div class=\"control-group\">

";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "accesos"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Accesos"));
        echo "
<div class=\"controls\">
";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "accesos"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
 <div id='backend_userbundle_group_accesos_errorloc' class=\"help-inline error\" >";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "accesos"), 'errors');
        echo "</div>   
</div>
</div>
 
    
    
      
      
   
     
       
    
     
     
";
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:Group:_group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  23 => 3,  20 => 1,  104 => 42,  81 => 30,  174 => 51,  160 => 49,  152 => 47,  148 => 46,  110 => 38,  97 => 29,  90 => 24,  76 => 14,  70 => 9,  65 => 22,  34 => 5,  129 => 61,  58 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 44,  132 => 42,  128 => 37,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 26,  67 => 15,  63 => 15,  59 => 14,  38 => 11,  87 => 25,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 26,  105 => 35,  91 => 27,  62 => 7,  49 => 19,  28 => 5,  94 => 28,  89 => 20,  85 => 31,  75 => 27,  68 => 30,  56 => 5,  24 => 4,  31 => 5,  26 => 2,  25 => 1,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 34,  46 => 7,  44 => 7,  27 => 10,  79 => 15,  72 => 16,  69 => 25,  47 => 42,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 31,  96 => 36,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 9,  50 => 53,  43 => 14,  41 => 9,  35 => 3,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 70,  144 => 69,  141 => 48,  133 => 62,  130 => 41,  125 => 36,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 26,  92 => 29,  86 => 26,  82 => 22,  80 => 19,  73 => 32,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 16,  45 => 14,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
