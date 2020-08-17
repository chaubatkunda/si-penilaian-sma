<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="tile">
                <h5 class="text-center">
                    DATA SISWA <br>
                    SMA BAHRUL MAGHFIROH
                </h5>
                <div class="row">
                    <div class="col-md-2">
                        <span>Mapel</span> <br>
                        <span>Kode Mapel</span> <br>
                        <span>Guru Mapel</span>
                    </div>
                    <div class="col-md-4 text-left">
                        <span><?php echo $guru->nama_mapel; ?></span> <br>
                        <span><?php echo $guru->kode_mapel; ?></span> <br>
                        <span><?php echo $guru->nama_guru; ?></span>
                    </div>
                </div>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">NIS</th>
                                <th rowspan="2">Nama</th>
                                <th colspan="12" class="text-center">Nilai</th>
                                <th rowspan="2">NA</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                                <th>11</th>
                                <th>12</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $kd = $this->db->get_where('t_kd', ['']);
                            $no = 1;
                            foreach ($nilai as $n) :
                                $query = $this->db->get_where(
                                    't_nilai',
                                    [
                                        'kelas_id' => $n->kelas_id,
                                        'mapel_id'  => $kode,
                                        'siswa_id'  => $n->nis
                                    ]
                                )->result();
                                $querynum = $this->db->get_where(
                                    't_nilai',
                                    [
                                        'kelas_id' => $n->kelas_id,
                                        'mapel_id'  => $kode,
                                        'siswa_id'  => $n->nis
                                    ]
                                )->num_rows();
                                $row = 12;
                                $rows = $row - $querynum;
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $n->nis; ?></td>
                                    <td><?php echo $n->nama; ?></td>
                                    <?php foreach ($query as $q) : ?>
                                        <td><?php echo $q->nilai; ?></td>
                                    <?php endforeach; ?>
                                    <?php for ($i = 0; $i < $rows; $i++) : ?>
                                        <td> - <?php [$i]; ?></td>
                                    <?php endfor; ?>

                                    <td>
                                        <?php
                                        $query = $this->db->query("SELECT AVG(nilai) as rata2 FROM t_nilai WHERE siswa_id = '$n->nis' AND mapel_id = '$kode' ")->result();
                                        foreach ($query as $q) : ?>
                                            <span class="badge badge-primary">
                                                <?php echo round($q->rata2); ?>
                                            </span>
                                        <?php endforeach; ?>
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