<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- <a href="<?php echo base_url('add-nilai'); ?>" class="btn btn-outline-primary mb-3">Tambah <i class="fa fa-plus" aria-hidden="true"></i></a> -->
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($nilai as $n) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <?php if ($this->fungsi->user_login()->level == 2) : ?>
                                            <a href="<?php echo base_url('nilai/kelas/' . $n->kode_kelas . "?mapel=" . $n->kode_mapel); ?>"><?php echo $n->nama_mapel; ?></a>
                                        <?php else : ?>
                                            <?php echo $n->nama_mapel; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $n->nama_kelas; ?></td>
                                    <td>
                                        <?php if ($this->fungsi->user_login()->level == 1) : ?>
                                            <a href="" class="btn btn-outline-success btn-sm">Edit <i class="fa fa-pencil"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-sm">Hapus <i class="fa fa-trash"></i></a>
                                        <?php else : ?>
                                            <?php if ($this->fungsi->user_login()->level == 3) : ?>
                                                <a href="<?php echo base_url('print_out/nilai_siswa/' . $n->kode_kelas . "?kode=" . $n->kode_mapel); ?>" target="_blank" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-print"></i>
                                                </a>
                                                <a href="<?php echo base_url('print_out/cetak_siswa/' . $n->kode_kelas . "?kode=" . $n->kode_mapel); ?>" class="btn btn-success btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            <?php elseif ($this->fungsi->user_login()->level == 2) : ?>
                                                <a href="<?php echo base_url('print_out/cetak_siswa/' . $n->kode_kelas . "?kode=" . $n->kode_mapel); ?>" class="btn btn-success btn-sm" target="_blank">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            <?php endif; ?>
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