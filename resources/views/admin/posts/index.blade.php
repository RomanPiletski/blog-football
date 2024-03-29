@extends("admin.layout")

@section("content")


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <form>
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                    @include("admin.errors")
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route("admin.posts.create")}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Теги</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}
                            </td>
                            <td>{{$post->getCategoryTitle()}}</td>
                            <td>{{$post->getTagsTitle()}}</td>
                            <td>
                                <img src="{{asset("storage/". $post->image)}}" alt="post-image" width="100">
                            </td>
                            <td><a href="{{route("admin.posts.edit", $post->slug)}}" class="fa fa-pencil"></a>
                                <form method="POST" action="{{route("admin.posts.destroy", $post->slug)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="delete">
                                        <a class="fa fa-remove"></a>
                                    </button>
                                </form>
                        </tr>
                        @endforeach
                        </tfoot>
                    </table>
                    {{$posts->links()}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@endsection
