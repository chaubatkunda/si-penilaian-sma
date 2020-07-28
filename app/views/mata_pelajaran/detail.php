<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="tile">
                <!-- <h3 class="tile-title">Simple Table</h3> -->
                <table class="table">
                    <tr>
                        <th>Nama Guru</th>
                        <td><?php echo $mapel->nama_guru; ?></td>
                    </tr>
                    <tr>
                        <th>Mata Pelajaran</th>
                        <td><?php echo $mapel->nama_mapel; ?> / <small class="text-primary"><?php echo $mapel->kode_mapel; ?></small></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>
                            <?php
                            $sql = "SELECT * FROM t_detail_mapel LEFT JOIN t_kelas ON t_kelas.kode_kelas = t_detail_mapel.kelas_id WHERE mapel_id = '$mapel->mapel_id'";
                            $query = $this->db->query($sql)->result();

                            ?>
                            <?php foreach ($query as $q) : ?>
                                <li><?php echo $q->nama_kelas; ?></li>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="<?php echo base_url('edit.mapel/' . $mapel->id_mapel); ?>" class="btn btn-success" title="Edit Siswa">
                                Edit
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="<?php echo base_url('mata.pelajaran'); ?>" class="btn btn-danger">
                                Kembali
                                <i class="fa fa-arrow-circle-left"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>