<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#мячик - Блог о футболе</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/front.css">
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
</head>
<body>
        <nav class="navbar main-menu navbar-default">
            <div class="container">
                <div class="menu-content">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route("blog")}}"><img src="/images/logo.png" alt="logo-image"></a>
                    </div>


                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav text-uppercase">
                            <li><a href="{{route("blog")}}">Главная страница</a></li>
                            <li><a href="about-me.html">Информация</a></li>
                            <li><a href="#cont">Контакты</a></li>
                            <a class="navbar-brand"><img src="/images/soccer-field.png" alt="logo-image"></a>

                        </ul>

                        <ul class="nav navbar-nav text-uppercase pull-right">
                            @if(Auth::check() && Auth::user()->is_admin)
                                <li><a href="{{route("admin.dashboard")}}">Админка</a></li>
                            @endif
                            @if(Auth::check())
                                <li><a href="/profile">Мой профиль</a></li>
                                <li><a href="{{route("logout")}}">Выход</a></li>
                            @else
                            <li><a href="{{route("registerForm")}}">Регистрация</a></li>
                            <li><a href="{{route("loginForm")}}">Вход</a></li>
                            @endif
                        </ul>

                    </div>
                    <div class="show-search">
                        <form role="search" method="get" id="searchform" action="#">
                            <div>
                                <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if(session("status"))
                            <div class="alert alert-info" style="text-align: center">
                                {{session("status")}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @yield("content")

        <div id="footer">
            <div class="footer-instagram-section">
                <h3 class="footer-instagram-title text-center text-uppercase">Изображения из статей</h3>

                <div id="footer-instagram" class="owl-carousel">

                    <div class="item">
                        <a href="/images/ins-1.jpg" target="_blank"><img src="/images/ins-1.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="/images/ins-2.jpg" target="_blank"><img src="/images/ins-2.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="/images/ins-3.jpg" target="_blank"><img src="/images/ins-3.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="/images/ins-4.jpg" target="_blank"><img src="/images/ins-4.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="/images/ins-5.jpg" target="_blank"><img src="/images/ins-5.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="/images/ins-6.jpg" target="_blank"><img src="/images/ins-6.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="/images/ins-7.jpg" target="_blank"><img src="/images/ins-7.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="/images/ins-8.jpg" target="_blank"><img src="/images/ins-8.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-widget-section">
            <div class="container">
{{--                 <div class="wrapper-img-about"><img src="/images/footer-logo.png" alt=""></div>--}}
                    <div class="text-cont">
                          <h4 class="text-uppercase" >Контактная информация:</h4>

                          <p > г.Минск, Беларусь</p>

                          <p> Телефон: +375 29 5832381</p>

                          <p id="cont">blender-04@yandex.by</p>
                    </div>
                 </div>
            </div>
            <div class="footer-copy">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">&copy; 2022 <a href="#">Блог #мячик </a> создан с <i
                                    class="fa fa-heart"></i>  <a href="#">Романом Пилецким</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/front.js"></script>
</body>
</html>

