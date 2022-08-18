<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/all.min.css">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/mdb.rtl.min.css">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/style.css">
    <link rel="shortcut icon" href="{{url('/')}}/admin/img/favicon.png" type="image/x-icon">
    <title>Calculator</title>
</head>
<body class="d-flex flex-row-reverse">
<div class="container-fluid d-sm-flex flex-row-reverse">
    <aside class="history p-3 d-none w-25">
        <div class="pb-2">
            <span class="pb-2">
                History
            </span>
        </div>
        <div>
            <ul class="recent-actions"></ul>
        </div>
    </aside>
    <main class="main position-relative">
        <div class="d-flex align-items-center position-absolute end-0 top-0">
            <a href="{{url('/')}}/adm/calculator">
                <div class="back btn text-white">
                    <i class="fa fa-arrow-circle-left"></i>
                    <span>Back to dashboard</span>
                </div>
            </a>
            <div class="toggle-theme me-2">
                <label for="dark-mode" class="position-relative d-flex align-items-center justify-content-between px-2">
                    <input type="checkbox" name="dark-mode" id="dark-mode" class="position-absolute opacity-0">
                    <span class="toggle-slider position-absolute top-0 start-0 bottom-0 end-0 bg-dark"></span>
                    <i class="fas fa-sun"></i>
                    <i class="fas fa-moon"></i>
                </label>
            </div>
        </div>
        <form action="#">
            <div class="my-4 py-3">
                <input type="text" id="solution" class="w-100" readonly>
                <input type="text" id="result" class="w-100" readonly value="0">
            </div>
            <div class="d-flex">
                <div class="text-center py-4 none-numerical percentage">%</div>
                <div class="text-center py-4 none-numerical clear-entry">CE</div>
                <button type="reset" class="text-center py-4 none-numerical">C</button>
                <div class="text-center py-4 none-numerical backspace"><i class="fas fa-backspace"></i></div>
            </div>
            <div class="d-flex">
                <div class="text-center py-4 none-numerical fraction"><sup>1</sup>/<sub>x</sub></div>
                <div class="text-center py-4 none-numerical power2">x<sup>2</sup>{{--<i class="fas fa-superscript">--}}</i></div>
                <div class="text-center py-4 none-numerical square-root">&radic;{{--<i class="fas fa-square-root-alt"></i>--}}</div>
                <div class="text-center py-4 none-numerical operator">&divide;{{--<i class="fas fa-divide"></i>--}}</div>
            </div>
            <div class="d-flex">
{{--                <div class="text-center py-4 number" onclick="seven()">7</div>--}}
{{--                <div class="text-center py-4 number" onclick="eight()">8</div>--}}
{{--                <div class="text-center py-4 number" onclick="nine()">9</div>--}}
{{--                <div class="text-center py-4 operator" onclick="multiply()"><i class="fas fa-times"></i></div>     --}}
                <div class="text-center py-4 numberical number">7</div>
                <div class="text-center py-4 numberical number">8</div>
                <div class="text-center py-4 numberical number">9</div>
                <div class="text-center py-4 none-numerical operator">&times;{{--<i class="fas fa-times"></i>--}}</div>
            </div>
            <div class="d-flex">
{{--                <div class="text-center py-4 number" onclick="four()">4</div>--}}
{{--                <div class="text-center py-4 number" onclick="five()">5</div>--}}
{{--                <div class="text-center py-4 number" onclick="six()">6</div>--}}
{{--                <div class="text-center py-4 operator" onclick="subtraction()"><i class="fas fa-minus"></i></div> --}}
                <div class="text-center py-4 numberical number"  >4</div>
                <div class="text-center py-4 numberical number"  >5</div>
                <div class="text-center py-4 numberical number"  >6</div>
                <div class="text-center py-4 none-numerical operator" >-{{--<i class="fas fa-minus"></i>--}}</div>
            </div>
            <div class="d-flex">
{{--                <div class="text-center py-4 number" onclick="one()">1</div>--}}
{{--                <div class="text-center py-4 number" onclick="two()">2</div>--}}
{{--                <div class="text-center py-4 number" onclick="three()">3</div>--}}
{{--                <div class="text-center py-4 operator" onclick="sum()"><i class="fas fa-plus"></i></div>   --}}
                <div class="text-center py-4 numberical number">1</div>
                <div class="text-center py-4 numberical number">2</div>
                <div class="text-center py-4 numberical number">3</div>
                <div class="text-center py-4 none-numerical operator">+{{--<i class="fas fa-plus"></i>--}}</div>
            </div>
            <div class="d-flex">
{{--                <div class="text-center py-4 number" onclick="negative()">+/-</div>--}}
{{--                <div class="text-center py-4 number" onclick="zero()">0</div>--}}
{{--                <div class="text-center py-4 number" onclick="decimal()">.</div>--}}
{{--                <button type="submit" class="text-center py-4 result" onclick="calc()"><i class="fas fa-equals"></i></button>--}}
                <div class="text-center py-4 numberical negative">+/-</div>
                <div class="text-center py-4 numberical number">0</div>
                <div class="text-center py-4 numberical decimal">.</div>
                <div class="text-center py-4 none-numerical result text-white">={{--<i class="fas fa-equals"></i>--}}</div>
            </div>
        </form>
    </main>
</div>

<script src="{{url("/")}}/calc/assest/js/jquery-3.6.0.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/all.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/bootstrap.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/swiper-bundle.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/mdb.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/script.js"></script>
{{--<script src="{{url("/")}}/calc/assest/js/myscript.js"></script>--}}

</body>
</html>
