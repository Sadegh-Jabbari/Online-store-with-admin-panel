@extends('admin.layouts.master')
@section("extracss")



@endsection
@section("main")
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>ایجاد بنر جدید</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route("banners.store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
{{--                            <select name="banner" id="baner">--}}
{{--                                <option value="media_id"></option>--}}
{{--                            </select>--}}
{{--                            <p> عکس جدید برای بنر</p>--}}
{{--                            <input type="file" name="topAdBanner">--}}
{{--                            <input type="submit" value="ثبت">--}}
                            <div class="input-form mb-2 w-100">
                                <label for="banner_uri" class="input-form-label btn digi-red text-white">عنوان انگلیسی</label>
                                <input type="text" name="banner_uri" id="banner_uri">
                            </div>
                            <div class="input-form mb-2 w-100">
                                <label for="banner_name" class="input-form-label btn digi-red text-white">عنوان بنر</label>
                                <input type="text" name="banner_name" id="banner_name">
                            </div>
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white"
                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    افزودن عکس
                                </p>
                            </div>
                            <button type="button" class="btn digi-red text-white w-100 mb-2" id="select-img">انتخاب عکس</button>
                            <label for="media_id" class="btn digi-red text-white w-100">بارگذاری عکس</label>
                            <input type="file" name="media_id" id="media_id" class="d-none">
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn text-white me-3" style="background: #ef394e; width: 15%">ثبت</button>
                                <button type="reset" class="btn text-white" style="background: #ef394e; width: 15%">بازنشانی</button>
                            </div>
                        </form>
{{--                        <form action="{{url("/")}}/adm/banners" class="dropzone" id="my-awesome-dropzone"--}}
{{--                              method="post" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
                    </div>

                    <!-- Modal Box -->
                    <div class="position-absolute top-0 bottom-0 w-100 h-100 bg-white" id="modal-box" style="z-index: 100;border: 3px solid #0c0c0c; border-radius: 16px; box-shadow: 0px 20px 10px 10px rgba(0, 0, 0, 50%);transition: 1s; display: none">
                        <div class="d-flex justify-content-end p-2 bg-white" style="border-bottom: 2px solid crimson; border-radius: 16px 16px 0 0">
                            <button class="btn-close close-modal"></button>
                        </div>
                        <div class="d-grid h-75 overflow-auto" style="grid-template-columns: auto auto auto auto auto;background: rgba(239, 57, 78, 0.5); border-bottom: 2px solid crimson">
{{--                            @foreach ($firstMedias as $medias)--}}
{{--                                <div class="col">--}}
{{--                                    <img src="{{url('/')}}/{{$medias->photo_path}}" alt="{{$medias->photo_alt}}" class="modal-image" photoId="{{$medias->id}}">--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
                            <div class="my-2 mx-1" style="min-height: 200px; border: 2px solid crimson"></div>
                            <div class="my-2 mx-1" style="min-height: 200px; border: 2px solid crimson"></div>
                            <div class="my-2 mx-1" style="min-height: 200px; border: 2px solid crimson"></div>
                            <div class="my-2 mx-1" style="min-height: 200px; border: 2px solid crimson"></div>
                            <div class="my-2 mx-1" style="min-height: 200px; border: 2px solid crimson"></div>
                            <div class="my-2 mx-1" style="min-height: 200px; border: 2px solid crimson"></div>
                        </div>
                        <div class="d-flex justify-content-center py-2 bg-white" style="border-radius: 0 0 16px 16px">
                            <button type="button" class="btn text-white me-3" style="background: #ef394e; width: 20%">مشاهده عکس های بیشتر</button>
                            <button type="button" class="close-modal btn text-white" style="background: #ef394e; width: 20%">بستن</button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Main chart -->


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
            $("#select-img").on("click", function () {
                $("#modal-box").css("display", "block");
            });
            $(".close-modal").on("click", function () {
                $("#modal-box").css("display", "none");
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
