<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Language extends CI_Controller
{

    public function set_jp()
    {
        $this->session->set_userdata('lang', 'jp');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function set_en()
    {
        unset($_SESSION['lang']);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
