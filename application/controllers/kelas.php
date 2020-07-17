<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kelas extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('M_siswa');
		$this->load->model('rapot_m');
		$this->load->model('M_rapot');

      }

    public function index()
    {
        $data['title'] = 'Kelas 10';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tampil'] = $this->M_siswa->tampil_data();
        $data['nilai'] = $this->M_rapot->tampil_data();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelas/10', $data);
        $this->load->view('templates/footer');
    }


    public function sebelas()
    {
        $data['title'] = 'Kelas 11';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tampil'] = $this->M_siswa->tampil_data();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelas/11', $data);
        $this->load->view('templates/footer');
    }
    public function duabelas()
    {
        $data['title'] = 'Kelas 12';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tampil'] = $this->M_siswa->tampil_data();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelas/12', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_nilai(){

        $nis=$this->input->post('nis');
        $nama=$this->input->post('nama');
        $kelas=$this->input->post('kelas');
        $mapel=$this->input->post('mapel');
        $uts=$this->input->post('uts');
        $uas=$this->input->post('uas');
        $sum=$uts+$uas;
        $rata=$sum/2;
  
        $data = array(
          'nis' => $nis,
          'nama' => $nama,
          'kelas' => $kelas,
          'mapel' => $mapel,
          'nilai_uts' => $uts,
          'nilai_uas' => $uas,
          'rerata' => $rata,
      );
    
      $this->M_rapot->simpan_data($data, 'nilai');
      $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" role="alert">
          Data Berhasil di Upload
          </div>');
              redirect('kelas');
    }

    public function simpan_nilai11(){

        $nis=$this->input->post('nis');
        $nama=$this->input->post('nama');
        $kelas=$this->input->post('kelas');
        $mapel=$this->input->post('mapel');
        $uts=$this->input->post('uts');
        $uas=$this->input->post('uas');
        $sum=$uts+$uas;
        $rata=$sum/2;
  
        $data = array(
          'nis' => $nis,
          'nama' => $nama,
          'kelas' => $kelas,
          'mapel' => $mapel,
          'nilai_uts' => $uts,
          'nilai_uas' => $uas,
          'rerata' => $rata,
      );
    
      $this->M_rapot->simpan_data($data, 'nilai');
      $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" role="alert">
          Data Berhasil di Upload
          </div>');
              redirect('kelas/sebelas');
       
       
    }
    public function simpan_nilai12(){

        $nis=$this->input->post('nis');
        $nama=$this->input->post('nama');
        $kelas=$this->input->post('kelas');
        $mapel=$this->input->post('mapel');
        $uts=$this->input->post('uts');
        $uas=$this->input->post('uas');
        $sum=$uts+$uas;
        $rata=$sum/2;
  
        $data = array(
          'nis' => $nis,
          'nama' => $nama,
          'kelas' => $kelas,
          'mapel' => $mapel,
          'nilai_uts' => $uts,
          'nilai_uas' => $uas,
          'rerata' => $rata,
      );
    
      $this->M_rapot->simpan_data($data, 'nilai');
      $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" role="alert">
          Data Berhasil di Upload
          </div>');
              redirect('kelas/duabelas');       
    }


    public function get_nama(){
        $nama=$this->input->post('nama');
        $data=$this->M_siswa->get_data_barang_bynama($nama);
        echo json_encode($data);
    }
}
