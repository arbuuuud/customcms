<?php

/* D:\xampp\htdocs\customcms/themes/alampuisi/pages/restaurant/anubhooti.htm */
class __TwigTemplate_409ec2b51a0c5626354c77c8b05bfbacd7db0ad84471d46af338f58499ce9a23 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 2
        echo "    <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/slick/slick.css"));
        // line 4
        echo "\" rel=\"stylesheet\">
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 6
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 7
        echo "    <script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/slick/slick.js"));
        // line 9
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#projectImages').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: true
            });
        })
    </script>
";
        // line 6
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 26
        echo "
<div id=\"imageGallery\">
    <div data-thumb=\"";
        // line 28
        echo url("upload/alampuisi/Pool-Villa-8.jpg");
        echo "\">
        <img src=\"";
        // line 29
        echo url("upload/alampuisi/Pool-Villa-8.jpg");
        echo "\" />
    </div>
    <div data-thumb=\"";
        // line 31
        echo url("upload/alampuisi/Pool-Villa-14.jpg");
        echo "\">
        <img src=\"";
        // line 32
        echo url("upload/alampuisi/Pool-Villa-14.jpg");
        echo "\" />
    </div>
    <div data-thumb=\"";
        // line 34
        echo url("upload/alampuisi/Pool-Villa-13.jpg");
        echo "\">
        <img src=\"";
        // line 35
        echo url("upload/alampuisi/Pool-Villa-13.jpg");
        echo "\" />
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"main-content-box-accom-ruler\" style=\"margin-top:20px;\">&nbsp;</div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12 p-detail-small\">
        <div class=\"main-head-title title-small\">Anubhooti Restaurant</div>
        <div class=\"clearfix\">&nbsp;</div>
        <p>Anubhooti Restaurant is located in the main building at the entrance to the villa. This charming eater capacities for 100 guest,distant rice terraces and dancing coconut palms, and an unequallevantage point to watch the brilliant color of the setting sun. We have 100 seaters 50 made from wood and 50 from stoon overlooking to the ricefield view. Our concept service at Anubhooti restaurant is Your happiness is our happiness, Your complaint is our fault.

The menu offers you a combination of wonderful Balinese specialties, and more familiar Western dishes, Asian, Row Food, Vegetarian and our special service is eat what you want just discuss with our chef and get the special price. We also have Balinese Cooking Lesson A traditional cooking lesson which had been used it by Balinese people. With organic ingredients” You are invited to visit cooking classes to learn the secrets of Balinese cuisine this lesson will include 1 hour morning market we will show you where the Balinese people buy the ingrediences for cooking, 11 am start the cooking and finished by lunch.</p>
        <div id=\"accordion\" class=\"row\">
            <div class=\"col-md-12 text-uppercase\">
                <div class=\"detail-title-box\"><em class=\"fa fa-angle-down\">&nbsp;</em> <a href=\"#collapseOne\" data-toggle=\"collapse\" data-parent=\"#accordion\"> Opening hours</a>
                </div>
            </div>
            <div id=\"collapseOne\" class=\"panel-collapse in\">
                <div class=\"col-md-12\">
                <P>
                    
Breakfast from 07.00am – 10.00am <br/>
Lunch 11.00pm – 18.00pm <br/>
Dinner 19.00pm – 23.00pm<br/>
We do hope that the above information met your requirement satisfied. Feel free to contact us at any time if there is any question you may have.
                </P>
                </div>
            </div>
           
        </div>                      
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\customcms/themes/alampuisi/pages/restaurant/anubhooti.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  76 => 34,  71 => 32,  67 => 31,  62 => 29,  58 => 28,  54 => 26,  52 => 6,  34 => 9,  31 => 7,  29 => 6,  27 => 1,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% put styles %}*/
/*     <link href="{{ [*/
/*         'assets/vendor/slick/slick.css',*/
/*     ]|theme }}" rel="stylesheet">*/
/* {% endput %}*/
/* {% put scripts %}*/
/*     <script src="{{ [*/
/*         'assets/vendor/slick/slick.js',*/
/*     ]|theme }}"></script>*/
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('#projectImages').slick({*/
/*                 dots: true,*/
/*                 infinite: true,*/
/*                 speed: 500,*/
/*                 fade: true,*/
/*                 cssEase: 'linear',*/
/*                 slidesToShow: 1,*/
/*                 autoplay: true,*/
/*                 autoplaySpeed: 2000,*/
/*                 pauseOnHover: true*/
/*             });*/
/*         })*/
/*     </script>*/
/* {% endput %}*/
/* */
/* <div id="imageGallery">*/
/*     <div data-thumb="{{url('upload/alampuisi/Pool-Villa-8.jpg')}}">*/
/*         <img src="{{url('upload/alampuisi/Pool-Villa-8.jpg')}}" />*/
/*     </div>*/
/*     <div data-thumb="{{url('upload/alampuisi/Pool-Villa-14.jpg')}}">*/
/*         <img src="{{url('upload/alampuisi/Pool-Villa-14.jpg')}}" />*/
/*     </div>*/
/*     <div data-thumb="{{url('upload/alampuisi/Pool-Villa-13.jpg')}}">*/
/*         <img src="{{url('upload/alampuisi/Pool-Villa-13.jpg')}}" />*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <div class="main-content-box-accom-ruler" style="margin-top:20px;">&nbsp;</div>*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-12 p-detail-small">*/
/*         <div class="main-head-title title-small">Anubhooti Restaurant</div>*/
/*         <div class="clearfix">&nbsp;</div>*/
/*         <p>Anubhooti Restaurant is located in the main building at the entrance to the villa. This charming eater capacities for 100 guest,distant rice terraces and dancing coconut palms, and an unequallevantage point to watch the brilliant color of the setting sun. We have 100 seaters 50 made from wood and 50 from stoon overlooking to the ricefield view. Our concept service at Anubhooti restaurant is Your happiness is our happiness, Your complaint is our fault.*/
/* */
/* The menu offers you a combination of wonderful Balinese specialties, and more familiar Western dishes, Asian, Row Food, Vegetarian and our special service is eat what you want just discuss with our chef and get the special price. We also have Balinese Cooking Lesson A traditional cooking lesson which had been used it by Balinese people. With organic ingredients” You are invited to visit cooking classes to learn the secrets of Balinese cuisine this lesson will include 1 hour morning market we will show you where the Balinese people buy the ingrediences for cooking, 11 am start the cooking and finished by lunch.</p>*/
/*         <div id="accordion" class="row">*/
/*             <div class="col-md-12 text-uppercase">*/
/*                 <div class="detail-title-box"><em class="fa fa-angle-down">&nbsp;</em> <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion"> Opening hours</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="collapseOne" class="panel-collapse in">*/
/*                 <div class="col-md-12">*/
/*                 <P>*/
/*                     */
/* Breakfast from 07.00am – 10.00am <br/>*/
/* Lunch 11.00pm – 18.00pm <br/>*/
/* Dinner 19.00pm – 23.00pm<br/>*/
/* We do hope that the above information met your requirement satisfied. Feel free to contact us at any time if there is any question you may have.*/
/*                 </P>*/
/*                 </div>*/
/*             </div>*/
/*            */
/*         </div>                      */
/*     </div>*/
/* </div>*/
