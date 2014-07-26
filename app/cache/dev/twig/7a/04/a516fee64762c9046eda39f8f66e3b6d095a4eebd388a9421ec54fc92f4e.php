<?php

/* BackendAdminBundle:Modelo:_modelo.html.twig */
class __TwigTemplate_7a04a516fee64762c9046eda39f8f66e3b6d095a4eebd388a9421ec54fc92f4e extends Twig_Template
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
        echo "<div class=\"control-group\">
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nombre"));
        echo "
<div class=\"controls\">
 ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_modelo_name_errorloc' class=\"help-inline error\" >";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
        echo "</div>
</div>
</div>
<div class=\"control-group\">
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nameManufacture"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nombre Fábrica"));
        echo "
<div class=\"controls\">
 ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nameManufacture"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_modelo_nameManufacture_errorloc' class=\"help-inline error\" >";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nameManufacture"), 'errors');
        echo "</div>
</div>
</div>
<div class=\"control-group\">
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "variante"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Variante"));
        echo "
<div class=\"controls\">
 ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "variante"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_modelo_variante_errorloc' class=\"help-inline error\" >";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "variante"), 'errors');
        echo "</div>
</div>
</div>
<div class=\"control-group\">
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "marca"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Marca"));
        echo "
<div class=\"controls\">
 ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "marca"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_modelo_marca_errorloc' class=\"help-inline error\" >";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "marca"), 'errors');
        echo "</div>
</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Modelo:_modelo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 110,  245 => 109,  223 => 105,  194 => 88,  190 => 87,  244 => 104,  226 => 92,  212 => 91,  261 => 112,  225 => 107,  150 => 62,  134 => 56,  118 => 44,  234 => 100,  216 => 104,  202 => 97,  192 => 93,  181 => 84,  167 => 76,  188 => 89,  124 => 47,  114 => 59,  236 => 126,  205 => 97,  191 => 89,  186 => 95,  153 => 64,  137 => 63,  100 => 43,  126 => 54,  113 => 48,  207 => 97,  198 => 95,  195 => 94,  184 => 85,  180 => 85,  172 => 81,  155 => 75,  127 => 56,  178 => 85,  170 => 77,  161 => 75,  146 => 72,  175 => 83,  165 => 76,  84 => 38,  77 => 29,  53 => 15,  23 => 3,  20 => 1,  104 => 39,  81 => 47,  174 => 75,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 42,  90 => 40,  76 => 28,  70 => 23,  65 => 20,  34 => 5,  129 => 64,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 108,  229 => 108,  220 => 99,  214 => 102,  177 => 65,  169 => 60,  140 => 69,  132 => 67,  128 => 60,  107 => 45,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 110,  240 => 127,  238 => 85,  235 => 74,  230 => 103,  227 => 106,  224 => 71,  221 => 99,  219 => 105,  217 => 103,  208 => 90,  204 => 72,  179 => 84,  159 => 69,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 27,  67 => 13,  63 => 19,  59 => 18,  38 => 9,  87 => 39,  201 => 96,  196 => 99,  183 => 82,  171 => 81,  166 => 69,  163 => 78,  158 => 71,  156 => 73,  151 => 63,  142 => 71,  138 => 69,  136 => 69,  121 => 49,  117 => 49,  105 => 35,  91 => 29,  62 => 21,  49 => 14,  28 => 5,  94 => 30,  89 => 36,  85 => 35,  75 => 25,  68 => 24,  56 => 35,  24 => 4,  31 => 5,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 41,  88 => 38,  78 => 34,  46 => 11,  44 => 11,  27 => 4,  79 => 26,  72 => 24,  69 => 40,  47 => 12,  40 => 10,  37 => 5,  22 => 2,  246 => 90,  157 => 65,  145 => 74,  139 => 58,  131 => 66,  123 => 55,  120 => 59,  115 => 43,  111 => 56,  108 => 46,  101 => 33,  98 => 49,  96 => 36,  83 => 30,  74 => 26,  66 => 24,  55 => 17,  52 => 9,  50 => 29,  43 => 11,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 95,  199 => 94,  193 => 91,  189 => 92,  187 => 84,  182 => 85,  176 => 83,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 71,  149 => 75,  147 => 61,  144 => 70,  141 => 59,  133 => 51,  130 => 55,  125 => 64,  122 => 53,  116 => 49,  112 => 48,  109 => 54,  106 => 40,  103 => 43,  99 => 37,  95 => 43,  92 => 35,  86 => 33,  82 => 29,  80 => 30,  73 => 25,  64 => 12,  60 => 20,  57 => 18,  54 => 16,  51 => 15,  48 => 12,  45 => 30,  42 => 12,  39 => 9,  36 => 10,  33 => 4,  30 => 21,);
    }
}
