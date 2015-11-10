<?php
/**
 * Created by PhpStorm.
 * User: rolandas
 * Date: 15.11.7
 * Time: 15.12
 */

namespace nfq\Bundle\WeatherBundle;

class WeatherService implements WeatherServiceInterface
{
    //Override $api to use a different weather API
    public $api='yahooAPI';

    public function __construct(DataGetterService $dataGetter)
    {
        $this->dataGetter = $dataGetter;
    }


    //Add different API logic here
    function getWeatherForLocation($x, $y)
    {
        if($this->api == 'yahooAPI')
        {
            $url = 'http://query.yahooapis.com/v1/public/yql?q='.urlencode('select * from weather.forecast where woeid in (SELECT woeid FROM geo.placefinder WHERE text="'. $x .','. $y .'" and gflags="R") and u="c"').'&format=json';
            $data = $this->dataGetter->getData($url);
            return $data->query->results->channel->item->condition->temp;;
        }

        if($this->api == 'openAPI')
        {
            $url = 'api.openweathermap.org/data/2.5/weather?lat='. $x .'&lon='. $y .'&appid=3d1b3e7a1fd087a7afa0759fa5df64a0&units=metric';
            $data = $this->dataGetter->getData($url);
            return $data->main->temp;
        }
    }

}