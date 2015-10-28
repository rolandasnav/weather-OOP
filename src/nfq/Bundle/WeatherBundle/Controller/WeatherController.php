<?php

namespace nfq\Bundle\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WeatherController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $yahooTemp = $this->Temp('http://query.yahooapis.com/v1/public/yql?q='.urlencode('select item.condition.temp from weather.forecast where woeid = 479616 and u="c"').'&format=json');
        $openWeatherTemp = $this->Temp('http://api.openweathermap.org/data/2.5/weather?id=593116&appid=bd82977b86bf27fb59a04b61b657fb6f&units=metric');
        return $this->render('nfqWeatherBundle:Weather:index.html.twig', array('yahooTemp'=>$yahooTemp->query->results->channel->item->condition->temp, 'openWeatherTemp'=>$openWeatherTemp->main->temp));
    }

    public function Temp($url)
    {
        $session = curl_init($url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($session);
        $obj = json_decode($json);
        return $obj;
    }



}
