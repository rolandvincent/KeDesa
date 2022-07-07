<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUserMenu($role_id)
    {
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
                        FROM `user_menu` JOIN `user_access_menu` 
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC";
        return $this->db->query($queryMenu)->result_array();
    }

    public function getUserSubMenu($menuId)
    {
        $querySubMenu = "SELECT *
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        WHERE `user_sub_menu`.`menu_id` = $menuId
        AND `user_sub_menu`.`active` = 1";
        return $this->db->query($querySubMenu)->result_array();
    }

    public function getMembers($contain = null)
    {
        $query = "SELECT * FROM `user` WHERE `user`.`role_id` = 2 " . ($contain != null ?
            "AND (`user`.`name` LIKE " . $this->db->escape('%' . $contain . '%') .
            "OR `user`.`npm` LIKE " . $this->db->escape('%' . $contain . '%') . ")" : "");

        return $this->db->query($query)->result_array();
    }
}
