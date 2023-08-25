<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        // $this->load->model('m_siswa', 'Siswa_model');
    }
    public function index()
    {
        //var_dump($this->Siswa_model->get_data());
        //die();
        // $this->load->view('template/header.php');
        // $this->load->view('template/sidebar.php');
        $data['dataSiswa'] = $this->Siswa_model->get_data();
        $data['view'] = 'siswa';
        $this->load->view('template/body', $data);

        // $this->load->view('template/footer.php');
    }
    public function tambah()
    {
        $this->load->view('template/header.php');
        $this->load->view('template/sidebar.php');
        $querygetsiswa = $this->Siswa_model->get_data();
        $DATA = array('tampilsiswa' => $querygetsiswa);
        $this->load->view('tambah', $DATA);
        $this->load->view('template/footer.php');
    }
    public function tambah_siswa()
    {

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tambah');
        $this->load->view('template/footer');
    }
    public function edit($id)
    {
        // $data['editSiswa'] = $this->Siswa_model->getubahsiswa($id);
        //$data['viewedit'] = 'siswa';
        $queryeditsiswa = $this->Siswa_model->getubahsiswa($id);
        $DATA = array('queryedit' => $queryeditsiswa);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('edit.php', $DATA);
        $this->load->view('template/footer');
    }
    public function tambahkan()
    {
        $id = $this->input->POST('id');
        $nama = $this->input->POST('nama');
        $kelas = $this->input->POST('kelas');
        $alamat = $this->input->POST('alamat');
        $no_hp = $this->input->POST('no_hp');

        $tambahno = array(
            'id' => $id,
            'nama' => $nama,
            'kelas' => $kelas,
            'alamat' => $alamat,
            'no_hp' => $no_hp

        );
        $insert = $this->Siswa_model->siswatambah($tambahno);
        // echo $insert;
        // die();
        redirect(base_url(''));
    }
    public function editin()
    {
        $id = $this->input->POST('id');
        $nama = $this->input->POST('nama');
        $kelas = $this->input->POST('kelas');
        $alamat = $this->input->POST('alamat');
        $no_hp = $this->input->POST('no_hp');


        $editin = array(

            'nama' => $nama,
            'kelas' => $kelas,
            'alamat' => $alamat,
            'no_hp' => $no_hp

        );

        $update = $this->Siswa_model->ubhsiswa($id, $editin);
        // if ($update > 0) {
        //     echo json_encode(['status' => 200, 'message' => 'Berhasil ubah']);
        //     die();
        // }
        // echo json_encode(['status' => 500, 'message' => 'gagal ubah']);
        redirect(base_url(''));
    }
    public function hapus($id)
    {
        $this->Siswa_model->hapussiswa($id);
        redirect(base_url(''));
    }
}
