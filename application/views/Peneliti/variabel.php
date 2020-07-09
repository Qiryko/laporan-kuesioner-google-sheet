<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/2/2018
 * Time: 1:34 AM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <div class="mb-4 bg-primary">
                    <h2 class="section-heading text-center">
                        <span class="section-heading-lower">Daftar Variabel</span>
                    </h2>
                </div>
                <?php foreach ($variabel as $v){ ?>
                <div class="bg-faded rounded p-4">
                        <div class="mb-3 text-center">
                            <h2 style="background-color: #1c46f2; width: 100%; padding: 10px">Variabel <?=$v->nama_variabel?> (<?=$v->keterangan?>)</h2>
                        </div>
                        <?php
                        if ($v->id_variabel == 1){
                            $indikator = $service;
                        }elseif ($v->id_variabel == 2){
                            $indikator = $website;
                        }elseif ($v->id_variabel == 3){
                            $indikator = $user;
                        }
                        ?>
                        <?php $no = 1; foreach ($indikator as $i){ ?>
                            <h6 class="mb-0">
                                <?=$no++ ;?>. <?=$i->nama_indikator ;?>
                            </h6>
                            <p>
                                <?=$i->definisi?>
                            </p>
                        <?php } ?>
                </div>
                    <br>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

