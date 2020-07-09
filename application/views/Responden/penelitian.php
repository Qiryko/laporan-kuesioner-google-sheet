<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/2/2018
 * Time: 9:28 PM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <div class="mb-4 bg-primary">
                    <h2 class="section-heading text-center">
                        <!--                    <span class="section-heading-upper">Penelitian</span>-->
                        <span class="section-heading-lower">Daftar Penelitian</span>
                    </h2>
                </div>
                <div class="bg-faded rounded p-4">
                    <table class="table table-hover">
                        <thead>
                        <th>No</th>
                        <th>Peneliti</th>
                        <th>Judul Penelitian</th>
                        <th>Target</th>
                        <th>Batas Waktu</th>
                        <th>Link</th>
                        <th>Aksi</th>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($penelitian as $p){ ?>
                            <tr>
                                <td><?php echo $no++ ;?></td>
                                <td><?php echo $p->nama_pen ;?></td>
                                <td><?php echo $p->judul_penelitian ;?></td>
                                <td><?php echo $p->target_responden ;?></td>
                                <td><?php echo $p->tgl_batas ;?></td>
                                <td><?php echo $p->link ;?></td>
                                <td>
                                    <?php if ($p->id_penelitian == $jawaban[$p->id_penelitian]){ ?>
                                        <a class="btn btn-success"><i class="fa fa-check"></i> Sudah Terisi</a>
                                    <?php } else{?>
                                        <a class="btn btn-info" href="<?=site_url('Responden/openingkuisioner/'.$p->id_penelitian)?>"><i class="fa fa-edit"></i> Kuesioner Pernyataan</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

