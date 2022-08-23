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
                        <h5 class="mb-0 text-center"><strong>افزودن رسانه</strong></h5>
                    </div>
                    <div class="card-body">
                        <p class="fw-bold"> رسانه جدید</p>
                        <form action="{{route("media.store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{--                            <select name="banner" id="baner">--}}
                            {{--                                <option value="media_id"></option>--}}
                            {{--                            </select>--}}
                            {{--                            <p> عکس جدید برای بنر</p>--}}
                            {{--                            <input type="file" name="topAdBanner">--}}
                            {{--                            <input type="submit" value="ثبت">--}}
                            <div class="input-form mb-2 w-100">
                                <label for="banner_uri" class="input-form-label btn digi-red text-white">عنوان عکس</label>
                                <input type="text" name="banner_uri" id="banner_uri">
                            </div>
                            <div class="input-form mb-2 w-100">
                                <label for="banner_name" class="input-form-label btn digi-red text-white">متن جایگزین</label>
                                <input type="text" name="banner_name" id="banner_name">
                            </div>
                            <div class="input-form mb-2 w-100">
                                <label for="banner_name" class="input-form-label btn digi-red text-white">توضیحات</label>
                                <input type="text" name="banner_name" id="banner_name">
                            </div>
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white"
                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    افزودن عکس
                                </p>
                            </div>
                            <label for="indeximg" class="btn digi-red text-white w-100">بارگذاری عکس</label>
                            <input type="file" name="indeximg" id="indeximg" class="d-none">
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn text-white me-3" style="background: #ef394e; width: 15%">ثبت</button>
                                <button type="reset" class="btn text-white" style="background: #ef394e; width: 15%">بازنشانی</button>
                            </div>
                        </form>
                        <p class="fw-bold mt-4">برای افزودن گروهی عکس ها به گالری، عکس های خود را داخل کادر زیر بکشید یا روی آن کلیک کنید</p>
                        <form action="{{url("/")}}/adm/sliders" name="media" class="dropzone" id="my-awesome-dropzone"
                              method="post" enctype="multipart/form-data">
                            @csrf
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
            $(".input-form-label").on("click", function(){
                $(this).removeClass("btn");
                $(this).removeClass("digi-red");
                $(this).removeClass("text-white");
                $(this).addClass("active-field");
                $(".input-form input").addClass("active-field");
            });
            $("[type=reset]").on("click", function(){
                $(".input-form-label").addClass("btn");
                $(".input-form-label").addClass("digi-red");
                $(".input-form-label").addClass("text-white");
                $(".input-form-label").removeClass("active-field");
                $(".input-form input").removeClass("active-field");
            });
        });

        Dropzone.options.myAwesomeDropzone = {
            dictDefaultMessage: "فایل ها را اینجا رها کنید تا آپلود شود",
            dictFallbackMessage: "مرورگر شما از بارگذاری فایل با قابلیت کشیدن و رها کردن(drag'n'drop) پشتیبانی نمیکند.",
            dictFallbackText: "Please use the fallback form below to upload your files like in the olden days.",
            {{--dictFileTooBig: "حجم فایل خیلی زیاد است ({{filesize}}MiB). حداکثر اندازه فایل: {{maxFilesize}}MiB.",--}}
            dictInvalidFileType: "شما نمیتوانید فایل هایی از این نوع را آپلود کنید.",
            {{--dictResponseError: "سرور با کد {{statusCode}} پاسخ داد.",--}}
            dictCancelUpload: "لغو آپلود",
            dictCancelUploadConfirmation: "آیا مطمئنید که میخواهید این آپلود را لغو کنید؟",
            dictRemoveFile: "حذف فایل",
            dictMaxFilesExceeded: "You can not upload any more files."
        };
    </script>
@endsection
