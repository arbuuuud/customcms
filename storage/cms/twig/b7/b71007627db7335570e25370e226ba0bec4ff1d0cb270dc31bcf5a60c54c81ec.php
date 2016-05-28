<?php

/* D:\xampp\htdocs\customcms/themes/alampuisi/pages/samples/contact.htm */
class __TwigTemplate_91921e66cc6b04769b4f9353db0664d04390c93611c916f50528eedfd8640989 extends Twig_Template
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
        echo "<div class=\"container-map\">
    <div id=\"map_canvas\"></div>
</div>

<div class=\"container-fluid main-content-box\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p>&nbsp;</p>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    <p>It takes a 15-minute drive from the property to the famed Potato Head Beach Club, and Double Six Beach. The iconic Tanah Lot Temple is reachable within a 45-minute drive. Getting to Bali Denpasar International Airport will take around 30 minutes by car.</p>
                    <p>&nbsp;</p>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"main-head-title  title-medium\">Address</div>
                        <div class=\"thin-border  title-medium\">___</div>
                        <p class=\"clearfix\">&nbsp;</p>
                        <div style=\"margin-top: 20px;\">Banjar Sembuwuk, Desa Pejeng Ubud Gianyar Denpasar – Bali 80552</div>
                        <p>&nbsp;</p>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"main-head-title  title-medium\">Phone &amp; Fax</div>
                        <div class=\"thin-border  title-medium\">___</div>
                        <p class=\"clearfix\">&nbsp;</p>
                        <div style=\"margin-top: 20px;\">
                            <strong>E</strong> <span class=\"number\">info@alampuisivilla.com</span><br />
                            <strong>P</strong> <span class=\"number\">0361 8987887 </span><br />
                            <strong>F</strong> <span class=\"number\">0361 8987885 </span><br />
                            <strong>M</strong> <span class=\"number\">081916558877 </span>
                        <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"main-head-title  title-medium\">Connect With Us</div>
                        <div class=\"thin-border  title-medium\">___</div>
                        <p class=\"clearfix\">&nbsp;</p>
                        <div style=\"margin-top: 20px;\">
                        <ul class=\"list-inline\">
                                    <li><a href=\"https://www.facebook.com/pages/The-Trans-Resort-Bali/1530547410517258?rf=513256195393338\" style=\"background-color: rgb(79, 64, 47);\"target=\"_blank\"><img src=\"";
        // line 40
        echo url("upload/icon-facebook.png");
        echo "\" width=\"28\" /></a></li>
                                    <li><a href=\"https://twitter.com/TheTransBali\" style=\"background-color: rgb(79, 64, 47);\" target=\"_blank\"><img src=\"";
        // line 41
        echo "upload/icon-twitter.png";
        echo "\" width=\"28\" /></a></li>
                                    <li><a href=\"https://plus.google.com/u/0/b/104642915593386456124/pages/settings/plus\" style=\"background-color: rgb(79, 64, 47);\" target=\"_blank\"><img src=\"";
        // line 42
        echo url("upload/icon-gplus.png");
        echo "\" width=\"28\" /></a></li>
                                    <li><a href=\"http://www.tripadvisor.com/Hotel_Review-g469404-d7368654-Reviews-The_Trans_Resort_Bali-Seminyak_Bali.html\" style=\"background-color: rgb(79, 64, 47);\" target=\"_blank\"><img src=\"";
        // line 43
        echo "upload/icon-tripadvisor.png";
        echo "\" width=\"28\" /></a></li>
                                    <li><a href=\"index.html#\" style=\"background-color: rgb(79, 64, 47);\" target=\"_blank\"><img src=\"";
        // line 44
        echo url("upload/icon-share.png");
        echo "\" width=\"28\" /></a></li>
                            </ul>
                        </div>
                    </div>

                </div>              
            </div>
        </div>
    </div>
</div>

    <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
        <script type=\"text/javascript\">
            function initialize() {
                var mapCanvas = document.getElementById('map_canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(-8.6817726112064,115.16630688095),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var iconBase = 'index.html';
                var image = {
                    url: iconBase + 'hotel.png',
                    size: new google.maps.Size(50, 50),
                    scaledSize: new google.maps.Size(50, 50)

                };
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    map: map,
                    title: 'The Trans Resort Bali',
                    icon: image
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\customcms/themes/alampuisi/pages/samples/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 44,  72 => 43,  68 => 42,  64 => 41,  60 => 40,  19 => 1,);
    }
}
/* <div class="container-map">*/
/*     <div id="map_canvas"></div>*/
/* </div>*/
/* */
/* <div class="container-fluid main-content-box">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <p>&nbsp;</p>*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                     <p>It takes a 15-minute drive from the property to the famed Potato Head Beach Club, and Double Six Beach. The iconic Tanah Lot Temple is reachable within a 45-minute drive. Getting to Bali Denpasar International Airport will take around 30 minutes by car.</p>*/
/*                     <p>&nbsp;</p>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <div class="main-head-title  title-medium">Address</div>*/
/*                         <div class="thin-border  title-medium">___</div>*/
/*                         <p class="clearfix">&nbsp;</p>*/
/*                         <div style="margin-top: 20px;">Banjar Sembuwuk, Desa Pejeng Ubud Gianyar Denpasar – Bali 80552</div>*/
/*                         <p>&nbsp;</p>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <div class="main-head-title  title-medium">Phone &amp; Fax</div>*/
/*                         <div class="thin-border  title-medium">___</div>*/
/*                         <p class="clearfix">&nbsp;</p>*/
/*                         <div style="margin-top: 20px;">*/
/*                             <strong>E</strong> <span class="number">info@alampuisivilla.com</span><br />*/
/*                             <strong>P</strong> <span class="number">0361 8987887 </span><br />*/
/*                             <strong>F</strong> <span class="number">0361 8987885 </span><br />*/
/*                             <strong>M</strong> <span class="number">081916558877 </span>*/
/*                         <p>&nbsp;</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <div class="main-head-title  title-medium">Connect With Us</div>*/
/*                         <div class="thin-border  title-medium">___</div>*/
/*                         <p class="clearfix">&nbsp;</p>*/
/*                         <div style="margin-top: 20px;">*/
/*                         <ul class="list-inline">*/
/*                                     <li><a href="https://www.facebook.com/pages/The-Trans-Resort-Bali/1530547410517258?rf=513256195393338" style="background-color: rgb(79, 64, 47);"target="_blank"><img src="{{url('upload/icon-facebook.png')}}" width="28" /></a></li>*/
/*                                     <li><a href="https://twitter.com/TheTransBali" style="background-color: rgb(79, 64, 47);" target="_blank"><img src="{{'upload/icon-twitter.png'}}" width="28" /></a></li>*/
/*                                     <li><a href="https://plus.google.com/u/0/b/104642915593386456124/pages/settings/plus" style="background-color: rgb(79, 64, 47);" target="_blank"><img src="{{url('upload/icon-gplus.png')}}" width="28" /></a></li>*/
/*                                     <li><a href="http://www.tripadvisor.com/Hotel_Review-g469404-d7368654-Reviews-The_Trans_Resort_Bali-Seminyak_Bali.html" style="background-color: rgb(79, 64, 47);" target="_blank"><img src="{{'upload/icon-tripadvisor.png'}}" width="28" /></a></li>*/
/*                                     <li><a href="index.html#" style="background-color: rgb(79, 64, 47);" target="_blank"><img src="{{url('upload/icon-share.png')}}" width="28" /></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>              */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*     <script src="https://maps.googleapis.com/maps/api/js"></script>*/
/*         <script type="text/javascript">*/
/*             function initialize() {*/
/*                 var mapCanvas = document.getElementById('map_canvas');*/
/*                 var mapOptions = {*/
/*                     center: new google.maps.LatLng(-8.6817726112064,115.16630688095),*/
/*                     zoom: 15,*/
/*                     mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                 }*/
/*                 var map = new google.maps.Map(mapCanvas, mapOptions);*/
/*                 var iconBase = 'index.html';*/
/*                 var image = {*/
/*                     url: iconBase + 'hotel.png',*/
/*                     size: new google.maps.Size(50, 50),*/
/*                     scaledSize: new google.maps.Size(50, 50)*/
/* */
/*                 };*/
/*                 var marker = new google.maps.Marker({*/
/*                     position: map.getCenter(),*/
/*                     map: map,*/
/*                     title: 'The Trans Resort Bali',*/
/*                     icon: image*/
/*                 });*/
/*             }*/
/*             google.maps.event.addDomListener(window, 'load', initialize);*/
/*         </script>*/
