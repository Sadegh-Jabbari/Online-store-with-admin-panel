<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="{{url("/")}}/adm" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>مدیریت صفحه اصلی</span>
            </a>
{{--            <a href="{{url("/")}}/adm/banners" class="list-group-item list-group-item-action py-2 ripple ">--}}
{{--                <i class="fab fa-slideshare --}}{{--fa-chart-area--}}{{-- fa-fw me-3"></i><span>مدیریت بنر</span>--}}
{{--            </a>--}}
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
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
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-sliders-h fa-fw me-3"></i>
                    <span>مدیریت اسلایدر</span>
                </div>
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="side-dropdown-content ps-3" style="background: #f5f5f5; display: none">
                <a href="{{url('/')}}/adm/sliders" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-border-all me-3"></i>
                    همه اسلایدر ها
                </a>
                <a href="{{url('/')}}/adm/sliders/create" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-edit me-3"></i>
                    افزودن عکس به اسلایدر
                </a>
            </div>
{{--            <a href="{{url("/")}}/adm/media" class="list-group-item list-group-item-action py-2 ripple"><i--}}
{{--                    class="fas fa-images --}}{{--fa-chart-line--}}{{-- fa-fw me-3"></i><span>مدیریت رسانه</span></a>--}}
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
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
{{--            <a href="{{url("/")}}/adm/navs" class="list-group-item list-group-item-action py-2 ripple">--}}
{{--                <i class="fas fa-bars --}}{{--fa-chart-pie--}}{{-- fa-fw me-3"></i><span>مدیریت منو</span>--}}
{{--            </a>--}}
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bars fa-fw me-3"></i>
                    <span>مدیریت منو</span>
                </div>
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="side-dropdown-content ps-3" style="background: #f5f5f5; display: none">
                <a href="{{url('/')}}/adm/navs" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa me-3"></i>
                    پیش نمایش منو
                </a>
                <a href="{{url('/')}}/adm/navs/create" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-edit me-3"></i>
                    ساخت منو
                </a>
            </div>
{{--            <a href="{{url("/")}}/adm/prods" class="list-group-item list-group-item-action py-2 ripple"><i--}}
{{--                    class="fas fa-box --}}{{--fa-chart-bar--}}{{-- fa-fw me-3"></i><span>مدیریت محصولات</span></a>--}}
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-box fa-fw me-3"></i>
                    <span>مدیریت محصولات</span>
                </div>
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="side-dropdown-content ps-3" style="background: #f5f5f5; display: none">
                <a href="{{url('/')}}/adm/prods" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-box-open me-3"></i>
                    همه محصولات
                </a>
                <a href="{{url('/')}}/adm/prods/create" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-edit me-3"></i>
                    ایجاد محصول
                </a>
            </div>
{{--            <a href="{{url("/")}}/adm/pages" class="list-group-item list-group-item-action py-2 ripple"><i--}}
{{--                    class="fas fa-file align-items-center --}}{{--fa-globe--}}{{-- fa-fw me-3"></i><span>مدیریت صفحات</span></a>--}}
            <button class="list-group-item list-group-item-action py-2 ripple side-dropdown-btn d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-file-alt fa-fw me-3"></i>
                    <span>مدیریت صفحات</span>
                </div>
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="side-dropdown-content ps-3" style="background: #f5f5f5; display: none">
                <a href="{{url('/')}}/adm/pages" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-file me-3"></i>
                    همه صفحات
                </a>
                <a href="{{url('/')}}/adm/pages/create" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-file-import me-3"></i>
                    ایجاد صفحه جدید
                </a>
                <a href="{{url('/')}}/adm/pages/create" class="side-dropdown-item list-group-item list-group-item-action" style="background: #f5f5f5; border: none">
                    <i class="fas fa-edit me-3"></i>
                    صفحه اصلی
                </a>
            </div>
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
