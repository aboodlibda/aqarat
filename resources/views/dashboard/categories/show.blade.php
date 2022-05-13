@extends('layouts.app')

@section('content')
    <!--breadcrumbs-->
    <div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
        <div class="container">
            <a href="/" class="sc_hover">الرئيسية</a>
            <span class="color_dark">/</span>
            <span class="color_light">{{$category->name}}</span>
        </div>
    </div>
    <!--main content-->
    <div class="page_section_offset">
        <div class="container">
            <div class="row">
                <main class="col-lg-12 col-md-12 col-sm-12 m_bottom_30 m_xs_bottom_10">
                    <h2 class="fw_light second_font color_dark tt_uppercase m_bottom_27">{{$category->name}}</h2>
                    <figure class="m_bottom_45 m_xs_bottom_30">
                        <img src="{{asset('categories-images/' . $category->image)}}" alt="" class="m_bottom_15" style="object-fit: cover;height: 500px;width: 1500px">
                    </figure>
                    <!--isotope-->
                    <div id="can_change_layout" class="category_isotope_container three_columns wrapper m_bottom_10 m_xs_bottom_0" data-isotope-options='{
								"itemSelector": ".category_isotope_item",
					  			"layoutMode": "fitRows"
							}'>
                        @foreach($category->product as $product)
                            <!--isotope item-->
                            <div class="category_isotope_item">
                                <figure class="product_item type_2 c_image_container relative frame_container t_sm_align_c r_image_container qv_container">
                                    <!--image & buttons & label-->
                                    <div class="relative">
                                        <div class="d_block">
                                            @if(sizeof($product->images) > 1)
                                                <img src="{{asset($product->images[0]->url)}}" alt="" class="c_image_1 tr_all cc">
                                                <img src="{{asset($product->images[1]->url)}}" alt="" class="c_image_2 tr_all cc">
                                            @else
                                                <img src="{{asset($product->images[0]->url)}}" alt="" class="c_image_1 tr_all cc">
                                            @endif
                                        </div>
                                    </div>
                                    <figcaption class="bg_white relative p_bottom_0">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7 m_bottom_9">
                                                <span class="second_font sc_hover d_xs_block">{{$product->name}}</span>
                                                <div class="relative">
                                                    <a href="#" class="fw_light color_light sc_hover category_link tr_all">{{$product->city->name}}</a><br class="d_none">
                                                </div>
                                                <hr class="d_none divider_light m_bottom_15">
                                                <hr class="d_none divider_light m_bottom_15">
                                            </div>
                                            <div class="col-lg-5 col-md-5 color_light fs_large second_font t_align_r t_sm_align_c m_bottom_9">
                                                <b class="scheme_color d_block">{{$product->price}} ريال </b>
                                            </div>
                                        </div>
                                        <a href="{{ route('products.show' , $product->id) }}"  data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_2 m_bottom_9 d_block w_full t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase"><i class="fa fa-eye d_inline_m m_right_9"></i>التفاصيل</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <!--isotope item-->
                        @endforeach
                    </div>
                    <hr class="m_bottom_5 divider_light">
                </main>
            </div>
        </div>
    </div>
@endsection
