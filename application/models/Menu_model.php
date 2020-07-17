<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id` 
                  ";
        return $this->db->query($query)->result_array();
    }

    public function hapusMenu($m)
    {
        $this->db->where('menu', $m);
        $this->db->delete('menu');
    }

    public function hapusSubMenu($sm)
    {
        $this->db->where('menu', $sm);
        $this->db->delete('menu');
    }
    public function getEditSubMenu($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
}
