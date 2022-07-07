<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

    public function index($num)
    {
        switch ($num) {
            case 1:
                $this->load->view('Page/index');
                break;
            case 2:
                $this->load->model('Data_model', 'dt');

                $newsprepage = 5;

                $page = $this->input->get('p');
                $data['current'] = $page;
                $data['search'] = null;
                $data['tanggapan'] = $this->dt->getTanggapan();
                if ($this->input->get('search')) {
                    $data['search'] = $this->input->get('search');
                    $data['total'] =  ceil(count($data['berita'] = $this->dt->searchAllBerita($this->input->get('search'))));
                    $data['berita'] = $this->dt->searchBerita($newsprepage, is_numeric($page) ? $page - 1 : 0, $this->input->get('search'));
                } else {
                    $data['total'] = ceil(count($this->db->get('berita')->result_array()) / $newsprepage);
                    $data['berita'] = $this->dt->getBerita($newsprepage, is_numeric($page) ? $page - 1 : 0);
                }
                $this->load->view('Page/berita', $data);
                break;
            case 3:
                $this->load->view('Page/lokasi');
                break;
            case 4:
                $this->load->view('Page/kelompok1.html');
                break;
            case 5:
                $this->load->view('Page/galeri');
                break;
            case 6:
                $this->load->view('Page/struktur');
                break;
            default:
                show_404();
        }
    }
}
