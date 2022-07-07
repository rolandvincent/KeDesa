<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    public function index()
    {
        redirect('staff/berita');
    }

    public function berita()
    {
        if (is_logged_in() != 0) return;
        $this->load->model('User_model', 'usr');

        $data['title'] = "Berita";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->usr->getUserMenu($data['user']['role_id']);
        $data['berita'] = $this->db->get('berita')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('staff/berita', $data);
        $this->load->view('template/footer');
    }

    public function editor()
    {
        if (is_logged_in() != 0) return;
        $this->load->model('User_model', 'usr');

        if (is_numeric($this->input->get('action'))) {
            $action = $this->input->get('action');

            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['menu'] = $this->usr->getUserMenu($data['user']['role_id']);
            if ($action == 1) {
                $data['title'] = "Tambah Berita";
                $data['action'] = $this->input->get('action');
            } else if ($action == 2) {
                $id = $this->input->get('id');
                $data['title'] = "Edit Berita";
                if (is_numeric($id)) {
                    $data['id'] = $id;
                    $data['berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();
                } else {
                    redirect('staff/berita');
                }
                $data['action'] = $this->input->get('action');
            } else if ($action == 3) {
                $id = $this->input->get('id');
                if (is_numeric($id)) {
                    $this->db->delete('berita', ['id' => $id]);
                    set_flashdata('message', createSuccessAlert('Data berhasil dihapus'));
                }
                redirect('staff/berita');
            }

            $this->form_validation->set_rules('judul', 'Judul', 'required|trim|min_length[3]|max_length[256]');
            $this->form_validation->set_rules('content', 'Isi', 'required|trim|max_length[20000]');
            $this->form_validation->set_rules('penulis', 'Penulis', 'required|trim|min_length[3]|max_length[128]');

            if ($this->form_validation->run() == false) {
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('staff/editor', $data);
                $this->load->view('template/footer');
            } else {
                if ($action == 1) {
                    $data_insert = [
                        'judul' => html_escape($this->input->post('judul', true)),
                        'isi' => $this->input->post('content', true),
                        'penulis' => html_escape($this->input->post('penulis', true)),
                        'tanggal' => time()
                    ];
                    $this->db->insert('berita', $data_insert);

                    set_flashdata('message', createSuccessAlert('Data berhasil ditambahkan'));
                } else if ($action == 2) {
                    $this->db->set('judul', html_escape($this->input->post('judul', true)));
                    $this->db->set('isi', $this->input->post('content', true));
                    $this->db->set('penulis', html_escape($this->input->post('penulis', true)));
                    $this->db->where('id', $this->input->get('id'));

                    $this->db->update('berita');

                    set_flashdata('message', createSuccessAlert('Data berhasil diedit'));
                }
                redirect('staff/berita');
            }
        } else {
            redirect('staff/berita');
        }
    }

    public function langganan()
    {
        if (is_logged_in() != 0) return;
        $this->load->model('User_model', 'usr');

        $data['title'] = "Langganan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->usr->getUserMenu($data['user']['role_id']);
        $data['langganan'] = $this->db->get('langganan')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('staff/langganan', $data);
        $this->load->view('template/footer');
    }

    public function unsubs()
    {
        if (is_logged_in() != 0) return;
        $id = $this->input->post('id');
        if ($id == null) {
            show_404();
        } else {
            $this->db->delete('langganan', ['id' => $id]);

            set_flashdata('message', createSuccessAlert('Langganan berhasil dihentikan'));
        }
    }

    public function aspirasi()
    {
        if (is_logged_in() != 0) return;
        $this->load->model('User_model', 'usr');

        $data['title'] = "Aspirasi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->usr->getUserMenu($data['user']['role_id']);
        $data['aspirasi'] = $this->db->get('masukan')->result_array();

        $action = $this->input->post('action');

        if (is_numeric($action)) {
            $id = $this->input->post('id');
            switch ($action) {
                case 1:
                    $this->db->delete('masukan', ['id' => $id]);
                    break;
                case 2:
                    $comment = $this->input->post('comment', true);
                    $this->db->set('komentar', $comment == '' ? null : html_escape($comment));
                    $this->db->where('id', $id);
                    $this->db->update('masukan');
                    break;
                case 3:
                    $result = $this->db->get_where('masukan', ['id' => $id])->row_array();
                    echo $result['komentar'];
                    break;
                default:
                    redirect('/staff/aspirasi');
            }
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('staff/aspirasi', $data);
            $this->load->view('template/footer');
        }
    }
}
