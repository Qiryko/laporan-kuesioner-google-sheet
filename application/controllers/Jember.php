<?php


class Jember extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_peneliti');
        date_default_timezone_set('Asia/Jakarta');
    }

    function index(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Jember/index.php', $data);
    }
    function datarespondenjbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Jember/datarespondenjbr.php');
    }

    function jawabanrespondenpersepsijbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Jember/jawabanrespondenpersepsijbr.php');
    }

    function jawabanrespondenharapanjbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Jember/jawabanrespondenharapanjbr.php');
    }

    function dataskorjbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Jember/dataskorjbr.php');
    }
    function datagapjbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Jember/datagapjbr.php');
    }
   
}