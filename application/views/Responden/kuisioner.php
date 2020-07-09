<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/2/2018
 * Time: 9:53 PM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <div class="mb-4 bg-primary">
                    <h2 class="section-heading text-center">
                        <!--                    <span class="section-heading-upper">Penelitian</span>-->
                        <span class="section-heading-lower">Kuesioner Pernyataan</span>
                    </h2>
                </div>
                <form action="<?=site_url('Responden/simpanjawaban')?>" method="post">
                    <?php foreach ($indikator as $i){ ?>
                        <div class="bg-faded rounded p-4">
                            <div class="mb-4">
                                <h2 class="text-center bg-primary" style="width: 100%; padding: 10px">Variabel Kualitas Layanan Indikator <?=$i->nama_indikator?></h2>
                                <p><?=$i->definisi?></p>
                            </div>
                            <?php
                            if ($i->id_indikator == 1){
                                $pertanyaan = $tangible;
                            }elseif ($i->id_indikator == 2){
                                $pertanyaan = $reliability;
                            }elseif ($i->id_indikator == 3){
                                $pertanyaan = $responsiveness;
                            }elseif ($i->id_indikator == 4){
                                $pertanyaan = $assurance;
                            }elseif ($i->id_indikator == 5){
                                $pertanyaan = $empathy;
                            }elseif ($i->id_indikator == 6){
                                $pertanyaan = $usability;
                            }elseif ($i->id_indikator == 7){
                                $pertanyaan = $informationquality;
                            }elseif ($i->id_indikator == 8){
                                $pertanyaan = $serviceinteraction;
                            }elseif ($i->id_indikator == 9){
                                $pertanyaan = $usersatisfaction;
                            }elseif ($i->id_indikator == 10){
                                $pertanyaan = $netbenefit;
                            }
                            ?>
                            <?php foreach ($pertanyaan as $p){ ?>
                                <h5 class="mb-0">
                                    <?=$p->pertanyaan.'*' ;?>
                                </h5>
                                <p>
                                    <input type="hidden" value="<?= $idresponden ?>" name="id_responden[]" readonly>
                                    <input type="hidden" value="<?= $idpenelitian ?>" name="id_penelitian[]" readonly>
                                    <input type="hidden" value="<?= $p->id_pertanyaan ?>" name="id_pertanyaan[]" readonly>
                                    <input type="radio" name="score[].<?= $p->id_pertanyaan ?>" value="4" required>Sangat Setuju<br>
                                    <input type="radio" name="score[].<?= $p->id_pertanyaan ?>" value="3" required>Setuju<br>
                                    <input type="radio" name="score[].<?= $p->id_pertanyaan ?>" value="2" required>Tidak Setuju<br>
                                    <input type="radio" name="score[].<?= $p->id_pertanyaan ?>" value="1" required>Sangat Tidak Setuju<br>
                                </p>
                            <?php } ?>
                        </div>
                        <br>
                    <?php } ?>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
