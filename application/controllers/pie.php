<?php

class Pie extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'directory', 'file','date'));
        $this->load->model(array('nem_model'));
    }
    
    function index() {
        $this->load->view('pie');
    }
}