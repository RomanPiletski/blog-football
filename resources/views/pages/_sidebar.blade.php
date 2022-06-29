<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
        <aside class="widget news-letter">
            <h3 class="widget-title text-uppercase text-center">Подписаться на рассылку</h3>
            @include("admin.errors")
            <form action="{{route("subscribe")}}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Введите Ваш E-mail">
                <input type="submit" value="Подписаться"
                       class="text-uppercase text-center btn btn-subscribe">
            </form>

        </aside>
        <aside class="widget">
            <div class="wrapper-weather">
                <p class="wrapper-weather-name">г. {{mb_strtoupper($weather->coordinates()->getCityName())}} {{round($weather->temperature()->getCurrentTemperature(),1)}}&deg C.<br></p>
                 <p style="color: #00acdf" >Ощущается как {{round($weather->temperature()->getFeelsLikeTemperature(),1)}}&deg C.</p>
                 <p class="wrapper-weather-text" >{{mb_strtoupper($weather->cloudiness()->getDescription())}}<br> <img src="{{asset("storage/img/weather/". $weather->cloudiness()->getIcon() . "@2x.png")}}" alt="image-weather"><br>
                 Влажность: {{$weather->temperature()->getHumidity()}} %.<br>
                 Давление: {{round($weather->temperature()->getPressure() * 0.75006375541921, 0)}} мм.рт.ст. </p>
            </div>
        </aside>
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Популярные статьи</h3>
            @foreach($popularPosts as $post)
            <div class="popular-post">
                <a href="{{route("post.show", $post->slug)}}" class="popular-img"><img src="{{asset("storage/". $post->image)}}" alt="">
                    <div class="p-overlay"></div>
                </a>
                <div class="p-content">
                    <a href="{{route("post.show", $post->slug)}}" class="text-uppercase">{{$post->title}}</a>
                    <span class="p-date">{{$post->created_at->format("F j\, Y")}}</span><br>
                    <span class="p-date">{{$post->views}} просмотров</span>
                </div>
            </div>
            @endforeach
        </aside>
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Рекомендованные статьи</h3>

            <div id="widget-feature" class="owl-carousel">
                @foreach($featuredPosts as $post)
                <div class="item">
                    <div class="feature-content">
                        <img src="{{asset("storage/". $post->image)}}" alt="">

                        <a href="{{route("post.show", $post->slug)}}" class="overlay-text text-center">
                            <h5 class="text-uppercase">{{$post->title}}</h5>

                            <p>{!!$post->description!!}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Недавние статьи</h3>
            @foreach($recentPosts as $post)
            <div class="thumb-latest-posts">
                <div class="media">
                    <div class="media-left">
                        <a href="{{route("post.show", $post->slug)}}" class="popular-img"><img src="{{asset("storage/". $post->image)}}" alt="post-image">
                            <div class="p-overlay"></div>
                        </a>
                    </div>
                    <div class="p-content">
                        <a href="{{route("post.show", $post->slug)}}" class="text-uppercase">{{$post->title}}</a>
                        <span class="p-date">{{$post->created_at->format("F j\, Y")}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Рейтинг пользователей</h3>
            <ul>
                @foreach($ratedUsers as $ratedUser)
                    <li>
                        <a>{{$loop->iteration}}. </a>
                        <a>{{$ratedUser->name}}</a>
                        <span class="post-count pull-right">Баллы: {{$ratedUser->scores}}</span>
                    </li>
                @endforeach
            </ul>
        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Категории статей</h3>
            <ul>
                @foreach($categories as $category)
                <li>
                    <a href="{{route("category.show", $category->slug)}}">{{$category->title}}</a>
                    <span class="post-count pull-right"> ({{$category->posts()->count()}})</span>
                </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>
