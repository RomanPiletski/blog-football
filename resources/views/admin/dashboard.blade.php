@extends("admin.layout")

@section("content")

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Привет! Это админка
                <small>приятные слова..</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Главная страница</h3>
                </div>
                <div class="box-body">
                    Текст инструкции по пользованию админкой
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    и здесь есть место для какого-нибудь текста
                </div>
                <div style="font-weight:bold; text-align:center; color: #333; background-color: #fff; border: 2px solid #eee; max-width: 100%; margin-bottom: 10px; padding: 10px">
                    <p>Погода: г. {{mb_strtoupper($weather->coordinates()->getCityName())}} {{round($weather->temperature()->getCurrentTemperature(),1)}}&deg C.
                        Ощущается как {{round($weather->temperature()->getFeelsLikeTemperature(),1)}}&deg C.</p>
                    <p style="font-size: 125%;">{{$weather->cloudiness()->getDescription()}} <img src="{{asset("storage/img/weather/". $weather->cloudiness()->getIcon() . "@2x.png")}}" alt="image-weather"></p>
                    <p style="font-size: 125%;">Влажность {{$weather->temperature()->getHumidity()}} %.
                        Давление {{round($weather->temperature()->getPressure() * 0.75006375541921, 0)}} мм.рт.ст. </p>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
