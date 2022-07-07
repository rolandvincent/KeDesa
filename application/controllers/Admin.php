<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        if (is_logged_in() != 0) return;
        $this->load->model('User_model', 'usr');

        $data['title'] = "Dashboard";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->usr->getUserMenu($data['user']['role_id']);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    public function usermanagement()
    {
        if (is_logged_in() != 0) return;
        $this->load->model('User_model', 'usr');

        $data['title'] = "User Management";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->usr->getUserMenu($data['user']['role_id']);

        if ($this->input->post('id') == null) {

            $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[3]');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

            if ($this->form_validation->run() == false) {
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('admin/usermanager', $data);
                $this->load->view('template/footer');
            } else {
                $data_insert = [
                    'nama' => html_escape($this->input->post('nama', true)),
                    'email' => $this->input->post('email', true),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'role_id' => 2
                ];

                $this->db->insert('user', $data_insert);

                set_flashdata('message', createSuccessAlert('Staff ditambahkan.'));

                redirect('admin/usermanagement');
            }
        } else {
            $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[3]');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim');

            if ($this->form_validation->run() == false) {
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('admin/usermanager', $data);
                $this->load->view('template/footer');
            } else {
                $id = $this->input->post('id');
                $nama = html_escape($this->input->post('nama', true));
                $email = $this->input->post('email', true);
                $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

                $this->db->set('nama', $nama);
                $this->db->set('email', $email);
                if ($this->input->post('password') != "") {
                    $this->db->set('password', $password);
                }
                $this->db->where('id', $id);
                $this->db->where('role_id', 2);
                $this->db->update('user');

                set_flashdata('message', createSuccessAlert('Edit berhasil.'));

                redirect('admin/usermanagement');
            }
        }
    }

    public function userAction()
    {
        if (is_logged_in() != 0) return;
        if ($this->input->get('id') != null) {
            $id = $this->input->get('id');
            $userCheck = $this->db->get_where('user', ['id' => $id, 'role_id' => 2])->row_array();
            if (!$userCheck) {
                forbidden_page();
                return;
            }
            $data['title'] = "Edit User";

            $this->load->model('Admin_model', 'members');

            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['useredit'] = $this->db->get_where('user', ['id' => $id, 'role_id' => 2])->row_array();
            $data['prodi'] = $this->db->get('prodi')->result_array();

            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('fakultas', 'Fakultas', 'required|trim');
            $this->form_validation->set_rules('year', 'Join Year', 'required|trim|is_natural');
            $this->form_validation->set_rules('prodi', 'Prodi', 'is_natural');
            $this->form_validation->set_rules('npm', 'NIM', 'required|trim|is_natural|min_length[8]');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('admin/edit-user', $data);
                $this->load->view('templates/footer');
            } else {
                $npm = htmlspecialchars($this->input->post('npm', true));
                $name = htmlspecialchars($this->input->post('name', true));
                $fakultas = htmlspecialchars($this->input->post('fakultas', true));
                $prodi = htmlspecialchars($this->input->post('prodi', true));
                $password = htmlspecialchars($this->input->post('password', true));
                $year = $this->input->post('year');
                $is_active = $this->input->post('is_active');
                // cek jika ada agmbar diupload
                $upload_image = $_FILES['avatar']['name'];
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['upload_path'] = './assets/img/profile/';
                    $config['max_size'] = '2048';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('avatar')) {
                        $old_image = $data['useredit']['avatar'];
                        if ($old_image != 'default.png') {
                            unlink(FCPATH . 'assets/img/profile/' . $old_image);
                        }

                        $new_image = $this->upload->data('file_name');
                        $this->db->set('avatar', $new_image);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

                if ($npm != $data['useredit']['npm']) {
                    $userMatch = $this->db->get_where('user', ['npm' => $npm])->row_array();
                    if (!$userMatch)
                        $this->db->set('npm', $npm);
                }

                $this->db->set('name', $name);
                $this->db->set('fakultas', $fakultas);
                if ($prodi != 0)
                    $this->db->set('prodi_id', $prodi);
                else
                    $this->db->set('prodi_id', null);
                $this->db->set('year_join', $year);
                $this->db->set('is_active', $is_active == "on");
                if ($password != "") {
                    if (strlen(trim($password)) >= 3) {
                        $this->db->set('password', password_hash(trim($password), PASSWORD_BCRYPT));
                    }
                }
                $this->db->where('role_id', 2);
                $this->db->where('id', $id);
                $this->db->update('user');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User profile has been updated!</div>');
                redirect('admin/usermanager');
            }
        } else {
            $id = $this->input->post('id');
            $action = $this->input->post('action');

            if ($action == 1) {
                $data = $this->db->get_where('user', ['id' => $id, 'role_id' => 2])->row_array();
                $this->db->delete('user', ['id' => $id, 'role_id' => 2]);
            } else if ($action == 2) {
                $data = $this->db->get_where('user', ['role_id' => 2])->result_array();
                print_r(json_encode($data));
            }
        }
    }
}
