<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gators extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function feed($offset = 1,$limit = 4)
	{
		
		$this->load->model("newsfeedmodel");
		$this->data["rss"] = $this->newsfeedmodel->getAppropriateData($offset,$limit,'http://www.gatorzone.com/rss/');
		$feedSize = $this->newsfeedmodel->feedSize('http://www.gatorzone.com/rss/');
	
		$this->load->library('pagination');
		$config['base_url'] = '/gators/feed/';
		$config['total_rows'] = $feedSize;
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<p>';
    	$config['full_tag_close'] = '</p>';
    	$config['num_links'] = 2;

		$this->pagination->initialize($config); 
		
		$this->load->model("photomodel");
		$this->data["album_list"] = $this->photomodel->getAlbumLists('bradfelix1');
		
		$this->data['sidebar'] = $this->load->view('sidebar',$this->data, TRUE);
		
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
			$this->template->write_view('content', 'gators', $this->data);
			
			//render template
			$this->template->render();
			
		/***************************
			END OF TEMPLATE STUFF
		****************************/
	}
}

/* End of file gators.php */
/* Location: ./application/controllers/gators.php */