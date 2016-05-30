<?php

/* D:\xampp\htdocs\customcms/themes/alampuisi/pages/testing.htm */
class __TwigTemplate_43f201e0122108b909cb8c148d3c45998b30ac414642f25d300bbfdb5c25d2e8 extends Twig_Template
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
        <div class=\"main-head-title title-small\">Premier Room</div>
        <div class=\"clearfix\">&nbsp;</div>
        <p>A splendid one bedroom villa with a private pool and views onto the rice fields, this two-person room also comes with the ption to include beds for two extra people. The villa is completed by the private pool, sun deck, and spacious dining gazebo.

        A stylish villa with natural finish and terracotta floors, the One Bedroom Pool Villa ensures sound sleeping with a king sized bed, mosquito net and quality cotton sheets. The bathroom provides a luxurious setting for relaxing soaks in the sunken bath. Other features include 24 hour hot spot wifi, air conditioning, mini bar, two side tables, television, and tea and coffee facilities.<br /><br /><strong>ROOM SIZE</strong> :&nbsp;65 sq m / 655sq ft | <strong>BED SIZE</strong> :&nbsp;1 King or 2 Twin | <strong>OCCUPANCY</strong> : Three persons | <strong>LOCATION</strong> : Wings 1, 2 &amp; 3 | <strong>VIEW</strong> : White sandy beach pool</p>
        <div id=\"accordion\" class=\"row\">
            <div class=\"col-md-12 text-uppercase\">
                <div class=\"detail-title-box\"><em class=\"fa fa-angle-down\">&nbsp;</em> <a href=\"#collapseOne\" data-toggle=\"collapse\" data-parent=\"#accordion\"> Facilities</a>
                </div>
            </div>
            <div id=\"collapseOne\" class=\"panel-collapse in\">
                <div class=\"col-md-6\">
                    <ul>
                        <li>Air conditioning</li>
                        <li>Balcony with daybed and private jacuzzi</li>
                        <li>Branded Acqua di Parma amenities</li>
                        <li>Daily mineral water</li>
                        <li>Bathroom with bathtub &amp; shower</li>
                        <li>Selection of different types of pillows</li>
                        <li>Mini bar</li>
                        <li>Work/ writing desk</li>
                        <li>Alarm Clock/ radio</li>
                        <li>Bathroom with shower</li>
                    </ul>
                </div>
                <div class=\"col-md-6\">
                    <ul>
                        <li>Coffee/tea making facilities</li>
                        <li>Hair dryer</li>
                        <li>Electricity adapters</li>
                        <li>In-room safe</li>
                        <li>Internet WiFi access in room</li>
                        <li>TV &ndash; cable/satellite</li>
                        <li>Telephone</li>
                        <li>Non-smoking / smoking rooms available</li>
                        <li>Sofa/lounge chairs</li>
                        <li>Access to the White Sandy Beach Pool and Fitness Centre</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-12 text-uppercase\">
                <div class=\"detail-title-box\"><em class=\"fa fa-angle-down\">&nbsp;</em> <a href=\"#collapseTwo\" data-toggle=\"collapse\" data-parent=\"#accordion\"> Services</a>
                </div>
            </div>
            <div id=\"collapseTwo\" class=\"panel-collapse in\">
                <div class=\"col-md-12\">
                    <ul>
                        <li>Pressing up to two clothing items per stay</li>
                        <li>Press Reader &ndash; the free reading experience</li>
                        <li>24-hour in-room dining</li>
                        <li>Choice between king or twin sized beds</li>
                        <li>Interconnecting rooms available upon request</li>
                        <li>STAR &ndash; 24 hour one button press service</li>
                    </ul>
                </div>
            </div>
        </div>                      
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\customcms/themes/alampuisi/pages/testing.htm";
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
/*         <div class="main-head-title title-small">Premier Room</div>*/
/*         <div class="clearfix">&nbsp;</div>*/
/*         <p>A splendid one bedroom villa with a private pool and views onto the rice fields, this two-person room also comes with the ption to include beds for two extra people. The villa is completed by the private pool, sun deck, and spacious dining gazebo.*/
/* */
/*         A stylish villa with natural finish and terracotta floors, the One Bedroom Pool Villa ensures sound sleeping with a king sized bed, mosquito net and quality cotton sheets. The bathroom provides a luxurious setting for relaxing soaks in the sunken bath. Other features include 24 hour hot spot wifi, air conditioning, mini bar, two side tables, television, and tea and coffee facilities.<br /><br /><strong>ROOM SIZE</strong> :&nbsp;65 sq m / 655sq ft | <strong>BED SIZE</strong> :&nbsp;1 King or 2 Twin | <strong>OCCUPANCY</strong> : Three persons | <strong>LOCATION</strong> : Wings 1, 2 &amp; 3 | <strong>VIEW</strong> : White sandy beach pool</p>*/
/*         <div id="accordion" class="row">*/
/*             <div class="col-md-12 text-uppercase">*/
/*                 <div class="detail-title-box"><em class="fa fa-angle-down">&nbsp;</em> <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion"> Facilities</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="collapseOne" class="panel-collapse in">*/
/*                 <div class="col-md-6">*/
/*                     <ul>*/
/*                         <li>Air conditioning</li>*/
/*                         <li>Balcony with daybed and private jacuzzi</li>*/
/*                         <li>Branded Acqua di Parma amenities</li>*/
/*                         <li>Daily mineral water</li>*/
/*                         <li>Bathroom with bathtub &amp; shower</li>*/
/*                         <li>Selection of different types of pillows</li>*/
/*                         <li>Mini bar</li>*/
/*                         <li>Work/ writing desk</li>*/
/*                         <li>Alarm Clock/ radio</li>*/
/*                         <li>Bathroom with shower</li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <ul>*/
/*                         <li>Coffee/tea making facilities</li>*/
/*                         <li>Hair dryer</li>*/
/*                         <li>Electricity adapters</li>*/
/*                         <li>In-room safe</li>*/
/*                         <li>Internet WiFi access in room</li>*/
/*                         <li>TV &ndash; cable/satellite</li>*/
/*                         <li>Telephone</li>*/
/*                         <li>Non-smoking / smoking rooms available</li>*/
/*                         <li>Sofa/lounge chairs</li>*/
/*                         <li>Access to the White Sandy Beach Pool and Fitness Centre</li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12 text-uppercase">*/
/*                 <div class="detail-title-box"><em class="fa fa-angle-down">&nbsp;</em> <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion"> Services</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="collapseTwo" class="panel-collapse in">*/
/*                 <div class="col-md-12">*/
/*                     <ul>*/
/*                         <li>Pressing up to two clothing items per stay</li>*/
/*                         <li>Press Reader &ndash; the free reading experience</li>*/
/*                         <li>24-hour in-room dining</li>*/
/*                         <li>Choice between king or twin sized beds</li>*/
/*                         <li>Interconnecting rooms available upon request</li>*/
/*                         <li>STAR &ndash; 24 hour one button press service</li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>                      */
/*     </div>*/
/* </div>*/
