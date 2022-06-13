<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
{{--        <div style="font-weight:bold; text-align:center; color: #333; background-color: #fff; border: 2px solid #eee; max-width: 100%; margin-bottom: 10px; padding: 10px">--}}
{{--            <p>Погода: г. {{mb_strtoupper($weather->coordinates()->getCityName())}} {{round($weather->temperature()->getCurrentTemperature(),1)}}&deg C.--}}
{{--                Ощущается как {{round($weather->temperature()->getFeelsLikeTemperature(),1)}}&deg C.</p>--}}
{{--            <p style="font-size: 125%;">{{$weather->cloudiness()->getDescription()}} <img src="{{asset("storage/img/weather/". $weather->cloudiness()->getIcon() . "@2x.png")}}" alt="image-weather"></p>--}}
{{--            <p style="font-size: 125%;">Влажность {{$weather->temperature()->getHumidity()}} %.--}}
{{--                Давление {{round($weather->temperature()->getPressure() * 0.75006375541921, 0)}} мм.рт.ст. </p>--}}
{{--        </div>--}}
        <aside class="widget news-letter">
            <h3 class="widget-title text-uppercase text-center">Get Newsletter</h3>

            <form action="#">
                <input type="email" placeholder="Your email address">
                <input type="submit" value="Subscribe Now"
                       class="text-uppercase text-center btn btn-subscribe">
            </form>

        </aside>
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
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
            <h3 class="widget-title text-uppercase text-center">Featured Posts</h3>

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
            <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>
            @foreach($recentPosts as $post)
            <div class="thumb-latest-posts">


                <div class="media">
                    <div class="media-left">
                        <a href="{{route("post.show", $post->slug)}}" class="popular-img"><img src="{{asset("storage/". $post->image)}}" alt="">
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
            <h3 class="widget-title text-uppercase text-center">Categories</h3>
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
