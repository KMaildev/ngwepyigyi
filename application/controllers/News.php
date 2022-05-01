<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('news_model');
    }

    public function index()
    {
        $data['country_lists'] = $this->menu_model->get_country();
        $data['news'] = $this->news_model->getAllNews();
        $this->load->view('news/index', $data);
    }

    public function detail($id)
    {
        $data['country_lists'] = $this->menu_model->get_country();
        $data['news'] = $this->news_model->getAllNews();
        $data['news_detail'] = $this->news_model->getNewsDetail($id);
        $this->load->view('news/detail', $data);
    }
}
