<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Network extends CI_Controller
{
      public function __construct()
      {
            parent::__construct();
            $this->load->model('course');
      }

      public function index()
      {
            $data['course'] = $this->course->getAllCourse();
            $this->load->view('member/network', $data);
      }
}
