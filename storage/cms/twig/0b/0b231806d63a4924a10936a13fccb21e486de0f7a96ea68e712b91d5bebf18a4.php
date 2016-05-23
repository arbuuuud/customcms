<?php

/* D:\xampp\htdocs\customcms/themes/alampuisi/pages/home.htm */
class __TwigTemplate_0327e9fb44e100464fc481310bf6e9ae3d08097a9303d310d2caaa025090dd25 extends Twig_Template
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
        echo "<div class=\"header-book\">
            <div class=\"container\">
                <div class=\"row visible-xs text-center box-btn-book\" id=\"box-btn-book\">
                    <div class=\"col-md-12\" style=\"background-color: #000000;\">
                        <button type=\"button\" class=\"btn btn-trans btn-lg btn-trans-red text-uppercase\" id=\"btn-show-book\"><i class=\"fa fa-bars\"></i></button>
                    </div>
                </div>
                <div class=\"row hidden-xs box-form-book\" id=\"box-form-book\">
                    <form action=\"https://book.securebookings.net/roomrate\" method=\"get\" name=\"resform\" id=\"resform\" target=\"_new\" autocomplete=\"off\">
                        <input type=\"hidden\" name=\"id\" value=\"162fac13-34df-4aef-9dfa-431370d2afc5\" />
                        <div class=\"col-md-12 book-input\">
                            <div class=\"form-inline\">
                                <div class=\"form-group form-group-book\">
                                    <div class=\"right-inner-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                        <input type=\"text\" class=\"form-control input-datepicker box-input-book\" name=\"check_in\" data-date-format=\"mm/dd/yyyy\" placeholder=\"Check-In\" />
                                    </div>
                                </div>
                                <div class=\"form-group form-group-book\">
                                    <div class=\"right-inner-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                        <input type=\"text\" class=\"form-control input-datepicker box-input-book\" name=\"check_out\" data-date-format=\"mm/dd/yyyy\" placeholder=\"Check-Out\" />
                                    </div>
                                </div>
                                <div class=\"form-group form-group-book\">
                                    <select class=\"form-control box-input-book chosen-select\" name=\"adults\" placeholder=\"Adults\">
                                        <option value=\"1\">Adults</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                    </select>
                                </div>
                                <div class=\"form-group form-group-book\">
                                    <select class=\"form-control box-input-book chosen-select\" name=\"children\" placeholder=\"Children\">
                                        <option value=\"0\">Children</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                    </select>
                                </div>
                                <div class=\"form-group form-group-book\">
                                    <select class=\"form-control box-input-book chosen-select\" name=\"rooms\" placeholder=\"Rooms\">
                                        <option value=\"1\">Rooms</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                    </select>
                                </div>
                                <div class=\"form-group form-group-book text-center\">
                                    <button type=\"submit\" class=\"btn btn-trans btn-trans-lg btn-lg btn-trans-red text-uppercase\">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
<!-- 
*******************************************************
    Main Content Template
******************************************************* 
-->
    <div class=\"container-fluid home-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"row text-center\">
                        <div class=\"home-txt-top-border\">&nbsp;</div>
                        <div class=\"home-txt-top text-uppercase\">The Trans Resort Bali</div>
                        <div class=\"home-txt-top-border\">&nbsp;</div>
<p>Situated in the middle of the lively and stylish area of Seminyak, The Trans Resort Bali offers a luxurious and elegant getaway with an outdoor swimming pool, on-site spa and wellness centre, free Wi-Fi access, and free on-site private parking for guests who drive. This property also offers free scheduled shuttle service to Seminyak Square Shopping Centre which is only a 10-minute drive away.<br /><br />It takes a 15-minute drive from the property to the famed Potato Head Beach Club, and Double Six Beach. The iconic Tanah Lot Temple is reachable within a 45-minute drive. Getting to Bali Denpasar International Airport will take around 30 minutes by car.<br /><br />Accessible by lifts, the modern and elegantly designed rooms at The Trans Resort Bali are all air-conditioned. Each one is fitted with a flat-screen cable TV, an iPod dock, wardrobe, personal safe, minibar, and an electric kettle. The en suite bathroom features bath and shower facility and free luxurious toiletries. Fresh towels and linen are provided in the room. Guests can enjoy a pool view from the balcony.<br /><br />The 24-hour front desk with concierge service can help guests with laundry and dry cleaning requests, organising airport transfer service, and babysitting service at additional charges. The property also offers meeting/banquet facility, a tour desk, luggage storage, and safety deposit box.<br /><br />The on-site The Restaurant serves a range of international dishes. Alternatively guests can order in from room service or explore the surrounding area where many restaurants and eateries can be found just a 5-minute walk away.</p>
<p><a class=\"btn btn-trans btn-trans-text-brown text-uppercase\" href=\"about-us.html\">More About Us</a></p>                  
</div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid home-slide\">
        <div class=\"row\">
            <div id=\"home-slide-box\" class=\"owl-carousel owl-theme\">
                <div class=\"item\"><img src=\"";
        // line 88
        echo "upload/home-slide-1.jpg";
        echo "\" /></div>
                <div class=\"item\"><img src=\"";
        // line 89
        echo "upload/pg-homeslide2.jpg";
        echo "\" /></div>
                <div class=\"item\"><img src=\"";
        // line 90
        echo "upload/pg-homeslide3.jpg";
        echo "\" /></div>
            </div>
            <div class=\"home-slide-overview text-center hidden-xs\">
                <div class=\"home-box-overview\">
                    <div class=\"home-overview-title\"><a href=\"room-rates.html\">Our Room</a></div>
                </div>
            </div>
            <div class=\"custom-navigation\">
                <a class=\"navigation-left home-slide-left\"><img src=\"";
        // line 98
        echo "assets/vendor/transhotel/images/nav-left.png";
        echo "\" /></a>
                <a class=\"navigation-right home-slide-right\"><img src=\"";
        // line 99
        echo "assets/vendor/transhotel/images/nav-right.png";
        echo "\" /></a>
            </div>
        </div>
    </div>

    <div class=\"container home-special-offers\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"main-head-title\">Special Offers</div>
                <div class=\"thin-border\">__</div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid home-special-offers-2\">
        <div class=\"row\">
            <div id=\"home-special-offers-box\" class=\"owl-carousel owl-theme grid\">
                <figure class=\"item effect-ruby\">
                    <img src=\"";
        // line 116
        echo "upload/medium/medium_unbeatable-deal.jpg";
        echo "\" alt=\"\" />
                    <figcaption>
                        <h2 class=\"text-uppercase\">Unbeatable Deal</h2>
                        <h2 class=\"text-uppercase h2-after\">Unbeatable Deal</h2>
                        <p>
                            &nbsp;30% Discount from Best Available Rate - Rate starts from IDR...<br /><br />
                            <a href=\"specials-offers/unbeatable-deal.html\" class=\"btn btn-trans text-uppercase\">Book Now</a>
                        </p>
                        <a href=\"specials-offers/unbeatable-deal.html\">View more</a>
                    </figcaption>
                </figure>
                <figure class=\"item effect-ruby\">
                    <img src=\"";
        // line 128
        echo "upload/medium/medium_stay-5-pay-4.jpg";
        echo "\" alt=\"\" />
                    <figcaption>
                        <h2 class=\"text-uppercase\">Stay 5 Pay 4</h2>
                        <h2 class=\"text-uppercase h2-after\">Stay 5 Pay 4</h2>
                        <p>
                            &nbsp;start from IDR 10,299,000++ for five nights&nbsp;Booking Period : Immediately to 27...<br /><br />
                            <a href=\"specials-offers/stay-5-pay-4.html\" class=\"btn btn-trans text-uppercase\">Book Now</a>
                        </p>
                        <a href=\"specials-offers/stay-5-pay-4.html\">View more</a>
                    </figcaption>
                </figure>
                <figure class=\"item effect-ruby\">
                    <img src=\"";
        // line 140
        echo "upload/medium/medium_family-deals.jpg";
        echo "\" alt=\"\" />
                    <figcaption>
                        <h2 class=\"text-uppercase\">Intimate Package</h2>
                        <h2 class=\"text-uppercase h2-after\">Intimate Package</h2>
                        <p>
                            &nbsp;start from IDR 15,799,000++&nbsp;Booking Period: Immediately to 27 December...<br /><br />
                            <a href=\"specials-offers/intimate-package.html\" class=\"btn btn-trans text-uppercase\">Book Now</a>
                        </p>
                        <a href=\"specials-offers/intimate-package.html\">View more</a>
                    </figcaption>
                </figure>
                <figure class=\"item effect-ruby\">
                    <img src=\"";
        // line 152
        echo "upload/medium/medium_TTRB-FINAL-ARTWORK-PROVIP-PACKAGE-TTRB-20-APRIL-2016-revised-1-LR-01.jpg";
        echo "\" alt=\"\" />
                    <figcaption>
                        <h2 class=\"text-uppercase\">Victorian Legal Practitioners</h2>
                        <h2 class=\"text-uppercase h2-after\">Victorian Legal Practitioners</h2>
                        <p>
                            &nbsp;start from IDR 29,990,000 NET&nbsp;The Trans Resort BALI is offering an exclusive...<br /><br />
                            <a href=\"specials-offers/victorian-legal-practitioners.html\" class=\"btn btn-trans text-uppercase\">Book Now</a>
                        </p>
                        <a href=\"specials-offers/victorian-legal-practitioners.html\">View more</a>
                    </figcaption>
                </figure>
                <figure class=\"item effect-ruby\">
                    <img src=\"";
        // line 164
        echo "upload/medium/medium_advance-purchase.jpg";
        echo "\" alt=\"\" />
                    <figcaption>
                        <h2 class=\"text-uppercase\">Advance Purchase</h2>
                        <h2 class=\"text-uppercase h2-after\">Advance Purchase</h2>
                        <p>
                            &nbsp;45% Discount from Best Available Rate - Rate starts from IDR...<br /><br />
                            <a href=\"specials-offers/advance-purchase.html\" class=\"btn btn-trans text-uppercase\">Book Now</a>
                        </p>
                        <a href=\"specials-offers/advance-purchase.html\">View more</a>
                    </figcaption>
                </figure>
                <figure class=\"item effect-ruby\">
                    <img src=\"";
        // line 176
        echo "upload/medium/medium_last-minute-promo.jpg";
        echo "\" alt=\"\" />
                    <figcaption>
                        <h2 class=\"text-uppercase\">Room Only</h2>
                        <h2 class=\"text-uppercase h2-after\">Room Only</h2>
                        <p>
                            &nbsp;30% Discount from Best Available Rate - Rate starts from IDR...<br /><br />
                            <a href=\"specials-offers/room-only.html\" class=\"btn btn-trans text-uppercase\">Book Now</a>
                        </p>
                        <a href=\"specials-offers/room-only.html\">View more</a>
                    </figcaption>
                </figure>
            </div>
            <div class=\"custom-navigation custom-navigation-2\">
                <a class=\"navigation-left home-special-offers-left\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"navigation-right home-special-offers-right\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
    </div>

    <div class=\"container-fluid main-ruler\">&nbsp;</div>

    <div class=\"container home-event\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"main-head-title\">Event</div>
                <div class=\"thin-border\">__</div>
            </div>
        </div>
        <div class=\"row home-event-list\">
                        <div class=\"col-md-6\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <div class=\"media-date\">
                            <div class=\"day\">2</div>
                            <div class=\"month text-uppercase\">Feb</div>
                        </div>
                    </div>
                    <div class=\"media-body\">
                        <a href=\"detailpost/the-seven-stars-luxury-hospitality-and-lifestyle-awards.html\"><h4 class=\"media-heading\">The Seven Stars Luxury Hospitality and Lifestyle Awards</h4></a>
                        The Seven Stars Luxury Hospitality and Lifestyle Awards shined bright at the...
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <div class=\"media-date\">
                            <div class=\"day\">2</div>
                            <div class=\"month text-uppercase\">Feb</div>
                        </div>
                    </div>
                    <div class=\"media-body\">
                        <a href=\"detailpost/miss-bali-tropix.html\"><h4 class=\"media-heading\">Miss Bali Tropix</h4></a>
                        SATURDAY, 26 SEPTEMBER 2015
Miss Bali Tropix official &ldquo;Ties and...
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"col-md-12 text-uppercase text-center link-event\">
                <a href=\"category/event.html\">Read All Event</a>
            </div>
        </div>
    </div>

    <div class=\"container-fluid home-gallery main-ruler\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"main-head-title\">Gallery</div>
                    <div class=\"thin-border\">__</div>
                </div>
            </div>
            <div class=\"row home-gallery-list\">
                <div class=\"col-md-3 col-sm-6 col-xs-6 home-gal-box-img\">
                    <a href=\"";
        // line 251
        echo "upload/full_presidential-villa_bedroom.jpg";
        echo "\" rel=\"prettyPhoto[pp_gal]\"><img src=\"";
        echo "upload/medium/medium_full_presidential-villa_bedroom.jpg";
        echo "\" class=\"img-responsive\" /></a>
                </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-6 home-gal-box-img\">
                    <a href=\"";
        // line 254
        echo "upload/full_room-celebrity-suite-bedroom.jpg";
        echo "\" rel=\"prettyPhoto[pp_gal]\"><img src=\"";
        echo "upload/medium/medium_full_room-celebrity-suite-bedroom.jpg";
        echo "\" class=\"img-responsive\" /></a>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-6 home-gal-box-img\">
                    <a href=\"";
        // line 257
        echo "upload/full_presidential-villa_livingroom.jpg";
        echo "\" rel=\"prettyPhoto[pp_gal]\"><img src=\"";
        echo "upload/medium/medium_full_presidential-villa_livingroom.jpg";
        echo "\" class=\"img-responsive\" /></a>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-6 home-gal-box-img\">
                    <a href=\"";
        // line 260
        echo "upload/full_room-premier-room-twin-bed.jpg";
        echo "\" rel=\"prettyPhoto[pp_gal]\"><img src=\"";
        echo "upload/medium/medium_full_room-premier-room-twin-bed.jpg";
        echo "\" class=\"img-responsive\" /></a>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"col-md-12 text-uppercase text-center link-event\">
                    <a href=\"album.html\">See More</a>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\customcms/themes/alampuisi/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 260,  320 => 257,  312 => 254,  304 => 251,  226 => 176,  211 => 164,  196 => 152,  181 => 140,  166 => 128,  151 => 116,  131 => 99,  127 => 98,  116 => 90,  112 => 89,  108 => 88,  19 => 1,);
    }
}
/* <div class="header-book">*/
/*             <div class="container">*/
/*                 <div class="row visible-xs text-center box-btn-book" id="box-btn-book">*/
/*                     <div class="col-md-12" style="background-color: #000000;">*/
/*                         <button type="button" class="btn btn-trans btn-lg btn-trans-red text-uppercase" id="btn-show-book"><i class="fa fa-bars"></i></button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row hidden-xs box-form-book" id="box-form-book">*/
/*                     <form action="https://book.securebookings.net/roomrate" method="get" name="resform" id="resform" target="_new" autocomplete="off">*/
/*                         <input type="hidden" name="id" value="162fac13-34df-4aef-9dfa-431370d2afc5" />*/
/*                         <div class="col-md-12 book-input">*/
/*                             <div class="form-inline">*/
/*                                 <div class="form-group form-group-book">*/
/*                                     <div class="right-inner-addon">*/
/*                                         <i class="fa fa-calendar"></i>*/
/*                                         <input type="text" class="form-control input-datepicker box-input-book" name="check_in" data-date-format="mm/dd/yyyy" placeholder="Check-In" />*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group form-group-book">*/
/*                                     <div class="right-inner-addon">*/
/*                                         <i class="fa fa-calendar"></i>*/
/*                                         <input type="text" class="form-control input-datepicker box-input-book" name="check_out" data-date-format="mm/dd/yyyy" placeholder="Check-Out" />*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group form-group-book">*/
/*                                     <select class="form-control box-input-book chosen-select" name="adults" placeholder="Adults">*/
/*                                         <option value="1">Adults</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                         <option value="4">4</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                                 <div class="form-group form-group-book">*/
/*                                     <select class="form-control box-input-book chosen-select" name="children" placeholder="Children">*/
/*                                         <option value="0">Children</option>*/
/*                                         <option value="0">0</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                         <option value="4">4</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                                 <div class="form-group form-group-book">*/
/*                                     <select class="form-control box-input-book chosen-select" name="rooms" placeholder="Rooms">*/
/*                                         <option value="1">Rooms</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                         <option value="4">4</option>*/
/*                                         <option value="5">5</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                                 <div class="form-group form-group-book text-center">*/
/*                                     <button type="submit" class="btn btn-trans btn-trans-lg btn-lg btn-trans-red text-uppercase">Book Now</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/* <!-- */
/* ********************************************************/
/*     Main Content Template*/
/* ******************************************************* */
/* -->*/
/*     <div class="container-fluid home-box">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="row text-center">*/
/*                         <div class="home-txt-top-border">&nbsp;</div>*/
/*                         <div class="home-txt-top text-uppercase">The Trans Resort Bali</div>*/
/*                         <div class="home-txt-top-border">&nbsp;</div>*/
/* <p>Situated in the middle of the lively and stylish area of Seminyak, The Trans Resort Bali offers a luxurious and elegant getaway with an outdoor swimming pool, on-site spa and wellness centre, free Wi-Fi access, and free on-site private parking for guests who drive. This property also offers free scheduled shuttle service to Seminyak Square Shopping Centre which is only a 10-minute drive away.<br /><br />It takes a 15-minute drive from the property to the famed Potato Head Beach Club, and Double Six Beach. The iconic Tanah Lot Temple is reachable within a 45-minute drive. Getting to Bali Denpasar International Airport will take around 30 minutes by car.<br /><br />Accessible by lifts, the modern and elegantly designed rooms at The Trans Resort Bali are all air-conditioned. Each one is fitted with a flat-screen cable TV, an iPod dock, wardrobe, personal safe, minibar, and an electric kettle. The en suite bathroom features bath and shower facility and free luxurious toiletries. Fresh towels and linen are provided in the room. Guests can enjoy a pool view from the balcony.<br /><br />The 24-hour front desk with concierge service can help guests with laundry and dry cleaning requests, organising airport transfer service, and babysitting service at additional charges. The property also offers meeting/banquet facility, a tour desk, luggage storage, and safety deposit box.<br /><br />The on-site The Restaurant serves a range of international dishes. Alternatively guests can order in from room service or explore the surrounding area where many restaurants and eateries can be found just a 5-minute walk away.</p>*/
/* <p><a class="btn btn-trans btn-trans-text-brown text-uppercase" href="about-us.html">More About Us</a></p>                  */
/* </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid home-slide">*/
/*         <div class="row">*/
/*             <div id="home-slide-box" class="owl-carousel owl-theme">*/
/*                 <div class="item"><img src="{{'upload/home-slide-1.jpg'}}" /></div>*/
/*                 <div class="item"><img src="{{'upload/pg-homeslide2.jpg'}}" /></div>*/
/*                 <div class="item"><img src="{{'upload/pg-homeslide3.jpg'}}" /></div>*/
/*             </div>*/
/*             <div class="home-slide-overview text-center hidden-xs">*/
/*                 <div class="home-box-overview">*/
/*                     <div class="home-overview-title"><a href="room-rates.html">Our Room</a></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="custom-navigation">*/
/*                 <a class="navigation-left home-slide-left"><img src="{{'assets/vendor/transhotel/images/nav-left.png'}}" /></a>*/
/*                 <a class="navigation-right home-slide-right"><img src="{{'assets/vendor/transhotel/images/nav-right.png'}}" /></a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container home-special-offers">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="main-head-title">Special Offers</div>*/
/*                 <div class="thin-border">__</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid home-special-offers-2">*/
/*         <div class="row">*/
/*             <div id="home-special-offers-box" class="owl-carousel owl-theme grid">*/
/*                 <figure class="item effect-ruby">*/
/*                     <img src="{{'upload/medium/medium_unbeatable-deal.jpg'}}" alt="" />*/
/*                     <figcaption>*/
/*                         <h2 class="text-uppercase">Unbeatable Deal</h2>*/
/*                         <h2 class="text-uppercase h2-after">Unbeatable Deal</h2>*/
/*                         <p>*/
/*                             &nbsp;30% Discount from Best Available Rate - Rate starts from IDR...<br /><br />*/
/*                             <a href="specials-offers/unbeatable-deal.html" class="btn btn-trans text-uppercase">Book Now</a>*/
/*                         </p>*/
/*                         <a href="specials-offers/unbeatable-deal.html">View more</a>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <figure class="item effect-ruby">*/
/*                     <img src="{{'upload/medium/medium_stay-5-pay-4.jpg'}}" alt="" />*/
/*                     <figcaption>*/
/*                         <h2 class="text-uppercase">Stay 5 Pay 4</h2>*/
/*                         <h2 class="text-uppercase h2-after">Stay 5 Pay 4</h2>*/
/*                         <p>*/
/*                             &nbsp;start from IDR 10,299,000++ for five nights&nbsp;Booking Period : Immediately to 27...<br /><br />*/
/*                             <a href="specials-offers/stay-5-pay-4.html" class="btn btn-trans text-uppercase">Book Now</a>*/
/*                         </p>*/
/*                         <a href="specials-offers/stay-5-pay-4.html">View more</a>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <figure class="item effect-ruby">*/
/*                     <img src="{{'upload/medium/medium_family-deals.jpg'}}" alt="" />*/
/*                     <figcaption>*/
/*                         <h2 class="text-uppercase">Intimate Package</h2>*/
/*                         <h2 class="text-uppercase h2-after">Intimate Package</h2>*/
/*                         <p>*/
/*                             &nbsp;start from IDR 15,799,000++&nbsp;Booking Period: Immediately to 27 December...<br /><br />*/
/*                             <a href="specials-offers/intimate-package.html" class="btn btn-trans text-uppercase">Book Now</a>*/
/*                         </p>*/
/*                         <a href="specials-offers/intimate-package.html">View more</a>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <figure class="item effect-ruby">*/
/*                     <img src="{{'upload/medium/medium_TTRB-FINAL-ARTWORK-PROVIP-PACKAGE-TTRB-20-APRIL-2016-revised-1-LR-01.jpg'}}" alt="" />*/
/*                     <figcaption>*/
/*                         <h2 class="text-uppercase">Victorian Legal Practitioners</h2>*/
/*                         <h2 class="text-uppercase h2-after">Victorian Legal Practitioners</h2>*/
/*                         <p>*/
/*                             &nbsp;start from IDR 29,990,000 NET&nbsp;The Trans Resort BALI is offering an exclusive...<br /><br />*/
/*                             <a href="specials-offers/victorian-legal-practitioners.html" class="btn btn-trans text-uppercase">Book Now</a>*/
/*                         </p>*/
/*                         <a href="specials-offers/victorian-legal-practitioners.html">View more</a>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <figure class="item effect-ruby">*/
/*                     <img src="{{'upload/medium/medium_advance-purchase.jpg'}}" alt="" />*/
/*                     <figcaption>*/
/*                         <h2 class="text-uppercase">Advance Purchase</h2>*/
/*                         <h2 class="text-uppercase h2-after">Advance Purchase</h2>*/
/*                         <p>*/
/*                             &nbsp;45% Discount from Best Available Rate - Rate starts from IDR...<br /><br />*/
/*                             <a href="specials-offers/advance-purchase.html" class="btn btn-trans text-uppercase">Book Now</a>*/
/*                         </p>*/
/*                         <a href="specials-offers/advance-purchase.html">View more</a>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <figure class="item effect-ruby">*/
/*                     <img src="{{'upload/medium/medium_last-minute-promo.jpg'}}" alt="" />*/
/*                     <figcaption>*/
/*                         <h2 class="text-uppercase">Room Only</h2>*/
/*                         <h2 class="text-uppercase h2-after">Room Only</h2>*/
/*                         <p>*/
/*                             &nbsp;30% Discount from Best Available Rate - Rate starts from IDR...<br /><br />*/
/*                             <a href="specials-offers/room-only.html" class="btn btn-trans text-uppercase">Book Now</a>*/
/*                         </p>*/
/*                         <a href="specials-offers/room-only.html">View more</a>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*             </div>*/
/*             <div class="custom-navigation custom-navigation-2">*/
/*                 <a class="navigation-left home-special-offers-left"><i class="fa fa-angle-left"></i></a>*/
/*                 <a class="navigation-right home-special-offers-right"><i class="fa fa-angle-right"></i></a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid main-ruler">&nbsp;</div>*/
/* */
/*     <div class="container home-event">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="main-head-title">Event</div>*/
/*                 <div class="thin-border">__</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row home-event-list">*/
/*                         <div class="col-md-6">*/
/*                 <div class="media">*/
/*                     <div class="media-left">*/
/*                         <div class="media-date">*/
/*                             <div class="day">2</div>*/
/*                             <div class="month text-uppercase">Feb</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <a href="detailpost/the-seven-stars-luxury-hospitality-and-lifestyle-awards.html"><h4 class="media-heading">The Seven Stars Luxury Hospitality and Lifestyle Awards</h4></a>*/
/*                         The Seven Stars Luxury Hospitality and Lifestyle Awards shined bright at the...*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="media">*/
/*                     <div class="media-left">*/
/*                         <div class="media-date">*/
/*                             <div class="day">2</div>*/
/*                             <div class="month text-uppercase">Feb</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <a href="detailpost/miss-bali-tropix.html"><h4 class="media-heading">Miss Bali Tropix</h4></a>*/
/*                         SATURDAY, 26 SEPTEMBER 2015*/
/* Miss Bali Tropix official &ldquo;Ties and...*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             <div class="col-md-12 text-uppercase text-center link-event">*/
/*                 <a href="category/event.html">Read All Event</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid home-gallery main-ruler">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="main-head-title">Gallery</div>*/
/*                     <div class="thin-border">__</div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row home-gallery-list">*/
/*                 <div class="col-md-3 col-sm-6 col-xs-6 home-gal-box-img">*/
/*                     <a href="{{'upload/full_presidential-villa_bedroom.jpg'}}" rel="prettyPhoto[pp_gal]"><img src="{{'upload/medium/medium_full_presidential-villa_bedroom.jpg'}}" class="img-responsive" /></a>*/
/*                 </div>*/
/*                     <div class="col-md-3 col-sm-6 col-xs-6 home-gal-box-img">*/
/*                     <a href="{{'upload/full_room-celebrity-suite-bedroom.jpg'}}" rel="prettyPhoto[pp_gal]"><img src="{{'upload/medium/medium_full_room-celebrity-suite-bedroom.jpg'}}" class="img-responsive" /></a>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6 col-xs-6 home-gal-box-img">*/
/*                     <a href="{{'upload/full_presidential-villa_livingroom.jpg'}}" rel="prettyPhoto[pp_gal]"><img src="{{'upload/medium/medium_full_presidential-villa_livingroom.jpg'}}" class="img-responsive" /></a>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6 col-xs-6 home-gal-box-img">*/
/*                     <a href="{{'upload/full_room-premier-room-twin-bed.jpg'}}" rel="prettyPhoto[pp_gal]"><img src="{{'upload/medium/medium_full_room-premier-room-twin-bed.jpg'}}" class="img-responsive" /></a>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*                 <div class="col-md-12 text-uppercase text-center link-event">*/
/*                     <a href="album.html">See More</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
