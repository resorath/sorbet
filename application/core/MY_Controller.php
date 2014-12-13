<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    private $_controller;

    public $slogger;

    function __construct()
    {
        parent::__construct();

        $this->_controller = $this->router->fetch_class();

        session_start();
        
    }
    
        
    // overrides $this->load->view()
    public function loadview($content_view, $data = Array())
    {
        // Set default variables neccesary for headers/footers if not set
        
        // Title
        if(key_exists('title', $data))
            $data['title'] .= " - ";
        @$data['title'] .= "SORBET";
        
        $data['content'] = $this->load->view($content_view, $data, true);
        $this->load->view('templates/master', $data);

    }

    
}