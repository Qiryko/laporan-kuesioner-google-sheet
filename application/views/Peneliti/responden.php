<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 6/10/2018
 * Time: 4:05 AM
 */ ?>

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <div class="mb-4 bg-primary">
                    <h2 class="section-heading text-center">
                        <!--                    <span class="section-heading-upper">Penelitian</span>-->
                        <span class="section-heading-lower">Halaman Responden</span>
                    </h2>
                </div>
                <div class="bg-faded rounded p-4">
                <?php if (empty($penelitian)){ ?>
                    <div class="cta-inner text-center rounded text-dark">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Uppsss !!!</span>
                            <span class="section-heading-lower">Anda Belum Memiliki Penelitian</span>
                        </h2>
                        <p class="mb-0">Silahkan kembali ke Halaman Penelitian untuk memulai penelitian.</p>
                    </div>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="<?=site_url('Peneliti/penelitian')?>"><li class="fa fa-arrow-left"></li> Halaman Penelitian</a>
                    </div>
                <?php }else { ?>
                    <table class="table table-borderless">
                        <tbody>
                        <?php foreach ($penelitian as $p){ ?>
                        <tr>
                            <th width="17%">Judul Penelitian</th>
                            <td>:</td>
                            <td><?php echo $p->judul_penelitian ;?></td>
                        </tr>
                        <tr>
                            <th>Target Responden</th>
                            <td>:</td>
                            <td><?php echo $p->target_responden ;?> orang.</td>
                        </tr>
                        <tr>
                            <th>Responden Tercapai</th>
                            <td>:</td>
                            <td><?php $x = $this->db->select('*')->from('tb_jawaban')->where('id_penelitian', $p->id_penelitian)->group_by('id_responden')->get();
                                $x1 = $x->num_rows(); echo $x1;
                                ?> orang.
                            </td>
                        </tr>
                        <tr>
                            <th>Batas Waktu</th>
                            <td>:</td>
                            <td><?php echo $p->tgl_batas ;?></td>
                        </tr>
                        <tr>
                            <th>Aksi</th>
                            <td>:</td>
                            <td><a class="btn btn-info" href="<?=site_url('Peneliti/detailresponden/'.$p->id_penelitian)?>"><li class="fa fa-eye"> Lihat</li></a></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

