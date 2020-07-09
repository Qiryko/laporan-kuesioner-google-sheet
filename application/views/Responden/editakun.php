<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/16/2018
 * Time: 8:46 PM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="mx-auto" style="width: 100%">
                <div class="mb-4 bg-primary">
                    <h2 class="section-heading text-center">
                        <!--                    <span class="section-heading-upper">Penelitian</span>-->
                        <span class="section-heading-lower">Ubah Akun</span>
                    </h2>
                </div>
                <div class="bg-faded rounded p-5">
                    <form action="<?=site_url('Responden/updateakun');?>" method="post">
                        <label>Nama Responden</label>
                        <input class="form-control" type="text" name="nama_responden" placeholder="Nama" value="<?php echo $responden['nama_responden'] ;?>" required>
                        <br>
                        <label>NIM</label>
                        <input class="form-control" type="number" name="NIM" placeholder="NIM" value="<?php echo $responden['NIM'] ;?>" required>
                        <br>
                        <label>Fakultas</label>
                        <input class="form-control" type="text" name="fakultas" placeholder="Fakultas" value="<?php echo $responden['fakultas'] ;?>" required>
                        <br>
                        <label>Jurusan</label>
                        <input class="form-control" type="text" name="jurusan" placeholder="Jurusan" value="<?php echo $responden['jurusan'] ;?>" required>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
