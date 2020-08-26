<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-home"></i> <?php echo $title; ?></h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php if ($this->fungsi->user_login()->level == 1) : ?>
                <a href="<?php echo base_url('add_kelas/' . $kode); ?>" class="btn btn-primary mb-3">Tambah
                    <i class="fa fa-plus"></i>
                </a>
                <a href="<?php echo base_url('kelas'); ?>" class="btn btn-danger mb-3">Kembali
                    <!-- <i class="fa fa-plus"></i> -->
                </a>
            <?php endif; ?>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kelas as $k) :
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $k->nis; ?></td>
                                    <td><?php echo $k->nama; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('hapus-detail-kelas/' . $k->id . "?kode=" . $k->kode_kelas . "?&siswa=" . $k->nis); ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>