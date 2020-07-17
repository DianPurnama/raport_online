<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Siswa extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_rapot');
        $this->load->model('M_siswa');

      }

    public function index()
    {
        $data['title'] = 'Dashboard Siswa';
        $data['user'] = $this->db->get_where('siswa', ['nis' =>
        $this->session->userdata('nis')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
	
	public function profil()
    {
        $data['title'] = 'Profile Siswa';
        $data['user'] = $this->db->get_where('siswa', ['nis' =>
        $this->session->userdata('nis')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/profil', $data);
        $this->load->view('templates/footer');
    }

    public function nilai()
    {
        $data['title'] = 'Nilai Siswa';
        $data['user'] = $this->db->get_where('siswa', ['nis' =>
        $this->session->userdata('nis')])->row_array();
        $data['nilai'] = $this->db->get_where('nilai', ['nis' =>
        $this->session->userdata('nis')])->row_array();
        $data['tampil'] = $this->M_rapot->tampil_data();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/nilai_rapot', $data);
        $this->load->view('templates/footer');
    }
	
	public function cetak($id)
    {
        $tampil = $this->M_rapot->detail_data($id);
        $nama = $this->M_siswa->detail_data($id);
        $data['nama'] = $nama;
        $data['tampil'] = $tampil;
        $data['title'] = 'Cetak Rapot';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/cetak', $data);
        $this->load->view('templates/footer');
    }
}
