<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
    public function getBerita($max, $page)
    {
        $currentPage = $page * $max;
        $queryMenu = "SELECT * FROM `berita` ORDER BY `berita`.`tanggal` DESC LIMIT $currentPage,$max";
        return $this->db->query($queryMenu)->result_array();
    }

    public function searchBerita($max, $page, $search)
    {
        $currentPage = $page * $max;
        $queryMenu = "SELECT * FROM `berita`WHERE `judul` 
        LIKE " . $this->db->escape('%' . $search . '%') . " AND `isi` 
        LIKE " . $this->db->escape('%' . $search . '%') . " ORDER BY `berita`.`tanggal` DESC LIMIT $currentPage,$max";
        return $this->db->query($queryMenu)->result_array();
    }

    public function searchAllBerita($search)
    {
        $queryMenu = "SELECT * FROM `berita`WHERE `judul` 
        LIKE " . $this->db->escape('%' . $search . '%') . " AND `isi` 
        LIKE " . $this->db->escape('%' . $search . '%') . " ORDER BY `berita`.`tanggal` DESC";
        return $this->db->query($queryMenu)->result_array();
    }

    public function getTanggapan()
    {
        $queryMenu = "SELECT * FROM `masukan` WHERE `komentar` IS NOT NULL ORDER BY `masukan`.`edited` DESC LIMIT 0,10";
        return $this->db->query($queryMenu)->result_array();
    }
}
