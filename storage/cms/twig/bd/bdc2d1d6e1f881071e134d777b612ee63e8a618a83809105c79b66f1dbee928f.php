<?php

/* D:\xampp\htdocs\customcms/themes/goya/layouts/default.htm */
class __TwigTemplate_a719b9011cd4d0e985f791c555fb7f1d699b41d8f04454ddd906ddc35a317fae extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Flat UI - ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" />
        ";
        // line 8
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 9
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css", 1 => "assets/vendor/wowslider/engine1/style.css"));
        // line 12
        echo "\" rel=\"stylesheet\">
    </head>
    <body class=\"page-";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "id", array()), "html", null, true);
        echo "\">
        <header id=\"layout-header\" class=\"header-navbar\">
            <!-- Nav -->
            ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "        </header>
        <!-- Start WOWSlider.com BODY section -->
        <div id=\"wowslider-container1\">
            <div class=\"ws_images\"><ul>
                    <li><img src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/wowslider/data1/images/img_10993.jpg");
        echo "\" alt=\"IMG_1099-3\" title=\"IMG_1099-3\" id=\"wows1_0\"/></li>
                    <li><img src=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/wowslider/data1/images/_mg_2778.jpg");
        echo "\" alt=\"_MG_2778\" title=\"_MG_2778\" id=\"wows1_1\"/></li>
                    <li><img src=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/wowslider/data1/images/img_13443.jpg");
        echo "\" alt=\"IMG_1344-3\" title=\"IMG_1344-3\" id=\"wows1_2\"/></li>
                    <li><img src=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/wowslider/data1/images/_mg_2409.jpg");
        echo "\" alt=\"_MG_2409\" title=\"_MG_2409\" id=\"wows1_3\"/></li>
                    <li><a href=\"http://wowslider.com/vi\"><img src=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/wowslider/data1/images/img_1130.jpg");
        echo "\" alt=\"bootstrap slider\" title=\"IMG_1130\" id=\"wows1_4\"/></a></li>
                    <li><img src=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/wowslider/data1/images/_mg_2379.jpg");
        echo "\" alt=\"_MG_2379\" title=\"_MG_2379\" id=\"wows1_5\"/></li>
                </ul>
            </div>
        <div class=\"ws_shadow\"></div>
        </div>  
        <!-- End WOWSlider.com BODY section -->
        <!-- Header -->
        <!-- Content -->
        <div id=\"layout-content\">
            ";
        // line 36
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 37
        echo "        </div>

        <!-- Mailing List -->
        <section id=\"layout-subscribe\" class=\"subscribe-form\">
            ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("subscribe"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 50
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/vendor/flat-ui/js/bootstrap-select.js", 14 => "assets/vendor/flat-ui/js/bootstrap-switch.js", 15 => "assets/vendor/flat-ui/js/flatui-checkbox.js", 16 => "assets/vendor/flat-ui/js/flatui-radio.js", 17 => "assets/vendor/flat-ui/js/jquery.tagsinput.js", 18 => "assets/vendor/flat-ui/js/jquery.placeholder.js", 19 => "assets/javascript/app.js", 20 => "assets/vendor/wowslider/engine1/wowslider.js", 21 => "assets/vendor/wowslider/engine1/script.js"));
        // line 73
        echo "\"></script>

        ";
        // line 75
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 76
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 77
        echo "        <script>
        window.onscroll = function() {myFunction()};

        function myFunction() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                document.getElementById(\"brandlogo\").className = \"navbar-brand-scrolled\";
                document.getElementById(\"layout-nav\").className = \"navbar-scrolled navbar-inverse-scrolled navbar-fixed-top\";
            } else {
                document.getElementById(\"brandlogo\").className = \"navbar-brand\";
                document.getElementById(\"layout-nav\").className = \"navbar navbar-inverse navbar-fixed-top\";
            }
        }
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\customcms/themes/goya/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 77,  134 => 76,  127 => 75,  123 => 73,  121 => 50,  116 => 47,  112 => 46,  106 => 42,  102 => 41,  96 => 37,  94 => 36,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  56 => 18,  52 => 17,  44 => 14,  40 => 12,  37 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Flat UI - {{ this.page.title }}</title>*/
/*         <meta name="author" content="October CMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/logo.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/css/theme.css',*/
/*             'assets/vendor/wowslider/engine1/style.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     </head>*/
/*     <body class="page-{{ this.page.id }} layout-{{ this.layout.id }}">*/
/*         <header id="layout-header" class="header-navbar">*/
/*             <!-- Nav -->*/
/*             {% partial "nav" %}*/
/*         </header>*/
/*         <!-- Start WOWSlider.com BODY section -->*/
/*         <div id="wowslider-container1">*/
/*             <div class="ws_images"><ul>*/
/*                     <li><img src="{{ 'assets/vendor/wowslider/data1/images/img_10993.jpg'|theme }}" alt="IMG_1099-3" title="IMG_1099-3" id="wows1_0"/></li>*/
/*                     <li><img src="{{ 'assets/vendor/wowslider/data1/images/_mg_2778.jpg'|theme }}" alt="_MG_2778" title="_MG_2778" id="wows1_1"/></li>*/
/*                     <li><img src="{{ 'assets/vendor/wowslider/data1/images/img_13443.jpg'|theme }}" alt="IMG_1344-3" title="IMG_1344-3" id="wows1_2"/></li>*/
/*                     <li><img src="{{ 'assets/vendor/wowslider/data1/images/_mg_2409.jpg'|theme }}" alt="_MG_2409" title="_MG_2409" id="wows1_3"/></li>*/
/*                     <li><a href="http://wowslider.com/vi"><img src="{{ 'assets/vendor/wowslider/data1/images/img_1130.jpg'|theme }}" alt="bootstrap slider" title="IMG_1130" id="wows1_4"/></a></li>*/
/*                     <li><img src="{{ 'assets/vendor/wowslider/data1/images/_mg_2379.jpg'|theme }}" alt="_MG_2379" title="_MG_2379" id="wows1_5"/></li>*/
/*                 </ul>*/
/*             </div>*/
/*         <div class="ws_shadow"></div>*/
/*         </div>  */
/*         <!-- End WOWSlider.com BODY section -->*/
/*         <!-- Header -->*/
/*         <!-- Content -->*/
/*         <div id="layout-content">*/
/*             {% page %}*/
/*         </div>*/
/* */
/*         <!-- Mailing List -->*/
/*         <section id="layout-subscribe" class="subscribe-form">*/
/*             {% partial "subscribe" %}*/
/*         </section>*/
/* */
/*         <!-- Footer -->*/
/*         <footer id="layout-footer">*/
/*             {% partial "footer" %}*/
/*         </footer>*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ [*/
/*             'assets/javascript/jquery.js',*/
/*             'assets/vendor/bootstrap/js/transition.js',*/
/*             'assets/vendor/bootstrap/js/alert.js',*/
/*             'assets/vendor/bootstrap/js/button.js',*/
/*             'assets/vendor/bootstrap/js/carousel.js',*/
/*             'assets/vendor/bootstrap/js/collapse.js',*/
/*             'assets/vendor/bootstrap/js/dropdown.js',*/
/*             'assets/vendor/bootstrap/js/modal.js',*/
/*             'assets/vendor/bootstrap/js/tooltip.js',*/
/*             'assets/vendor/bootstrap/js/popover.js',*/
/*             'assets/vendor/bootstrap/js/scrollspy.js',*/
/*             'assets/vendor/bootstrap/js/tab.js',*/
/*             'assets/vendor/bootstrap/js/affix.js',*/
/*             'assets/vendor/flat-ui/js/bootstrap-select.js',*/
/*             'assets/vendor/flat-ui/js/bootstrap-switch.js',*/
/*             'assets/vendor/flat-ui/js/flatui-checkbox.js',*/
/*             'assets/vendor/flat-ui/js/flatui-radio.js',*/
/*             'assets/vendor/flat-ui/js/jquery.tagsinput.js',*/
/*             'assets/vendor/flat-ui/js/jquery.placeholder.js',*/
/*             'assets/javascript/app.js',*/
/*             'assets/vendor/wowslider/engine1/wowslider.js',*/
/*             'assets/vendor/wowslider/engine1/script.js',*/
/*         ]|theme }}"></script>*/
/* */
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*         <script>*/
/*         window.onscroll = function() {myFunction()};*/
/* */
/*         function myFunction() {*/
/*             if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {*/
/*                 document.getElementById("brandlogo").className = "navbar-brand-scrolled";*/
/*                 document.getElementById("layout-nav").className = "navbar-scrolled navbar-inverse-scrolled navbar-fixed-top";*/
/*             } else {*/
/*                 document.getElementById("brandlogo").className = "navbar-brand";*/
/*                 document.getElementById("layout-nav").className = "navbar navbar-inverse navbar-fixed-top";*/
/*             }*/
/*         }*/
/*         </script>*/
/*     </body>*/
/* </html>*/
