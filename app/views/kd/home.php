<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <!-- <th>Guru</th> -->
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($mapel as $k) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('detail-kd/' . $k->kode_mapel); ?>">
                                            <?php echo $k->nama_mapel; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $k->nama_kelas; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('detail-kd/' . $k->kode_mapel); ?>" class="btn btn-outline-info btn-sm">
                                            <i class="fa fa-eye"></i> Detail</i>
                                        </a>
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