@extends('layouts.app')

@section('content')

    <!--layerslider-->
    <div class="layerslider" style="width:100%;height:550px;">
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="https://www.aqarito.com/_next/static/media/banner.78deccc30328c938605d70c2fbb4c212.png" alt="" class="ls-bg">
            <!--slide layers-->
            <p class="ls-l color_white fw_light tt_uppercase" style="left:50%;top:171px;font-size:1.285em;" data-ls="offsetxin:0; offsetyin:120; delayin:400;easingin:easeOutBack;durationin:700;">المنصة الاولى في الوطن العربي للبحث عن العقارات.</p>
            <h1 class="ls-l color_white second_font tt_uppercase t_align_c" style="left:50%;top:213px;font-size:4.285em;line-height:.94em; white-space: nowrap;" data-ls="offsetxin:0; offsetyin:0; rotatein:360;scalexin:0.5;scaleyin:0.5; delayin:800;easingin:easeOutBack;durationin:700;"><b>ابحث عن عقارك المفضل في السعودية</b></h1>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent slider_button color_white tt_uppercase fw_light" style="left:50%;font-size:1.428em;top:315px;" data-ls="offsetxin:0; offsetyin:120;delayin:1100;easingin:easeOutBack;durationin:700;">تصفح العقارات</a>
        </div>
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="https://www.aqarito.com/_next/static/media/banner.78deccc30328c938605d70c2fbb4c212.png" alt="" class="ls-bg">
            <!--slide layers-->
            <p class="ls-l color_white fw_light tt_uppercase" style="left:50%;top:171px;font-size:1.285em;" data-ls="offsetxin:0; offsetyin:120; delayin:400;easingin:easeOutBack;durationin:700;">المنصة الاولى في الوطن العربي للبحث عن العقارات.</p>
            <h1 class="ls-l color_white second_font tt_uppercase t_align_c" style="left:50%;top:213px;font-size:4.285em;line-height:.94em; white-space: nowrap;" data-ls="offsetxin:0; offsetyin:0; rotatein:360;scalexin:0.5;scaleyin:0.5; delayin:800;easingin:easeOutBack;durationin:700;"><b>ابحث عن عقارك المفضل في السعودية</b></h1>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent slider_button color_white tt_uppercase fw_light" style="left:50%;font-size:1.428em;top:315px;" data-ls="offsetxin:0; offsetyin:120;delayin:1100;easingin:easeOutBack;durationin:700;">تصفح العقارات</a>
        </div>
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="https://www.aqarito.com/_next/static/media/banner.78deccc30328c938605d70c2fbb4c212.png" alt="" class="ls-bg">
            <!--slide layers-->
            <p class="ls-l color_white fw_light tt_uppercase" style="left:50%;top:171px;font-size:1.285em;" data-ls="offsetxin:0; offsetyin:120; delayin:400;easingin:easeOutBack;durationin:700;">المنصة الاولى في الوطن العربي للبحث عن العقارات.</p>
            <h1 class="ls-l color_white second_font tt_uppercase t_align_c" style="left:50%;top:213px;font-size:4.285em;line-height:.94em; white-space: nowrap;" data-ls="offsetxin:0; offsetyin:0; rotatein:360;scalexin:0.5;scaleyin:0.5; delayin:800;easingin:easeOutBack;durationin:700;"><b>ابحث عن عقارك المفضل في السعودية</b></h1>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent slider_button color_white tt_uppercase fw_light" style="left:50%;font-size:1.428em;top:315px;" data-ls="offsetxin:0; offsetyin:120;delayin:1100;easingin:easeOutBack;durationin:700;">تصفح العقارات</a>
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
                    <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4"><h3>بحث سريع في أشهر المدن</h3></h5>
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
                    @foreach($cities as $city)
                        <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="200">
                            <article class="frame_container scale_image_container">
                                <figure class="relative">
                                    <a href="#" class="d_block wrapper m_bottom_15"><img src="{{asset('cities-images/'.$city->image)}}" alt="" class="tr_all scale_image" style="object-fit: cover;height: 330px;width: 400px"></a>
                                            <!--post info (date & comments)-->

                                            <!--post excerpt-->
                                            <div class="t_align_c post_excerpt ">
                                                <h5 class="second_font m_bottom_13"><a href="#" class="sc_hover"><b>{{$city->name}}</b></a></h5>
                                            </div>
                                </figure>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
