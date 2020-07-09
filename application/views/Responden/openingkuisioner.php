<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/10/2018
 * Time: 6:45 PM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto text-center">
                <div class="rounded">
                    <div class="cta-inner rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Selamat Datang</span>
                        </h2>
                        <p class="mb-0 text-left">Kepada Yth. <?php echo $responden['nama_responden'] ?></p>
                        <p class="mb-0 text-left">Selamat beraktifitas</p>
                        <p class="mb-0 text-justify">
                            Pertama-tama saya mengucapkan terimakasih kepada responden yang sudah menyempatkan waktu mengisi kuisioner ini.
                            Perkenalkan nama saya <?php echo $datapenelitian['nama_pen'] ?>, saya mengadakan kuesioner ini untuk keperluan penelitian saya dengan judul "<?php echo $datapenelitian['judul_penelitian'] ?>".
                            Saya harap saudara/i responden dapat mengisi kuesioner ini sesuai dengan persepsi saudara/i terhadap kualitas layanan dan website <?php echo $datapenelitian['link'] ?> yang sebenar-benarnya agar hasil kuesioner ini dapat dipertanggungjawabkan dan dipergunakan sebagaimana mestinya.
                            Terimakasih atas perhatian anda, selamat mengisi kuesioner ini.
                        </p>
                        <br>
                        <p class="mb-0 text-left">Hormat saya,</p>
                        <p class="mb-0 text-left"><?php echo $datapenelitian['nama_pen'] ?></p>
                        <p class="mb-0 text-left"><?php echo $datapenelitian['asal_institusi'] ?></p>
                    </div>
                    <br>
                    <div>
                        <a class="btn btn-primary" href="<?=site_url('Responden/kuisioner/'.$datapenelitian['id_penelitian'])?>">Lanjutkan</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
