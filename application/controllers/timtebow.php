<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TimTebow extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index($data = "")
	{
		$this->output->cache(5);
			
		/***********************
			TEMPLATE STUFF
		************************/
			$tebow['template'] = 'tebow.php';
			$this->template->add_template('tebow', $tebow, TRUE);
		
			//set template title
			$this->template->write('title', 'bradfelix.com');
			
			//load external scripts & css
			$this->template->add_css('css/style.css');
			
			//render template
			$this->template->render();
			
		/***************************
			END OF TEMPLATE STUFF
		****************************/
	}
}

/* End of file timtebow.php */
/* Location: ./application/controllers/timtebow.php */