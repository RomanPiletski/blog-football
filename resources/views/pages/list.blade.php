@extends("layout")

@section("content")


    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-md-6">
                            <article class="post post-grid">
                                <div class="post-thumb">
                                    <a href="{{route("post.show", $post->slug)}}"><img src="{{asset("storage/". $post->image)}}" alt=""></a>

                                    <a href="{{route("post.show", $post->slug)}}" class="post-thumb-overlay text-center">
                                        <div class="text-uppercase text-center">View Post</div>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <header class="entry-header text-center text-uppercase">
                                        @if($post->hasCategory())
                                            <h6><a href="{{route("category.show", $post->category->slug)}}">{{$post->getCategoryTitle()}}</a></h6>
                                        @endif
                                        <h1 class="entry-title"><a href="{{route("post.show", $post->slug)}}">{{$post->title}}</a></h1>


                                    </header>
                                    <div class="entry-content">
                                        <p>{!!$post->description!!}
                                        </p>

                                        <div class="social-share">
                                            <span class="social-share-title pull-left text-capitalize">By Rubel On February 12, 2016</span>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>
                        @endforeach
                    </div>
                    {{$posts->links()}}
                </div>
                <div class="col-md-4" data-sticky_column>
                    <div class="primary-sidebar">
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

                            <div class="popular-post">


                                <a href="#" class="popular-img"><img src="/images/p1.jpg" alt="">

                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>

                                </div>
                            </div>
                            <div class="popular-post">

                                <a href="#" class="popular-img"><img src="/images/p1.jpg" alt="">

                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                            <div class="popular-post">


                                <a href="#" class="popular-img"><img src="/images/p1.jpg" alt="">

                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget">
                            <h3 class="widget-title text-uppercase text-center">Featured Posts</h3>

                            <div id="widget-feature" class="owl-carousel">
                                <div class="item">
                                    <div class="feature-content">
                                        <img src="/images/p1.jpg" alt="">

                                        <a href="#" class="overlay-text text-center">
                                            <h5 class="text-uppercase">Home is peaceful</h5>

                                            <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feature-content">
                                        <img src="/images/p2.jpg" alt="">

                                        <a href="#" class="overlay-text text-center">
                                            <h5 class="text-uppercase">Home is peaceful</h5>

                                            <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feature-content">
                                        <img src="/images/p3.jpg" alt="">

                                        <a href="#" class="overlay-text text-center">
                                            <h5 class="text-uppercase">Home is peaceful</h5>

                                            <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget pos-padding">
                            <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/images/r-p.jpg" alt="">

                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/images/r-p.jpg" alt="">

                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/images/r-p.jpg" alt="">

                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/images/r-p.jpg" alt="">

                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget border pos-padding">
                            <h3 class="widget-title text-uppercase text-center">Categories</h3>
                            <ul>
                                <li>
                                    <a href="#">Food & Drinks</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">Travel</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">Story</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">DIY & Tips</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content-->


@endsection
