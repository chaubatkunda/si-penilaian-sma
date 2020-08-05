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
                        <th>NIP</th>
                        <td><?php echo $tu->nip; ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $tu->nama; ?></td>
                    </tr>
                    <tr>
                        <th>Telp</th>
                        <td><?php echo $tu->telp; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo $tu->alamat; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="<?php echo base_url('edit_tata_usaha/' . $tu->id_tu); ?>" class="btn btn-success" title="Edit Siswa">
                                Edit <i class="fa fa-pencil"></i>
                            </a>
                            <a href="<?php echo base_url('tata_usaha'); ?>" class="btn btn-danger">
                                Kembali <i class="fa fa-arrow-circle-left"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>