<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        if ($this->session->has_userdata('email') && $this->session->userdata('role_id') == 1) {
            redirect('admin');
        } else if ($this->session->has_userdata('email') && $this->session->userdata('role_id') == 2) {
            redirect('staff');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        if ($this->session->has_userdata('email') && $this->session->userdata('role_id') == 1) {
            redirect('admin');
        } else if ($this->session->has_userdata('email') && $this->session->userdata('role_id') == 2) {
            redirect('staff');
        }
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('staff');
                }
            } else {
                set_flashdata('message', createDangerAlert("Wrong Email/Password"));
                redirect(base_url() . 'auth');
            }
        } else {
            set_flashdata('message', createDangerAlert("Wrong Email/Password"));
            redirect(base_url() . 'auth');
        }
    }

    public function resetpassword()
    {
        $this->load->view('auth/resetpassword');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        set_flashdata('message',  createSuccessAlert('You have been logout!</div>'));
        redirect(base_url() . 'auth');
    }
}
