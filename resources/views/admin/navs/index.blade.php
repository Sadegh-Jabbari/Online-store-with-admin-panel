@extends('admin.layouts.master')
@section("extracss")
    <style>
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        #mainMenu li {
            cursor: pointer;
        }
        #mainMenu > div > ul >  li a {
            font-size: 12px;
            color: #62666d;
        }
        #mainMenu > div > ul > li.category {
            font-size: 14px;
            font-weight: 600;
            color: #424750;
        }
        #mainMenu > div > ul:first-child > li {
            height: 25px;
        }
        #mainMenu > div > ul:first-child > li:hover {
            border-bottom: 2px solid #ef4056;
        }
        .dropdown-container {
            display: none;
            position: absolute;
            left: 0;
            right: 0;
            top: 2.1rem;
            width: 100%;
            background: #fff;
            border: 1px solid #c0c0c0;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 5px 10px rgba(0, 0, 0, 0.5);
            z-index: 2;
        }
        .category:hover .dropdown-container {
            display: block;
        }
        .dropdown-content {
            width: 17%;
            border-left: 1px solid #c0c0c0;
        }
        .dropdown-item {
            padding: 1rem;
            cursor: pointer;
        }
        .dropdown-item .row .col {
            padding: 0;
        }
        .category .dropdown-item:hover > a, .category .dropdown-item .row .col ul li:hover a, .category .dropdown-item .row .col ul li:hover a h4 {
            color: #ef4056 !important;
        }
        .dropdown-item .row {
            position: absolute;
            right: 12rem;
            top: 0;
            width: 83%;
            height: 100%;
            display: none;
        }
        .dropdown-item .row:first-child {
            display: flex;
        }
        .dropdown-item .row ul h4 {
            font-size: 14px;
        }
        .dropdown-item:hover .row {
            display: flex;
            flex-wrap: wrap;
        }
        .dropdown-item h4 {
            border-right: 2px solid #ef4056;
            padding-right: 0.5rem;
            margin: 0.25rem 0 0;
            font-weight: 900;
        }
        .dropdown-item .col li {
            padding: 0.4rem 1rem;
        }
        .separator p {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
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
                        <h5 class="mb-0 text-center"><strong>مدیریت منو ها</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                            <p class="fw-bold position-absolute m-0 px-5 bg-white">
                                پیش نمایش منو
                            </p>
                        </div>
                        <nav id="mainMenu" class="d-flex position-relative pt-2">
                            <div class="d-flex justify-content-between align-items-center flex-grow-1">
                                <ul class="d-none d-lg-flex align-items-center">
                                    @foreach($navs as $main)
                                    @if($main->main_nav_name != null)
                                    <li class="@if($main->hasMegaMenu == 1)category @endif px-2 d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-bars me-2"></i>
                                            {{$main->main_nav_name}}
                                        </div>
                                        @if($main->hasMegaMenu == 1)
                                        <div class="dropdown-container">
                                            <ul class="dropdown-content p-0">
                                                @foreach($catMenu as $cat)
                                                    @if($cat->father_id == $main->id && $cat->cat_nav_title != null)
                                                    <li class="dropdown-item">
                                                    <a href="{{$cat->cat_nav_url}}">
                                                        {{$cat->cat_nav_title}}
                                                    </a>
                                                    @if($cat->hasChild == 1)
                                                    <div class="row overflow-auto">
                                                        <div class="col">
                                                            <ul>
                                                                @foreach($subMenu as $sub)
                                                                @if($sub->father_id == $cat->id)
                                                                <li>
                                                                    <a href="{{$sub->sub_nav_url}}">
                                                                        @if($sub->main_branch == 1)
                                                                        <h4>{{$sub->sub_nav_title}}</h4>
                                                                        @else
                                                                            {{$sub->sub_nav_title}}
                                                                        @endif
                                                                    </a>
                                                                </li>
                                                                @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </nav>
                        <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                            <p class="fw-bold position-absolute m-0 px-5 bg-white">
                                ویرایش گزینه های اصلی
                            </p>
                        </div>
                        <div>
                            <table class="w-100" style="box-shadow: 0 0 0 2px #ef394e; border-radius: 8px; border-style: hidden">
                                <thead class="border-bottom border-danger">
                                <tr>
                                    <th class="p-2 text-center" style="width: 5%">ردیف</th>
                                    <th class="p-2" style="width: 20%">عنوان</th>
                                    <th class="p-2" style="width: 35%">آدرس</th>
                                    <th class="p-2" style="width: 15%">دارای زیرمجموعه:</th>
                                    <th class="p-2 text-center" style="width: 25%">مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 1;
                                $j = 1;
                                $k = 1;
                                @endphp
                                @foreach($navs as $nav)
                                    @if($nav->main_nav_name != null)
                                    <tr>
                                        <td class="p-2 text-center">
                                            <p class="m-0">
                                                @php
                                                echo $i;
                                                    $i++;
                                                @endphp
                                            </p>
                                        </td>
                                        <td class="p-2">
                                            <div class="w-100" style="max-height: 200px">
                                                <p class="m-0">{{$nav->main_nav_name}}</p>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="w-100" style="max-height: 200px">
                                                <a href="{{$nav->main_nav_url}}" class="m-0">{{$nav->main_nav_url}}</a>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="w-100" style="max-height: 200px">
                                                @if($nav->hasMegaMenu == 1)
                                                    <p class="m-0">هست</p>
                                                @endif
                                                @if($nav->hasMegaMenu == 0)
                                                    <p class="m-0">نیست</p>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="d-flex justify-content-evenly">
                                                <a href="{{route("navs.edit", $nav->id)}}" class="btn btn-success">ویرایش</a>
                                                <form action="{{route("navs.destroy", $nav->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="حذف" class="btn btn-danger">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                            <p class="fw-bold position-absolute m-0 px-5 bg-white">
                                ویرایش دسته بندی ها
                            </p>
                        </div>
                        <div>
                            <table class="w-100" style="box-shadow: 0 0 0 2px #ef394e; border-radius: 8px; border-style: hidden">
                                <thead class="border-bottom border-danger">
                                <tr>
                                    <th class="p-2 text-center" style="width: 0%">ردیف</th>
                                    <th class="p-2" style="width: 20%">عنوان</th>
                                    <th class="p-2" style="width: 20%">آدرس</th>
                                    <th class="p-2" style="width: 20%">زیر مجموعه گزینه ی:</th>
                                    <th class="p-2" style="width: 10%">دارای زیر منو:</th>
                                    <th class="p-2 text-center" style="width: 26%">مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($catMenu as $cat)
                                    @if($cat->cat_nav_title != null)
                                        <tr>
                                            <td class="p-2 text-center">
                                                <p class="m-0">
                                                    @php
                                                        echo $j;
                                                            $j++;
                                                    @endphp
                                                </p>
                                            </td>
                                            <td class="p-2">
                                                <div class="w-100" style="max-height: 200px">
                                                    <p class="m-0">{{$cat->cat_nav_title}}</p>
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <div class="w-100" style="max-height: 200px">
                                                    <a href="{{$cat->cat_nav_url}}" class="m-0">{{$cat->cat_nav_url}}</a>
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                @php
                                                $catId = $cat->father_id;
                                                $fatherId = \App\Models\navs::find($catId);
                                                $fatherName = $fatherId->main_nav_name;
                                                @endphp
                                                <div class="w-100" style="max-height: 200px">
                                                    <p class="m-0">{{$fatherName}}</p>
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <div class="w-100" style="max-height: 200px">
                                                    @if($cat->hasChild == 1)
                                                    <p class="m-0">هست</p>
                                                    @endif
                                                    @if($cat->hasChild == 0)
                                                    <p class="m-0">نیست</p>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="{{route("navs.edit", $cat->id)}}" class="btn btn-success">ویرایش</a>
                                                    <form action="{{route("navs.destroy", $cat->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="حذف" class="btn btn-danger">
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="separator border-bottom border-2 border-dark my-5 position-relative">
                            <p class="fw-bold position-absolute m-0 px-5 bg-white">
                                ویرایش زیرمنو ها
                            </p>
                        </div>
                        <div>
                            <table class="w-100" style="box-shadow: 0 0 0 2px #ef394e; border-radius: 8px; border-style: hidden">
                                <thead class="border-bottom border-danger">
                                <tr>
                                    <th class="p-2 text-center" style="width: 0%">ردیف</th>
                                    <th class="p-2" style="width: 20%">عنوان</th>
                                    <th class="p-2" style="width: 20%">آدرس</th>
                                    <th class="p-2" style="width: 20%">زیر مجموعه گزینه ی:</th>
                                    <th class="p-2" style="width: 10%">شاخه اصلی:</th>
                                    <th class="p-2 text-center" style="width: 26%">مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subMenu as $sub)
                                    @if($sub->sub_nav_title != null)
                                        <tr>
                                            <td class="p-2 text-center">
                                                <p class="m-0">
                                                    @php
                                                        echo $k;
                                                            $k++;
                                                    @endphp
                                                </p>
                                            </td>
                                            <td class="p-2">
                                                <div class="w-100" style="max-height: 200px">
                                                    <p class="m-0">{{$sub->sub_nav_title}}</p>
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <div class="w-100" style="max-height: 200px">
                                                    <a href="{{$sub->sub_nav_url}}" class="m-0">{{$sub->sub_nav_url}}</a>
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                @php
                                                    $subId = $sub->father_id;
                                                    $father_id = \App\Models\categoriesMenu::find($subId);
                                                    $father_name = $father_id->cat_nav_title;
                                                @endphp
                                                <div class="w-100" style="max-height: 200px">
                                                    <p class="m-0">{{$father_name}}</p>
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <div class="w-100" style="max-height: 200px">
                                                    @if($sub->main_branch == 1)
                                                        <p class="m-0">هست</p>
                                                    @endif
                                                    @if($sub->main_branch == 0)
                                                        <p class="m-0">نیست</p>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="{{route("navs.edit", $sub->id)}}" class="btn btn-success">ویرایش</a>
                                                    <form action="{{route("navs.destroy", $sub->id)}}" method="post" name="sub_destroy">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="حذف" class="btn btn-danger">
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
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
