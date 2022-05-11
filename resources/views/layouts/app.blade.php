<!doctype html>
<html lang="en">
<head>
    <title>CosyOne - Home</title>
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
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900|Lato:400,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,400,400italic,600,600italic,900,900italic,700,700italic' rel='stylesheet' type='text/css'>
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
<body class="sticky_menu">

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
                        <li>
                            <a href="index.html" class="tt_uppercase tr_delay">Home <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5"></i></a>
                            <!--sub menu (second level)-->
                            <ul class="sub_menu bg_grey_light tr_all">
                                <li><a href="index.html">Home v1</a></li>
                                <li><a href="index_v2.html">Home v2</a></li>
                                <li><a href="index_v3.html">Home v3</a></li>
                                <li><a href="index_v4.html">Home v4</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.html" class="tt_uppercase tr_delay">Sliders <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
                            <!--sub menu (second level)-->
                            <ul class="sub_menu bg_grey_light tr_all">
                                <li><a href="index_v4.html">Revolution</a></li>
                                <li><a href="index_v3.html">Flex</a></li>
                                <li><a href="index.html">Layer</a></li>
                                <li><a href="index_v2.html">Royal</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="tt_uppercase tr_delay">Shop <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5"></i></a>
                            <div class="mega_menu bg_grey_light tr_all">
                                <div class="row">
                                    <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                        <h6 class="color_dark m_bottom_13"><b class="second_font ">Living Rooms</b></h6>
                                        <img src="images/mega_menu_img_1.jpg" alt="" class="m_bottom_3">
                                        <ul class="mega_menu_list">
                                            <li><a href="#" class="d_block sc_hover tr_delay">Sofas</a></li>
                                            <li><a href="#" class="d_block sc_hover tr_delay">Chairs</a></li>
                                            <li><a href="#" class="d_block sc_hover tr_delay">Ottomans</a></li>
                                        </ul>
                                    </section>
                                    <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                        <h6 class="color_dark m_bottom_13"><b class="second_font ">Bedrooms</b></h6>
                                        <img src="images/mega_menu_img_2.jpg" alt="" class="m_bottom_3">
                                        <ul class="mega_menu_list">
                                            <li><a href="#" class="d_block sc_hover tr_delay">Beds</a></li>
                                            <li><a href="#" class="d_block sc_hover tr_delay">Dressers/Chests</a></li>
                                            <li><a href="#" class="d_block sc_hover tr_delay">Nightstands</a></li>
                                        </ul>
                                    </section>
                                    <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                        <h6 class="color_dark m_bottom_13"><b class="second_font ">Dining Rooms</b></h6>
                                        <img src="images/mega_menu_img_3.jpg" alt="" class="m_bottom_3">
                                        <ul class="mega_menu_list">
                                            <li><a href="#" class="d_block sc_hover tr_delay">Tables</a></li>
                                            <li><a href="#" class="d_block sc_hover tr_delay">Dining Chairs</a></li>
                                            <li><a href="#" class="d_block sc_hover tr_delay">China Cabinets</a></li>
                                        </ul>
                                    </section>
                                    <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                        <h6 class="color_dark m_bottom_13"><b class="second_font ">Home Office</b></h6>
                                        <img src="images/mega_menu_img_4.jpg" alt="" class="m_bottom_3">
                                        <ul class="mega_menu_list">
                                            <li><a href="#" class="d_block sc_hover tr_delay">Desks &amp; Tables</a></li>
                                            <li><a href="#" class="d_block sc_hover tr_delay">Office Chairs</a></li>
                                            <li><a href="#" class="d_block sc_hover tr_delay">Workspace Storage</a></li>
                                        </ul>
                                    </section>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="portfolio_1_column_with_sidebar.html" class="tt_uppercase tr_delay">Portfolio <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
                            <!--sub menu (second level)-->
                            <ul class="sub_menu bg_grey_light tr_all">
                                <li>
                                    <a href="portfolio_1_column_with_sidebar.html">Grid</a>
                                    <!--sub menu (third level)-->
                                    <ul class="sub_menu bg_grey_light tr_all">
                                        <li><a href="portfolio_1_column_with_sidebar.html">1 column with sidebar</a></li>
                                        <li><a href="portfolio_2_columns.html">2 columns</a></li>
                                        <li><a href="portfolio_3_columns.html">3 columns</a></li>
                                        <li><a href="portfolio_3_columns_with_sidebar.html">3 columns with sidebar</a></li>
                                        <li><a href="portfolio_4_columns.html">4 columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="portfolio_masonry.html">Masonry</a>
                                    <!--sub menu (third level)-->
                                    <ul class="sub_menu bg_grey_light tr_all">
                                        <li><a href="portfolio_masonry.html">Masonry</a></li>
                                        <li><a href="portfolio_masonry_full_width.html">Full width masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="portfolio_single_project_v1.html">Single project pages</a>
                                    <!--sub menu (third level)-->
                                    <ul class="sub_menu bg_grey_light tr_all">
                                        <li><a href="portfolio_single_project_v1.html">Single project page v1</a></li>
                                        <li><a href="portfolio_single_project_v2.html">Single project page v2</a></li>
                                        <li><a href="portfolio_single_project_v3.html">Single project page v3</a></li>
                                        <li><a href="portfolio_single_project_video_list.html">Single project with video list</a></li>
                                        <li><a href="portfolio_single_project_video_slider.html">Single project with video slider</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="pages_category_grid.html" class="tt_uppercase tr_delay">Pages <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
                            <ul class="sub_menu bg_grey_light tr_all">
                                <li><a href="pages_category_grid.html">Category page v1</a></li>
                                <li><a href="pages_category_list.html">Category page v2</a></li>
                                <li><a href="pages_deals_of_the_day.html">Category page v3</a></li>
                                <li><a href="pages_product_v1.html">Product page v1</a></li>
                                <li><a href="pages_product_v2.html">Product page v2</a></li>
                                <li><a href="pages_product_v3.html">Product page v3</a></li>
                                <li><a href="pages_wishlist.html">Wishlist</a></li>
                                <li><a href="pages_compare_products.html">Compare</a></li>
                                <li><a href="pages_shopping_cart.html">Shopping cart</a></li>
                                <li><a href="pages_checkout.html">Checkout</a></li>
                                <li><a href="pages_manufacturers.html">Manufacturers</a></li>
                                <li><a href="pages_manufacturer.html">Manufacturer page</a></li>
                                <li><a href="pages_orders_list.html">Orders list</a></li>
                                <li><a href="pages_order_page.html">Order page</a></li>
                                <li><a href="pages_about.html">About us</a></li>
                                <li><a href="page_404.html">404 page</a></li>
                            </ul>
                        </li>
                        <li class="current">
                            <a href="features_elements.html" class="tt_uppercase tr_delay">Features <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
                            <ul class="sub_menu bg_grey_light tr_all">
                                <li><a href="features_elements.html">Elements</a></li>
                                <li><a href="features_typography.html">Typography</a></li>
                                <li><a href="features_columns.html">Columns</a></li>
                                <li class="current"><a href="index_rtl.html">Rtl layout</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html" class="tt_uppercase tr_delay">Blog <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
                            <ul class="sub_menu bg_grey_light tr_all">
                                <li><a href="blog.html">Blog page</a></li>
                                <li><a href="blog_post.html">Blog post</a></li>
                                <li><a href="blog_post_video.html">Blog video post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" class="tt_uppercase tr_delay">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--layerslider-->
    <div class="layerslider" style="width:100%;height:550px;">
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="{{asset('front/images/1140x550_slide1.jpg')}}" alt="" class="ls-bg">
            <!--slide layers-->
            <p class="ls-l color_white fw_light tt_uppercase" style="left:50%;top:171px;font-size:1.285em;" data-ls="offsetxin:0; offsetyin:120; delayin:400;easingin:easeOutBack;durationin:700;">SMART IDEAS</p>
            <h1 class="ls-l color_white second_font tt_uppercase t_align_c" style="left:50%;top:213px;font-size:4.285em;line-height:.94em; white-space: nowrap;" data-ls="offsetxin:0; offsetyin:0; rotatein:360;scalexin:0.5;scaleyin:0.5; delayin:800;easingin:easeOutBack;durationin:700;"><b>YOUR SMARTPHONE LIVES HERE</b></h1>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent slider_button color_white tt_uppercase fw_light" style="left:50%;font-size:1.428em;top:315px;" data-ls="offsetxin:0; offsetyin:120;delayin:1100;easingin:easeOutBack;durationin:700;">SHOP NOW!</a>
        </div>
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="{{asset('front/images/1980x550_slide2.jpg')}}" alt="" class="ls-bg">
            <!--slide layers-->
            <div class="ls-l circle bg_scheme_color color_white slider_label vc_child t_align_c" style="left:56%; top:50px;" data-ls="scalexin:0.5;offsetxin:0;delayin:200;easingin:easeOutBack;durationin:700;">
                <div class="d_inline_m second_font" style="line-height:1.8em;">
                    <b style="font-size:2.142em;">-25%</b>
                </div>
            </div>
            <p class="ls-l color_orange fw_light tt_uppercase" style="left:75%;top:105px;font-size:1.285em;" data-ls="offsetxin:0; offsetyin:120;delayin:400;easingin:easeOutBack;durationin:700;">HOT DEAL</p>
            <h1 class="ls-l scheme_color second_font tt_uppercase t_align_c" style="left:75%;top:145px;font-size:4.285em;line-height:.94em;" data-ls="offsetxin:0; offsetyin:120;delayin:600;easingin:easeOutBack;durationin:700;"><b>BIG. SLIM.</b><br> <b>WATERPROOF.</b></h1>
            <p class="ls-l fw_light" style="left:75%;top:275px;font-size:30px;" data-ls="offsetxin:0; offsetyin:120;delayin:400;easingin:easeOutBack;durationin:700;"><b style="color:#d94737;">$199.00</b></p>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent color_orange slider_button color_white tt_uppercase fw_light" style="left:75%;font-size:1.428em;top:365px;" data-ls="offsetxin:0; offsetyin:120;delayin:800;easingin:easeOutBack;durationin:700;">BUY NOW!</a>
        </div>
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="{{asset('front/images/1980x550_slide1.jpg')}}" alt="" class="ls-bg">
            <!--slide layers-->
            <p class="ls-l color_orange fw_light tt_uppercase" style="left:100px;top:171px;font-size:1.285em;" data-ls="offsetxin:0; offsetyin:120; delayin:400;easingin:easeOutBack;durationin:700;">SHAPES, SIZES AND STYLES</p>
            <h1 class="ls-l scheme_color second_font tt_uppercase t_align_l" style="left:100px;top:213px;font-size:4.285em;line-height:.94em;" data-ls="offsetxin:0; offsetyin:0; rotatein:360;scalexin:0.5;scaleyin:0.5; delayin:800;easingin:easeOutBack;durationin:700;"><b>BIGGER</b> <br> <span class="fw_light">THAN</span> <b>EVER</b></h1>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent slider_button color_orange tt_uppercase fw_light" style="left:100px;font-size:1.428em;top:355px;" data-ls="offsetxin:0; offsetyin:120;delayin:1100;easingin:easeOutBack;durationin:700;">Find It Here</a>
        </div>
    </div>
    <!--main content-->
    <section class="section_offset hidden animated p_bottom_0 m_bottom_0" data-animation="fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--banner-->
                    <figure class="relative wrapper scale_image_container m_bottom_30 r_image_container">
                        <img src="{{asset('front/images/home_v2_img_1.jpg')}}" alt="" class="tr_all scale_image">
                        <!--caption-->
                        <figcaption class="caption_type_1 tr_all">
                            <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                                MUST HAVE
                            </div>
                            <div class="caption_inner">
                                <h3 class="color_white second_font fw_light m_bottom_5 fs_sm_default"><a href="#" class="color_orange color_white_hover">DRESS UP</a> YOUR PHONE!</h3>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--banner-->
                    <figure class="relative wrapper scale_image_container m_bottom_30 r_image_container">
                        <img src="{{asset('front/images/home_v2_img_2.jpg')}}" alt="" class="tr_all scale_image">
                        <!--caption-->
                        <figcaption class="caption_type_1 tr_all">
                            <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                                NEW PRICE
                            </div>
                            <div class="caption_inner">
                                <h3 class="color_white second_font fw_light m_bottom_5 fs_sm_default">NOW $70 LESS. <a href="#" class="color_orange color_white_hover">Shop Now!</a></h3>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--banner-->
                    <figure class="relative wrapper scale_image_container m_bottom_30 r_image_container">
                        <img src="{{asset('front/images/home_v2_img_3.jpg')}}" alt="" class="tr_all scale_image">
                        <!--caption-->
                        <figcaption class="caption_type_1 tr_all">
                            <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                                STYLISH TECHNOLOGY
                            </div>
                            <div class="caption_inner">
                                <h3 class="color_white second_font fw_light m_bottom_5 fs_sm_default">DUAL PROTECTION. <a href="#" class="color_orange color_white_hover">Read More</a></h3>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--new products-->
    <div class="section_offset p_bottom_0 m_bottom_0">
        <div class="container">
            <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInDown">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 v_align_m d_table_cell f_none">
                    <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">New</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 t_align_r d_table_cell f_none">
                    <!--carousel navigation-->
                    <div class="clearfix d_inline_b">
                        <button class="new_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                        <button class="new_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                    </div>
                </div>
            </div>
            <hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInDown" data-animation-delay="100">
            <div class="row">
                <div class="owl-carousel" data-nav="new_" data-owl-carousel-options='{
									"stagePadding" : 15,
									"margin" : 30,
									"responsive" : {
											"0" : {
												"items" : 1
											},
											"320" : {
												"items" : 2
											},
											"550" : {
												"items" : 3
											},
											"992" : {
												"items" : 6
											}
										}
									}'>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="200">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="{{asset('front/images/new_img_1.jpg')}}" alt="" class="c_image_1 tr_all">
                                <img src="{{asset('front/images/new_img_8.jpg')}}" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Modern Metallic Phone</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Sample brand</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$900.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="350">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_2.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_7.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Premium Leather Phone</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Sample brand</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$400.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="500">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_3.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_6.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Striped Phone</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Forty Feel</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$199.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="650">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_4.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_5.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Round Cell</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Ksenond</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$1,177.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="800">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_9.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_10.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Green Cosy Cell</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Sample brand</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$235.83</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="950">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_11.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_12.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Master Cover</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Coresenta</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$119.50</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="1100">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_13.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_14.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Creative Design Phone</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Forty Feel</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$237.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_offset p_bottom_0">
        <div class="container">
            <hr class="divider_lbrown m_bottom_25 animated hidden" data-animation="fadeInDown">
            <div class="row sh_container">
                <div class="col-lg-4 col-md-4 col-sm-4 same_height animated hidden" data-animation="fadeInDown">
                    <section class="item_represent relative m_bottom_25 m_xs_bottom_30 h_inherit t_sm_align_c">
                        <!--icon-->
                        <div class="d_inline_m m_sm_bottom_15 m_sm_right_0 bg_lbrown color_white m_right_17 icon_wrap_1 t_align_c vc_child"><i class="fa fa-lock d_inline_m"></i></div>
                        <!--description-->
                        <div class="d_inline_m description w_sm_full">
                            <h3 class="second_font color_dark m_bottom_10">Safe &amp; Secure</h3>
                            <p class="fw_light m_bottom_10">Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue.</p>
                            <a href="#" class="sc_hover second_font">Click Here to Read More</a>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 same_height animated hidden" data-animation="fadeInDown" data-animation-delay="150">
                    <section class="item_represent with_divider relative m_bottom_25 m_xs_bottom_30 h_inherit t_sm_align_c">
                        <!--icon-->
                        <div class="d_inline_m m_sm_bottom_15 m_sm_right_0 bg_lbrown color_white m_right_17 icon_wrap_1 t_align_c vc_child"><i class="fa fa-truck d_inline_m"></i></div>
                        <!--description-->
                        <div class="d_inline_m description">
                            <h3 class="second_font color_dark m_bottom_10">Free Delivery</h3>
                            <p class="fw_light m_bottom_10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maurisfermentum dictum.</p>
                            <a href="#" class="sc_hover second_font">Click Here to Read More</a>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 same_height animated hidden" data-animation="fadeInDown" data-animation-delay="300">
                    <section class="item_represent with_divider relative m_bottom_25 m_xs_bottom_30 h_inherit t_sm_align_c">
                        <!--icon-->
                        <div class="d_inline_m m_sm_bottom_15 m_sm_right_0 bg_lbrown color_white m_right_17 icon_wrap_1 t_align_c vc_child"><i class="fa fa-certificate d_inline_m"></i></div>
                        <!--description-->
                        <div class="d_inline_m description">
                            <h3 class="second_font color_dark m_bottom_10">Money Back Guarantee</h3>
                            <p class="fw_light m_bottom_10">Etiam cursus leo vel metus. Nulla facilisi aenean nac eros. Vestibulum ante ipsum.</p>
                            <a href="#" class="sc_hover second_font">Click Here to Read More</a>
                        </div>
                    </section>
                </div>
            </div>
            <hr class="divider_lbrown m_bottom_0 animated hidden" data-animation="fadeInDown">
        </div>
    </div>
    <!--brands carousel-->
    <div class="section_offset p_bottom_0 m_bottom_0">
        <section class="container m_bottom_10">
            <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInLeft">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 v_align_m d_table_cell f_none">
                    <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">Brands</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 t_align_r d_table_cell f_none">
                    <!--carousel navigation-->
                    <div class="clearfix d_inline_b">
                        <button class="brands_carousel_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                        <button class="brands_carousel_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                    </div>
                </div>
            </div>
            <hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInLeft" data-animation-delay="100">
            <!--carousel-->
            <div class="row">
                <div class="owl-carousel" data-nav="brands_carousel_"
                     data-owl-carousel-options='{
								"stagePadding" : 15,
								"margin" : 30,
								"responsive" : {
										"0" : {
											"items" : 2
										},
										"320" : {
											"items" : 3
										},
										"550" : {
											"items" : 4
										},
										"768" : {
											"items" : 4
										},
										"992" : {
											"items" : 5
										},
										"1200" : {
											"items" : 6
										}
									}
								}'>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="200">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="350">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_2.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="500">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_3.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="650">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_4.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="800">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_5.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="950">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_6.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="1100">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="1250">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_2.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="1400">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_3.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="1550">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_4.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="1700">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_5.jpg" alt="">
                        </a>
                    </div>
                    <div class="animated hidden" data-animation="fadeInLeft" data-animation-delay="1850">
                        <a href="#" class="d_block frame_container">
                            <img src="images/client_img_6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--custom products-->
    <div class="section_offset p_bottom_0 m_bottom_0">
        <div class="container">
            <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInDown">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 v_align_m d_table_cell f_none">
                    <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">CUSTOM</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 t_align_r d_table_cell f_none">
                    <!--carousel navigation-->
                    <div class="clearfix d_inline_b">
                        <button class="new_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                        <button class="new_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                    </div>
                </div>
            </div>
            <hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInDown" data-animation-delay="100">
            <div class="row">
                <div class="owl-carousel" data-nav="new_" data-owl-carousel-options='{
									"stagePadding" : 15,
									"margin" : 30,
									"responsive" : {
											"0" : {
												"items" : 1
											},
											"320" : {
												"items" : 2
											},
											"550" : {
												"items" : 3
											},
											"992" : {
												"items" : 6
											}
										}
									}'>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="950">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_11.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_12.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Master Cover</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Coresenta</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$119.50</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="1100">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_13.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_14.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Creative Design Phone</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Forty Feel</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$237.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="350">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_2.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_7.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Premium Leather Phone</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Sample brand</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$400.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="200">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_1.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_8.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Modern Metallic Phone</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Sample brand</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$900.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="500">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_3.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_6.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Striped Phone</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Forty Feel</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$199.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="650">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_4.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_5.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Round Cell</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Ksenond</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$1,177.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <!--owl item-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="800">
                        <!--product-->
                        <figure class="relative r_image_container c_image_container qv_container">

                            <div class="d_block m_bottom_15 relative">
                                <img src="images/new_img_9.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/new_img_10.jpg" alt="" class="c_image_2 tr_all">
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Green Cosy Cell</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Sample brand</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$235.83</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog-->
    <div class="section_offset p_bottom_0">
        <section class="container m_bottom_5">
            <div class="d_table m_bottom_5 w_full hidden animated" data-animation="fadeInLeft">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 v_align_m d_table_cell f_none">
                    <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">LATEST BLOG</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 t_align_r d_table_cell f_none">
                    <!--carousel navigation-->
                    <div class="clearfix d_inline_b">
                        <button class="blog_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                        <button class="blog_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                    </div>
                </div>
            </div>
            <hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInLeft" data-animation-delay="100">
            <!--carousel-->
            <div class="row">
                <div class="owl-carousel" data-nav="blog_" data-owl-carousel-options='{
							"stagePadding" : 15,
							"margin" : 30,
							"responsive" : {
									"0" : {
										"items" : 1
									},
									"470" : {
										"items" : 2
									},
									"992" : {
										"items" : 3
									}
								}
							}'>
                    <!--post-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="200">
                        <article class="frame_container scale_image_container">
                            <figure class="relative">
                                <a href="#" class="d_block wrapper m_bottom_15"><img src="images/blog_img_1.jpg" alt="" class="tr_all scale_image"></a>
                                <figcaption>
                                    <div class="clearfix">
                                        <!--post info (date & comments)-->
                                        <div class="post_info f_left m_right_20 t_align_c lh_small m_sm_right_10">
                                            <div class="date bg_scheme_color color_white second_font tt_uppercase m_bottom_15">
                                                <b class="d_inline_b">22</b>
                                                <p class="fs_ex_small">Jun</p>
                                            </div>
                                            <a href="#" class="sc_hover"><i class="fa fa-comments d_inline_m m_right_3"></i> <span class="fs_small d_inline_m">3</span></a>
                                        </div>
                                        <!--post excerpt-->
                                        <div class="f_left post_excerpt m_bottom_15">
                                            <h5 class="second_font m_bottom_13"><a href="#" class="sc_hover"><b>Sed ut perspiciatis unde omnis iste</b></a></h5>
                                            <p class="fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!--post-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="350">
                        <article class="frame_container scale_image_container">
                            <figure class="relative">
                                <a href="#" class="d_block wrapper m_bottom_15"><img src="images/blog_img_2.jpg" alt="" class="tr_all scale_image"></a>
                                <figcaption>
                                    <div class="clearfix">
                                        <!--post info (date & comments)-->
                                        <div class="post_info f_left m_right_20 t_align_c lh_small m_sm_right_10">
                                            <div class="date bg_scheme_color color_white second_font tt_uppercase m_bottom_15">
                                                <b class="d_inline_b">22</b>
                                                <p class="fs_ex_small">Jun</p>
                                            </div>
                                            <a href="#" class="sc_hover"><i class="fa fa-comments d_inline_m m_right_3"></i> <span class="fs_small d_inline_m">77</span></a>
                                        </div>
                                        <!--post excerpt-->
                                        <div class="f_left post_excerpt m_bottom_15">
                                            <h5 class="second_font m_bottom_13"><a href="#" class="sc_hover"><b>Donec sagittis euismod purus</b></a></h5>
                                            <p class="fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!--post-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="500">
                        <article class="frame_container scale_image_container">
                            <figure class="relative">
                                <a href="#" class="d_block wrapper m_bottom_15"><img src="images/blog_img_3.jpg" alt="" class="tr_all scale_image"></a>
                                <figcaption>
                                    <div class="clearfix">
                                        <!--post info (date & comments)-->
                                        <div class="post_info f_left m_right_20 t_align_c lh_small m_sm_right_10">
                                            <div class="date bg_scheme_color color_white second_font tt_uppercase m_bottom_15">
                                                <b class="d_inline_b">22</b>
                                                <p class="fs_ex_small">Jun</p>
                                            </div>
                                            <a href="#" class="sc_hover"><i class="fa fa-comments d_inline_m m_right_3"></i> <span class="fs_small d_inline_m">0</span></a>
                                        </div>
                                        <!--post excerpt-->
                                        <div class="f_left post_excerpt m_bottom_15">
                                            <h5 class="second_font m_bottom_13"><a href="#" class="sc_hover"><b>Natus error sit voluptatem</b></a></h5>
                                            <p class="fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!--post-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="650">
                        <article class="frame_container scale_image_container">
                            <figure class="relative">
                                <a href="#" class="d_block wrapper m_bottom_15"><img src="images/blog_img_4.jpg" alt="" class="tr_all scale_image"></a>
                                <figcaption>
                                    <div class="clearfix">
                                        <!--post info (date & comments)-->
                                        <div class="post_info f_left m_right_20 t_align_c lh_small m_sm_right_10">
                                            <div class="date bg_scheme_color color_white second_font tt_uppercase m_bottom_15">
                                                <b class="d_inline_b">22</b>
                                                <p class="fs_ex_small">Jun</p>
                                            </div>
                                            <a href="#" class="sc_hover"><i class="fa fa-comments d_inline_m m_right_3"></i> <span class="fs_small d_inline_m">3</span></a>
                                        </div>
                                        <!--post excerpt-->
                                        <div class="f_left post_excerpt m_bottom_15">
                                            <h5 class="second_font m_bottom_13"><a href="#" class="sc_hover"><b>Sed ut perspiciatis unde omnis iste</b></a></h5>
                                            <p class="fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!--post-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="800">
                        <article class="frame_container scale_image_container">
                            <figure class="relative">
                                <a href="#" class="d_block wrapper m_bottom_15"><img src="images/blog_img_2.jpg" alt="" class="tr_all scale_image"></a>
                                <figcaption>
                                    <div class="clearfix">
                                        <!--post info (date & comments)-->
                                        <div class="post_info f_left m_right_20 t_align_c lh_small m_sm_right_10">
                                            <div class="date bg_scheme_color color_white second_font tt_uppercase m_bottom_15">
                                                <b class="d_inline_b">22</b>
                                                <p class="fs_ex_small">Jun</p>
                                            </div>
                                            <a href="#" class="sc_hover"><i class="fa fa-comments d_inline_m m_right_3"></i> <span class="fs_small d_inline_m">77</span></a>
                                        </div>
                                        <!--post excerpt-->
                                        <div class="f_left post_excerpt m_bottom_15">
                                            <h5 class="second_font m_bottom_13"><a href="#" class="sc_hover"><b>Donec sagittis euismod purus</b></a></h5>
                                            <p class="fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!--post-->
                    <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="950">
                        <article class="frame_container scale_image_container">
                            <figure class="relative">
                                <a href="#" class="d_block wrapper m_bottom_15"><img src="images/blog_img_3.jpg" alt="" class="tr_all scale_image"></a>
                                <figcaption>
                                    <div class="clearfix">
                                        <!--post info (date & comments)-->
                                        <div class="post_info f_left m_right_20 t_align_c lh_small m_sm_right_10">
                                            <div class="date bg_scheme_color color_white second_font tt_uppercase m_bottom_15">
                                                <b class="d_inline_b">22</b>
                                                <p class="fs_ex_small">Jun</p>
                                            </div>
                                            <a href="#" class="sc_hover"><i class="fa fa-comments d_inline_m m_right_3"></i> <span class="fs_small d_inline_m">0</span></a>
                                        </div>
                                        <!--post excerpt-->
                                        <div class="f_left post_excerpt m_bottom_15">
                                            <h5 class="second_font m_bottom_13"><a href="#" class="sc_hover"><b>Natus error sit voluptatem</b></a></h5>
                                            <p class="fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--footer-->
    <footer role="contentinfo" class="p_top_0">
        <div class="section_offset bg_grey_light_2 m_bottom_38">
            <div class="container m_bottom_13 m_top_10">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">
                        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Latest Tweets</h5>
                        <hr class="divider_bg m_bottom_10">
                        <!--twitter feed-->
                        <div class="tweets_list_container"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Stay Connected</h5>
                        <hr class="divider_bg m_bottom_30">
                        <!--social buttons-->
                        <ul class="hr_list">
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-facebook fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Facebook</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-twitter fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Twitter</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-google-plus fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Google Plus</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-rss fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">RSS</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-pinterest fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Pinterest</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-instagram fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Instagram</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-linkedin fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">LinkedIn</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-vimeo-square fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Vimeo</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-youtube-play fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Youtube</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-flickr fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Flickr</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-envelope fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Contact Us</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_13 m_sm_bottom_30">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">About Us</h5>
                            <hr class="divider_bg m_bottom_25">
                            <div class="clearfix">
                                <img src="images/mini_logo.jpg" class="f_left m_top_10 m_right_20" alt="">
                                <p class="m_bottom_14 fw_light">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus.</p>
                                <p class="m_bottom_10 fw_light">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque.</p>
                                <a href="#" class="sc_hover second_font">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_13 m_sm_bottom_30">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">The Services</h5>
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
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Information</h5>
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
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Like Us On Facebook</h5>
                            <hr class="divider_bg m_bottom_15">
                            <div class="fb-page" data-href="https://www.facebook.com/kinokritik/" data-tabs="timeline" data-height="200px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kinokritik/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kinokritik/">Кинокритик</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider_black m_bottom_13">
            <div class="d_table w_full d_xs_block t_xs_align_c">
                <div class="col-lg-6 col-md-6 col-sm-6 color_light fw_light f_none d_table_cell v_align_m d_xs_block m_xs_bottom_10">
                    &copy; 2014 <a href="index.html" class="sc_hover">CosyOne</a>. All Rights Reserved.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c f_none d_table_cell v_align_m d_xs_block">
                    <ul class="hr_list d_inline_b">
                        <li class="m_right_5"><img src="images/payment_1.jpg" alt=""></li>
                        <li class="m_right_5"><img src="images/payment_2.jpg" alt=""></li>
                        <li class="m_right_5"><img src="images/payment_3.jpg" alt=""></li>
                        <li class="m_right_5"><img src="images/payment_4.jpg" alt=""></li>
                        <li class="m_right_5"><img src="images/payment_5.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<!--back to top-->
<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>
<button data-popup="#subscribe_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp"></button>
<!--popup-->
<div class="init_popup" id="subscribe_popup">
    <div class="popup init banner_type_2 color_lbrown">
        <section class="bg_lbrown inner color_white">
            <h2 class="second_font color_white fw_light m_bottom_27 t_align_c">Subscribe Now to Get 20% Off on Any Product!</h2>
            <div class="row color_white">
                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_30">
                    <img src="images/popup_img_1.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_30 fw_light">
                    <p class="m_bottom_13">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    <p> Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel.</p>
                </div>
            </div>
            <form class="newsletter">
                <div class="row fs_medium">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_10">
                        <input type="email" placeholder="Enter your email address" name="newsletter-email" class="tr_all fw_light w_full b_none color_light">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_10">
                        <input type="text" name="newsletter-name" placeholder="Name" class="tr_all fw_light w_full b_none color_light">
                    </div>
                </div>
                <div class="t_align_c">
                    <button class="second_font tt_uppercase color_white fs_medium button_type_2 d_inline_b bg_transparent bg_white_h color_lbrown_h bg_white_hover tr_all">Subscribe</button>
                </div>
            </form>
        </section>
        <button class="close_popup fw_light color_white fs_large color_dark_hover tr_all">x</button>
    </div>
</div>
<!--popup-->
<div class="init_popup" id="quick_view">
    <div class="popup init">
        <div class="clearfix">
            <div class="product_preview f_left f_xs_none wrapper m_xs_bottom_15">
                <div class="d_block relative r_image_container">
                    <img id="zoom" src="images/750x750_img1.jpg" alt="" data-zoom-image="images/750x750_img1.jpg">
                    <div class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase"><i class="d_inline_m">Sale!</i></div>
                </div>
                <!--thumbnails-->
                <div class="product_thumbnails_wrap relative m_bottom_3">
                    <div class="owl-carousel" id="thumbnails" data-nav="thumbnails_product_" data-owl-carousel-options='{
								"responsive" : {
									"0" : {
										"items" : 3
									},
									"321" : {
										"items" : 4
									},
									"769" : {
										"items" : 2
									},
									"992" : {
										"items" : 3
									}
								},
								"stagePadding" : 40,
								"margin" : 10,
								"URLhashListener" : false
							}'>
                        <a href="#" data-image="images/750x750_img2.jpg" data-zoom-image="images/750x750_img2.jpg" class="d_block">
                            <img src="images/100x100_img1.jpg" alt="">
                        </a>
                        <a href="#" data-image="images/750x750_img3.jpg" data-zoom-image="images/750x750_img3.jpg" class="d_block">
                            <img src="images/100x100_img2.jpg" alt="">
                        </a>
                        <a href="#" data-image="images/750x750_img4.jpg" data-zoom-image="images/750x750_img4.jpg" class="d_block">
                            <img src="images/100x100_img3.jpg" alt="">
                        </a>
                        <a href="#" data-image="images/750x750_img1.jpg" data-zoom-image="images/750x750_img1.jpg" class="d_block">
                            <img src="images/100x100_img4.jpg" alt="">
                        </a>
                    </div>
                    <button class="thumbnails_product_prev black_hover button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-left d_inline_m"></i></button>
                    <button class="thumbnails_product_next black_hover button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                </div>
                <p class="d_inline_m m_right_5 fw_light m_md_bottom_3">Share this:</p>
                <div class="d_inline_m addthis_widget_container">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                        <a class="addthis_button_preferred_1"></a>
                        <a class="addthis_button_preferred_2"></a>
                        <a class="addthis_button_preferred_3"></a>
                        <a class="addthis_button_preferred_4"></a>
                        <a class="addthis_button_compact"></a>
                        <a class="addthis_counter addthis_bubble_style"></a>
                    </div>
                    <!-- AddThis Button END -->
                </div>
            </div>
            <div class="product_description f_left f_xs_none">
                <h3 class="second_font m_bottom_3 product_title"><a href="#" class="sc_hover">Striped Phone</a></h3>
                <div class="relative m_bottom_18">
                    <ul class="rating_list wrapper hr_list d_inline_m tr_all m_right_5">
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li><i class="fa fa-star tr_all"></i></li>
                        <li><i class="fa fa-star tr_all"></i></li>
                    </ul>
                    <span class="color_light d_inline_m m_top_2">
								<a href="#" class="sc_hover fs_medium fw_light">3 Review(s)</a> | <a href="#" class="color_dark sc_hover fs_medium fw_light">Add Your Review</a>
							</span>
                </div>
                <ul class="m_bottom_14">
                    <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Manufacturer:</span> <span class="color_dark fw_light">Forty Feel</span></li>
                    <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Availability:</span> <span class="scheme_color fw_light">in stock</span> <span class="fw_light">20 items(s)</span></li>
                    <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Product Code:</span> <span class="fw_light">PS06</span></li>
                </ul>
                <hr class="divider_light m_bottom_15">
                <p class="fw_light m_bottom_14 color_grey">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>
                <div class="product_options">
                    <b class="second_font d_block m_bottom_10">Available Options</b>
                    <p class="second_font m_bottom_3">Size:</p>
                    <div class="styled_select size_select relative m_bottom_15">
                        <div class="select_title type_2 fs_medium fw_light color_light relative d_none tr_all">Queen</div>
                        <select>
                            <option value="Queen">Queen</option>
                            <option value="King">King</option>
                            <option value="Grand">Grand</option>
                        </select>
                        <ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul>
                    </div>
                    <p class="second_font">Color:</p>
                    <ul class="hr_list m_bottom_17">
                        <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_red tr_all"></button></li>
                        <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_blue tr_all"></button></li>
                        <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_green tr_all"></button></li>
                        <li class="m_right_5 m_bottom_3"><button class="color_button bg_grey tr_all"></button></li>
                        <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_yellow tr_all"></button></li>
                    </ul>
                    <hr class="divider_light">
                    <footer class="bg_grey_light_2">
                        <div class="fs_big second_font m_bottom_17"><s class="color_light">$1 302.00</s> <b class="scheme_color">$1 102.00</b></div>
                        <div class="clearfix">
                            <div class="quantity clearfix t_align_c f_left f_md_none m_right_10 m_md_bottom_3">
                                <button class="f_left d_block minus black_hover tr_all bg_white">-</button>
                                <input type="text" value="1" name="" readonly="" class="f_left color_light">
                                <button class="f_left d_block black_hover tr_all bg_white">+</button>
                            </div>
                            <br class="d_md_block d_none">
                            <button class="button_type_2 d_block f_sm_none m_sm_bottom_3 t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase f_left m_right_3 product_button"><i class="fa fa-shopping-cart d_inline_m m_right_9"></i>Add To Cart</button>
                            <br class="d_sm_block d_none">
                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <button class="close_popup fw_light fs_large tr_all">x</button>
    </div>
</div>

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
