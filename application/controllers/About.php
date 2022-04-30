<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }

	public function index()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$this->load->view('about/index', $data);
	}
}
