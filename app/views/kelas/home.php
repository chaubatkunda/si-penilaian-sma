<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-home"></i> <?php echo $title; ?></h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('add-kelas'); ?>" class="btn btn-primary mb-3">Tambah
                <i class="fa fa-plus"></i>
            </a>
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kelas</th>
                                <th>Kelas</th>
                                <th>Jumlah Siswa </th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kelas as $kls) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $kls->kode_kelas; ?></td>
                                    <td><?php echo $kls->nama_kelas; ?></td>
                                    <td>
                                        <?php
                                        $id_kls = $kls->kode_kelas;
                                        $query = $this->db->get_where('t_siswa', ['kelas_id' => $id_kls])->num_rows();
                                        // print_r($query);
                                        ?>
                                        <span class="badge badge-dark"><?php echo $query; ?></span>
                                    </td>
                                    <td>
                                        <?php if ($query > 0) : ?>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        <?php else : ?>
                                            <a href="<?php echo base_url('hapus-kelas/' . $kls->id_kelas); ?>" class="btn btn-danger btn-sm" id="hapus-siswa"><i class="fa fa-trash"></i></a>
                                        <?php endif; ?>
                                        <?php if ($this->fungsi->user_login()->level == 3) : ?>
                                            <a href=" <?php echo base_url('print_out/siswa/kelas/' . $kls->kode_kelas); ?>" class="btn btn-warning btn-sm" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach;; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>