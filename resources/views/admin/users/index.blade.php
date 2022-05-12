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

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route("admin.users.create")}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>E-mail</th>
                            <th>Аватар</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <img src="{{asset("storage/". $user->avatar)}}" alt="avatar-image" class="img-responsive" width="150">
                                </td>
                                <td><a href="{{route("admin.users.edit", $user->id)}}" class="fa fa-pencil"></a>
                                <form method="POST" action="{{route("admin.users.destroy", $user->id)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="delete">
                                    <a class="fa fa-remove"></a>
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                    {{$users->links()}}
                </div>

                <div style="color: #0d6aad; background-color: cornsilk; border: ridge; max-width: 35%; margin: 10px; padding: 10px">
                    <p>Погода: г. {{$weather->coordinates()->getCityName()}} {{round($weather->temperature()->getCurrentTemperature(),1)}}&deg C.
                        Ощущается как {{round($weather->temperature()->getFeelsLikeTemperature(),1)}}&deg C.</p>
                    <p>{{$weather->cloudiness()->getDescription()}} <img src="{{asset("storage/img/weather/". $weather->cloudiness()->getIcon() . "@2x.png")}}" alt="image-weather"></p>
                    <p>Влажность {{$weather->temperature()->getHumidity()}} %.
                        Давление {{round($weather->temperature()->getPressure() * 0.75006375541921, 0)}} мм.рт.ст. </p>
                </div>

                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
