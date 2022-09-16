@extends("layout")

@section("content")


    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="login-box">
                        <h2>РЕГИСТРАЦИЯ</h2>
                        @include("admin.errors")
                        <form role="form" method="post" action="/register">
                            @csrf
                            <div class="user-box">
                                <input type="text" id="name" name="name" required="">
                                <label>Имя</label>
                            </div>
                            <div class="user-box">
                                <input type="text" id="email" name="email" required="">
                                <label>E-mail</label>
                            </div>
                            <div class="user-box">
                                <input type="password" id="password" name="password" required="">
                                <label>Пароль</label>
                            </div>
                            <a><span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <button class="btn-login" type="submit">Зарегестрироваться</button></a>
                        </form>
                    </div>
                </div>
                @include("pages._sidebar")
            </div>
        </div>
    </div>
    <!-- end main content-->


@endsection
