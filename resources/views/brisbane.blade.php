@extends('master')

@section('content')
    <div class="row" style="padding-bottom: 50px">
        <div class="col-md-12">
            <h1>Brisbane's Weather Observations</h1>
        </div>
        <div class="col-md-4">
            <p class="weather-title">Rain:</p>
            <div class="rain-box">
                <div class="weather-text">{{$rain}}</div>
            </div>

            <p class="weather-title">Relative Humidity:</p>
            <div class="humid-box">
                <div class="weather-text">{{$currentRelativeHumidity}}%</div>
            </div>
        </div>

        <div class="col-md-4">
            <p class="weather-title">Wind Current:</p>
            <div class="rain-box">
                <div class="weather-text">{{$currentWind}}<span style="font-size: 0.7em">km/h</span></div>
            </div>
            <p class="weather-title">Direction:</p>
            <div class="humid-box">
                <div class="weather-text">{{$currentWindDirection}}</div>
            </div>

        </div>

        <div class="col-md-4">
            <p class="weather-title">Current Temperature:</p>
            <div class="weather-box">
                <div class="temp-text">{{$currentTemperature}}℃</div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="temps_div"></div>

        </div>
    </div>
    <div class="row">
        <a href="/" class="btn btn-default btn-lg back-button" role="button">Back</a>

    </div>

    <?= $lava->render('LineChart', 'Temps', 'temps_div'); ?>

@stop