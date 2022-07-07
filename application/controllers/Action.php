<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Action extends CI_Controller
{

    public function index()
    {
        $action = $this->input->get('i');
        if (is_numeric($action)) {

            switch ($action) {
                case 1:
                    $this->form_validation->set_rules('name', 'Nama', 'required|trim|min_length[3]|max_length[128]', [
                        'required' => 'Masukkan nama!',
                        'min_length' => 'Masukkan nama minimal tiga huruf!',
                        'max_length' => 'Nama terlalu panjang!'
                    ]);
                    $this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_natural|min_length[6]', [
                        'is_natural' => 'NIK harus berisi hanya angka!',
                        'min_length' => 'NIK minimal berisi enam angka!',
                        'required' => 'Masukkan NIM!'
                    ]);
                    $this->form_validation->set_rules('message', 'Pesan', 'required|trim|min_length[3]|max_length[1024]', [
                        'required' => 'Masukkan pesan!',
                        'min_length' => 'Masukkan pesan minimal tiga huruf!',
                        'max_length' => 'Pesan terlalu panjang, maksimal 1024 karakter'
                    ]);
                    if ($this->form_validation->run() == false) {
                        echo "403 - Data tidak diterima!" . validation_errors('<br>', null);
                        return;
                    } else {
                        $data = [
                            'nama' => html_escape($this->input->post('name', true)),
                            'nik' => $this->input->post('nik'),
                            'isi' => html_escape($this->input->post('message', true)),
                            'tanggal' => time(),
                            'komentar' => null
                        ];
                        $this->db->insert('masukan', $data);

                        echo "Masukan sudah dikirim";
                        return;
                    }

                    break;
                case 2:
                    $this->form_validation->set_rules('email', 'Email', 'required|trim|min_length[3]|valid_email');
                    if ($this->db->get_where('langganan', ['email' => $this->input->post('email')])->row_array()) {
                        set_flashdata('home', '<script>alert("Anda sudah berlangganan")</script>');
                    } else if ($this->form_validation->run() == false) {
                        set_flashdata('home', "<script>alert('" . form_error('email', null, '\n') . "')</script>");
                    } else {
                        $data = [
                            'email' => html_escape($this->input->post('email'))
                        ];
                        $this->db->insert('langganan', $data);

                        set_flashdata('home', '<script>alert("Berlangganan berhasil")</script>');
                    }
                    redirect('/#footer');
                    break;
                default:
                    redirect('/');
            }
        } else {
            redirect('/');
        }
    }
}
