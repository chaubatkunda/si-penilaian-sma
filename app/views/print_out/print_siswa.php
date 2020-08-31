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
                data siswa
                kelas <?php echo $kelas->nama_kelas; ?><br>
                sma bahrul maghfiroh
            </h4>
        </div>
        <div class="title-body">
            <!-- <div class="row">
                <div class="column side">
                    <div class="title-cap">
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column mapel">
                                    Mapel
                                </div>
                                <div class="column mapel">
                                    :
                                </div>
                            </div>
                        </div>
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column mapel">
                                    Kelas/Semester
                                </div>
                                <div class="column mapel">
                                    : X IPA/Ganjil
                                </div>
                            </div>
                        </div>
                        <div class="title-mapel">
                            <div class="row">
                                <div class="column mapel">
                                    Tahun Pelajaran
                                </div>
                                <div class="column mapel">
                                    : 2019/2020
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column middle">
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
                </div>

                <div class="column side">
                    <h2>Side</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                </div>
            </div> -->

            <div class="row">
                <div class="tabel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($siswa as $sw) :
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $sw->nis; ?></td>
                                    <td><?php echo $sw->nama; ?></td>
                                    <td><?php echo $sw->tempat_lahir; ?></td>
                                    <td><?php echo indoDate($sw->tgl_lahir); ?></td>
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