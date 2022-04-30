<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('services_model');
    }

	public function index()
	{
		$data['oversea_jobs'] = $this->services_model->get_all_oversea_jobs();
		$data['country_lists'] = $this->menu_model->get_country();
		$data['activities'] = $this->menu_model->getAll();
		$this->load->view('welcome_message', $data);
	}
}
