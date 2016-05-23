<?php

/* D:\xampp\htdocs\customcms/themes/goya/partials/nav.htm */
class __TwigTemplate_753bb785ddd5333baed1a189b7d9b389ae765f454b5869e7e0a30e18ef7df160 extends Twig_Template
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
        $context["nav"] = $this;
        // line 2
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a id=\"brandlogo\" class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("mainmenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo "        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\customcms/themes/goya/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  39 => 15,  33 => 12,  21 => 2,  19 => 1,);
    }
}
/* {% import _self as nav %}*/
/* */
/* <nav id="layout-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a id="brandlogo" class="navbar-brand" href="{{ 'home'|page }}"></a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse navbar-main-collapse">*/
/*             {% component "mainmenu" %}*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
