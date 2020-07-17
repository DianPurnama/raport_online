<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rapot extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('M_rapot');
        $this->load->model('M_siswa');

      }

    public function index()
    {
        $data['title'] = 'Lihat Rapot';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rapot/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihatRapot()
    {
        $data['title'] = 'Lihat Rapot';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rapot/lihatRapot', $data);
        $this->load->view('templates/footer');
    }

    public function rapotSiswa($id)
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
        $this->load->view('rapot/rapotSiswa', $data);
        $this->load->view('templates/footer');
    }
	
	public function cek(){
	$data['siswa']=$this->model_aduan->get_siswa();
	$this->load->view('input/rapot',$data);
}

	public function insert(){

	$data = array(
		'nis' => $this->input->post('nis'),
		'kelas' => $this->input->post('kelas'),
        'nama' => $this->input->post('nama'),
		'tgl_lahir' => date('Y-m-d', strtotime($this->input->post('tgl_lahir'))),
		'role_id' => 3,		
	);

	$this->rapot_m->insert_data($data, 'rapot_m');
	redirect('input/rapot');
}

public function detail_rapot($id)
{
    $tampil = $this->M_rapot->detail_data($id);
    $nama = $this->M_siswa->detail_data($id);
    $data['nama'] = $nama;
    $data['tampil'] = $tampil;
    $data['title'] = 'Detail Rapot';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('rapot/lihatRapot_', $data);
    $this->load->view('templates/footer');
}

// untuk edit 
public function edit_data()
{
    $id=$this->input->post('id_nilai');
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

 $where = array (
   'id_nilai' => $id
 );

 $this->M_rapot->update_data($where,$data,'nilai');
 redirect('rapot/detail_rapot/' . $nis);
}



}
