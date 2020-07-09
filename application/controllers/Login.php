<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');

    }

	function index()
	{
	    $this->load->view('headerlogin.php');
		$this->load->view('login.php');
		// $this->load->view('footerlogin.php');
	}

	function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $a = $this->M_login->login($username, $password);
        if($a){
            $this->session->set_flashdata('sukses', 'Login Berhasil !!!');
            if ($this->session->userdata('user_level')==1){
                redirect('Peneliti/index');
            } else if ($this->session->userdata('user_level')==2){
                redirect('Jember/index');
            }else if ($this->session->userdata('user_level')==3){
                redirect('Lumajang/index');
            }
        }else{
            $this->session->set_flashdata('error', 'Username atau Password Salah !!!');
            redirect('Login/index');
        }
    }

    public function logout(){
        session_destroy();
        redirect('/');
    }

    function registerpeneliti(){
        $this->load->view('headerlogin.php');
        $this->load->view('registerpeneliti.php');
        $this->load->view('footerlogin.php');
    }

    function tambahpeneliti(){
        $username       =   $this->input->post('username');
        $password       =   $this->input->post('password');
        $nama_pen       =   $this->input->post('nama_pen');
        $asal_institusi =   $this->input->post('asal_institusi');
        $email          =   $this->input->post('email');

        $datauser = array(
            'id'        => null,
            'username'  => $username,
            'password'  => md5($password),
            'user_level'=> 1
        );

        $this->M_login->registeruser($datauser);
        $id = $this->db->insert_id();

        $datapeneliti = array(
            'id_peneliti'   => null,
            'id'            => $id,
            'nama_pen'      => $nama_pen,
            'asal_institusi'=> $asal_institusi,
            'email'         => $email,
        );

        $this->M_login->registerpeneliti($datapeneliti);
        // $this->session->set_flashdata('sukses','Tambah data berhasil, silahkan Login untuk melanjutkan');
        redirect('Peneliti/index');
    }

    function registerresponden(){
        $this->load->view('headerlogin.php');
        $this->load->view('registerresponden.php');
        $this->load->view('footerlogin.php');
    }

    function tambahresponden(){
        $username       =   $this->input->post('username');
        $password       =   $this->input->post('password');
        $nama_responden =   $this->input->post('nama_responden');
        $NIM            =   $this->input->post('NIM');
        $fakultas       =   $this->input->post('fakultas');
        $jurusan        =   $this->input->post('jurusan');

        $datauser = array(
            'id'        => null,
            'username'  => $username,
            'password'  => md5($password),
            'user_level'=> 2
        );

        $this->M_login->registeruser($datauser);
        $id = $this->db->insert_id();

        $dataresponden = array(
            'id_responden'   => null,
            'id'             => $id,
            'nama_responden' => $nama_responden,
            'NIM'            => $NIM,
            'fakultas'       => $fakultas,
            'jurusan'        => $jurusan,
        );

        $this->M_login->registerresponden($dataresponden);
        $this->session->set_flashdata('sukses','Register berhasil, silahkan Login untuk melanjutkan');
        redirect('Login/index');
    }
}
