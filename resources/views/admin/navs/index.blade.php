@extends('admin.layouts.master')
@section("extracss")
    <style>
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
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
            color: #ef4056;
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
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
@section("extrajs")



@endsection
