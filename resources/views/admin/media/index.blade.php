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
                        <h5 class="mb-0 text-center"><strong>مدیریت رسانه</strong></h5>
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bold">رسانه ها</h4>
                        <div class="my-4">
                            <a href="{{url('/')}}/adm/media/create" class="btn digi-red text-white w-100">
                                <i class="fas fa-plus-circle"></i>
                                افزودن رسانه
                            </a>
                        </div>
                        <div>
                            <table class="w-100" style="box-shadow: 0 0 0 2px #ef394e; border-radius: 8px; border-style: hidden">
                                <thead class="border-bottom border-danger">
                                <tr>
                                    <th class="p-2">شماره</th>
                                    <th class="p-2"><input type="text" placeholder="بنر" class="w-100"></th>
                                    <th class="p-2 text-center">مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="w-25 p-2">1</td>
                                    <td class="w-50 p-2">
                                        <div class="w-100 border border-danger">
                                            <img src="" alt="">
                                        </div>
                                    </td>
                                    <td class="w-25 p-2">
                                        <div class="d-flex justify-content-evenly">
                                            <a href="#" class="btn btn-success">ویرایش</a>
                                            <form action="" method="post">
                                                <input type="submit" value="حذف" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
@section("extrajs")



@endsection
