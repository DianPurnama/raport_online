<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{


  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/auth_header');
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();

    //jika usernya ada
    if ($user) {
      //user aktif
      if ($user['is_active'] == 1) {
        //cek password
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('Admin');
          if ($user['role_id'] == 2) {
            redirect('guru');
          if ($user['role_id'] == 3) {
            redirect('siswa'); 
        }
      }
    }else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" 
                    role ="alert"> Wrong Password!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" 
                role ="alert">This email has not been activated!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" 
            role ="alert"> Email is not resgitered</div>');
      redirect('auth');
    }
  }
  }
  
  public function login_siswa()
  {
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
	$this->form_validation->set_rules('nis', 'Nis', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/auth_header');
      $this->load->view('auth/login_siswa');
      $this->load->view('templates/auth_footer');
    } else {
      $this->_loginsiswa();
    }
  }

  private function _loginsiswa()
  {
    $nis = $this->input->post('nis');
    $password = $this->input->post('password');

    $user = $this->db->get_where('siswa', ['nis' => $nis])->row_array();
    $password = $this->db->get_where('siswa', ['tgl_lahir' => $password])->row_array();

    //jika usernya ada 
    if ($user) {
        //cek password
        if ($password) {
          $data = [
            'nis' => $user['nis'],
			'role_id' => $user['role_id']

          ];
          $this->session->set_userdata($data);
          {
			if ($user['role_id'] == 3) {
            redirect('siswa');           
          }
		  }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" 
                    role ="alert"> Wrong Password!</div>');
          redirect('auth/login_siswa');
     
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" 
            role ="alert"> Email is not resgitered</div>');
      redirect('auth/login_siswa');
    }
  }
  
   public function login_guru()
  {
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
	$this->form_validation->set_rules('email', 'Email', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/auth_header');
      $this->load->view('auth/login_guru');
      $this->load->view('templates/auth_footer');
    } else {
      $this->_loginguru();
    }
  }

  private function _loginguru()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('guru', ['email' => $email])->row_array();
    $password = $this->db->get_where('guru', ['tgl_lahir' => $password])->row_array();

    //jika usernya ada 
    if ($user) {
        //cek password
        if ($password) {
          $data = [
            'email' => $user['email'],
			'role_id' => $user['role_id']

          ];
          $this->session->set_userdata($data);
          {
			if ($user['role_id'] == 2) {
            redirect('guru');           
          }
		  }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" 
                    role ="alert"> Wrong Password!</div>');
          redirect('auth/login_guru');
     
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" 
            role ="alert"> Email is not resgitered</div>');
      redirect('auth/login_guru');
    }
  }
 

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');
    $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" role="alert">
      Anda berhasil keluar!
      </div>');
    redirect('homepage');
  }
}
