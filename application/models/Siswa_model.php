<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('tbl_siswa');
        return $query->result();
    }
    public function siswatambah($data)
    {
        var_dump($data);
        $this->db->insert('tbl_siswa', $data);
        return $this->db->insert_id();
    }
    public function getubahsiswa($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_siswa');
        return $query->row();
    }
    public function ubhsiswa($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_siswa', $data);
        return $this->db->affected_rows();
    }
    public function hapussiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_siswa');
    }
}
