<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> <?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="tile">
                <a href="<?php echo base_url('historiguru'); ?>" class="btn btn-success btn-sm mb-2">Kembali</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tahun Ajaran</th>
                            <th>Mata Pelajaran</th>
                            <th>Kode Mata Pelajaran</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($guru as $g) : ?>
                            <tr>
                                <td><?php echo $g->thn_ajaran; ?></td>
                                <td><?php echo $g->nama_mapel; ?></td>
                                <td><?php echo $g->mapel_id; ?></td>
                                <td><?php echo $g->nama_kelas; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>