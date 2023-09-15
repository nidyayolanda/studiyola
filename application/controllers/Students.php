<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index()
    {
        $data['students'] = $this->Student_model->get_students();
        $this->load->view('index.php', $data);
    }

    public function get_students()
    {
        // $data['datastudent'] = $this->Student_model->get_data();
        // $data['view'] = 'index';
        // $this->load->view($data);
        $students = $this->Student_model->get_students();
        echo json_encode($students);
    }

    public function add_student()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name')
        );

        $insert = $this->Student_model->add_student($data);
        if ($insert > 0) {
            echo json_encode(["status" => 200, 'message' => 'Berhasil Simpan Data.']);
            return;
        }
        echo json_encode(["status" => 500, 'message' => 'Gagal Simpan Data.']);
    }

    public function update_student()
    {
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name')
        );
        $this->Student_model->update_student($id, $data);
        $update = $this->db->affected_rows();
        if ($update > 0) {
            echo json_encode(["status" => 200, 'message' => 'sukses update.']);
            return;
        }
        echo json_encode(["status" => 500, 'message' => 'gagal update.']);
    }

    public function delete_student()
    {
        $id = $this->input->post('id');
        $this->Student_model->delete_student($id);
        echo json_encode($students);
        echo "Mahasiswa berhasil dihapus.";
    }
}
