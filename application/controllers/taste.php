<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taste extends MY_Controller {

	private $data = Array();

	public function __construct()
	{
		 parent::__construct();

		 if(isset($_SESSION['mode']))
		 {
		 	if($_SESSION['mode'] == "orange")
		 		$this->data['additionalstyles'][] = 'orange.css';
		 	else if($_SESSION['mode'] == "lime")
		 		$this->data['additionalstyles'][] = 'lime.css';
		 }
	}

	public function index()
	{
		$this->loadview('taste');
	}

	public function orange()
	{
		$_SESSION['mode'] = "orange";

		redirect('taste/details');

	}

	public function lime()
	{
		$_SESSION['mode'] = "lime";

		redirect('taste/details');
	}

	public function details()
	{
		$this->loadview("details", $this->data);
	}

	public function trimstyle()
	{
		$this->loadview("trimstyle", $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */