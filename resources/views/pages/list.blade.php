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
                            <article class="post post-grid tile">
                                <div class="post-thumb">
                                    <a href="{{route("post.show", $post->slug)}}"><img src="{{asset("storage/". $post->image)}}" alt=""></a>

                                    <a href="{{route("post.show", $post->slug)}}" class="post-thumb-overlay text-center">
                                        <div class="text-uppercase text-center">ПРОСМОТРЕТЬ</div>
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
                                            <span class="social-share-title pull-left text-capitalize">Создан {{$post->author->name}} {{$post->created_at->format("F j\, Y")}}</span>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>
                        @endforeach
                    </div>
                    {{$posts->links()}}
                </div>
                @include("pages._sidebar")
            </div>
        </div>
    </div>
    <!-- end main content-->


@endsection
