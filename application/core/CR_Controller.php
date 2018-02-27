<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CR_Controller extends CI_Controller {

    public function __construct(){

            parent::__construct();
    }

    static function pageMeta($data){
        $data = array(
            'title' => (isset($data['title'])) ? $data['title'] : '',
            'description' => ''
        );
        //isset($data['title'])
        return $data;
    }


}