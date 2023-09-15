<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{

    public function get_students()
    {
        $query = $this->db->get('students');
        return $query->result();
    }

    public function add_student($data)
    {
        $this->db->insert('students', $data);
        return $this->db->insert_id();
    }

    public function update_student($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('students', $data);
    }

    public function delete_student($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('students');
    }
}
