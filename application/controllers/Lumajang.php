<?php


class Lumajang extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_peneliti');
        date_default_timezone_set('Asia/Jakarta');
    }

    function index(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Lumajang/index.php', $data);
    }
    function datarespondenlmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Lumajang/datarespondenlmj.php');
    }

    function jawabanrespondenpersepsilmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Lumajang/jawabanrespondenpersepsilmj.php');
    }

    function jawabanrespondenharapanlmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Lumajang/jawabanrespondenharapanlmj.php');
    }

    function dataskorlmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Lumajang/dataskorlmj.php');
    }
    function datagaplmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Lumajang/datagaplmj.php');
    }
   
}