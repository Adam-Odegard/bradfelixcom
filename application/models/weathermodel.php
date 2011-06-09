<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Weathermodel extends CI_Model
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->driver('cache');
    }
    
	
	function getWeatherXML(){
	
		if ( ! $weather_array = $this->cache->get('weather'))
		{
			$wc_feed = "http://xoap.weather.com/weather/local/45238?cc=*&dayf=5&link=xoap&prod=xoap&par=1025091168&key=ff1f430016b4cdb9";
			$feed_result = $this->getData($wc_feed);
			$count = 0;
			$xml = simplexml_load_string($feed_result,'SimpleXMLElement', LIBXML_NOCDATA);
			
			$links = $xml->lnks;
			foreach($links->link as $get_links){
				$required_links[] = Array("link_url"=>(string)$get_links->l, "link_name"=>(string)$get_links->t);
			}
						
			$forecast = $xml->dayf;
			foreach($forecast->day as $day){
								
				if(is_object($day->attributes()))
				{
					$fiveday_forecast[] = Array(
												"date"=>(string)$day->attributes()->dt,
												"high"=>(string)$day->hi,
												"low"=>(string)$day->low,
												"sunrise"=>(string)$day->sunr,
												"sunset"=>(string)$day->suns,
												"day_icon"=>(string)$day->part[0]->icon,
												"day_description"=>(string)$day->part[0]->t,
												"day_precip"=>(string)$day->part[0]->ppcp,
												"night_icon"=>(string)$day->part[1]->icon,
												"night_description"=>(string)$day->part[1]->t,
												"night_precip"=>(string)$day->part[1]->ppcp
												);
				}
				
			}
			
			
	
			$current_weather_array[] = Array(
											"city"=>(string)$xml->loc->dnam,
											"sunrise"=>(string)$xml->loc->sunr,
											"sunset"=>(string)$xml->loc->suns,
											"last_update"=>(string)$xml->cc->lsup,
											"temp"=>(string)$xml->cc->tmp,
											"conditions"=>(string)$xml->cc->t,
											"condition_icon"=>(string)$xml->cc->icon,
											"mb_pressure"=>(string)$xml->cc->bar->r,
											"mb_pressure_status"=>ucwords((string)$xml->cc->bar->d),
											"wind_sustain"=>(string)$xml->cc->wind->s,
											"wind_gust"=>(string)$xml->cc->wind->gust,
											"wind_direction"=>(string)$xml->cc->wind->t,
											"humidity"=>(string)$xml->cc->hmid,
											"visibility"=>(string)$xml->cc->vis,
											"uv_rating"=>(string)$xml->cc->uv->i,
											"dewpoint"=>(string)$xml->cc->dewp,
											"moon_icon"=>(string)$xml->cc->moon->icon,
											"moon_status"=>(string)$xml->cc->moon->t
											);	
		
			$weather_array = Array($required_links, $fiveday_forecast, $current_weather_array);
			
			// Save into the cache for 60 minutes
		 	$this->cache->save('weather', $weather_array, 7200);
		}
		return $weather_array;
		
	}
	
	function getData($feed){
		// create curl resource 
	    $ch = curl_init(); 
	
	    // set url 
	    curl_setopt($ch, CURLOPT_URL, $feed); 
	
	    //return the transfer as a string 
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	
	    // $output contains the output string 
	    $output = curl_exec($ch); 
	
	    // close curl resource to free up system resources 
	    curl_close($ch);
	    
	    return $output;
	}
}

?>