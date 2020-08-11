<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($nilai as $n) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $n->nis; ?></td>
                                    <td><?php echo $n->nama; ?></td>
                                    <td>
                                        <?php
                                        $query = $this->db->query("SELECT AVG(nilai) as rata2 FROM t_nilai WHERE siswa_id = '$n->nis' AND mapel_id = '$mapel' ")->result();
                                        foreach ($query as $q) : ?>
                                            <span class="badge badge-primary">
                                                <?php echo round($q->rata2); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </td>
                                    <td>
                                        <?php if (empty($kd)) : ?>
                                            <a href="#" class="btn btn-outline-danger btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        <?php else : ?>
                                            <a href="<?php echo base_url('guru/nilai_siswa/' . $kd->mapel_id . "?siswa=" . $n->nis . "&mapel=" . $mapel . "&kelas=" . $n->kelas_id); ?>" class="btn btn-outline-primary btn-sm">
                                                <i class="fa fa-eye"></i>
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