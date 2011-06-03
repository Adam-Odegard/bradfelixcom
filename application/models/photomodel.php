<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'Zend/Loader.php';
Zend_Loader::loadClass('Zend_Gdata_Photos');
Zend_Loader::loadClass('Zend_Gdata_ClientLogin');

class Photomodel extends CI_Model
{

	protected $serviceName;
	protected $client;
	protected $_gp;

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $serviceName = Zend_Gdata_Photos::AUTH_SERVICE_NAME;
		$client = Zend_Gdata_ClientLogin::getHttpClient("bradfelix1@gmail.com", "BFkf0825", $serviceName);
		$this->gp = new Zend_Gdata_Photos($client, "Google-DevelopersGuide-1.0");
    }
    
	function getAlbumLists($user_to_look_up){
		
		
	    $userFeed = $this->gp->getUserFeed($user_to_look_up);
	    foreach ($userFeed as $userEntry) {
	    	//print_r($userEntry);
	    	//die;
	        $album[] = Array('title'=>$userEntry->title->text,'num_of_photos'=>$userEntry->gphotoNumPhotos->text,'gallery_image'=>$userEntry->mediaGroup->content[0]->url,'album_id'=>$userEntry->gPhotoId->text);
	    }
		
		
		return $album;
	}
	
	function getAlbumInfo($user_to_look_up,$album_id){

		$query = $this->gp->newAlbumQuery();

		$query->setUser($user_to_look_up);
		$query->setAlbumId($album_id);
		
		$albumFeed = $this->gp->getAlbumFeed($query);
		foreach ($albumFeed as $albumEntry) {
		    $album[] = Array('image'=>$albumEntry->mediaGroup->content[0]->url);
		}
		
		return $album;
		
	}
}

?>