<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 6/1/2018
 * Time: 11:15 PM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <h2 class="section-heading text-center" style="color: #ffffff">
<!--                    <span class="section-heading-upper">Penelitian</span>-->
                    <span class="section-heading-lower">Tambah Penelitian</span>
                </h2>
                <br>
                <form action="<?=site_url('Peneliti/prosestambahpenelitian');?>" method="post">
                    <label>Judul Penelitian</label>
                    <input class="form-control" type="text" name="judul_penelitian" placeholder="Judul Penelitian" value="Evaluasi Kualitas Layanan Sistem Informasi Terpadu (SISTER) Universitas Jember Menggunakan Kombinasi Metode Servqual dan Webqual Berdasarkan Perspektif Mahasiswa" readonly>
                    <br>
                    <label>Target Responden</label>
                    <input class="form-control" type="number" name="target_responden" placeholder="Target Responden" required>
                    <br>
                    <label>Tanggal Batas Waktu</label>
                    <input class="form-control" type="date" name="tgl_batas" placeholder="Batas Waktu" required>
                    <br>
                    <label>Link</label>
                    <input class="form-control" type="text" name="link" placeholder="Link" value="https://sister.unej.ac.id/" readonly>
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
