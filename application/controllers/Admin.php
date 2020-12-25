<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
      public function __construct()
      {
            parent::__construct();
            $this->load->model('course');
            $this->load->library('form_validation');
      }

      public function index()
      {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['course'] = $this->course->getAllCourse();

            $this->load->view('admin/index', $data);
      }

      // Tambah Course
      public function addProduct()
      {
            $this->load->view('admin/add');
      }

      public function saveCourse()
      {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('admin/add');
            } else {
                  $data['title'] = $this->input->post('title', true);
                  $data['subtitle'] = $this->input->post('subtitle', true);
                  $data['description'] = $this->input->post('description', true);

                  $this->course->saveCourse($data);
                  redirect('admin');
            }
      }

      // Edit Course
      public function editCourse($id)
      {
            $data['course'] = $this->course->getById($id);
            $this->load->view('admin/edit', $data);
      }

      public function updateCourse()
      {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == false) {
                  $id = $this->input->post('id');
                  $data['course'] = $this->course->getById($id);
                  $this->load->view('admin/edit');
            } else {
                  $id = $this->input->post('id');
                  $data['title'] = $this->input->post('title', true);
                  $data['subtitle'] = $this->input->post('subtitle', true);
                  $data['description'] = $this->input->post('description', true);

                  $this->course->updateCourse($data, $id);
                  redirect('admin');
            }
      }

      public function deleteCourse($id)
      {
            $this->course->deleteCourse($id);
            redirect('admin');
      }
}
