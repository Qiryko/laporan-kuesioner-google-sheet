<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 6/1/2018
 * Time: 9:12 PM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Selamat Datang</span>
                        <span class="section-heading-lower"><?php echo $responden['nama_responden'] ?></span>
                    </h2>
                    <p class="mb-0">NIM : <?php echo $responden['NIM'] ?> | Fakultas : <?php echo $responden['fakultas'] ?> | Jurusan : <?php echo $responden['jurusan'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
