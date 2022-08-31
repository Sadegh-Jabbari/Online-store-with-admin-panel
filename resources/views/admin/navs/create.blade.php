@extends('admin.layouts.master')
@section("extracss")

@endsection

@section("main")
    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>ایجاد منو</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                            <p class="fw-bold position-absolute m-0 px-5 bg-white"
                               style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                گزینه های اصلی
                            </p>
                        </div>
                        <form action="{{route("navs.store")}}" method="POST">
                            @csrf
                            <div class="d-flex mb-2">
                                <label for="main_nav_url" class="w-25">عنوان منو اختصاصی</label>
                                <input type="text" name="main_nav_url" id="main_nav_url" class="w-75">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="main_nav_name" class="w-25">اسم منو</label>
                                <input type="text" name="main_nav_name" id="main_nav_name" class="w-75">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="hasMegaMenu" class="w-25">زیرمنو دارد؟</label>
                                <select name="hasMegaMenu" id="hasMegaMenu" class="js-example-basic-single w-75">
                                    <option value="1">بله</option>
                                    <option value="0">خیر</option>
                                </select>
                            </div>
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white"
                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    زیر منوی گزینه های اصلی (دسته بندی ها)
                                </p>
                            </div>
                            <div class="d-flex mb-2">
                                <label for="cat_nav_title" class="w-25">عنوان دسته بندی</label>
                                <input type="text" name="cat_nav_title" id="cat_nav_title" class="w-75">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="cat_nav_url" class="w-25">آدرس صفحه منو</label>
                                <input type="text" name="cat_nav_url" id="cat_nav_url" class="w-75">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="hasChild" class="w-25">زیرمنو دارد؟</label>
                                <select name="hasChild" id="hasChild" class="js-example-basic-single w-75">
                                    <option value="1">بله</option>
                                    <option value="0">خیر</option>
                                </select>
                            </div>
                            <div class="d-flex mb-2">
                                <label for="father_id" class="w-25">پدرش کیست</label>
                                <select name="father_id" id="father_id" class="js-example-basic-single w-75">
                                    <option value="0">
                                        خودش والد اصلی است
                                    </option>
                                    @foreach($navs as $item)
                                        @php
                                            $nav_id = $item->id;
                                            $nav_name = $item->main_nav_name;
                                        @endphp
                                        <option value="{{$nav_id}}">
                                            {{$nav_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white"
                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    زیر منوی دسته بندی ها
                                </p>
                            </div>
                            <div class="d-flex mb-2">
                                <label for="sub_nav_title" class="w-25">عنوان زیرمنوی دسته بندی</label>
                                <input type="text" name="sub_nav_title" id="sub_nav_title" class="w-75">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="sub_nav_url" class="w-25">آدرس صفحه</label>
                                <input type="text" name="sub_nav_url" id="sub_nav_url" class="w-75">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="main_branch" class="w-25">شاخه اصلی است؟</label>
                                <select name="main_branch" id="main_branch" class="js-example-basic-single w-75">
                                    <option value="1">بله</option>
                                    <option value="0">خیر</option>
                                </select>
                            </div>
                            <div class="d-flex mb-2">
                                <label for="father_id" class="w-25">پدرش کیست</label>
                                <select name="father_id" id="father_id" class="js-example-basic-single w-75">
                                    <option value="0">
                                        خودش والد اصلی است
                                    </option>
                                    @foreach($catMenu as $cat)
                                        @php
                                            $cat_id = $cat->id;
                                            $cat_name = $cat->cat_nav_title;
                                        @endphp
                                        <option value="{{$cat_id}}">
                                            {{$cat_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Previous -->
{{--                            <div class="d-flex mb-2">--}}
{{--                                <label for="nav_url" class="w-25">عنوان منو اختصاصی</label>--}}
{{--                                <input type="text" name="nav_url" id="nav_url" class="w-75">--}}
{{--                            </div>--}}
{{--                            <div class="d-flex mb-2">--}}
{{--                                <label for="nav_name" class="w-25">اسم منو</label>--}}
{{--                                <input type="text" name="nav_name" id="nav_name" class="w-75">--}}
{{--                            </div>--}}
{{--                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">--}}
{{--                                <p class="fw-bold position-absolute m-0 px-5 bg-white"--}}
{{--                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">--}}
{{--                                    عناصر منو--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex mb-2">--}}
{{--                                <label for="nav_title" class="w-25">عنوان عنصر منو</label>--}}
{{--                                <input type="text" name="nav_title" id="nav_title" class="w-75">--}}
{{--                            </div>--}}
{{--                            <div class="d-flex mb-2">--}}
{{--                                <label for="nav_uri" class="w-25">آدرس صفحه منو</label>--}}
{{--                                <input type="text" name="nav_uri" id="nav_uri" class="w-75">--}}
{{--                            </div>--}}
{{--                            <div class="d-flex mb-2">--}}
{{--                                <label for="hasChild" class="w-25">فرزند دارد</label>--}}
{{--                                <select name="hasChild" id="hasChild" class="js-example-basic-single w-75">--}}
{{--                                    <option value="1">دارد</option>--}}
{{--                                    <option value="0">ندارد</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex mb-2">--}}
{{--                                <label for="father_id" class="w-25">پدرش کیست</label>--}}
{{--                                <select name="father_id" id="father_id" class="js-example-basic-single w-75">--}}
{{--                                    <option value="0">--}}
{{--                                        خودش والد اصلی است--}}
{{--                                    </option>--}}
{{--                                    @foreach($navs as $item)--}}
{{--                                        @php--}}
{{--                                        $nav_id = $item->id;--}}
{{--                                        $nav_name = $item->nav_name;--}}
{{--                                        @endphp--}}
{{--                                    <option value="{{$nav_id}}">--}}
{{--                                        {{$nav_name}}--}}
{{--                                    </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn text-white me-3" style="background: #ef394e; width: 15%">ثبت</button>
                                <button type="reset" class="btn text-white" style="background: #ef394e; width: 15%">بازنشانی</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection

@section("extrajs")

@endsection
