<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
      public function __construct()
      {
            parent::__construct();
      }
      
      public function register($data)
      {
            $this->db->insert('user', $data);
      }

      public function getUser($email)
      {
            return $this->db->get_where('user', ['email' => $email])->row_array();
      }
}