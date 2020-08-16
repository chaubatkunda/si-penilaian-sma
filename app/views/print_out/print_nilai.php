<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cetak.css'); ?>">
</head>

<body>
    <div class="cetak-header">
        <div class="cetak-title">
            <h4>
                data siswa <br>
                sma bahrul maghfiroh
            </h4>
            <hr>
        </div>
        <div class="title-body">
            <div class="row">
                <div class="column side">
                    <div class="title-cap">
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column mapel">
                                    Mapel
                                </div>
                                <div class="column mapel">
                                    : <?php echo $guru->nama_mapel; ?>
                                </div>
                            </div>
                        </div>
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column mapel">
                                    Kode Mapel
                                </div>
                                <div class="column mapel">
                                    : <?php echo $guru->kode_mapel; ?>
                                </div>
                            </div>
                        </div>
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column mapel">
                                    Guru Mapel
                                </div>
                                <div class="column mapel">
                                    : <?php echo $guru->nama_guru; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="column middle">
                    <div class="title-cap">
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column ket">
                                    4.1
                                </div>
                                <div class="column ket-mapel">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus culpa voluptates amet doloribus cupiditate provident.
                                </div>
                            </div>
                        </div>
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column ket">
                                    4.2
                                </div>
                                <div class="column ket-mapel">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus culpa voluptates amet doloribus cupiditate provident.
                                </div>
                            </div>
                        </div>
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column ket">
                                    4.3
                                </div>
                                <div class="column ket-mapel">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus culpa voluptates amet doloribus cupiditate provident.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="column side">
                    <h2>Side</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                </div> -->
            </div>

            <div class="row">
                <div class="tabel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">NIS</th>
                                <th rowspan="2">Nama</th>
                                <th colspan="12" align="center">Nilai</th>
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
</body>

</html>