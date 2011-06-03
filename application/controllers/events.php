<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index($data = "")
	{
		
		$data['sidebar'] = $this->load->view('sidebar', '', TRUE);
		
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
			$this->template->write_view('header', 'sitehead', $data);
			$this->template->write_view('nav', 'nav', $data);
			$this->template->write_view('content', 'events', $data);
			
			//render template
			$this->template->render();
			
		/***************************
			END OF TEMPLATE STUFF
		****************************/
	}
}

/* End of file events.php */
/* Location: ./application/controllers/events.php */