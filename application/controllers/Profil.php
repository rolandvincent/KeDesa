<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function index()
    {
        redirect('profile/changePassword');
    }

    public function changePassword()
    {
        if (is_logged_in() != 0) return;
        $this->load->model('User_model', 'usr');

        $data['title'] = "Ubah kata sandi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->usr->getUserMenu($data['user']['role_id']);


        $this->form_validation->set_rules('current_password', 'Current password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm new password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('profil/changepassword', $data);
            $this->load->view('template/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                set_flashdata('message', createDangerAlert('Wrong current password!'));
                redirect('profil/changePassword');
            } else {
                if ($current_password == $new_password) {
                    set_flashdata('message', createDangerAlert('New password cannot be the same as current password!'));
                    redirect('profil/changePassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_BCRYPT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    set_flashdata('message', createSuccessAlert('Password Changed!'));
                    redirect('profil/changePassword');
                }
            }
        }
    }
}
