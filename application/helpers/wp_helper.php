<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        show_404();
        return 1;
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            header("HTTP/1.1 403 Forbidden");
            $data['heading'] = "403 Forbidden";
            $data['message'] = "<p>You don't have permission to access the requested object. Contact the admin of for permission to open this page</p>";
            $ci->load->view('errors/html/error_404.php', $data);
            return 2;
        }
    }
}

function forbidden_page()
{
    $ci = get_instance();
    header("HTTP/1.1 403 Forbidden");
    $data['heading'] = "403 Forbidden";
    $data['message'] = "<p>You don't have permission to access the requested object. Contact the admin of for permission to open this page</p>";
    $ci->load->view('errors/html/error_404.php', $data);
}

function set_flashdata($id, $msg)
{
    $ci = get_instance();
    $ci->session->set_userdata($id, $msg);
}

function flashdata($id)
{
    $ci = get_instance();
    if ($ci->session->has_userdata($id)) {
        $msg = $ci->session->userdata($id);
        $ci->session->unset_userdata($id);
        return $msg;
    }
    return '';
}

function createDangerAlert($msg)
{
    return '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $msg . '</div>';
}

function createSuccessAlert($msg)
{
    return '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $msg . '</div>';
}
