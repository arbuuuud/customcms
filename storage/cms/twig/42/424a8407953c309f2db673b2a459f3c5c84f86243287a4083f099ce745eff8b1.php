<?php

/* D:\xampp\htdocs\customcms/themes/alampuisi/pages/roomrates/roomrates.htm */
class __TwigTemplate_9938d05170ad80dd765e12c2a0a52bd4123f7daa31516e4ad33eb430e86c1fef extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 2
        echo "    <script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/isotope/jquery.isotope.js", 1 => "assets/javascript/pages/portfolio.js"));
        // line 5
        echo "\"></script>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 7
        echo "<div class=\"container-fluid main-content-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                        <div class=\"home-txt-top\">Title For Room Rates </div>
                    <p><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>              </div>
                <div class=\"col-md-12\">
                    <div class=\"main-content-box-accom-ruler\">&nbsp;</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 box-grid\">
                    <div class=\"main-head-title title-medium\">One Bedroom Private Pool Villa</div>
                    <div class=\"thin-border title-medium\">___</div>
                    <div class=\"grid2\">
                        <figure class=\"item effect-ruby\">
                            <img src=\"";
        // line 23
        echo "upload/alampuisi/Pool-Villa-8.jpg";
        echo "\" alt=\"\" />
                            <figcaption>
                                <p>
                                    <span class=\"hidden-xs\">A splendid one bedroom villa with a private pool and views onto the rice fields, this two-person room also comes with the ption to include beds for two extra people. The villa is completed by the private pool, sun deck, and spacious dining gazebo. <br /><br /></span>
                                    <a href=\"#\" target=\"_blank\" class=\"btn btn-trans text-uppercase\">Book Now</a>
                                </p>
                                <a href=\"";
        // line 29
        echo url("roomrates/one-bed-room");
        echo "\">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 box-grid\">
                    <div class=\"main-head-title title-medium\">Two Bedroom Private Pool Villa</div>
                    <div class=\"thin-border title-medium\">___</div>
                    <div class=\"grid2\">
                        <figure class=\"item effect-ruby\">
                            <img src=\"";
        // line 39
        echo "upload/alampuisi/Pool-Villa-7.jpg";
        echo "\" alt=\"\" />
                            <figcaption>
                                <p>
                                    <span class=\"hidden-xs\">With two rooms and private pools connected by a door, this chummy villa is perfect for the family who would like to stay together but also enjoy privacy. The four person capacity can be expanded to include beds for two additional guests for an extra price. <br /><br /></span>
                                    <a href=\"#\" target=\"_blank\" class=\"btn btn-trans text-uppercase\">Book Now</a>
                                </p>
                                <a href=\"";
        // line 45
        echo url("roomrates/two-bed-room");
        echo "\">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\customcms/themes/alampuisi/pages/roomrates/roomrates.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 45,  69 => 39,  56 => 29,  47 => 23,  29 => 7,  27 => 1,  24 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% put scripts %}*/
/*     <script src="{{ [*/
/*         'assets/vendor/isotope/jquery.isotope.js',*/
/*         'assets/javascript/pages/portfolio.js',*/
/*     ]|theme }}"></script>*/
/* {% endput %}*/
/* <div class="container-fluid main-content-box">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12 text-center">*/
/*                         <div class="home-txt-top">Title For Room Rates </div>*/
/*                     <p><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>              </div>*/
/*                 <div class="col-md-12">*/
/*                     <div class="main-content-box-accom-ruler">&nbsp;</div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-6 col-sm-6 box-grid">*/
/*                     <div class="main-head-title title-medium">One Bedroom Private Pool Villa</div>*/
/*                     <div class="thin-border title-medium">___</div>*/
/*                     <div class="grid2">*/
/*                         <figure class="item effect-ruby">*/
/*                             <img src="{{'upload/alampuisi/Pool-Villa-8.jpg'}}" alt="" />*/
/*                             <figcaption>*/
/*                                 <p>*/
/*                                     <span class="hidden-xs">A splendid one bedroom villa with a private pool and views onto the rice fields, this two-person room also comes with the ption to include beds for two extra people. The villa is completed by the private pool, sun deck, and spacious dining gazebo. <br /><br /></span>*/
/*                                     <a href="#" target="_blank" class="btn btn-trans text-uppercase">Book Now</a>*/
/*                                 </p>*/
/*                                 <a href="{{url('roomrates/one-bed-room')}}">View more</a>*/
/*                             </figcaption>*/
/*                         </figure>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-sm-6 box-grid">*/
/*                     <div class="main-head-title title-medium">Two Bedroom Private Pool Villa</div>*/
/*                     <div class="thin-border title-medium">___</div>*/
/*                     <div class="grid2">*/
/*                         <figure class="item effect-ruby">*/
/*                             <img src="{{'upload/alampuisi/Pool-Villa-7.jpg'}}" alt="" />*/
/*                             <figcaption>*/
/*                                 <p>*/
/*                                     <span class="hidden-xs">With two rooms and private pools connected by a door, this chummy villa is perfect for the family who would like to stay together but also enjoy privacy. The four person capacity can be expanded to include beds for two additional guests for an extra price. <br /><br /></span>*/
/*                                     <a href="#" target="_blank" class="btn btn-trans text-uppercase">Book Now</a>*/
/*                                 </p>*/
/*                                 <a href="{{url('roomrates/two-bed-room')}}">View more</a>*/
/*                             </figcaption>*/
/*                         </figure>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
