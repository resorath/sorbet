<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	private $data = Array();

	public function __construct()
	{
		parent::__construct();
		session_start();
	}

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

		$_SESSION['available_trims'] = $styles['items'];

		$_SESSION['year'] = trim($_GET['y']);
		$_SESSION['make'] = trim(ucwords(strtolower($_GET['a'])));
		$_SESSION['model'] = trim(ucwords(strtolower($_GET['o'])));

		echo json_encode($styles['items']);
	}

	public function getTrimSession()
	{
		echo json_encode($_SESSION['available_trims']);
	}

	public function getStyle()
	{
		$this->load->model('Cbb_model');

		$styles = $this->Cbb_model->get_styles($_SESSION['year'], $_SESSION['make'], $_SESSION['model'], $_GET['t']);

		echo json_encode($styles['items']);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */