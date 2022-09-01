@extends('admin.layouts.master')
@section("extracss")
    <style>
        table {
            box-shadow: 0 0 0 2px #ef394e;
            border-radius: 8px;
            border-style: hidden;
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
                        <h5 class="mb-0 text-center"><strong>مدیریت اسلایدر ها</strong></h5>
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bold">اسلایدر ها</h4>
                        <div class="my-4">
                            <a href="{{url('/')}}/adm/media/create" class="btn digi-red text-white w-100">
                                <i class="fas fa-plus-circle"></i>
                                افزودن رسانه
                            </a>
                        </div>
                        <div>
                            <table class="w-100">
                                <thead class="border-bottom border-danger">
                                <tr>
                                    <th class="p-2 text-center" style="width: 1%">ردیف</th>
                                    <th class="p-2"><input type="text" placeholder="اسلایدر" class="w-100"></th>
                                    <th class="p-2 text-center" style="width: 1%">جایگاه</th>
                                    <th class="p-2 text-center" style="width: 5%">مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $item)
                                    @php
                                        $sliderID = $item->media_id;
                                        $mediaId =  App\Models\medias::find($sliderID);
                                        $src = $mediaId->photo_path;
                                        $alt = $mediaId->photo_alt;
                                    @endphp
                                    <tr>
                                        <td class="p-2 text-center">
                                            <p class="m-0">{{$item->id}}</p>
                                        </td>
                                        <td class="w-50 p-2">
                                            <div class="w-100 border border-dark" style="max-height: 200px">
                                                <img src="{{url('/')}}/{{$src}}" alt="{{$item->slider_name}}" class="w-100" style="max-height: 198px; object-fit: contain">
                                            </div>
                                        </td>
                                        <td class="p-2 text-center">
                                            <p class="m-0">{{$item->slider_number}}</p>
                                        </td>
                                        <td class="p-2">
                                            <div class="d-flex justify-content-evenly">
                                                <a href="{{route("sliders.edit", $item->id)}}" class="btn btn-success">ویرایش</a>
                                                <form action="{{route("sliders.destroy", $item->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
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
        </div>
    </main>

@endsection
@section("extrajs")



@endsection
