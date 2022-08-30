@extends('admin.layouts.master')
@section("extracss")
    <style>
        .separator p {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .w-15 {
            width: 15%;
        }
        .w-20 {
            width: 20%;
        }
        .modal-box {
            border: 3px solid #0c0c0c;
            border-radius: 8px;
            box-shadow: 0 20px 10px 10px rgba(0, 0, 0, 50%);
            transition: 1s;
            display: none;
        }
        .modal-header {
            border-bottom: 2px solid #ed143d;
            height: 10%;
        }
        .modal-main {
            background: rgba(78, 78, 78, 0.78);
            border-bottom: 2px solid #ed143d;
            height: 75%;
        }
        .modal-main div {
            width: 200px; height: 200px; border: 2px solid #ed143d;
        }
        .modal-main div img {
            height: -webkit-fill-available;
        }
        .modal-footer {
            height: 15%;
        }
        .modal-footer button {
            width: 20%;
        }
    </style>
@endsection
@section("main")
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>ویرایش بنر</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route("banners.update", $banner->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="input-form mb-2 w-100">
                                <label for="banner_uri" class="input-form-label active-field">عنوان انگلیسی</label>
                                <input type="text" name="banner_uri" id="banner_uri" class="active-field" value="{{$banner->banner_uri}}">
                            </div>
                            <div class="input-form mb-2 w-100">
                                <label for="banner_name" class="input-form-label active-field">متن جایگزین</label>
                                <input type="text" name="banner_name" id="banner_name" class="active-field" value="{{$banner->banner_name}}">
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <p class="w-20 m-0 py-2">عکس فعلی:</p>
                                @php
                                    $bannerID = $banner->media_id;
                                    $mediaId =  App\Models\medias::find($bannerID);
                                    $src = $mediaId->photo_path;
                                    $alt = $mediaId->photo_alt;
                                @endphp
                                <div class="d-flex justify-content-center" style="width: 80%; max-height: 200px">
                                    <img src="{{url('/')}}/{{$src}}" alt="{{$alt}}" class="w-100" style="object-fit: contain">
                                </div>
                            </div>
                            <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                                <p class="fw-bold position-absolute m-0 px-5 bg-white">
                                    افزودن عکس
                                </p>
                            </div>
                            <button type="button" class="btn digi-red text-white w-100 mb-2" id="select-img">انتخاب عکس</button>
                            <label for="index" class="btn digi-red text-white w-100">بارگذاری عکس</label>
                            <input type="file" name="index" id="index" class="d-none">
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn digi-red text-white me-3 w-15">ثبت</button>
                                <button type="reset" class="btn digi-red text-white w-15">بازنشانی</button>
                            </div>
                        </form>
                        {{--                        <form action="{{url("/")}}/adm/banners" class="dropzone" id="my-awesome-dropzone"--}}
                        {{--                              method="post" enctype="multipart/form-data">--}}
                        {{--                            @csrf--}}
                        {{--                        </form>--}}
                    </div>

                    <!-- Modal Box -->
                    <div class="modal-box position-absolute top-0 bottom-0 w-100 h-100 overflow-hidden" id="modal-box">
                        <div class="modal-header d-flex justify-content-end p-2 bg-white">
                            <button class="btn-close close-modal"></button>
                        </div>
                        <div class="modal-main d-flex overflow-auto">
                            @foreach($media as $item)
                                <div class="my-2 mx-1">
                                    <img src="{{url('/')}}/{{$item->photo_path}}" alt="{{$item->photo_alt}}" photoId="{{$item->id}}" class="w-100">
                                </div>
                            @endforeach
                        </div>
                        <div class="modal-footer d-flex justify-content-center py-2 bg-white">
                            <button type="button" class="btn digi-red text-white me-3">مشاهده عکس های بیشتر</button>
                            <button type="button" class="close-modal btn digi-red text-white">بستن</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
@section("extrajs")
    <script>
        $(document).ready(function(){
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
