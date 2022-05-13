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
               @foreach($custom_categories as $category)
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <!--banner-->
                        <figure class="relative wrapper scale_image_container m_bottom_30 r_image_container">
                            <img src="{{asset('categories-images/'.$category->image)}}" alt="" class="tr_all scale_image ff" style="object-fit: cover;height: 300px;width: 400px">
                            <!--caption-->
                            <figcaption class="caption_type_1 tr_all">
                                <div class="caption_inner">
                                    <h3 class="color_white second_font fw_light m_bottom_5 fs_sm_default"><a href="{{ route('categories.show' , $category->id) }}" class="color_orange color_white_hover">{{$category->name}}</a></h3>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
               @endforeach
            </div>
        </div>
    </section>
    <!--new products-->
    <div class="section_offset p_bottom_0 m_bottom_0">
        <div class="container">
            <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInDown">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 v_align_m d_table_cell f_none">
                    <h2 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">أحدث العقارات</h2>
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
                <!--carousel-->
                <div class="owl-carousel m_bottom_20 m_xs_bottom_0" data-nav="new_" data-owl-carousel-options='{
								"stagePadding" : 15,
								"margin" : 30,
								"responsive" : {
										"0" : {
											"items" : 1
										},
										"321" : {
											"items" : 2
										},
										"768" : {
											"items" : 3
										},
										"992" : {
											"items" : 4
										}
									}
								}'>

                    @foreach($products as $product)
                        <figure class="relative r_image_container c_image_container qv_container">
                            <div class="relative m_bottom_15">
                                <div>
                                    @if(sizeof($product->images) > 1)
                                        <img src="{{asset($product->images[0]->url)}}" alt="" class="c_image_1 tr_all abood" >
                                        <img src="{{asset($product->images[1]->url)}}" alt="" class="c_image_2 tr_all abood" >
                                    @else
                                        <img src="{{asset($product->images[0]->url)}}" alt="" class="c_image_1 tr_all abood">
                                    @endif
                                </div>
                                <a href="{{ route('products.show' , $product->id) }}" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">التفاصيل</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="{{ route('products.show' , $product->id) }}" class="second_font sc_hover">{{$product->name}}</a></li>
                                    <li class="m_bottom_7"><a href="{{ route('cities.show' , $product->city->id) }}" class="color_light sc_hover fw_light d_inline">{{$product->city->name}}</a></li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">{{$product->price}} ريال </b></li>
                                </ul>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="section_offset p_bottom_0 m_bottom_0">
        <div class="container">
            <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInDown">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 v_align_m d_table_cell f_none">
                    <h2 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">اعثروا على منزل أحلامكم
                    </h2>
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
                <!--carousel-->
                <div class="owl-carousel m_bottom_20 m_xs_bottom_0" data-nav="new_" data-owl-carousel-options='{
								"stagePadding" : 15,
								"margin" : 30,
								"responsive" : {
										"0" : {
											"items" : 1
										},
										"321" : {
											"items" : 2
										},
										"768" : {
											"items" : 3
										},
										"992" : {
											"items" : 4
										}
									}
								}'>

                    @foreach($random_products as $product)
                        <figure class="relative r_image_container c_image_container qv_container">
                            <div class="relative m_bottom_15">
                                <div>
                                    @if(sizeof($product->images) > 1)
                                        <img src="{{asset($product->images[0]->url)}}" alt="" class="c_image_1 tr_all abood" >
                                        <img src="{{asset($product->images[1]->url)}}" alt="" class="c_image_2 tr_all abood" >
                                    @else
                                        <img src="{{asset($product->images[0]->url)}}" alt="" class="c_image_1 tr_all abood">
                                    @endif
                                </div>
                                <a href="{{ route('products.show' , $product->id) }}" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">التفاصيل</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="{{ route('products.show' , $product->id) }}" class="second_font sc_hover">{{$product->name}}</a></li>
                                    <li class="m_bottom_7"><a href="{{ route('cities.show' , $product->city->id) }}" class="color_light sc_hover fw_light d_inline">{{$product->city->name}}</a></li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">{{$product->price}} ريال </b></li>
                                </ul>
                            </figcaption>
                        </figure>
                    @endforeach
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
                                    <a href="{{ route('cities.show' , $city->id) }}" class="d_block wrapper m_bottom_15"><img src="{{asset('cities-images/'.$city->image)}}" alt="" class="tr_all scale_image" style="object-fit: cover;height: 330px;width: 400px"></a>
                                    <!--post info (date & comments)-->

                                    <!--post excerpt-->
                                    <div class="t_align_c post_excerpt ">
                                        <h5 class="second_font m_bottom_13"><a href="{{ route('cities.show' , $city->id) }}" class="sc_hover"><b>{{$city->name}}</b></a></h5>
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
