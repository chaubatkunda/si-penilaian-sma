<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="tile">
                <div class="mb-2">
                    <a href="<?php echo base_url('kompetensi.dasar'); ?>" class="btn btn-success btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <?php if ($this->fungsi->user_login()->level == 1) : ?>
                        <?php if (empty($kd)) : ?>
                            <a href="<?php echo base_url('add-kd/' . $mapel->kode_mapel); ?>" class="btn btn-primary btn-sm">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a>
                        <?php else : ?>
                            <a href="<?php echo base_url('tambah-detai-kd/' . $mapel->kode_mapel); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php echo $this->session->flashdata('warning'); ?>

                <table class="table" id="sampleTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kompetensi Dasar</th>
                            <th>Materi Pembelajaran</th>
                            <?php if ($this->fungsi->user_login()->level == 1) : ?>
                                <th>Opsi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kd as $k) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $k->kd . "&nbsp" . $k->ket_kd; ?></td>
                                <td><?php echo $k->sub_kd; ?></td>
                                <?php if ($this->fungsi->user_login()->level == 1) : ?>
                                    <td>
                                        <a href="<?php echo base_url('edit-kd/' . $k->id_kd . "?kode=" . $k->kode_mapel); ?>" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="<?php echo base_url('hapus-kd/' . $k->id_kd . "?id=" . $k->mapel_id); ?>" class="btn btn-outline-danger btn-sm" id="hapus-siswa">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</main>