<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="{{url("/")}}/adm" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>مدیریت صفحه اصلی</span>
            </a>
{{--            <a href="{{url("/")}}/adm/banners" class="list-group-item list-group-item-action py-2 ripple ">--}}
{{--                <i class="fab fa-slideshare --}}{{--fa-chart-area--}}{{-- fa-fw me-3"></i><span>مدیریت بنر</span>--}}
{{--            </a>--}}
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between">
                <div>
                    <i class="fab fa-slideshare fa-fw me-3"></i>
                    <span>مدیریت بنر</span>
                </div>
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="side-dropdown-content ps-3" style="background: #f5f5f5; display: none">
                <a href="{{url('/')}}/adm/banners" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-border-all me-3"></i>
                    همه بنرها
                </a>
                <a href="{{url('/')}}/adm/banners/create" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-edit me-3"></i>
                    ایجاد بنر جدید
                </a>
            </div>
{{--            <a href="{{url("/")}}/adm/sliders" class="list-group-item list-group-item-action py-2 ripple"><i--}}
{{--                    class="fas fa-sliders-h --}}{{--fa-lock--}}{{-- fa-fw me-3"></i><span>مدیریت اسلایدر</span></a>--}}
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between">
                <div>
                    <i class="fas fa-sliders-h fa-fw me-3"></i>
                    <span>مدیریت اسلایدر</span>
                </div>
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="side-dropdown-content ps-3" style="background: #f5f5f5; display: none">
                <a href="{{url('/')}}/adm/sliders/create" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-edit me-3"></i>
                    افزودن عکس به اسلایدر
                </a>
            </div>
{{--            <a href="{{url("/")}}/adm/media" class="list-group-item list-group-item-action py-2 ripple"><i--}}
{{--                    class="fas fa-images --}}{{--fa-chart-line--}}{{-- fa-fw me-3"></i><span>مدیریت رسانه</span></a>--}}
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between">
                <div>
                    <i class="fas fa-images fa-fw me-3"></i>
                    <span>مدیریت رسانه</span>
                </div>
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="side-dropdown-content ps-3" style="background: #f5f5f5; display: none">
                <a href="{{url('/')}}/adm/media" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-border-all me-3"></i>
                    کتابخانه
                </a>
                <a href="{{url('/')}}/adm/media/create" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-edit me-3"></i>
                    افزودن
                </a>
            </div>
            <a href="{{url("/")}}/adm/navs" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-bars {{--fa-chart-pie--}} fa-fw me-3"></i><span>مدیریت منو</span>
            </a>
            <a href="{{url("/")}}/adm/prods" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-box {{--fa-chart-bar--}} fa-fw me-3"></i><span>مدیریت محصولات</span></a>
            <a href="{{url("/")}}/adm/pages" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-pager {{--fa-globe--}} fa-fw me-3"></i><span>مدیریت صفحات</span></a>
            <a href="{{url("/")}}/adm/posts" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fab fa-product-hunt {{--fa-building--}} fa-fw me-3"></i><span>پست ها</span></a>
            <a href="{{url("/")}}/adm/calculator" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-calculator {{--fa-calendar--}} fa-fw me-3"></i><span>ماشین حساب</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-users fa-fw me-3"></i><span>کاربران</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-money-bill fa-fw me-3"></i><span>گزارش فروش</span></a>
        </div>
    </div>
</nav>
