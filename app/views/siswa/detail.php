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
                        <th>NISN</th>
                        <td><?php echo $siswa->nis; ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $siswa->nama; ?></td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td><?php echo $siswa->tempat_lahir; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td><?php echo date('d-m-Y', strtotime($siswa->tgl_lahir)); ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>
                            <?php
                            $jk = $siswa->jk;
                            if ($jk == 1) {
                                echo "Pria";
                            } elseif ($jk == 2) {
                                echo "Wanita";
                            } else {
                                echo "";
                            }
                            ?>
                        </td>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td><?php echo $siswa->alamat; ?></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td><?php echo $siswa->nama_kelas; ?></td>
                    </tr>
                    <tr>
                        <th>Foto</th>
                        <td>
                            <img src="<?php echo base_url('assets/foto/siswa/') . $siswa->foto; ?>" width="110">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="<?php echo base_url('siswa'); ?>" class="btn btn-danger">Kembali</a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</main>