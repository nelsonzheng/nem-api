<?php

class Tool extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'directory', 'file','date'));
        $this->load->model(array('nem_model'));
    }
    
    function index() {
        $this->load->view('tool');
    }
    
    function test () {
        $this->load->view('test');
    }


}