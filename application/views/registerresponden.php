<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/8/2018
 * Time: 8:39 PM
 */ ?>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro" align="center">
            <div class="intro-text text-center bg-faded  p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Halaman Register</span>
                    <span class="section-heading-lower">Responden</span>
                </h2>
                <form action="<?=base_url('Login/tambahresponden')?>" method="post">
                    <input class="form-control" type="text" placeholder="Username" name="username" required>
                    <br>
                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                    <br>
                    <input class="form-control" type="text" placeholder="Nama Lengkap" name="nama_responden" required>
                    <br>
                    <input class="form-control" type="number" placeholder="NIM" name="NIM" required>
                    <br>
                    <input class="form-control" type="text" placeholder="Fakultas" name="fakultas" required>
                    <br>
                    <input class="form-control" type="text" placeholder="Jurusan" name="jurusan" required>
                    <br>
                    <button class="btn btn-primary" style="width: 45%" type="submit">Register</button>
                    <a class="btn btn-danger" style="width: 45%" href="<?=site_url('Login/index')?>">Batal</a>
                </form>
            </div>
        </div>
    </div>
</section>
