@extends('admin.layouts.master')
@section("extracss")
    <style>
        input[disabled] {
            border-color: #4f4f4f !important;
            background: #7f7f7f !important;
        }
        .select2 {
            width: 100% !important;
        }
        /*.select2-selection {*/
        /*    overflow: hidden;*/
        /*}*/
        /*.select2-selection__rendered {*/
        /*    background: rgba(239, 57, 78, 0.5);*/
        /*    !*color: #fff !important;*!*/
        /*}*/
        /*b[role=presentation] {*/
        /*    !*border-color: #fff transparent transparent transparent !important;*!*/
        /*}*/
    </style>
@endsection
@section("main")
    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>ایجاد محصول</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end mb-2">
                            <button class="btn digi-red text-white" id="lock"><i class="fa fa-lock"></i></button>
                            <button class="btn digi-red text-white ms-2" id="unlock"><i class="fa fa-lock-open"></i></button>
                        </div>
                        <form action="{{route("prods.store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-form mb-2 w-100">
                                <label for="prodName" id="prodName" class="input-form-label btn digi-red text-white">عنوان محصول</label>
                                <input type="text" name="prodName" id="prodName">
                            </div>
                            <div class="input-form mb-2 w-100">
                                <label for="prodUrl" id="prodUrl" class="input-form-label btn digi-red text-white">آدرس محصول</label>
                                <input type="text" name="prodUrl" id="prodUrl">
                            </div>
                            <div class="input-form mb-2 w-100">
                                <label for="prodShDesc" id="prodShDesc" class="input-form-label btn digi-red text-white">توضیح کوتاه درباره محصول</label>
                                <input type="text" name="prodShDesc" id="prodShDesc">
                            </div>
                            <div class="input-form mb-2 w100">
                                <label for="discount" id="discount" class="input-form-label btn digi-red text-white">تخفیف دارد؟</label>
                                <div class="discount w-100 d-none">
                                    <select name="discount" id="discount" class="js-example-basic-single w-100">
                                        <option value="0">خیر</option>
                                        @for($i = 1; $i <= 100; $i++)
                                            <option value="{{$i}}">{{$i."%"}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="index" class="btn digi-red text-white w-100">بارگذاری عکس</label>
                                <input type="file" name="index" id="index" class="d-none">
                            </div>
{{--                            <div class="d-flex mb-2">--}}
{{--                                <label for="ImgP" class="w-25">عکس محصول</label>--}}
{{--                                <input type="file" name="prodIMG" id="prodIMG" class="form-btn w-75">--}}
{{--                                <label class="form-btn btn text-white" for="ImgP">--}}
{{--                                    <i class="fa fa-image"></i>--}}
{{--                                    <span>انتخاب فایل</span>--}}
{{--                                </label>--}}
{{--                                <input type="file" name="ImgP" id="ImgP">--}}
{{--                            </div>--}}
{{--                            <textarea name="prodShDesc" id="" cols="30" rows="10"></textarea>--}}
                            <textarea name="prodLNDesc" id="summernote" cols="30" rows="10"></textarea>
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
    <script>
        $(document).ready(function(){
            $("#prodName").on("click", function(){
                $(this).removeClass("btn digi-red text-white");
                $(this).addClass("active-field");
                $("input#prodName").addClass("active-field");
            });
            $("#prodUrl").on("click", function(){
                $(this).removeClass("btn digi-red text-white");
                $(this).addClass("active-field");
                $("input#prodUrl").addClass("active-field");
            });
            $("#prodShDesc").on("click", function(){
                $(this).removeClass("btn digi-red text-white");
                $(this).addClass("active-field");
                $("input#prodShDesc").addClass("active-field");
            });
            $("#discount").on("click", function(){
                $(this).removeClass("btn digi-red text-white");
                $(this).addClass("active-field w-25");
                $("div.discount").removeClass("d-none");
            });
            $("#unlock").on("click", function () {
                $("#prodName").removeClass("btn digi-red text-white").addClass("active-field");
                $("input#prodName").addClass("active-field");
                $("#prodUrl").removeClass("btn digi-red text-white").addClass("active-field");
                $("input#prodUrl").addClass("active-field");
                $("#prodShDesc").removeClass("btn digi-red text-white").addClass("active-field");
                $("input#prodShDesc").addClass("active-field");
                $("#discount").removeClass("btn digi-red text-white").addClass("active-field w-25");
                $("div.discount").removeClass("d-none");
            });
            $("#lock").on("click", function(){
                $(".input-form-label").addClass("btn digi-red text-white");
                $(".input-form-label, .input-form input").removeClass("active-field");
                $("div.discount").addClass("d-none");
                $("label#discount").removeClass("w-25");
            });
            // $("[type=reset]").on("click", function(){
            //     $(".input-form-label").addClass("btn digi-red text-white");
            //     $(".input-form-label, .input-form input").removeClass("active-field");
            //     $("div.discount").addClass("d-none");
            //     $("label#discount").removeClass("w-25");
            // });
            $("#select-img").on("click", function () {
                $("#modal-box").css("display", "block");
            });
            $(".close-modal").on("click", function () {
                $("#modal-box").css("display", "none");
            });
            $("#hasMegaMenu").on("change", function () {
                $("input#photo_alt").attr("disabled", $("#hasMegaMenu").val() == 0);
            });
        });
    </script>
@endsection
