<?php
class Home_model extends CI_Model{
    function getMovies(){
        $this->db->select("Film_ID,Name,Year,Genre,Description,Url");
        $this->db->from('filme');
        $query = $this->db->get();
        return $query->result();
    }
}
