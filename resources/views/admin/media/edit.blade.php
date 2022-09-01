@extends('admin.layouts.master')
@section("extracss")
    <style>
        .w-20 {
            width: 20%;
        }
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
                        <h5 class="mb-0 text-center"><strong>افزودن رسانه</strong></h5>
                    </div>
                    <div class="card-body">
                        <p class="fw-bold"> رسانه جدید</p>
                        <form action="{{route("media.update", $media->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="input-form mb-2 w-100">
                                <label for="photo_name" class="input-form-label active-field">عنوان عکس</label>
                                <input type="text" name="photo_name" id="photo_name" class="active-field" value="{{$media->photo_name}}">
                            </div>
                            <div class="input-form mb-2 w-100">
                                <label for="photo_alt" class="input-form-label active-field">متن جایگزین</label>
                                <input type="text" name="photo_alt" id="photo_alt" class="active-field" value="{{$media->photo_alt}}">
                            </div>
                            <div class="input-form mb-2 w-100">
                                <label for="photo_descript" class="input-form-label active-field">توضیحات</label>
                                <input type="text" name="photo_descript" id="photo_descript" class="active-field" value="{{$media->photo_descript}}">
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <p class="w-20 m-0 py-2">عکس فعلی:</p>
                                @php
                                    $src = $media->photo_path;
                                    $alt = $media->photo_alt;
                                @endphp
                                <div class="d-flex justify-content-center" style="width: 80%; max-height: 200px">
                                    <img src="{{url('/')}}/{{$src}}" alt="{{$alt}}" class="w-100" style="object-fit: contain">
                                </div>
                            </div>
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white"
                                   style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    افزودن عکس
                                </p>
                            </div>
                            <label for="index" class="btn digi-red text-white w-100">بارگذاری عکس</label>
                            <input type="file" name="index" id="index" class="d-none">
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
