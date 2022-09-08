@extends('admin.layouts.master')
@section("extracss")
    <style>
        td, th {
            text-align: center;
        }
        td a, td a:hover {
            color: inherit;
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
                        <h5 class="mb-0 text-center"><strong>مدیریت محصولات</strong></h5>
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bold">محصولات</h4>
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
                                    <th class="p-2 text-center" style="width: 0%">ردیف</th>
                                    <th class="p-2" style="width: 15%;">عنوان محصول</th>
                                    <th class="p-2 text-center" style="width: 10%">تصویر</th>
                                    <th class="p-2 text-center" style="width: 5%">میزان تخفیف</th>
                                    <th class="p-2 text-center" style="width: 20%">توضیح کوتاه</th>
                                    <th class="p-2 text-center" style="width: 30%">توضیحات کامل</th>
                                    <th class="p-2 text-center" style="width: 20%">مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($prods as $item)
                                    @php
                                        $i = 0;
                                        $prodId = $item->media_id;
                                        $mediaId =  App\Models\medias::find($prodId);
                                        $src = $mediaId->photo_path;
                                        $alt = $mediaId->photo_alt;
                                    @endphp
                                    <tr>
                                        <td class="p-2 text-center">
                                            <p class="m-0">{{$item->id}}</p>
                                        </td>
                                        <td class="p-2 text-center">
                                            <p class="m-0">{{$item->prodName}}</p>
                                        </td>
                                        <td class="p-2">
                                            <div class="w-100" style="max-height: 200px">
                                                <img src="{{url('/')}}/{{$src}}" alt="{{$item->prodName}}" class="w-100" style="max-height: 198px; object-fit: contain">
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="w-100" style="max-height: 200px">
                                                @if($item->discount == 0)
                                                <p class="m-0">ندارد</p>
                                                @else
                                                <p class="m-0">{{$item->discount."%"}}</p>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="p-2 text-center">
                                            <p class="m-0">{{$item->prodShDesc}}</p>
                                        </td>
                                        <td class="p-2 text-center">
                                            {{$item->prodLNDesc}}
                                        </td>
                                        <td class="p-2">
                                            <div class="d-flex justify-content-evenly">
                                                <a href="{{route("prods.edit", $item->id)}}" class="btn btn-success">ویرایش</a>
                                                <form action="{{route("prods.destroy", $item->id)}}" method="post">
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
        </div>
    </main>

@endsection
@section("extrajs")



@endsection
