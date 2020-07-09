<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/2/2018
 * Time: 9:15 PM
 */

class Responden extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_responden');
        $this->load->library('form_validation'); // validasi yg di input
    }

    function index(){
        $id = $this->session->userdata('id');
        $data['responden'] = $this->M_responden->ambildataresponden($id)->row_array();
        $this->load->view('Responden/header.php');
        $this->load->view('Responden/index.php', $data);
        $this->load->view('Responden/footer.php');
    }

    function penelitian(){
        $id = $this->session->userdata('id');
        $idresponden = $this->M_responden->ambilidresponden($id)->row()->id_responden;
        $data['penelitian'] = $this->M_responden->daftarpenelitian()->result();
        $jawaban = $this->M_responden->getjawaban($idresponden)->result();
        foreach ($jawaban as $j){
            $a = $j->id_penelitian;
            $b[$j->id_penelitian] = $a;
        }
        $data['jawaban'] = $b;
        $this->load->view('Responden/header.php');
        $this->load->view('Responden/penelitian.php', $data);
        $this->load->view('Responden/footer.php');
    }
    function variabel(){
        $data['variabel'] = $this->M_responden->tampilvariabel()->result();
        $data['service'] = $this->M_responden->getindikator(1)->result();
        $data['website'] = $this->M_responden->getindikator(2)->result();
        $data['user'] = $this->M_responden->getindikator(3)->result();
        $this->load->view('Responden/header.php');
        $this->load->view('Responden/variabel.php', $data);
        $this->load->view('Peneliti/footer.php');
    }

    function openingkuisioner($id_penelitian){
        $id = $this->session->userdata('id');
        $data['responden'] = $this->M_responden->ambildataresponden($id)->row_array();
        $data['datapenelitian'] = $this->M_responden->ambildatapenelitian($id_penelitian)->row_array();
        $this->load->view('Responden/header.php');
        $this->load->view('Responden/openingkuisioner.php', $data);
        $this->load->view('Responden/footer.php');
    }

    function kuisioner($id_penelitian){
        $id = $this->session->userdata('id');
        $data['idpenelitian'] = $id_penelitian;
        $data['idresponden'] = $this->M_responden->ambilidresponden($id)->row()->id_responden;
        $data['indikator'] = $this->M_responden->ambilindikator()->result();
        $data['tangible'] = $this->M_responden->tampilkuisioner(1)->result();
        $data['reliability'] = $this->M_responden->tampilkuisioner(2)->result();
        $data['responsiveness'] = $this->M_responden->tampilkuisioner(3)->result();
        $data['assurance'] = $this->M_responden->tampilkuisioner(4)->result();
        $data['empathy'] = $this->M_responden->tampilkuisioner(5)->result();
        $data['usability'] = $this->M_responden->tampilkuisioner(6)->result();
        $data['informationquality'] = $this->M_responden->tampilkuisioner(7)->result();
        $data['serviceinteraction'] = $this->M_responden->tampilkuisioner(8)->result();
        $data['usersatisfaction'] = $this->M_responden->tampilkuisioner(9)->result();
        $data['netbenefit'] = $this->M_responden->tampilkuisioner(10)->result();
        $this->load->view('Responden/header.php');
        $this->load->view('Responden/kuisioner.php', $data);
        $this->load->view('Responden/footer.php');
    }

    function simpanjawaban(){
        $post = $this->input->post();
        $result = array();
        $total_post = count($post['id_responden']);

        foreach($post['id_responden'] AS $key => $val)
        {
            $result[] = array(
                "id_responden" => $post['id_responden'][$key],
                "id_pertanyaan" => $post['id_pertanyaan'][$key],
                "id_penelitian" => $post['id_penelitian'][$key],
                "score" => $post['score'][$key]
            );
        }
        $this->M_responden->simpanjawaban($result);

        $this->session->set_flashdata('notif', '<p style="color:green;font-weight:bold;">'.$total_post.' data berhasil di simpan!</p>');
        redirect('Responden/index');
    }

    function editakun(){
        $id = $this->session->userdata('id');
        $idresponden = $this->M_responden->ambilidresponden($id)->row()->id_responden;
        $data['responden'] = $this->M_responden->akun($idresponden);
        $this->load->view('Responden/header.php');
        $this->load->view('Responden/editakun.php', $data);
        $this->load->view('Responden/footer.php');
    }

    function updateakun(){
        $id = $this->session->userdata('id');
        $idresponden = $this->M_responden->ambilidresponden($id)->row()->id_responden;
        $nama_responden = $this->input->post('nama_responden');
        $NIM = $this->input->post('NIM');
        $fakultas = $this->input->post('fakultas');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'nama_responden' => $nama_responden,
            'NIM' => $NIM,
            'fakultas' => $fakultas,
            'jurusan' => $jurusan,
        );

        $where = array(
            'id_responden' => $idresponden
        );

        $this->M_responden->updateakun($where,$data);
        redirect('Responden/index');
    }
}