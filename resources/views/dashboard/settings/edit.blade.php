@extends('dashboard.layout')

@section('title')
    {{'الاعدادات'}}
@endsection

@section('content')


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex flex-column align-items-start me-3">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-1">تعديل الاعدادات</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">الرئيسية</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('settings.index')}}" class="text-muted text-hover-primary">الاعدادات</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">تعديل الاعدادات</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">

                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body p-10">
                        <!--begin::Heading-->
                        <!--begin::Modal content-->
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->

                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                            <!--begin:Form-->
                            <form id="kt_modal_new_target_form" class="form" method="POST" action="{{route('settings.update',$setting->id)}}">
                                @csrf
                                @method('PUT')
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">التعديل على بيانات الموقع</h1>
                                    <!--end::Title-->

                                </div>
                                <!--end::Heading-->
                                <div class="row">
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="col-md-4 mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">العنوان </span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" name="address" value="{{$setting->address}}" />
                                        <span class="text-danger">
                                                @error('address')
                                            {{$message}}
                                            @enderror
                                            </span>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="col-md-4 mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">رقم الجوال</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="number" class="form-control form-control-solid" name="phone" value="{{$setting->phone}}" />
                                        <span class="text-danger">
                                                @error('phone')
                                            {{$message}}
                                            @enderror
                                            </span>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="col-md-4 mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">البريد الالكتروني</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" name="email" value="{{$setting->email}}" />
                                        <span class="text-danger">
                                                @error('email')
                                            {{$message}}
                                            @enderror
                                            </span>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <a href="{{route('settings.index')}}"  class="btn btn-white me-3">إلغاء</a>
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">حفظ</span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end:Form-->
                        </div>
                        <!--end::Modal body-->

                        <!--end::Modal content-->

                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Heading-->
                <!--begin::Illustration-->

                <!--end::Illustration-->
            </div>
            <!--end::Card body-->
        </div>


    </div>


@endsection
