<?php
/**
 * Created by PhpStorm.
 * User: rolandas
 * Date: 15.11.7
 * Time: 15.42
 */

namespace nfq\Bundle\WeatherBundle;


class DataGetterService
{
    public function getData($url)
    {
        $session = curl_init($url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($session);
        $obj = json_decode($json);
        return $obj;
    }
}