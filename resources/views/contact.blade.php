@extends('layouts.app')

@section('content')
    <!--breadcrumbs-->
    <div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
        <div class="container">
            <a href="/" class="sc_hover">الرئيسية</a>
            <span class="color_dark">/</span>
            <span class="color_light">تواصل معنا</span>
        </div>
    </div>
    <!--main content-->
    <div class="page_section_offset">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m_bottom_30 m_xs_bottom_10">
                    <div class="row">
                        <main class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">يمكنك مراسلتنا في أي وقت تريد من نموذج التواصل

                            </h5>
                            <hr class="divider_bg m_bottom_25">
                            <p class="second_font m_bottom_15">{{$info->address}}</p>
                            <ul class="second_font vr_list_type_2 m_bottom_33 m_xs_bottom_30">
                                <li><i class="fa fa-phone color_dark fs_large"></i>{{$info->phone}}</li>
                                <li class="w_break" data-icon=""><i class="fa fa-envelope color_dark"></i><a href="mailto:#" class="sc_hover d_inline_b">{{$info->email}}</a></li>
                            </ul>
                        </main>
                        <section class="col-lg-8 col-md-8 col-sm-8">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">نموذج التواصل</h5>
                            <hr class="divider_bg m_bottom_25">
                            <form id="contactform" class="b_default_layout">
                                <ul>
                                    <li class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
                                            <label class="second_font required d_inline_b m_bottom_5 clickable" for="cf_name">الاسم</label><br>
                                            <input type="text" name="cf_name" id="cf_name" class="tr_all w_full fw_light">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
                                            <label class="second_font required d_inline_b m_bottom_5 clickable" for="cf_email">البريد الالكتروني</label><br>
                                            <input type="email" name="cf_email" id="cf_email" class="tr_all w_full fw_light">
                                        </div>
                                    </li>
                                    <li class="m_bottom_15">
                                        <label class="second_font d_inline_b m_bottom_5 clickable" for="cf_telephone">الجوال</label><br>
                                        <input type="text" name="cf_telephone" id="cf_telephone" class="tr_all w_full fw_light">
                                    </li>
                                    <li class="m_bottom_5">
                                        <label class="second_font d_inline_b m_bottom_5 clickable" for="cf_message">نص الرسالة</label><br>
                                        <textarea id="cf_message" name="cf_message" rows="6" class="tr_all w_full fw_light"></textarea>
                                    </li>
                                    <li>
                                        <button class="button_type_2 black state_2 tr_all second_font fs_medium tt_uppercase d_inline_b"><span class="m_left_10 m_right_10 d_inline_b">إرسال</span></button>
                                    </li>
                                </ul>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
