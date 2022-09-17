@extends('admin.layouts.master')
@section("extracss")
    <style>
        table {
            box-shadow: 0 0 0 2px #ef394e;
            border-radius: 8px;
            border-style: hidden;
        }
        td, th {
            text-align: center;
        }
    </style>
@endsection
@section("main")
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>مدیریت کاربران</strong></h5>
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bold">کاربران</h4>
                        <div>
                            <table class="w-100">
                                <thead class="border-bottom border-danger">
                                <tr>
                                    <th class="p-2" style="width: 0%">ردیف</th>
                                    <th class="p-2" style="width: 40%;">نام کاربر</th>
                                    <th class="p-2" style="width: 40%;">ایمیل</th>
                                    <th class="p-2" style="width: 10%;">نقش</th>
                                    <th class="p-2" style="width: 10%">مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    @php
                                        $i = 1;
                                    @endphp
                                    <tr>
                                        <td class="p-2 text-center">
                                            <p class="m-0">@php echo $i; $i++; @endphp</p>
                                        </td>
                                        <td class="p-2">
                                            <div class="w-100" style="max-height: 200px">
                                                <p class="m-0">{{$item->name}}</p>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="w-100" style="max-height: 200px">
                                                <p class="m-0">{{$item->email}}</p>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="w-100" style="max-height: 200px">
                                                <p class="m-0">
                                                    @php
                                                        if ($item->role == 'admin'){
                                                            echo 'مدیر';
                                                        } else {
                                                            echo 'کاربر';
                                                        }
                                                    @endphp
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="d-flex justify-content-evenly">
                                                <form action="{{route("users.destroy", $item->id)}}" method="post">
                                                    @csrf
                                                    @method("DELETE")
                                                    <input type="submit" value="حذف" class="btn btn-danger">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Main chart -->


        </div>
    </main>


@endsection
@section("extrajs")

@endsection
