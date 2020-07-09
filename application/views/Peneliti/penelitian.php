<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 6/1/2018
 * Time: 9:45 PM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <div class="mb-4 bg-primary">
                    <h2 class="section-heading text-center">
                        <!--                    <span class="section-heading-upper">Penelitian</span>-->
                        <span class="section-heading-lower">Data Penelitian</span>
                    </h2>
                </div>
                <div class="bg-faded rounded p-4">
                    <?php if (empty($penelitian)){ ?>
                        <div class="cta-inner text-center rounded text-dark">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Uppsss !!!</span>
                                <span class="section-heading-lower">Anda Belum Memiliki Penelitian</span>
                            </h2>
                            <p class="mb-0">Silahkan klik tombol "Mulai Penelitian" untuk memulai penelitian.</p>
                        </div>
                        <br>
                        <div class="text-center">
                            <a class="btn btn-primary" href="<?=site_url('Peneliti/tambahpenelitian')?>"><li class="fa fa-plus"></li> Mulai Penelitian</a>
                        </div>
                    <?php }else { ?>
                        <table class="table table-borderless">
                            <?php foreach ($penelitian as $p){ ?>
                                <tr>
                                    <th width="16%">Judul Penelitian</th>
                                    <td>:</td>
                                    <td><?php echo $p->judul_penelitian ;?></td>
                                </tr>
                                <tr>
                                    <th>Target Responden</th>
                                    <td>:</td>
                                    <td><?php echo $p->target_responden ;?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Mulai</th>
                                    <td>:</td>
                                    <td><?php echo $p->tgl_mulai ;?></td>
                                </tr>
                                <tr>
                                    <th>Batas Waktu</th>
                                    <td>:</td>
                                    <td><?php echo $p->tgl_batas ;?></td>
                                </tr>
                                <tr>
                                    <th>Link</th>
                                    <td>:</td>
                                    <td><a href="<?php echo $p->link ;?>"><?php echo $p->link ;?></a></td>
                                </tr>
                                <?php if ($p->status == 1){ ?>
                                    <tr>
                                        <th>Status</th>
                                        <td>:</td>
                                        <td>
                                            Dalam Proses
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Aksi</th>
                                        <td>:</td>
                                        <td>
                                            <a class="btn btn-success" href="<?=site_url('Peneliti/detailpenelitian/'.$p->id_penelitian)?>"><li class="fa fa-eye"> Hasil</li></a>
                                            <a data-confirm="Apakah anda yakin menutup penelitian ini?" class="tutup btn btn-primary" href="<?=site_url('Peneliti/ubahstatuspenelitian/'.$p->id_penelitian)?>"><li class="fa fa-close"> Tutup</li></a>
                                            <a data-confirm="Apakah anda yakin menghapus penelitian ini?" class="hapus btn btn-danger" href="<?=site_url('Peneliti/hapuspenelitian/'.$p->id_penelitian) ?>"><li class="fa fa-trash"> Hapus</li></a>
                                        </td>
                                    </tr>
                                <?php } else {?>
                                    <tr>
                                        <th>Status</th>
                                        <td>:</td>
                                        <td>
                                            Penelitian Telah Ditutup Pada Tanggal <?=$p->tgl_selesai ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Aksi</th>
                                        <td>:</td>
                                        <td>
                                            <a class="btn btn-success" href="<?=site_url('Peneliti/detailpenelitian/'.$p->id_penelitian)?>"><li class="fa fa-eye"> Hasil</li></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
