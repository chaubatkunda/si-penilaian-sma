<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php if ($this->fungsi->user_login()->level == 1) : ?>
                <a href="<?php echo base_url('add_tahun_ajaran'); ?>" class="btn btn-primary mb-3">Tambah
                    <i class="fa fa-plus"></i>
                </a>
            <?php else : ?>
                <a href=" <?php echo base_url('print_out/siswa'); ?>" class="btn btn-warning mb-3" target="_blank">Cetak
                    <i class="fa fa-print"></i>
                </a>
            <?php endif; ?>
            <?php echo $this->session->flashdata('warning'); ?>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun Ajaran</th>
                                <th>Ket</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tahun as $t) :
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $t->thn_ajaran; ?></td>
                                    <td><?php echo $t->ket_thn_ajaran; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('edit_tahun_ajaran/' . $t->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo base_url('delete_tahun_ajaran/' . $t->id); ?>" class="btn btn-danger btn-sm">Hapus</a>
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