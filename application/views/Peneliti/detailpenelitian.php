<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/5/2018
 * Time: 7:20 PM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="mx-auto" style="width: 100%">
                <div class="mb-4 bg-primary">
                    <h2 class="section-heading text-center">
                        <!--                    <span class="section-heading-upper">Penelitian</span>-->
                        <span class="section-heading-lower">Hasil Penelitian</span>
                    </h2>
                </div>
                <div class="bg-faded rounded p-4">
                    <label>Rata-Rata GAP Variabel Service Quality :</label>
                    <table class="table table-hover table-striped">
                        <thead>
                        <th width="15px">No</th>
                        <th>Nama Indikator</th>
                        <th>Score</th>
                        <th class = "text-center">Harapan</th>
                        <th>GAP</th>
                        </thead>
                        <tbody>
                        <?php $no1 = 1; foreach ($servicequality as $s){?>
                            <tr>
                                <td><?php echo $no1++ ?></td>
                                <td><?php echo $s->nama_indikator ;?></td>
                                <td>
                                    <?php
                                    $where1 = array('tb_pertanyaan.id_indikator' => $s->id_indikator, 'tb_jawaban.id_penelitian' => $s->id_penelitian);
                                    $indikator = $this->db->select('*')
                                        ->from('tb_pertanyaan')
                                        ->join('tb_jawaban', 'tb_pertanyaan.id_pertanyaan = tb_jawaban.id_pertanyaan')
                                        ->join('tb_indikator', 'tb_pertanyaan.id_indikator = tb_indikator.id_indikator')
                                        ->where($where1)->get();
                                    $n1 = $indikator->num_rows();
                                    $rata1 = intval($s->skor)/$n1;
                                    $gapvariabel1[] = $gap = $rata1 - 4;
                                    $cekgap1[$s->nama_indikator] = $gap;
                                    echo number_format($rata1, 2) ;?>
                                </td>
                                <td class = "text-center"><?php echo $nilai= 4 ?></td>
                                <td>
                                    <?php
                                    echo number_format($gap, 2);
                                    ?>
                                </td>
                            </tr>

                        <?php } ?>
                        <tr>
                            <?php
                            $mingap1 = min($gapvariabel1);
                            $gapterbesar1 = array_search($mingap1, $cekgap1);
                            ?>
                            <td colspan="4" class="text-center">Indikator dengan GAP Tertinggi adalah <?php echo $gapterbesar1?></td>
                            <td><?php echo number_format($mingap1, 2);?></td>
                        </tr>
                    </table>
                </div>
                <br>

                <div class="bg-faded rounded p-4">
                    <label>Rata-Rata GAP Variabel Website Quality :</label>
                    <table class="table table-hover table-striped">
                        <thead>
                        <th width="15px">No</th>
                        <th>Nama Indikator</th>
                        <th>Score</th>
                        <th class = "text-center">Harapan</th>
                        <th>GAP</th>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($websitequality as $w){?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $w->nama_indikator ;?></td>
                                <td>
                                    <?php
                                    $where2 = array('tb_pertanyaan.id_indikator' => $w->id_indikator, 'tb_jawaban.id_penelitian' => $w->id_penelitian);
                                    $indikator2 = $this->db->select('*')
                                        ->from('tb_pertanyaan')
                                        ->join('tb_jawaban', 'tb_pertanyaan.id_pertanyaan = tb_jawaban.id_pertanyaan')
                                        ->join('tb_indikator', 'tb_pertanyaan.id_indikator = tb_indikator.id_indikator')
                                        ->where($where2)->get();
                                    $n2 = $indikator2->num_rows();
                                    $rata2 = intval($w->skor)/$n2;
                                    $gapvariabel2[] = $gap = $rata2 - 2;
                                    $cekgap2[$w->nama_indikator] = $gap;
                                    echo number_format($rata2, 2) ;
                                    ?>
                                </td>
                                <td class = text-center> <?php echo $nilai2 = 4 ?> </td>
                                <td>
                                    <?php
                                    echo number_format($gap, 2);
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <?php
                            $mingap2 = min($gapvariabel2);
                            $gapterbesar2 = array_search($mingap2, $cekgap2);
                            ?>
                            <td colspan="4" class="text-center">Indikator dengan GAP Tertinggi adalah <?php echo $gapterbesar2 ?></td>
                            <td><?php echo number_format($mingap2, 2);?></td>
                        </tr>
                    </table>
                </div>
                <br>

                <div class="bg-faded rounded p-4">
                    <label>Rata-Rata GAP Variabel User Satisfaction :</label>
                    <table class="table table-hover table-striped">
                        <thead>
                        <th width="15px">No</th>
                        <th>Nama Indikator</th>
                        <th>Score</th>
                        <th class = "text-center">Harapan</th>
                        <th>GAP</th>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($usersatisfaction as $u){?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama_indikator ;?></td>
                                <td>
                                    <?php
                                    $where3 = array('tb_pertanyaan.id_indikator' => $u->id_indikator, 'tb_jawaban.id_penelitian' => $u->id_penelitian);
                                    $indikator2 = $this->db->select('*')
                                        ->from('tb_pertanyaan')
                                        ->join('tb_jawaban', 'tb_pertanyaan.id_pertanyaan = tb_jawaban.id_pertanyaan')
                                        ->join('tb_indikator', 'tb_pertanyaan.id_indikator = tb_indikator.id_indikator')
                                        ->where($where3)->get();
                                    $n3 = $indikator2->num_rows();
                                    $rata3 = intval($u->skor)/$n3;
                                    echo number_format($rata3, 2) ;
                                    $gapvariabel3[] = $gap3 = $rata3 - 4;
                                    $cekgap3[$u->nama_indikator] = $gap3;
                                    ?>
                                </td>
                                <td class = text-center> <?php echo $nilai3 = 4 ?> </td>
                                <td>
                                    <?php
                                    echo number_format($gap3, 2);
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <?php
                            $mingap3 = min($gapvariabel3);
                            $gapterbesar3 = array_search($mingap3, $cekgap3);
                            ?>
                            <td colspan="4" class="text-center">Indikator dengan GAP Tertinggi adalah <?php echo $gapterbesar3?></td>
                            <td><?php echo number_format($mingap3, 2) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
