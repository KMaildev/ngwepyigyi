<?php

class News_model extends CI_Model
{

    public function getAllNews()
    {
        $this->db->select("*");
        $this->db->from("news");
        return $this->db->get()->result();
    }

    public function getNewsDetail($id)
    {
        $this->db->select("*");
        $this->db->from("news");
        $this->db->where(array('id' => $id));
        return $this->db->get()->row();
    }
}
