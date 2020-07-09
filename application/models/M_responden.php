<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/2/2018
 * Time: 9:15 PM
 */

class M_responden extends CI_Model
{
    function ambilidresponden($id){
        $this->db->select('id_responden');
        $this->db->where('id',$id);
        return $this->db->get('responden');
    }

    function tampilvariabel(){
        $this->db->select('*');
        $this->db->from('tb_variabel');
        return $this->db->get();
    }

    function getindikator($where){
        $this->db->select('*');
        $this->db->from('tb_indikator');
        $this->db->where('id_variabel', $where);
        $data = $this->db->get();
        return $data;
    }

    function ambilindikator(){
        return $this->db->get('tb_indikator');
    }

    function ambildataresponden($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        return $this->db->get('responden');
    }

    function daftarpenelitian(){
        $this->db->select('*');
        $this->db->from('penelitian');
        $this->db->join('peneliti', 'penelitian.id_peneliti = peneliti.id_peneliti');
        $this->db->where('status', 1);
        $this->db->group_by('penelitian.id_penelitian');
        return $this->db->get();
    }

    function getjawaban($idresponden){
        $this->db->select('*');
        $this->db->where('id_responden', $idresponden);
        $this->db->group_by('id_penelitian');
        return $this->db->get('tb_jawaban');
    }

    function ambildatapenelitian($id_penelitian){
        $this->db->select('*');
        $this->db->from('penelitian');
        $this->db->join('peneliti', 'penelitian.id_peneliti = peneliti.id_peneliti');
        $this->db->where('id_penelitian', $id_penelitian);
        return $this->db->get();
    }

    function tampilkuisioner($where){
        $this->db->select('*');
        $this->db->where('id_indikator', $where);
        return $this->db->get('tb_pertanyaan');
    }

    function simpanjawaban($result = array()){
        $total_array = count($result);

        if($total_array != 0)
        {
            $this->db->insert_batch('tb_jawaban', $result);
        }

    }

    function akun($idresponden){
        $this->db->select('*');
        $this->db->from('responden');
        $this->db->where('id_responden', $idresponden);
        $data = $this->db->get()->row_array();
        return $data;
    }

    function updateakun($where, $data){
        $this->db->where($where);
        $this->db->update('responden', $data);
    }
}