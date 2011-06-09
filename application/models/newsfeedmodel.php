<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newsfeedmodel extends CI_Model
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->driver('cache');
    }
    
	function getAppropriateData($offset,$limit,$feed,$page){
		
		if ( ! $hardData = $this->cache->get($page))
		{	
			$allData = $this->getData($feed);
			$xml = simplexml_load_string($allData,'SimpleXMLElement', LIBXML_NOCDATA);
			
			$allDataArraySize = sizeof($xml->channel->item) - 1;
				
			if($offset != 1){
				$offset++;
			}else{
				
			}
			
			$goal = $offset + $limit;
			
			for($i=$offset;$i<=$goal;$i++){
			
				$title = $xml->xpath('/rss/channel/item['.$i.']/title');
				$description = $xml->xpath('/rss/channel/item['.$i.']/description');
				$pubDate = $xml->xpath('/rss/channel/item['.$i.']/pubDate');
				$link = $xml->xpath('/rss/channel/item['.$i.']/link');
				
				if($i<=$allDataArraySize){
					$hardData[] = Array("title"=>(string)$title[0],"description"=>(string)$description[0],"pubDate"=>(string)$pubDate[0],"link"=>(string)$link[0]);
				}
				
			}
			
			// Save into the cache for 10 minutes
		 	$this->cache->save($page, $hardData, 600);
		
		}
		
		
		return $hardData;
	
	}
	
	function feedSize($feed){
		$allData = $this->getData($feed);
		$xml = simplexml_load_string($allData,'SimpleXMLElement', LIBXML_NOCDATA);
		
		$allDataArraySize = sizeof($xml->channel->item) - 1;
		
		return $allDataArraySize;
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