<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 6/1/2018
 * Time: 9:11 PM
 */

class M_peneliti extends CI_Model{

    function ambilidpeneliti($id){
        $this->db->select('id_peneliti');
        $this->db->where('id', $id);
        return $this->db->get('peneliti');
    }

    function ambildatapeneliti($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        return $this->db->get('peneliti');
    }

    function akun($idpeneliti){
        $this->db->select('*');
        $this->db->from('peneliti');
        $this->db->where('id_peneliti', $idpeneliti);
        $data = $this->db->get()->row_array();
        return $data;
    }

    function updateakun($where, $data){
        $this->db->where($where);
        $this->db->update('peneliti', $data);
    }

    function tampilpenelitian($where){
        return $this->db->get_where('penelitian', $where);
    }

    function tambahpenelitian($data){
        $this->db->insert('penelitian', $data);
    }

    function hapuspenelitian($where){
        $this->db->where($where);
        $this->db->delete('penelitian');
    }

    function ubahstatus($id_penelitian, $data){
        $this->db->where('id_penelitian',$id_penelitian);
        $this->db->update('penelitian', $data);
    }

    function getvariabel1($where1){
        $this->db->select("*, sum(score) as skor");
        $this->db->from('tb_pertanyaan');
        $this->db->join('tb_jawaban', 'tb_jawaban.id_pertanyaan = tb_pertanyaan.id_pertanyaan');
        $this->db->join('tb_variabel', 'tb_variabel.id_variabel = tb_pertanyaan.id_variabel');
        $this->db->join('tb_indikator', 'tb_indikator.id_indikator = tb_pertanyaan.id_indikator');
        $this->db->where($where1);
        $this->db->group_by('nama_indikator');
        $this->db->order_by('tb_indikator.id_indikator');
        $datapertanyaan = $this->db->get();
        return $datapertanyaan;
    }

    function getvariabel2($where2){
        $this->db->select("*, sum(score) as skor");
        $this->db->from('tb_pertanyaan');
        $this->db->join('tb_jawaban', 'tb_jawaban.id_pertanyaan = tb_pertanyaan.id_pertanyaan');
        $this->db->join('tb_variabel', 'tb_variabel.id_variabel = tb_pertanyaan.id_variabel');
        $this->db->join('tb_indikator', 'tb_indikator.id_indikator = tb_pertanyaan.id_indikator');
        $this->db->where($where2);
        $this->db->group_by('nama_indikator');
        $this->db->order_by('tb_indikator.id_indikator');
        $data = $this->db->get();
        return $data;
    }

    function getvariabel3($where3){
        $this->db->select("*, sum(score) as skor");
        $this->db->from('tb_pertanyaan');
        $this->db->join('tb_jawaban', 'tb_jawaban.id_pertanyaan = tb_pertanyaan.id_pertanyaan');
        $this->db->join('tb_variabel', 'tb_variabel.id_variabel = tb_pertanyaan.id_variabel');
        $this->db->join('tb_indikator', 'tb_indikator.id_indikator = tb_pertanyaan.id_indikator');
        $this->db->where($where3);
        $this->db->group_by('nama_indikator');
        $this->db->order_by('tb_indikator.id_indikator');
        $data = $this->db->get();
        return $data;
    }


    function ambilindikator(){
        return $this->db->get('tb_indikator');
    }
    function tampilkuisioner($where){
        $this->db->select('*');
        $this->db->where('id_indikator', $where);
        return $this->db->get('tb_pertanyaan');
    }

    function tampilvariabel(){
        $this->db->select('*');
        $this->db->from('tb_variabel');
        return $this->db->get();
    }

    function getindikator($where){
        $this->db->select('*');
        $this->db->where('id_variabel', $where);
       return $this->db->get('tb_indikator');
    }

    function responden($id_penelitian, $batas =null,$offset=null,$key=null){
        $this->db->select('*');
        $this->db->from('tb_jawaban');
        $this->db->join('responden', 'tb_jawaban.id_responden= responden.id_responden', 'inner');
        $this->db->where('id_penelitian', $id_penelitian);
        $this->db->group_by('responden.id_responden');
        if($batas != null){
            $this->db->limit($batas,$offset);
        }
        if ($key != null) {
            $this->db->like('id_responden',$key);
        }
        return $this->db->get();
    }

    function jumlahresponden($search=null, $id_penelitian){
        $this->db->select('*');
        $this->db->from('tb_jawaban');
        $this->db->join('responden', 'tb_jawaban.id_responden= responden.id_responden', 'inner');
        $this->db->where('id_penelitian', $id_penelitian);
        $this->db->group_by('responden.id_responden');
        if($search != null){
            $this->db->like('id_responden',$search);
        }
        $query = $this->db->get()->num_rows();
        return $query;
    }
}