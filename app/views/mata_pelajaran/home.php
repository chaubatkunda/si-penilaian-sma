<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->session->flashdata('warning'); ?>
            <?php if (!$this->fungsi->user_login()->level == 1) : ?>
                <a href="<?php echo base_url('add.mapel'); ?>" class="btn btn-primary mb-3">Tambah
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            <?php endif; ?>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mapel</th>
                                <th>Nama Mapel</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($mapel as $m) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $m->kode_mapel; ?></td>
                                    <td><?php echo $m->nama_mapel; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('detail.mapel/' . $m->kode_mapel); ?>" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <?php if (!$this->fungsi->user_login()->level == 1) : ?>
                                            <a href="<?php echo base_url('edit.mapel/' . $m->kode_mapel); ?>" class="btn btn-outline-success btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="<?php echo base_url('hapus.mapel/' . $m->id_mapel); ?>" class="btn btn-outline-danger btn-sm" id="hapus-siswa">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        <?php endif; ?>
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