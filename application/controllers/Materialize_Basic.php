<?php
class Materialize_Basic extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('materializecss_header');
        $this->load->view('materializecss_basic');
        $this->load->view('materializecss_footer');
    }

    public function admin() {
        $this->load->view('materializecss_header');
        $this->load->view('materializecss_admin');
        $this->load->view('materializecss_footer');
    }

}
