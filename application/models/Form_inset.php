<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Form_inset extends CI_Model {
        public function form_data_insert($data){
           $a = $this->db->insert('mob_main_table',$data);
           return $a;
        }

    }
?>