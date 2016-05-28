<?php

/* D:\xampp\htdocs\customcms/themes/alampuisi/pages/special-offer/special-offer.htm */
class __TwigTemplate_8cfe831672c88d356617c90b69348536791296b15f83328a95e3f8e5986e3055 extends Twig_Template
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
                        <div class=\"home-txt-top\">Title For Special Offer </div>
                    <p><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>              </div>
                <div class=\"col-md-12\">
                    <div class=\"main-content-box-accom-ruler\">&nbsp;</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 box-grid\">
                    <div class=\"main-head-title title-medium\">Room Discount</div>
                    <div class=\"thin-border title-medium\">___</div>
                    <div class=\"grid2\">
                        <figure class=\"item effect-ruby\">
                            <img src=\"";
        // line 23
        echo url("upload/alampuisi/Pool-Villa-8.jpg");
        echo "\" alt=\"\" />
                            <figcaption>
                                <p>
                                    <span class=\"hidden-xs\">A splendid one bedroom villa with a private pool and views onto the rice fields, this two-person room also comes with the ption to include beds for two extra people. The villa is completed by the private pool, sun deck, and spacious dining gazebo. <br /><br /></span>
                                </p>
                                <a href=\"";
        // line 28
        echo url("special-offer/room-discount");
        echo "\">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 box-grid\">
                    <div class=\"main-head-title title-medium\">Package</div>
                    <div class=\"thin-border title-medium\">___</div>
                    <div class=\"grid2\">
                        <figure class=\"item effect-ruby\">
                            <img src=\"";
        // line 38
        echo url("upload/alampuisi/Pool-Villa-7.jpg");
        echo "\" alt=\"\" />
                            <figcaption>
                                <p>
                                    <span class=\"hidden-xs\">With two rooms and private pools connected by a door, this chummy villa is perfect for the family who would like to stay together but also enjoy privacy. The four person capacity can be expanded to include beds for two additional guests for an extra price. <br /><br /></span>
                                </p>
                                <a href=\"";
        // line 43
        echo url("special-offer/package");
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
        return "D:\\xampp\\htdocs\\customcms/themes/alampuisi/pages/special-offer/special-offer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 43,  68 => 38,  55 => 28,  47 => 23,  29 => 7,  27 => 1,  24 => 5,  21 => 2,  19 => 1,);
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
/*                         <div class="home-txt-top">Title For Special Offer </div>*/
/*                     <p><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>              </div>*/
/*                 <div class="col-md-12">*/
/*                     <div class="main-content-box-accom-ruler">&nbsp;</div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-6 col-sm-6 box-grid">*/
/*                     <div class="main-head-title title-medium">Room Discount</div>*/
/*                     <div class="thin-border title-medium">___</div>*/
/*                     <div class="grid2">*/
/*                         <figure class="item effect-ruby">*/
/*                             <img src="{{url('upload/alampuisi/Pool-Villa-8.jpg')}}" alt="" />*/
/*                             <figcaption>*/
/*                                 <p>*/
/*                                     <span class="hidden-xs">A splendid one bedroom villa with a private pool and views onto the rice fields, this two-person room also comes with the ption to include beds for two extra people. The villa is completed by the private pool, sun deck, and spacious dining gazebo. <br /><br /></span>*/
/*                                 </p>*/
/*                                 <a href="{{url('special-offer/room-discount')}}">View more</a>*/
/*                             </figcaption>*/
/*                         </figure>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-sm-6 box-grid">*/
/*                     <div class="main-head-title title-medium">Package</div>*/
/*                     <div class="thin-border title-medium">___</div>*/
/*                     <div class="grid2">*/
/*                         <figure class="item effect-ruby">*/
/*                             <img src="{{url('upload/alampuisi/Pool-Villa-7.jpg')}}" alt="" />*/
/*                             <figcaption>*/
/*                                 <p>*/
/*                                     <span class="hidden-xs">With two rooms and private pools connected by a door, this chummy villa is perfect for the family who would like to stay together but also enjoy privacy. The four person capacity can be expanded to include beds for two additional guests for an extra price. <br /><br /></span>*/
/*                                 </p>*/
/*                                 <a href="{{url('special-offer/package')}}">View more</a>*/
/*                             </figcaption>*/
/*                         </figure>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
