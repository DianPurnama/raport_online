<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Input extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Input_model');
		$this->load->model('M_siswa');

    }

    public function index()
    {
        $data['title'] = 'Input Siswa';
        $data['kode'] = $this->M_siswa->buat_kode();

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->Input_model->getSiswa(); 

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
          'required' => 'Nama Lengkap harap di isi !!'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required', [
          'required' => 'Kelas harap di isi !!'
        ]);
        

        if ($this->form_validation->run() == false) {
          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('input/index');
          $this->load->view('templates/footer');
          $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" role="alert">
          Gagal Menambahkan siswa, silahkan input dan cek ulang !!
          </div>');
        } else {
          $data = [
            'nis' => $this->M_siswa->buat_kode(),
            'kelas' => $this->input->post('kelas'),
            'nama' => $this->input->post('nama'),
			'tgl_lahir' => date('Y-m-d', strtotime($this->input->post('tgl_lahir'))),
			'role_id' => 3,

           
          ];
          $this->db->insert('siswa', $data);
          $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" role="alert">
          Siswa Berhasil Di tambahkan!!
          </div>');
          redirect('input');
        }
    }

    public function guru()
    {
        $data['title'] = 'Input Guru';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('input_model', 'inputm');
        $data['guru'] = $this->inputm->getGuru();
        $data['inputm'] = $this->db->get('guru')->result_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
          'required' => 'Nama lengkap  harap di isi !!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[guru.email]', [
            'is_unique' => 'Email telah terdaftar!',
            'required'  => 'Email harap di isi!!'
          ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
          'required' => 'Alamat harap di isi !!'
        ]);
        $this->form_validation->set_rules('mapel', 'Mapel', 'required', [
          'required' => 'Mata pelajaran harap di isi !!'
        ]);


        if ($this->form_validation->run() == false) {
          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('input/guru');
          $this->load->view('templates/footer'); 
          $this->session->set_flashdata('guru', '<div class="alert alert-danger shadow-lg" role="alert">
          Gagal Menambahkan guru, silahkan input dan cek ulang !!
          </div>');
        } else {
          $data = [
            'nama' => $this->input->post('nama'),
            'email' => htmlspecialchars($this->input->post('email', true)),
			'tgl_lahir' => date('Y-m-d', strtotime($this->input->post('tgl_lahir'))),
            'alamat' => $this->input->post('alamat'),
            'mapel' => $this->input->post('mapel'),
			'role_id' => 2,

          ];
          $this->db->insert('guru', $data);
          $this->session->set_flashdata('guruB', '<div class="alert alert-success shadow-lg" role="alert">
          Guru Berhasil Di tambahkan!!
          </div>');
          redirect('input/guru');
            }
        }
        public function hapusGuru($id)
        {
            $this->db->delete('guru', array('id' => $id));
            $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" 
                        role ="alert"> Berhasil Menghapus guru!</div>');
            redirect('input/guru');
        }
        public function ubahData($id)
      {
        $data['title'] = 'Edit Data Guru';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('input_model', 'edit');
        $data['guru'] = $this->edit->getGuru();
        $data['edit'] = $this->db->get('guru')->result_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
          'required' => 'Nama lengkap  harap di isi !!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required'  => 'Email harap di isi!!'
          ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
          'required' => 'Alamat harap di isi !!'
        ]);
        $this->form_validation->set_rules('mapel', 'Mapel', 'required', [
          'required' => 'Mata pelajaran harap di isi !!'
        ]);


        if ($this->form_validation->run() == false) {
          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('input/ubah_data');
          $this->load->view('templates/footer'); 
          $this->session->set_flashdata('guru', '<div class="alert alert-danger shadow-lg" role="alert">
          Gagal Menambahkan guru, silahkan input dan cek ulang !!
          </div>');
        } else {
          $this->_submit();
            }
  }      

  public function submit() {
    $this->load->model('input_model');
    $guru = $this->input_model->editGuru($id);

    $data['guru'] = $this->edit->getGuru();
    $data['edit'] = $this->db->get('guru')->result_array();
    
    $id =$this->input->post('id');
    $cek = $this->db->get_where('guru', ['id' => $cek])->row_array();

    $this->edit->editGuru($this->input->post('id'));
    $this->session->set_flashdata('guruB', '<div class="alert alert-success shadow-lg" role="alert">
    Data Guru Berhasil Di Update!!
    </div>');
    redirect('input/guru');
  }

}
