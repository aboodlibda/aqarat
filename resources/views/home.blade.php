@extends('layouts.app')

@section('content')

    <!-- Categories Bar Start -->
    <section class="cate-bar">
        <div class="container theme-container">
            <div class="col-md-3 col-sm-4 col-xs-12 cat-menu theme-color-bg">
                <h2 class="section-title">الأقسام</h2>
                <i class="icon ion-android-menu cate-toggle"></i>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 cat-search">
                <form action="#" class="cate-form">
                    <div class=" selectpicker-wrapper col-md-2 col-sm-4 col-xs-5 no-padding">
                        <select
                            class="selectpicker white-color" data-live-search="false" data-width="100%"
                            data-toggle="tooltip" title="كل الأقسام">
                            @foreach($categories as $category)
                            <option>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="no-padding  col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <input type="text" class="form-control text">
                            <button class="title-2 submit-btn white-arrow"> بحث <i class="arrow_left  size-18 white-arrow"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- / Categories Bar Ends -->

    <section class="container theme-container space-bottom-30">
        <div class="col-md-3 col-sm-4 col-xs-12 no-padding cate-wrap">
            <nav>
                <div class="navbar-collapse no-padding">
                    <ul class="nav navbar-nav cate-navbar">
                        @foreach($categories as $category)
                            <li><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <!-- Main Slider Start -->
            <div class="slider-section">
                <div class="tp-banner-container">
                    <div class="tp-banner" >
                        <ul>
                            <!-- SLIDE  -->
                            <li data-transition="boxslide" data-slotamount="7" data-masterspeed="1000" data-delay="6000" >
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('gomra/assets/img/electronic/slider/1.jpg')}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                            </li>

                            <li data-transition="boxslide" data-slotamount="7" data-masterspeed="1000" data-delay="6000"  >
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('gomra/assets/img/electronic/slider/2.jpg')}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->


                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- / Main Slider Ends -->
        </div>
    </section>

    <!-- Banner Start -->
    <section class="space-bottom-60">
        <div class="container theme-container">
            <div class="space-15 visible-xs"></div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="banner" style="background-image: url({{asset('gomra/assets/img/electronic/banner/3.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                        <div class="banner-content">
                            <h2 class="section-title white-color"> أجهزة أيباد </h2>
{{--                            <p class="gray-color-2"> Lorem Ispum Dolor </p>--}}
                            <p class="title-2"> <a href="#" class="white-arrow">  تسوق الان <i class="arrow_left size-24"></i>    </a> </p>
                        </div>
                    </div>
                </div>

                <span class="visible-xs space-20"></span>

                <div class="col-md-4 col-sm-4">
                    <div class="banner" style="background-image: url({{asset('gomra/assets/img/electronic/banner/4.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                        <div class="banner-content">
                            <h2 class="section-title white-color"> أجهزة لابتوب </h2>
{{--                            <p class="gray-color-2"> Lorem Ispum Dolor </p>--}}
                            <p class="title-2"> <a href="#" class="white-arrow">  تسوق الان <i class="arrow_left size-24"></i>    </a> </p>
                        </div>
                    </div>
                </div>

                <span class="visible-xs space-20"></span>

                <div class="col-md-4 col-sm-4">
                    <div class="banner" style="background-image: url({{asset('gomra/assets/img/electronic/banner/5.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                        <div class="banner-content">
                            <h2 class="section-title white-color"> أجهزة جوال </h2>
{{--                            <p class="gray-color-2"> Lorem Ispum Dolor </p>--}}
                            <p class="title-2"> <a href="#" class="white-arrow">  تسوق الان <i class="arrow_left size-24"></i>    </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Banner Ends -->

    <!-- Deal Starts-->
    <section class="space-bottom-30">
        <div class="container theme-container">
            <div class="title-wrap">
                <h2 class="section-title"> منتجات جديدة </h2>
            </div>

            <div class="deal-slider text-center space-top-40 slide-nav-1">
                @foreach($products as $product)
                <div  class="item">
                    <div class="thumbnail-wrap">
                        <div class="thumbnail">
                            <div class="thumbnail-img light-bg">
                                <div class="flipper">
                                    <div class="front">
                                        <a title="Product" href="{{ route('product' , $product) }}">
{{--                                            <a href="{{route('products.show',$product->id)}}" style="height: 450px;background: url({{asset('product-images/'.$product->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>--}}
                                            <img class="img-responsive" src="{{asset('product-images/'.$product->image)}}" style="object-fit: cover;height: 330px;width: 20px" alt=""/>
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('product' , $product) }}">
                                            <img class="img-responsive" src="{{asset('product-images/'.$product->image)}}" style="object-fit: cover;height: 330px;width: 20px" alt=""/>
                                        </a>
                                    </div>
                                    <div class="sale-tag"> <span> جديد </span> </div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="caption-title space-15"><a href="#" class="title-2"> {{$product->name}} </a></div>
                                <div class="caption-text font-3"> <span class="size-18 black-color"> ${{$product->price}} </span></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- / Deal Ends -->

    <!-- Featured Products Starts-->
    <section id="product" class="space-bottom-30">
        <div class="container theme-container">
            <div class="title-wrap">
                <h2 class="section-title"> أجهزة الجوال </h2>
            </div>

            <div class="featured-slider text-center space-top-40 slide-nav-1">
                @foreach($mobile as $product)
                    <div  class="item">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <div class="thumbnail-img light-bg">
                                    <div class="flipper">
                                        <div class="front">
                                            <a title="Product" href="{{ route('product' , $product) }}">
                                                {{--                                            <a href="{{route('products.show',$product->id)}}" style="height: 450px;background: url({{asset('product-images/'.$product->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>--}}
                                                <img class="img-responsive" src="{{asset('product-images/'.$product->image)}}" style="object-fit: cover;height: 330px;width: 20px" alt=""/>
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ route('product' , $product) }}">
                                                <img class="img-responsive" src="{{asset('product-images/'.$product->image)}}" style="object-fit: cover;height: 330px;width: 20px" alt=""/>
                                            </a>
                                        </div>
                                        <div class="new-tag"> <span> حصري </span> </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-title space-15"><a href="#" class="title-2"> {{$product->name}} </a></div>
                                    <div class="caption-text font-3"> <span class="size-18 black-color"> ${{$product->price}} </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- / Featured Product Ends -->

    <!-- Brand Slider Starts-->
    <section id="brand-slider" class="space-bottom-50">
        <div class="container theme-container">
            <div class="title-wrap">
                <h2 class="section-title"> أشهر الماركات المتوفرة لدينا </h2>
            </div>

            <div class="brand-slider text-center space-top-70 slide-nav-1">
                <div class="item">
                    <a href="#"> <img src="{{asset('gomra/assets/img/electronic/brands/brand-1.png')}}" alt=""> </a>
                </div>
                <div class="item">
                    <a href="#"> <img src="{{asset('gomra/assets/img/electronic/brands/brand-2.png')}}" alt=""> </a>
                </div>
                <div class="item">
                    <a href="#"> <img src="{{asset('gomra/assets/img/electronic/brands/brand-3.png')}}" alt=""> </a>
                </div>
                <div class="item">
                    <a href="#"> <img src="{{asset('gomra/assets/img/electronic/brands/brand-4.png')}}" alt=""> </a>
                </div>
                <div class="item">
                    <a href="#"> <img src="{{asset('gomra/assets/img/electronic/brands/brand-5.png')}}" alt=""> </a>
                </div>
                <div class="item">
                    <a href="#"> <img src="{{asset('gomra/assets/img/electronic/brands/brand-1.png')}}" alt=""> </a>
                </div>
                <div class="item">
                    <a href="#"> <img src="{{asset('gomra/assets/img/electronic/brands/brand-2.png')}}" alt=""> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- / Brand Slider Starts-->

    <!-- Best Seller Starts-->
    <section id="best-seller" class="space-bottom-40">
        <div class="container theme-container">
            <div class="title-wrap">
                <h2 class="section-title"> أجهزة الكترونية  </h2>
            </div>

            <div class="best-seller text-center space-top-40 slide-nav-1">

                @foreach($electronic as $product)
                    <div  class="item">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <div class="thumbnail-img light-bg">
                                    <div class="flipper">
                                        <div class="front">
                                            <a title="Product" href="{{ route('product' , $product) }}">
                                                {{--                                            <a href="{{route('products.show',$product->id)}}" style="height: 450px;background: url({{asset('product-images/'.$product->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>--}}
                                                <img class="img-responsive" src="{{asset('product-images/'.$product->image)}}" style="object-fit: cover;height: 330px;width: 20px" alt=""/>
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ route('product' , $product) }}">
                                                <img class="img-responsive" src="{{asset('product-images/'.$product->image)}}" style="object-fit: cover;height: 330px;width: 20px" alt=""/>
                                            </a>
                                        </div>
                                        <div class="sale-tag"> <span> جديد </span> </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-title space-15"><a href="#" class="title-2"> {{$product->name}} </a></div>
                                    <div class="caption-text font-3"> <span class="size-18 black-color"> ${{$product->price}} </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- / Best Seller Ends -->

    <!-- Best Seller Starts-->
    <section id="best-seller" class="space-bottom-40">
        <div class="container theme-container">
            <div class="title-wrap">
                <h2 class="section-title"> أجهزة أيباد  </h2>
            </div>

            <div class="best-seller text-center space-top-40 slide-nav-1">

                @foreach($Ipad as $product)
                    <div  class="item">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <div class="thumbnail-img light-bg">
                                    <div class="flipper">
                                        <div class="front">
                                            <a title="Product" href="{{ route('product' , $product) }}">
                                                {{--                                            <a href="{{route('products.show',$product->id)}}" style="height: 450px;background: url({{asset('product-images/'.$product->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>--}}
                                                <img class="img-responsive" src="{{asset('product-images/'.$product->image)}}" style="object-fit: cover;height: 330px;width: 20px" alt=""/>
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ route('product' , $product) }}">
                                                <img class="img-responsive" src="{{asset('product-images/'.$product->image)}}" style="object-fit: cover;height: 330px;width: 20px" alt=""/>
                                            </a>
                                        </div>
                                        <div class="sale-tag"> <span> جديد </span> </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-title space-15"><a href="#" class="title-2"> {{$product->name}} </a></div>
                                    <div class="caption-text font-3"> <span class="size-18 black-color"> ${{$product->price}} </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- / Best Seller Ends -->



    <!-- Feature Starts -->
    <section class="space-bottom-70">
        <div class="container theme-container">
            <div class="row">
                <div class="col-md-3 col-sm-6 ftr-wrap">
                    <div class="ftr-icn">
                        <i class="icon ion-cube"></i>
                    </div>
                    <div class="ftr-cnt">
                        <h2 class="title-2"> +15.000 منتج </h2>
                        <p>خيارك الأفضل</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ftr-wrap">
                    <div class="ftr-icn">
                        <i class="icon ion-android-star"></i>
                    </div>
                    <div class="ftr-cnt">
                        <h2 class="title-2"> أكثر من 400 ماركة </h2>
                        <p> سوني , أل جي , توشيبا , لينوفو ... </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ftr-wrap">
                    <div class="ftr-icn">
                        <i class="icon ion-android-pin"></i>
                    </div>
                    <div class="ftr-cnt">
                        <h2 class="title-2"> شحن مجاني </h2>
                        <p> شحن البضائع مجانا للعملاء </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ftr-wrap">
                    <div class="ftr-icn">
                        <i class="icon ion-social-usd"></i>
                    </div>
                    <div class="ftr-cnt">
                        <h2 class="title-2">إمكانية إستعادة الأموال خلال 30 يوم </h2>
                        <p> ضمان 100%  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Feature Ends -->

@endsection
