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
                        <td><?php echo $guru->nip; ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $guru->nama_guru; ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>
                            <?php if ($guru->jabatan == 3) : ?>
                                <small>Guru</small>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Telp</th>
                        <td><?php echo $guru->no_tlp; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo $guru->alamat_guru; ?></td>
                    </tr>
                    <tr>
                        <th>Foto</th>
                        <td>
                            <img src="<?php echo base_url('assets/foto/guru/') . $guru->foto; ?>" width="110">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="<?php echo base_url('guru'); ?>" class="btn btn-success">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</main>