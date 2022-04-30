<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('partner_model');
        $this->load->model('menu_model');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['country_lists'] = $this->menu_model->get_country();
        $this->load->view('partner/index', $data);
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', ' %s');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'Error: please insert your information');
            $data['country_lists'] = $this->menu_model->get_country();
            $this->load->view('partner/index', $data);
        } else {
            $this->partner_model->save();
            $this->session->set_flashdata('success', 'Registration successfully.');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
