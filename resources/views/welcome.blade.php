
<!DOCTYPE HTML> 
<html lang="ja"> 
<head> 
<meta charset="UTF-8"> 
<title>jquery.yycountdown.js</title> 
<link rel="stylesheet" href="./common/css/reset.css">
<link rel="stylesheet" href="./common/css/common.css">
<link rel="stylesheet" href="./css/jquery.yycountdown.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head> 
<body>

<header>
<h1></h1>
</header><!-- header -->

<div id="contents">
<div class="inner">

<h1>Timer sample 1</h1>
<div id="olympic">
	TOKYO<span>●</span>2020
</div>
<div id="olympicDate">
	TOKYO Olympics is on Friday, 24 July 2020 !!
</div>
<div id="timer"></div>
<h1>Timer sample 2</h1>
<div id="timer2"></div>

</div><!-- inner -->
</div><!-- contents -->

<footer>
<!-- footer -->
</footer>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.yycountdown.min.js"></script>
<script type="text/javascript">
	$("#timer").yycountdown({
		endDateTime   : '2020/07/24 00:00:00'
	});
	
	$("#timer2").yycountdown({
		startDateTime : '2020/07/23 23:59:55',
		endDateTime   : '2020/07/24 00:00:00',
		unit          : {d: '日', h: '時間', m: '分', s: '秒'},
		complete      : function(_this){
							_this.find('.yycountdown-box').fadeOut();
						}
	});
</script>
</body>
</html>



{{-- @extends('common.layout')
@section('child')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/welcome.js"></script>
    <link rel="stylesheet" href="css/jquery.yycountdown.css">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.yycountdown.min.js"></script>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .yycountdown-box {
            text-align: center;
            margin: 10px 0;
            color: #000000;
        }
    </style>
</head>

<body>

    <header>



    </header>
    <div id="timer"></div>
    <div id="timer"></div>
    <div id="timer2"></div>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
</body>

</html>
@endsection --}}