<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\RequestTrait;


class MelbourneController extends Controller
{
    use RequestTrait;

    public function index()
    {

        $syd = "http://reg.bom.gov.au/fwo/IDV60901/IDV60901.95936.json";

        $all_data = $this->getWeatherData($syd);
        $currentTemperature = $this->getCurrentTemperature($all_data);
        $currentWind = $this->getCurrentWind($all_data);
        $currentWindDirection = $this->getCurrentWindDirection($all_data);
        $currentRelativeHumidity = $this->getCurrentRelativeHumidity($all_data);

        $lava = $this->createChart($all_data);



        return view('/melbourne')->with(array(
            'currentTemperature' =>$currentTemperature,
            'currentWind'=>$currentWind,
            'currentWindDirection'=>$currentWindDirection,
            'currentRelativeHumidity' =>$currentRelativeHumidity,
            "lava"=>$lava));
    }
}