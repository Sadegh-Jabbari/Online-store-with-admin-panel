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
                        <h5 class="mb-0 text-center"><strong>مدیریت صفحه اصلی</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="/firstmgns" method="post">
                            @csrf
                            <div class="mb-2">
                                <label for="baner_id">بنر انتخاب کنید</label>
                                <select class="js-example-basic-single w-100" name="baner_id" id="baner_id">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="logonave">منوی لوگو انتخاب کنید</label>
                                <select class="js-example-basic-single w-100" name="logonave" id="logonave">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="loginvav">منوی لاگین انتخاب کنید</label>
                                <select class="js-example-basic-single w-100" name="loginvav" id="loginvav">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="mainnav">منوی اصلی انتخاب کنید</label>
                                <select class="js-example-basic-single w-100" name="mainnav" id="mainnav">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="citynav">منوی شهر انتخاب کنید</label>
                                <select class="js-example-basic-single w-100" name="citynav" id="citynav">
                                    <option value=""></option>
                                </select>
                            </div>
                            <h2>
                                اسلایدر
                            </h2>
                            <div class="mb-2">
                                <label for="mainSlider">اسلایدر اصلی سایت را انتخاب کنید.</label>
                                <select class="js-example-basic-single w-100" name="mainSlider" id="mainSlider">
                                    <option value=""></option>
                                </select>
                            </div>
                            <h2>
                                دسته بندی محصولات
                            </h2>
                            <div class="mb-2">
                                <label for="redcat">دسته بندی محصولات قرمز</label>
                                <select class="js-example-basic-single w-100" name="redcat" id="redcat">
                                    <option value=""></option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Section: Main chart -->


        </div>
    </main>


@endsection
@section("extrajs")



@endsection
