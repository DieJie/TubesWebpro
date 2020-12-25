<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Model
{
      public function __construct()
      {
            parent::__construct();
      }

      public function getAllCourse()
      {
            return $this->db->get('course')->result();
      }

      public function saveCourse($data)
      {
            return $this->db->insert('course', $data);
      }

      public function getById($id)
      {
            return $this->db->get_where('course', ['id' => $id])->row();
      }

      public function updateCourse($data, $id)
      {
            return $this->db->update('course', $data, ['id' => $id]);
      }

      public function deleteCourse($id)
      {
            return $this->db->delete('course', ['id' => $id]);
      }
}
