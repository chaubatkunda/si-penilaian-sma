<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
            <p><?php echo $this->session->flashdata('warning'); ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('add_tu'); ?>" class="btn btn-outline-primary mb-3">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tu as $t) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $t->nip; ?></td>
                                    <td><?php echo $t->nama; ?></td>
                                    <td>
                                        <?php
                                        if ($t->level == 1) {
                                            echo "Tata Usaha";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" id="hapus-siswa"><i class="fa fa-trash"></i></a>
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