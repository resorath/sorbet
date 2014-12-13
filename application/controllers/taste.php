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
		$_SESSION = Array();
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
		// process post data
		// Note: make, model, year already processed
		$_SESSION['km'] = trim($_POST['km']);

		$this->loadview("trimstyle", $this->data);
	}

	public function dispense()
	{
		$this->load->model("Cbb_model");
		$this->load->library('parser');
		$this->load->model("Vmr_model");

		// process post data
		$_SESSION['trim'] = $_POST['trim'];
		$_SESSION['style'] = $_POST['style'];

		// make, model, year, trim, style, km
		$render = $this->Cbb_model->get_page_render($_SESSION['year'], $_SESSION['make'], $_SESSION['model'], $_SESSION['trim'], $_SESSION['style'], $_SESSION['km']);

		$result = $this->parser->parse_cbb_final($render);

		$this->data['lowtrade'] = $result[0];
		$this->data['hightrade'] = $result[1];


		$render = $this->Vmr_model->get_page_render($_SESSION['year'], $_SESSION['make'], $_SESSION['model']);

		$result = $this->parser->parse_vmr_final($render);

		$this->data['vmrrender'] = $result;

		$this->loadview("dispense", $this->data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */