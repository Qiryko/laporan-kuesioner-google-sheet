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
                        <span class="section-heading-lower">Ubah Akun</span>
                    </h2>
                </div>
                <div class="bg-faded rounded p-5">
                    <form action="<?=site_url('Peneliti/updateakun');?>" method="post">
                        <label>Nama Peneliti</label>
                        <input class="form-control" type="text" name="nama_pen" placeholder="Nama" value="<?php echo $peneliti['nama_pen'] ;?>" required>
                        <br>
                        <label>Asal Institusi</label>
                        <input class="form-control" type="text" name="asal_institusi" placeholder="Asal Institusi" value="<?php echo $peneliti['asal_institusi'] ;?>" required>
                        <br>
                        <label>E-Mail</label>
                        <input class="form-control" type="email" name="email" placeholder="E-Mail" value="<?php echo $peneliti['email'] ;?>" required>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
