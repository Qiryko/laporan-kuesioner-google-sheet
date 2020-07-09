<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 5/31/2018
 * Time: 10:53 PM
 */ ?>

<section class="page-section clearfix">
    <?php if($this->session->flashdata('sukses')){
        echo '<div class="text-center"><h4 style="color:green";>'.$this->session->flashdata('sukses').'</h4></div>'
        ;}?>
    <div class="container">
        <div class="intro" align="center">
            <div class="intro-text text-center bg-faded  p-5 rounded">
                <h2 class="section-heading mb-4">
                    <!-- <span class="section-heading-upper"></span> -->
                    <span class="section-heading-lower">Login</span>
                </h2>
            <form action="<?=base_url('Login/login')?>" method="post">
                <p style="color:red";>
                    <?php if($this->session->flashdata('error')){
                        echo $this->session->flashdata('error');
                    }?>
                </p>
                <input class="form-control" type="text" placeholder="Username" name="username" required>
                <br>
                <input class="form-control" type="password" placeholder="Password" name="password" required>
                <br>
                <button class="btn btn-primary" style="width: 100%" type="submit">Login</button>
                <br><br><br>
                <!-- <a>Belum punya akun ? Register sebagai <a href="<?=site_url('Login/registerresponden')?>">Responden</a></a> -->
            </form>
            </div>
        </div>
    </div>
</section>
