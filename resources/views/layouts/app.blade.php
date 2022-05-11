<!doctype html>
<html lang="en">
<head>
    <title>منصة الشواهق العقارية</title>
    <meta charset="utf-8">
    <!--add responsive layout support-->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--include favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/fav.png')}}">
    <!--fonts include-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('front/plugins/layerslider/css/layerslider.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('front/plugins/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('front/plugins/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('front/plugins/jackbox/css/jackbox.min.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('front/css/rtl.css')}}">
    <!--[if lte IE 10]><link rel="stylesheet" type="text/css" media="screen" href="{{asset('front/css/ie.css')}}"><![endif]-->
    <!--head libs-->
    <!--[if lte IE 8]>
    <style>
        #preloader{display:none !important;}
    </style>
    <![endif]-->
    <script src="{{asset('front/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('front/js/modernizr.js')}}"></script>
</head>
<body class="sticky_menu" style="font-family: 'Cairo', sans-serif">

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="preloader"></div>
<!--layout-->
<div class="boxed_layout db_centered bg_white">
    <!--[if (lt IE 9) | IE 9]>
    <div class="bg_red" style="padding:5px 0 12px;">
        <div class="container" style="width:1170px;">
<div class="row wrapper">
<div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
    <![endif]-->
    <!--cookie-->
    <!--
    <div class="cookie">
        <div class="container">
            <div class="d_table w_full">
                <div class="d_table_cell v_align_m color_white fw_medium">
                    Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.
                </div>
                <div class="d_table_cell v_align_m color_white">
                    <a href="#" class="button_type_1 grey tr_all second_font d_block f_right fs_medium">Read More</a>
                    <button class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium m_right_3">Accept Cookies</button>
                </div>
            </div>
        </div>
    </div> -->
    <header role="banner" class="w_inherit">
        <!--top part-->
        <div class="header_middle_part type_2 t_xs_align_c">
            <div class="container">
                <div class="d_table w_full d_xs_block">
                    <div class="col-lg-4 col-md-4 col-sm-4 d_table_cell t_align_c d_xs_block f_none v_align_m m_xs_bottom_15">
                        <!--logo-->
                        <a href="/" class="d_inline_b">
                            <img src="{{asset('front/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom_part bg_white w_inherit">
            <div class="container t_align_c">
                <hr class="divider_black">
                <button id="mobile_menu_button" class="vc_child d_xs_block db_xs_centered d_none m_bottom_10 m_top_15 bg_lbrown color_white tr_all"><i class="fa fa-navicon d_inline_m"></i></button>
                <!--main menu-->
                <nav role="navigation" class="d_xs_none t_align_c t_xs_align_l">
                    <ul class="main_menu hr_list d_inline_b d_xs_block t_sm_align_l relative second_font fs_medium t_align_l">
                        <li><a href="/" class="tt_uppercase tr_delay">الرئيسية</a></li>
                        <li>
                            <a href="index.html" class="tt_uppercase tr_delay">الأقسام <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
                            <!--sub menu (second level)-->
                            <ul class="sub_menu bg_grey_light tr_all">
                                <li><a href="index_v4.html">العقارات</a></li>
                                <li><a href="index_v3.html">المنازل</a></li>
                                <li><a href="index.html">الأراضي</a></li>
                                <li><a href="index_v2.html">Royal</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="tt_uppercase tr_delay">المدن <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5"></i></a>
                            <div class="mega_menu bg_grey_light tr_all">
                                <div class="row">
                                    <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                        <h6 class="color_dark m_bottom_13"><b class="second_font ">الرياض</b></h6>
                                        <img src="{{asset('front/images/mega_menu_img_1.jpg')}}" alt="" class="m_bottom_3">
                                    </section>
                                    <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                        <h6 class="color_dark m_bottom_13"><b class="second_font ">جدة</b></h6>
                                        <img src="{{asset('front/images/mega_menu_img_2.jpg')}}" alt="" class="m_bottom_3">
                                    </section>
                                    <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                        <h6 class="color_dark m_bottom_13"><b class="second_font ">أبها</b></h6>
                                        <img src="{{asset('front/images/mega_menu_img_3.jpg')}}" alt="" class="m_bottom_3">
                                    </section>
                                    <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                        <h6 class="color_dark m_bottom_13"><b class="second_font ">مكة</b></h6>
                                        <img src="{{asset('front/images/mega_menu_img_4.jpg')}}" alt="" class="m_bottom_3">
                                    </section>
                                </div>
                            </div>
                        </li>
                        <li><a href="contact.html" class="tt_uppercase tr_delay">من نحن</a></li>
                        <li><a href="contact.html" class="tt_uppercase tr_delay">تواصل معنا</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    @yield('content')
    <!--footer-->
    <footer role="contentinfo" class="p_top_0">
        <div class="section_offset bg_grey_light_2 m_bottom_38">
            <div class="container m_bottom_13 m_top_10">
                <div class="row">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_13 m_sm_bottom_30">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">من نحن</h5>
                            <hr class="divider_bg m_bottom_25">
                            <div class="clearfix">
                                <img src="{{asset('front/images/mini_logo.jpg')}}" class="f_left m_top_10 m_right_20" alt="">
                                <p class="m_bottom_14 fw_light">عقاريتو سوق عقاري متخصص في تقديم
                                    الخدمات العقارية .يتميز بمنصة على الإنترنت تتيح للمهتمين والمستخدمين شراء وبيع
                                    والبحث عن شققهم ومنازلهم المثالية، حيث تأسست في أواخر 2019 حيث قمنا باستقطاب
                                    الطاقات الشبابية من ذوي الكفاءة العالية والاختصاص لنرتقي بخدماتنا وسعياً لتحقيق
                                    اهدافنا. ولإحداث ثورة في مجال التسويق العقاري الإلكتروني ومواكبة لرؤية 2030 في تسهيل
                                    الحياة واستثمار الوقت ومواكبة التطوّر والتقنية وفقاَ لشعارنا : #عقاريتو_سهلنا_الصعب

                                </p>
                                <a href="#" class="sc_hover second_font">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_13 m_sm_bottom_30">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">الخدمات</h5>
                            <hr class="divider_bg m_bottom_25">
                            <ul class="second_font vr_list_type_1 with_links">
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>My account</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Order history</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Wishlist</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Vendor contact</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Front page</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Categories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_13 m_sm_bottom_30">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">المعلومات</h5>
                            <hr class="divider_bg m_bottom_25">
                            <ul class="second_font vr_list_type_1 with_links">
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>About us</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>New collection</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Best sellers</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Manufacturers</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Privacy policy</a></li>
                                <li class="m_bottom_14"><a href="#" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>Terms &amp; condition</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_13 m_sm_bottom_30">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">تابعنا عبر الفايسبوك</h5>
                            <hr class="divider_bg m_bottom_15">
                            <div class="fb-page" data-href="https://www.facebook.com/kinokritik/" data-tabs="timeline" data-height="200px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kinokritik/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kinokritik/">Кинокритик</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider_black m_bottom_13">
            <div class="d_table w_full d_xs_block t_xs_align_c">
                <div class="col-lg-6 col-md-6 col-sm-6 color_light fw_light f_none d_table_cell v_align_m d_xs_block m_xs_bottom_10">
                    &copy; 2014 <a href="index.html" class="sc_hover">منصة الشواهق</a>. جميع حقوق الطبع محفوظة.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c f_none d_table_cell v_align_m d_xs_block">
                    <ul class="hr_list d_inline_b">
                        <li class="m_right_5"><img src="{{asset('front/images/payment_1.jpg')}}" alt=""></li>
                        <li class="m_right_5"><img src="{{asset('front/images/payment_2.jpg')}}" alt=""></li>
                        <li class="m_right_5"><img src="{{asset('front/images/payment_3.jpg')}}" alt=""></li>
                        <li class="m_right_5"><img src="{{asset('front/images/payment_4.jpg')}}" alt=""></li>
                        <li class="m_right_5"><img src="{{asset('front/images/payment_5.jpg')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<!--back to top-->
<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>
<button data-popup="#subscribe_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp"></button>

<!--libs include-->
<script src="{{asset('front/plugins/layerslider/js/greensock.js')}}"></script>
<script src="{{asset('front/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script src="{{asset('front/plugins/layerslider/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('front/plugins/jquery.appear.js')}}"></script>
<script src="{{asset('front/plugins/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<script src="{{asset('front/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('front/plugins/jquery.easytabs.min.js')}}"></script>
<script src="{{asset('front/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/plugins/twitter/jquery.tweet.min.js')}}"></script><script src="{{asset('front/plugins/flickr.js')}}"></script>
<script src="{{asset('front/plugins/afterresize.min.js')}}"></script>
<script src="{{asset('front/plugins/jackbox/js/jackbox-packed.min.js')}}"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid="></script>
<script src="{{asset('front/js/retina.min.js')}}"></script>
<script src="{{asset('front/plugins/colorpicker/colorpicker.js')}}"></script>
<script src="{{asset('front/js/styleswitcher.js')}}"></script>

<!--theme initializer-->
<script src="{{asset('front/js/themeCore.js')}}"></script>
<script src="{{asset('front/js/theme.js')}}"></script>
</body>
</html>
