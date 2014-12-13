<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	private $data = Array();

	public function index()
	{
		echo json_encode(Array("greet" => "hihi"));
	}

	public function getTrim()
	{
		$this->load->model('Cbb_model');

		$styles = $this->Cbb_model->get_trim($_GET['y'], $_GET['a'], $_GET['o']);

		if(is_null($styles))
		{
			$error = Array(0 => Array('seriesId' => 'error', 'series' => 'Flavour insufficiently tasty'));
			echo json_encode($error);
			return;
		}
		echo json_encode($styles['items']);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */