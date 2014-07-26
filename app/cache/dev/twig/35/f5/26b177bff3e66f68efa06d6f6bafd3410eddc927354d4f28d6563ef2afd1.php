<?php

/* ::base.html.twig */
class __TwigTemplate_35f526b177bff3e66f68efa06d6f6bafd3410eddc927354d4f28d6563ef2afd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" >
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Prexey - Administrador";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "         <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" media=\"screen\" >
         <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\"  >
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "        
         <div class=\"navbar navbar-inverse \">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Prexey</a>
            
            ";
        // line 26
        $this->displayBlock('menu', $context, $blocks);
        // line 29
        echo "            
        </div>
    </div>
</div>
        
         <div class=\"container\">
          ";
        // line 35
        $this->env->loadTemplate("::messages.html.twig")->display($context);
        // line 36
        echo "          ";
        $this->displayBlock('container', $context, $blocks);
        // line 38
        echo "           
         </div>
        
        ";
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        // line 27
        echo "                
            ";
    }

    // line 36
    public function block_container($context, array $blocks = array())
    {
        // line 37
        echo "           ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "        <script> window.jQuery || document.write('<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"><\\/script>')</script>
         <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gen_validatorv4.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>  
         <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/locales/messages_es_AR.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "98d0896_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98d0896_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98d0896_admin_1.js");
            // line 49
            echo "             <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "98d0896"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98d0896") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98d0896.js");
            echo "             <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 51
        echo "        
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 51,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  135 => 43,  128 => 37,  125 => 36,  120 => 27,  117 => 26,  107 => 36,  105 => 35,  97 => 29,  95 => 26,  90 => 24,  79 => 15,  76 => 14,  70 => 9,  65 => 8,  62 => 7,  56 => 5,  50 => 53,  47 => 42,  45 => 14,  38 => 11,  36 => 7,  25 => 1,  34 => 5,  31 => 5,  28 => 3,  221 => 99,  207 => 97,  203 => 96,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  147 => 61,  136 => 56,  132 => 42,  123 => 53,  119 => 51,  110 => 38,  106 => 49,  102 => 48,  98 => 47,  92 => 43,  88 => 42,  72 => 33,  52 => 16,  48 => 15,  39 => 9,  32 => 4,  29 => 3,);
    }
}
