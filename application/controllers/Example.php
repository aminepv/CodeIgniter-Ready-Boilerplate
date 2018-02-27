<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class Example extends CR_Controller {

    public function __construct(){
        parent::__construct();
        //$this->load->model('example_model', 'example');
    }
	public function index(){

		$this->output->enable_profiler(TRUE);
		
		echo Carbon::now();
        
        $this->load->view('layout/header');
        $this->load->view('home/home');
        $this->load->view('layout/footer');
	}
}
