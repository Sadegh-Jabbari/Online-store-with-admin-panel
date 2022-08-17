@extends('admin.layouts.master')
@section("extracss")



@endsection
@section("main")
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>ایجاد بنر جدید</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/")}}/adm/banners" method="POST" enctype="multipart/form-data">
                            @csrf
{{--                            <select name="banner" id="baner">--}}
{{--                                <option value="media_id"></option>--}}
{{--                            </select>--}}
{{--                            <p> عکس جدید برای بنر</p>--}}
{{--                            <input type="file" name="topAdBanner">--}}
{{--                            <input type="submit" value="ثبت">--}}
                            <div class="mb-2">
                                <select class="js-example-basic-single w-100" name="banner" id="banner">
                                    <option value="media_id"></option>
                                </select>
                            </div>
                        </form>
                        <form action="{{url("/")}}/adm/banners" class="dropzone" id="my-awesome-dropzone"
                              method="post" enctype="multipart/form-data">
                            @csrf
                        </form>
                    </div>
                </div>
            </section>
            <!-- Section: Main chart -->


        </div>
    </main>


@endsection
@section("extrajs")
    <script>
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