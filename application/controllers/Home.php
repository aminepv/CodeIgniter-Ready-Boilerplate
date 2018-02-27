<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class Home extends CR_Controller {

    public function __construct(){
        parent::__construct();
        //$this->load->model('example_model', 'example');
    }
	public function index(){
        $header = $data = $footer = [];

        $meta['title'] = 'CI Ready';

		$this->output->enable_profiler(TRUE);
        echo Carbon::now();
        
        $header['meta'] = $this->pageMeta($meta);

        $this->load->view('layout/header', $header);
        $this->load->view('home/home');
        $this->load->view('layout/footer');
	}
}
