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
                            <li><a href="contact.html">Контакты</a></li>
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
        @if(session("status"))
            <div class="alert alert-success" style="text-align: center">
                {{session("status")}}
            </div>
        @endif
        @yield("content")

        <div id="footer">
            <div class="footer-instagram-section">
                <h3 class="footer-instagram-title text-center text-uppercase">Instagram</h3>

                <div id="footer-instagram" class="owl-carousel">

                    <div class="item">
                        <a href="#"><img src="/images/ins-1.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/images/ins-2.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/images/ins-3.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/images/ins-4.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/images/ins-5.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/images/ins-6.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/images/ins-7.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/images/ins-8.jpg" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer-widget-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <aside class="footer-widget">
                            <div class="about-img"><img src="/images/footer-logo.png" alt=""></div>
                            <div class="about-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed voluptua. At vero eos et
                                accusam et justo duo dlores et ea rebum magna text ar koto din.
                            </div>
                            <div class="address">
                                <h4 class="text-uppercase">contact Info</h4>

                                <p> 142/5 BC Street, ES, VSA</p>

                                <p> Phone: +123 456 78900</p>

                                <p>rahim@marlindev.ru</p>
                            </div>
                        </aside>
                    </div>

                    <div class="col-md-4">
                        <aside class="footer-widget">
                            <h3 class="widget-title text-uppercase">Testimonials</h3>

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!--Indicator-->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="single-review">
                                            <div class="review-text">
                                                <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                    tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                    vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                                    magna aliquyam eratma</p>
                                            </div>
                                            <div class="author-id">
                                                <img src="/images/author.png" alt="">

                                                <div class="author-text">
                                                    <h4>Sophia</h4>

                                                    <h4>Client, Tech</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single-review">
                                            <div class="review-text">
                                                <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                    tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                    vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                                    magna aliquyam eratma</p>
                                            </div>
                                            <div class="author-id">
                                                <img src="/images/author.png" alt="">

                                                <div class="author-text">
                                                    <h4>Sophia</h4>

                                                    <h4>Client, Tech</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single-review">
                                            <div class="review-text">
                                                <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                    tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                    vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                                    magna aliquyam eratma</p>
                                            </div>
                                            <div class="author-id">
                                                <img src="/images/author.png" alt="">

                                                <div class="author-text">
                                                    <h4>Sophia</h4>

                                                    <h4>Client, Tech</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </aside>
                    </div>
                    <div class="col-md-4">
                        <aside class="footer-widget">
                            <h3 class="widget-title text-uppercase">Custom Category Post</h3>


                            <div class="custom-post">
                                <div>
                                    <a href="#"><img src="/images/footer-img.png" alt=""></a>
                                </div>
                                <div>
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </aside>
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

