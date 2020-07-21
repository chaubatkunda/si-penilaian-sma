<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('add.waka'); ?>" class="btn btn-primary mb-3">Tambah
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($waka as $w) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $w->nip; ?></td>
                                    <td><?php echo $w->nama_guru; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('hapus-waka/' . $w->id_waka . "?&id=" . $w->guru_id); ?>" class="btn btn-outline-danger btn-sm" id="hapus-siswa">
                                            <i class="fa fa-trash"></i>
                                        </a>
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