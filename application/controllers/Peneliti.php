<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 6/1/2018
 * Time: 9:04 PM
 */

class Peneliti extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_peneliti');
        date_default_timezone_set('Asia/Jakarta');
    }

    function index(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/index.php', $data);
    }
    function datarespondenjbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/datarespondenjbr.php');
    }
    function datarespondenlmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/datarespondenlmj.php');
    }
    function jawabanrespondenpersepsijbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/jawabanrespondenpersepsijbr.php');
    }
    function tambahpeneliti(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/tambahpeniliti.php');
    }
    function jawabanrespondenharapanjbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/jawabanrespondenharapanjbr.php');
    }
    function jawabanrespondenpersepsilmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/jawabanrespondenpersepsilmj.php');
    }
    function jawabanrespondenharapanlmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/jawabanrespondenharapanlmj.php');
    }
    function dataskorjbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/dataskorjbr.php');
    }
    function datagapjbr(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/datagapjbr.php');
    }
    function dataskorlmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/dataskorlmj.php');
    }
    function datagaplmj(){
        $id = $this->session->userdata('id');
        $data['peneliti'] = $this->M_peneliti->ambildatapeneliti($id)->row_array();
        $this->load->view('Peneliti/datagaplmj.php');
    }







    function penelitian(){
        $id = $this->session->userdata('id');
        $id_peneliti = $this->M_peneliti->ambilidpeneliti($id)->row()->id_peneliti;
        $where = array('id_peneliti' => $id_peneliti);
        $data['penelitian'] = $this->M_peneliti->tampilpenelitian($where)->result();
        $this->load->view('Peneliti/header.php');
        $this->load->view('Peneliti/penelitian.php', $data);
        $this->load->view('Peneliti/footer.php');
    }

    function tambahpenelitian(){
        $this->load->view('Peneliti/header.php');
        $this->load->view('Peneliti/tambahpenelitian.php');
        $this->load->view('Peneliti/footer.php');
    }

    function prosestambahpenelitian(){
        $id = $this->session->userdata('id');
        $id_peneliti = $this->M_peneliti->ambilidpeneliti($id)->row()->id_peneliti;
        $judul_penelitian = $this->input->post('judul_penelitian');
        $target_responden = $this->input->post('target_responden');
        $tgl_batas = $this->input->post('tgl_batas');
        $link = $this->input->post('link');

        $data = array(
            'id_peneliti' => $id_peneliti,
            'judul_penelitian' => $judul_penelitian,
            'target_responden' => $target_responden,
            'tgl_mulai' => mdate('%Y-%m-%d', now()),
            'tgl_batas' => $tgl_batas,
            'tgl_selesai' => NULL,
            'link' => $link
        );
        $this->M_peneliti->tambahpenelitian($data);
        redirect('Peneliti/penelitian');
    }

    function hapuspenelitian($id_penelitian){
        $where = array('id_penelitian' => $id_penelitian);
        $this->M_peneliti->hapuspenelitian($where);
        redirect('Peneliti/penelitian');
    }

    function ubahstatuspenelitian($id_penelitian){
        $data = array('status' => '2', 'tgl_selesai' => mdate('%Y-%m-%d', now()));
        $this->M_peneliti->ubahstatus($id_penelitian,$data);
        redirect('Peneliti/penelitian');
    }

    function detailpenelitian($id_penelitian){
        $where1 = array('id_penelitian' => $id_penelitian, 'tb_pertanyaan.id_variabel' => 1);
        $data['servicequality'] = $this->M_peneliti->getvariabel1($where1)->result();
        $where2 = array('id_penelitian' => $id_penelitian, 'tb_pertanyaan.id_variabel' => 2);
        $data['websitequality'] = $this->M_peneliti->getvariabel2($where2)->result();
        $where3 = array('id_penelitian' => $id_penelitian, 'tb_pertanyaan.id_variabel' => 3);
        $data['usersatisfaction'] = $this->M_peneliti->getvariabel3($where3)->result();
        $this->load->view('Peneliti/header.php');
        $this->load->view('Peneliti/detailpenelitian.php', $data);
        $this->load->view('Peneliti/footer.php');
    }



    function variabel(){
        $data['variabel'] = $this->M_peneliti->tampilvariabel()->result();
        $data['service'] = $this->M_peneliti->getindikator(1)->result();
        $data['website'] = $this->M_peneliti->getindikator(2)->result();
        $data['user'] = $this->M_peneliti->getindikator(3)->result();
        $this->load->view('Peneliti/header.php');
        $this->load->view('Peneliti/variabel.php', $data);
        $this->load->view('Peneliti/footer.php');
    }

    function responden(){
        $id = $this->session->userdata('id');
        $id_peneliti = $this->M_peneliti->ambilidpeneliti($id)->row()->id_peneliti;
        $where = array('id_peneliti' => $id_peneliti);
        $data['penelitian'] = $this->M_peneliti->tampilpenelitian($where)->result();
        $this->load->view('Peneliti/header.php');
        $this->load->view('Peneliti/responden.php', $data);
        $this->load->view('Peneliti/footer.php');
    }

    function detailresponden($id_penelitian){
        $this->load->library('pagination');
        $page=$this->input->get('per_page');
        $search=$this->input->post('search');
        $batas=10; //jlh data yang ditampilkan per halaman
        // iki gak tau tak ubah2 sing ngisor iki
        if(!$page):     //jika page bernilai kosong maka batas akhirna akan di set 0
            $offset = 0;
        else:
            $offset = $page; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;

        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        //iki diubah sesuai controller dan methodnya
        $config['base_url'] = base_url().'Peneliti/detailresponden/'.$id_penelitian;   //url yang muncul ketika tombol pada paging diklik
        //iki diubah bikin method nang model sing ngitung jumlah datae
        $config['total_rows'] = $this->M_peneliti->jumlahresponden($search, $id_penelitian); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas

        $config['uri_segment'] = $page;

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();

        $data['jlhpage']=$page;

        $data['kembali'] = null;
        if($search){
            $data['kembali'] = "<a class='btn btn-sm btn-danger' href='".base_url()."User/katalogproduk"."''>Back</a>";
        }
        $data['judul'] = $this->db->select('judul_penelitian')->from('penelitian')->where('id_penelitian', $id_penelitian)->get()->row()->judul_penelitian;
        $data['responden'] = $this->M_peneliti->responden($id_penelitian,$batas,$offset,$search)->result();
        $this->load->view('Peneliti/header.php');
        $this->load->view('Peneliti/detailresponden.php', $data);
        $this->load->view('Peneliti/footer.php');
    }

    function editakun(){
        $id = $this->session->userdata('id');
        $idpeneliti = $this->M_peneliti->ambilidpeneliti($id)->row()->id_peneliti;
        $data['peneliti'] = $this->M_peneliti->akun($idpeneliti);
        $this->load->view('Peneliti/header.php');
        $this->load->view('Peneliti/editakun.php', $data);
        $this->load->view('Peneliti/footer.php');
    }

    function updateakun(){
        $id = $this->session->userdata('id');
        $idpeneliti = $this->M_peneliti->ambilidpeneliti($id)->row()->id_peneliti;
        $nama_pen = $this->input->post('nama_pen');
        $asal_institusi = $this->input->post('asal_institusi');
        $email = $this->input->post('email');

        $data = array(
            'nama_pen' => $nama_pen,
            'asal_institusi' => $asal_institusi,
            'email' => $email,
        );

        $where = array(
            'id_peneliti' => $idpeneliti
        );

        $this->M_peneliti->updateakun($where,$data);
        redirect('Peneliti/index');
    }
}