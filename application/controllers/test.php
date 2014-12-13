<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->model('Cbb_model');

		$styles = $this->Cbb_model->get_trim("2012", "Honda", "Civic");

		print_r($styles);

		$this->load->view('test');
	}

	public function style()
	{
		$this->load->model("Cbb_model");

		$render = $this->Cbb_model->get_page_render("2013", "Honda", "Civic", "EX-L", "2D%20Coupe%20at", "60000");

		print_r($render);
	}

	public function parserender()
	{
		$this->load->model("Cbb_model");
		$this->load->library('parser');

		$render = $this->Cbb_model->get_page_render("2013", "Honda", "Civic", "EX-L", "2D%20Coupe%20at", "60000");

		$result = $this->parser->parse_cbb_final($render);

		print_r($result);
	}
}
