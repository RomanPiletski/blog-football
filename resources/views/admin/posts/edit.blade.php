@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Изменить статью
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="{{route('admin.posts.update', $post->slug)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method("PATCH")
      <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Обновляем статью</h3>
            @include('admin.errors')
          </div>
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                       value="{{$post->title}}">
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Лицевая картинка</label>
                <br>



                <img src="{{asset("storage/". $post->image)}}" alt="" class="img-responsive" width="200">
                <br>
                <input type="file" id="exampleInputFile" name="image">
              </div>
              <div class="form-group">
                <label>Категория</label>
                <select name="category_id" class="form-control select2" style="width: 100%;"
                        data-placeholder="Выберите категорию">
                  @foreach($categories as $category)
                    @if($category->id == $post->category_id)
                      <option value="{{$category->id}}" selected>{{$category->title}}</option>
                    @else
                      <option value="{{$category->id}}">{{$category->title}}</option>
                    @endif
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Теги</label>
                <select name="tags[]" class="form-control select2" multiple="multiple"
                        data-placeholder="Выберите теги" style="width: 100%;">
                  @foreach($tags  as $tag)
                    @if(in_array($tag->id, $post->tags->pluck('id')->all()))
                      <option value="{{$tag->id}}" selected>{{$tag->title}}</option>
                    @else
                      <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endif

                  @endforeach
                </select>
              </div>

              <!-- checkbox -->
              <div class="form-group">
                <label>
                  @if($post->is_recommended == true)
                    <input type="checkbox" name="is_recommended"  value="1" class="minimal" checked>
                  @else
                    <input type="checkbox" name="is_recommended"  value="1"  class="minimal">
                  @endif
                </label>
                <label>Рекомендованный</label>
              </div>
              <!-- checkbox -->
              <div class="form-group">
                <label>
                  @if($post->is_publish)
                    <input type="checkbox" name='is_publish'  value="1"  class="minimal" checked>
                  @else
                    <input type="checkbox" name='is_publish'  value="1"  class="minimal">
                  @endif
                </label>
                <label>Публичный</label>
              </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Описание</label>
                    <textarea id="" cols="30" rows="10" class="form-control" name="description">{{$post->description}}</textarea>
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Полный текст</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
              </div>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button class="btn btn-warning pull-right">Изменить</button>
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
