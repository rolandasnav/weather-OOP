<?php
/**
 * Created by PhpStorm.
 * User: rolandas
 * Date: 15.11.10
 * Time: 14.12
 */

namespace nfq\Bundle\WeatherBundle;


interface WeatherServiceInterface
{
    public function getWeatherForLocation($x, $y);
}