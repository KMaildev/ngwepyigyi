<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job_seekers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('job_seekers_model');
        $this->load->model('menu_model');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['country_lists'] = $this->menu_model->get_country();
        $this->load->view('job_seekers/index', $data);
    }


    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', ' %s');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'Error: please insert your information');
            $data['country_lists'] = $this->menu_model->get_country();
            $this->load->view('job_seekers/index', $data);
        } else {
            $this->job_seekers_model->save();
            $this->session->set_flashdata('success', 'Registration successfully.');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function cv_upload()
    {
        $data['country_lists'] = $this->menu_model->get_country();
        $this->load->view('job_seekers/cv_upload', $data);
    }

    public function upload_cv()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf|csv';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('attached_file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $attached_file = $data['upload_data']['file_name'];
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', ' %s');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'Error: Please insert your information');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data['attached_file'] = $attached_file ?? "";
            $this->job_seekers_model->upload_cv($data);
            $this->session->set_flashdata('success', 'Successfully.');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
