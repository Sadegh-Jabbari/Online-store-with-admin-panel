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
                        <h5 class="mb-0 text-center"><strong>ایجاد محصول</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/")}}/adm/prods" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex mb-2">
                                <label for="photo_name" class="w-25">عنوان محصول</label>
                                <input type="text" name="photo_name" id="photo_name" class="w-75">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="prodUrl" class="w-25">آدرس محصول</label>
                                <input type="text" name="prodUrl" id="prodUrl" class="w-75">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="ImgP" class="w-25">عکس محصول</label>
{{--                                <input type="file" name="prodIMG" id="prodIMG" class="form-btn w-75">--}}
                                <label class="form-btn btn text-white" for="ImgP">
                                    <i class="fa fa-image"></i>
                                    <span>انتخاب فایل</span>
                                </label>
                                <input type="file" name="ImgP" id="ImgP">
                            </div>
                            <div class="d-flex mb-2">
                                <label for="photo_alt" class="w-25">توضیح کوتاه درباره محصول</label>
                                <input type="text" name="photo_alt" id="photo_alt" class="w-75">
                            </div>
{{--                            <textarea name="prodShDesc" id="" cols="30" rows="10"></textarea>--}}
                            <textarea name="photo_descript" id="summernote" cols="30" rows="10"></textarea>
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
