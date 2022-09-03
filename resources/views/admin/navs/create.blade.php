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
                        <div class="px-5 pb-5 mb-3 position-relative" style="border: 4px solid #ef394e; border-radius: 8px">
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white"
                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    گزینه های اصلی
                                </p>
                            </div>
                            <div class="position-relative">
                                <form action="{{route("navs.store")}}" method="POST" id="nav-form">
                                    @csrf
                                    <div class="d-flex mb-2">
                                        <label for="main_nav_url" class="w-25">عنوان منو اختصاصی</label>
                                        <input type="text" name="main_nav_url" id="main_nav_url" class="w-50">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <label for="main_nav_name" class="w-25">اسم منو</label>
                                        <input type="text" name="main_nav_name" id="main_nav_name" class="w-50">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <label for="hasMegaMenu" class="w-25">زیرمنو دارد؟</label>
                                        <select name="hasMegaMenu" id="hasMegaMenu" class="js-example-basic-single w-50">
                                            <option value="1">بله</option>
                                            <option value="0">خیر</option>
                                        </select>
                                    </div>
                                    <div class="position-absolute d-flex flex-column justify-content-between h-100 end-0 top-0" style="width: 20%">
                                        <button type="submit" class="btn digi-red text-white w-100" style="height: 45%">ثبت</button>
                                        <button type="reset" class="btn digi-red text-white w-100" style="height: 45%">بازنشانی</button>
                                    </div>
                                </form>
                            </div>
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white"
                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    زیر منوی گزینه های اصلی (دسته بندی ها)
                                </p>
                            </div>
                            <div class="position-relative">
                                <form action="{{route("navs.store")}}" method="POST" id="cat-form">
                                    @csrf
                                    <div class="d-flex mb-2">
                                        <label for="cat_nav_title" class="w-25">عنوان دسته بندی</label>
                                        <input type="text" name="cat_nav_title" id="cat_nav_title" class="w-50">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <label for="cat_nav_url" class="w-25">آدرس صفحه منو</label>
                                        <input type="text" name="cat_nav_url" id="cat_nav_url" class="w-50">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <label for="hasChild" class="w-25">زیرمنو دارد؟</label>
                                        <select name="hasChild" id="hasChild" class="js-example-basic-single w-50" style="border: 1px solid #ef394e">
                                            <option value="1">بله</option>
                                            <option value="0">خیر</option>
                                        </select>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <label for="father_id" class="w-25">زیرمنوی کدام گزینه است</label>
                                        <select name="father_id" id="father_id" class="js-example-basic-single w-50">
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
                                    <div class="position-absolute d-flex flex-column justify-content-evenly h-100 end-0 top-0" style="width: 20%">
                                        <button type="submit" class="btn digi-red text-white w-100" style="height: 34.17%">ثبت</button>
                                        <button type="reset" class="btn digi-red text-white w-100" style="height: 34.17%">بازنشانی</button>
                                    </div>
                                </form>
                            </div>
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white"
                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    زیر منوی دسته بندی ها
                                </p>
                            </div>
                            <div class="position-relative">
                                <form action="{{route("navs.store")}}" method="POST" id="sub-form">
                                    @csrf
                                    <div class="d-flex mb-2">
                                        <label for="sub_nav_title" class="w-25">عنوان زیرمنوی دسته بندی</label>
                                        <input type="text" name="sub_nav_title" id="sub_nav_title" class="w-50">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <label for="sub_nav_url" class="w-25">آدرس صفحه</label>
                                        <input type="text" name="sub_nav_url" id="sub_nav_url" class="w-50">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <label for="main_branch" class="w-25">شاخه اصلی است؟</label>
                                        <select name="main_branch" id="main_branch" class="js-example-basic-single w-50">
                                            <option value="1">بله</option>
                                            <option value="0">خیر</option>
                                        </select>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <label for="father_id" class="w-25">زیرمنوی کدام دسته است</label>
                                        <select name="father_id" id="father_id" class="js-example-basic-single w-50">
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
                                    <div class="position-absolute d-flex flex-column justify-content-evenly h-100 end-0 top-0" style="width: 20%">
                                        <button type="submit" class="btn digi-red text-white w-100" style="height: 34.17%">ثبت</button>
                                        <button type="reset" class="btn digi-red text-white w-100" style="height: 34.17%">بازنشانی</button>
                                    </div>
                                </form>
                            </div>
                            <div class="position-absolute d-flex justify-content-evenly bg-white w-50" style="bottom: -20px;left: 50%; transform: translate(-50%)">
                                <button class="btn digi-red text-white" id="submit-all" style="height: 40px; width: 45%">ثبت همزمان همه فرم ها</button>
                                <button class="btn digi-red text-white" id="reset-all" style="height: 40px; width: 45%">بازنشانی همزمان همه فرم ها</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection

@section("extrajs")
    <script>
        $(document).ready(function () {
            $("#submit-all").on("click", function () {
                $("#nav-form, #cat-form, #sub-form").submit();
            });
            $("#reset-all").on("click", function () {
                $("#nav-form, #cat-form, #sub-form").trigger("reset");
            });
        });
    </script>
@endsection
