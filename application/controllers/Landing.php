<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller
{

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
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('index.php');
        // $this->load->view('login.php');
        // $this->load->view('footerlogin.php');
    }
    public function jember()
    {
        $this->load->view('kuisjember.php');
        // $this->load->view('login.php');
        // $this->load->view('footerlogin.php');
    }
    public function lumajang()
    {
        $this->load->view('kuislumajang.php');
        // $this->load->view('login.php');
        // $this->load->view('footerlogin.php');
    }
}