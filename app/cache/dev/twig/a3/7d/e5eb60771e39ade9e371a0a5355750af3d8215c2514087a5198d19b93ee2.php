<?php

/* BackendUserBundle:User:forgot.html.twig */
class __TwigTemplate_a37de5eb60771e39ade9e371a0a5355750af3d8215c2514087a5198d19b93ee2 extends Twig_Template
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

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "

<form class=\"form-horizontal\" action='' method=\"POST\" name=\"formForgot\" id=\"formForgot\">
  <fieldset>
    <div id=\"legend\">
      <legend class=\"\">Cambiar Contraseña</legend>
    </div>
    <p>Ingrese su Usuario o Email para poder cambiar su contraseña. </p>
    <div class=\"control-group\">
   
      <label class=\"control-label\"  for=\"username\">Email / Username</label>
      <div class=\"controls\">
        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"\" class=\"input-xlarge\">
        <div id='formForgot_email_errorloc' class=\"help-inline error\" ></div>
      </div>
    </div>


    <div class=\"control-group\">
      <!-- Button -->
      <div class=\"controls\">
        <button id=\"btn_forgot\" type=\"button\" class=\"btn btn-success\" data-url=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("forgot_pass");
        echo "\">Enviar</button>  
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"btn btn-link\">Ir a Login del sitio</a>
      </div>
    </div>
  </fieldset>
</form>




";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4b97b4d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b97b4d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4b97b4d_forgot_pass_1.js");
            // line 39
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "4b97b4d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b97b4d") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4b97b4d.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:User:forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 97,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  127 => 59,  178 => 125,  170 => 81,  161 => 118,  146 => 69,  175 => 79,  165 => 79,  84 => 22,  77 => 20,  53 => 18,  23 => 3,  20 => 1,  104 => 42,  81 => 38,  174 => 51,  160 => 77,  152 => 47,  148 => 46,  110 => 50,  97 => 29,  90 => 24,  76 => 37,  70 => 9,  65 => 22,  34 => 5,  129 => 61,  58 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 71,  132 => 61,  128 => 37,  107 => 48,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 99,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 51,  102 => 46,  71 => 27,  67 => 12,  63 => 15,  59 => 26,  38 => 11,  87 => 25,  201 => 92,  196 => 128,  183 => 82,  171 => 78,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 71,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 26,  105 => 55,  91 => 27,  62 => 21,  49 => 14,  28 => 5,  94 => 42,  89 => 20,  85 => 39,  75 => 28,  68 => 30,  56 => 5,  24 => 4,  31 => 8,  26 => 2,  25 => 1,  21 => 2,  19 => 1,  93 => 40,  88 => 38,  78 => 34,  46 => 7,  44 => 11,  27 => 10,  79 => 15,  72 => 33,  69 => 28,  47 => 15,  40 => 10,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 53,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 47,  96 => 36,  83 => 36,  74 => 30,  66 => 24,  55 => 25,  52 => 16,  50 => 53,  43 => 14,  41 => 9,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 96,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 64,  173 => 124,  168 => 72,  164 => 59,  162 => 75,  154 => 58,  149 => 51,  147 => 61,  144 => 69,  141 => 67,  133 => 62,  130 => 68,  125 => 36,  122 => 57,  116 => 60,  112 => 50,  109 => 34,  106 => 49,  103 => 32,  99 => 41,  95 => 26,  92 => 43,  86 => 26,  82 => 22,  80 => 19,  73 => 36,  64 => 26,  60 => 6,  57 => 18,  54 => 10,  51 => 15,  48 => 16,  45 => 14,  42 => 12,  39 => 9,  36 => 10,  33 => 4,  30 => 7,);
    }
}
