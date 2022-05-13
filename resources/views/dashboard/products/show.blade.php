@extends('layouts.app')

@section('content')

    <!--layout-->
    <div class="wide_layout db_centered bg_white">
        <!--[if (lt IE 9) | IE 9]>
        <div class="bg_red" style="padding:5px 0 12px;">
            <div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
        <![endif]-->
        <!--breadcrumbs-->
        <div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
            <div class="container">
                <a href="/" class="sc_hover">الرئيسية</a>
                <span class="color_dark">/</span>
                <a href="{{ route('categories.show' , $product->category->id) }}" class="sc_hover">{{$product->category->name}}</a>
                <span class="color_dark">/</span>
                <span class="color_light">{{$product->name}}</span>
            </div>
        </div>
        <!--main content-->
        <div class="page_section_offset">
            <div class="container">
                <section>
                    <main class="clearfix m_xs_bottom_30">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_15">
                                <div class="wrapper">
                                    <div class="d_block relative r_image_container">
                                        @foreach($product->images as $key => $image)
                                            @if($key == 0)
                                                <img id="zoom" src="{{asset($image->url)}}" alt="" data-zoom-image="{{asset($image->url)}}" style="object-fit: cover;height: 300px;width: 600px">

                                            @endif
                                        @endforeach
                                    </div>
                                    <!--thumbnails-->
                                    <div class="product_thumbnails_wrap relative">
                                        <div class="owl-carousel" id="thumbnails" data-nav="thumbnails_product_" data-owl-carousel-options='{
												"responsive" : {
													"0" : {
														"items" : 3
													},
													"321" : {
														"items" : 5
													},
													"769" : {
														"items" : 3
													},
													"992" : {
														"items" : 5
													}
												},
												"stagePadding" : 40,
												"margin" : 10,
												"URLhashListener" : false
											}'>
                                            @foreach($product->images as $key => $image)
                                                <a href="#" data-image="{{asset($image->url)}}" data-zoom-image="{{asset($image->url)}}" class="d_block">
                                                    <img src="{{asset($image->url)}}" alt="" style="object-fit: cover;height: 100px;width: 150px">
                                                </a>
                                            @endforeach
                                        </div>
                                        <button class="thumbnails_product_prev black_hover type_2 button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-left d_inline_m"></i></button>
                                        <button class="thumbnails_product_next black_hover type_2 button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20">
                                <div class="wrapper">
                                    <h3 class="second_font m_bottom_3 f_left product_title"><span  class="sc_hover">{{$product->name}}</span></h3>
                                </div>
                                <br>
                                <hr class="divider_light m_bottom_15">
                                <p class="fw_light m_bottom_14 color_grey">{{$product->description}}</p>
                                <div class="product_options m_bottom_20">
                                    <hr class="divider_light">
                                    <footer class="bg_grey_light_2">
                                        <div class="fs_big second_font m_bottom_17"><b class="scheme_color">{{$product->price}} ريال </b></div>
                                        <div class="clearfix">
                                            <br class="d_md_block d_none">

                                            <a href="https://api.whatsapp.com/send?text=،  السلام عليكم
	عندي استفسار بخصوص إعلانك في منصة الشواهق العقارية - &phone={{$info->phone}}" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_2 d_block f_sm_none m_sm_bottom_3 t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase f_left m_right_3 product_button"><i class="fa fa-whatsapp-square d_inline_m m_right_9"></i>تواصل عبر الواتس أب</a>
                                            <br class="d_sm_block d_none">
                                        </div>
                                    </footer>
                                </div>
                                <p class="d_inline_m m_right_5 fw_light m_md_bottom_3">مشاركة عبر مواقع التواصل :</p>
                                <div class="d_inline_m addthis_widget_container">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                        <a class="addthis_button_preferred_1"></a>
                                        <a class="addthis_button_preferred_2"></a>
                                        <a class="addthis_button_preferred_3"></a>
                                        <a class="addthis_button_preferred_8"></a>
                                        <a class="addthis_button_compact"></a>
                                        <a class="addthis_counter addthis_bubble_style"></a>
                                    </div>
                                    <!-- AddThis Button END -->
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--tabs-->
                    <div class="d_table m_bottom_5 w_full">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 v_align_m d_table_cell f_none">
                            <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">عقارات مشابهة </h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 t_align_r d_table_cell f_none">
                            <!--carousel navigation-->
                            <div class="clearfix d_inline_b">
                                <button class="rp_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                                <button class="rp_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                            </div>
                        </div>
                    </div>
                    <hr class="divider_bg m_bottom_15">
                    <div class="row">
                        <!--carousel-->
                        <div class="owl-carousel m_bottom_20 m_xs_bottom_0" data-nav="rp_" data-owl-carousel-options='{
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

                            @foreach($product->category->product as $product)
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
                </section>
            </div>
        </div>
    </div>


@endsection
