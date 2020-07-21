<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
            <p><?php echo $this->session->flashdata('warning'); ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('add-guru'); ?>" class="btn btn-outline-primary mb-3">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a>
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
                            <?php
                            $no = 1;
                            foreach ($guru as $gr) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $gr->nip; ?></td>
                                    <td><?php echo $gr->nama_guru; ?></td>
                                    <td>
                                        <?php if ($gr->jabatan == 1) : ?>
                                            <small class="text-primary">Kepala Sekolah</small>
                                        <?php elseif ($gr->jabatan == 2) : ?>
                                            <small class="text-primary">Waka</small>
                                        <?php else : ?>
                                            <small class="text-primary">Guru</small>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('detail-guru/' . $gr->id_guru); ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></i></a>
                                        <a href="<?php echo base_url('edit-guru/' . $gr->id_guru); ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo base_url('hapus-guru/' . $gr->id_guru); ?>" class="btn btn-danger btn-sm" id="hapus-siswa"><i class="fa fa-trash"></i></a>
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