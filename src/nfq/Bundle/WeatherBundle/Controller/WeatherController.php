<?php

namespace nfq\Bundle\WeatherBundle\Controller;

use nfq\Bundle\WeatherBundle\DataGetter;
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
        $weatherAPI = $this->get('nfq.weather');
        $temp = $weatherAPI->getWeatherForLocation(54.6964161,25.2757002);
        return $this->render('nfqWeatherBundle:Weather:index.html.twig', array('temp'=>$temp));
    }





}
