<?php

/* D:\xampp\htdocs\customcms/themes/alampuisi/partials/nav.htm */
class __TwigTemplate_c2a6c0088be84b538cd585b8fed0990eec492ce2b20b35597d034733dd0d15ee extends Twig_Template
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
        echo "<div class=\"container-fluid header-top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-8\">
                <div class=\"row\">
                    <div class=\"col-sm-3 language-box hidden-xs\">
                        <div class=\"dropdown\">
                            <a class=\"font-small\" data-toggle=\"dropdown\" href=\"#\">
                                Select Language <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-lang\" role=\"menu\" aria-labelledby=\"dLabel\">
                                <li><a href=\"javascript:void(0)\" class=\"sellang\" data-lang=\"gb\">English</a></li>
                                <li><a href=\"javascript:void(0)\" class=\"sellang\" data-lang=\"id\">Indonesia</a></li>
                                <li><a href=\"javascript:void(0)\" class=\"sellang\" data-lang=\"jp\">Japanese</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-sm-4\">
                <div class=\"header-top-right\">
                    <a href=\"/about\" class=\"font-small text-uppercase\" >About Us</a>
                    <a href=\"/enquire\" class=\"font-small text-uppercase\" >Enquire Now</a>
                    <a href=\"#\" class=\"font-small text-uppercase\" target=\"_blank\">Quick Reservation</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid header-menu text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"brand\">
                <a href=\"";
        // line 35
        echo url("/");
        echo "\"><img src=\"";
        echo url("upload/logo.png");
        echo "\" width=\"100\" /></a>
            </div>
            <div class=\"rm-container\">
                <a class=\"rm-toggle rm-button rm-nojs\" href=\"javascript:void(0)\">Menu</a>
                <nav class=\"rm-nav rm-nojs rm-lighten\">
                                                    
                ";
        // line 41
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("mainmenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "                                          
                </nav>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\customcms/themes/alampuisi/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 42,  66 => 41,  55 => 35,  19 => 1,);
    }
}
/* <div class="container-fluid header-top">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-6 col-sm-8">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3 language-box hidden-xs">*/
/*                         <div class="dropdown">*/
/*                             <a class="font-small" data-toggle="dropdown" href="#">*/
/*                                 Select Language <span class="caret"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-lang" role="menu" aria-labelledby="dLabel">*/
/*                                 <li><a href="javascript:void(0)" class="sellang" data-lang="gb">English</a></li>*/
/*                                 <li><a href="javascript:void(0)" class="sellang" data-lang="id">Indonesia</a></li>*/
/*                                 <li><a href="javascript:void(0)" class="sellang" data-lang="jp">Japanese</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div class="col-md-6 col-sm-4">*/
/*                 <div class="header-top-right">*/
/*                     <a href="/about" class="font-small text-uppercase" >About Us</a>*/
/*                     <a href="/enquire" class="font-small text-uppercase" >Enquire Now</a>*/
/*                     <a href="#" class="font-small text-uppercase" target="_blank">Quick Reservation</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="container-fluid header-menu text-center">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="brand">*/
/*                 <a href="{{url('/')}}"><img src="{{url('upload/logo.png')}}" width="100" /></a>*/
/*             </div>*/
/*             <div class="rm-container">*/
/*                 <a class="rm-toggle rm-button rm-nojs" href="javascript:void(0)">Menu</a>*/
/*                 <nav class="rm-nav rm-nojs rm-lighten">*/
/*                                                     */
/*                 {% component "mainmenu" %}*/
/*                                           */
/*                 </nav>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
