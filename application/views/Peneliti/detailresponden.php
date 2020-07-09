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
            <div class="mx-auto" style="width: 100%">
                <div class="mb-4 bg-primary">
                    <h2 class="section-heading text-center">
                        <span class="section-heading-lower">Detail Responden</span>
                    </h2>
                </div>
                <div class="bg-faded rounded p-4">
                    <p class="text-center">"<?php echo $judul ?>"</p>
                    <?php if (empty($responden)){ ?>
                        <div class="cta-inner text-center rounded text-dark">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Uppsss !!!</span>
                                <span class="section-heading-lower">Responden Kosong</span>
                            </h2>
                            <p class="mb-0">Belum ada responden yang mengisi kuesioner penelitian anda.</p>
                        </div>
                        <br>
                        <div class="text-center">
                            <a class="btn btn-danger" href="<?=site_url('Peneliti/responden')?>"><li class="fa fa-arrow-left"></li> Kembali</a>
                        </div>
                    <?php } else { ?>
                    <table class="table table-hover">
                        <thead>
                        <th>No</th>
                        <th>Nama Responden</th>
                        <th>NIM</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($responden as $p){ ?>
                            <tr>
                                <td><?php echo ++$jlhpage ;?></td>
                                <td><?php echo $p->nama_responden ;?></td>
                                <td><?php echo $p->NIM ;?></td>
                                <td><?php echo $p->fakultas ;?></td>
                                <td><?php echo $p->jurusan ;?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?=$paging?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
