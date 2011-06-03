<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Weather extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index($data = "")
	{
		
		$this->load->model("weathermodel");
		$weather = $this->weathermodel->getWeatherXML();
		
		$data["links"] = $weather[0];
		$data["fiveday"] = $weather[1];
		$data["current"] = $weather[2];
		
		
		
		$this->load->model("photomodel");
		$data["album_list"] = $this->photomodel->getAlbumLists('bradfelix1');
		
		$data['sidebar'] = $this->load->view('sidebar',$data, TRUE);
		
		/***********************
			TEMPLATE STUFF
		************************/
			$this->template->set_template('default');
			//set template title
			$this->template->write('title', 'bradfelix.com');
			
			//load external scripts & css
			$this->template->add_css('css/site.css');
			$this->template->add_js('js/EqualHeights.js');
			$this->template->add_js('js/site.js');
			$this->template->add_js('js/prototype.js');
			$this->template->add_js('js/scriptaculous.js?load=effects,builder');
			$this->template->add_js('js/lightbox.js');
			
			//load views into template regions
			$this->template->write_view('header', 'sitehead');
			$this->template->write_view('nav', 'nav');
			$this->template->write_view('content', 'weather', $data);
			
			//render template
			$this->template->render();
			
		/***************************
			END OF TEMPLATE STUFF
		****************************/
	}
	
}

/* End of file weather.php */
/* Location: ./application/controllers/weather.php */