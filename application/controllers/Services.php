<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('services_model');
	}

	public function index()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$this->load->view('services/index', $data);
	}

	public function category($id)
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$data['oversea_jobs'] = $this->services_model->get_oversea_jobs($id);
		$data['country_title'] = $this->services_model->get_country_title($id);
		$this->load->view('services/index', $data);
	}


	public function search()
	{
		$id = $this->input->get('country_id');
		$data['country_lists'] = $this->menu_model->get_country();
		$data['country_title'] = $this->services_model->get_country_title($id);
		$data['oversea_jobs'] = $this->services_model->search_oversea_jobs($id);
		$this->load->view('services/index', $data);
	}
}
