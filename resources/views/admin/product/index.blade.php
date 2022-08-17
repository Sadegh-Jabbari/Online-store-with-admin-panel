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
                        <h5 class="mb-0 text-center"><strong>مدیریت محصولات</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <a href="{{url('/')}}/adm/prods/create">
                                <div class="btn text-white me-3" style="background: #ef394e">
                                    <i class="fas fa-box"></i>
                                    <span>ایجاد محصول</span>
                                </div>
                            </a>
                            <a href="{{url('/')}}/adm/banners/create">
                                <div class="btn text-white me-3" style="background: #ef394e">
                                    <i class="fas fa-edit"></i>
                                    <span>ویرایش محصول</span>
                                </div>
                            </a>
                            <a href="{{url('/')}}/adm/banners/create">
                                <div class="btn text-white me-3" style="background: #ef394e">
                                    <i class="fas fa-trash"></i>
                                    <span>محصولات حذف شده</span>
                                </div>
                            </a>
                            <a href="{{url('/')}}/adm/banners/create">
                                <div class="btn text-white" style="background: #ef394e">
                                    <i class="fas fa-list"></i>
                                    <span>لیست محصولات</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
@section("extrajs")



@endsection